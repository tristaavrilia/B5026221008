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

                    <div class="form-group row mt-4">
                        <label class="font-weight-bold col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input readonly type="text" name="nama" value="{{ $p->pegawai_nama }}" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row mt-4">
                        <label class="font-weight-bold col-sm-2 col-form-label">Jabatan</label>
                        <div class="col-sm-10">
                            <input readonly type="text" name="jabatan" value="{{ $p->pegawai_jabatan }}" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row mt-4">
                        <label class="font-weight-bold col-sm-2 col-form-label">Umur</label>
                        <div class="col-sm-10">
                            <input readonly type="number" name="umur" value="{{ $p->pegawai_umur }}" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row mt-4">
                        <label class="font-weight-bold col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <textarea readonly name="alamat" class="form-control">{{ $p->pegawai_alamat }}</textarea>
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
