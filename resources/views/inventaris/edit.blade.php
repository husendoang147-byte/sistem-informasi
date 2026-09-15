@extends('layouts.app')

@section('title', 'Edit Inventaris')

@section('content')

<div class="container-fluid">

    <div class="mb-4">
        <h3 class="fw-bold">Edit Inventaris</h3>
        <p class="text-muted">Perbarui data barang inventaris</p>
    </div>

    <div class="card border-0 shadow-sm">

        <div class="card-body">

            <form action="{{ route('inventaris.update', $inventaris->id_inventaris) }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf
                @method('PUT')


                <div class="mb-3">
                    <label class="form-label fw-semibold">
                        Nama Barang
                    </label>

                    <input type="text"
                           name="nama_barang"
                           class="form-control @error('nama_barang') is-invalid @enderror"
                           value="{{ old('nama_barang', $inventaris->nama_barang) }}">

                    @error('nama_barang')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>


                <div class="mb-3">
                    <label class="form-label fw-semibold">
                        Jumlah Barang
                    </label>

                    <input type="number"
                           name="jumlah_barang"
                           class="form-control @error('jumlah_barang') is-invalid @enderror"
                           value="{{ old('jumlah_barang', $inventaris->jumlah_barang) }}"
                           min="0">

                    @error('jumlah_barang')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>


                <div class="mb-3">

                    <label class="form-label fw-semibold">
                        Foto Barang
                    </label>

                    @if($inventaris->foto)

                        <div class="mb-3">
                            <img src="{{ asset('storage/' . $inventaris->foto) }}"
                                 width="120"
                                 height="120"
                                 class="rounded"
                                 style="object-fit: cover;">
                        </div>

                    @endif

                    <input type="file"
                           name="foto"
                           class="form-control @error('foto') is-invalid @enderror"
                           accept="image/*">

                    <small class="text-muted">
                        Kosongkan jika tidak ingin mengganti foto.
                    </small>

                    @error('foto')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                <div class="mb-3">

                    <label class="form-label fw-semibold">
                        Keterangan
                    </label>

                    <textarea name="keterangan"
                              class="form-control"
                              rows="4">{{ old('keterangan', $inventaris->keterangan) }}</textarea>

                </div>


                <div class="d-flex gap-2">

                    <a href="{{ route('inventaris.index') }}"
                       class="btn btn-secondary">
                        Kembali
                    </a>

                    <button type="submit"
                            class="btn btn-success">
                        <i class="fas fa-save me-2"></i>
                        Simpan Perubahan
                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection