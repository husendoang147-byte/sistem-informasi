@extends('layouts.app')

@section('title', 'Tambah Pengurus')

@section('content')

<div class="container-fluid">

    {{-- Header --}}
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h2 class="fw-bold mb-1">
                <i class="fas fa-user-plus text-success me-2"></i>
                Tambah Pengurus
            </h2>

            <p class="text-muted mb-0">
                Tambahkan data pengurus baru ke dalam sistem.
            </p>
        </div>

        <a href="{{ route('pengurus.index') }}"
           class="btn btn-light border shadow-sm">

            <i class="fas fa-arrow-left me-1"></i>
            Kembali

        </a>

    </div>


    {{-- Form Card --}}
    <div class="row justify-content-center">

        <div class="col-xl-9 col-lg-10">

            <div class="card border-0 shadow-sm rounded-4 overflow-hidden">

                {{-- Card Header --}}
                <div class="card-header border-0 p-4 text-white"
                     style="background:linear-gradient(135deg,#166534,#15803d,#22c55e);">

                    <div class="d-flex align-items-center">

                        <div class="form-header-icon me-3">

                            <i class="fas fa-user-plus"></i>

                        </div>

                        <div>

                            <h5 class="mb-1 fw-bold">
                                Data Pengurus
                            </h5>

                            <small class="opacity-75">
                                Lengkapi informasi pengurus dengan benar.
                            </small>

                        </div>

                    </div>

                </div>


                {{-- Body --}}
                <div class="card-body p-4 p-md-5">

                    <form action="{{ route('pengurus.store') }}"
                          method="POST"
                          enctype="multipart/form-data">

                        @csrf


                        <div class="row g-4">

                            {{-- Foto --}}
                            <div class="col-md-4">

                                <div class="photo-section text-center">

                                    <div class="photo-preview mx-auto mb-3"
                                         id="photoPreview">

                                        <i class="fas fa-user"></i>

                                    </div>

                                    <h6 class="fw-bold mb-1">
                                        Foto Pengurus
                                    </h6>

                                    <p class="text-muted small mb-3">
                                        JPG, JPEG atau PNG
                                    </p>

                                    <label for="foto"
                                           class="btn btn-outline-success">

                                        <i class="fas fa-camera me-1"></i>
                                        Pilih Foto

                                    </label>

                                    <input type="file"
                                           name="foto"
                                           id="foto"
                                           class="d-none"
                                           accept="image/*">

                                    @error('foto')
                                        <div class="text-danger small mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                </div>

                            </div>


                            {{-- Data --}}
                            <div class="col-md-8">

                                {{-- Nama --}}
                                <div class="mb-4">

                                    <label class="form-label fw-semibold">

                                        <i class="fas fa-user text-success me-1"></i>

                                        Nama Lengkap

                                    </label>

                                    <input type="text"
                                           name="nama"
                                           value="{{ old('nama') }}"
                                           class="form-control form-control-lg @error('nama') is-invalid @enderror"
                                           placeholder="Masukkan nama lengkap"
                                           required>

                                    @error('nama')

                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>

                                    @enderror

                                </div>


                                {{-- Jabatan --}}
                                <div class="mb-4">

                                    <label class="form-label fw-semibold">

                                        <i class="fas fa-briefcase text-success me-1"></i>

                                        Jabatan

                                    </label>

                                    <select name="jabatan"
                                            class="form-select form-select-lg @error('jabatan') is-invalid @enderror"
                                            required>

                                        <option value="">
                                            -- Pilih Jabatan --
                                        </option>

                                        <option value="Ketua"
                                            {{ old('jabatan') == 'Ketua' ? 'selected' : '' }}>
                                            Ketua
                                        </option>

                                        <option value="Wakil Ketua"
                                            {{ old('jabatan') == 'Wakil Ketua' ? 'selected' : '' }}>
                                            Wakil Ketua
                                        </option>

                                        <option value="Sekretaris"
                                            {{ old('jabatan') == 'Sekretaris' ? 'selected' : '' }}>
                                            Sekretaris
                                        </option>

                                        <option value="Bendahara"
                                            {{ old('jabatan') == 'Bendahara' ? 'selected' : '' }}>
                                            Bendahara
                                        </option>

                                        <option value="Bidang Dakwah"
                                            {{ old('jabatan') == 'Bidang Dakwah' ? 'selected' : '' }}>
                                            Bidang Dakwah
                                        </option>

                                        <option value="Bidang Pendidikan"
                                            {{ old('jabatan') == 'Bidang Pendidikan' ? 'selected' : '' }}>
                                            Bidang Pendidikan
                                        </option>

                                        <option value="Bidang Sosial"
                                            {{ old('jabatan') == 'Bidang Sosial' ? 'selected' : '' }}>
                                            Bidang Sosial
                                        </option>

                                        <option value="Anggota"
                                            {{ old('jabatan') == 'Anggota' ? 'selected' : '' }}>
                                            Anggota
                                        </option>

                                    </select>

                                    @error('jabatan')

                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>

                                    @enderror

                                </div>


                                {{-- Nomor HP --}}
                                <div class="mb-4">

                                    <label class="form-label fw-semibold">

                                        <i class="fas fa-phone text-success me-1"></i>

                                        Nomor HP

                                    </label>

                                    <input type="text"
                                           name="no_hp"
                                           value="{{ old('no_hp') }}"
                                           class="form-control form-control-lg @error('no_hp') is-invalid @enderror"
                                           placeholder="Contoh: 081234567890">

                                    @error('no_hp')

                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>

                                    @enderror

                                </div>

                            </div>

                        </div>


                        {{-- Divider --}}
                        <hr class="my-4">


                        {{-- Tombol --}}
                        <div class="d-flex justify-content-end gap-2">

                            <a href="{{ route('pengurus.index') }}"
                               class="btn btn-light border px-4">

                                <i class="fas fa-times me-1"></i>
                                Batal

                            </a>

                            <button type="submit"
                                    class="btn btn-success px-4">

                                <i class="fas fa-save me-1"></i>
                                Simpan Pengurus

                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>


