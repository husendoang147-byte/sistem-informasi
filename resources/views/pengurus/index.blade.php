@extends('layouts.app')

@section('title', 'Data Pengurus')

@section('css')

<style>

/* =====================================================
   HEADER
===================================================== */

.pengurus-header {
    position: relative;
    overflow: hidden;
    background: linear-gradient(135deg, #14532d, #166534, #22c55e);
    border-radius: 22px;
    padding: 28px 30px;
    color: white;
    margin-bottom: 25px;
    box-shadow: 0 12px 30px rgba(22, 101, 52, .18);
}

.pengurus-header::before {
    content: "";
    position: absolute;
    width: 180px;
    height: 180px;
    border-radius: 50%;
    right: -70px;
    top: -90px;
    background: rgba(255,255,255,.08);
}

.pengurus-header::after {
    content: "";
    position: absolute;
    width: 100px;
    height: 100px;
    border-radius: 50%;
    right: 100px;
    bottom: -65px;
    background: rgba(255,255,255,.05);
}

.pengurus-header-content {
    position: relative;
    z-index: 2;
}

.pengurus-header h3 {
    font-size: 25px;
    font-weight: 800;
    margin-bottom: 6px;
}

.pengurus-header p {
    margin: 0;
    opacity: .88;
    font-size: 14px;
}

.header-icon {
    width: 52px;
    height: 52px;
    border-radius: 15px;
    background: rgba(255,255,255,.15);
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 21px;
    margin-right: 14px;
}

.btn-tambah {
    position: relative;
    z-index: 3;
    border: none;
    border-radius: 12px;
    padding: 11px 18px;
    font-weight: 700;
    color: #166534;
    box-shadow: 0 5px 15px rgba(0,0,0,.08);
    transition: .2s ease;
}

.btn-tambah:hover {
    transform: translateY(-2px);
    color: #14532d;
}


/* =====================================================
   STAT CARD
===================================================== */

.stat-card {
    border: none;
    border-radius: 18px;
    background: white;
    box-shadow: 0 8px 25px rgba(0,0,0,.055);
    transition: .25s ease;
    overflow: hidden;
}

.stat-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 13px 30px rgba(0,0,0,.08);
}

.stat-card .card-body {
    padding: 21px;
}

.stat-label {
    color: #64748b;
    font-size: 12px;
    font-weight: 600;
    margin-bottom: 4px;
}

.stat-value {
    color: #1e293b;
    font-size: 24px;
    font-weight: 800;
    margin: 0;
}

.stat-icon {
    width: 50px;
    height: 50px;
    border-radius: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
}

.stat-icon.green {
    background: #dcfce7;
    color: #15803d;
}

.stat-icon.blue {
    background: #dbeafe;
    color: #2563eb;
}

.stat-icon.orange {
    background: #ffedd5;
    color: #ea580c;
}


/* =====================================================
   ALERT
===================================================== */

.custom-alert {
    border: none;
    border-radius: 14px;
    box-shadow: 0 5px 18px rgba(0,0,0,.05);
}


/* =====================================================
   MAIN CARD
===================================================== */

.pengurus-card {
    border: none;
    border-radius: 20px;
    overflow: hidden;
    background: white;
    box-shadow: 0 10px 30px rgba(0,0,0,.055);
}

.pengurus-card-header {
    padding: 21px 24px;
    border-bottom: 1px solid #eef2f7;
    background: white;
}

.section-icon {
    width: 42px;
    height: 42px;
    border-radius: 12px;
    background: #f0fdf4;
    color: #15803d;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 17px;
}

.section-title {
    font-size: 16px;
    font-weight: 800;
    color: #1e293b;
}

.section-subtitle {
    font-size: 12px;
    color: #94a3b8;
}


/* =====================================================
   TABLE
===================================================== */

.pengurus-table {
    margin: 0;
}

.pengurus-table thead th {
    background: #f8fafc;
    color: #64748b;
    border: none;
    padding: 14px 16px;
    font-size: 11px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: .5px;
    white-space: nowrap;
}

