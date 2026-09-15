

<?php $__env->startSection('content'); ?>

<div class="container-fluid">

    <div class="mb-4">
        <h3 class="fw-bold mb-1">
            <i class="fas fa-calendar-check me-2 text-success"></i>
            Detail Jadwal
        </h3>

        <p class="text-muted">
            Informasi lengkap jadwal Imam & Khotib.
        </p>
    </div>

    <div class="card border-0 shadow-sm">

        <div class="card-body">

            <div class="row g-4">

                <div class="col-md-6">

                    <div class="p-3 bg-light rounded">

                        <small class="text-muted">
                            Tanggal
                        </small>

                        <h5 class="fw-bold mb-0 mt-1">

                            <i class="fas fa-calendar text-success me-2"></i>

                            <?php echo e($jadwalImamKhotib->tanggal->format('d F Y')); ?>


                        </h5>

                    </div>

                </div>

                <div class="col-md-6">

                    <div class="p-3 bg-light rounded">

                        <small class="text-muted">
                            Imam
                        </small>

                        <h5 class="fw-bold mb-0 mt-1">

                            <i class="fas fa-user text-success me-2"></i>

                            <?php echo e($jadwalImamKhotib->imam); ?>


                        </h5>

                    </div>

                </div>

                <div class="col-md-6">

                    <div class="p-3 bg-light rounded">

                        <small class="text-muted">
                            Khotib
                        </small>

                        <h5 class="fw-bold mb-0 mt-1">

                            <i class="fas fa-microphone text-success me-2"></i>

                            <?php echo e($jadwalImamKhotib->khotib); ?>


                        </h5>

                    </div>

                </div>

                <div class="col-md-6">

                    <div class="p-3 bg-light rounded">

                        <small class="text-muted">
                            Bilal
                        </small>

                        <h5 class="fw-bold mb-0 mt-1">

                            <i class="fas fa-volume-high text-success me-2"></i>

                            <?php echo e($jadwalImamKhotib->bilal ?? '-'); ?>


                        </h5>

                    </div>

                </div>

                <div class="col-12">

                    <div class="p-3 bg-light rounded">

                        <small class="text-muted">
                            Keterangan
                        </small>

                        <p class="mb-0 mt-2">

                            <?php echo e($jadwalImamKhotib->keterangan ?? 'Tidak ada keterangan.'); ?>


                        </p>

                    </div>

                </div>

            </div>

            <div class="mt-4 d-flex gap-2">

                <a href="<?php echo e(route('jadwal-imam.index')); ?>"
                   class="btn btn-secondary">

                    <i class="fas fa-arrow-left me-1"></i>
                    Kembali

                </a>

                <?php if(auth()->user()->role === 'admin'): ?>

                    <a href="<?php echo e(route('jadwal-imam.edit', $jadwalImamKhotib->id_jadwal_imam)); ?>"
                       class="btn btn-warning">

                        <i class="fas fa-edit me-1"></i>
                        Edit

                    </a>

                <?php endif; ?>

            </div>

        </div>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Husen_masjid\resources\views/jadwal-imam/show.blade.php ENDPATH**/ ?>