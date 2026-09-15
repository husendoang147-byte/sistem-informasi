<?php

namespace App\Http\Controllers;

use App\Models\Kas;
use App\Models\Donasi;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index(Request $request)
    {
        $tanggalMulai = $request->tanggal_mulai;
        $tanggalSelesai = $request->tanggal_selesai;

        $kasQuery = Kas::query();
        $donasiQuery = Donasi::query();

        if ($tanggalMulai) {
            $kasQuery->whereDate('tanggal', '>=', $tanggalMulai);
            $donasiQuery->whereDate('tanggal', '>=', $tanggalMulai);
        }

        if ($tanggalSelesai) {
            $kasQuery->whereDate('tanggal', '<=', $tanggalSelesai);
            $donasiQuery->whereDate('tanggal', '<=', $tanggalSelesai);
        }

        $dataKas = $kasQuery
            ->latest('tanggal')
            ->get();

        $dataDonasi = $donasiQuery
            ->latest('tanggal')
            ->get();

        $totalPemasukan = $dataKas
            ->where('jenis', 'Pemasukan')
            ->sum('nominal');

        $totalPengeluaran = $dataKas
            ->where('jenis', 'Pengeluaran')
            ->sum('nominal');

        $totalDonasi = $dataDonasi->sum('nominal');

        $saldo = $totalPemasukan - $totalPengeluaran;

        return view('laporan.index', compact(
            'dataKas',
            'dataDonasi',
            'totalPemasukan',
            'totalPengeluaran',
            'totalDonasi',
            'saldo',
            'tanggalMulai',
            'tanggalSelesai'
        ));
    }
}