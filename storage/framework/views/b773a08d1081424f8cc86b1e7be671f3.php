

<?php $__env->startSection('title', 'Laporan'); ?>

<?php $__env->startSection('css'); ?>

<style>

    /* =========================
       GLOBAL
    ========================= */

    .laporan-page {
        padding-bottom: 30px;
    }

    /* =========================
       HEADER
    ========================= */

    .laporan-hero {
        position: relative;
        overflow: hidden;
        background: linear-gradient(135deg, #14532d, #15803d, #22c55e);
        border-radius: 24px;
        padding: 32px;
        color: white;
        margin-bottom: 25px;
        box-shadow: 0 12px 35px rgba(21,128,61,.18);
    }

    .laporan-hero::before {
        content: "";
        position: absolute;
        width: 230px;
        height: 230px;
        border-radius: 50%;
        background: rgba(255,255,255,.07);
        right: -70px;
        top: -90px;
    }

    .laporan-hero::after {
        content: "";
        position: absolute;
        width: 150px;
        height: 150px;
        border-radius: 50%;
        background: rgba(255,255,255,.06);
        right: 150px;
        bottom: -100px;
    }

    .laporan-hero-content {
        position: relative;
        z-index: 2;
    }

    .laporan-hero h2 {
        font-weight: 700;
        margin-bottom: 8px;
    }

    .laporan-hero p {
        margin: 0;
        opacity: .85;
    }

    .btn-print {
        background: white;
        color: #166534;
        border: none;
        border-radius: 12px;
        padding: 10px 17px;
        font-weight: 600;
        transition: .3s;
    }

    .btn-print:hover {
        background: #f0fdf4;
        color: #14532d;
        transform: translateY(-2px);
    }

    /* =========================
       STAT
    ========================= */

    .laporan-stat {
        border: none;
        border-radius: 20px;
        background: white;
        box-shadow: 0 8px 25px rgba(0,0,0,.055);
        transition: .3s;
        overflow: hidden;
        height: 100%;
    }

    .laporan-stat:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0,0,0,.09);
    }

    .laporan-stat-body {
        padding: 22px;
    }

    .laporan-stat-label {
        color: #64748b;
        font-size: 13px;
        margin-bottom: 6px;
    }

    .laporan-stat-value {
        font-size: 21px;
        font-weight: 700;
        color: #0f172a;
        line-height: 1.3;
    }

    .laporan-stat-icon {
        width: 52px;
        height: 52px;
        border-radius: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 21px;
    }

    .stat-green {
        background: #16a34a;
    }

    .stat-red {
        background: #ef4444;
    }

    .stat-yellow {
        background: #f59e0b;
    }

    .stat-blue {
        background: #2563eb;
    }

    /* =========================
       CARD
    ========================= */

    .laporan-card {
        border: none;
        border-radius: 20px;
        box-shadow: 0 8px 25px rgba(0,0,0,.05);
        overflow: hidden;
    }

    .laporan-card-header {
        padding: 20px 23px;
        background: white;
        border-bottom: 1px solid #f1f5f9;
    }

    .laporan-card-title {
        font-weight: 700;
        color: #0f172a;
        margin-bottom: 3px;
    }

    .laporan-card-subtitle {
        font-size: 13px;
        color: #64748b;
    }

    /* =========================
       FILTER
    ========================= */

    .filter-area {
        background: #f8fafc;
        border: 1px solid #e2e8f0;
        border-radius: 16px;
        padding: 18px;
    }

    .filter-label {
        font-size: 13px;
        font-weight: 600;
        color: #334155;
        margin-bottom: 7px;
    }

    .filter-control {
        border-radius: 11px;
        border: 1px solid #dbe3ea;
        min-height: 43px;
    }

    .filter-control:focus {
        border-color: #22c55e;
        box-shadow: 0 0 0 .2rem rgba(34,197,94,.12);
    }

    .btn-filter {
        border-radius: 11px;
        min-height: 43px;
        font-weight: 600;
        padding: 0 17px;
    }

    /* =========================
       TABLE
    ========================= */

    .laporan-table {
        margin: 0;
    }

    .laporan-table thead th {
        background: #f0fdf4;
        color: #166534;
        border: none;
        padding: 15px 18px;
        font-size: 13px;
        font-weight: 700;
        white-space: nowrap;
    }

    .laporan-table tbody td {
        padding: 16px 18px;
        border-color: #f1f5f9;
        vertical-align: middle;
    }

    .laporan-table tbody tr {
        transition: .2s;
    }

    .laporan-table tbody tr:hover {
        background: #f8fffa;
    }

    .tanggal-badge {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 7px 10px;
        border-radius: 10px;
        background: #f8fafc;
        color: #475569;
        font-size: 12px;
        font-weight: 600;
    }

    .badge-pemasukan {
        display: inline-flex;
        align-items: center;
        gap: 5px;
        padding: 7px 11px;
        border-radius: 50px;
        background: #dcfce7;
        color: #166534;
        font-size: 12px;
        font-weight: 600;
    }

    .badge-pengeluaran {
        display: inline-flex;
        align-items: center;
        gap: 5px;
        padding: 7px 11px;
        border-radius: 50px;
        background: #fee2e2;
        color: #991b1b;
        font-size: 12px;
        font-weight: 600;
    }

    .nominal-kas {
        font-weight: 700;
        color: #0f172a;
    }

    .nominal-donasi {
        font-weight: 700;
        color: #15803d;
    }

    .donatur-name {
        font-weight: 600;
        color: #334155;
    }

    /* =========================
       EMPTY
    ========================= */

    .empty-laporan {
        text-align: center;
        padding: 55px 20px;
        color: #64748b;
    }

    .empty-laporan i {
        color: #86efac;
        font-size: 48px;
        margin-bottom: 12px;
    }

    /* =========================
       PRINT
    ========================= */

    .print-header {
        display: none;
    }

    @media print {

        @page {
            size: A4;
            margin: 12mm;
        }

        body {
            background: white !important;
        }

        .sidebar,
        .topbar,
        .navbar,
        .btn-print,
        .filter-laporan,
        .btn,
        button {
            display: none !important;
        }

        .laporan-hero {
            display: none !important;
        }

        .print-header {
            display: block !important;
            text-align: center;
            margin-bottom: 20px;
        }

        .print-header h2 {
            font-size: 22px;
            margin-bottom: 4px;
        }

        .print-header h4 {
            font-size: 17px;
            margin-bottom: 4px;
        }

        .print-header p {
            margin-bottom: 8px;
            color: #555;
        }

        .laporan-page,
        .container,
        .container-fluid,
        .main-content,
        .content {
            width: 100% !important;
            max-width: 100% !important;
            margin: 0 !important;
            padding: 0 !important;
        }

        .laporan-stat {
            box-shadow: none !important;
            border: 1px solid #ddd !important;
        }

        .laporan-card {
            box-shadow: none !important;
            border: 1px solid #ddd !important;
            break-inside: avoid;
        }

        .laporan-table {
            font-size: 11px;
        }

        .laporan-table tbody tr:hover {
            background: transparent !important;
        }

        tr {
            page-break-inside: avoid;
        }

        .badge-pemasukan,
        .badge-pengeluaran {
            -webkit-print-color-adjust: exact;
            print-color-adjust: exact;
        }
    }

    @media(max-width:768px) {

        .laporan-hero {
            padding: 25px;
        }

        .laporan-hero h2 {
            font-size: 22px;
        }

        .laporan-hero .btn-print {
            margin-top: 15px;
        }

    }

