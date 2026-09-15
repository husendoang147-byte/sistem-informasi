

<?php $__env->startSection('title', 'Jadwal Sholat'); ?>

<?php $__env->startSection('css'); ?>

<style>

    /* =========================
       HEADER
    ========================== */

    .prayer-hero {
        position: relative;
        overflow: hidden;
        background: linear-gradient(135deg, #14532d, #16a34a, #22c55e);
        border-radius: 25px;
        padding: 32px;
        color: white;
        margin-bottom: 25px;
        box-shadow: 0 15px 35px rgba(22,163,74,.18);
    }

    .prayer-hero::before {
        content: "";
        position: absolute;
        width: 220px;
        height: 220px;
        border-radius: 50%;
        background: rgba(255,255,255,.08);
        right: -70px;
        top: -80px;
    }

    .prayer-hero::after {
        content: "";
        position: absolute;
        width: 150px;
        height: 150px;
        border-radius: 50%;
        background: rgba(255,255,255,.06);
        right: 100px;
        bottom: -100px;
    }

    .hero-content {
        position: relative;
        z-index: 2;
    }

    .mosque-icon {
        width: 70px;
        height: 70px;
        border-radius: 20px;
        background: rgba(255,255,255,.15);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 32px;
        backdrop-filter: blur(5px);
    }

    .prayer-hero h2 {
        font-weight: 700;
        margin: 0;
    }

    .prayer-hero p {
        margin: 5px 0 0;
        opacity: .85;
    }

    .hero-clock {
        font-size: 34px;
        font-weight: 700;
        letter-spacing: 1px;
    }


    /* =========================
       TOP INFO
    ========================== */

    .info-card {
        border: none;
        border-radius: 20px;
        background: white;
        box-shadow: 0 8px 25px rgba(0,0,0,.05);
        padding: 22px;
        height: 100%;
    }

    .info-icon {
        width: 50px;
        height: 50px;
        border-radius: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 21px;
    }

    .info-title {
        font-size: 13px;
        color: #6b7280;
        margin-bottom: 3px;
    }

    .info-value {
        font-size: 20px;
        font-weight: 700;
        color: #166534;
    }


    /* =========================
       SECTION
    ========================== */

    .section-title {
        font-weight: 700;
        color: #1f2937;
        margin-bottom: 5px;
    }

    .section-subtitle {
        color: #9ca3af;
        font-size: 13px;
    }


    /* =========================
       PRAYER CARDS
    ========================== */

    .prayer-card {
        position: relative;
        border: none;
        border-radius: 22px;
        overflow: hidden;
        background: white;
        box-shadow: 0 8px 25px rgba(0,0,0,.06);
        transition: .3s;
        height: 100%;
    }

    .prayer-card:hover {
        transform: translateY(-7px);
        box-shadow: 0 15px 35px rgba(0,0,0,.10);
    }

    .prayer-card.active {
        background: linear-gradient(145deg, #166534, #22c55e);
        color: white;
        box-shadow: 0 15px 35px rgba(22,163,74,.25);
    }

    .prayer-card.active .prayer-label,
    .prayer-card.active .prayer-description {
        color: rgba(255,255,255,.85);
    }

    .prayer-card-body {
        padding: 24px;
    }

    .prayer-top {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 20px;
    }

    .prayer-icon {
        width: 55px;
        height: 55px;
        border-radius: 17px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 23px;
    }

    .subuh {
        background: #e0f2fe;
        color: #0284c7;
    }

    .dzuhur {
        background: #fef3c7;
        color: #d97706;
    }

    .ashar {
        background: #ffedd5;
        color: #ea580c;
    }

    .maghrib {
        background: #fee2e2;
        color: #dc2626;
    }

    .isya {
        background: #ede9fe;
        color: #7c3aed;
    }

    .active .prayer-icon {
        background: rgba(255,255,255,.18);
        color: white;
    }

    .prayer-label {
        font-weight: 700;
        font-size: 17px;
        color: #1f2937;
    }

    .prayer-description {
        font-size: 11px;
        color: #9ca3af;
        margin-top: 2px;
    }

    .prayer-time {
        font-size: 34px;
        font-weight: 700;
        color: #166534;
        letter-spacing: 1px;
    }

    .active .prayer-time {
        color: white;
    }

    .prayer-line {
        height: 4px;
        border-radius: 10px;
        background: #dcfce7;
        margin-top: 15px;
    }

    .active .prayer-line {
        background: rgba(255,255,255,.25);
    }


    /* =========================
       QUOTE
    ========================== */

    .quote-card {
        position: relative;
        overflow: hidden;
        border: none;
        border-radius: 22px;
        background: linear-gradient(135deg, #064e3b, #166534);
        color: white;
        padding: 28px;
        box-shadow: 0 10px 30px rgba(6,78,59,.15);
    }

    .quote-icon {
        font-size: 40px;
        opacity: .25;
        position: absolute;
        right: 25px;
        top: 20px;
    }

    .quote-text {
        font-size: 18px;
        font-weight: 500;
        line-height: 1.7;
        max-width: 85%;
    }

    .quote-source {
        font-size: 12px;
        opacity: .7;
        margin-top: 10px;
    }


    /* =========================
       ACTION
    ========================== */

    .action-card {
        border: none;
        border-radius: 22px;
        background: white;
        box-shadow: 0 8px 25px rgba(0,0,0,.05);
        padding: 25px;
    }

    .action-btn {
        border-radius: 13px;
        padding: 11px 18px;
        font-weight: 600;
    }


    /* =========================
       EMPTY
    ========================== */

    .empty-card {
        border: none;
        border-radius: 22px;
        background: white;
        box-shadow: 0 8px 25px rgba(0,0,0,.05);
        padding: 70px 20px;
        text-align: center;
    }

    .empty-card i {
        font-size: 60px;
        color: #86efac;
        margin-bottom: 20px;
    }

</style>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<div class="container-fluid">


    

    <div class="prayer-hero">

        <div class="hero-content">

            <div class="row align-items-center">

                <div class="col-lg-8">

                    <div class="d-flex align-items-center">

                        <div class="mosque-icon me-3">

                            <i class="fas fa-mosque"></i>

                        </div>

                        <div>

                            <h2>
                                Jadwal Sholat Masjid
                            </h2>

                            <p>
                                Waktu sholat untuk jamaah masjid.
                            </p>

                        </div>

                    </div>

                </div>


                <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">

                    <div class="hero-clock" id="clock">
                        --:--
                    </div>

                </div>

            </div>

        </div>

    </div>


    

    <?php if(session('success')): ?>

        <div class="alert alert-success alert-dismissible fade show rounded-4">

            <i class="fas fa-check-circle me-2"></i>

            <?php echo e(session('success')); ?>


            <button
                type="button"
                class="btn-close"
                data-bs-dismiss="alert">
            </button>

        </div>

    <?php endif; ?>


    <?php $__empty_1 = true; $__currentLoopData = $jadwal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>


        

        <div class="row g-4 mb-4">


            

            <div class="col-lg-6">

                <div class="info-card">

                    <div class="d-flex align-items-center">

                        <div class="info-icon bg-warning bg-opacity-10 text-warning me-3">

                            <i class="fas fa-clock"></i>

                        </div>

                        <div>

                            <div class="info-title">
                                Waktu Sholat
                            </div>

                            <div class="info-value">
                                5 Waktu
                            </div>

                        </div>

                    </div>

                </div>

            </div>


            

            <div class="col-lg-6">

                <div class="info-card">

                    <div class="d-flex align-items-center">

                        <div class="info-icon bg-primary bg-opacity-10 text-primary me-3">

                            <i class="fas fa-check-circle"></i>

                        </div>

                        <div>

                            <div class="info-title">
                                Status
                            </div>

                            <div class="info-value">
                                Aktif
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        

        <div class="mb-4">

            <h4 class="section-title">

                <i class="fas fa-clock text-success me-2"></i>

                Waktu Sholat

            </h4>

            <div class="section-subtitle">
                Jadwal waktu sholat masjid
            </div>

        </div>


        

        <div class="row g-4 mb-5">


            

            <div class="col-xl col-lg-4 col-md-6">

                <div class="prayer-card">

                    <div class="prayer-card-body">

                        <div class="prayer-top">

                            <div class="prayer-icon subuh">

                                <i class="fas fa-cloud-moon"></i>

                            </div>

                        </div>

                        <div class="prayer-label">
                            Subuh
                        </div>

                        <div class="prayer-description">
                            Sholat Fajar
                        </div>

                        <div class="prayer-time mt-3">

                            <?php echo e(\Carbon\Carbon::parse($item->subuh)->format('H:i')); ?>


                        </div>

                        <div class="prayer-line"></div>

                    </div>

                </div>

            </div>


            

            <div class="col-xl col-lg-4 col-md-6">

                <div class="prayer-card">

                    <div class="prayer-card-body">

                        <div class="prayer-top">

                            <div class="prayer-icon dzuhur">

                                <i class="fas fa-sun"></i>

                            </div>

                        </div>

                        <div class="prayer-label">
                            Dzuhur
                        </div>

                        <div class="prayer-description">
                            Sholat Tengah Hari
                        </div>

                        <div class="prayer-time mt-3">

                            <?php echo e(\Carbon\Carbon::parse($item->dzuhur)->format('H:i')); ?>


                        </div>

                        <div class="prayer-line"></div>

                    </div>

                </div>

            </div>


            

            <div class="col-xl col-lg-4 col-md-6">

                <div class="prayer-card">

                    <div class="prayer-card-body">

                        <div class="prayer-top">

                            <div class="prayer-icon ashar">

                                <i class="fas fa-cloud-sun"></i>

                            </div>

                        </div>

                        <div class="prayer-label">
                            Ashar
                        </div>

                        <div class="prayer-description">
                            Sholat Sore
                        </div>

                        <div class="prayer-time mt-3">

                            <?php echo e(\Carbon\Carbon::parse($item->ashar)->format('H:i')); ?>


                        </div>

                        <div class="prayer-line"></div>

                    </div>

                </div>

            </div>


            

            <div class="col-xl col-lg-4 col-md-6">

                <div class="prayer-card">

                    <div class="prayer-card-body">

                        <div class="prayer-top">

                            <div class="prayer-icon maghrib">

                                <i class="fas fa-cloud-sun"></i>

                            </div>

                        </div>

                        <div class="prayer-label">
                            Maghrib
                        </div>

                        <div class="prayer-description">
                            Matahari Terbenam
                        </div>

                        <div class="prayer-time mt-3">

                            <?php echo e(\Carbon\Carbon::parse($item->maghrib)->format('H:i')); ?>


                        </div>

                        <div class="prayer-line"></div>

                    </div>

                </div>

            </div>


            

            <div class="col-xl col-lg-4 col-md-6">

                <div class="prayer-card">

                    <div class="prayer-card-body">

                        <div class="prayer-top">

                            <div class="prayer-icon isya">

                                <i class="fas fa-moon"></i>

                            </div>

                        </div>

                        <div class="prayer-label">
                            Isya
                        </div>

                        <div class="prayer-description">
                            Sholat Malam
                        </div>

                        <div class="prayer-time mt-3">

                            <?php echo e(\Carbon\Carbon::parse($item->isya)->format('H:i')); ?>


                        </div>

                        <div class="prayer-line"></div>

                    </div>

                </div>

            </div>

        </div>


        

        <div class="row g-4 mb-4">


            

            <div class="col-lg-8">

                <div class="quote-card">

                    <i class="fas fa-quote-right quote-icon"></i>

                    <div class="quote-text">

                        "Sesungguhnya shalat itu adalah kewajiban
                        yang ditentukan waktunya atas orang-orang
                        yang beriman."

                    </div>

                    <div class="quote-source">
                        QS. An-Nisa: 103
                    </div>

                </div>

            </div>


            

            <div class="col-lg-4">

                <div class="action-card h-100">

                    <h6 class="fw-bold mb-3">

                        <i class="fas fa-cog text-success me-2"></i>

                        Kelola Jadwal

                    </h6>

                    <p class="text-muted small">

                        Perbarui waktu sholat atau hapus jadwal
                        yang sudah tidak digunakan.

                    </p>


                    <div class="d-flex gap-2">


                        

                        <a
                            href="<?php echo e(route('jadwal.edit', $item->id)); ?>"
                            class="btn btn-warning action-btn">

                            <i class="fas fa-edit me-1"></i>

                            Edit

                        </a>


                        

                        <form
                            action="<?php echo e(route('jadwal.destroy', $item->id)); ?>"
                            method="POST"
                            class="form-hapus">

                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>

                            <button
                                type="submit"
                                class="btn btn-danger action-btn">

                                <i class="fas fa-trash me-1"></i>

                                Hapus

                            </button>

                        </form>

                    </div>

                </div>

            </div>

        </div>


    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>


        

        <div class="empty-card">

            <i class="fas fa-mosque"></i>

            <h4 class="fw-bold">
                Belum Ada Jadwal Sholat
            </h4>

            <p class="text-muted">
                Silakan tambahkan jadwal sholat terlebih dahulu.
            </p>

            <a
                href="<?php echo e(route('jadwal.create')); ?>"
                class="btn btn-success rounded-3 px-4">

                <i class="fas fa-plus me-1"></i>

                Tambah Jadwal

            </a>

        </div>


    <?php endif; ?>


    

    <?php if($jadwal->hasPages()): ?>

        <div class="mt-4">

            <?php echo e($jadwal->links()); ?>


        </div>

    <?php endif; ?>


</div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>

<script>

    /* =========================
       JAM DIGITAL
    ========================== */

    function updateClock() {

        const now = new Date();

        const hours = String(now.getHours()).padStart(2, '0');

        const minutes = String(now.getMinutes()).padStart(2, '0');

        const seconds = String(now.getSeconds()).padStart(2, '0');

        document.getElementById('clock').innerText =
            hours + ':' + minutes + ':' + seconds;

    }

    updateClock();

    setInterval(updateClock, 1000);


    /* =========================
       DELETE CONFIRMATION
    ========================== */

    document.querySelectorAll('.form-hapus').forEach(form => {

        form.addEventListener('submit', function(e) {

            e.preventDefault();

            Swal.fire({

                title: 'Yakin ingin menghapus?',

                text: 'Jadwal sholat akan dihapus permanen.',

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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Husen_masjid\resources\views/jadwal/index.blade.php ENDPATH**/ ?>