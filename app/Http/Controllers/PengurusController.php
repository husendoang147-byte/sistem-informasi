<?php

namespace App\Http\Controllers;

use App\Models\Pengurus;
use Illuminate\Http\Request;

class PengurusController extends Controller
{
    // Menampilkan daftar pengurus
    public function index()
    {
        $pengurus = Pengurus::latest()->paginate(10);

        return view('pengurus.index', compact('pengurus'));
    }

    // Form tambah pengurus
    public function create()
    {
        return view('pengurus.create');
    }

    // Simpan data
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'no_hp' => 'required',
            'alamat' => 'nullable',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $foto = null;

        if ($request->hasFile('foto')) {
            $foto = time().'.'.$request->foto->extension();
            $request->foto->move(public_path('uploads/pengurus'), $foto);
        }

        Pengurus::create([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
            'foto' => $foto,
        ]);

        return redirect()->route('pengurus.index')
            ->with('success', 'Data pengurus berhasil ditambahkan.');
    }

    // Form edit
    public function edit(Pengurus $pengurus)
    {
        return view('pengurus.edit', compact('pengurus'));
    }

    // Update data
    public function update(Request $request, Pengurus $pengurus)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'no_hp' => 'required',
            'alamat' => 'nullable',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $foto = $pengurus->foto;

        if ($request->hasFile('foto')) {

            if ($foto && file_exists(public_path('uploads/pengurus/'.$foto))) {
                unlink(public_path('uploads/pengurus/'.$foto));
            }

            $foto = time().'.'.$request->foto->extension();

            $request->foto->move(public_path('uploads/pengurus'), $foto);
        }

        $pengurus->update([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
            'foto' => $foto,
        ]);

        return redirect()->route('pengurus.index')
            ->with('success', 'Data pengurus berhasil diubah.');
    }

    // Hapus data
    public function destroy(Pengurus $pengurus)
    {
        if ($pengurus->foto && file_exists(public_path('uploads/pengurus/'.$pengurus->foto))) {
            unlink(public_path('uploads/pengurus/'.$pengurus->foto));
        }

        $pengurus->delete();

        return redirect()->route('pengurus.index')
            ->with('success', 'Data pengurus berhasil dihapus.');
    }
}