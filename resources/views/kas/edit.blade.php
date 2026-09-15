@extends('layouts.app')

@section('title','Edit Kas Masjid')

@section('content')

<div class="card shadow-sm border-0">

    <div class="card-header bg-warning">

        <h4 class="mb-0">

            <i class="fas fa-edit me-2"></i>

            Edit Transaksi Kas

        </h4>

    </div>

    <div class="card-body">

        <form action="{{ route('kas-masjid.update',$kas->id) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="row">

                <div class="col-md-6 mb-3">

                    <label>Tanggal</label>

                    <input
                        type="date"
                        name="tanggal"
                        value="{{ old('tanggal',$kas->tanggal) }}"
                        class="form-control">

                </div>

                <div class="col-md-6 mb-3">

                    <label>Jenis</label>

                    <select
                        name="jenis"
                        class="form-select">

                        <option value="Pemasukan"
                            {{ $kas->jenis=='Pemasukan'?'selected':'' }}>
                            Pemasukan
                        </option>

                        <option value="Pengeluaran"
                            {{ $kas->jenis=='Pengeluaran'?'selected':'' }}>
                            Pengeluaran
                        </option>

                    </select>

                </div>

            </div>

            <div class="mb-3">

                <label>Keterangan</label>

                <input
                    type="text"
                    name="keterangan"
                    value="{{ old('keterangan',$kas->keterangan) }}"
                    class="form-control">

            </div>

            <div class="mb-4">

                <label>Nominal</label>

                <input
                    type="number"
                    name="nominal"
                    value="{{ old('nominal',$kas->nominal) }}"
                    class="form-control">

            </div>

            <div class="d-flex justify-content-between">

                <a href="{{ route('kas-masjid.index') }}"
                   class="btn btn-secondary">

                    <i class="fas fa-arrow-left"></i>

                    Kembali

                </a>

                <button class="btn btn-warning">

                    <i class="fas fa-save"></i>

                    Update

                </button>

            </div>

        </form>

    </div>

</div>

@endsection