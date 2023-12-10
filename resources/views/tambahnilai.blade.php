@extends('master')
@section('title', 'Nilai Kuliah')
@section('konten')

<div class="container">
    <h1 class="d-flex justify-content-center">Tambah Nilai Kuliah</h1>
    <br/>

    <div class="d-flex justify-content-end">
        <a href="/nilai"><input type="submit" value="Kembali" class="btn btn-success"></a>
    </div>

    <br/>

	<form action="/nilai/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="p-5 rounded-lg bg-primary text-white">
            <div class="form-group row mt-3">
                <label class="font-weight-bold col-sm-2 col-form-label">NRP</label>
                <div class="col-sm-10">
                    <input type="number" required="required" name="nrp" placeholder="Masukkan NRP" class="form-control">
                </div>
            </div>

            <div class="form-group row mt-3">
                <label class="font-weight-bold col-sm-2 col-form-label">Nilai Angka</label>
                <div class="col-sm-10">
                    <input type="number" required="required" name="nilaiangka" placeholder="Masukkan Nilai Angka" class="form-control">
                </div>
            </div>

            <div class="form-group row mt-3">
                <label class="font-weight-bold col-sm-2 col-form-label">SKS</label>
                <div class="col-sm-10">
                    <input type="number" required="required" name="sks" placeholder="Masukkan SKS" class="form-control">
                </div>
            </div>

            <br/>
            <div class="d-flex justify-content-center">
                <input type="submit" value="Tambah Nilai" class="btn btn-outline-warning">
            </div>
        </div>
	</form>
</div>
@endsection
