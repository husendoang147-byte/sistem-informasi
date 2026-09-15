@extends('layouts.app')

@section('title', 'Pengumuman Masjid')

@section('css')

<style>

.pengumuman-header {
    background: linear-gradient(135deg, #15803d, #22c55e);
    border-radius: 20px;
    padding: 30px;
    color: white;
    margin-bottom: 25px;
    box-shadow: 0 10px 30px rgba(0,0,0,.08);
}

.pengumuman-header h2 {
    font-weight: 700;
}

.pengumuman-header-icon {
    font-size: 75px;
    opacity: .18;
}


/* =========================
   STATISTIK
========================= */

.stat-pengumuman {
    border: none;
    border-radius: 18px;
    box-shadow: 0 8px 25px rgba(0,0,0,.06);
    transition: .3s;
}

.stat-pengumuman:hover {
    transform: translateY(-5px);
}

.pengumuman-icon {
    width: 55px;
    height: 55px;
    border-radius: 15px;

    display: flex;
    align-items: center;
    justify-content: center;

    color: white;
    font-size: 22px;
}


/* =========================
   CARD PENGUMUMAN
========================= */

.pengumuman-card {
    border: none;
    border-radius: 20px;
    overflow: hidden;

    box-shadow: 0 8px 25px rgba(0,0,0,.06);

    transition: .3s;

    height: 100%;
}

.pengumuman-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 35px rgba(0,0,0,.10);
}


/* =========================
   FOTO
========================= */

.foto-pengumuman {
    width: 100%;
    height: 250px;

    object-fit: cover;

    display: block;
}

.foto-placeholder {
    width: 100%;
    height: 250px;

    display: flex;
    align-items: center;
    justify-content: center;

    background: #f0fdf4;
}

.foto-placeholder i {
    font-size: 60px;
    color: #22c55e;
    opacity: .5;
}


/* =========================
   CARD HEADER
========================= */

.pengumuman-card-header {
    padding: 20px;

    background: #f0fdf4;

    border-bottom: 1px solid #dcfce7;
}

.pengumuman-title {
    color: #166534;
    font-weight: 700;
    line-height: 1.4;
}

.pengumuman-date {
    color: #6b7280;
    font-size: 13px;
}


/* =========================
   ISI
========================= */

.pengumuman-content {
    color: #4b5563;
    line-height: 1.7;
    white-space: pre-line;

    min-height: 80px;
}


/* =========================
   FOOTER
========================= */

.pengumuman-footer {
    border-top: 1px solid #f1f5f9;
    padding: 15px 20px;
}


/* =========================
   BUTTON
========================= */

.btn-tambah-pengumuman {
    border-radius: 12px;
    padding: 11px 18px;
    font-weight: 600;
}

.btn-aksi {
    width: 38px;
    height: 38px;

    display: inline-flex;
    align-items: center;
    justify-content: center;

    border-radius: 10px;
}


/* =========================
   EMPTY
========================= */

.empty-pengumuman {
    padding: 70px 20px;
}


/* =========================
   RESPONSIVE
========================= */

@media(max-width: 768px) {

    .pengumuman-header {
        padding: 22px;
    }

    .pengumuman-header-icon {
        display: none;
    }

    .pengumuman-header h2 {
        font-size: 24px;
    }

}

</style>

@endsection


@section('content')

