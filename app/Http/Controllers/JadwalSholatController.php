<?php

namespace App\Http\Controllers;

use App\Models\JadwalSholat;
use Illuminate\Http\Request;

class JadwalSholatController extends Controller
{
    /**
     * Menampilkan jadwal sholat.
     */
    public function index()
    {
        $jadwal = JadwalSholat::latest()->paginate(10);

        return view('jadwal.index', compact('jadwal'));
    }

    /**
     * Form tambah jadwal.
     */
    public function create()
    {
        return view('jadwal.create');
    }

    /**
     * Menyimpan jadwal baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'subuh' => 'required|date_format:H:i',
            'dzuhur' => 'required|date_format:H:i',
            'ashar' => 'required|date_format:H:i',
            'maghrib' => 'required|date_format:H:i',
            'isya' => 'required|date_format:H:i',
        ]);

        JadwalSholat::create([
            'subuh' => $request->subuh,
            'dzuhur' => $request->dzuhur,
            'ashar' => $request->ashar,
            'maghrib' => $request->maghrib,
            'isya' => $request->isya,
        ]);

        return redirect()
            ->route('jadwal.index')
            ->with('success', 'Jadwal sholat berhasil ditambahkan.');
    }

    /**
     * Form edit jadwal.
     */
    public function edit(JadwalSholat $jadwal)
    {
        return view('jadwal.edit', compact('jadwal'));
    }

    /**
     * Memperbarui jadwal.
     */
    public function update(Request $request, JadwalSholat $jadwal)
    {
        $request->validate([
            'subuh' => 'required|date_format:H:i',
            'dzuhur' => 'required|date_format:H:i',
            'ashar' => 'required|date_format:H:i',
            'maghrib' => 'required|date_format:H:i',
            'isya' => 'required|date_format:H:i',
        ]);

        $jadwal->update([
            'subuh' => $request->subuh,
            'dzuhur' => $request->dzuhur,
            'ashar' => $request->ashar,
            'maghrib' => $request->maghrib,
            'isya' => $request->isya,
        ]);

        return redirect()
            ->route('jadwal.index')
            ->with('success', 'Jadwal sholat berhasil diperbarui.');
    }

    /**
     * Menghapus jadwal.
     */
    public function destroy(JadwalSholat $jadwal)
    {
        $jadwal->delete();

        return redirect()
            ->route('jadwal.index')
            ->with('success', 'Jadwal sholat berhasil dihapus.');
    }
}