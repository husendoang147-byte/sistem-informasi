@extends('layouts.app')

@section('title', 'Tambah Donasi')

@section('content')

<div class="container-fluid">

    {{-- HEADER --}}
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h2 class="fw-bold mb-1">
                <i class="fas fa-hand-holding-heart text-success me-2"></i>
                Tambah Donasi
            </h2>

            <p class="text-muted mb-0">
                Catat donasi yang diterima oleh masjid.
            </p>
        </div>

        <a href="{{ route('donasi.index') }}"
           class="btn btn-light border shadow-sm rounded-3 px-4">

            <i class="fas fa-arrow-left me-1"></i>
            Kembali

        </a>

    </div>


    {{-- FORM --}}
    <div class="row justify-content-center">

        <div class="col-xl-8 col-lg-9">

            <div class="card border-0 shadow-sm rounded-4 overflow-hidden">

                {{-- HEADER CARD --}}
                <div class="donasi-header">

                    <div class="donasi-header-icon">

                        <i class="fas fa-heart"></i>

                    </div>

                    <div>

                        <h5 class="mb-1 fw-bold">
                            Data Donasi
                        </h5>

                        <small>
                            Masukkan informasi donasi dengan lengkap.
                        </small>

                    </div>

                </div>


                {{-- BODY --}}
                <div class="card-body p-4 p-md-5">

                    <form action="{{ route('pengumuman.store') }}"
      method="POST"
      enctype="multipart/form-data">

                        @csrf


                        {{-- NAMA DONATUR --}}
                        <div class="mb-4">

                            <label for="nama"
                                   class="form-label fw-semibold">

                                <i class="fas fa-user text-success me-1"></i>

                                Nama Donatur

                            </label>

                            <input type="text"
                                   name="nama"
                                   id="nama"
                                   value="{{ old('nama') }}"
                                   class="form-control form-control-lg rounded-3 @error('nama') is-invalid @enderror"
                                   placeholder="Contoh: Ahmad Fauzi"
                                   required>

                            @error('nama')

                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>

                            @enderror

                        </div>


                        {{-- TANGGAL --}}
                        <div class="mb-4">

                            <label for="tanggal"
                                   class="form-label fw-semibold">

                                <i class="fas fa-calendar-alt text-success me-1"></i>

                                Tanggal Donasi

                            </label>

                            <input type="date"
                                   name="tanggal"
                                   id="tanggal"
                                   value="{{ old('tanggal', date('Y-m-d')) }}"
                                   class="form-control form-control-lg rounded-3 @error('tanggal') is-invalid @enderror"
                                   required>

                            @error('tanggal')

                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>

                            @enderror

                        </div>


                        {{-- NOMINAL --}}
                        <div class="mb-4">

                            <label for="nominal"
                                   class="form-label fw-semibold">

                                <i class="fas fa-money-bill-wave text-success me-1"></i>

                                Nominal Donasi

                            </label>

                            <div class="input-group input-group-lg">

                                <span class="input-group-text bg-success text-white border-success">
                                    Rp
                                </span>

                                <input type="number"
                                       name="nominal"
                                       id="nominal"
                                       value="{{ old('nominal') }}"
                                       min="0"
                                       class="form-control @error('nominal') is-invalid @enderror"
                                       placeholder="Masukkan nominal"
                                       required>

                            </div>

                            @error('nominal')

                                <div class="text-danger small mt-1">
                                    {{ $message }}
                                </div>

                            @enderror

                            <small class="text-muted">
                                Contoh: 500000
                            </small>

                        </div>


                        {{-- JENIS DONASI --}}
                        <div class="mb-4">

                            <label class="form-label fw-semibold">

                                <i class="fas fa-hand-holding-heart text-success me-1"></i>

                                Jenis Donasi

                            </label>

                            <div class="row g-3">

                                {{-- UMUM --}}
                                <div class="col-md-4">

                                    <input type="radio"
                                           class="btn-check"
                                           name="jenis"
                                           id="umum"
                                           value="Umum"
                                           {{ old('jenis', 'Umum') == 'Umum' ? 'checked' : '' }}>

                                    <label for="umum"
                                           class="donasi-option">

                                        <i class="fas fa-heart"></i>

                                        <strong>Umum</strong>

                                        <small>
                                            Donasi umum
                                        </small>

                                    </label>

                                </div>


                                {{-- INFAQ --}}
                                <div class="col-md-4">

                                    <input type="radio"
                                           class="btn-check"
                                           name="jenis"
                                           id="infaq"
                                           value="Infaq"
                                           {{ old('jenis') == 'Infaq' ? 'checked' : '' }}>

                                    <label for="infaq"
                                           class="donasi-option">

                                        <i class="fas fa-mosque"></i>

                                        <strong>Infaq</strong>

                                        <small>
                                            Infaq masjid
                                        </small>

                                    </label>

                                </div>


                                {{-- SEDEKAH --}}
                                <div class="col-md-4">

                                    <input type="radio"
                                           class="btn-check"
                                           name="jenis"
                                           id="sedekah"
                                           value="Sedekah"
                                           {{ old('jenis') == 'Sedekah' ? 'checked' : '' }}>

                                    <label for="sedekah"
                                           class="donasi-option">

                                        <i class="fas fa-gift"></i>

                                        <strong>Sedekah</strong>

                                        <small>
                                            Sedekah jamaah
                                        </small>

                                    </label>

                                </div>

                            </div>

                            @error('jenis')

                                <div class="text-danger small mt-2">
                                    {{ $message }}
                                </div>

                            @enderror

                        </div>


                        {{-- KETERANGAN --}}
                        <div class="mb-4">

                            <label for="keterangan"
                                   class="form-label fw-semibold">

                                <i class="fas fa-align-left text-success me-1"></i>

                                Keterangan

                                <span class="text-muted fw-normal">
                                    (Opsional)
                                </span>

                            </label>

                            <textarea name="keterangan"
                                      id="keterangan"
                                      rows="4"
                                      class="form-control rounded-3 @error('keterangan') is-invalid @enderror"
                                      placeholder="Tambahkan keterangan donasi...">{{ old('keterangan') }}</textarea>

                            @error('keterangan')

                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>

                            @enderror

                        </div>


                        {{-- INFO --}}
                        <div class="donasi-info mb-4">

                            <div class="donasi-info-icon">
                                <i class="fas fa-info-circle"></i>
                            </div>

                            <div>

                                <strong>
                                    Catatan
                                </strong>

                                <p class="mb-0">
                                    Pastikan nominal dan data donatur sudah benar
                                    sebelum menyimpan data.
                                </p>

                            </div>

                        </div>


                        <hr class="my-4">


                        {{-- BUTTON --}}
                        <div class="d-flex justify-content-end gap-2">

                            <a href="{{ route('donasi.index') }}"
                               class="btn btn-light border rounded-3 px-4">

                                <i class="fas fa-times me-1"></i>
                                Batal

                            </a>

                            <button type="submit"
                                    class="btn btn-success rounded-3 px-4">

                                <i class="fas fa-heart me-1"></i>
                                Simpan Donasi

                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>


