@extends('layouts.app')

@section('title','Dashboard')

@section('css')

<style>

/* =========================
   HERO
========================= */

.hero-dashboard{
    position:relative;
    overflow:hidden;
    background:linear-gradient(135deg,#166534,#15803d,#22c55e);
    border-radius:24px;
    padding:35px;
    color:white;
    margin-bottom:25px;
    box-shadow:0 12px 35px rgba(21,128,61,.20);
}

.hero-dashboard::before{
    content:"";
    position:absolute;
    width:220px;
    height:220px;
    border-radius:50%;
    background:rgba(255,255,255,.08);
    right:-70px;
    top:-80px;
}

.hero-dashboard::after{
    content:"";
    position:absolute;
    width:150px;
    height:150px;
    border-radius:50%;
    background:rgba(255,255,255,.06);
    right:120px;
    bottom:-90px;
}

.hero-content{
    position:relative;
    z-index:2;
}

.hero-dashboard h2{
    font-weight:700;
    margin-bottom:10px;
}

.hero-dashboard p{
    opacity:.9;
}

.mosque-icon{
    font-size:100px;
    opacity:.18;
}


/* =========================
   STAT CARD
========================= */

.stat-card{
    border:none;
    border-radius:20px;
    overflow:hidden;
    transition:.3s;
    box-shadow:0 8px 25px rgba(0,0,0,.06);
    height:100%;
}

.stat-card:hover{
    transform:translateY(-7px);
    box-shadow:0 15px 30px rgba(0,0,0,.10);
}

.stat-top{
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.stat-title{
    font-size:14px;
    color:#6b7280;
    margin-bottom:5px;
}

.stat-value{
    font-size:25px;
    font-weight:700;
    color:#111827;
}

.stat-icon{
    width:58px;
    height:58px;
    border-radius:17px;
    display:flex;
    justify-content:center;
    align-items:center;
    color:white;
    font-size:24px;
}


/* =========================
   CARD
========================= */

.card-modern{
    border:none;
    border-radius:20px;
    box-shadow:0 8px 25px rgba(0,0,0,.05);
    overflow:hidden;
}

.card-title-modern{
    font-weight:700;
}


/* =========================
   CHART
========================= */

.chart-container{
    position:relative;
    width:100%;
    height:260px;
}


/* =========================
   RINGKASAN
========================= */

.summary-item{
    padding:15px;
    border-radius:15px;
    background:#f8fafc;
    margin-bottom:12px;
}

.summary-icon{
    width:42px;
    height:42px;
    border-radius:12px;
    display:flex;
    align-items:center;
    justify-content:center;
    color:white;
}


/* =========================
   QUICK MENU
========================= */

.quick-title{
    font-weight:700;
    margin-bottom:15px;
}

.quick-btn{
    width:100%;
    min-height:130px;
    border-radius:20px;
    padding:22px;
    text-align:center;
    color:white;
    text-decoration:none;
    display:flex;
    flex-direction:column;
    align-items:center;
    justify-content:center;
    transition:.3s;
    box-shadow:0 8px 20px rgba(0,0,0,.07);
}

.quick-btn:hover{
    transform:translateY(-7px);
    color:white;
    box-shadow:0 15px 30px rgba(0,0,0,.12);
}

.quick-btn i{
    margin-bottom:12px;
}


/* =========================
   PRAYER CARD
========================= */

.prayer-card{
    border:none;
    border-radius:20px;
    overflow:hidden;
    box-shadow:0 8px 25px rgba(0,0,0,.05);
}

.prayer-header{
    background:linear-gradient(135deg,#166534,#22c55e);
    color:white;
    padding:18px 20px;
}

.prayer-item{
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:13px 15px;
    border-bottom:1px solid #f1f5f9;
}

.prayer-item:last-child{
    border-bottom:none;
}

.prayer-name{
    display:flex;
    align-items:center;
    gap:10px;
}

.prayer-icon{
    width:35px;
    height:35px;
    border-radius:10px;
    display:flex;
    align-items:center;
    justify-content:center;
    background:#dcfce7;
    color:#15803d;
}

.prayer-time{
    font-weight:700;
    color:#15803d;
}


/* =========================
   RESPONSIVE
========================= */

@media(max-width:768px){

    .hero-dashboard{
        padding:25px;
    }

    .mosque-icon{
        display:none;
    }

    .chart-container{
        height:220px;
    }

}

.btn-jadwal {
    display: inline-flex;
    align-items: center;
    gap: 9px;
    padding: 9px 15px;
    background: rgba(255,255,255,.15);
    border: 1px solid rgba(255,255,255,.35);
    border-radius: 12px;
    color: white;
    text-decoration: none;
    font-size: 13px;
    font-weight: 600;
    backdrop-filter: blur(8px);
    transition: all .3s ease;
}

.btn-jadwal i {
    font-size: 12px;
    transition: transform .3s ease;
}

.btn-jadwal:hover {
    background: white;
    color: #15803d;
    transform: translateY(-2px);
    box-shadow: 0 8px 18px rgba(0,0,0,.12);
}

.btn-jadwal:hover i {
    transform: translateX(4px);
}

</style>

@endsection


@section('content')

{{-- =========================
     HERO
========================= --}}

<div class="hero-dashboard">

    <div class="hero-content">

        <div class="row align-items-center">

            <div class="col-lg-8">

                <div class="mb-2">
                    <span class="badge bg-light text-success px-3 py-2 rounded-pill">
                        <i class="fas fa-mosque me-1"></i>
                        Dashboard Masjid
                    </span>
                </div>

                <h2>
                    Assalamu'alaikum,
                    {{ Auth::user()->name }} 👋
                </h2>

                <p class="mb-0">
                    Selamat datang di
                    <strong>Sistem Informasi Masjid</strong>.
                    Semoga Allah memudahkan segala urusan
                    pengelolaan masjid.
                </p>

            </div>

            <div class="col-lg-4 text-end">

                <i class="fas fa-mosque mosque-icon"></i>

            </div>

        </div>

    </div>

</div>


{{-- =========================
     STATISTIK
========================= --}}

<div class="row g-4 mb-4">

    {{-- Pengurus --}}
    <div class="col-xl-3 col-md-6">

        <div class="card stat-card">

            <div class="card-body p-4">

                <div class="stat-top">

                    <div>

                        <div class="stat-title">
                            Total Pengurus
                        </div>

                        <div class="stat-value">
                            {{ $data['totalPengurus'] }}
                        </div>

                        <small class="text-success">
                            <i class="fas fa-users me-1"></i>
                            Pengurus aktif
                        </small>

                    </div>

                    <div class="stat-icon bg-success">

                        <i class="fas fa-users"></i>

                    </div>

                </div>

            </div>

        </div>

    </div>


    {{-- Kas --}}
    <div class="col-xl-3 col-md-6">

        <div class="card stat-card">

            <div class="card-body p-4">

                <div class="stat-top">

                    <div>

                        <div class="stat-title">
                            Saldo Kas
                        </div>

                        <div class="stat-value">
                            Rp {{ number_format($data['saldoKas'],0,',','.') }}
                        </div>

                        <small class="text-primary">
                            <i class="fas fa-wallet me-1"></i>
                            Kas masjid
                        </small>

                    </div>

                    <div class="stat-icon bg-primary">

                        <i class="fas fa-wallet"></i>

                    </div>

                </div>

            </div>

        </div>

    </div>


    {{-- Donasi --}}
    <div class="col-xl-3 col-md-6">

        <div class="card stat-card">

            <div class="card-body p-4">

                <div class="stat-top">

                    <div>

                        <div class="stat-title">
                            Total Donasi
                        </div>

                        <div class="stat-value">
                            {{ $data['totalDonasi'] }}
                        </div>

                        <small class="text-warning">
                            Rp {{ number_format($data['totalNominalDonasi'],0,',','.') }}
                        </small>

                    </div>

                    <div class="stat-icon bg-warning">

                        <i class="fas fa-hand-holding-heart"></i>

                    </div>

                </div>

            </div>

        </div>

    </div>


    {{-- Pengumuman --}}
    <div class="col-xl-3 col-md-6">

        <div class="card stat-card">

            <div class="card-body p-4">

                <div class="stat-top">

                    <div>

                        <div class="stat-title">
                            Pengumuman
                        </div>

                        <div class="stat-value">
                            {{ $data['totalPengumuman'] }}
                        </div>

                        <small class="text-danger">
                            <i class="fas fa-bullhorn me-1"></i>
                            Informasi masjid
                        </small>

                    </div>

                    <div class="stat-icon bg-danger">

                        <i class="fas fa-bullhorn"></i>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>


{{-- =========================
     GRAFIK + RINGKASAN
========================= --}}

<div class="row g-4 mb-4">

    {{-- Grafik --}}
    <div class="col-lg-8">

        <div class="card card-modern">

            <div class="card-header bg-white border-0 p-4">

                <div class="d-flex justify-content-between align-items-center">

                    <div>

                        <h5 class="card-title-modern mb-1">

                            <i class="fas fa-chart-line text-success me-2"></i>

                            Grafik Kas Masjid

                        </h5>

                        <small class="text-muted">
                            Perbandingan pemasukan dan pengeluaran
                        </small>

                    </div>

                    <span class="badge bg-success-subtle text-success">
                        Keuangan
                    </span>

                </div>

            </div>

            <div class="card-body px-4 pb-4">

                <div class="chart-container">

                    <canvas id="chartKas"></canvas>

                </div>

            </div>

        </div>

    </div>


    {{-- Ringkasan --}}
    <div class="col-lg-4">

        <div class="card card-modern h-100">

            <div class="card-header bg-success text-white border-0 p-4">

                <h5 class="mb-1">
                    <i class="fas fa-wallet me-2"></i>
                    Ringkasan Kas
                </h5>

                <small class="opacity-75">
                    Kondisi keuangan masjid
                </small>

            </div>

            <div class="card-body p-4">

                <div class="summary-item">

                    <div class="d-flex align-items-center">

                        <div class="summary-icon bg-success me-3">

                            <i class="fas fa-arrow-down"></i>

                        </div>

                        <div>

                            <small class="text-muted">
                                Total Pemasukan
                            </small>

                            <h5 class="text-success mb-0">

                                Rp {{ number_format($data['totalPemasukan'],0,',','.') }}

                            </h5>

                        </div>

                    </div>

                </div>


                <div class="summary-item">

                    <div class="d-flex align-items-center">

                        <div class="summary-icon bg-danger me-3">

                            <i class="fas fa-arrow-up"></i>

                        </div>

                        <div>

                            <small class="text-muted">
                                Total Pengeluaran
                            </small>

                            <h5 class="text-danger mb-0">

                                Rp {{ number_format($data['totalPengeluaran'],0,',','.') }}

                            </h5>

                        </div>

                    </div>

                </div>


                <div class="summary-item mb-0">

                    <div class="d-flex align-items-center">

                        <div class="summary-icon bg-primary me-3">

                            <i class="fas fa-coins"></i>

                        </div>

                        <div>

                            <small class="text-muted">
                                Saldo Saat Ini
                            </small>

                            <h5 class="text-primary mb-0">

                                Rp {{ number_format($data['saldoKas'],0,',','.') }}

                            </h5>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>


{{-- =========================
     JADWAL SHOLAT
========================= --}}

<div class="row g-4 mb-4">

    <div class="col-lg-8">

        <div class="card prayer-card">

            <div class="prayer-header">

                <div class="d-flex justify-content-between align-items-center">

                    <div>

                        <h5 class="mb-1">
                            <i class="fas fa-clock me-2"></i>
                            Jadwal Sholat
                        </h5>

                        <small class="opacity-75">
                            Jadwal sholat hari ini
                        </small>

                    </div>

                    <a href="{{ route('jadwal.index') }}" class="btn-jadwal">

    <span>Lihat Semua</span>

    <i class="fas fa-arrow-right"></i>

</a>

                </div>

            </div>

            <div class="card-body p-0">

                @if($jadwalSholat)

    <div class="prayer-item">

        <div class="prayer-name">
            <div class="prayer-icon">
                <i class="fas fa-cloud-moon"></i>
            </div>

            <strong>Subuh</strong>
        </div>

        <div class="prayer-time">
            {{ \Carbon\Carbon::parse($jadwalSholat->subuh)->format('H:i') }}
        </div>

    </div>


    <div class="prayer-item">

        <div class="prayer-name">
            <div class="prayer-icon">
                <i class="fas fa-sun"></i>
            </div>

            <strong>Dzuhur</strong>
        </div>

        <div class="prayer-time">
            {{ \Carbon\Carbon::parse($jadwalSholat->dzuhur)->format('H:i') }}
        </div>

    </div>


    <div class="prayer-item">

        <div class="prayer-name">
            <div class="prayer-icon">
                <i class="fas fa-cloud-sun"></i>
            </div>

            <strong>Ashar</strong>
        </div>

        <div class="prayer-time">
            {{ \Carbon\Carbon::parse($jadwalSholat->ashar)->format('H:i') }}
        </div>

    </div>


    <div class="prayer-item">

        <div class="prayer-name">
            <div class="prayer-icon">
                <i class="fas fa-cloud"></i>
            </div>

            <strong>Maghrib</strong>
        </div>

        <div class="prayer-time">
            {{ \Carbon\Carbon::parse($jadwalSholat->maghrib)->format('H:i') }}
        </div>

    </div>


    <div class="prayer-item">

        <div class="prayer-name">
            <div class="prayer-icon">
                <i class="fas fa-moon"></i>
            </div>

            <strong>Isya</strong>
        </div>

        <div class="prayer-time">
            {{ \Carbon\Carbon::parse($jadwalSholat->isya)->format('H:i') }}
        </div>

    </div>

@else

    <div class="text-center text-muted p-4">

        <i class="fas fa-clock fa-2x mb-2"></i>

        <p class="mb-0">
            Jadwal sholat belum tersedia.
        </p>

    </div>

@endif

            </div>

        </div>

    </div>


    <div class="col-lg-4">

        <div class="card card-modern h-100">

            <div class="card-body p-4 text-center">

                <div class="mb-3">

                    <div class="stat-icon bg-success mx-auto">

                        <i class="fas fa-heart"></i>

                    </div>

                </div>

                <h5 class="fw-bold">
                    Semangat Beramal 🤲
                </h5>

                <p class="text-muted">

                    Mari bersama-sama menjaga dan memakmurkan
                    masjid dengan penuh keikhlasan.

                </p>

                <a href="{{ route('donasi.index') }}"
                   class="btn btn-success rounded-pill px-4">

                    <i class="fas fa-hand-holding-heart me-1"></i>

                    Lihat Donasi

                </a>

            </div>

        </div>

    </div>

</div>


{{-- =========================
     MENU CEPAT
========================= --}}

<div class="mb-3">

    <h5 class="quick-title">

        <i class="fas fa-bolt text-warning me-2"></i>

        Menu Cepat

    </h5>

</div>


<div class="row g-4 mb-4">

    <div class="col-xl-3 col-md-6">

        <a href="{{ route('pengurus.index') }}"
           class="quick-btn bg-success">

            <i class="fas fa-users fa-2x"></i>

            <strong>Pengurus</strong>

            <small class="mt-1 opacity-75">
                Kelola pengurus
            </small>

        </a>

    </div>


    <div class="col-xl-3 col-md-6">

        <a href="{{ route('kas-masjid.index') }}"
           class="quick-btn bg-primary">

            <i class="fas fa-wallet fa-2x"></i>

            <strong>Kas Masjid</strong>

            <small class="mt-1 opacity-75">
                Kelola transaksi
            </small>

        </a>

    </div>


    <div class="col-xl-3 col-md-6">

        <a href="{{ route('donasi.index') }}"
           class="quick-btn bg-warning">

            <i class="fas fa-hand-holding-heart fa-2x"></i>

            <strong>Donasi</strong>

            <small class="mt-1 opacity-75">
                Kelola donasi
            </small>

        </a>

    </div>


    <div class="col-xl-3 col-md-6">

        <a href="{{ route('pengumuman.index') }}"
           class="quick-btn bg-danger">

            <i class="fas fa-bullhorn fa-2x"></i>

            <strong>Pengumuman</strong>

            <small class="mt-1 opacity-75">
                Kelola informasi
            </small>

        </a>

    </div>

</div>


@endsection


@section('js')

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>

const labels = @json($label);
const pemasukan = @json($pemasukan);
const pengeluaran = @json($pengeluaran);

new Chart(document.getElementById('chartKas'), {

    type: 'line',

    data: {

        labels: labels,

        datasets: [

            {
                label: 'Pemasukan',
                data: pemasukan,
                borderColor: '#16a34a',
                backgroundColor: 'rgba(22,163,74,0.12)',
                fill: true,
                tension: 0.4,
                borderWidth: 3,
                pointRadius: 3
            },

            {
                label: 'Pengeluaran',
                data: pengeluaran,
                borderColor: '#ef4444',
                backgroundColor: 'rgba(239,68,68,0.10)',
                fill: true,
                tension: 0.4,
                borderWidth: 3,
                pointRadius: 3
            }

        ]

    },

    options: {

        responsive: true,

        maintainAspectRatio: false,

        plugins: {

            legend: {
                position: 'top'
            }

        },

        scales: {

            y: {

                beginAtZero: true,

                ticks: {

                    callback: function(value) {

                        return 'Rp ' +
                            Number(value).toLocaleString('id-ID');

                    }

                }

            }

        }

    }

});

</script>

@endsection