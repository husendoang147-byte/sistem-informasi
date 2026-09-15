<div class="topbar">

    {{-- Judul --}}
    <div>
        <h3 style="margin:0;font-weight:700;color:#166534;">
            @yield('title')
        </h3>
    </div>


    {{-- Bagian kanan --}}
    <div class="profile">

        {{-- =========================
             SEARCH MENU
        ========================= --}}

        <div class="search-box position-relative">

            <i class="fas fa-search search-icon"></i>

            <input
                type="text"
                id="navbarMenuSearch"
                class="form-control"
                placeholder="Cari menu..."
                autocomplete="off"
            >

            {{-- Hasil pencarian --}}
            <div id="searchResults"
                 class="search-results">
            </div>

        </div>


        {{-- Notifikasi --}}
        <button class="btn btn-light">

            <i class="fas fa-bell"></i>

        </button>


        {{-- User --}}
        <div class="dropdown">

            <button
                class="btn btn-success dropdown-toggle"
                data-bs-toggle="dropdown">

                <i class="fas fa-user-circle"></i>

                {{ Auth::user()->name }}

            </button>


            <ul class="dropdown-menu dropdown-menu-end">

                <li>

                    <a class="dropdown-item"
                       href="{{ route('profile.edit') }}">

                        <i class="fas fa-user"></i>

                        Profil

                    </a>

                </li>


                <li>
                    <hr class="dropdown-divider">
                </li>


                <li>

                    <form
                        action="{{ route('logout') }}"
                        method="POST">

                        @csrf

                        <button
                            type="submit"
                            class="dropdown-item">

                            <i class="fas fa-sign-out-alt text-danger"></i>

                            Logout

                        </button>

                    </form>

                </li>

            </ul>

        </div>

    </div>

</div>


{{-- =========================
     CSS SEARCH
========================= --}}

<style>

.search-box {
    width: 350px;
}

.search-box input {

    height: 42px;

    border-radius: 13px;

    padding-left: 42px;

    border: 1px solid #e5e7eb;

    background: #f8fafc;

    transition: .3s;
}

.search-box input:focus {

    background: white;

    border-color: #22c55e;

    box-shadow:
        0 0 0 3px rgba(34,197,94,.12);
}


.search-icon {

    position: absolute;

    left: 15px;

    top: 50%;

    transform: translateY(-50%);

    color: #9ca3af;

    z-index: 5;
}


/* =========================
   HASIL SEARCH
========================= */

.search-results {

    position: absolute;

    top: 48px;

    left: 0;

    width: 100%;

    background: white;

    border-radius: 15px;

    box-shadow:
        0 15px 35px rgba(0,0,0,.12);

    overflow: hidden;

    display: none;

    z-index: 9999;
}


.search-result-item {

    display: flex;

    align-items: center;

    gap: 12px;

    padding: 12px 15px;

    color: #374151;

    text-decoration: none;

    border-bottom: 1px solid #f1f5f9;

    transition: .2s;
}


.search-result-item:last-child {
    border-bottom: none;
}


.search-result-item:hover {

    background: #f0fdf4;

    color: #15803d;
}


.search-result-icon {

    width: 36px;

    height: 36px;

    border-radius: 10px;

    background: #dcfce7;

    color: #15803d;

    display: flex;

    align-items: center;

    justify-content: center;
}


.search-result-text {

    display: flex;

    flex-direction: column;
}


.search-result-text strong {

    font-size: 14px;
}


.search-result-text small {

    color: #9ca3af;

    font-size: 11px;
}


.search-empty {

    padding: 20px;

    text-align: center;

    color: #9ca3af;

    font-size: 13px;
}


/* Responsive */

@media(max-width: 900px) {

    .search-box {
        width: 220px;
    }

}


@media(max-width: 600px) {

    .search-box {
        display: none;
    }

}

</style>


{{-- =========================
     JAVASCRIPT
========================= --}}

<script>

document.addEventListener('DOMContentLoaded', function () {

    const searchInput =
        document.getElementById('navbarMenuSearch');

    const searchResults =
        document.getElementById('searchResults');


    const menus = [

        {
            name: 'Dashboard',
            icon: 'fas fa-chart-pie',
            url: "{{ route('dashboard') }}",
            description: 'Halaman utama'
        },

        {
            name: 'Pengurus',
            icon: 'fas fa-users',
            url: "{{ route('pengurus.index') }}",
            description: 'Kelola data pengurus'
        },

        {
            name: 'Kas Masjid',
            icon: 'fas fa-wallet',
            url: "{{ route('kas-masjid.index') }}",
            description: 'Kelola keuangan masjid'
        },

        {
            name: 'Donasi',
            icon: 'fas fa-hand-holding-heart',
            url: "{{ route('donasi.index') }}",
            description: 'Kelola data donasi'
        },

        {
            name: 'Jadwal Sholat',
            icon: 'fas fa-clock',
            url: "{{ route('jadwal.index') }}",
            description: 'Jadwal sholat masjid'
        },

        {
            name: 'Pengumuman',
            icon: 'fas fa-bullhorn',
            url: "{{ route('pengumuman.index') }}",
            description: 'Kelola pengumuman'
        },

        {
            name: 'Laporan',
            icon: 'fas fa-file-alt',
            url: "{{ route('laporan.index') }}",
            description: 'Laporan masjid'
        },

        {
            name: 'Pengaturan',
            icon: 'fas fa-cog',
            url: "{{ route('pengaturan.index') }}",
            description: 'Pengaturan sistem'
        },

        {
            name: 'Profil',
            icon: 'fas fa-user-circle',
            url: "{{ route('profile.edit') }}",
            description: 'Profil pengguna'
        }

    ];


    searchInput.addEventListener('input', function () {

        const keyword =
            this.value.toLowerCase().trim();


        searchResults.innerHTML = '';


        if (keyword === '') {

            searchResults.style.display = 'none';

            return;

        }


        const results = menus.filter(menu =>

            menu.name
                .toLowerCase()
                .includes(keyword)

        );


        if (results.length === 0) {

            searchResults.innerHTML = `

                <div class="search-empty">

                    <i class="fas fa-search mb-2"></i>

                    <br>

                    Menu tidak ditemukan

                </div>

            `;

        } else {

            results.forEach(menu => {

                searchResults.innerHTML += `

                    <a
                        href="${menu.url}"
                        class="search-result-item">

                        <div class="search-result-icon">

                            <i class="${menu.icon}"></i>

                        </div>

                        <div class="search-result-text">

                            <strong>
                                ${menu.name}
                            </strong>

                            <small>
                                ${menu.description}
                            </small>

                        </div>

                    </a>

                `;

            });

        }


        searchResults.style.display = 'block';

    });


    /* Klik di luar */

    document.addEventListener('click', function (event) {

        if (!event.target.closest('.search-box')) {

            searchResults.style.display = 'none';

        }

    });


    /* ESC */

    searchInput.addEventListener('keydown', function (event) {

        if (event.key === 'Escape') {

            searchInput.value = '';

            searchResults.style.display = 'none';

        }

    });

});

</script>