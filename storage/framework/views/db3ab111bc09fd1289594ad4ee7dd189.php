<?php $__env->startSection('title', 'Profil Saya'); ?>

<?php $__env->startSection('content'); ?>

<div class="container-fluid">

    
    <div class="mb-4">
        <h2 class="fw-bold mb-1">
            <i class="fas fa-user-circle text-success me-2"></i>
            Profil Saya
        </h2>

        <p class="text-muted mb-0">
            Kelola informasi profil dan keamanan akun Anda.
        </p>
    </div>


    
    <?php if(session('status') === 'profile-updated'): ?>
        <div class="alert alert-success alert-dismissible fade show">
            <i class="fas fa-check-circle me-2"></i>
            Profil berhasil diperbarui.

            <button type="button"
                    class="btn-close"
                    data-bs-dismiss="alert">
            </button>
        </div>
    <?php endif; ?>


    <div class="row g-4">

        
        <div class="col-lg-4">

            <div class="card border-0 shadow-sm rounded-4 overflow-hidden">

                <div class="profile-cover"></div>

                <div class="card-body text-center profile-body">

                    <img
                        src="https://ui-avatars.com/api/?name=<?php echo e(urlencode(Auth::user()->name)); ?>&background=16a34a&color=fff&size=150"
                        class="profile-avatar"
                        alt="Foto Profil"
                    >

                    <h4 class="fw-bold mt-3 mb-1">
                        <?php echo e(Auth::user()->name); ?>

                    </h4>

                    <p class="text-muted mb-3">
                        <?php echo e(Auth::user()->email); ?>

                    </p>

                    <span class="badge bg-success rounded-pill px-3 py-2">
                        <i class="fas fa-user me-1"></i>
                        <?php echo e(ucfirst(Auth::user()->role ?? 'User')); ?>

                    </span>

                    <hr>

                    <div class="text-start">

                        <div class="profile-info">
                            <i class="fas fa-envelope text-success"></i>

                            <div>
                                <small class="text-muted">
                                    Email
                                </small>

                                <div class="fw-semibold">
                                    <?php echo e(Auth::user()->email); ?>

                                </div>
                            </div>
                        </div>


                        <div class="profile-info">
                            <i class="fas fa-calendar text-success"></i>

                            <div>
                                <small class="text-muted">
                                    Bergabung
                                </small>

                                <div class="fw-semibold">
                                    <?php echo e(Auth::user()->created_at->format('d M Y')); ?>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>


        
        <div class="col-lg-8">

            <div class="card border-0 shadow-sm rounded-4 mb-4">

                <div class="card-header bg-success text-white rounded-top-4">

                    <h5 class="mb-0">
                        <i class="fas fa-user-edit me-2"></i>
                        Informasi Profil
                    </h5>

                </div>


                <div class="card-body p-4">

                    <form method="POST"
                          action="<?php echo e(route('profile.update')); ?>">

                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PATCH'); ?>


                        
                        <div class="mb-3">

                            <label class="form-label fw-semibold">
                                Nama
                            </label>

                            <div class="input-group">

                                <span class="input-group-text">
                                    <i class="fas fa-user text-success"></i>
                                </span>

                                <input
                                    type="text"
                                    name="name"
                                    class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    value="<?php echo e(old('name', Auth::user()->name)); ?>"
                                    required
                                >

                            </div>

                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <small class="text-danger">
                                    <?php echo e($message); ?>

                                </small>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        </div>


                        
                        <div class="mb-4">

                            <label class="form-label fw-semibold">
                                Email
                            </label>

                            <div class="input-group">

                                <span class="input-group-text">
                                    <i class="fas fa-envelope text-success"></i>
                                </span>

                                <input
                                    type="email"
                                    name="email"
                                    class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    value="<?php echo e(old('email', Auth::user()->email)); ?>"
                                    required
                                >

                            </div>

                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <small class="text-danger">
                                    <?php echo e($message); ?>

                                </small>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        </div>


                        <button type="submit"
                                class="btn btn-success px-4">

                            <i class="fas fa-save me-1"></i>
                            Simpan Perubahan

                        </button>

                    </form>

                </div>

            </div>


            
            <div class="card border-0 shadow-sm rounded-4">

                <div class="card-header bg-primary text-white rounded-top-4">

                    <h5 class="mb-0">
                        <i class="fas fa-lock me-2"></i>
                        Ubah Password
                    </h5>

                </div>


                <div class="card-body p-4">

                    <form method="POST"
                          action="<?php echo e(route('password.update')); ?>">

                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>


                        <div class="mb-3">

                            <label class="form-label fw-semibold">
                                Password Saat Ini
                            </label>

                            <input
                                type="password"
                                name="current_password"
                                class="form-control"
                                required
                            >

                        </div>


                        <div class="mb-3">

                            <label class="form-label fw-semibold">
                                Password Baru
                            </label>

                            <input
                                type="password"
                                name="password"
                                class="form-control"
                                required
                            >

                        </div>


                        <div class="mb-4">

                            <label class="form-label fw-semibold">
                                Konfirmasi Password Baru
                            </label>

                            <input
                                type="password"
                                name="password_confirmation"
                                class="form-control"
                                required
                            >

                        </div>


                        <button type="submit"
                                class="btn btn-primary px-4">

                            <i class="fas fa-key me-1"></i>
                            Ubah Password

                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('css'); ?>

<style>

.profile-cover {
    height: 120px;
    background: linear-gradient(
        135deg,
        #166534,
        #15803d,
        #22c55e
    );
}

.profile-body {
    margin-top: -65px;
}

.profile-avatar {
    width: 130px;
    height: 130px;
    object-fit: cover;
    border-radius: 50%;
    border: 6px solid white;
    box-shadow: 0 8px 25px rgba(0,0,0,.15);
}

.profile-info {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-bottom: 18px;
}

.profile-info > i {
    width: 40px;
    height: 40px;
    background: #ecfdf5;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.card {
    transition: .3s;
}

.card:hover {
    transform: translateY(-2px);
}

</style>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Husen_masjid\resources\views/profile/edit.blade.php ENDPATH**/ ?>