@extends('master')
@section('title', 'Data Pegawai')
@section('konten')

<div class="container">
    <h1 class="d-flex justify-content-center">Tambah Data Pegawai</h1>
    <br/>

    <div class="d-flex justify-content-end">
        <a href="/pegawai"><input type="submit" value="Kembali" class="btn btn-success"></a>
    </div>

    <br/>

	<form action="/pegawai/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="p-5 rounded-lg bg-primary text-white">
            <div class="form-group row mt-3">
                <label class="font-weight-bold col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" required="required" name="nama" placeholder="Masukkan Nama" class="form-control">
                </div>
            </div>

            <div class="form-group row mt-3">
                <label class="font-weight-bold col-sm-2 col-form-label">Jabatan</label>
                <div class="col-sm-10">
                    <input type="text" required="required" name="jabatan" placeholder="Masukkan Jabatan" class="form-control">
                </div>
            </div>

            <div class="form-group row mt-3">
                <label class="font-weight-bold col-sm-2 col-form-label">Umur</label>
                <div class="col-sm-10">
                    <input type="number" required="required" name="umur" placeholder="Masukkan Umur" class="form-control">
                </div>
            </div>

            <div class="form-group row mt-3">
                <label class="font-weight-bold col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <textarea required="required" name="alamat" class="form-control" placeholder="Masukkan Alamat"></textarea>
                </div>
            </div>

            <br/>
            <div class="d-flex justify-content-center">
                <input type="submit" value="Tambah Data" class="btn btn-outline-warning">
            </div>
        </div>
	</form>
</div>
@endsection
