

<?php $__env->startSection('title', 'Tambah Pengumuman'); ?>

<?php $__env->startSection('content'); ?>

<div class="container-fluid">

    
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h2 class="fw-bold mb-1">
                <i class="fas fa-bullhorn text-success me-2"></i>
                Tambah Pengumuman
            </h2>

            <p class="text-muted mb-0">
                Buat pengumuman baru untuk jamaah masjid.
            </p>
        </div>

        <a href="<?php echo e(route('pengumuman.index')); ?>"
           class="btn btn-light border shadow-sm rounded-3 px-4">

            <i class="fas fa-arrow-left me-1"></i>
            Kembali

        </a>

    </div>


    
    <div class="row justify-content-center">

        <div class="col-xl-9 col-lg-10">

            <div class="card border-0 shadow-sm rounded-4 overflow-hidden">

                
                <div class="announcement-header">

                    <div class="announcement-icon">
                        <i class="fas fa-bullhorn"></i>
                    </div>

                    <div>
                        <h5 class="mb-1 fw-bold">
                            Informasi Pengumuman
                        </h5>

                        <small>
                            Isi informasi yang ingin disampaikan kepada jamaah.
                        </small>
                    </div>

                </div>


                
                <div class="card-body p-4 p-md-5">

                    
                    <form action="<?php echo e(route('pengumuman.store')); ?>"
                          method="POST"
                          enctype="multipart/form-data">

                        <?php echo csrf_field(); ?>


                        
                        <div class="mb-4">

                            <label for="judul"
                                   class="form-label fw-semibold">

                                <i class="fas fa-heading text-success me-1"></i>
                                Judul Pengumuman

                            </label>

                            <input type="text"
                                   id="judul"
                                   name="judul"
                                   value="<?php echo e(old('judul')); ?>"
                                   class="form-control form-control-lg rounded-3 <?php $__errorArgs = ['judul'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                   placeholder="Contoh: Pengajian Rutin Malam Jumat"
                                   required>

                            <?php $__errorArgs = ['judul'];
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


                        
                        <div class="row g-4 mb-4">

                            <div class="col-md-6">

                                <label for="tanggal"
                                       class="form-label fw-semibold">

                                    <i class="fas fa-calendar-alt text-success me-1"></i>
                                    Tanggal Pengumuman

                                </label>

                                <input type="date"
                                       id="tanggal"
                                       name="tanggal"
                                       value="<?php echo e(old('tanggal', date('Y-m-d'))); ?>"
                                       class="form-control form-control-lg rounded-3 <?php $__errorArgs = ['tanggal'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                       required>

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


                            <div class="col-md-6">

                                <label for="kategori"
                                       class="form-label fw-semibold">

                                    <i class="fas fa-tags text-success me-1"></i>
                                    Kategori

                                </label>

                                <select id="kategori"
                                        name="kategori"
                                        class="form-select form-select-lg rounded-3 <?php $__errorArgs = ['kategori'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">

                                    <option value="">
                                        Pilih kategori
                                    </option>

                                    <option value="Kegiatan"
                                        <?php echo e(old('kategori') == 'Kegiatan' ? 'selected' : ''); ?>>
                                        Kegiatan
                                    </option>

                                    <option value="Ibadah"
                                        <?php echo e(old('kategori') == 'Ibadah' ? 'selected' : ''); ?>>
                                        Ibadah
                                    </option>

                                    <option value="Informasi"
                                        <?php echo e(old('kategori') == 'Informasi' ? 'selected' : ''); ?>>
                                        Informasi
                                    </option>

                                    <option value="Penting"
                                        <?php echo e(old('kategori') == 'Penting' ? 'selected' : ''); ?>>
                                        Penting
                                    </option>

                                </select>

                                <?php $__errorArgs = ['kategori'];
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


                        
                        <div class="mb-4">

                            <label for="isi"
                                   class="form-label fw-semibold">

                                <i class="fas fa-align-left text-success me-1"></i>
                                Isi Pengumuman

                            </label>

                            <textarea id="isi"
                                      name="isi"
                                      rows="8"
                                      class="form-control rounded-3 <?php $__errorArgs = ['isi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                      placeholder="Tuliskan isi pengumuman di sini..."
                                      required><?php echo e(old('isi')); ?></textarea>

                            <?php $__errorArgs = ['isi'];
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

                            <label for="foto"
                                   class="form-label fw-semibold">

                                <i class="fas fa-image text-success me-1"></i>
                                Foto Pengumuman

                            </label>

                            <input type="file"
                                   id="foto"
                                   name="foto"
                                   class="form-control form-control-lg rounded-3 <?php $__errorArgs = ['foto'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                   accept=".jpg,.jpeg,.png,.webp,image/jpeg,image/png,image/webp">

                            <div class="form-text">
                                Format: JPG, JPEG, PNG, WEBP — maksimal 2 MB.
                            </div>

                            <?php $__errorArgs = ['foto'];
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


                            
                            <div id="preview-container"
                                 class="mt-3"
                                 style="display:none;">

                                <div class="card border-0 bg-light rounded-4 p-3">

                                    <div class="fw-semibold mb-2">
                                        <i class="fas fa-eye text-success me-1"></i>
                                        Preview Foto
                                    </div>

                                    <img id="preview-foto"
                                         src=""
                                         alt="Preview foto"
                                         class="rounded-4 shadow-sm"
                                         style="
                                            width:100%;
                                            max-width:500px;
                                            height:280px;
                                            object-fit:cover;
                                         ">

                                </div>

                            </div>

                        </div>


                        
                        <div class="mb-4">

                            <label class="form-label fw-semibold">

                                <i class="fas fa-eye text-success me-1"></i>
                                Status Pengumuman

                            </label>

                            <div class="row g-3">

                                <div class="col-md-6">

                                    <input type="radio"
                                           class="btn-check"
                                           name="status"
                                           id="aktif"
                                           value="Aktif"
                                           <?php echo e(old('status', 'Aktif') == 'Aktif' ? 'checked' : ''); ?>>

                                    <label for="aktif"
                                           class="status-option">

                                        <div class="status-icon active-icon">
                                            <i class="fas fa-check-circle"></i>
                                        </div>

                                        <div>
                                            <strong>Aktif</strong>

                                            <small>
                                                Pengumuman ditampilkan
                                            </small>
                                        </div>

                                    </label>

                                </div>


                                <div class="col-md-6">

                                    <input type="radio"
                                           class="btn-check"
                                           name="status"
                                           id="nonaktif"
                                           value="Nonaktif"
                                           <?php echo e(old('status') == 'Nonaktif' ? 'checked' : ''); ?>>

                                    <label for="nonaktif"
                                           class="status-option">

                                        <div class="status-icon inactive-icon">
                                            <i class="fas fa-eye-slash"></i>
                                        </div>

                                        <div>
                                            <strong>Nonaktif</strong>

                                            <small>
                                                Belum ditampilkan
                                            </small>
                                        </div>

                                    </label>

                                </div>

                            </div>

                            <?php $__errorArgs = ['status'];
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


                        
                        <div class="announcement-info mb-4">

                            <div class="info-icon">
                                <i class="fas fa-info-circle"></i>
                            </div>

                            <div>

                                <strong>
                                    Tips Pengumuman
                                </strong>

                                <p class="mb-0">
                                    Gunakan judul yang singkat dan isi yang jelas
                                    agar mudah dipahami oleh jamaah.
                                </p>

                            </div>

                        </div>


                        <hr class="my-4">


                        
                        <div class="d-flex justify-content-end gap-2">

                            <a href="<?php echo e(route('pengumuman.index')); ?>"
                               class="btn btn-light border rounded-3 px-4">

                                <i class="fas fa-times me-1"></i>
                                Batal

                            </a>

                            <button type="submit"
                                    class="btn btn-success rounded-3 px-4">

                                <i class="fas fa-bullhorn me-1"></i>
                                Simpan Pengumuman

                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

