@extends('layouts.app')

@section('title', 'Kas Masjid')

@section('css')

<style>

/* =====================================================
   HEADER
===================================================== */

.kas-hero {
    position: relative;
    overflow: hidden;
    background: linear-gradient(135deg, #14532d, #15803d, #16a34a);
    border-radius: 24px;
    padding: 30px;
    color: white;
    margin-bottom: 25px;
    box-shadow: 0 12px 35px rgba(21, 128, 61, .18);
}

.kas-hero::before {
    content: "";
    position: absolute;
    width: 220px;
    height: 220px;
    border-radius: 50%;
    right: -80px;
    top: -110px;
    background: rgba(255,255,255,.08);
}

.kas-hero::after {
    content: "";
    position: absolute;
    width: 140px;
    height: 140px;
    border-radius: 50%;
    right: 100px;
    bottom: -100px;
    background: rgba(255,255,255,.05);
}

.kas-hero-content {
    position: relative;
    z-index: 2;
}

.kas-hero-icon {
    width: 58px;
    height: 58px;
    border-radius: 17px;
    background: rgba(255,255,255,.15);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    margin-bottom: 15px;
}

.kas-hero h3 {
    font-size: 25px;
    font-weight: 800;
    margin-bottom: 6px;
}

.kas-hero p {
    margin: 0;
    opacity: .85;
    font-size: 14px;
}

.btn-tambah-kas {
    background: white;
    color: #15803d;
    border: none;
    border-radius: 12px;
    padding: 11px 18px;
    font-weight: 700;
    transition: .2s ease;
}

.btn-tambah-kas:hover {
    background: #f0fdf4;
    color: #166534;
    transform: translateY(-2px);
}


/* =====================================================
   STAT CARD
===================================================== */

.kas-stat {
    background: white;
    border: 1px solid #e5e7eb;
    border-radius: 20px;
    padding: 22px;
    height: 100%;
    box-shadow: 0 8px 25px rgba(0,0,0,.05);
    transition: .25s ease;
}

.kas-stat:hover {
    transform: translateY(-4px);
    box-shadow: 0 14px 30px rgba(0,0,0,.08);
}

.kas-stat-top {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.kas-stat-icon {
    width: 50px;
    height: 50px;
    border-radius: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 19px;
}

.kas-stat-icon.saldo {
    background: #dcfce7;
    color: #15803d;
}

.kas-stat-icon.masuk {
    background: #dbeafe;
    color: #2563eb;
}

.kas-stat-icon.keluar {
    background: #fee2e2;
    color: #dc2626;
}

.kas-stat-label {
    color: #64748b;
    font-size: 12px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: .5px;
    margin-bottom: 5px;
}

.kas-stat-value {
    font-size: 21px;
    font-weight: 800;
    margin: 0;
    color: #1e293b;
}


/* =====================================================
   TRANSACTION CARD
===================================================== */

.kas-card {
    margin-top: 25px;
    background: white;
    border-radius: 22px;
    border: 1px solid #e5e7eb;
    overflow: hidden;
    box-shadow: 0 8px 28px rgba(0,0,0,.05);
}

.kas-card-header {
    padding: 22px 25px;
    border-bottom: 1px solid #f1f5f9;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.kas-title-wrap {
    display: flex;
    align-items: center;
    gap: 13px;
}

.kas-title-icon {
    width: 44px;
    height: 44px;
    border-radius: 13px;
    background: #f0fdf4;
    color: #15803d;
    display: flex;
    align-items: center;
    justify-content: center;
}

.kas-card-header h5 {
    margin: 0 0 3px;
    font-size: 16px;
    font-weight: 800;
    color: #1e293b;
}

.kas-card-header small {
    color: #94a3b8;
}


/* =====================================================
   BADGE JUMLAH
===================================================== */

.total-transaksi {
    background: #f0fdf4;
    color: #15803d;
    padding: 7px 12px;
    border-radius: 50px;
    font-size: 11px;
    font-weight: 800;
}


/* =====================================================
   TABLE
===================================================== */

.kas-table {
    margin: 0;
}

.kas-table thead th {
    background: #f8fafc;
    color: #64748b;
    border: none;
    padding: 14px 18px;
    font-size: 10px;
    text-transform: uppercase;
    letter-spacing: .7px;
    font-weight: 800;
    white-space: nowrap;
}

.kas-table tbody td {
    padding: 16px 18px;
    border-bottom: 1px solid #f1f5f9;
    vertical-align: middle;
}

.kas-table tbody tr {
    transition: .2s ease;
}

.kas-table tbody tr:hover {
    background: #f8fafc;
}

.kas-table tbody tr:last-child td {
    border-bottom: none;
}


/* =====================================================
   NUMBER
===================================================== */

.nomor {
    width: 34px;
    height: 34px;
    border-radius: 10px;
    background: #f1f5f9;
    color: #64748b;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 11px;
    font-weight: 800;
}


/* =====================================================
   DATE
===================================================== */

.tanggal-box {
    display: flex;
    align-items: center;
    gap: 10px;
}

.tanggal-icon {
    width: 36px;
    height: 36px;
    border-radius: 10px;
    background: #f0fdf4;
    color: #15803d;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 13px;
}

.tanggal-text {
    font-size: 13px;
    font-weight: 700;
    color: #334155;
}


/* =====================================================
   JENIS
===================================================== */

.jenis-badge {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 7px 11px;
    border-radius: 50px;
    font-size: 10px;
    font-weight: 800;
}

.jenis-masuk {
    background: #dcfce7;
    color: #15803d;
}

.jenis-keluar {
    background: #fee2e2;
    color: #dc2626;
}


/* =====================================================
   NOMINAL
===================================================== */

.nominal-masuk {
    color: #15803d;
    font-size: 13px;
    font-weight: 800;
}

.nominal-keluar {
    color: #dc2626;
    font-size: 13px;
    font-weight: 800;
}


/* =====================================================
   KETERANGAN
===================================================== */

.keterangan-text {
    max-width: 280px;
    color: #64748b;
    font-size: 12px;
    line-height: 1.5;
}


/* =====================================================
   ACTION
===================================================== */

.kas-action {
    display: flex;
    justify-content: center;
    gap: 6px;
}

.kas-action-btn {
    width: 35px;
    height: 35px;
    border-radius: 10px;
    border: none;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    transition: .2s ease;
}

.kas-action-btn:hover {
    transform: translateY(-2px);
}

.btn-edit-kas {
    background: #fef3c7;
    color: #d97706;
}

.btn-edit-kas:hover {
    background: #fde68a;
    color: #b45309;
}

.btn-delete-kas {
    background: #fee2e2;
    color: #dc2626;
}

.btn-delete-kas:hover {
    background: #fecaca;
    color: #b91c1c;
}


/* =====================================================
   EMPTY
===================================================== */

.empty-kas {
    text-align: center;
    padding: 65px 20px;
}

.empty-kas-icon {
    width: 75px;
    height: 75px;
    margin: auto;
    border-radius: 22px;
    background: #f0fdf4;
    color: #16a34a;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 30px;
}

.empty-kas h5 {
    margin-top: 18px;
    font-weight: 800;
    color: #334155;
}

.empty-kas p {
    color: #94a3b8;
    font-size: 13px;
}


/* =====================================================
   ALERT
===================================================== */

.kas-alert {
    border: none;
    border-radius: 15px;
    box-shadow: 0 5px 18px rgba(0,0,0,.05);
}


/* =====================================================
   RESPONSIVE
===================================================== */

@media(max-width: 768px) {

    .kas-hero {
        padding: 23px;
    }

    .kas-hero h3 {
        font-size: 21px;
    }

    .btn-tambah-kas {
        padding: 9px 13px;
        font-size: 12px;
    }

    .kas-card-header {
        padding: 18px;
    }

    .kas-table thead th,
    .kas-table tbody td {
        padding: 13px;
    }

    .keterangan-text {
        max-width: 180px;
    }

}

</style>

@endsection


@section('content')

<div class="container-fluid py-2">


    {{-- =====================================================
         HEADER
    ====================================================== --}}

    <div class="kas-hero">

        <div class="kas-hero-content">

            <div class="kas-hero-icon">
                <i class="fas fa-wallet"></i>
            </div>

            <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">

                <div>

                    <h3>
                        Kas Masjid
                    </h3>

                    <p>
                        Kelola dan pantau pemasukan serta pengeluaran kas masjid.
                    </p>

                </div>


                @if(auth()->user()->role === 'admin')

                    <a
                        href="{{ route('kas-masjid.create') }}"
                        class="btn btn-tambah-kas"
                    >

                        <i class="fas fa-plus me-2"></i>

                        Tambah Transaksi

                    </a>

                @endif

            </div>

        </div>

    </div>


    {{-- =====================================================
         ALERT
    ====================================================== --}}

    @if(session('success'))

        <div
            class="alert alert-success alert-dismissible fade show kas-alert mb-4"
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
         HITUNG DATA
    ====================================================== --}}

    @php

        $totalPemasukan = $kas->where('jenis', 'Pemasukan')->sum('nominal');

        $totalPengeluaran = $kas->where('jenis', 'Pengeluaran')->sum('nominal');

        $saldo = $totalPemasukan - $totalPengeluaran;

    @endphp


    {{-- =====================================================
         STATISTIK
    ====================================================== --}}

    <div class="row g-4">


        {{-- SALDO --}}

        <div class="col-xl-4 col-md-6">

            <div class="kas-stat">

                <div class="kas-stat-top">

                    <div>

                        <div class="kas-stat-label">
                            Saldo Kas
                        </div>

                        <h4 class="kas-stat-value text-success">

                            Rp {{ number_format($saldo, 0, ',', '.') }}

                        </h4>

                    </div>

                    <div class="kas-stat-icon saldo">

                        <i class="fas fa-wallet"></i>

                    </div>

                </div>

            </div>

        </div>


        {{-- PEMASUKAN --}}

        <div class="col-xl-4 col-md-6">

            <div class="kas-stat">

                <div class="kas-stat-top">

                    <div>

                        <div class="kas-stat-label">
                            Total Pemasukan
                        </div>

                        <h4 class="kas-stat-value">

                            Rp {{ number_format($totalPemasukan, 0, ',', '.') }}

                        </h4>

                    </div>

                    <div class="kas-stat-icon masuk">

                        <i class="fas fa-arrow-down"></i>

                    </div>

                </div>

            </div>

        </div>


        {{-- PENGELUARAN --}}

        <div class="col-xl-4 col-md-6">

            <div class="kas-stat">

                <div class="kas-stat-top">

                    <div>

                        <div class="kas-stat-label">
                            Total Pengeluaran
                        </div>

                        <h4 class="kas-stat-value">

                            Rp {{ number_format($totalPengeluaran, 0, ',', '.') }}

                        </h4>

                    </div>

                    <div class="kas-stat-icon keluar">

                        <i class="fas fa-arrow-up"></i>

                    </div>

                </div>

            </div>

        </div>

    </div>


    {{-- =====================================================
         TRANSAKSI
    ====================================================== --}}

    <div class="kas-card">


        {{-- HEADER --}}

        <div class="kas-card-header">

            <div class="kas-title-wrap">

                <div class="kas-title-icon">

                    <i class="fas fa-receipt"></i>

                </div>

                <div>

                    <h5>
                        Riwayat Transaksi
                    </h5>

                    <small>
                        Daftar pemasukan dan pengeluaran kas masjid
                    </small>

                </div>

            </div>


            <span class="total-transaksi">

                {{ $kas->count() }} Transaksi

            </span>

        </div>


        {{-- TABLE --}}

        <div class="table-responsive">

            <table class="table kas-table align-middle">

                <thead>

                    <tr>

                        <th class="text-center">
                            No
                        </th>

                        <th>
                            Tanggal
                        </th>

                        <th>
                            Jenis
                        </th>

                        <th>
                            Keterangan
                        </th>

                        <th>
                            Nominal
                        </th>

                        @if(auth()->user()->role === 'admin')

                            <th class="text-center">
                                Aksi
                            </th>

                        @endif

                    </tr>

                </thead>


                <tbody>

                    @forelse($kas as $item)

                        <tr>


                            {{-- NOMOR --}}

                            <td class="text-center">

                                <span class="nomor">

                                    {{ $loop->iteration }}

                                </span>

                            </td>


                            {{-- TANGGAL --}}

                            <td>

                                <div class="tanggal-box">

                                    <div class="tanggal-icon">

                                        <i class="fas fa-calendar-days"></i>

                                    </div>

                                    <div class="tanggal-text">

                                        {{ date('d M Y', strtotime($item->tanggal)) }}

                                    </div>

                                </div>

                            </td>


                            {{-- JENIS --}}

                            <td>

                                @if($item->jenis === 'Pemasukan')

                                    <span class="jenis-badge jenis-masuk">

                                        <i class="fas fa-arrow-down"></i>

                                        Pemasukan

                                    </span>

                                @else

                                    <span class="jenis-badge jenis-keluar">

                                        <i class="fas fa-arrow-up"></i>

                                        Pengeluaran

                                    </span>

                                @endif

                            </td>


                            {{-- KETERANGAN --}}

                            <td>

                                <div class="keterangan-text">

                                    {{ $item->keterangan ?: '-' }}

                                </div>

                            </td>


                            {{-- NOMINAL --}}

                            <td>

                                @if($item->jenis === 'Pemasukan')

                                    <span class="nominal-masuk">

                                        + Rp {{ number_format($item->nominal, 0, ',', '.') }}

                                    </span>

                                @else

                                    <span class="nominal-keluar">

                                        - Rp {{ number_format($item->nominal, 0, ',', '.') }}

                                    </span>

                                @endif

                            </td>


                            {{-- AKSI --}}

                            @if(auth()->user()->role === 'admin')

                                <td>

                                    <div class="kas-action">


                                        {{-- EDIT --}}

                                        <a
                                            href="{{ route('kas-masjid.edit', $item->id) }}"
                                            class="kas-action-btn btn-edit-kas"
                                            title="Edit"
                                        >

                                            <i class="fas fa-pen-to-square"></i>

                                        </a>


                                        {{-- HAPUS --}}

                                        <form
                                            action="{{ route('kas-masjid.destroy', $item->id) }}"
                                            method="POST"
                                            class="form-hapus-kas"
                                        >

                                            @csrf

                                            @method('DELETE')

                                            <button
                                                type="submit"
                                                class="kas-action-btn btn-delete-kas"
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

                                <div class="empty-kas">

                                    <div class="empty-kas-icon">

                                        <i class="fas fa-wallet"></i>

                                    </div>

                                    <h5>
                                        Belum Ada Transaksi
                                    </h5>

                                    <p>
                                        Belum ada data pemasukan atau pengeluaran kas masjid.
                                    </p>


                                    @if(auth()->user()->role === 'admin')

                                        <a
                                            href="{{ route('kas-masjid.create') }}"
                                            class="btn btn-success rounded-3 px-4"
                                        >

                                            <i class="fas fa-plus me-2"></i>

                                            Tambah Transaksi

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

        @if($kas->hasPages())

            <div class="p-3 border-top">

                {{ $kas->links() }}

            </div>

        @endif

    </div>

</div>

@endsection


@section('js')

<script>

document.querySelectorAll('.form-hapus-kas').forEach(function(form) {

    form.addEventListener('submit', function(e) {

        e.preventDefault();

        Swal.fire({

            title: 'Hapus transaksi?',
            text: 'Data transaksi ini akan dihapus secara permanen.',
            icon: 'warning',

            showCancelButton: true,

            confirmButtonText: 'Ya, Hapus',
            cancelButtonText: 'Batal',

            confirmButtonColor: '#15803d',
            cancelButtonColor: '#dc2626',

            reverseButtons: true,

            customClass: {
                popup: 'rounded-4'
            }

        }).then(function(result) {

            if (result.isConfirmed) {

                form.submit();

            }

        });

    });

});

</script>

@endsection