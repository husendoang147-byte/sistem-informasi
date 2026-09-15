<?php

namespace App\Http\Controllers;

use App\Models\Kas;
use App\Models\Donasi;
use App\Models\Pengurus;
use App\Models\JadwalSholat;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        /*
        |--------------------------------------------------------------------------
        | Statistik Pengurus
        |--------------------------------------------------------------------------
        */

        $totalPengurus = Pengurus::count();


        /*
        |--------------------------------------------------------------------------
        | Statistik Kas
        |--------------------------------------------------------------------------
        */

        $totalPemasukan = Kas::where('jenis', 'Pemasukan')
            ->sum('nominal');

        $totalPengeluaran = Kas::where('jenis', 'Pengeluaran')
            ->sum('nominal');

        $saldoKas = $totalPemasukan - $totalPengeluaran;


        /*
        |--------------------------------------------------------------------------
        | Statistik Donasi
        |--------------------------------------------------------------------------
        */

        $totalDonasi = Donasi::count();

        $totalNominalDonasi = Donasi::sum('nominal');

        $donasiTerbaru = Donasi::latest('tanggal')
            ->take(5)
            ->get();


        /*
        |--------------------------------------------------------------------------
        | Jadwal Sholat
        |--------------------------------------------------------------------------
        |
        | Ambil jadwal terbaru.
        | Jadi walaupun tanggal hari ini belum dimasukkan,
        | dashboard tetap menampilkan jadwal yang tersedia.
        |
        */

        $jadwalSholat = JadwalSholat::latest('tanggal')
            ->first();


        /*
        |--------------------------------------------------------------------------
        | Grafik Kas
        |--------------------------------------------------------------------------
        */

        $grafik = Kas::selectRaw("
                MONTH(tanggal) as bulan,

                SUM(
                    CASE
                        WHEN jenis = 'Pemasukan'
                        THEN nominal
                        ELSE 0
                    END
                ) as pemasukan,

                SUM(
                    CASE
                        WHEN jenis = 'Pengeluaran'
                        THEN nominal
                        ELSE 0
                    END
                ) as pengeluaran
            ")
            ->groupBy(DB::raw("MONTH(tanggal)"))
            ->orderBy(DB::raw("MONTH(tanggal)"))
            ->get();


        /*
        |--------------------------------------------------------------------------
        | Nama Bulan
        |--------------------------------------------------------------------------
        */

        $namaBulan = [
            1  => 'Jan',
            2  => 'Feb',
            3  => 'Mar',
            4  => 'Apr',
            5  => 'Mei',
            6  => 'Jun',
            7  => 'Jul',
            8  => 'Agu',
            9  => 'Sep',
            10 => 'Okt',
            11 => 'Nov',
            12 => 'Des',
        ];


        /*
        |--------------------------------------------------------------------------
        | Data Grafik
        |--------------------------------------------------------------------------
        */

        $label = array_values($namaBulan);

        $pemasukan = array_fill(0, 12, 0);

        $pengeluaran = array_fill(0, 12, 0);


        foreach ($grafik as $g) {

            $index = $g->bulan - 1;

            $pemasukan[$index] = (int) $g->pemasukan;

            $pengeluaran[$index] = (int) $g->pengeluaran;
        }


        /*
        |--------------------------------------------------------------------------
        | Data Dashboard
        |--------------------------------------------------------------------------
        */

        $data = [

            'totalPengurus' => $totalPengurus,

            'saldoKas' => $saldoKas,

            'totalDonasi' => $totalDonasi,

            'totalNominalDonasi' => $totalNominalDonasi,

            'totalPengumuman' => 0,

            'totalPemasukan' => $totalPemasukan,

            'totalPengeluaran' => $totalPengeluaran,

        ];


        /*
        |--------------------------------------------------------------------------
        | Kirim ke View
        |--------------------------------------------------------------------------
        */

        return view('dashboard.index', compact(
            'data',
            'label',
            'pemasukan',
            'pengeluaran',
            'donasiTerbaru',
            'jadwalSholat'
        ));
    }
}