.pengurus-table tbody td {
    padding: 15px 16px;
    border-bottom: 1px solid #f1f5f9;
    vertical-align: middle;
}

.pengurus-table tbody tr {
    transition: .18s ease;
}

.pengurus-table tbody tr:hover {
    background: #fafffb;
}

.pengurus-table tbody tr:last-child td {
    border-bottom: none;
}


/* =====================================================
   NOMOR
===================================================== */

.nomor {
    width: 32px;
    height: 32px;
    border-radius: 10px;
    background: #f0fdf4;
    color: #15803d;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 12px;
    font-weight: 800;
}


/* =====================================================
   FOTO
===================================================== */

.foto-pengurus {
    width: 52px;
    height: 52px;
    object-fit: cover;
    border-radius: 15px;
    border: 3px solid #dcfce7;
    display: block;
}

.foto-default {
    width: 52px;
    height: 52px;
    border-radius: 15px;
    background: linear-gradient(135deg, #dcfce7, #bbf7d0);
    color: #15803d;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
}


/* =====================================================
   NAMA
===================================================== */

.nama-pengurus {
    font-size: 14px;
    font-weight: 750;
    color: #1e293b;
}

.sub-info {
    font-size: 11px;
    color: #94a3b8;
    margin-top: 2px;
}


/* =====================================================
   JABATAN
===================================================== */

.jabatan-badge {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 7px 11px;
    border-radius: 10px;
    background: #f0fdf4;
    color: #15803d;
    border: 1px solid #dcfce7;
    font-size: 11px;
    font-weight: 700;
}


/* =====================================================
   NOMOR HP
===================================================== */

.nomor-hp {
    display: inline-flex;
    align-items: center;
    gap: 7px;
    color: #475569;
    font-size: 13px;
    font-weight: 600;
}


/* =====================================================
   ACTION
===================================================== */

.action-wrapper {
    display: flex;
    justify-content: center;
    gap: 6px;
}

.action-btn {
    width: 35px;
    height: 35px;
    border: none;
    border-radius: 10px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    transition: .18s ease;
    text-decoration: none;
}

.action-btn:hover {
    transform: translateY(-2px);
}

.btn-edit {
    background: #fef3c7;
    color: #d97706;
}

.btn-edit:hover {
    background: #fde68a;
    color: #b45309;
}

.btn-delete {
    background: #fee2e2;
    color: #dc2626;
}

.btn-delete:hover {
    background: #fecaca;
    color: #b91c1c;
}


/* =====================================================
   EMPTY STATE
===================================================== */

.empty-state {
    padding: 65px 20px;
    text-align: center;
}

.empty-icon {
    width: 75px;
    height: 75px;
    margin: 0 auto;
    border-radius: 22px;
    background: #f0fdf4;
    color: #22c55e;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 29px;
}

.empty-state h5 {
    color: #1e293b;
    margin-top: 18px;
    margin-bottom: 7px;
    font-weight: 800;
}

.empty-state p {
    color: #94a3b8;
    font-size: 13px;
}


/* =====================================================
   PAGINATION
===================================================== */

.pagination {
    margin: 0;
}

.page-link {
    border: none;
    margin: 0 3px;
    border-radius: 8px !important;
    color: #15803d;
}

.page-item.active .page-link {
    background: #16a34a;
    border-color: #16a34a;
}


/* =====================================================
   RESPONSIVE
===================================================== */

@media(max-width: 768px) {

    .pengurus-header {
        padding: 22px;
    }

    .pengurus-header .d-flex {
        align-items: flex-start !important;
        gap: 15px;
        flex-direction: column;
    }

    .btn-tambah {
        width: 100%;
    }

    .stat-card {
        margin-bottom: 2px;
    }

    .pengurus-card-header {
        padding: 18px;
    }

    .pengurus-table {
        min-width: 850px;
    }

}

</style>

@endsection


@section('content')

<div class="container-fluid py-1">


    {{-- =====================================================
         HEADER
    ====================================================== --}}

    <div class="pengurus-header">

        <div class="pengurus-header-content">

            <div class="d-flex justify-content-between align-items-center">

                <div class="d-flex align-items-center">

                    <div class="header-icon">

                        <i class="fas fa-users"></i>

                    </div>

                    <div>

                        <h3>
                            Data Pengurus
                        </h3>

                        <p>
                            Kelola data dan struktur kepengurusan masjid.
                        </p>

                    </div>

                </div>


                @if(auth()->user()->role === 'admin')

                    <a
                        href="{{ route('pengurus.create') }}"
                        class="btn btn-light btn-tambah"
                    >

                        <i class="fas fa-plus me-2"></i>

                        Tambah Pengurus

                    </a>

                @endif

            </div>

        </div>

    </div>


    {{-- =====================================================
         SUCCESS
    ====================================================== --}}

    @if(session('success'))

        <div
            class="alert alert-success custom-alert alert-dismissible fade show mb-4"
            role="alert"
        >

            <i class="fas fa-circle-check me-2"></i>

            {{ session('success') }}

            <button
                type="button"
                class="btn-close"
                data-bs-dismiss="alert"
            ></button>

        </div>

    @endif


    {{-- =====================================================
         STATISTIK
    ====================================================== --}}

    <div class="row g-4 mb-4">


        {{-- TOTAL --}}

        <div class="col-md-4">

            <div class="card stat-card h-100">

                <div class="card-body">

                    <div class="d-flex justify-content-between align-items-center">

                        <div>

                            <div class="stat-label">
                                Total Pengurus
                            </div>

                            <div class="stat-value">
                                {{ $pengurus->total() }}
                            </div>

                        </div>

                        <div class="stat-icon green">

                            <i class="fas fa-users"></i>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        {{-- HALAMAN --}}

        <div class="col-md-4">

            <div class="card stat-card h-100">

                <div class="card-body">

                    <div class="d-flex justify-content-between align-items-center">

                        <div>

                            <div class="stat-label">
                                Data Halaman Ini
                            </div>

                            <div class="stat-value">
                                {{ $pengurus->count() }}
                            </div>

                        </div>

                        <div class="stat-icon blue">

                            <i class="fas fa-list"></i>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        {{-- STATUS --}}

        <div class="col-md-4">

            <div class="card stat-card h-100">

                <div class="card-body">

                    <div class="d-flex justify-content-between align-items-center">

                        <div>

                            <div class="stat-label">
                                Status Kepengurusan
                            </div>

                            <div class="stat-value text-success">
                                Aktif
                            </div>

                        </div>

                        <div class="stat-icon orange">

                            <i class="fas fa-user-check"></i>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>


    {{-- =====================================================
         TABLE
    ====================================================== --}}

    <div class="pengurus-card">


        {{-- HEADER TABLE --}}

        <div class="pengurus-card-header">

            <div class="d-flex justify-content-between align-items-center">

                <div class="d-flex align-items-center">

                    <div class="section-icon me-3">

                        <i class="fas fa-user-tie"></i>

                    </div>

                    <div>

                        <div class="section-title">
                            Daftar Pengurus
                        </div>

                        <div class="section-subtitle">
                            Informasi pengurus masjid yang terdaftar.
                        </div>

                    </div>

                </div>


                <span class="badge bg-success rounded-pill px-3 py-2">

                    {{ $pengurus->total() }} Pengurus

                </span>

            </div>

        </div>


        {{-- TABLE --}}

        <div class="table-responsive">

            <table class="table pengurus-table align-middle">

                <thead>

                    <tr>

                        <th class="text-center" width="65">
                            No
                        </th>

                        <th width="90">
                            Foto
                        </th>

                        <th>
                            Nama Pengurus
                        </th>

                        <th>
                            Jabatan
                        </th>

                        <th>
                            No. HP
                        </th>

                        @if(auth()->user()->role === 'admin')

                            <th
                                class="text-center"
                                width="130"
                            >
                                Aksi
                            </th>

                        @endif

                    </tr>

                </thead>


                <tbody>

                    @forelse($pengurus as $item)

                        <tr>


                            {{-- NO --}}

                            <td class="text-center">

                                <span class="nomor">

                                    {{ $pengurus->firstItem() + $loop->index }}

                                </span>

                            </td>


                            {{-- FOTO --}}

                            <td>

                                @if($item->foto)

                                    <img
                                        src="{{ asset('uploads/pengurus/'.$item->foto) }}"
                                        class="foto-pengurus"
                                        alt="{{ $item->nama }}"
                                    >

                                @else

                                    <div class="foto-default">

                                        <i class="fas fa-user"></i>

                                    </div>

                                @endif

                            </td>


                            {{-- NAMA --}}

                            <td>

                                <div class="nama-pengurus">

                                    {{ $item->nama }}

                                </div>

                                <div class="sub-info">

                                    <i class="fas fa-mosque me-1"></i>

                                    Pengurus Masjid

                                </div>

                            </td>


                            {{-- JABATAN --}}

                            <td>

                                <span class="jabatan-badge">

                                    <i class="fas fa-id-badge"></i>

                                    {{ $item->jabatan }}

                                </span>

                            </td>


                            {{-- HP --}}

                            <td>

                                @if($item->no_hp)

                                    <span class="nomor-hp">

                                        <i class="fas fa-phone text-success"></i>

                                        {{ $item->no_hp }}

                                    </span>

                                @else

                                    <span class="text-muted">
                                        -
                                    </span>

                                @endif

                            </td>


                            {{-- AKSI --}}

                            @if(auth()->user()->role === 'admin')

                                <td>

                                    <div class="action-wrapper">


                                        {{-- EDIT --}}

                                        <a
                                            href="{{ route('pengurus.edit', $item->id) }}"
                                            class="action-btn btn-edit"
                                            title="Edit"
                                        >

                                            <i class="fas fa-pen"></i>

                                        </a>


                                        {{-- HAPUS --}}

                                        <form
                                            action="{{ route('pengurus.destroy', $item->id) }}"
                                            method="POST"
                                            class="form-hapus d-inline"
                                        >

                                            @csrf

                                            @method('DELETE')

                                            <button
                                                type="submit"
                                                class="action-btn btn-delete"
                                                title="Hapus"
                                            >

                                                <i class="fas fa-trash"></i>

                                            </button>

                                        </form>

                                    </div>

                                </td>

                            @endif

                        </tr>


                    @empty

                        <tr>

                            <td
                                colspan="{{ auth()->user()->role === 'admin' ? 6 : 5 }}"
                            >

                                <div class="empty-state">

                                    <div class="empty-icon">

                                        <i class="fas fa-users-slash"></i>

                                    </div>

                                    <h5>
                                        Belum Ada Data Pengurus
                                    </h5>

                                    <p>
                                        Belum ada pengurus masjid yang terdaftar.
                                    </p>


                                    @if(auth()->user()->role === 'admin')

                                        <a
                                            href="{{ route('pengurus.create') }}"
                                            class="btn btn-success rounded-3 px-4"
                                        >

                                            <i class="fas fa-plus me-2"></i>

                                            Tambah Pengurus

                                        </a>

                                    @endif

                                </div>

                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>


        {{-- PAGINATION --}}

        @if($pengurus->hasPages())

            <div class="p-3 border-top">

                {{ $pengurus->links() }}

            </div>

        @endif

    </div>

</div>

@endsection


@section('js')

<script>

document.querySelectorAll('.form-hapus').forEach(form => {

    form.addEventListener('submit', function(e) {

        e.preventDefault();

        Swal.fire({

            title: 'Hapus Pengurus?',

            text: 'Data pengurus akan dihapus secara permanen.',

            icon: 'warning',

            showCancelButton: true,

            confirmButtonColor: '#16a34a',

            cancelButtonColor: '#dc3545',

            confirmButtonText: 'Ya, Hapus!',

            cancelButtonText: 'Batal',

            reverseButtons: true

        }).then((result) => {

            if (result.isConfirmed) {

                form.submit();

            }

        });

    });

});

</script>

@endsection