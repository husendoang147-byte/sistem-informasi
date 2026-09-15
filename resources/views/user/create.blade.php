@extends('layouts.app')

@section('title', 'Tambah User')

@section('content')

<div class="container-fluid">

    <div class="mb-4">

        <h4 class="fw-bold">
            <i class="fas fa-user-plus text-success me-2"></i>
            Tambah User
        </h4>

        <p class="text-muted">
            Tambahkan akun pengguna baru.
        </p>

    </div>


    <div class="card border-0 shadow-sm rounded-4">

        <div class="card-body p-4">

            <form action="{{ route('user.store') }}" method="POST">

                @csrf


                <div class="mb-3">

                    <label class="form-label fw-semibold">
                        Nama Lengkap
                    </label>

                    <input
                        type="text"
                        name="name"
                        value="{{ old('name') }}"
                        class="form-control rounded-3 @error('name') is-invalid @enderror"
                        placeholder="Masukkan nama lengkap"
                        required>

                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                <div class="mb-3">

                    <label class="form-label fw-semibold">
                        Email
                    </label>

                    <input
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        class="form-control rounded-3 @error('email') is-invalid @enderror"
                        placeholder="Masukkan email"
                        required>

                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                <div class="mb-3">

                    <label class="form-label fw-semibold">
                        Role
                    </label>

                    <select
                        name="role"
                        class="form-select rounded-3"
                        required>

                        <option value="user"
                            {{ old('role') === 'user' ? 'selected' : '' }}>
                            User
                        </option>

                        <option value="admin"
                            {{ old('role') === 'admin' ? 'selected' : '' }}>
                            Admin
                        </option>

                    </select>

                </div>


                <div class="row">

                    <div class="col-md-6 mb-3">

                        <label class="form-label fw-semibold">
                            Password
                        </label>

                        <input
                            type="password"
                            name="password"
                            class="form-control rounded-3"
                            placeholder="Minimal 8 karakter"
                            required>

                    </div>


                    <div class="col-md-6 mb-3">

                        <label class="form-label fw-semibold">
                            Konfirmasi Password
                        </label>

                        <input
                            type="password"
                            name="password_confirmation"
                            class="form-control rounded-3"
                            placeholder="Ulangi password"
                            required>

                    </div>

                </div>


                <div class="d-flex gap-2 mt-3">

                    <a href="{{ route('user.index') }}"
                       class="btn btn-light border rounded-3">

                        <i class="fas fa-arrow-left me-1"></i>
                        Kembali

                    </a>

                    <button type="submit"
                            class="btn btn-success rounded-3">

                        <i class="fas fa-save me-1"></i>
                        Simpan User

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection