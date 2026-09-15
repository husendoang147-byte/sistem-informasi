@extends('layouts.app')

@section('title', 'Edit User')

@section('content')

<div class="container-fluid">

    <div class="mb-4">

        <h4 class="fw-bold">
            <i class="fas fa-user-edit text-success me-2"></i>
            Edit User
        </h4>

        <p class="text-muted">
            Perbarui informasi akun pengguna.
        </p>

    </div>


    <div class="card border-0 shadow-sm rounded-4">

        <div class="card-body p-4">

            <form action="{{ route('user.update', $user->id) }}"
                  method="POST">

                @csrf
                @method('PUT')


                <div class="mb-3">

                    <label class="form-label fw-semibold">
                        Nama Lengkap
                    </label>

                    <input
                        type="text"
                        name="name"
                        value="{{ old('name', $user->name) }}"
                        class="form-control rounded-3"
                        required>

                </div>


                <div class="mb-3">

                    <label class="form-label fw-semibold">
                        Email
                    </label>

                    <input
                        type="email"
                        name="email"
                        value="{{ old('email', $user->email) }}"
                        class="form-control rounded-3"
                        required>

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
                            {{ $user->role === 'user' ? 'selected' : '' }}>
                            User
                        </option>

                        <option value="admin"
                            {{ $user->role === 'admin' ? 'selected' : '' }}>
                            Admin
                        </option>

                    </select>

                </div>


                <div class="alert alert-light border rounded-3">

                    <i class="fas fa-info-circle text-success me-2"></i>

                    Kosongkan password jika tidak ingin mengubah password.

                </div>


                <div class="row">

                    <div class="col-md-6 mb-3">

                        <label class="form-label fw-semibold">
                            Password Baru
                        </label>

                        <input
                            type="password"
                            name="password"
                            class="form-control rounded-3"
                            placeholder="Password baru">

                    </div>


                    <div class="col-md-6 mb-3">

                        <label class="form-label fw-semibold">
                            Konfirmasi Password
                        </label>

                        <input
                            type="password"
                            name="password_confirmation"
                            class="form-control rounded-3"
                            placeholder="Ulangi password">

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
                        Simpan Perubahan

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection