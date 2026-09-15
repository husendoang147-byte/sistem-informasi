

<?php $__env->startSection('title', 'Inventaris Masjid'); ?>

<?php $__env->startSection('css'); ?>

<style>

/* =====================================================
   PAGE
===================================================== */

.inventaris-page {
    width: 100%;
    color: #172033;
}


/* =====================================================
   HEADER
===================================================== */

.inventaris-header {
    background: linear-gradient(135deg, #166534, #22c55e);
    color: white;
    border-radius: 22px;
    padding: 28px 30px;
    margin-bottom: 25px;
    box-shadow: 0 10px 30px rgba(0,0,0,.08);
}

.inventaris-header h2 {
    font-weight: 700;
    margin-bottom: 6px;
}

.inventaris-header p {
    margin: 0;
    color: rgba(255,255,255,.82);
    font-size: 14px;
}

.header-icon {
    font-size: 70px;
    opacity: .15;
}


/* =====================================================
   ALERT
===================================================== */

.success-alert {
    background: #ecfdf5;
    border: 1px solid #bbf7d0;
    color: #166534;
    border-radius: 12px;
    padding: 13px 16px;
    margin-bottom: 22px;
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 14px;
    font-weight: 600;
}


/* =====================================================
   STATISTIK
===================================================== */

.stat-card {
    background: white;
    border: none;
    border-radius: 18px;
    padding: 20px;
    box-shadow: 0 8px 25px rgba(0,0,0,.06);
    transition: .3s ease;
    height: 100%;
}

.stat-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 30px rgba(0,0,0,.09);
}

.stat-label {
    color: #64748b;
    font-size: 13px;
    margin-bottom: 7px;
}

.stat-number {
    color: #172033;
    font-size: 27px;
    font-weight: 800;
    line-height: 1;
}

.stat-description {
    color: #15803d;
    font-size: 12px;
    margin-top: 7px;
}

.stat-icon {
    width: 54px;
    height: 54px;
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

.stat-blue {
    background: #2563eb;
}

.stat-yellow {
    background: #f59e0b;
}


/* =====================================================
   MAIN CARD
===================================================== */

.inventory-card {
    background: white;
    border: none;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 8px 25px rgba(0,0,0,.06);
}


/* =====================================================
   CARD HEADER
===================================================== */

.inventory-card-header {
    padding: 21px 24px;
    border-bottom: 1px solid #eef2f7;
}

.card-title-wrapper {
    display: flex;
    align-items: center;
    gap: 12px;
}

.card-title-icon {
    width: 38px;
    height: 38px;
    border-radius: 11px;
    background: #dcfce7;
    color: #15803d;
    display: flex;
    align-items: center;
    justify-content: center;
}

.inventory-card-header h5 {
    margin: 0 0 3px;
    font-size: 17px;
    font-weight: 700;
}

.inventory-card-header p {
    margin: 0;
    color: #64748b;
    font-size: 12px;
}

.total-badge {
    background: #dcfce7;
    color: #166534;
    padding: 7px 13px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 700;
}


/* =====================================================
   TOMBOL TAMBAH
===================================================== */

.btn-tambah {
    border-radius: 12px;
    padding: 10px 17px;
    font-size: 13px;
    font-weight: 600;
}


/* =====================================================
   TABLE
===================================================== */

.inventory-table {
    width: 100%;
    margin: 0;
    border-collapse: collapse;
}

.inventory-table thead th {
    background: #f0fdf4;
    color: #166534;
    border: none;
    padding: 15px 17px;
    font-size: 12px;
    font-weight: 700;
    white-space: nowrap;
}

.inventory-table tbody td {
    padding: 15px 17px;
    border-bottom: 1px solid #eef2f7;
    vertical-align: middle;
    font-size: 13px;
}

.inventory-table tbody tr {
    transition: .2s ease;
}

.inventory-table tbody tr:hover {
    background: #f8fffa;
}

.inventory-table tbody tr:last-child td {
    border-bottom: none;
}


/* =====================================================
   NOMOR
===================================================== */

.number-badge {
    width: 30px;
    height: 30px;
    border-radius: 9px;
    background: #f1f5f9;
    color: #475569;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 12px;
    font-weight: 700;
}


/* =====================================================
   FOTO
===================================================== */

.inventory-photo,
.photo-placeholder {
    width: 55px;
    height: 55px;
    border-radius: 13px;
}

.inventory-photo {
    overflow: hidden;
    border: 1px solid #e2e8f0;
    background: #f8fafc;
}

.inventory-photo img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}

.photo-placeholder {
    background: #f0fdf4;
    border: 1px dashed #bbf7d0;
    color: #86b99a;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 19px;
}


/* =====================================================
   NAMA BARANG
===================================================== */

.item-name {
    color: #111827;
    font-size: 14px;
    font-weight: 700;
    margin-bottom: 4px;
}

.item-subtitle {
    color: #94a3b8;
    font-size: 11px;
}

.item-subtitle i {
    font-size: 9px;
    margin-right: 3px;
}


/* =====================================================
   JUMLAH
===================================================== */

.quantity-badge {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    background: #dcfce7;
    color: #15803d;
    border-radius: 20px;
    padding: 7px 11px;
    font-size: 12px;
    font-weight: 700;
}


/* =====================================================
   KETERANGAN
===================================================== */

.description {
    max-width: 330px;
    color: #64748b;
    line-height: 1.5;
    font-size: 12px;
}

.empty-text {
    color: #94a3b8;
    font-size: 12px;
}


/* =====================================================
   ACTION
===================================================== */

.action-wrapper {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 7px;
}

.action-btn {
    width: 36px;
    height: 36px;
    border: none;
    border-radius: 10px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    font-size: 13px;
    transition: .2s ease;
    cursor: pointer;
}

.action-btn:hover {
    transform: translateY(-2px);
}


/* DETAIL */

.action-detail {
    background: #e0f2fe;
    color: #0284c7;
}

.action-detail:hover {
    background: #bae6fd;
    color: #0369a1;
}


/* EDIT */

.action-edit {
    background: #fef3c7;
    color: #d97706;
}

.action-edit:hover {
    background: #fde68a;
    color: #b45309;
}


/* DELETE */

.action-delete {
    background: #fee2e2;
    color: #dc2626;
}

.action-delete:hover {
    background: #fecaca;
    color: #b91c1c;
}


/* =====================================================
   EMPTY STATE
===================================================== */

.empty-table {
    padding: 65px 20px !important;
    text-align: center;
}

.empty-icon {
    width: 75px;
    height: 75px;
    margin: 0 auto 18px;
    border-radius: 20px;
    background: #ecfdf5;
    color: #16a34a;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 29px;
}

.empty-table h5 {
    font-weight: 700;
    margin-bottom: 6px;
}

.empty-table p {
    color: #64748b;
    font-size: 13px;
    margin-bottom: 18px;
}


/* =====================================================
   DELETE MODAL
===================================================== */

.delete-modal {
    border: none;
    border-radius: 20px;
    padding: 30px;
    text-align: center;
    box-shadow: 0 20px 50px rgba(15,23,42,.18);
}

.delete-icon {
    width: 62px;
    height: 62px;
    margin: 0 auto 18px;
    border-radius: 17px;
    background: #fee2e2;
    color: #dc2626;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
}

.delete-modal h5 {
    font-weight: 700;
    margin-bottom: 8px;
}

.delete-modal p {
    color: #64748b;
    font-size: 13px;
    line-height: 1.6;
    margin-bottom: 5px;
}

.delete-warning {
    display: block;
    color: #dc2626;
    font-size: 11px;
    margin-bottom: 22px;
}

.delete-actions {
    display: flex;
    justify-content: center;
    gap: 9px;
}

.cancel-btn,
.confirm-delete-btn {
    min-width: 105px;
    height: 40px;
    border-radius: 10px;
    font-size: 12px;
    font-weight: 700;
}

.cancel-btn {
    border: 1px solid #e2e8f0;
    background: white;
    color: #475569;
}

.cancel-btn:hover {
    background: #f8fafc;
}

.confirm-delete-btn {
    border: none;
    background: #dc2626;
    color: white;
}

.confirm-delete-btn:hover {
    background: #b91c1c;
}


/* =====================================================
   RESPONSIVE
===================================================== */

@media(max-width: 992px) {

    .stat-grid {
        grid-template-columns: 1fr 1fr !important;
    }

}


@media(max-width: 768px) {

    .inventaris-header {
        padding: 22px;
    }

    .header-icon {
        display: none;
    }

    .inventory-card-header {
        padding: 17px;
    }

    .inventory-card-header .d-flex {
        align-items: flex-start !important;
        gap: 12px;
    }

    .table-wrapper {
        overflow-x: auto;
    }

    .inventory-table {
        min-width: 850px;
    }

}


@media(max-width: 576px) {

    .stat-grid {
        grid-template-columns: 1fr !important;
    }

    .inventaris-header h2 {
        font-size: 22px;
    }

    .inventaris-header p {
        font-size: 12px;
    }

    .btn-tambah {
        width: 100%;
    }

}

