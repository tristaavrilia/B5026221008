@extends('master')
@section('title', 'Data Mobil')
@section('konten')

<div class="container">
    <h1 class="d-flex justify-content-center">Tambah Data Mobil</h1>
    <br/>

    <div class="d-flex justify-content-end">
        <a href="/mobil"><input type="submit" value="Kembali" class="btn btn-success"></a>
    </div>

    <br/>

	<form action="/mobil/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="p-5 rounded-lg bg-primary text-white">
            <div class="form-group row mt-3">
                <label class="font-weight-bold col-sm-2 col-form-label">Merk Mobil</label>
                <div class="col-sm-10">
                    <input type="text" required="required" name="merkmobil" placeholder="Masukkan Merk" class="form-control">
                </div>
            </div>

            <div class="form-group row mt-3">
                <label class="font-weight-bold col-sm-2 col-form-label">Stock Mobil</label>
                <div class="col-sm-10">
                    <input type="number" required="required" name="stockmobil" placeholder="Masukkan Stock" class="form-control">
                </div>
            </div>

            <div class="form-group row mt-3">
                <label class="font-weight-bold col-sm-2 col-form-label">Tersedia</label>
                <div class="col-sm-10">
                    <select class="custom-select" required="required" name="tersedia">
                        <option selected>Pilih Opsi</option>
                        <option value="V">Ada</option>
                        <option value="X">Tidak Ada</option>
                    </select>
                </div>
            </div>

            <br/>
            <div class="d-flex justify-content-center">
                <input type="submit" value="Tambah Mobil" class="btn btn-outline-warning">
            </div>
        </div>
	</form>
</div>
@endsection
