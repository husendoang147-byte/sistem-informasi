<footer class="main-footer">

    <div class="footer-container">

        {{-- IDENTITAS MASJID --}}
        <div class="footer-section footer-brand">

            <div class="footer-logo">
                <i class="fas fa-mosque"></i>
            </div>

            <div>
                <h5 class="footer-title">
                    {{ $pengaturan->nama_masjid ?? 'Sistem Informasi Masjid' }}
                </h5>

                <p class="footer-description">
                    {{ $pengaturan->deskripsi ?? 'Pusat informasi, ibadah, dan kegiatan masjid.' }}
                </p>
            </div>

        </div>


        {{-- INFORMASI MASJID --}}
        <div class="footer-section">

            <h6 class="footer-heading">
                Informasi Masjid
            </h6>

            @if($pengaturan && $pengaturan->alamat)

                <div class="footer-contact">
                    <i class="fas fa-map-marker-alt"></i>

                    <span>
                        {{ $pengaturan->alamat }}
                    </span>
                </div>

            @endif


            @if($pengaturan && $pengaturan->no_hp)

                <div class="footer-contact">
                    <i class="fas fa-phone"></i>

                    <span>
                        {{ $pengaturan->no_hp }}
                    </span>
                </div>

            @endif


            @if($pengaturan && $pengaturan->email)

                <div class="footer-contact">
                    <i class="fas fa-envelope"></i>

                    <span>
                        {{ $pengaturan->email }}
                    </span>
                </div>

            @endif


            @if(
                !$pengaturan ||
                (
                    !$pengaturan->alamat &&
                    !$pengaturan->no_hp &&
                    !$pengaturan->email
                )
            )

                <small class="text-muted">
                    Informasi kontak belum diatur.
                </small>

            @endif

        </div>


        {{-- TAUTAN CEPAT --}}
        <div class="footer-section">

            <h6 class="footer-heading">
                Tautan Cepat
            </h6>


            <a href="{{ route('dashboard') }}"
               class="footer-link">

                <i class="fas fa-chart-pie"></i>

                Dashboard

            </a>


            <a href="{{ route('pengumuman.index') }}"
               class="footer-link">

                <i class="fas fa-bullhorn"></i>

                Pengumuman

            </a>


            <a href="{{ route('jadwal.index') }}"
               class="footer-link">

                <i class="fas fa-clock"></i>

                Jadwal Sholat

            </a>


            <a href="{{ route('jadwal-imam.index') }}"
               class="footer-link">

                <i class="fas fa-microphone"></i>

                Jadwal Imam & Khotib

            </a>


            <a href="{{ route('inventaris.index') }}"
               class="footer-link">

                <i class="fas fa-boxes-stacked"></i>

                Inventaris

            </a>


            <a href="{{ route('donasi.index') }}"
               class="footer-link">

                <i class="fas fa-hand-holding-heart"></i>

                Donasi

            </a>

        </div>


        {{-- SISTEM --}}
        <div class="footer-section">

            <h6 class="footer-heading">
                Sistem Informasi
            </h6>


            <div class="footer-service">

                <i class="fas fa-check-circle"></i>

                Sistem aktif

            </div>


            <div class="footer-service">

                <i class="fas fa-users"></i>

                Melayani jamaah

            </div>


            <div class="footer-service">

                <i class="fas fa-heart"></i>

                Dengan amanah

            </div>

        </div>

    </div>


    {{-- FOOTER BOTTOM --}}
    <div class="footer-bottom">

        <div class="footer-masjid-name">

            <i class="fas fa-mosque"></i>

            <span>
                {{ $pengaturan->nama_masjid ?? 'Sistem Informasi Masjid' }}
            </span>

        </div>


        <div class="footer-copyright">

            © {{ date('Y') }}

            <span>
                SMKN 5 KABUPATEN TANGERANG.
            </span>

        </div>


        <div class="footer-user">

            <i class="fas fa-user-circle"></i>

            {{ Auth::user()->name }}

            <span class="footer-role">

                {{ Auth::user()->role === 'admin'
                    ? 'Administrator'
                    : 'Jamaah'
                }}

            </span>

        </div>

    </div>