</style>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<div class="inventaris-page">


    

    <div class="inventaris-header">

        <div class="d-flex justify-content-between align-items-center">

            <div>

            

                <h2>
                    Inventaris Masjid
                </h2>

                <p>
                    Kelola dan lihat seluruh barang inventaris masjid.
                </p>

            </div>

            <div class="header-icon">

                <i class="fas fa-boxes-stacked"></i>

            </div>

        </div>

    </div>


    

    <?php if(session('success')): ?>

        <div class="success-alert">

            <i class="fas fa-circle-check"></i>

            <span>
                <?php echo e(session('success')); ?>

            </span>

        </div>

    <?php endif; ?>


    

    <?php

        $totalInventaris = $inventaris->count();

        $totalBarang = $inventaris->sum('jumlah_barang');

        $barangTersedia = $inventaris
            ->where('jumlah_barang', '>', 0)
            ->count();

    ?>


    <div class="row g-4 mb-4 stat-grid">


        

        <div class="col-lg-4 col-md-6">

            <div class="stat-card">

                <div class="d-flex justify-content-between align-items-center">

                    <div>

                        <div class="stat-label">
                            Total Inventaris
                        </div>

                        <div class="stat-number">
                            <?php echo e($totalInventaris); ?>

                        </div>

                        <div class="stat-description">

                            <i class="fas fa-boxes-stacked me-1"></i>

                            Jenis barang

                        </div>

                    </div>

                    <div class="stat-icon stat-green">

                        <i class="fas fa-boxes-stacked"></i>

                    </div>

                </div>

            </div>

        </div>


        

        <div class="col-lg-4 col-md-6">

            <div class="stat-card">

                <div class="d-flex justify-content-between align-items-center">

                    <div>

                        <div class="stat-label">
                            Total Barang
                        </div>

                        <div class="stat-number">
                            <?php echo e($totalBarang); ?>

                        </div>

                        <div class="stat-description">

                            <i class="fas fa-box me-1"></i>

                            Seluruh jumlah barang

                        </div>

                    </div>

                    <div class="stat-icon stat-blue">

                        <i class="fas fa-box"></i>

                    </div>

                </div>

            </div>

        </div>


        

        <div class="col-lg-4 col-md-6">

            <div class="stat-card">

                <div class="d-flex justify-content-between align-items-center">

                    <div>

                        <div class="stat-label">
                            Barang Tersedia
                        </div>

                        <div class="stat-number">
                            <?php echo e($barangTersedia); ?>

                        </div>

                        <div class="stat-description">

                            <i class="fas fa-circle-check me-1"></i>

                            Item tersedia

                        </div>

                    </div>

                    <div class="stat-icon stat-yellow">

                        <i class="fas fa-circle-check"></i>

                    </div>

                </div>

            </div>

        </div>

    </div>


    

    <div class="inventory-card">


        

        <div class="inventory-card-header">

            <div class="d-flex justify-content-between align-items-center">

                <div class="card-title-wrapper">

                    <div class="card-title-icon">

                        <i class="fas fa-list"></i>

                    </div>

                    <div>

                        <h5>
                            Daftar Inventaris
                        </h5>

                        <p>
                            Informasi barang inventaris yang dimiliki oleh masjid.
                        </p>

                    </div>

                </div>


                <div class="d-flex align-items-center gap-2">


                    <span class="total-badge">

                        <?php echo e($totalInventaris); ?> Barang

                    </span>


                    

                    <?php if(auth()->user()->role === 'admin'): ?>

                        <a
                            href="<?php echo e(route('inventaris.create')); ?>"
                            class="btn btn-success btn-tambah"
                        >

                            <i class="fas fa-plus me-1"></i>

                            Tambah Barang

                        </a>

                    <?php endif; ?>

                </div>

            </div>

        </div>


        

        <div class="table-responsive">

            <table class="table inventory-table align-middle">

                <thead>

                    <tr>

                        <th width="65">
                            No
                        </th>

                        <th width="90">
                            Foto
                        </th>

                        <th>
                            Nama Barang
                        </th>

                        <th>
                            Jumlah
                        </th>

                        <th>
                            Keterangan
                        </th>

                        <th width="140" class="text-center">
                            Aksi
                        </th>

                    </tr>

                </thead>


                <tbody>

                    <?php $__empty_1 = true; $__currentLoopData = $inventaris; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                        <tr>


                            

                            <td>

                                <div class="number-badge">

                                    <?php echo e($loop->iteration); ?>


                                </div>

                            </td>


                            

                            <td>

                                <?php if($item->foto): ?>

                                    <?php

                                        $foto = basename($item->foto);

                                        if(str_starts_with($item->foto, 'inventaris/')) {

                                            $fotoUrl = asset(
                                                'storage/inventaris/' . $foto
                                            );

                                        } else {

                                            $fotoUrl = asset(
                                                'uploads/inventaris/' . $foto
                                            );

                                        }

                                    ?>


                                    <div class="inventory-photo">

                                        <img
                                            src="<?php echo e($fotoUrl); ?>"
                                            alt="<?php echo e($item->nama_barang); ?>"
                                            loading="lazy"
                                            onerror="
                                                this.style.display='none';
                                                this.nextElementSibling.style.display='flex';
                                            "
                                        >

                                        <div
                                            class="photo-placeholder"
                                            style="display:none;"
                                        >

                                            <i class="fas fa-image"></i>

                                        </div>

                                    </div>

                                <?php else: ?>

                                    <div class="photo-placeholder">

                                        <i class="fas fa-image"></i>

                                    </div>

                                <?php endif; ?>

                            </td>


                            

                            <td>

                                <div class="item-name">

                                    <?php echo e($item->nama_barang); ?>


                                </div>

                                <div class="item-subtitle">

                                    <i class="fas fa-box-open"></i>

                                    Barang inventaris

                                </div>

                            </td>


                            

                            <td>

                                <span class="quantity-badge">

                                    <i class="fas fa-box"></i>

                                    <?php echo e($item->jumlah_barang); ?>


                                </span>

                            </td>


                            

                            <td>

                                <?php if($item->keterangan): ?>

                                    <div class="description">

                                        <?php echo e($item->keterangan); ?>


                                    </div>

                                <?php else: ?>

                                    <span class="empty-text">

                                        Tidak ada keterangan

                                    </span>

                                <?php endif; ?>

                            </td>


                            

                            <td>

                                <div class="action-wrapper">


                                    

                                    <a
                                        href="<?php echo e(route('inventaris.show', $item->id_inventaris)); ?>"
                                        class="action-btn action-detail"
                                        title="Lihat Detail"
                                    >

                                        <i class="fas fa-eye"></i>

                                    </a>


                                    <?php if(auth()->user()->role === 'admin'): ?>


                                        

                                        <a
                                            href="<?php echo e(route('inventaris.edit', $item->id_inventaris)); ?>"
                                            class="action-btn action-edit"
                                            title="Edit"
                                        >

                                            <i class="fas fa-pen"></i>

                                        </a>


                                        

                                        <button
                                            type="button"
                                            class="action-btn action-delete"
                                            title="Hapus"
                                            data-bs-toggle="modal"
                                            data-bs-target="#deleteModal<?php echo e($item->id_inventaris); ?>"
                                        >

                                            <i class="fas fa-trash"></i>

                                        </button>

                                    <?php endif; ?>

                                </div>

                            </td>

                        </tr>


                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>


                        

                        <tr>

                            <td
                                colspan="6"
                                class="empty-table"
                            >

                                <div class="empty-icon">

                                    <i class="fas fa-box-open"></i>

                                </div>

                                <h5>
                                    Belum Ada Data Inventaris
                                </h5>

                                <p>
                                    Data barang inventaris masjid belum tersedia.
                                </p>


                                <?php if(auth()->user()->role === 'admin'): ?>

                                    <a
                                        href="<?php echo e(route('inventaris.create')); ?>"
                                        class="btn btn-success btn-tambah"
                                    >

                                        <i class="fas fa-plus me-1"></i>

                                        Tambah Barang

                                    </a>

                                <?php endif; ?>

                            </td>

                        </tr>


                    <?php endif; ?>

                </tbody>

            </table>

        </div>

    </div>

