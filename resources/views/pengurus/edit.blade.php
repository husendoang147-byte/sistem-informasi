@extends('layouts.app')

@section('title','Edit Pengurus')

@section('content')

<div class="row justify-content-center">

    <div class="col-lg-8">

        <div class="card shadow border-0">

            <div class="card-header bg-warning">

                <h4 class="mb-0">
                    <i class="fas fa-user-edit"></i>
                    Edit Pengurus
                </h4>

            </div>

            <div class="card-body">

                @if ($errors->any())

                    <div class="alert alert-danger">

                        <ul class="mb-0">

                            @foreach ($errors->all() as $error)

                                <li>{{ $error }}</li>

                            @endforeach

                        </ul>

                    </div>

                @endif

                <form action="{{ route('pengurus.update',$pengurus->id) }}"
                      method="POST"
                      enctype="multipart/form-data">

                    @csrf
                    @method('PUT')

                    <div class="row">

                        <div class="col-md-6 mb-3">

                            <label>Nama Lengkap</label>

                            <input type="text"
                                   name="nama"
                                   class="form-control"
                                   value="{{ old('nama',$pengurus->nama) }}"
                                   required>

                        </div>

                        <div class="col-md-6 mb-3">

                            <label>Jabatan</label>

                            <input type="text"
                                   name="jabatan"
                                   class="form-control"
                                   value="{{ old('jabatan',$pengurus->jabatan) }}"
                                   required>

                        </div>

                    </div>

                    <div class="mb-3">

                        <label>No HP</label>

                        <input type="text"
                               name="no_hp"
                               class="form-control"
                               value="{{ old('no_hp',$pengurus->no_hp) }}"
                               required>

                    </div>

                    <div class="mb-3">

                        <label>Alamat</label>

                        <textarea
                            name="alamat"
                            rows="4"
                            class="form-control">{{ old('alamat',$pengurus->alamat) }}</textarea>

                    </div>

                    <div class="mb-3">

                        <label>Foto Baru</label>

                        <input type="file"
                               name="foto"
                               class="form-control"
                               onchange="previewImage(event)">

                    </div>

                    <div class="mb-4">

                        @if($pengurus->foto)

                            <img
                                id="preview"
                                src="{{ asset('uploads/pengurus/'.$pengurus->foto) }}"
                                width="150"
                                class="rounded shadow">

                        @else

                            <img
                                id="preview"
                                width="150"
                                class="rounded shadow"
                                style="display:none">

                        @endif

                    </div>

                    <div class="text-end">

                        <a href="{{ route('pengurus.index') }}"
                           class="btn btn-secondary">

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

    </div>

</div>

@endsection

@section('js')

<script>

function previewImage(event){

    let reader=new FileReader();

    reader.onload=function(){

        let output=document.getElementById('preview');

        output.src=reader.result;

        output.style.display='block';

    }

    reader.readAsDataURL(event.target.files[0]);

}

</script>

@endsection