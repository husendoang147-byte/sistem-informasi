@extends('layouts.app')

@section('title', 'Tambah Jadwal Sholat')

@section('content')

<div class="container-fluid">

    <div class="row justify-content-center">

        <div class="col-lg-8">

            <div class="card border-0 shadow-sm rounded-4">

                <div class="card-header bg-success text-white rounded-top-4 p-3">

                    <h5 class="mb-0">
                        <i class="fas fa-mosque me-2"></i>
                        Tambah Jadwal Sholat
                    </h5>

                </div>

                <div class="card-body p-4">

                    <form method="POST"
                          action="{{ route('jadwal.store') }}">

                        @csrf

                        <div class="row">

                            {{-- Subuh --}}
                            <div class="col-md-6 mb-3">

                                <label class="form-label fw-semibold">
                                    <i class="fas fa-sun text-warning me-1"></i>
                                    Subuh
                                </label>

                                <input
                                    type="time"
                                    name="subuh"
                                    value="{{ old('subuh') }}"
                                    class="form-control @error('subuh') is-invalid @enderror"
                                    required>

                                @error('subuh')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>


                            {{-- Dzuhur --}}
                            <div class="col-md-6 mb-3">

                                <label class="form-label fw-semibold">
                                    <i class="fas fa-sun text-warning me-1"></i>
                                    Dzuhur
                                </label>

                                <input
                                    type="time"
                                    name="dzuhur"
                                    value="{{ old('dzuhur') }}"
                                    class="form-control @error('dzuhur') is-invalid @enderror"
                                    required>

                                @error('dzuhur')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>


                            {{-- Ashar --}}
                            <div class="col-md-6 mb-3">

                                <label class="form-label fw-semibold">
                                    <i class="fas fa-cloud-sun text-warning me-1"></i>
                                    Ashar
                                </label>

                                <input
                                    type="time"
                                    name="ashar"
                                    value="{{ old('ashar') }}"
                                    class="form-control @error('ashar') is-invalid @enderror"
                                    required>

                                @error('ashar')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>


                            {{-- Maghrib --}}
                            <div class="col-md-6 mb-3">

                                <label class="form-label fw-semibold">
                                    <i class="fas fa-cloud text-secondary me-1"></i>
                                    Maghrib
                                </label>

                                <input
                                    type="time"
                                    name="maghrib"
                                    value="{{ old('maghrib') }}"
                                    class="form-control @error('maghrib') is-invalid @enderror"
                                    required>

                                @error('maghrib')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>


                            {{-- Isya --}}
                            <div class="col-md-6 mb-4">

                                <label class="form-label fw-semibold">
                                    <i class="fas fa-moon text-primary me-1"></i>
                                    Isya
                                </label>

                                <input
                                    type="time"
                                    name="isya"
                                    value="{{ old('isya') }}"
                                    class="form-control @error('isya') is-invalid @enderror"
                                    required>

                                @error('isya')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>

                        </div>


                        {{-- Tombol --}}
                        <div class="d-flex justify-content-between">

                            <a href="{{ route('jadwal.index') }}"
                               class="btn btn-secondary">

                                <i class="fas fa-arrow-left me-1"></i>
                                Kembali

                            </a>

                            <button type="submit"
                                    class="btn btn-success">

                                <i class="fas fa-save me-1"></i>
                                Simpan Jadwal

                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection