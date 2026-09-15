<style>
.sidebar-setting {
    margin-top: auto;
    padding-top: 10px;
    border-top: 1px solid rgba(255,255,255,.08);
}

.sidebar-setting a {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 11px 15px;
    border-radius: 12px;
    color: #d1fae5;
    text-decoration: none;
    transition: .2s ease;
}

.sidebar-setting a:hover {
    background: rgba(255,255,255,.08);
    color: white;
}

.sidebar-setting a.active {
    background: rgba(255,255,255,.12);
    color: white;
}

.sidebar-setting i {
    width: 20px;
    text-align: center;
}
</style>


<div class="sidebar d-flex flex-column">

    
    <div class="logo">

        <div class="logo-icon">
            <i class="fas fa-mosque"></i>
        </div>

        <div>
            <h4 class="mb-0">SI Masjid</h4>
            <small>Sistem Informasi Masjid</small>
        </div>

    </div>


    
    <ul class="menu flex-grow-1">

        
        <li>
            <a href="<?php echo e(route('dashboard')); ?>"
               class="<?php echo e(request()->routeIs('dashboard') ? 'active' : ''); ?>">

                <i class="fas fa-chart-pie"></i>
                <span>Dashboard</span>

            </a>
        </li>


        

        
        <li>
            <a href="<?php echo e(route('pengurus.index')); ?>"
               class="<?php echo e(request()->routeIs('pengurus.*') ? 'active' : ''); ?>">

                <i class="fas fa-users"></i>
                <span>Pengurus</span>

            </a>
        </li>


        
        <li>
            <a href="<?php echo e(route('inventaris.index')); ?>"
               class="<?php echo e(request()->routeIs('inventaris.*') ? 'active' : ''); ?>">

                <i class="fas fa-boxes-stacked"></i>
                <span>Inventaris</span>

            </a>
        </li>


        

        
        <li>
            <a href="<?php echo e(route('kas-masjid.index')); ?>"
               class="<?php echo e(request()->routeIs('kas-masjid.*') ? 'active' : ''); ?>">

                <i class="fas fa-wallet"></i>
                <span>Kas Masjid</span>

            </a>
        </li>


        
        <li>
            <a href="<?php echo e(route('donasi.index')); ?>"
               class="<?php echo e(request()->routeIs('donasi.*') ? 'active' : ''); ?>">

                <i class="fas fa-hand-holding-heart"></i>
                <span>Donasi</span>

            </a>
        </li>


        

        
        <li>
            <a href="<?php echo e(route('jadwal.index')); ?>"
               class="<?php echo e(request()->routeIs('jadwal.*') ? 'active' : ''); ?>">

                <i class="fas fa-clock"></i>
                <span>Jadwal Sholat</span>

            </a>
        </li>


        
        <li>
            <a href="<?php echo e(route('jadwal-imam.index')); ?>"
               class="<?php echo e(request()->routeIs('jadwal-imam.*') ? 'active' : ''); ?>">

                <i class="fas fa-microphone"></i>
                <span>Jadwal Imam & Khotib</span>

            </a>
        </li>


        
        <li>
            <a href="<?php echo e(route('pengumuman.index')); ?>"
               class="<?php echo e(request()->routeIs('pengumuman.*') ? 'active' : ''); ?>">

                <i class="fas fa-bullhorn"></i>
                <span>Pengumuman</span>

            </a>
        </li>


        
        <li>
            <a href="<?php echo e(route('laporan.index')); ?>"
               class="<?php echo e(request()->routeIs('laporan.*') ? 'active' : ''); ?>">

                <i class="fas fa-file-alt"></i>
                <span>Laporan</span>

            </a>
        </li>


        

        <li>
            <a href="<?php echo e(route('profile.edit')); ?>"
               class="<?php echo e(request()->routeIs('profile.*') ? 'active' : ''); ?>">

                <i class="fas fa-user-circle"></i>
                <span>Profil</span>

            </a>
        </li>


        

        <?php if(auth()->user()->role === 'admin'): ?>

            <li class="sidebar-setting">

                <a href="<?php echo e(route('pengaturan.index')); ?>"
                   class="<?php echo e(request()->routeIs('pengaturan.*') ? 'active' : ''); ?>">

                    <i class="fas fa-cog"></i>
                    <span>Pengaturan</span>

                </a>

            </li>

        <?php endif; ?>

    </ul>


    

    <div class="sidebar-user">

        <div class="d-flex align-items-center mb-3">

            <img
                src="https://ui-avatars.com/api/?name=<?php echo e(urlencode(Auth::user()->name)); ?>&background=16a34a&color=fff"
                class="rounded-circle"
                width="50"
                height="50"
                alt="Foto Profil">

            <div class="ms-3">

                <div class="fw-bold">
                    <?php echo e(Auth::user()->name); ?>

                </div>

                <small>
                    <?php echo e(auth()->user()->role === 'admin'
                        ? 'Administrator'
                        : 'Jamaah'); ?>

                </small>

            </div>

        </div>


        
        <form action="<?php echo e(route('logout')); ?>" method="POST">

            <?php echo csrf_field(); ?>

            <button type="submit" class="logout-btn">

                <i class="fas fa-sign-out-alt me-2"></i>

                Logout

            </button>

        </form>

    </div>

</div><?php /**PATH E:\Husen_masjid\resources\views/partials/sidebar.blade.php ENDPATH**/ ?>