<style>

/* HEADER */

.donasi-header {

    padding: 25px;

    color: white;

    display: flex;

    align-items: center;

    gap: 15px;

    background: linear-gradient(
        135deg,
        #166534,
        #15803d,
        #22c55e
    );

}

.donasi-header small {
    opacity: .85;
}

.donasi-header-icon {

    width: 55px;
    height: 55px;

    border-radius: 16px;

    background: rgba(255,255,255,.15);

    display: flex;
    align-items: center;
    justify-content: center;

    font-size: 24px;

}


/* FORM */

.form-control {

    border-color: #e5e7eb;

}

.form-control:focus {

    border-color: #22c55e;

    box-shadow: 0 0 0 .2rem rgba(34,197,94,.12);

}


/* DONASI OPTION */

.donasi-option {

    min-height: 120px;

    padding: 20px;

    border: 2px solid #e5e7eb;

    border-radius: 16px;

    cursor: pointer;

    display: flex;

    flex-direction: column;

    align-items: center;

    justify-content: center;

    text-align: center;

    transition: .25s;

    color: #374151;

}

.donasi-option:hover {

    transform: translateY(-3px);

    box-shadow: 0 8px 20px rgba(0,0,0,.06);

}

.donasi-option i {

    font-size: 25px;

    color: #15803d;

    margin-bottom: 8px;

}

.donasi-option strong {

    display: block;

}

.donasi-option small {

    color: #6b7280;

    margin-top: 3px;

}


/* SELECTED */

.btn-check:checked + .donasi-option {

    border-color: #22c55e;

    background: #f0fdf4;

    color: #166534;

    box-shadow: 0 5px 15px rgba(34,197,94,.12);

}


/* INFO */

.donasi-info {

    display: flex;

    gap: 12px;

    padding: 16px;

    border-radius: 14px;

    background: #f0fdf4;

    border: 1px solid #bbf7d0;

    color: #166534;

}

.donasi-info-icon {

    font-size: 20px;

}

.donasi-info p {

    font-size: 13px;

    color: #4b5563;

    margin-top: 3px;

}


/* RESPONSIVE */

@media(max-width:768px) {

    .donasi-header {

        padding: 20px;

    }

}

</style>

@endsection