<?php

namespace App\Http\Controllers;

use App\Models\Donasi;
use Illuminate\Http\Request;

class DonasiController extends Controller
{
    /**
     * Menampilkan semua data donasi
     */
    public function index()
    {
        $donasi = Donasi::latest('tanggal')->paginate(10);

        return view('donasi.index', compact('donasi'));
    }

    /**
     * Form tambah donasi
     */
    public function create()
    {
        return view('donasi.create');
    }

    /**
     * Menyimpan donasi
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_donatur' => 'required|string|max:255',
            'nominal' => 'required|numeric|min:1',
            'tanggal' => 'required|date',
            'keterangan' => 'nullable|string',
        ]);

        Donasi::create([
            'nama_donatur' => $request->nama_donatur,
            'nominal' => $request->nominal,
            'tanggal' => $request->tanggal,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()
            ->route('donasi.index')
            ->with('success', 'Data donasi berhasil ditambahkan.');
    }

    /**
     * Form edit donasi
     */
    public function edit(Donasi $donasi)
    {
        return view('donasi.edit', compact('donasi'));
    }

    /**
     * Memperbarui donasi
     */
    public function update(Request $request, Donasi $donasi)
    {
        $request->validate([
            'nama_donatur' => 'required|string|max:255',
            'nominal' => 'required|numeric|min:1',
            'tanggal' => 'required|date',
            'keterangan' => 'nullable|string',
        ]);

        $donasi->update([
            'nama_donatur' => $request->nama_donatur,
            'nominal' => $request->nominal,
            'tanggal' => $request->tanggal,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()
            ->route('donasi.index')
            ->with('success', 'Data donasi berhasil diperbarui.');
    }

    /**
     * Menghapus donasi
     */
    public function destroy(Donasi $donasi)
    {
        $donasi->delete();

        return redirect()
            ->route('donasi.index')
            ->with('success', 'Data donasi berhasil dihapus.');
    }
}