<?php $__env->stopSection(); ?>




<?php $__env->startSection('css'); ?>

<style>

.announcement-header {

    padding: 25px;
    color: white;

    display: flex;
    align-items: center;
    gap: 15px;

    background: linear-gradient(
        135deg,
        #166534,
        #15803d,
        #22c55e
    );

}

.announcement-header small {
    opacity: .85;
}

.announcement-icon {

    width: 58px;
    height: 58px;

    border-radius: 17px;

    background: rgba(255,255,255,.15);

    display: flex;
    align-items: center;
    justify-content: center;

    font-size: 25px;

}


.form-control,
.form-select {

    border-color: #e5e7eb;

}

.form-control:focus,
.form-select:focus {

    border-color: #22c55e;

    box-shadow: 0 0 0 .2rem rgba(34,197,94,.12);

}


/* STATUS */

.status-option {

    min-height: 90px;
    padding: 18px;

    border: 2px solid #e5e7eb;
    border-radius: 16px;

    cursor: pointer;

    display: flex;
    align-items: center;
    gap: 15px;

    transition: .25s;

}

.status-option:hover {

    transform: translateY(-2px);

    box-shadow: 0 8px 20px rgba(0,0,0,.06);

}

.status-option strong {

    display: block;
    margin-bottom: 3px;

}

