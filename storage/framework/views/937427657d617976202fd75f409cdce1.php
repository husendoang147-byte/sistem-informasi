

<?php $__env->startSection('title', 'Tambah Pengurus'); ?>

<?php $__env->startSection('content'); ?>

<div class="container-fluid">

    
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h2 class="fw-bold mb-1">
                <i class="fas fa-user-plus text-success me-2"></i>
                Tambah Pengurus
            </h2>

            <p class="text-muted mb-0">
                Tambahkan data pengurus baru ke dalam sistem.
            </p>
        </div>

        <a href="<?php echo e(route('pengurus.index')); ?>"
           class="btn btn-light border shadow-sm">

            <i class="fas fa-arrow-left me-1"></i>
            Kembali

        </a>

    </div>


    
    <div class="row justify-content-center">

        <div class="col-xl-9 col-lg-10">

            <div class="card border-0 shadow-sm rounded-4 overflow-hidden">

                
                <div class="card-header border-0 p-4 text-white"
                     style="background:linear-gradient(135deg,#166534,#15803d,#22c55e);">

                    <div class="d-flex align-items-center">

                        <div class="form-header-icon me-3">

                            <i class="fas fa-user-plus"></i>

                        </div>

                        <div>

                            <h5 class="mb-1 fw-bold">
                                Data Pengurus
                            </h5>

                            <small class="opacity-75">
                                Lengkapi informasi pengurus dengan benar.
                            </small>

                        </div>

                    </div>

                </div>


                
                <div class="card-body p-4 p-md-5">

                    <form action="<?php echo e(route('pengurus.store')); ?>"
                          method="POST"
                          enctype="multipart/form-data">

                        <?php echo csrf_field(); ?>


                        <div class="row g-4">

                            
                            <div class="col-md-4">

                                <div class="photo-section text-center">

                                    <div class="photo-preview mx-auto mb-3"
                                         id="photoPreview">

                                        <i class="fas fa-user"></i>

                                    </div>

                                    <h6 class="fw-bold mb-1">
                                        Foto Pengurus
                                    </h6>

                                    <p class="text-muted small mb-3">
                                        JPG, JPEG atau PNG
                                    </p>

                                    <label for="foto"
                                           class="btn btn-outline-success">

                                        <i class="fas fa-camera me-1"></i>
                                        Pilih Foto

                                    </label>

                                    <input type="file"
                                           name="foto"
                                           id="foto"
                                           class="d-none"
                                           accept="image/*">

                                    <?php $__errorArgs = ['foto'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="text-danger small mt-2">
                                            <?php echo e($message); ?>

                                        </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                </div>

                            </div>


                            
                            <div class="col-md-8">

                                
                                <div class="mb-4">

                                    <label class="form-label fw-semibold">

                                        <i class="fas fa-user text-success me-1"></i>

                                        Nama Lengkap

                                    </label>

                                    <input type="text"
                                           name="nama"
                                           value="<?php echo e(old('nama')); ?>"
                                           class="form-control form-control-lg <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                           placeholder="Masukkan nama lengkap"
                                           required>

                                    <?php $__errorArgs = ['nama'];
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

                                    <label class="form-label fw-semibold">

                                        <i class="fas fa-briefcase text-success me-1"></i>

                                        Jabatan

                                    </label>

                                    <select name="jabatan"
                                            class="form-select form-select-lg <?php $__errorArgs = ['jabatan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                            required>

                                        <option value="">
                                            -- Pilih Jabatan --
                                        </option>

                                        <option value="Ketua"
                                            <?php echo e(old('jabatan') == 'Ketua' ? 'selected' : ''); ?>>
                                            Ketua
                                        </option>

                                        <option value="Wakil Ketua"
                                            <?php echo e(old('jabatan') == 'Wakil Ketua' ? 'selected' : ''); ?>>
                                            Wakil Ketua
                                        </option>

                                        <option value="Sekretaris"
                                            <?php echo e(old('jabatan') == 'Sekretaris' ? 'selected' : ''); ?>>
                                            Sekretaris
                                        </option>

                                        <option value="Bendahara"
                                            <?php echo e(old('jabatan') == 'Bendahara' ? 'selected' : ''); ?>>
                                            Bendahara
                                        </option>

                                        <option value="Bidang Dakwah"
                                            <?php echo e(old('jabatan') == 'Bidang Dakwah' ? 'selected' : ''); ?>>
                                            Bidang Dakwah
                                        </option>

                                        <option value="Bidang Pendidikan"
                                            <?php echo e(old('jabatan') == 'Bidang Pendidikan' ? 'selected' : ''); ?>>
                                            Bidang Pendidikan
                                        </option>

                                        <option value="Bidang Sosial"
                                            <?php echo e(old('jabatan') == 'Bidang Sosial' ? 'selected' : ''); ?>>
                                            Bidang Sosial
                                        </option>

                                        <option value="Anggota"
                                            <?php echo e(old('jabatan') == 'Anggota' ? 'selected' : ''); ?>>
                                            Anggota
                                        </option>

                                    </select>

                                    <?php $__errorArgs = ['jabatan'];
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

                                    <label class="form-label fw-semibold">

                                        <i class="fas fa-phone text-success me-1"></i>

                                        Nomor HP

                                    </label>

                                    <input type="text"
                                           name="no_hp"
                                           value="<?php echo e(old('no_hp')); ?>"
                                           class="form-control form-control-lg <?php $__errorArgs = ['no_hp'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                           placeholder="Contoh: 081234567890">

                                    <?php $__errorArgs = ['no_hp'];
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

                            </div>

                        </div>


                        
                        <hr class="my-4">


                        
                        <div class="d-flex justify-content-end gap-2">

                            <a href="<?php echo e(route('pengurus.index')); ?>"
                               class="btn btn-light border px-4">

                                <i class="fas fa-times me-1"></i>
                                Batal

                            </a>

                            <button type="submit"
                                    class="btn btn-success px-4">

                                <i class="fas fa-save me-1"></i>
                                Simpan Pengurus

                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>



<style>

.form-header-icon {

    width: 50px;
    height: 50px;

    border-radius: 15px;

    background: rgba(255,255,255,.15);

    display: flex;

    align-items: center;

    justify-content: center;

    font-size: 22px;
}


.form-control,
.form-select {

    border-radius: 12px;

    border: 1px solid #e5e7eb;

}


.form-control:focus,
.form-select:focus {

    border-color: #22c55e;

    box-shadow: 0 0 0 .2rem rgba(34,197,94,.12);

}


.photo-section {

    background: #f8fafc;

    border: 2px dashed #d1d5db;

    border-radius: 20px;

    padding: 30px 20px;

    height: 100%;

    min-height: 300px;

}


.photo-preview {

    width: 150px;

    height: 150px;

    border-radius: 50%;

    background: #dcfce7;

    color: #15803d;

    display: flex;

    align-items: center;

    justify-content: center;

    font-size: 60px;

    overflow: hidden;

    border: 5px solid white;

    box-shadow: 0 8px 20px rgba(0,0,0,.08);

}


.photo-preview img {

    width: 100%;

    height: 100%;

    object-fit: cover;

}


.btn-success {

    border-radius: 11px;

}


.btn-light {

    border-radius: 11px;

}


@media(max-width:768px) {

    .photo-section {

        min-height: auto;

        margin-bottom: 10px;

    }

}

</style>



<script>

document.getElementById('foto').addEventListener('change', function(event) {

    const file = event.target.files[0];

    const preview = document.getElementById('photoPreview');

    if (!file) return;

    const reader = new FileReader();

    reader.onload = function(e) {

        preview.innerHTML = `
            <img src="${e.target.result}" alt="Preview Foto">
        `;

    };

    reader.readAsDataURL(file);

});

</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Husen_masjid\resources\views/pengurus/create.blade.php ENDPATH**/ ?>