</footer>


<style>

.main-footer {

    margin-top: 45px;

    background: #ffffff;

    border-top: 1px solid #e5e7eb;

    box-shadow: 0 -5px 25px rgba(0,0,0,.04);

}


.footer-container {

    max-width: 1400px;

    margin: auto;

    padding: 38px 35px;

    display: grid;

    grid-template-columns:
        1.6fr
        1.3fr
        1fr
        1fr;

    gap: 45px;

}


/* =========================
   LOGO
========================= */

.footer-brand {

    display: flex;

    align-items: flex-start;

    gap: 15px;

}


.footer-logo {

    width: 60px;

    height: 60px;

    flex-shrink: 0;

    border-radius: 16px;

    background: #f0fdf4;

    border: 1px solid #bbf7d0;

    display: flex;

    align-items: center;

    justify-content: center;

}


.footer-logo i {

    color: #16a34a;

    font-size: 25px;

}


/* =========================
   TITLE
========================= */

.footer-title {

    margin: 0;

    color: #166534;

    font-size: 17px;

    font-weight: 700;

}


.footer-description {

    margin-top: 7px;

    margin-bottom: 0;

    max-width: 330px;

    color: #64748b;

    font-size: 13px;

    line-height: 1.7;

}


/* =========================
   HEADING
========================= */

.footer-heading {

    color: #166534;

    font-size: 14px;

    font-weight: 700;

    margin-bottom: 18px;

}


/* =========================
   CONTACT
========================= */

.footer-contact {

    display: flex;

    align-items: flex-start;

    gap: 10px;

    margin-bottom: 11px;

    color: #64748b;

    font-size: 12px;

    line-height: 1.6;

}


.footer-contact i {

    width: 18px;

    margin-top: 2px;

    color: #16a34a;

    text-align: center;

}


/* =========================
   LINK
========================= */

.footer-link {

    display: flex;

    align-items: center;

    gap: 10px;

    margin-bottom: 11px;

    color: #64748b;

    text-decoration: none;

    font-size: 12px;

    transition: .2s;

}


.footer-link i {

    width: 18px;

    color: #16a34a;

    text-align: center;

}


.footer-link:hover {

    color: #15803d;

    transform: translateX(4px);

}


/* =========================
   SERVICE
========================= */

.footer-service {

    display: flex;

    align-items: center;

    gap: 10px;

    margin-bottom: 11px;

    color: #64748b;

    font-size: 12px;

}


.footer-service i {

    width: 18px;

    color: #16a34a;

}


/* =========================
   FOOTER BOTTOM
========================= */

.footer-bottom {

    border-top: 1px solid #f1f5f9;

    max-width: 1400px;

    margin: auto;

    padding: 18px 35px;

    display: flex;

    align-items: center;

    justify-content: space-between;

    gap: 20px;

    color: #64748b;

    font-size: 12px;

}


.footer-masjid-name {

    display: flex;

    align-items: center;

    gap: 8px;

    color: #166534;

    font-weight: 600;

}


.footer-masjid-name i {

    color: #16a34a;

    font-size: 18px;

}


.footer-copyright {

    text-align: center;

}


.footer-copyright span {

    color: #94a3b8;

}


.footer-user {

    display: flex;

    align-items: center;

    gap: 7px;

}


.footer-user > i {

    color: #16a34a;

    font-size: 16px;

}


.footer-role {

    padding: 5px 10px;

    border-radius: 20px;

    background: #f0fdf4;

    color: #15803d;

    font-size: 10px;

    font-weight: 700;

}


/* =========================
   RESPONSIVE
========================= */

@media(max-width:992px) {

    .footer-container {

        grid-template-columns: 1fr 1fr;

        gap: 30px;

    }

}


@media(max-width:576px) {

    .footer-container {

        grid-template-columns: 1fr;

        padding: 30px 20px;

        gap: 28px;

    }


    .footer-bottom {

        flex-direction: column;

        text-align: center;

        padding: 20px;

    }


    .footer-user {

        justify-content: center;

    }

}

</style>