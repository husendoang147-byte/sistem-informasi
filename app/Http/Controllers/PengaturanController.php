<?php

namespace App\Http\Controllers;

use App\Models\Pengaturan;
use Illuminate\Http\Request;

class PengaturanController extends Controller
{
    public function index()
    {
        $pengaturan = Pengaturan::first();

        return view('pengaturan.index', compact('pengaturan'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'nama_masjid'   => 'required|string|max:255',
            'deskripsi'     => 'nullable|string',
            'alamat'        => 'nullable|string',
            'no_hp'         => 'nullable|string|max:30',
            'email'         => 'nullable|email|max:255',
            'tahun_berdiri' => 'nullable|string|max:10',
            'website'       => 'nullable|string|max:255',
        ]);

        $pengaturan = Pengaturan::first();

        if (!$pengaturan) {
            $pengaturan = new Pengaturan();
        }

        $pengaturan->nama_masjid = $request->nama_masjid;
        $pengaturan->deskripsi = $request->deskripsi;
        $pengaturan->alamat = $request->alamat;
        $pengaturan->no_hp = $request->no_hp;
        $pengaturan->email = $request->email;
        $pengaturan->tahun_berdiri = $request->tahun_berdiri;
        $pengaturan->website = $request->website;

        $pengaturan->save();

        return redirect()
            ->route('pengaturan.index')
            ->with('success', 'Pengaturan berhasil diperbarui.');
    }
}