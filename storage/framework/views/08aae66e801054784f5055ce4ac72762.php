

<?php $__env->startSection('title', 'Donasi Masjid'); ?>

<?php $__env->startSection('css'); ?>

<style>

    /* =========================
       HEADER
    ========================= */

    .donasi-page {
        padding-bottom: 30px;
    }

    .donasi-hero {
        position: relative;
        overflow: hidden;
        background: linear-gradient(135deg, #14532d, #15803d, #22c55e);
        border-radius: 24px;
        padding: 32px;
        color: white;
        margin-bottom: 25px;
        box-shadow: 0 12px 35px rgba(21,128,61,.18);
    }

    .donasi-hero::before {
        content: "";
        position: absolute;
        width: 230px;
        height: 230px;
        border-radius: 50%;
        background: rgba(255,255,255,.07);
        right: -70px;
        top: -90px;
    }

    .donasi-hero::after {
        content: "";
        position: absolute;
        width: 150px;
        height: 150px;
        border-radius: 50%;
        background: rgba(255,255,255,.06);
        right: 140px;
        bottom: -100px;
    }

    .donasi-hero-content {
        position: relative;
        z-index: 2;
    }

    .donasi-hero h2 {
        font-weight: 700;
        margin-bottom: 8px;
    }

    .donasi-hero p {
        margin: 0;
        opacity: .85;
    }

    .btn-tambah {
        background: white;
        color: #166534;
        border: none;
        border-radius: 12px;
        padding: 11px 18px;
        font-weight: 600;
        transition: .3s;
    }

    .btn-tambah:hover {
        background: #f0fdf4;
        color: #14532d;
        transform: translateY(-2px);
    }

    /* =========================
       ALERT
    ========================= */

    .alert-donasi {
        border: none;
        border-radius: 14px;
        box-shadow: 0 5px 15px rgba(0,0,0,.04);
    }

    /* =========================
       STATISTIC
    ========================= */

    .donasi-stat {
        border: none;
        border-radius: 20px;
        background: white;
        box-shadow: 0 8px 25px rgba(0,0,0,.055);
        transition: .3s;
        height: 100%;
    }

    .donasi-stat:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0,0,0,.09);
    }

    .donasi-stat-body {
        padding: 22px;
    }

    .donasi-stat-label {
        color: #64748b;
        font-size: 13px;
        margin-bottom: 6px;
    }

    .donasi-stat-value {
        font-size: 21px;
        font-weight: 700;
        color: #0f172a;
        line-height: 1.3;
    }

    .donasi-stat-sub {
        font-size: 12px;
        margin-top: 5px;
    }

    .donasi-icon {
        width: 53px;
        height: 53px;
        border-radius: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 21px;
    }

    /* =========================
       TABLE CARD
    ========================= */

    .donasi-card {
        border: none;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 8px 25px rgba(0,0,0,.05);
    }

    .donasi-card-header {
        background: white;
        border-bottom: 1px solid #f1f5f9;
        padding: 20px 23px;
    }

    .donasi-card-title {
        font-weight: 700;
        color: #0f172a;
        margin-bottom: 3px;
    }

    .donasi-card-subtitle {
        color: #64748b;
        font-size: 13px;
    }

    /* =========================
       TABLE
    ========================= */

    .donasi-table {
        margin: 0;
    }

    .donasi-table thead th {
        background: #f0fdf4;
        color: #166534;
        border: none;
        padding: 15px 18px;
        font-size: 13px;
        font-weight: 700;
        white-space: nowrap;
    }

    .donasi-table tbody td {
        padding: 16px 18px;
        border-color: #f1f5f9;
        vertical-align: middle;
    }

    .donasi-table tbody tr {
        transition: .2s;
    }

    .donasi-table tbody tr:hover {
        background: #f8fffa;
    }

    /* =========================
       DONATUR
    ========================= */

    .donatur-wrapper {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .donatur-avatar {
        width: 43px;
        height: 43px;
        min-width: 43px;
        border-radius: 13px;
        background: #dcfce7;
        color: #15803d;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        font-size: 16px;
    }

    .donatur-name {
        font-weight: 700;
        color: #334155;
    }

    .donatur-label {
        font-size: 11px;
        color: #94a3b8;
    }

    /* =========================
       NOMINAL
    ========================= */

    .nominal-donasi {
        font-weight: 700;
        color: #15803d;
    }

    /* =========================
       TANGGAL
    ========================= */

    .tanggal-donasi {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        background: #f8fafc;
        color: #475569;
        padding: 7px 10px;
        border-radius: 10px;
        font-size: 12px;
        font-weight: 600;
    }

    /* =========================
       AKSI
    ========================= */

    .action-btn {
        width: 37px;
        height: 37px;
        border: none;
        border-radius: 10px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        transition: .2s;
    }

    .action-btn:hover {
        transform: translateY(-2px);
    }

    .btn-edit {
        background: #fef3c7;
        color: #b45309;
    }

    .btn-delete {
        background: #fee2e2;
        color: #dc2626;
    }

    /* =========================
       EMPTY
    ========================= */

    .empty-donasi {
        text-align: center;
        padding: 60px 20px;
        color: #64748b;
    }

    .empty-donasi-icon {
        width: 75px;
        height: 75px;
        border-radius: 22px;
        background: #f0fdf4;
        color: #22c55e;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 18px;
        font-size: 32px;
    }

    /* =========================
       RESPONSIVE
    ========================= */

    @media(max-width:768px) {

        .donasi-hero {
            padding: 25px;
        }

        .donasi-hero h2 {
            font-size: 22px;
        }

        .btn-tambah {
            margin-top: 15px;
        }

    }

</style>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<div class="container-fluid donasi-page">

    

    <div class="donasi-hero">

        <div class="donasi-hero-content">

            <div class="row align-items-center">

                <div class="col-lg-8">

                    <div class="mb-2">

                        <span class="badge bg-light text-success rounded-pill px-3 py-2">

                            <i class="fas fa-hand-holding-heart me-1"></i>

                            Sistem Informasi Masjid

                        </span>

                    </div>

                    <h2>
                        Data Donasi
                    </h2>

                    <p>
                        Kelola dan pantau seluruh donasi yang diterima masjid.
                    </p>

                </div>


                <div class="col-lg-4 text-lg-end">

                    <?php if(auth()->user()->role === 'admin'): ?>

                        <a
                            href="<?php echo e(route('donasi.create')); ?>"
                            class="btn btn-tambah"
                        >

                            <i class="fas fa-plus me-1"></i>

                            Tambah Donasi

                        </a>

                    <?php endif; ?>

                </div>

            </div>

        </div>

    </div>


    

    <?php if(session('success')): ?>

        <div class="alert alert-success alert-dismissible fade show alert-donasi mb-4">

            <i class="fas fa-check-circle me-2"></i>

            <?php echo e(session('success')); ?>


            <button
                type="button"
                class="btn-close"
                data-bs-dismiss="alert"
            ></button>

        </div>

    <?php endif; ?>


    

    <div class="row g-4 mb-4">

        

        <div class="col-xl-4 col-md-6">

            <div class="donasi-stat">

                <div class="donasi-stat-body">

                    <div class="d-flex justify-content-between align-items-center">

                        <div>

                            <div class="donasi-stat-label">
                                Total Donasi
                            </div>

                            <div class="donasi-stat-value">

                                <?php echo e($donasi->total()); ?>


                            </div>

                            <div class="donasi-stat-sub text-success">

                                <i class="fas fa-users me-1"></i>

                                Donatur tercatat

                            </div>

                        </div>

                        <div class="donasi-icon bg-success">

                            <i class="fas fa-users"></i>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        

        <div class="col-xl-4 col-md-6">

            <div class="donasi-stat">

                <div class="donasi-stat-body">

                    <div class="d-flex justify-content-between align-items-center">

                        <div>

                            <div class="donasi-stat-label">
                                Total Nominal
                            </div>

                            <div class="donasi-stat-value">

                                Rp <?php echo e(number_format($donasi->sum('nominal'),0,',','.')); ?>


                            </div>

                            <div class="donasi-stat-sub text-primary">

                                <i class="fas fa-wallet me-1"></i>

                                Dana terkumpul

                            </div>

                        </div>

                        <div class="donasi-icon bg-primary">

                            <i class="fas fa-wallet"></i>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        

        <div class="col-xl-4 col-md-12">

            <div class="donasi-stat">

                <div class="donasi-stat-body">

                    <div class="d-flex justify-content-between align-items-center">

                        <div>

                            <div class="donasi-stat-label">
                                Donasi Terbaru
                            </div>

                            <div class="donasi-stat-value">

                                <?php if($donasi->count() > 0): ?>

                                    <?php echo e($donasi->first()->tanggal->format('d M Y')); ?>


                                <?php else: ?>

                                    -

                                <?php endif; ?>

                            </div>

                            <div class="donasi-stat-sub text-warning">

                                <i class="fas fa-calendar me-1"></i>

                                Tanggal terakhir

                            </div>

                        </div>

                        <div class="donasi-icon bg-warning">

                            <i class="fas fa-calendar-alt"></i>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>


    

    <div class="card donasi-card">

        <div class="donasi-card-header">

            <div class="d-flex justify-content-between align-items-center">

                <div>

                    <h5 class="donasi-card-title">

                        <i class="fas fa-list text-success me-2"></i>

                        Daftar Donasi

                    </h5>

                    <div class="donasi-card-subtitle">

                        Data donasi yang masuk ke masjid.

                    </div>

                </div>

                <span class="badge bg-success rounded-pill px-3 py-2">

                    <?php echo e($donasi->total()); ?> Donasi

                </span>

            </div>

        </div>


        <div class="table-responsive">

            <table class="table donasi-table align-middle">

                <thead>

                    <tr>

                        <th width="65">
                            No
                        </th>

                        <th>
                            Donatur
                        </th>

                        <th>
                            Nominal
                        </th>

                        <th>
                            Tanggal
                        </th>

                        <th>
                            Keterangan
                        </th>

                        <?php if(auth()->user()->role === 'admin'): ?>

                            <th width="120" class="text-center">
                                Aksi
                            </th>

                        <?php endif; ?>

                    </tr>

                </thead>


                <tbody>

                    <?php $__empty_1 = true; $__currentLoopData = $donasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                        <tr>

                            

                            <td class="fw-semibold text-muted">

                                <?php echo e($donasi->firstItem() + $loop->index); ?>


                            </td>


                            

                            <td>

                                <div class="donatur-wrapper">

                                    <div class="donatur-avatar">

                                        <?php echo e(strtoupper(substr($item->nama_donatur, 0, 1))); ?>


                                    </div>

                                    <div>

                                        <div class="donatur-name">

                                            <?php echo e($item->nama_donatur); ?>


                                        </div>

                                        <div class="donatur-label">

                                            Donatur Masjid

                                        </div>

                                    </div>

                                </div>

                            </td>


                            

                            <td>

                                <span class="nominal-donasi">

                                    Rp <?php echo e(number_format($item->nominal,0,',','.')); ?>


                                </span>

                            </td>


                            

                            <td>

                                <span class="tanggal-donasi">

                                    <i class="far fa-calendar"></i>

                                    <?php echo e($item->tanggal->format('d/m/Y')); ?>


                                </span>

                            </td>


                            

                            <td>

                                <?php if($item->keterangan): ?>

                                    <?php echo e($item->keterangan); ?>


                                <?php else: ?>

                                    <span class="text-muted">
                                        -
                                    </span>

                                <?php endif; ?>

                            </td>


                            

                            <?php if(auth()->user()->role === 'admin'): ?>

                                <td class="text-center">

                                    <a
                                        href="<?php echo e(route('donasi.edit', $item->id)); ?>"
                                        class="action-btn btn-edit me-1"
                                        title="Edit"
                                    >

                                        <i class="fas fa-edit"></i>

                                    </a>


                                    <form
                                        action="<?php echo e(route('donasi.destroy', $item->id)); ?>"
                                        method="POST"
                                        class="d-inline form-hapus"
                                    >

                                        <?php echo csrf_field(); ?>

                                        <?php echo method_field('DELETE'); ?>

                                        <button
                                            type="submit"
                                            class="action-btn btn-delete"
                                            title="Hapus"
                                        >

                                            <i class="fas fa-trash"></i>

                                        </button>

                                    </form>

                                </td>

                            <?php endif; ?>

                        </tr>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                        <tr>

                            <td
                                colspan="<?php echo e(auth()->user()->role === 'admin' ? 6 : 5); ?>"
                            >

                                <div class="empty-donasi">

                                    <div class="empty-donasi-icon">

                                        <i class="fas fa-hand-holding-heart"></i>

                                    </div>

                                    <h5 class="fw-bold text-dark">

                                        Belum Ada Donasi

                                    </h5>

                                    <p class="mb-3">

                                        Belum ada data donasi yang tercatat.

                                    </p>

                                    <?php if(auth()->user()->role === 'admin'): ?>

                                        <a
                                            href="<?php echo e(route('donasi.create')); ?>"
                                            class="btn btn-success rounded-3 px-4"
                                        >

                                            <i class="fas fa-plus me-1"></i>

                                            Tambah Donasi

                                        </a>

                                    <?php endif; ?>

                                </div>

                            </td>

                        </tr>

                    <?php endif; ?>

                </tbody>

            </table>

        </div>


        

        <?php if($donasi->hasPages()): ?>

            <div class="card-footer bg-white border-0 p-3">

                <?php echo e($donasi->links()); ?>


            </div>

        <?php endif; ?>

    </div>

</div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>

<script>

document.querySelectorAll('.form-hapus').forEach(form => {

    form.addEventListener('submit', function(e) {

        e.preventDefault();

        Swal.fire({

            title: 'Yakin ingin menghapus?',

            text: 'Data donasi akan dihapus permanen.',

            icon: 'warning',

            showCancelButton: true,

            confirmButtonColor: '#16a34a',

            cancelButtonColor: '#dc3545',

            confirmButtonText: 'Ya, Hapus!',

            cancelButtonText: 'Batal'

        }).then((result) => {

            if (result.isConfirmed) {

                form.submit();

            }

        });

    });

});

</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Husen_masjid\resources\views/donasi/index.blade.php ENDPATH**/ ?>