.status-option small {

    display: block;
    color: #6b7280;

}

.status-icon {

    width: 48px;
    height: 48px;

    border-radius: 14px;

    display: flex;
    align-items: center;
    justify-content: center;

    font-size: 20px;

}

.active-icon {

    background: #dcfce7;
    color: #15803d;

}

.inactive-icon {

    background: #f3f4f6;
    color: #6b7280;

}


.btn-check:checked + .status-option {

    border-color: #22c55e;
    background: #f0fdf4;

}


/* INFO */

.announcement-info {

    display: flex;
    gap: 12px;

    padding: 17px;

    border-radius: 14px;

    background: #f0fdf4;
    border: 1px solid #bbf7d0;

}

.info-icon {

    color: #15803d;
    font-size: 20px;

}

.announcement-info strong {

    color: #166534;

}

.announcement-info p {

    font-size: 13px;
    color: #4b5563;

    margin-top: 3px;

}


/* FOTO */

#preview-container {

    animation: previewShow .25s ease;

}

@keyframes previewShow {

    from {
        opacity: 0;
        transform: translateY(5px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }

}


/* MOBILE */

@media(max-width:768px) {

    .announcement-header {
        padding: 20px;
    }

}

</style>

<?php $__env->stopSection(); ?>




<?php $__env->startSection('js'); ?>

<script>

document.addEventListener('DOMContentLoaded', function () {

    const fotoInput = document.getElementById('foto');
    const preview = document.getElementById('preview-foto');
    const container = document.getElementById('preview-container');

    if (!fotoInput) {
        return;
    }

    fotoInput.addEventListener('change', function (event) {

        const file = event.target.files[0];

        if (!file) {

            preview.src = '';
            container.style.display = 'none';

            return;
        }


        // Validasi ukuran
        if (file.size > 2 * 1024 * 1024) {

            alert('Ukuran foto maksimal 2 MB.');

            fotoInput.value = '';

            preview.src = '';
            container.style.display = 'none';

            return;
        }


        // Validasi tipe file
        const allowedTypes = [
            'image/jpeg',
            'image/png',
            'image/webp'
        ];

        if (!allowedTypes.includes(file.type)) {

            alert('Format foto harus JPG, JPEG, PNG, atau WEBP.');

            fotoInput.value = '';

            preview.src = '';
            container.style.display = 'none';

            return;
        }


        // Preview
        const reader = new FileReader();

        reader.onload = function (e) {

            preview.src = e.target.result;

            container.style.display = 'block';

        };

        reader.readAsDataURL(file);

    });

});

</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Husen_masjid\resources\views/pengumuman/create.blade.php ENDPATH**/ ?>