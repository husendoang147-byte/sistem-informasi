<?php

namespace App\Http\Controllers;

use App\Models\Inventaris;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class InventarisController extends Controller
{
    public function index()
    {
        $inventaris = Inventaris::latest('id_inventaris')->get();

        return view('inventaris.index', compact('inventaris'));
    }

    public function create()
    {
        return view('inventaris.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required|string|max:255',
            'jumlah_barang' => 'required|integer|min:0',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'keterangan' => 'nullable|string',
        ]);

        $data = [
            'nama_barang' => $request->nama_barang,
            'jumlah_barang' => $request->jumlah_barang,
            'keterangan' => $request->keterangan,
        ];

        /*
        |--------------------------------------------------------------------------
        | Upload Foto
        |--------------------------------------------------------------------------
        */

        if ($request->hasFile('foto')) {

            $folder = public_path('uploads/inventaris');

            if (!File::exists($folder)) {
                File::makeDirectory($folder, 0755, true);
            }

            $file = $request->file('foto');

            $namaFile = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();

            $file->move($folder, $namaFile);

            $data['foto'] = $namaFile;
        }

        Inventaris::create($data);

        return redirect()
            ->route('inventaris.index')
            ->with('success', 'Data inventaris berhasil ditambahkan.');
    }


    public function show(Inventaris $inventaris)
    {
        return view('inventaris.show', compact('inventaris'));
    }


    public function edit(Inventaris $inventaris)
    {
        return view('inventaris.edit', compact('inventaris'));
    }


    public function update(Request $request, Inventaris $inventaris)
    {
        $request->validate([
            'nama_barang' => 'required|string|max:255',
            'jumlah_barang' => 'required|integer|min:0',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'keterangan' => 'nullable|string',
        ]);

        $data = [
            'nama_barang' => $request->nama_barang,
            'jumlah_barang' => $request->jumlah_barang,
            'keterangan' => $request->keterangan,
        ];

        /*
        |--------------------------------------------------------------------------
        | Upload Foto Baru
        |--------------------------------------------------------------------------
        */

        if ($request->hasFile('foto')) {

            $folder = public_path('uploads/inventaris');

            if (!File::exists($folder)) {
                File::makeDirectory($folder, 0755, true);
            }

            // Hapus foto lama
            if ($inventaris->foto) {

                $fotoLama = $folder . '/' . $inventaris->foto;

                if (File::exists($fotoLama)) {
                    File::delete($fotoLama);
                }
            }

            // Simpan foto baru
            $file = $request->file('foto');

            $namaFile = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();

            $file->move($folder, $namaFile);

            $data['foto'] = $namaFile;
        }

        $inventaris->update($data);

        return redirect()
            ->route('inventaris.index')
            ->with('success', 'Data inventaris berhasil diperbarui.');
    }


    public function destroy(Inventaris $inventaris)
    {
        /*
        |--------------------------------------------------------------------------
        | Hapus Foto
        |--------------------------------------------------------------------------
        */

        if ($inventaris->foto) {

            $file = public_path(
                'uploads/inventaris/' . $inventaris->foto
            );

            if (File::exists($file)) {
                File::delete($file);
            }
        }

        $inventaris->delete();

        return redirect()
            ->route('inventaris.index')
            ->with('success', 'Data inventaris berhasil dihapus.');
    }
}