</div>




<?php if(auth()->user()->role === 'admin'): ?>

    <?php $__currentLoopData = $inventaris; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <div
            class="modal fade"
            id="deleteModal<?php echo e($item->id_inventaris); ?>"
            tabindex="-1"
            aria-hidden="true"
        >

            <div class="modal-dialog modal-dialog-centered">

                <div class="modal-content delete-modal">


                    

                    <div class="delete-icon">

                        <i class="fas fa-trash"></i>

                    </div>


                    

                    <h5>
                        Hapus Barang?
                    </h5>


                    

                    <p>

                        Apakah kamu yakin ingin menghapus
                        <strong><?php echo e($item->nama_barang); ?></strong>?

                    </p>


                    <span class="delete-warning">

                        Data yang dihapus tidak dapat dikembalikan.

                    </span>


                    

                    <div class="delete-actions">


                        <button
                            type="button"
                            class="cancel-btn"
                            data-bs-dismiss="modal"
                        >

                            Batal

                        </button>


                        <form
                            action="<?php echo e(route('inventaris.destroy', $item->id_inventaris)); ?>"
                            method="POST"
                        >

                            <?php echo csrf_field(); ?>

                            <?php echo method_field('DELETE'); ?>


                            <button
                                type="submit"
                                class="confirm-delete-btn"
                            >

                                <i class="fas fa-trash me-1"></i>

                                Ya, Hapus

                            </button>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Husen_masjid\resources\views/inventaris/index.blade.php ENDPATH**/ ?>