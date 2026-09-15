@extends('layouts.app')

@section('title', 'Edit Donasi')

@section('content')

<div class="container-fluid">

    <div class="row justify-content-center">

        <div class="col-lg-8">

            <div class="card border-0 shadow-sm rounded-4">

                <div class="card-header bg-success text-white rounded-top-4 p-3">

                    <h5 class="mb-0">
                        <i class="fas fa-edit me-2"></i>
                        Edit Data Donasi
                    </h5>

                </div>

                <div class="card-body p-4">

                    <form method="POST"
                          action="{{ route('donasi.update', $donasi->id) }}">

                        @csrf
                        @method('PUT')

                        {{-- Nama Donatur --}}
                        <div class="mb-3">

                            <label class="form-label fw-semibold">
                                Nama Donatur
                            </label>

                            <input
                                type="text"
                                name="nama_donatur"
                                value="{{ old('nama_donatur', $donasi->nama_donatur) }}"
                                class="form-control @error('nama_donatur') is-invalid @enderror"
                                required>

                            @error('nama_donatur')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>


                        {{-- Nominal --}}
                        <div class="mb-3">

                            <label class="form-label fw-semibold">
                                Nominal Donasi
                            </label>

                            <div class="input-group">

                                <span class="input-group-text">
                                    Rp
                                </span>

                                <input
                                    type="number"
                                    name="nominal"
                                    value="{{ old('nominal', $donasi->nominal) }}"
                                    class="form-control @error('nominal') is-invalid @enderror"
                                    min="1"
                                    required>

                            </div>

                            @error('nominal')
                                <div class="text-danger small mt-1">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>


                        {{-- Tanggal --}}
                        <div class="mb-3">

                            <label class="form-label fw-semibold">
                                Tanggal Donasi
                            </label>

                            <input
                                type="date"
                                name="tanggal"
                                value="{{ old('tanggal', $donasi->tanggal->format('Y-m-d')) }}"
                                class="form-control @error('tanggal') is-invalid @enderror"
                                required>

                            @error('tanggal')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>


                        {{-- Keterangan --}}
                        <div class="mb-4">

                            <label class="form-label fw-semibold">
                                Keterangan
                            </label>

                            <textarea
                                name="keterangan"
                                rows="4"
                                class="form-control @error('keterangan') is-invalid @enderror">{{ old('keterangan', $donasi->keterangan) }}</textarea>

                            @error('keterangan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>


                        {{-- Tombol --}}
                        <div class="d-flex justify-content-between">

                            <a href="{{ route('donasi.index') }}"
                               class="btn btn-secondary">

                                <i class="fas fa-arrow-left me-1"></i>
                                Kembali

                            </a>

                            <button type="submit"
                                    class="btn btn-success">

                                <i class="fas fa-save me-1"></i>
                                Simpan Perubahan

                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection