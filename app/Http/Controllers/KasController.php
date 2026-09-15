<?php

namespace App\Http\Controllers;

use App\Models\Kas;
use Illuminate\Http\Request;

class KasController extends Controller
{
    public function index()
    {
        $kas = Kas::latest()->paginate(10);

        return view('kas.index', compact('kas'));
    }

    public function create()
    {
        return view('kas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal'     => 'required|date',
            'jenis'       => 'required|in:Pemasukan,Pengeluaran',
            'keterangan'  => 'required|string|max:255',
            'nominal'     => 'required|numeric|min:1',
        ]);

        Kas::create($request->all());

        return redirect()
            ->route('kas-masjid.index')
            ->with('success', 'Data kas berhasil ditambahkan.');
    }

    public function show(Kas $kas_masjid)
    {
        //
    }

    public function edit(Kas $kas_masjid)
    {
        return view('kas.edit', [
            'kas' => $kas_masjid
        ]);
    }

    public function update(Request $request, Kas $kas_masjid)
    {
        $request->validate([
            'tanggal'     => 'required|date',
            'jenis'       => 'required|in:Pemasukan,Pengeluaran',
            'keterangan'  => 'required|string|max:255',
            'nominal'     => 'required|numeric|min:1',
        ]);

        $kas_masjid->update($request->all());

        return redirect()
            ->route('kas-masjid.index')
            ->with('success', 'Data kas berhasil diubah.');
    }

    public function destroy(Kas $kas_masjid)
    {
        $kas_masjid->delete();

        return redirect()
            ->route('kas-masjid.index')
            ->with('success', 'Data kas berhasil dihapus.');
    }
}