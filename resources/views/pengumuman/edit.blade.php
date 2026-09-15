@extends('layouts.app')

@section('title', 'Edit Pengumuman')

@section('content')

<div class="container-fluid">

    <div class="row justify-content-center">

        <div class="col-lg-8">

            <div class="card border-0 shadow-sm rounded-4">

                <div class="card-header bg-success text-white rounded-top-4 p-3">

                    <h5 class="mb-0">
                        <i class="fas fa-edit me-2"></i>
                        Edit Pengumuman
                    </h5>

                </div>

                <div class="card-body p-4">

                    <form action="{{ route('pengumuman.update', $pengumuman->id) }}"
                          method="POST">

                        @csrf
                        @method('PUT')

                        {{-- Judul --}}
                        <div class="mb-3">

                            <label class="form-label fw-semibold">
                                Judul Pengumuman
                            </label>

                            <input type="text"
                                   name="judul"
                                   value="{{ old('judul', $pengumuman->judul) }}"
                                   class="form-control @error('judul') is-invalid @enderror"
                                   required>

                            @error('judul')

                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>

                            @enderror

                        </div>


                        {{-- Tanggal --}}
                        <div class="mb-3">

                            <label class="form-label fw-semibold">
                                Tanggal
                            </label>

                            <input type="date"
                                   name="tanggal"
                                   value="{{ old('tanggal', $pengumuman->tanggal->format('Y-m-d')) }}"
                                   class="form-control @error('tanggal') is-invalid @enderror"
                                   required>

                            @error('tanggal')

                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>

                            @enderror

                        </div>


                        {{-- Isi --}}
                        <div class="mb-4">

                            <label class="form-label fw-semibold">
                                Isi Pengumuman
                            </label>

                            <textarea name="isi"
                                      rows="7"
                                      class="form-control @error('isi') is-invalid @enderror"
                                      required>{{ old('isi', $pengumuman->isi) }}</textarea>

                            @error('isi')

                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>

                            @enderror

                        </div>


                        {{-- Tombol --}}
                        <div class="d-flex justify-content-between">

                            <a href="{{ route('pengumuman.index') }}"
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