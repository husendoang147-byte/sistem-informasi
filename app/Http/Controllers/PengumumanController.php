<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PengumumanController extends Controller
{
    /**
     * Menampilkan semua pengumuman.
     */
    public function index()
    {
        $pengumuman = Pengumuman::latest('tanggal')->paginate(10);

        return view('pengumuman.index', compact('pengumuman'));
    }

    /**
     * Form tambah pengumuman.
     */
    public function create()
    {
        return view('pengumuman.create');
    }

    /**
     * Menyimpan pengumuman.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul'    => 'required|string|max:255',
            'isi'      => 'required|string',
            'tanggal'  => 'required|date',
            'kategori' => 'nullable|string|max:100',
            'status'   => 'required|string',
            'foto'     => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $data = [
            'judul'    => $request->judul,
            'isi'      => $request->isi,
            'tanggal'  => $request->tanggal,
            'kategori' => $request->kategori,
            'status'   => $request->status,
        ];

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')
                ->store('pengumuman', 'public');
        }

        Pengumuman::create($data);

        return redirect()
            ->route('pengumuman.index')
            ->with('success', 'Pengumuman berhasil ditambahkan.');
    }

    /**
     * Form edit pengumuman.
     */
    public function edit(Pengumuman $pengumuman)
    {
        return view('pengumuman.edit', compact('pengumuman'));
    }

    /**
     * Memperbarui pengumuman.
     */
    public function update(Request $request, Pengumuman $pengumuman)
    {
        $request->validate([
            'judul'    => 'required|string|max:255',
            'isi'      => 'required|string',
            'tanggal'  => 'required|date',
            'kategori' => 'nullable|string|max:100',
            'status'   => 'required|string',
            'foto'     => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $data = [
            'judul'    => $request->judul,
            'isi'      => $request->isi,
            'tanggal'  => $request->tanggal,
            'kategori' => $request->kategori,
            'status'   => $request->status,
        ];

        // Jika upload foto baru
        if ($request->hasFile('foto')) {

            // Hapus foto lama
            if ($pengumuman->foto) {
                Storage::disk('public')->delete($pengumuman->foto);
            }

            // Simpan foto baru
            $data['foto'] = $request->file('foto')
                ->store('pengumuman', 'public');
        }

        $pengumuman->update($data);

        return redirect()
            ->route('pengumuman.index')
            ->with('success', 'Pengumuman berhasil diperbarui.');
    }

    /**
     * Menghapus pengumuman.
     */
    public function destroy(Pengumuman $pengumuman)
    {
        // Hapus file foto
        if ($pengumuman->foto) {
            Storage::disk('public')->delete($pengumuman->foto);
        }

        $pengumuman->delete();

        return redirect()
            ->route('pengumuman.index')
            ->with('success', 'Pengumuman berhasil dihapus.');
    }
}