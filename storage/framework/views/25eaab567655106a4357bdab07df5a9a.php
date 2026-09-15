

<?php $__env->startSection('title', 'Pengaturan'); ?>

<?php $__env->startSection('css'); ?>

<style>

    .setting-header {
        background: linear-gradient(135deg, #166534, #22c55e);
        border-radius: 22px;
        padding: 30px;
        color: white;
        margin-bottom: 25px;
        box-shadow: 0 10px 30px rgba(21,128,61,.15);
    }

    .setting-header h2 {
        font-weight: 700;
        margin-bottom: 6px;
    }

    .setting-header p {
        margin: 0;
        opacity: .85;
    }

    .setting-card {
        border: none;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 8px 25px rgba(0,0,0,.06);
    }

    .setting-card-header {
        background: #f0fdf4;
        padding: 20px 24px;
        border-bottom: 1px solid #dcfce7;
    }

    .setting-card-header h5 {
        color: #166534;
        font-weight: 700;
        margin: 0;
    }

    .form-label {
        font-weight: 600;
        color: #334155;
        margin-bottom: 8px;
    }

    .form-control {
        border: 1px solid #e2e8f0;
        border-radius: 12px;
        padding: 11px 14px;
        transition: .25s;
    }

    .form-control:focus {
        border-color: #22c55e;
        box-shadow: 0 0 0 .2rem rgba(34,197,94,.12);
    }

    .input-group-text {
        background: #f0fdf4;
        border: 1px solid #e2e8f0;
        color: #15803d;
        border-radius: 12px 0 0 12px;
    }

    .input-group .form-control {
        border-radius: 0 12px 12px 0;
    }

    .btn-save {
        border-radius: 12px;
        padding: 11px 20px;
        font-weight: 600;
        background: #15803d;
        border: none;
        transition: .25s;
    }

    .btn-save:hover {
        background: #166534;
        transform: translateY(-2px);
    }

    .btn-reset {
        border-radius: 12px;
        padding: 11px 18px;
        font-weight: 600;
    }

    .identity-card {
        border: none;
        border-radius: 20px;
        box-shadow: 0 8px 25px rgba(0,0,0,.06);
        overflow: hidden;
    }

    .identity-top {
        background: linear-gradient(135deg, #f0fdf4, #dcfce7);
        padding: 28px 20px;
        text-align: center;
    }

    .mosque-logo {
        width: 85px;
        height: 85px;
        margin: auto;
        border-radius: 24px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: white;
        color: #15803d;
        font-size: 35px;
        box-shadow: 0 8px 20px rgba(21,128,61,.12);
        margin-bottom: 15px;
    }

    .identity-top h5 {
        font-weight: 700;
        color: #166534;
        margin-bottom: 5px;
    }

    .identity-top p {
        color: #64748b;
        font-size: 14px;
        margin: 0;
    }

    .info-card {
        border: none;
        border-radius: 20px;
        box-shadow: 0 8px 25px rgba(0,0,0,.06);
        overflow: hidden;
    }

    .info-card-header {
        padding: 20px 22px;
        border-bottom: 1px solid #f1f5f9;
        background: white;
    }

    .info-card-header h6 {
        font-weight: 700;
        margin: 0;
    }

    .info-item {
        display: flex;
        align-items: center;
        gap: 14px;
        padding: 14px 0;
        border-bottom: 1px solid #f1f5f9;
    }

    .info-item:last-child {
        border-bottom: none;
    }

    .info-icon {
        width: 42px;
        height: 42px;
        min-width: 42px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #dcfce7;
        color: #15803d;
    }

    .info-label {
        display: block;
        font-size: 12px;
        color: #64748b;
        margin-bottom: 2px;
    }

    .info-value {
        font-weight: 600;
        color: #1e293b;
        word-break: break-word;
    }

    .alert {
        border: none;
        border-radius: 14px;
    }

    @media(max-width: 991px) {

        .setting-header {
            padding: 25px;
        }

    }

</style>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<div class="container-fluid">


    

    <div class="setting-header">

        <div class="d-flex justify-content-between align-items-center">

            <div>

                <div class="mb-2 opacity-75">

                    <i class="fas fa-cog me-1"></i>

                    Sistem Informasi Masjid

                </div>

                <h2>
                    Pengaturan
                </h2>

                <p>
                    Kelola informasi dan identitas masjid.
                </p>

            </div>

            <div class="d-none d-md-block">

                <i class="fas fa-mosque"
                   style="font-size:75px; opacity:.18;"></i>

            </div>

        </div>

    </div>


    

    <?php if(session('success')): ?>

        <div class="alert alert-success alert-dismissible fade show shadow-sm mb-4">

            <i class="fas fa-check-circle me-2"></i>

            <?php echo e(session('success')); ?>


            <button type="button"
                    class="btn-close"
                    data-bs-dismiss="alert">
            </button>

        </div>

    <?php endif; ?>


    

    <?php if($errors->any()): ?>

        <div class="alert alert-danger shadow-sm mb-4">

            <div class="fw-bold mb-2">

                <i class="fas fa-exclamation-circle me-2"></i>

                Terjadi kesalahan

            </div>

            <ul class="mb-0">

                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <li><?php echo e($error); ?></li>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </ul>

        </div>

    <?php endif; ?>


    <div class="row g-4">


        

        <div class="col-lg-8">

            <div class="card setting-card">

                <div class="setting-card-header">

                    <h5>

                        <i class="fas fa-mosque me-2"></i>

                        Informasi Masjid

                    </h5>

                    <small class="text-muted">

                        Lengkapi informasi dasar mengenai masjid.

                    </small>

                </div>


                <div class="card-body p-4">

                    <form action="<?php echo e(route('pengaturan.update')); ?>"
                          method="POST">

                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>


                        

                        <div class="mb-4">

                            <label for="nama_masjid"
                                   class="form-label">

                                Nama Masjid

                                <span class="text-danger">*</span>

                            </label>

                            <input
                                type="text"
                                name="nama_masjid"
                                id="nama_masjid"
                                class="form-control"
                                value="<?php echo e(old('nama_masjid', $pengaturan->nama_masjid ?? '')); ?>"
                                placeholder="Masukkan nama masjid"
                                required
                            >

                        </div>


                        

                        <div class="mb-4">

                            <label for="deskripsi"
                                   class="form-label">

                                Deskripsi

                            </label>

                            <textarea
                                name="deskripsi"
                                id="deskripsi"
                                class="form-control"
                                rows="4"
                                placeholder="Masukkan deskripsi masjid"
                            ><?php echo e(old('deskripsi', $pengaturan->deskripsi ?? '')); ?></textarea>

                        </div>


                        

                        <div class="mb-4">

                            <label for="alamat"
                                   class="form-label">

                                Alamat

                            </label>

                            <textarea
                                name="alamat"
                                id="alamat"
                                class="form-control"
                                rows="3"
                                placeholder="Masukkan alamat lengkap masjid"
                            ><?php echo e(old('alamat', $pengaturan->alamat ?? '')); ?></textarea>

                        </div>


                        

                        <div class="row">

                            <div class="col-md-6 mb-4">

                                <label for="no_hp"
                                       class="form-label">

                                    Nomor HP

                                </label>

                                <div class="input-group">

                                    <span class="input-group-text">

                                        <i class="fas fa-phone"></i>

                                    </span>

                                    <input
                                        type="text"
                                        name="no_hp"
                                        id="no_hp"
                                        class="form-control"
                                        value="<?php echo e(old('no_hp', $pengaturan->no_hp ?? '')); ?>"
                                        placeholder="08xxxxxxxxxx"
                                    >

                                </div>

                            </div>


                            <div class="col-md-6 mb-4">

                                <label for="email"
                                       class="form-label">

                                    Email

                                </label>

                                <div class="input-group">

                                    <span class="input-group-text">

                                        <i class="fas fa-envelope"></i>

                                    </span>

                                    <input
                                        type="email"
                                        name="email"
                                        id="email"
                                        class="form-control"
                                        value="<?php echo e(old('email', $pengaturan->email ?? '')); ?>"
                                        placeholder="email@masjid.com"
                                    >

                                </div>

                            </div>

                        </div>


                        

                        <div class="row">

                            <div class="col-md-6 mb-4">

                                <label for="tahun_berdiri"
                                       class="form-label">

                                    Tahun Berdiri

                                </label>

                                <input
                                    type="text"
                                    name="tahun_berdiri"
                                    id="tahun_berdiri"
                                    class="form-control"
                                    value="<?php echo e(old('tahun_berdiri', $pengaturan->tahun_berdiri ?? '')); ?>"
                                    placeholder="Contoh: 1995"
                                >

                            </div>


                            <div class="col-md-6 mb-4">

                                <label for="website"
                                       class="form-label">

                                    Website

                                </label>

                                <div class="input-group">

                                    <span class="input-group-text">

                                        <i class="fas fa-globe"></i>

                                    </span>

                                    <input
                                        type="text"
                                        name="website"
                                        id="website"
                                        class="form-control"
                                        value="<?php echo e(old('website', $pengaturan->website ?? '')); ?>"
                                        placeholder="https://website.com"
                                    >

                                </div>

                            </div>

                        </div>


                        

                        <div class="d-flex justify-content-end gap-2 pt-2">

                            <button type="reset"
                                    class="btn btn-light border btn-reset">

                                <i class="fas fa-undo me-1"></i>

                                Reset

                            </button>


                            <button type="submit"
                                    class="btn btn-success btn-save">

                                <i class="fas fa-save me-1"></i>

                                Simpan Pengaturan

                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>


        

        <div class="col-lg-4">


            

            <div class="card identity-card mb-4">

                <div class="identity-top">

                    <div class="mosque-logo">

                        <i class="fas fa-mosque"></i>

                    </div>

                    <h5>

                        Sistem Informasi Masjid

                    </h5>

                    <p>

                        Kelola informasi masjid dengan mudah

                    </p>

                </div>

            </div>


            

            <div class="card info-card">

                <div class="info-card-header">

                    <h6>

                        <i class="fas fa-info-circle text-success me-2"></i>

                        Informasi Saat Ini

                    </h6>

                </div>


                <div class="card-body px-4">


                    

                    <div class="info-item">

                        <div class="info-icon">

                            <i class="fas fa-building"></i>

                        </div>

                        <div>

                            <span class="info-label">
                                Nama Masjid
                            </span>

                            <span class="info-value">

                                <?php echo e($pengaturan->nama_masjid ?? 'Belum diatur'); ?>


                            </span>

                        </div>

                    </div>


                    

                    <div class="info-item">

                        <div class="info-icon">

                            <i class="fas fa-phone"></i>

                        </div>

                        <div>

                            <span class="info-label">
                                Nomor HP
                            </span>

                            <span class="info-value">

                                <?php echo e($pengaturan->no_hp ?? 'Belum diatur'); ?>


                            </span>

                        </div>

                    </div>


                    

                    <div class="info-item">

                        <div class="info-icon">

                            <i class="fas fa-envelope"></i>

                        </div>

                        <div>

                            <span class="info-label">
                                Email
                            </span>

                            <span class="info-value">

                                <?php echo e($pengaturan->email ?? 'Belum diatur'); ?>


                            </span>

                        </div>

                    </div>


                    

                    <div class="info-item">

                        <div class="info-icon">

                            <i class="fas fa-calendar-alt"></i>

                        </div>

                        <div>

                            <span class="info-label">
                                Tahun Berdiri
                            </span>

                            <span class="info-value">

                                <?php echo e($pengaturan->tahun_berdiri ?? 'Belum diatur'); ?>


                            </span>

                        </div>

                    </div>


                    

                    <div class="info-item">

                        <div class="info-icon">

                            <i class="fas fa-globe"></i>

                        </div>

                        <div>

                            <span class="info-label">
                                Website
                            </span>

                            <span class="info-value">

                                <?php echo e($pengaturan->website ?? 'Belum diatur'); ?>


                            </span>

                        </div>

                    </div>


                </div>

            </div>

        </div>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Husen_masjid\resources\views/pengaturan/index.blade.php ENDPATH**/ ?>