{{-- CSS --}}
<style>

.form-header-icon {

    width: 50px;
    height: 50px;

    border-radius: 15px;

    background: rgba(255,255,255,.15);

    display: flex;

    align-items: center;

    justify-content: center;

    font-size: 22px;
}


.form-control,
.form-select {

    border-radius: 12px;

    border: 1px solid #e5e7eb;

}


.form-control:focus,
.form-select:focus {

    border-color: #22c55e;

    box-shadow: 0 0 0 .2rem rgba(34,197,94,.12);

}


.photo-section {

    background: #f8fafc;

    border: 2px dashed #d1d5db;

    border-radius: 20px;

    padding: 30px 20px;

    height: 100%;

    min-height: 300px;

}


.photo-preview {

    width: 150px;

    height: 150px;

    border-radius: 50%;

    background: #dcfce7;

    color: #15803d;

    display: flex;

    align-items: center;

    justify-content: center;

    font-size: 60px;

    overflow: hidden;

    border: 5px solid white;

    box-shadow: 0 8px 20px rgba(0,0,0,.08);

}


.photo-preview img {

    width: 100%;

    height: 100%;

    object-fit: cover;

}


.btn-success {

    border-radius: 11px;

}


.btn-light {

    border-radius: 11px;

}


@media(max-width:768px) {

    .photo-section {

        min-height: auto;

        margin-bottom: 10px;

    }

}

</style>


{{-- Preview Foto --}}
<script>

document.getElementById('foto').addEventListener('change', function(event) {

    const file = event.target.files[0];

    const preview = document.getElementById('photoPreview');

    if (!file) return;

    const reader = new FileReader();

    reader.onload = function(e) {

        preview.innerHTML = `
            <img src="${e.target.result}" alt="Preview Foto">
        `;

    };

    reader.readAsDataURL(file);

});

</script>

@endsection