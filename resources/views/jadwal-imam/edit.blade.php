@extends('layouts.app')

@section('content')

<div class="container-fluid">

    <div class="mb-4">
        <h3 class="fw-bold mb-1">
            <i class="fas fa-edit me-2 text-warning"></i>
            Edit Jadwal Imam & Khotib
        </h3>

        <p class="text-muted">
            Perbarui data jadwal.
        </p>
    </div>

    <div class="card border-0 shadow-sm">

        <div class="card-body">

            <form action="{{ route('jadwal-imam.update', $jadwalImamKhotib->id_jadwal_imam) }}"
                  method="POST">

                @csrf
                @method('PUT')

                <div class="mb-3">

                    <label class="form-label fw-semibold">
                        Tanggal
                    </label>

                    <input type="date"
                           name="tanggal"
                           class="form-control"
                           value="{{ old('tanggal', $jadwalImamKhotib->tanggal->format('Y-m-d')) }}">

                </div>

                <div class="mb-3">

                    <label class="form-label fw-semibold">
                        Nama Imam
                    </label>

                    <input type="text"
                           name="imam"
                           class="form-control"
                           value="{{ old('imam', $jadwalImamKhotib->imam) }}">

                </div>

                <div class="mb-3">

                    <label class="form-label fw-semibold">
                        Nama Khotib
                    </label>

                    <input type="text"
                           name="khotib"
                           class="form-control"
                           value="{{ old('khotib', $jadwalImamKhotib->khotib) }}">

                </div>

                <div class="mb-3">

                    <label class="form-label fw-semibold">
                        Nama Bilal
                    </label>

                    <input type="text"
                           name="bilal"
                           class="form-control"
                           value="{{ old('bilal', $jadwalImamKhotib->bilal) }}">

                </div>

                <div class="mb-4">

                    <label class="form-label fw-semibold">
                        Keterangan
                    </label>

                    <textarea name="keterangan"
                              rows="4"
                              class="form-control">{{ old('keterangan', $jadwalImamKhotib->keterangan) }}</textarea>

                </div>

                <div class="d-flex gap-2">

                    <a href="{{ route('jadwal-imam.index') }}"
                       class="btn btn-secondary">

                        <i class="fas fa-arrow-left me-1"></i>
                        Kembali

                    </a>

                    <button type="submit"
                            class="btn btn-warning">

                        <i class="fas fa-save me-1"></i>
                        Simpan Perubahan

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection