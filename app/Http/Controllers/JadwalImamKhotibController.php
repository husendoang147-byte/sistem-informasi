<?php

namespace App\Http\Controllers;

use App\Models\JadwalImamKhotib;
use Illuminate\Http\Request;

class JadwalImamKhotibController extends Controller
{
    /**
     * Menampilkan daftar jadwal imam & khotib
     */
    public function index()
    {
        $jadwal = JadwalImamKhotib::latest('tanggal')->get();

        return view('jadwal-imam.index', compact('jadwal'));
    }


    /**
     * Form tambah jadwal
     */
    public function create()
    {
        return view('jadwal-imam.create');
    }


    /**
     * Menyimpan jadwal baru
     */
   public function store(Request $request)
{
    $request->validate([
        'tanggal' => 'required|date',
        'imam' => 'required|string|max:255',
        'khotib' => 'required|string|max:255',
        'bilal' => 'nullable|string|max:255',
        'keterangan' => 'nullable|string',
    ]);

    JadwalImamKhotib::create([
        'id_user' => auth()->id(),
        'tanggal' => $request->tanggal,
        'imam' => $request->imam,
        'khotib' => $request->khotib,
        'bilal' => $request->bilal,
        'keterangan' => $request->keterangan,
    ]);

    return redirect()
        ->route('jadwal-imam.index')
        ->with('success', 'Jadwal berhasil ditambahkan.');
}

    /**
     * Detail jadwal
     */
    public function show(JadwalImamKhotib $jadwalImamKhotib)
    {
        return view(
            'jadwal-imam.show',
            compact('jadwalImamKhotib')
        );
    }


    /**
     * Form edit
     */
    public function edit(JadwalImamKhotib $jadwalImamKhotib)
    {
        return view(
            'jadwal-imam.edit',
            compact('jadwalImamKhotib')
        );
    }


    /**
     * Update jadwal
     */
    public function update(
        Request $request,
        JadwalImamKhotib $jadwalImamKhotib
    ) {
        $request->validate([
            'tanggal' => 'required|date',
            'imam' => 'required|string|max:255',
            'khotib' => 'required|string|max:255',
            'bilal' => 'nullable|string|max:255',
            'keterangan' => 'nullable|string',
        ]);

        $jadwalImamKhotib->update([
            'tanggal' => $request->tanggal,
            'imam' => $request->imam,
            'khotib' => $request->khotib,
            'bilal' => $request->bilal,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()
            ->route('jadwal-imam.index')
            ->with('success', 'Jadwal berhasil diperbarui.');
    }


    /**
     * Hapus jadwal
     */
    public function destroy(JadwalImamKhotib $jadwalImamKhotib)
    {
        $jadwalImamKhotib->delete();

        return redirect()
            ->route('jadwal-imam.index')
            ->with('success', 'Jadwal berhasil dihapus.');
    }
}