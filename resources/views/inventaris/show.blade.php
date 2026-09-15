@extends('layouts.app')

@section('title', 'Detail Inventaris')

@section('content')

<div class="container-fluid">

    {{-- HEADER --}}
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h3 class="fw-bold mb-1">
                <i class="fas fa-box-open text-success me-2"></i>
                Detail Inventaris
            </h3>

            <p class="text-muted mb-0">
                Informasi lengkap barang inventaris masjid
            </p>
        </div>

        <a href="{{ route('inventaris.index') }}"
           class="btn btn-outline-secondary rounded-3">

            <i class="fas fa-arrow-left me-2"></i>
            Kembali

        </a>

    </div>


    <div class="row justify-content-center">

        <div class="col-lg-9">

            <div class="card border-0 shadow-sm rounded-4 overflow-hidden">

                {{-- HEADER CARD --}}
                <div class="card-header bg-success text-white border-0 p-4">

                    <div class="d-flex align-items-center">

                        <div class="detail-header-icon me-3">

                            <i class="fas fa-box"></i>

                        </div>

                        <div>

                            <h5 class="fw-bold mb-1">
                                {{ $inventaris->nama_barang }}
                            </h5>

                            <small>
                                Detail barang inventaris
                            </small>

                        </div>

                    </div>

                </div>


                {{-- BODY --}}
                <div class="card-body p-4">

                    <div class="row g-4">

                        {{-- FOTO --}}
                        <div class="col-md-5">

                            <div class="detail-photo-wrapper">

                                @if($inventaris->foto)

                                    @php

                                        if (str_starts_with($inventaris->foto, 'inventaris/')) {

                                            $fotoUrl = asset('storage/' . $inventaris->foto);

                                        } else {

                                            $fotoUrl = asset('uploads/inventaris/' . $inventaris->foto);

                                        }

                                    @endphp

                                    <img
                                        src="{{ $fotoUrl }}"
                                        class="detail-photo"
                                        alt="{{ $inventaris->nama_barang }}"
                                        onerror="this.style.display='none'; document.getElementById('foto-empty').style.display='flex';"
                                    >

                                    <div
                                        id="foto-empty"
                                        class="detail-photo-empty"
                                        style="display:none;"
                                    >

                                        <i class="fas fa-image"></i>

                                        <span>Foto tidak ditemukan</span>

                                    </div>

                                @else

                                    <div class="detail-photo-empty">

                                        <i class="fas fa-image"></i>

                                        <span>Tidak ada foto</span>

                                    </div>

                                @endif

                            </div>

                        </div>


                        {{-- INFORMASI --}}
                        <div class="col-md-7">

                            <div class="detail-info">

                                {{-- NAMA --}}
                                <div class="info-item">

                                    <div class="info-icon">

                                        <i class="fas fa-box"></i>

                                    </div>

                                    <div>

                                        <small class="text-muted">
                                            Nama Barang
                                        </small>

                                        <div class="fw-semibold">
                                            {{ $inventaris->nama_barang }}
                                        </div>

                                    </div>

                                </div>


                                {{-- JUMLAH --}}
                                <div class="info-item">

                                    <div class="info-icon">

                                        <i class="fas fa-layer-group"></i>

                                    </div>

                                    <div>

                                        <small class="text-muted">
                                            Jumlah Barang
                                        </small>

                                        <div>

                                            <span class="inventory-badge">

                                                <i class="fas fa-box me-1"></i>

                                                {{ $inventaris->jumlah_barang }}

                                            </span>

                                        </div>

                                    </div>

                                </div>


                                {{-- KETERANGAN --}}
                                <div class="info-item">

                                    <div class="info-icon">

                                        <i class="fas fa-align-left"></i>

                                    </div>

                                    <div>

                                        <small class="text-muted">
                                            Keterangan
                                        </small>

                                        <div class="fw-semibold">

                                            {{ $inventaris->keterangan ?: '-' }}

                                        </div>

                                    </div>

                                </div>


                                {{-- ID --}}
                                <div class="info-item">

                                    <div class="info-icon">

                                        <i class="fas fa-hashtag"></i>

                                    </div>

                                    <div>

                                        <small class="text-muted">
                                            ID Inventaris
                                        </small>

                                        <div class="fw-semibold">
                                            #{{ $inventaris->id_inventaris }}
                                        </div>

                                    </div>

                                </div>

                            </div>


                            {{-- ACTION --}}
                            @if(auth()->user()->role === 'admin')

                                <div class="d-flex gap-2 mt-4">

                                    <a
                                        href="{{ route('inventaris.edit', $inventaris->id_inventaris) }}"
                                        class="btn btn-warning rounded-3 px-4"
                                    >

                                        <i class="fas fa-edit me-2"></i>
                                        Edit Barang

                                    </a>

                                </div>

                            @endif

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>


<style>

/* HEADER ICON */

.detail-header-icon {

    width: 45px;
    height: 45px;

    border-radius: 12px;

    background: rgba(255,255,255,.15);

    display: flex;
    align-items: center;
    justify-content: center;

    font-size: 18px;

}


/* FOTO */

.detail-photo-wrapper {

    width: 100%;
    min-height: 320px;

    border-radius: 18px;

    overflow: hidden;

    background: #f8fafc;

    border: 1px solid #e5e7eb;

}

.detail-photo {

    width: 100%;
    height: 320px;

    object-fit: cover;

    display: block;

}


.detail-photo-empty {

    width: 100%;
    height: 320px;

    display: flex;

    flex-direction: column;

    align-items: center;
    justify-content: center;

    gap: 10px;

    color: #94a3b8;

    background: #f8fafc;

}

.detail-photo-empty i {

    font-size: 45px;

}


/* INFORMASI */

.detail-info {

    display: flex;

    flex-direction: column;

    gap: 14px;

}


.info-item {

    display: flex;

    align-items: center;

    gap: 14px;

    padding: 15px;

    border-radius: 14px;

    background: #f8fafc;

    border: 1px solid #f1f5f9;

}


.info-icon {

    width: 40px;
    height: 40px;

    flex-shrink: 0;

    border-radius: 11px;

    background: #f0fdf4;

    color: #16a34a;

    display: flex;

    align-items: center;

    justify-content: center;

}


/* JUMLAH */

.inventory-badge {

    display: inline-flex;

    align-items: center;

    padding: 6px 11px;

    border-radius: 20px;

    background: #f0fdf4;

    color: #15803d;

    font-size: 12px;

    font-weight: 700;

}


@media(max-width:768px) {

    .detail-photo-wrapper {

        min-height: 250px;

    }

    .detail-photo {

        height: 250px;

    }

    .detail-photo-empty {

        height: 250px;

    }

}

</style>

@endsection