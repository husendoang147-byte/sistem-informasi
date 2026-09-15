

<?php $__env->startSection('content'); ?>

<div class="container-fluid">

    <div class="mb-4">
        <h3 class="fw-bold mb-1">
            <i class="fas fa-edit me-2 text-warning"></i>
            Edit Jadwal Imam & Khotib
        </h3>

        <p class="text-muted">
            Perbarui data jadwal.
        </p>
    </div>

    <div class="card border-0 shadow-sm">

        <div class="card-body">

            <form action="<?php echo e(route('jadwal-imam.update', $jadwalImamKhotib->id_jadwal_imam)); ?>"
                  method="POST">

                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>

                <div class="mb-3">

                    <label class="form-label fw-semibold">
                        Tanggal
                    </label>

                    <input type="date"
                           name="tanggal"
                           class="form-control"
                           value="<?php echo e(old('tanggal', $jadwalImamKhotib->tanggal->format('Y-m-d'))); ?>">

                </div>

                <div class="mb-3">

                    <label class="form-label fw-semibold">
                        Nama Imam
                    </label>

                    <input type="text"
                           name="imam"
                           class="form-control"
                           value="<?php echo e(old('imam', $jadwalImamKhotib->imam)); ?>">

                </div>

                <div class="mb-3">

                    <label class="form-label fw-semibold">
                        Nama Khotib
                    </label>

                    <input type="text"
                           name="khotib"
                           class="form-control"
                           value="<?php echo e(old('khotib', $jadwalImamKhotib->khotib)); ?>">

                </div>

                <div class="mb-3">

                    <label class="form-label fw-semibold">
                        Nama Bilal
                    </label>

                    <input type="text"
                           name="bilal"
                           class="form-control"
                           value="<?php echo e(old('bilal', $jadwalImamKhotib->bilal)); ?>">

                </div>

                <div class="mb-4">

                    <label class="form-label fw-semibold">
                        Keterangan
                    </label>

                    <textarea name="keterangan"
                              rows="4"
                              class="form-control"><?php echo e(old('keterangan', $jadwalImamKhotib->keterangan)); ?></textarea>

                </div>

                <div class="d-flex gap-2">

                    <a href="<?php echo e(route('jadwal-imam.index')); ?>"
                       class="btn btn-secondary">

                        <i class="fas fa-arrow-left me-1"></i>
                        Kembali

                    </a>

                    <button type="submit"
                            class="btn btn-warning">

                        <i class="fas fa-save me-1"></i>
                        Simpan Perubahan

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Husen_masjid\resources\views/jadwal-imam/edit.blade.php ENDPATH**/ ?>