@extends('layouts.app')

@section('title', 'Tambah Transaksi Kas')

@section('content')

<div class="container-fluid">

    {{-- HEADER --}}
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h2 class="fw-bold mb-1">
                <i class="fas fa-wallet text-success me-2"></i>
                Tambah Transaksi Kas
            </h2>

            <p class="text-muted mb-0">
                Tambahkan pemasukan atau pengeluaran kas masjid.
            </p>
        </div>

        <a href="{{ route('kas-masjid.index') }}"
           class="btn btn-light border shadow-sm rounded-3">

            <i class="fas fa-arrow-left me-1"></i>
            Kembali

        </a>

    </div>


    {{-- FORM --}}
    <div class="row justify-content-center">

        <div class="col-xl-8 col-lg-9">

            <div class="card border-0 shadow-sm rounded-4 overflow-hidden">

                {{-- HEADER CARD --}}
                <div class="kas-form-header">

                    <div class="kas-form-icon">
                        <i class="fas fa-money-bill-wave"></i>
                    </div>

                    <div>
                        <h5 class="mb-1 fw-bold">
                            Transaksi Kas Masjid
                        </h5>

                        <small>
                            Isi data transaksi dengan lengkap dan benar.
                        </small>
                    </div>

                </div>


                <div class="card-body p-4 p-md-5">

                    <form action="{{ route('kas-masjid.store') }}"
                          method="POST">

                        @csrf


                        {{-- JENIS TRANSAKSI --}}
                        <div class="mb-4">

                            <label class="form-label fw-semibold">

                                <i class="fas fa-exchange-alt text-success me-1"></i>

                                Jenis Transaksi

                            </label>

                            <div class="row g-3">

                                {{-- PEMASUKAN --}}
                                <div class="col-md-6">

                                    <input type="radio"
                                           class="btn-check"
                                           name="jenis"
                                           id="pemasukan"
                                           value="Pemasukan"
                                           {{ old('jenis') == 'Pemasukan' ? 'checked' : '' }}
                                           required>

                                    <label class="transaction-option pemasukan-option"
                                           for="pemasukan">

                                        <div class="transaction-icon">

                                            <i class="fas fa-arrow-down"></i>

                                        </div>

                                        <div>

                                            <strong>Pemasukan</strong>

                                            <small>
                                                Uang masuk ke kas
                                            </small>

                                        </div>

                                    </label>

                                </div>


                                {{-- PENGELUARAN --}}
                                <div class="col-md-6">

                                    <input type="radio"
                                           class="btn-check"
                                           name="jenis"
                                           id="pengeluaran"
                                           value="Pengeluaran"
                                           {{ old('jenis') == 'Pengeluaran' ? 'checked' : '' }}
                                           required>

                                    <label class="transaction-option pengeluaran-option"
                                           for="pengeluaran">

                                        <div class="transaction-icon">

                                            <i class="fas fa-arrow-up"></i>

                                        </div>

                                        <div>

                                            <strong>Pengeluaran</strong>

                                            <small>
                                                Uang keluar dari kas
                                            </small>

                                        </div>

                                    </label>

                                </div>

                            </div>

                            @error('jenis')

                                <div class="text-danger small mt-2">
                                    {{ $message }}
                                </div>

                            @enderror

                        </div>


                        {{-- TANGGAL --}}
                        <div class="mb-4">

                            <label for="tanggal"
                                   class="form-label fw-semibold">

                                <i class="fas fa-calendar text-success me-1"></i>

                                Tanggal Transaksi

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


                        {{-- KETERANGAN --}}
                        <div class="mb-4">

                            <label for="keterangan"
                                   class="form-label fw-semibold">

                                <i class="fas fa-align-left text-success me-1"></i>

                                Keterangan

                            </label>

                            <textarea name="keterangan"
                                      id="keterangan"
                                      rows="4"
                                      class="form-control rounded-3 @error('keterangan') is-invalid @enderror"
                                      placeholder="Contoh: Donasi jamaah, pembelian perlengkapan masjid, pembayaran listrik..."
                                      required>{{ old('keterangan') }}</textarea>

                            @error('keterangan')

                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>

                            @enderror

                        </div>


                        {{-- NOMINAL --}}
                        <div class="mb-4">

                            <label for="nominal"
                                   class="form-label fw-semibold">

                                <i class="fas fa-money-bill text-success me-1"></i>

                                Nominal

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
                                       placeholder="0"
                                       required>

                            </div>

                            @error('nominal')

                                <div class="text-danger small mt-1">
                                    {{ $message }}
                                </div>

                            @enderror

                        </div>


                        <hr class="my-4">


                        {{-- BUTTON --}}
                        <div class="d-flex justify-content-end gap-2">

                            <a href="{{ route('kas-masjid.index') }}"
                               class="btn btn-light border rounded-3 px-4">

                                <i class="fas fa-times me-1"></i>
                                Batal

                            </a>

                            <button type="submit"
                                    class="btn btn-success rounded-3 px-4">

                                <i class="fas fa-save me-1"></i>
                                Simpan Transaksi

                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>


<style>

.kas-form-header {

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


.kas-form-header small {

    opacity: .85;

}


.kas-form-icon {

    width: 55px;
    height: 55px;

    border-radius: 16px;

    background: rgba(255,255,255,.15);

    display: flex;

    align-items: center;
    justify-content: center;

    font-size: 24px;

}


.form-control,
.form-select {

    border-color: #e5e7eb;

}


.form-control:focus,
.form-select:focus {

    border-color: #22c55e;

    box-shadow: 0 0 0 .2rem rgba(34,197,94,.12);

}


.transaction-option {

    display: flex;

    align-items: center;

    gap: 15px;

    padding: 18px;

    border: 2px solid #e5e7eb;

    border-radius: 15px;

    cursor: pointer;

    transition: .25s;

}


.transaction-option:hover {

    transform: translateY(-2px);

    box-shadow: 0 8px 20px rgba(0,0,0,.06);

}


.transaction-option strong {

    display: block;

}


.transaction-option small {

    display: block;

    color: #6b7280;

    margin-top: 3px;

}


.transaction-icon {

    width: 48px;
    height: 48px;

    border-radius: 14px;

    display: flex;

    align-items: center;
    justify-content: center;

    font-size: 20px;

}


.pemasukan-option .transaction-icon {

    background: #dcfce7;

    color: #15803d;

}


.pengeluaran-option .transaction-icon {

    background: #fee2e2;

    color: #dc2626;

}


/* SELECTED */

#pemasukan:checked + .pemasukan-option {

    border-color: #22c55e;

    background: #f0fdf4;

    box-shadow: 0 5px 15px rgba(34,197,94,.12);

}


#pengeluaran:checked + .pengeluaran-option {

    border-color: #ef4444;

    background: #fef2f2;

    box-shadow: 0 5px 15px rgba(239,68,68,.12);

}


@media(max-width:768px) {

    .kas-form-header {

        padding: 20px;

    }

}

</style>

@endsection