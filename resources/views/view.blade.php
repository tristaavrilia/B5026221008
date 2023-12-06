@extends('master')
@section('title', 'Data Pegawai')
@section('konten')

<div class="container">
	<h1 class="d-flex justify-content-center">Data Pegawai</h1>
	<br/>

    <div class="p-5 rounded-lg bg-success text-white">
        <div class="row">
            <div class="col mt-4 m-4 bg-light">
            </div>

            <div class="col ml-2">
                @foreach($pegawai as $p)
                <form action="/pegawai/update" method="post">
                    {{ csrf_field() }}

                    <input type="hidden" name="id" value="{{ $p->pegawai_id }}">

                    {{ csrf_field() }}

                    <div class="form-group row mt-4">
                        <p class="font-weight-bold col-sm-2">Nama</p>
                        <div class="col-sm-10">
                            {{ $p->pegawai_nama }}
                        </div>
                    </div>

                    <div class="form-group row mt-4">
                        <p class="font-weight-bold col-sm-2">Jabatan</p>
                        <div class="col-sm-10">
                            {{ $p->pegawai_jabatan }}
                        </div>
                    </div>

                    <div class="form-group row mt-4">
                        <p class="font-weight-bold col-sm-2">Umur</p>
                        <div class="col-sm-10">
                            {{ $p->pegawai_umur }}
                        </div>
                    </div>

                    <div class="form-group row mt-4">
                        <p class="font-weight-bold col-sm-2">Alamat</p>
                        <div class="col-sm-10">
                            {{ $p->pegawai_alamat }}
                        </div>
                    </div>

                </form>
                @endforeach

                <div class="d-flex justify-content-center mt-3 p-4">
                    <a href="/pegawai"><input type="submit" value="OK" class="btn btn-outline-warning"></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
