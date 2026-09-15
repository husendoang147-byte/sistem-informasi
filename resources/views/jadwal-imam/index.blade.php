@extends('layouts.app')

@section('title', 'Jadwal Imam & Khotib')

@section('content')

<div class="container-fluid px-3 px-lg-4 py-2">

    {{-- =====================================================
        HEADER
    ====================================================== --}}
    <div class="page-header mb-4">

        <div>
            <h3 class="page-title mb-1">
                <i class="fas fa-mosque me-2"></i>
                Jadwal Imam & Khotib
            </h3>

            <p class="page-subtitle mb-0">
                Informasi jadwal imam, khotib, dan bilal masjid.
            </p>
        </div>

        @if(auth()->user()->role === 'admin')
            <a href="{{ route('jadwal-imam.create') }}" class="btn-add">
                <i class="fas fa-plus me-2"></i>
                Tambah Jadwal
            </a>
        @endif

    </div>


    {{-- =====================================================
        SUCCESS ALERT
    ====================================================== --}}
    @if(session('success'))

        <div class="alert-success-custom mb-4">
            <div class="alert-icon">
                <i class="fas fa-check"></i>
            </div>

            <div>
                <strong>Berhasil!</strong>
                <div>{{ session('success') }}</div>
            </div>
        </div>

    @endif


    {{-- =====================================================
        POSTER
    ====================================================== --}}
    <div class="jadwal-list">

        @forelse($jadwal as $item)

            <div class="jadwal-poster">

                {{-- =================================================
                    POSTER LEFT / DATE
                ================================================== --}}
                <div class="poster-date-section">

                    <div class="date-label">
                        JADWAL
                    </div>

                    <div class="date-day">
                        {{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('l') }}
                    </div>

                    <div class="date-number">
                        {{ \Carbon\Carbon::parse($item->tanggal)->format('d') }}
                    </div>

                    <div class="date-month">
                        {{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('F Y') }}
                    </div>

                    <div class="date-decoration">
                        <span></span>
                        <i class="fas fa-star-and-crescent"></i>
                        <span></span>
                    </div>

                    <div class="mosque-small">
                        <i class="fas fa-mosque"></i>
                    </div>

                </div>


                {{-- =================================================
                    POSTER CENTER
                ================================================== --}}
                <div class="poster-main">

                    {{-- HEADER --}}
                    <div class="poster-heading">

                        <div>
                            <div class="poster-mini-title">
                                JADWAL PETUGAS SHALAT
                            </div>

                            <h2>
                                IMAM <span>&</span> KHOTIB
                            </h2>

                            <p>
                                Pelaksanaan ibadah dan khutbah
                            </p>
                        </div>

                    </div>


                    {{-- PETUGAS --}}
                    <div class="officer-row">

                        {{-- IMAM --}}
                        <div class="officer-box">

                            <div class="officer-icon imam">
                                <i class="fas fa-user-tie"></i>
                            </div>

                            <div class="officer-info">

                                <div class="officer-label">
                                    IMAM
                                </div>

                                <div class="officer-name">
                                    {{ $item->imam ?: '-' }}
                                </div>

                            </div>

                        </div>


                        {{-- KHOTIB --}}
                        <div class="officer-box">

                            <div class="officer-icon khotib">
                                <i class="fas fa-microphone"></i>
                            </div>

                            <div class="officer-info">

                                <div class="officer-label">
                                    KHOTIB
                                </div>

                                <div class="officer-name">
                                    {{ $item->khotib ?: '-' }}
                                </div>

                            </div>

                        </div>


                        {{-- BILAL --}}
                        <div class="officer-box">

                            <div class="officer-icon bilal">
                                <i class="fas fa-volume-high"></i>
                            </div>

                            <div class="officer-info">

                                <div class="officer-label">
                                    BILAL
                                </div>

                                <div class="officer-name">
                                    {{ $item->bilal ?: '-' }}
                                </div>

                            </div>

                        </div>

                    </div>


                    {{-- KETERANGAN --}}
                    @if($item->keterangan)

                        <div class="poster-note">

                            <div class="note-icon">
                                <i class="fas fa-circle-info"></i>
                            </div>

                            <div>
                                <div class="note-title">
                                    Keterangan
                                </div>

                                <div class="note-text">
                                    {{ $item->keterangan }}
                                </div>
                            </div>

                        </div>

                    @endif


                    {{-- FOOTER --}}
                    <div class="poster-footer">

                        <span>
                            <i class="fas fa-calendar-check me-1"></i>
                            Jadwal Masjid
                        </span>

                        <span>
                            ID #{{ $item->id_jadwal_imam }}
                        </span>

                    </div>

                </div>


                {{-- =================================================
                    ACTION
                ================================================== --}}
                <div class="poster-actions">

                    {{-- DETAIL --}}
                    <a
                        href="{{ route('jadwal-imam.show', $item->id_jadwal_imam) }}"
                        class="poster-action detail"
                        title="Lihat detail"
                    >
                        <i class="fas fa-eye"></i>
                        <span>Detail</span>
                    </a>


                    @if(auth()->user()->role === 'admin')

                        {{-- EDIT --}}
                        <a
                            href="{{ route('jadwal-imam.edit', $item->id_jadwal_imam) }}"
                            class="poster-action edit"
                            title="Edit jadwal"
                        >
                            <i class="fas fa-pen-to-square"></i>
                            <span>Edit</span>
                        </a>


                        {{-- DELETE --}}
                        <button
                            type="button"
                            class="poster-action delete"
                            data-bs-toggle="modal"
                            data-bs-target="#deleteModal{{ $item->id_jadwal_imam }}"
                            title="Hapus jadwal"
                        >
                            <i class="fas fa-trash"></i>
                            <span>Hapus</span>
                        </button>

                    @endif

                </div>

            </div>


            {{-- =====================================================
                DELETE MODAL
            ====================================================== --}}
            @if(auth()->user()->role === 'admin')

                <div
                    class="modal fade"
                    id="deleteModal{{ $item->id_jadwal_imam }}"
                    tabindex="-1"
                    aria-hidden="true"
                >

                    <div class="modal-dialog modal-dialog-centered">

                        <div class="modal-content delete-modal">

                            <div class="modal-body text-center p-4">

                                <div class="delete-modal-icon">
                                    <i class="fas fa-trash"></i>
                                </div>

                                <h5 class="delete-title">
                                    Hapus Jadwal?
                                </h5>

                                <p class="delete-text">
                                    Apakah kamu yakin ingin menghapus
                                    jadwal imam dan khotib pada
                                    <strong>
                                        {{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y') }}
                                    </strong>?
                                </p>

                                <div class="delete-info">

                                    <div>
                                        <small>IMAM</small>
                                        <strong>
                                            {{ $item->imam ?: '-' }}
                                        </strong>
                                    </div>

                                    <div>
                                        <small>KHOTIB</small>
                                        <strong>
                                            {{ $item->khotib ?: '-' }}
                                        </strong>
                                    </div>

                                </div>


                                <div class="d-flex gap-2 mt-4">

                                    <button
                                        type="button"
                                        class="btn btn-light w-50 rounded-3"
                                        data-bs-dismiss="modal"
                                    >
                                        Batal
                                    </button>

                                    <form
                                        action="{{ route('jadwal-imam.destroy', $item->id_jadwal_imam) }}"
                                        method="POST"
                                        class="w-50"
                                    >

                                        @csrf
                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="btn btn-danger w-100 rounded-3"
                                        >
                                            <i class="fas fa-trash me-1"></i>
                                            Hapus
                                        </button>

                                    </form>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            @endif


        @empty

            {{-- =================================================
                EMPTY STATE
            ================================================== --}}
            <div class="empty-state">

                <div class="empty-icon">
                    <i class="fas fa-calendar-xmark"></i>
                </div>

                <h4>
                    Belum Ada Jadwal
                </h4>

                <p>
                    Belum ada jadwal imam, khotib, dan bilal
                    yang tersedia.
                </p>

                @if(auth()->user()->role === 'admin')

                    <a
                        href="{{ route('jadwal-imam.create') }}"
                        class="btn-add"
                    >
                        <i class="fas fa-plus me-2"></i>
                        Tambah Jadwal
                    </a>

                @endif

            </div>

        @endforelse

    </div>

</div>


<style>

/* =====================================================
   PAGE
===================================================== */

.page-header {

    display: flex;
    justify-content: space-between;
    align-items: center;

    gap: 20px;

}

.page-title {

    font-size: 26px;
    font-weight: 800;
    color: #12352a;

}

.page-title i {

    color: #16834d;

}

.page-subtitle {

    color: #64748b;
    font-size: 14px;

}


.btn-add {

    display: inline-flex;
    align-items: center;
    justify-content: center;

    padding: 11px 18px;

    border-radius: 10px;

    background: linear-gradient(
        135deg,
        #087f47,
        #19a85b
    );

    color: white;

    text-decoration: none;

    font-size: 13px;
    font-weight: 700;

    border: none;

    box-shadow:
        0 5px 15px rgba(22, 163, 74, .20);

    transition: .2s ease;

}

.btn-add:hover {

    color: white;

    transform: translateY(-2px);

    box-shadow:
        0 8px 20px rgba(22, 163, 74, .28);

}


/* =====================================================
   ALERT
===================================================== */

.alert-success-custom {

    display: flex;
    align-items: center;

    gap: 13px;

    padding: 14px 18px;

    border-radius: 12px;

    background: #ecfdf3;

    border: 1px solid #bbf7d0;

    color: #166534;

    font-size: 13px;

}

.alert-icon {

    width: 34px;
    height: 34px;

    border-radius: 10px;

    background: #16a34a;

    color: white;

    display: flex;
    align-items: center;
    justify-content: center;

}


/* =====================================================
   LIST
===================================================== */

.jadwal-list {

    display: flex;
    flex-direction: column;

    gap: 20px;

}


/* =====================================================
   POSTER
===================================================== */

.jadwal-poster {

    position: relative;

    display: flex;

    min-height: 270px;

    overflow: hidden;

    border-radius: 20px;

    background: white;

    border: 1px solid #e2e8f0;

    box-shadow:
        0 8px 25px rgba(15, 23, 42, .07);

    transition: .25s ease;

}

.jadwal-poster:hover {

    transform: translateY(-3px);

    box-shadow:
        0 15px 35px rgba(15, 23, 42, .11);

}


/* =====================================================
   DATE SECTION
===================================================== */

.poster-date-section {

    position: relative;

    width: 245px;

    flex-shrink: 0;

    padding: 30px 25px;

    display: flex;

    flex-direction: column;

    align-items: center;

    justify-content: center;

    text-align: center;

    overflow: hidden;

    background:
        linear-gradient(
            145deg,
            #075e35,
            #0b7d45 55%,
            #18a957
        );

    color: white;

}

.poster-date-section::before {

    content: "";

    position: absolute;

    width: 190px;
    height: 190px;

    border-radius: 50%;

    top: -100px;
    left: -90px;

    background: rgba(255,255,255,.07);

}

.poster-date-section::after {

    content: "";

    position: absolute;

    width: 160px;
    height: 160px;

    border-radius: 50%;

    bottom: -90px;
    right: -80px;

    background: rgba(255,255,255,.07);

}


.date-label {

    position: relative;
    z-index: 2;

    font-size: 10px;

    font-weight: 800;

    letter-spacing: 3px;

    opacity: .75;

}


.date-day {

    position: relative;
    z-index: 2;

    margin-top: 10px;

    font-size: 13px;

    font-weight: 700;

    text-transform: uppercase;

}


.date-number {

    position: relative;
    z-index: 2;

    font-size: 70px;

    line-height: .95;

    font-weight: 900;

    margin: 4px 0;

}


.date-month {

    position: relative;
    z-index: 2;

    font-size: 14px;

    font-weight: 700;

}


.date-decoration {

    position: relative;
    z-index: 2;

    width: 100%;

    display: flex;

    align-items: center;

    gap: 9px;

    margin: 18px 0 13px;

    opacity: .8;

}

.date-decoration span {

    height: 1px;

    flex: 1;

    background: rgba(255,255,255,.45);

}

.date-decoration i {

    font-size: 13px;

}


.mosque-small {

    position: relative;
    z-index: 2;

    font-size: 24px;

    opacity: .85;

}


/* =====================================================
   MAIN
===================================================== */

.poster-main {

    flex: 1;

    min-width: 0;

    padding: 27px 30px 22px;

    display: flex;

    flex-direction: column;

}


.poster-heading {

    border-bottom: 1px solid #e5e7eb;

    padding-bottom: 16px;

}


.poster-mini-title {

    color: #169154;

    font-size: 10px;

    font-weight: 800;

    letter-spacing: 2px;

    margin-bottom: 3px;

}


.poster-heading h2 {

    color: #102f25;

    font-size: 28px;

    font-weight: 900;

    margin: 0;

    letter-spacing: .5px;

}


.poster-heading h2 span {

    color: #18a957;

}


.poster-heading p {

    color: #64748b;

    font-size: 12px;

    margin: 4px 0 0;

}


/* =====================================================
   OFFICER
===================================================== */

.officer-row {

    display: grid;

    grid-template-columns:
        repeat(3, minmax(0, 1fr));

    gap: 12px;

    margin-top: 18px;

}


.officer-box {

    display: flex;

    align-items: center;

    gap: 12px;

    padding: 13px;

    border-radius: 13px;

    background: #f8fafc;

    border: 1px solid #e5e7eb;

    min-width: 0;

}


.officer-icon {

    width: 44px;
    height: 44px;

    flex-shrink: 0;

    border-radius: 12px;

    display: flex;

    align-items: center;
    justify-content: center;

    font-size: 17px;

}


.officer-icon.imam {

    background: #dcfce7;
    color: #15803d;

}


.officer-icon.khotib {

    background: #dbeafe;
    color: #2563eb;

}


.officer-icon.bilal {

    background: #fef3c7;
    color: #d97706;

}


.officer-info {

    min-width: 0;

}


.officer-label {

    color: #64748b;

    font-size: 9px;

    font-weight: 800;

    letter-spacing: 1.5px;

    margin-bottom: 3px;

}


.officer-name {

    color: #172a24;

    font-size: 14px;

    font-weight: 800;

    white-space: nowrap;

    overflow: hidden;

    text-overflow: ellipsis;

}


/* =====================================================
   NOTE
===================================================== */

.poster-note {

    display: flex;

    align-items: flex-start;

    gap: 10px;

    margin-top: 14px;

    padding: 10px 13px;

    border-radius: 11px;

    background: #f0fdf4;

    border-left: 3px solid #16a34a;

}


.note-icon {

    color: #16a34a;

    font-size: 14px;

    margin-top: 2px;

}


.note-title {

    color: #166534;

    font-size: 10px;

    font-weight: 800;

    text-transform: uppercase;

    letter-spacing: .7px;

}


.note-text {

    color: #64748b;

    font-size: 11px;

    line-height: 1.4;

    margin-top: 2px;

}


/* =====================================================
   FOOTER
===================================================== */

.poster-footer {

    display: flex;

    align-items: center;

    justify-content: space-between;

    margin-top: auto;

    padding-top: 14px;

    color: #94a3b8;

    font-size: 10px;

    border-top: 1px dashed #cbd5e1;

}


.poster-footer i {

    color: #169154;

}


/* =====================================================
   ACTION
===================================================== */

.poster-actions {

    width: 105px;

    flex-shrink: 0;

    display: flex;

    flex-direction: column;

    justify-content: center;

    gap: 8px;

    padding: 20px 15px;

    background: #f8fafc;

    border-left: 1px solid #e5e7eb;

}


.poster-action {

    width: 100%;

    height: 40px;

    border: none;

    border-radius: 10px;

    display: flex;

    align-items: center;
    justify-content: center;

    gap: 6px;

    text-decoration: none;

    font-size: 11px;

    font-weight: 700;

    cursor: pointer;

    transition: .2s ease;

}


.poster-action:hover {

    transform: translateX(-2px);

}


.poster-action.detail {

    background: #e0f2fe;
    color: #0284c7;

}


.poster-action.detail:hover {

    background: #bae6fd;
    color: #0369a1;

}


.poster-action.edit {

    background: #fef3c7;
    color: #d97706;

}


.poster-action.edit:hover {

    background: #fde68a;
    color: #b45309;

}


.poster-action.delete {

    background: #fee2e2;
    color: #dc2626;

}


.poster-action.delete:hover {

    background: #fecaca;
    color: #b91c1c;

}


/* =====================================================
   EMPTY
===================================================== */

.empty-state {

    min-height: 360px;

    display: flex;

    flex-direction: column;

    align-items: center;
    justify-content: center;

    text-align: center;

    background: white;

    border: 1px solid #e5e7eb;

    border-radius: 20px;

    box-shadow:
        0 8px 25px rgba(15,23,42,.06);

}


.empty-icon {

    width: 75px;
    height: 75px;

    border-radius: 22px;

    background: #ecfdf5;

    color: #16a34a;

    display: flex;

    align-items: center;
    justify-content: center;

    font-size: 28px;

}


.empty-state h4 {

    color: #172a24;

    font-weight: 800;

    margin-top: 18px;

    margin-bottom: 5px;

}


.empty-state p {

    color: #64748b;

    font-size: 13px;

    margin-bottom: 20px;

}


/* =====================================================
   DELETE MODAL
===================================================== */

.delete-modal {

    border: none;

    border-radius: 20px;

    overflow: hidden;

}


.delete-modal-icon {

    width: 65px;
    height: 65px;

    margin: 0 auto 15px;

    border-radius: 18px;

    background: #fee2e2;

    color: #dc2626;

    display: flex;

    align-items: center;
    justify-content: center;

    font-size: 25px;

}


.delete-title {

    color: #172a24;

    font-weight: 800;

    margin-bottom: 7px;

}


.delete-text {

    color: #64748b;

    font-size: 13px;

    line-height: 1.6;

}


.delete-info {

    display: grid;

    grid-template-columns: 1fr 1fr;

    gap: 10px;

    margin-top: 18px;

}


.delete-info > div {

    padding: 12px;

    border-radius: 11px;

    background: #f8fafc;

    border: 1px solid #e5e7eb;

}


.delete-info small {

    display: block;

    color: #94a3b8;

    font-size: 9px;

    font-weight: 800;

    letter-spacing: 1px;

    margin-bottom: 3px;

}


.delete-info strong {

    display: block;

    color: #172a24;

    font-size: 12px;

}


/* =====================================================
   RESPONSIVE
===================================================== */

@media(max-width: 992px) {

    .jadwal-poster {

        flex-direction: column;

    }

    .poster-date-section {

        width: 100%;

        min-height: 190px;

        padding: 20px;

    }

    .date-number {

        font-size: 55px;

    }

    .date-decoration {

        max-width: 300px;

        margin: 12px auto;

    }

    .officer-row {

        grid-template-columns: 1fr;

    }

    .poster-actions {

        width: 100%;

        flex-direction: row;

        border-left: none;

        border-top: 1px solid #e5e7eb;

        padding: 12px 15px;

    }

    .poster-action {

        flex: 1;

    }

}


@media(max-width: 576px) {

    .page-header {

        align-items: flex-start;

        flex-direction: column;

    }

    .btn-add {

        width: 100%;

    }

    .poster-main {

        padding: 20px 18px;

    }

    .poster-heading h2 {

        font-size: 23px;

    }

    .poster-actions {

        flex-wrap: wrap;

    }

    .poster-action {

        min-width: 0;

    }

    .poster-footer {

        flex-direction: column;

        align-items: flex-start;

        gap: 5px;

    }

}

</style>

@endsection