@extends('master')
@section('title', 'Data Pegawai')
@section('konten')

<div class="container">
    <h1 class="d-flex justify-content-center">Edit Data Pegawai</h1>
    <br/>

    <div class="d-flex justify-content-end">
        <a href="/pegawai"><input type="submit" value="Kembali" class="btn btn-success"></a>
    </div>

	<br/>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}

        <input type="hidden" name="id" value="{{ $p->pegawai_id }}">
        <div class="p-5 rounded-lg bg-warning text-white">
            <div class="form-group row mt-3">
                <label class="font-weight-bold col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}" class="form-control">
                </div>
            </div>

            <div class="form-group row mt-3">
                <label class="font-weight-bold col-sm-2 col-form-label">Jabatan</label>
                <div class="col-sm-10">
                    <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}" class="form-control">
                </div>
            </div>

            <div class="form-group row mt-3">
                <label class="font-weight-bold col-sm-2 col-form-label">Umur</label>
                <div class="col-sm-10">
                    <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}" class="form-control">
                </div>
            </div>

            <div class="form-group row mt-3">
                <label class="font-weight-bold col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <textarea required="required" name="alamat" class="form-control">{{ $p->pegawai_alamat }}</textarea>
                </div>
            </div>

            <br/>
            <div class="d-flex justify-content-center">
                <input type="submit" value="Simpan Data" class="btn btn-outline-primary">
            </div>
        </div>
        </form>
</div>
@endforeach
@endsection