<div class="container-fluid">


    {{-- =====================================================
         HEADER
    ====================================================== --}}

    <div class="pengumuman-header">

        <div class="d-flex justify-content-between align-items-center">

            <div>

                <div class="mb-2 opacity-75">

                    <i class="fas fa-bullhorn me-1"></i>

                    Sistem Informasi Masjid

                </div>

                <h2 class="mb-2">
                    Pengumuman Masjid
                </h2>

                <p class="mb-0 opacity-75">
                    Informasi dan pengumuman penting untuk jamaah masjid.
                </p>

            </div>

            <div>

                <i class="fas fa-bullhorn pengumuman-header-icon"></i>

            </div>

        </div>

    </div>


    {{-- =====================================================
         SUCCESS
    ====================================================== --}}

    @if(session('success'))

        <div class="alert alert-success alert-dismissible fade show rounded-3 border-0 shadow-sm">

            <i class="fas fa-check-circle me-2"></i>

            {{ session('success') }}

            <button type="button"
                    class="btn-close"
                    data-bs-dismiss="alert">
            </button>

        </div>

    @endif


    {{-- =====================================================
         ERROR
    ====================================================== --}}

    @if(session('error'))

        <div class="alert alert-danger alert-dismissible fade show rounded-3 border-0 shadow-sm">

            <i class="fas fa-exclamation-circle me-2"></i>

            {{ session('error') }}

            <button type="button"
                    class="btn-close"
                    data-bs-dismiss="alert">
            </button>

        </div>

    @endif


    {{-- =====================================================
         STATISTIK
    ====================================================== --}}

    <div class="row g-4 mb-4">


        {{-- TOTAL --}}

        <div class="col-md-4">

            <div class="card stat-pengumuman h-100">

                <div class="card-body">

                    <div class="d-flex justify-content-between align-items-center">

                        <div>

                            <small class="text-muted">
                                Total Pengumuman
                            </small>

                            <h3 class="fw-bold mb-0">

                                {{ $pengumuman->total() }}

                            </h3>

                            <small class="text-success">

                                <i class="fas fa-bullhorn me-1"></i>

                                Pengumuman

                            </small>

                        </div>

                        <div class="pengumuman-icon bg-success">

                            <i class="fas fa-bullhorn"></i>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        {{-- TERBARU --}}

        <div class="col-md-4">

            <div class="card stat-pengumuman h-100">

                <div class="card-body">

                    <div class="d-flex justify-content-between align-items-center">

                        <div>

                            <small class="text-muted">
                                Pengumuman Terbaru
                            </small>

                            <h3 class="fw-bold mb-0">

                                @if($pengumuman->count())

                                    {{ $pengumuman->first()->created_at->format('d M Y') }}

                                @else

                                    -

                                @endif

                            </h3>

                            <small class="text-primary">

                                <i class="fas fa-calendar me-1"></i>

                                Tanggal publikasi

                            </small>

                        </div>

                        <div class="pengumuman-icon bg-primary">

                            <i class="fas fa-calendar-alt"></i>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        {{-- STATUS --}}

        <div class="col-md-4">

            <div class="card stat-pengumuman h-100">

                <div class="card-body">

                    <div class="d-flex justify-content-between align-items-center">

                        <div>

                            <small class="text-muted">
                                Status
                            </small>

                            <h3 class="fw-bold mb-0">
                                Aktif
                            </h3>

                            <small class="text-success">

                                <i class="fas fa-check-circle me-1"></i>

                                Sistem berjalan

                            </small>

                        </div>

                        <div class="pengumuman-icon bg-warning">

                            <i class="fas fa-info-circle"></i>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>


    {{-- =====================================================
         JUDUL DAFTAR
    ====================================================== --}}

    <div class="d-flex justify-content-between align-items-center mb-3">

        <div>

            <h5 class="fw-bold mb-1">

                <i class="fas fa-list text-success me-2"></i>

                Daftar Pengumuman

            </h5>

            <small class="text-muted">

                Informasi terbaru untuk jamaah masjid.

            </small>

        </div>


        {{-- ADMIN SAJA --}}

        @if(auth()->user()->role === 'admin')

            <a href="{{ route('pengumuman.create') }}"
               class="btn btn-success btn-tambah-pengumuman">

                <i class="fas fa-plus me-1"></i>

                Tambah Pengumuman

            </a>

        @endif

    </div>


    {{-- =====================================================
         DAFTAR PENGUMUMAN
    ====================================================== --}}

    <div class="row g-4">

        @forelse($pengumuman as $item)

            <div class="col-lg-6">

                <div class="card pengumuman-card">


                    {{-- =================================================
                         FOTO
                    ================================================== --}}

                    @if($item->foto)

                        <img
                            src="{{ asset('storage/' . $item->foto) }}"
                            alt="{{ $item->judul }}"
                            class="foto-pengumuman"
                            loading="lazy"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">

                        {{-- fallback jika gambar rusak --}}

                        <div class="foto-placeholder"
                             style="display:none;">

                            <div class="text-center">

                                <i class="fas fa-image"></i>

                                <div class="text-muted mt-2">
                                    Foto tidak ditemukan
                                </div>

                            </div>

                        </div>

                    @else

                        <div class="foto-placeholder">

                            <div class="text-center">

                                <i class="fas fa-bullhorn"></i>

                                <div class="text-muted mt-2">
                                    Pengumuman Masjid
                                </div>

                            </div>

                        </div>

                    @endif


                    {{-- =================================================
                         HEADER CARD
                    ================================================== --}}

                    <div class="pengumuman-card-header">

                        <div class="d-flex justify-content-between align-items-start">

                            <div class="flex-grow-1">

                                <div class="mb-2">

                                    <span class="badge bg-success">

                                        <i class="fas fa-bullhorn me-1"></i>

                                        Pengumuman

                                    </span>

                                </div>


                                <h5 class="pengumuman-title mb-1">

                                    {{ $item->judul }}

                                </h5>


                                <div class="pengumuman-date">

                                    <i class="fas fa-calendar-alt me-1"></i>

                                    {{ $item->created_at->format('d M Y') }}

                                </div>

                            </div>


                            <i class="fas fa-bullhorn text-success fs-3 opacity-25 ms-3"></i>

                        </div>

                    </div>


                    {{-- =================================================
                         ISI
                    ================================================== --}}

                    <div class="card-body">

                        <div class="pengumuman-content">

                            {{ $item->isi }}

                        </div>

                    </div>


                    {{-- =================================================
                         FOOTER
                    ================================================== --}}

                    <div class="pengumuman-footer">

                        <div class="d-flex justify-content-between align-items-center">


                            <small class="text-muted">

                                <i class="fas fa-clock me-1"></i>

                                {{ $item->created_at->diffForHumans() }}

                            </small>


                            {{-- =========================================
                                 AKSI ADMIN SAJA
                            ========================================== --}}

                            @if(auth()->user()->role === 'admin')

                                <div>

                                    {{-- EDIT --}}

                                    <a href="{{ route('pengumuman.edit', $item->id) }}"
                                       class="btn btn-warning btn-aksi me-1"
                                       title="Edit Pengumuman">

                                        <i class="fas fa-edit"></i>

                                    </a>


                                    {{-- HAPUS --}}

                                    <form
                                        action="{{ route('pengumuman.destroy', $item->id) }}"
                                        method="POST"
                                        class="d-inline form-hapus">

                                        @csrf

                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="btn btn-danger btn-aksi"
                                            title="Hapus Pengumuman">

                                            <i class="fas fa-trash"></i>

                                        </button>

                                    </form>

                                </div>

                            @endif

                        </div>

                    </div>

                </div>

            </div>


        @empty


            {{-- =================================================
                 DATA KOSONG
            ================================================== --}}

            <div class="col-12">

                <div class="card border-0 shadow-sm rounded-4">

                    <div class="empty-pengumuman text-center">

                        <i class="fas fa-bullhorn fa-4x text-success mb-3"></i>

                        <h5 class="fw-bold">

                            Belum ada pengumuman

                        </h5>

                        <p class="text-muted">

                            Belum ada informasi atau pengumuman yang dibuat.

                        </p>


                        {{-- ADMIN SAJA --}}

                        @if(auth()->user()->role === 'admin')

                            <a href="{{ route('pengumuman.create') }}"
                               class="btn btn-success">

                                <i class="fas fa-plus me-1"></i>

                                Buat Pengumuman

                            </a>

                        @endif

                    </div>

                </div>

            </div>

        @endforelse

    </div>


    {{-- =====================================================
         PAGINATION
    ====================================================== --}}

    @if($pengumuman->hasPages())

        <div class="mt-4">

            {{ $pengumuman->links() }}

        </div>

    @endif

</div>

@endsection


@section('js')

<script>

document.querySelectorAll('.form-hapus').forEach(function(form) {

    form.addEventListener('submit', function(e) {

        e.preventDefault();

        Swal.fire({

            title: 'Yakin ingin menghapus?',

            text: 'Pengumuman akan dihapus permanen.',

            icon: 'warning',

            showCancelButton: true,

            confirmButtonColor: '#16a34a',

            cancelButtonColor: '#dc3545',

            confirmButtonText: 'Ya, Hapus!',

            cancelButtonText: 'Batal'

        }).then(function(result) {

            if (result.isConfirmed) {

                form.submit();

            }

        });

    });

});

</script>

@endsection