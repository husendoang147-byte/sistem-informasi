

<?php $__env->startSection('title', 'Tambah Jadwal Imam & Khotib'); ?>

<?php $__env->startSection('content'); ?>

<div class="container-fluid">

    
    <div class="mb-4">
        <h3 class="fw-bold mb-1">
            Tambah Jadwal Imam & Khotib
        </h3>

        <p class="text-muted mb-0">
            Tambahkan jadwal imam, khotib, dan bilal masjid.
        </p>
    </div>


    
    <div class="row justify-content-center">

        <div class="col-xl-8 col-lg-10">

            <div class="card border-0 shadow-sm rounded-4 overflow-hidden">

                
                <div class="form-header">

                    <div class="d-flex align-items-center">

                        <div class="header-icon me-3">
                            <i class="fas fa-microphone-lines"></i>
                        </div>

                        <div>

                            <h5 class="fw-bold mb-1">
                                Form Jadwal
                            </h5>

                            <p class="mb-0">
                                Isi data jadwal dengan lengkap.
                            </p>

                        </div>

                    </div>

                </div>


                
                <div class="card-body p-4 p-md-5">

                    <form
                        action="<?php echo e(route('jadwal-imam.store')); ?>"
                        method="POST"
                    >

                        <?php echo csrf_field(); ?>


                        
                        <div class="mb-4">

                            <label for="tanggal" class="form-label fw-semibold">

                                <i class="fas fa-calendar-days text-success me-2"></i>

                                Tanggal

                                <span class="text-danger">*</span>

                            </label>

                            <input
                                type="date"
                                name="tanggal"
                                id="tanggal"
                                value="<?php echo e(old('tanggal')); ?>"
                                class="form-control form-control-custom <?php $__errorArgs = ['tanggal'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                required
                            >

                            <?php $__errorArgs = ['tanggal'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>

                                <div class="invalid-feedback">
                                    <?php echo e($message); ?>

                                </div>

                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        </div>


                        
                        <div class="mb-4">

                            <label for="imam" class="form-label fw-semibold">

                                <span class="field-icon imam-icon">
                                    <i class="fas fa-user"></i>
                                </span>

                                Imam

                                <span class="text-danger">*</span>

                            </label>

                            <input
                                type="text"
                                name="imam"
                                id="imam"
                                value="<?php echo e(old('imam')); ?>"
                                class="form-control form-control-custom <?php $__errorArgs = ['imam'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                placeholder="Masukkan nama imam"
                                required
                            >

                            <?php $__errorArgs = ['imam'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>

                                <div class="invalid-feedback">
                                    <?php echo e($message); ?>

                                </div>

                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        </div>


                        
                        <div class="mb-4">

                            <label for="khotib" class="form-label fw-semibold">

                                <span class="field-icon khotib-icon">
                                    <i class="fas fa-microphone"></i>
                                </span>

                                Khotib

                                <span class="text-danger">*</span>

                            </label>

                            <input
                                type="text"
                                name="khotib"
                                id="khotib"
                                value="<?php echo e(old('khotib')); ?>"
                                class="form-control form-control-custom <?php $__errorArgs = ['khotib'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                placeholder="Masukkan nama khotib"
                                required
                            >

                            <?php $__errorArgs = ['khotib'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>

                                <div class="invalid-feedback">
                                    <?php echo e($message); ?>

                                </div>

                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        </div>


                        
                        <div class="mb-4">

                            <label for="bilal" class="form-label fw-semibold">

                                <span class="field-icon bilal-icon">
                                    <i class="fas fa-volume-high"></i>
                                </span>

                                Bilal

                                <span class="text-muted fw-normal">
                                    (Opsional)
                                </span>

                            </label>

                            <input
                                type="text"
                                name="bilal"
                                id="bilal"
                                value="<?php echo e(old('bilal')); ?>"
                                class="form-control form-control-custom <?php $__errorArgs = ['bilal'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                placeholder="Masukkan nama bilal"
                            >

                            <?php $__errorArgs = ['bilal'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>

                                <div class="invalid-feedback">
                                    <?php echo e($message); ?>

                                </div>

                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        </div>


                        
                        <div class="mb-4">

                            <label for="keterangan" class="form-label fw-semibold">

                                <i class="fas fa-note-sticky text-success me-2"></i>

                                Keterangan

                                <span class="text-muted fw-normal">
                                    (Opsional)
                                </span>

                            </label>

                            <textarea
                                name="keterangan"
                                id="keterangan"
                                rows="4"
                                class="form-control form-control-custom <?php $__errorArgs = ['keterangan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                placeholder="Tambahkan keterangan jika diperlukan..."
                            ><?php echo e(old('keterangan')); ?></textarea>

                            <?php $__errorArgs = ['keterangan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>

                                <div class="invalid-feedback">
                                    <?php echo e($message); ?>

                                </div>

                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        </div>


                        
                        <div class="info-box mb-4">

                            <div class="info-icon">

                                <i class="fas fa-circle-info"></i>

                            </div>

                            <div>

                                <div class="fw-semibold mb-1">
                                    Informasi
                                </div>

                                <div class="small text-muted">
                                    Pastikan tanggal dan nama petugas sudah benar
                                    sebelum menyimpan jadwal.
                                </div>

                            </div>

                        </div>


                        
                        <div class="d-flex justify-content-end gap-2">

                            <a
                                href="<?php echo e(route('jadwal-imam.index')); ?>"
                                class="btn btn-secondary-custom"
                            >

                                <i class="fas fa-arrow-left me-2"></i>

                                Kembali

                            </a>


                            <button
                                type="submit"
                                class="btn btn-success-custom"
                            >

                                <i class="fas fa-save me-2"></i>

                                Simpan Jadwal

                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>


<style>

/* =====================================================
   FORM HEADER
===================================================== */

.form-header {

    padding: 22px 28px;

    background: linear-gradient(
        110deg,
        #15803d,
        #16a34a,
        #22c55e
    );

    color: white;

}


.form-header h5 {

    color: white;

}


.form-header p {

    color: rgba(255,255,255,.85);

    font-size: 13px;

}


.header-icon {

    width: 50px;
    height: 50px;

    border-radius: 14px;

    background: rgba(255,255,255,.18);

    display: flex;

    align-items: center;

    justify-content: center;

    font-size: 21px;

}


/* =====================================================
   LABEL
===================================================== */

.form-label {

    font-size: 13px;

    color: #374151;

    margin-bottom: 8px;

}


.field-icon {

    width: 27px;
    height: 27px;

    border-radius: 7px;

    display: inline-flex;

    align-items: center;

    justify-content: center;

    margin-right: 7px;

    font-size: 11px;

}


.imam-icon {

    background: #ecfdf5;

    color: #16a34a;

}


.khotib-icon {

    background: #eff6ff;

    color: #2563eb;

}


.bilal-icon {

    background: #fff7ed;

    color: #ea580c;

}


/* =====================================================
   INPUT
===================================================== */

.form-control-custom {

    border: 1px solid #d1d5db;

    border-radius: 10px;

    padding: 11px 13px;

    font-size: 13px;

    transition: .15s ease;

}


.form-control-custom:focus {

    border-color: #22c55e;

    box-shadow: 0 0 0 3px rgba(34,197,94,.12);

}


.form-control-custom::placeholder {

    color: #9ca3af;

}


textarea.form-control-custom {

    resize: vertical;

}


/* =====================================================
   INFO BOX
===================================================== */

.info-box {

    display: flex;

    align-items: flex-start;

    gap: 12px;

    padding: 14px 16px;

    border-radius: 11px;

    background: #f0fdf4;

    border: 1px solid #dcfce7;

}


.info-icon {

    width: 30px;
    height: 30px;

    border-radius: 8px;

    background: #dcfce7;

    color: #16a34a;

    display: flex;

    align-items: center;

    justify-content: center;

    flex-shrink: 0;

}


/* =====================================================
   BUTTON
===================================================== */

.btn-success-custom {

    border: none;

    background: #15803d;

    color: white;

    border-radius: 10px;

    padding: 10px 18px;

    font-size: 13px;

    font-weight: 600;

    transition: .15s ease;

}


.btn-success-custom:hover {

    background: #166534;

    color: white;

    transform: translateY(-1px);

}


.btn-secondary-custom {

    background: #f3f4f6;

    color: #374151;

    border: 1px solid #e5e7eb;

    border-radius: 10px;

    padding: 10px 18px;

    font-size: 13px;

    font-weight: 600;

    text-decoration: none;

    transition: .15s ease;

}


.btn-secondary-custom:hover {

    background: #e5e7eb;

    color: #111827;

}


/* =====================================================
   ERROR
===================================================== */

.invalid-feedback {

    font-size: 12px;

}


/* =====================================================
   RESPONSIVE
===================================================== */

@media(max-width: 576px) {

    .card-body {

        padding: 22px !important;

    }


    .form-header {

        padding: 20px;

    }


    .d-flex.justify-content-end {

        flex-direction: column-reverse;

    }


    .btn-success-custom,
    .btn-secondary-custom {

        width: 100%;

        text-align: center;

    }

}

</style>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Husen_masjid\resources\views/jadwal-imam/create.blade.php ENDPATH**/ ?>