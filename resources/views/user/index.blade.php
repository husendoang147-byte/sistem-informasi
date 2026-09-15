@extends('layouts.app')

@section('title', 'Data User')

@section('css')

<style>

.user-header {
    background: linear-gradient(135deg, #166534, #15803d, #22c55e);
    border-radius: 22px;
    padding: 28px;
    color: white;
    margin-bottom: 25px;
    box-shadow: 0 10px 30px rgba(21,128,61,.15);
}

.user-header h2 {
    font-weight: 700;
}

.user-header p {
    opacity: .85;
}

.user-header-icon {
    font-size: 80px;
    opacity: .15;
}

.user-table-card {
    border: none;
    border-radius: 22px;
    overflow: hidden;
    box-shadow: 0 8px 28px rgba(0,0,0,.06);
}

.user-table-card .card-header {
    background: white;
    padding: 20px 24px;
    border-bottom: 1px solid #f1f5f9;
}

.user-table thead th {
    background: #f0fdf4;
    color: #166534;
    font-weight: 600;
    padding: 15px 18px;
    border: none;
}

.user-table tbody td {
    padding: 16px 18px;
    border-color: #f1f5f9;
}

.user-table tbody tr {
    transition: .2s;
}

.user-table tbody tr:hover {
    background: #f8fffa;
}

.user-avatar {
    width: 45px;
    height: 45px;
    border-radius: 14px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #dcfce7;
    color: #15803d;
    font-weight: 700;
    font-size: 17px;
}

.role-admin {
    background: #dcfce7;
    color: #166534;
    padding: 7px 12px;
    border-radius: 50px;
    font-size: 12px;
    font-weight: 600;
}

.role-user {
    background: #f1f5f9;
    color: #475569;
    padding: 7px 12px;
    border-radius: 50px;
    font-size: 12px;
    font-weight: 600;
}

.btn-user-add {
    border-radius: 12px;
    padding: 11px 17px;
    font-weight: 600;
}

.user-action {
    width: 38px;
    height: 38px;
    border-radius: 10px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
}

.user-count {
    background: #dcfce7;
    color: #166534;
    padding: 8px 14px;
    border-radius: 50px;
    font-size: 12px;
    font-weight: 600;
}

.empty-user {
    padding: 60px 20px;
}

.empty-user-icon {
    width: 80px;
    height: 80px;
    margin: auto;
    border-radius: 24px;
    background: #dcfce7;
    color: #15803d;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 32px;
}

</style>

@endsection


@section('content')

<div class="container-fluid">

    {{-- HEADER --}}
    <div class="user-header">

        <div class="row align-items-center">

            <div class="col-md-8">

                <div class="mb-2 opacity-75">

                    <i class="fas fa-users-cog me-1"></i>

                    Administrator

                </div>

                <h2 class="mb-2">
                    Manajemen User
                </h2>

                <p class="mb-0">
                    Kelola akun dan hak akses pengguna Sistem Informasi Masjid.
                </p>

            </div>

            <div class="col-md-4 text-end d-none d-md-block">

                <i class="fas fa-users-cog user-header-icon"></i>

            </div>

        </div>

    </div>


    {{-- ALERT SUCCESS --}}
    @if(session('success'))

        <div class="alert alert-success alert-dismissible fade show rounded-4 border-0 shadow-sm">

            <i class="fas fa-check-circle me-2"></i>

            {{ session('success') }}

            <button type="button"
                    class="btn-close"
                    data-bs-dismiss="alert">
            </button>

        </div>

    @endif


    {{-- ALERT ERROR --}}
    @if(session('error'))

        <div class="alert alert-danger alert-dismissible fade show rounded-4 border-0 shadow-sm">

            <i class="fas fa-exclamation-circle me-2"></i>

            {{ session('error') }}

            <button type="button"
                    class="btn-close"
                    data-bs-dismiss="alert">
            </button>

        </div>

    @endif


    {{-- TABLE CARD --}}
    <div class="card user-table-card">

        {{-- HEADER CARD --}}
        <div class="card-header">

            <div class="d-flex justify-content-between align-items-center">

                <div>

                    <h5 class="fw-bold mb-1">

                        <i class="fas fa-users text-success me-2"></i>

                        Daftar Pengguna

                    </h5>

                    <small class="text-muted">
                        Daftar seluruh akun yang terdaftar dalam sistem.
                    </small>

                </div>


                <div class="d-flex align-items-center gap-2">

                    <span class="user-count">

                        <i class="fas fa-users me-1"></i>

                        {{ $users->total() }} User

                    </span>


                    <a href="{{ route('user.create') }}"
                       class="btn btn-success btn-user-add">

                        <i class="fas fa-user-plus me-1"></i>

                        Tambah User

                    </a>

                </div>

            </div>

        </div>


        {{-- TABLE --}}
        <div class="card-body p-0">

            <div class="table-responsive">

                <table class="table user-table table-hover align-middle mb-0">

                    <thead>

                        <tr>

                            <th width="70">
                                #
                            </th>

                            <th>
                                Pengguna
                            </th>

                            <th>
                                Email
                            </th>

                            <th>
                                Role
                            </th>

                            <th>
                                Terdaftar
                            </th>

                            <th class="text-center" width="140">
                                Aksi
                            </th>

                        </tr>

                    </thead>


                    <tbody>

                        @forelse($users as $user)

                            <tr>

                                {{-- NOMOR --}}

                                <td class="fw-semibold">

                                    {{ $users->firstItem() + $loop->index }}

                                </td>


                                {{-- USER --}}

                                <td>

                                    <div class="d-flex align-items-center">

                                        <div class="user-avatar">

                                            {{ strtoupper(substr($user->name, 0, 1)) }}

                                        </div>

                                        <div class="ms-3">

                                            <div class="fw-semibold">

                                                {{ $user->name }}

                                            </div>

                                            @if($user->id === auth()->id())

                                                <small class="text-success">

                                                    <i class="fas fa-circle"
                                                       style="font-size:7px;"></i>

                                                    Akun Anda

                                                </small>

                                            @else

                                                <small class="text-muted">
                                                    Pengguna sistem
                                                </small>

                                            @endif

                                        </div>

                                    </div>

                                </td>


                                {{-- EMAIL --}}

                                <td>

                                    <span class="text-muted">

                                        <i class="far fa-envelope me-1"></i>

                                        {{ $user->email }}

                                    </span>

                                </td>


                                {{-- ROLE --}}

                                <td>

                                    @if($user->role === 'admin')

                                        <span class="role-admin">

                                            <i class="fas fa-shield-alt me-1"></i>

                                            Administrator

                                        </span>

                                    @else

                                        <span class="role-user">

                                            <i class="fas fa-user me-1"></i>

                                            User

                                        </span>

                                    @endif

                                </td>


                                {{-- TANGGAL --}}

                                <td>

                                    <div class="fw-semibold">

                                        {{ $user->created_at->format('d M Y') }}

                                    </div>

                                    <small class="text-muted">

                                        {{ $user->created_at->diffForHumans() }}

                                    </small>

                                </td>


                                {{-- AKSI --}}

                                <td class="text-center">

                                    {{-- EDIT --}}

                                    <a href="{{ route('user.edit', $user->id) }}"
                                       class="btn btn-warning user-action me-1"
                                       title="Edit User">

                                        <i class="fas fa-edit"></i>

                                    </a>


                                    {{-- HAPUS --}}

                                    @if($user->id !== auth()->id())

                                        <form action="{{ route('user.destroy', $user->id) }}"
                                              method="POST"
                                              class="d-inline form-hapus-user">

                                            @csrf

                                            @method('DELETE')

                                            <button type="submit"
                                                    class="btn btn-danger user-action"
                                                    title="Hapus User">

                                                <i class="fas fa-trash"></i>

                                            </button>

                                        </form>

                                    @else

                                        <button class="btn btn-light user-action"
                                                disabled
                                                title="Tidak dapat menghapus akun sendiri">

                                            <i class="fas fa-lock text-muted"></i>

                                        </button>

                                    @endif

                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td colspan="6">

                                    <div class="empty-user text-center">

                                        <div class="empty-user-icon">

                                            <i class="fas fa-users"></i>

                                        </div>

                                        <h5 class="fw-bold mt-4">
                                            Belum Ada User
                                        </h5>

                                        <p class="text-muted">
                                            Belum ada akun pengguna yang terdaftar.
                                        </p>

                                        <a href="{{ route('user.create') }}"
                                           class="btn btn-success rounded-3">

                                            <i class="fas fa-user-plus me-1"></i>

                                            Tambah User

                                        </a>

                                    </div>

                                </td>

                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>


        {{-- PAGINATION --}}

        @if($users->hasPages())

            <div class="card-footer bg-white border-0 p-3">

                {{ $users->links() }}

            </div>

        @endif

    </div>

</div>

@endsection


@section('js')

<script>

document.querySelectorAll('.form-hapus-user').forEach(form => {

    form.addEventListener('submit', function(e) {

        e.preventDefault();

        Swal.fire({

            title: 'Hapus user?',

            text: 'Akun user akan dihapus secara permanen.',

            icon: 'warning',

            showCancelButton: true,

            confirmButtonColor: '#16a34a',

            cancelButtonColor: '#dc3545',

            confirmButtonText: 'Ya, Hapus',

            cancelButtonText: 'Batal'

        }).then((result) => {

            if (result.isConfirmed) {

                form.submit();

            }

        });

    });

});

</script>

@endsection