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

    {{-- =========================
         LOGO
    ========================== --}}
    <div class="logo">

        <div class="logo-icon">
            <i class="fas fa-mosque"></i>
        </div>

        <div>
            <h4 class="mb-0">SI Masjid</h4>
            <small>Sistem Informasi Masjid</small>
        </div>

    </div>


    {{-- =========================
         MENU
    ========================== --}}
    <ul class="menu flex-grow-1">

        {{-- Dashboard --}}
        <li>
            <a href="{{ route('dashboard') }}"
               class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">

                <i class="fas fa-chart-pie"></i>
                <span>Dashboard</span>

            </a>
        </li>


        {{-- =========================
             DATA MASJID
        ========================== --}}

        {{-- Pengurus --}}
        <li>
            <a href="{{ route('pengurus.index') }}"
               class="{{ request()->routeIs('pengurus.*') ? 'active' : '' }}">

                <i class="fas fa-users"></i>
                <span>Pengurus</span>

            </a>
        </li>


        {{-- Inventaris --}}
        <li>
            <a href="{{ route('inventaris.index') }}"
               class="{{ request()->routeIs('inventaris.*') ? 'active' : '' }}">

                <i class="fas fa-boxes-stacked"></i>
                <span>Inventaris</span>

            </a>
        </li>


        {{-- =========================
             KEUANGAN
        ========================== --}}

        {{-- Kas Masjid --}}
        <li>
            <a href="{{ route('kas-masjid.index') }}"
               class="{{ request()->routeIs('kas-masjid.*') ? 'active' : '' }}">

                <i class="fas fa-wallet"></i>
                <span>Kas Masjid</span>

            </a>
        </li>


        {{-- Donasi --}}
        <li>
            <a href="{{ route('donasi.index') }}"
               class="{{ request()->routeIs('donasi.*') ? 'active' : '' }}">

                <i class="fas fa-hand-holding-heart"></i>
                <span>Donasi</span>

            </a>
        </li>


        {{-- =========================
             INFORMASI
        ========================== --}}

        {{-- Jadwal Sholat --}}
        <li>
            <a href="{{ route('jadwal.index') }}"
               class="{{ request()->routeIs('jadwal.*') ? 'active' : '' }}">

                <i class="fas fa-clock"></i>
                <span>Jadwal Sholat</span>

            </a>
        </li>


        {{-- Jadwal Imam & Khotib --}}
        <li>
            <a href="{{ route('jadwal-imam.index') }}"
               class="{{ request()->routeIs('jadwal-imam.*') ? 'active' : '' }}">

                <i class="fas fa-microphone"></i>
                <span>Jadwal Imam & Khotib</span>

            </a>
        </li>


        {{-- Pengumuman --}}
        <li>
            <a href="{{ route('pengumuman.index') }}"
               class="{{ request()->routeIs('pengumuman.*') ? 'active' : '' }}">

                <i class="fas fa-bullhorn"></i>
                <span>Pengumuman</span>

            </a>
        </li>


        {{-- Laporan --}}
        <li>
            <a href="{{ route('laporan.index') }}"
               class="{{ request()->routeIs('laporan.*') ? 'active' : '' }}">

                <i class="fas fa-file-alt"></i>
                <span>Laporan</span>

            </a>
        </li>


        {{-- =========================
             PROFIL
        ========================== --}}

        <li>
            <a href="{{ route('profile.edit') }}"
               class="{{ request()->routeIs('profile.*') ? 'active' : '' }}">

                <i class="fas fa-user-circle"></i>
                <span>Profil</span>

            </a>
        </li>


        {{-- =========================
             PENGATURAN — ADMIN SAJA
        ========================== --}}

        @if(auth()->user()->role === 'admin')

            <li class="sidebar-setting">

                <a href="{{ route('pengaturan.index') }}"
                   class="{{ request()->routeIs('pengaturan.*') ? 'active' : '' }}">

                    <i class="fas fa-cog"></i>
                    <span>Pengaturan</span>

                </a>

            </li>

        @endif

    </ul>


    {{-- =========================
         USER LOGIN
    ========================== --}}

    <div class="sidebar-user">

        <div class="d-flex align-items-center mb-3">

            <img
                src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=16a34a&color=fff"
                class="rounded-circle"
                width="50"
                height="50"
                alt="Foto Profil">

            <div class="ms-3">

                <div class="fw-bold">
                    {{ Auth::user()->name }}
                </div>

                <small>
                    {{ auth()->user()->role === 'admin'
                        ? 'Administrator'
                        : 'Jamaah'
                    }}
                </small>

            </div>

        </div>


        {{-- Logout --}}
        <form action="{{ route('logout') }}" method="POST">

            @csrf

            <button type="submit" class="logout-btn">

                <i class="fas fa-sign-out-alt me-2"></i>

                Logout

            </button>

        </form>

    </div>

</div>