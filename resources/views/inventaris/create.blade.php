@extends('layouts.app')

@section('title', 'Tambah Inventaris')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="fw-bold mb-1">
                <i class="fas fa-boxes-stacked text-success me-2"></i>
                Tambah Inventaris
            </h3>

            <p class="text-muted mb-0">
                Tambahkan barang inventaris masjid
            </p>
        </div>

        <a href="{{ route('inventaris.index') }}"
           class="btn btn-outline-secondary rounded-3">

            <i class="fas fa-arrow-left me-2"></i>
            Kembali

        </a>
    </div>


    <div class="row justify-content-center">

        <div class="col-lg-8">

            <div class="card border-0 shadow-sm rounded-4 overflow-hidden">

                <div class="card-header bg-success text-white border-0 p-4">

                    <div class="d-flex align-items-center">

                        <div class="me-3"
                             style="
                                width:45px;
                                height:45px;
                                border-radius:12px;
                                background:rgba(255,255,255,.15);
                                display:flex;
                                align-items:center;
                                justify-content:center;
                             ">

                            <i class="fas fa-box"></i>

                        </div>

                        <div>

                            <h5 class="fw-bold mb-1">
                                Form Inventaris
                            </h5>

                            <small>
                                Isi data barang yang akan ditambahkan
                            </small>

                        </div>

                    </div>

                </div>


                <div class="card-body p-4">

                    <form action="{{ route('inventaris.store') }}"
                          method="POST"
                          enctype="multipart/form-data">

                        @csrf


                        {{-- NAMA BARANG --}}
                        <div class="mb-4">

                            <label class="form-label fw-semibold">
                                Nama Barang
                            </label>

                            <input
                                type="text"
                                name="nama_barang"
                                value="{{ old('nama_barang') }}"
                                class="form-control rounded-3 @error('nama_barang') is-invalid @enderror"
                                placeholder="Contoh: Karpet Masjid"
                                required
                            >

                            @error('nama_barang')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>


                        {{-- JUMLAH --}}
                        <div class="mb-4">

                            <label class="form-label fw-semibold">
                                Jumlah Barang
                            </label>

                            <input
                                type="number"
                                name="jumlah_barang"
                                value="{{ old('jumlah_barang') }}"
                                min="0"
                                class="form-control rounded-3 @error('jumlah_barang') is-invalid @enderror"
                                placeholder="Contoh: 10"
                                required
                            >

                            @error('jumlah_barang')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>


                        {{-- FOTO --}}
                        <div class="mb-4">

                            <label class="form-label fw-semibold">
                                Foto Barang
                            </label>

                            <input
                                type="file"
                                name="foto"
                                id="foto"
                                class="form-control rounded-3 @error('foto') is-invalid @enderror"
                                accept=".jpg,.jpeg,.png,.webp"
                            >

                            <div class="form-text">
                                Format JPG, JPEG, PNG, WEBP. Maksimal 2 MB.
                            </div>

                            @error('foto')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror


                            {{-- PREVIEW FOTO --}}
                            <div id="preview-container"
                                 class="mt-3"
                                 style="display:none;">

                                <p class="small fw-semibold text-muted mb-2">
                                    Preview Foto
                                </p>

                                <img
                                    id="preview"
                                    src=""
                                    alt="Preview"
                                    style="
                                        width:150px;
                                        height:150px;
                                        object-fit:cover;
                                        border-radius:15px;
                                        border:1px solid #e5e7eb;
                                    "
                                >

                            </div>

                        </div>


                        {{-- KETERANGAN --}}
                        <div class="mb-4">

                            <label class="form-label fw-semibold">
                                Keterangan
                            </label>

                            <textarea
                                name="keterangan"
                                rows="4"
                                class="form-control rounded-3"
                                placeholder="Masukkan keterangan barang jika diperlukan..."
                            >{{ old('keterangan') }}</textarea>

                        </div>


                        {{-- BUTTON --}}
                        <div class="d-flex justify-content-end gap-2 pt-2">

                            <a href="{{ route('inventaris.index') }}"
                               class="btn btn-light border rounded-3 px-4">

                                Batal

                            </a>

                            <button
                                type="submit"
                                class="btn btn-success rounded-3 px-4"
                            >

                                <i class="fas fa-save me-2"></i>
                                Simpan Barang

                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>


<script>

document.getElementById('foto').addEventListener('change', function(event) {

    const file = event.target.files[0];

    const preview = document.getElementById('preview');
    const container = document.getElementById('preview-container');

    if (file) {

        preview.src = URL.createObjectURL(file);

        container.style.display = 'block';

    } else {

        preview.src = '';

        container.style.display = 'none';

    }

});

</script>

@endsection