</style>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<div class="container-fluid laporan-page">

    

    <div class="laporan-hero">

        <div class="laporan-hero-content">

            <div class="row align-items-center">

                <div class="col-lg-8">

                    <div class="mb-2">

                        <span class="badge bg-light text-success rounded-pill px-3 py-2">

                            <i class="fas fa-file-invoice me-1"></i>

                            Sistem Informasi Masjid

                        </span>

                    </div>

                    <h2>
                        Laporan Keuangan Masjid
                    </h2>

                    <p>
                        Pantau pemasukan, pengeluaran, donasi dan saldo kas masjid.
                    </p>

                </div>

                <div class="col-lg-4 text-lg-end">

                    <button
                        type="button"
                        onclick="window.print()"
                        class="btn btn-print"
                    >

                        <i class="fas fa-print me-2"></i>

                        Cetak Laporan

                    </button>

                </div>

            </div>

        </div>

    </div>


    

    <div class="print-header">

        <h2>SISTEM INFORMASI MASJID</h2>

        <h4>LAPORAN KEUANGAN MASJID</h4>

        <p>
            Dicetak pada:
            <?php echo e(now()->format('d/m/Y H:i')); ?>

        </p>

        <hr>

    </div>


    

    <div class="row g-4 mb-4">

        <div class="col-xl-3 col-md-6">

            <div class="laporan-stat">

                <div class="laporan-stat-body">

                    <div class="d-flex justify-content-between align-items-center">

                        <div>

                            <div class="laporan-stat-label">
                                Total Pemasukan
                            </div>

                            <div class="laporan-stat-value text-success">
                                Rp <?php echo e(number_format($totalPemasukan,0,',','.')); ?>

                            </div>

                        </div>

                        <div class="laporan-stat-icon stat-green">

                            <i class="fas fa-arrow-down"></i>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        <div class="col-xl-3 col-md-6">

            <div class="laporan-stat">

                <div class="laporan-stat-body">

                    <div class="d-flex justify-content-between align-items-center">

                        <div>

                            <div class="laporan-stat-label">
                                Total Pengeluaran
                            </div>

                            <div class="laporan-stat-value text-danger">
                                Rp <?php echo e(number_format($totalPengeluaran,0,',','.')); ?>

                            </div>

                        </div>

                        <div class="laporan-stat-icon stat-red">

                            <i class="fas fa-arrow-up"></i>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        <div class="col-xl-3 col-md-6">

            <div class="laporan-stat">

                <div class="laporan-stat-body">

                    <div class="d-flex justify-content-between align-items-center">

                        <div>

                            <div class="laporan-stat-label">
                                Total Donasi
                            </div>

                            <div class="laporan-stat-value text-warning">
                                Rp <?php echo e(number_format($totalDonasi,0,',','.')); ?>

                            </div>

                        </div>

                        <div class="laporan-stat-icon stat-yellow">

                            <i class="fas fa-hand-holding-heart"></i>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        <div class="col-xl-3 col-md-6">

            <div class="laporan-stat">

                <div class="laporan-stat-body">

                    <div class="d-flex justify-content-between align-items-center">

                        <div>

                            <div class="laporan-stat-label">
                                Saldo Kas
                            </div>

                            <div class="laporan-stat-value text-primary">
                                Rp <?php echo e(number_format($saldo,0,',','.')); ?>

                            </div>

                        </div>

                        <div class="laporan-stat-icon stat-blue">

                            <i class="fas fa-wallet"></i>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>


    

    <div class="card laporan-card filter-laporan mb-4">

        <div class="laporan-card-header">

            <h5 class="laporan-card-title">

                <i class="fas fa-sliders-h text-success me-2"></i>

                Filter Laporan

            </h5>

            <div class="laporan-card-subtitle">
                Tentukan periode laporan yang ingin ditampilkan.
            </div>

        </div>

        <div class="card-body p-4">

            <form method="GET" action="<?php echo e(route('laporan.index')); ?>">

                <div class="filter-area">

                    <div class="row g-3 align-items-end">

                        <div class="col-md-4">

                            <label class="filter-label">
                                Tanggal Mulai
                            </label>

                            <input
                                type="date"
                                name="tanggal_mulai"
                                class="form-control filter-control"
                                value="<?php echo e(request('tanggal_mulai')); ?>"
                            >

                        </div>


                        <div class="col-md-4">

                            <label class="filter-label">
                                Tanggal Selesai
                            </label>

                            <input
                                type="date"
                                name="tanggal_selesai"
                                class="form-control filter-control"
                                value="<?php echo e(request('tanggal_selesai')); ?>"
                            >

                        </div>


                        <div class="col-md-4 d-flex gap-2">

                            <button
                                type="submit"
                                class="btn btn-success btn-filter"
                            >

                                <i class="fas fa-search me-1"></i>

                                Tampilkan

                            </button>

                            <a
                                href="<?php echo e(route('laporan.index')); ?>"
                                class="btn btn-light border btn-filter"
                            >

                                <i class="fas fa-redo me-1"></i>

                                Reset

                            </a>

                        </div>

                    </div>

                </div>

            </form>

        </div>

    </div>


    

    <div class="card laporan-card mb-4">

        <div class="laporan-card-header">

            <div class="d-flex justify-content-between align-items-center">

                <div>

                    <h5 class="laporan-card-title">

                        <i class="fas fa-wallet text-success me-2"></i>

                        Laporan Kas Masjid

                    </h5>

                    <div class="laporan-card-subtitle">
                        Riwayat transaksi pemasukan dan pengeluaran.
                    </div>

                </div>

                <span class="badge bg-success rounded-pill px-3 py-2">

                    <?php echo e($dataKas->count()); ?> Transaksi

                </span>

            </div>

        </div>


        <div class="table-responsive">

            <table class="table laporan-table align-middle">

                <thead>

                    <tr>

                        <th width="60">
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

                        <th class="text-end">
                            Nominal
                        </th>

                    </tr>

                </thead>

                <tbody>

                    <?php $__empty_1 = true; $__currentLoopData = $dataKas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                        <tr>

                            <td class="fw-semibold text-muted">
                                <?php echo e($loop->iteration); ?>

                            </td>

                            <td>

                                <span class="tanggal-badge">

                                    <i class="far fa-calendar"></i>

                                    <?php echo e(\Carbon\Carbon::parse($item->tanggal)->format('d/m/Y')); ?>


                                </span>

                            </td>

                            <td>

                                <?php if($item->jenis == 'Pemasukan'): ?>

                                    <span class="badge-pemasukan">

                                        <i class="fas fa-arrow-down"></i>

                                        Pemasukan

                                    </span>

                                <?php else: ?>

                                    <span class="badge-pengeluaran">

                                        <i class="fas fa-arrow-up"></i>

                                        Pengeluaran

                                    </span>

                                <?php endif; ?>

                            </td>

                            <td>
                                <?php echo e($item->keterangan); ?>

                            </td>

                            <td class="text-end nominal-kas">

                                Rp <?php echo e(number_format($item->nominal,0,',','.')); ?>


                            </td>

                        </tr>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                        <tr>

                            <td colspan="5">

                                <div class="empty-laporan">

                                    <i class="fas fa-wallet d-block"></i>

                                    <h6 class="fw-bold">
                                        Belum Ada Transaksi
                                    </h6>

                                    <p class="mb-0">
                                        Belum ada transaksi kas yang tercatat.
                                    </p>

                                </div>

                            </td>

                        </tr>

                    <?php endif; ?>

                </tbody>

            </table>

        </div>

    </div>


    

    <div class="card laporan-card mb-4">

        <div class="laporan-card-header">

            <div class="d-flex justify-content-between align-items-center">

                <div>

                    <h5 class="laporan-card-title">

                        <i class="fas fa-hand-holding-heart text-warning me-2"></i>

                        Laporan Donasi

                    </h5>

                    <div class="laporan-card-subtitle">
                        Daftar donasi yang diterima masjid.
                    </div>

                </div>

                <span class="badge bg-warning text-dark rounded-pill px-3 py-2">

                    <?php echo e($dataDonasi->count()); ?> Donasi

                </span>

            </div>

        </div>


        <div class="table-responsive">

            <table class="table laporan-table align-middle">

                <thead>

                    <tr>

                        <th width="60">
                            No
                        </th>

                        <th>
                            Tanggal
                        </th>

                        <th>
                            Nama Donatur
                        </th>

                        <th>
                            Keterangan
                        </th>

                        <th class="text-end">
                            Nominal
                        </th>

                    </tr>

                </thead>

                <tbody>

                    <?php $__empty_1 = true; $__currentLoopData = $dataDonasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                        <tr>

                            <td class="fw-semibold text-muted">
                                <?php echo e($loop->iteration); ?>

                            </td>

                            <td>

                                <span class="tanggal-badge">

                                    <i class="far fa-calendar"></i>

                                    <?php echo e(\Carbon\Carbon::parse($item->tanggal)->format('d/m/Y')); ?>


                                </span>

                            </td>

                            <td>

                                <span class="donatur-name">

                                    <i class="fas fa-user-circle text-success me-1"></i>

                                    <?php echo e($item->nama_donatur); ?>


                                </span>

                            </td>

                            <td>
                                <?php echo e($item->keterangan ?? '-'); ?>

                            </td>

                            <td class="text-end nominal-donasi">

                                Rp <?php echo e(number_format($item->nominal,0,',','.')); ?>


                            </td>

                        </tr>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                        <tr>

                            <td colspan="5">

                                <div class="empty-laporan">

                                    <i class="fas fa-hand-holding-heart d-block"></i>

                                    <h6 class="fw-bold">
                                        Belum Ada Donasi
                                    </h6>

                                    <p class="mb-0">
                                        Belum ada data donasi yang tercatat.
                                    </p>

                                </div>

                            </td>

                        </tr>

                    <?php endif; ?>

                </tbody>

            </table>

        </div>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Husen_masjid\resources\views/laporan/index.blade.php ENDPATH**/ ?>