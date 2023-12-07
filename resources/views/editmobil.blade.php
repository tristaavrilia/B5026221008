@extends('master')
@section('title', 'Data Mobil')
@section('konten')

<div class="container">
    <h1 class="d-flex justify-content-center">Edit Mobil</h1>
    <br/>

    <div class="d-flex justify-content-end">
        <a href="/mobil"><input type="submit" value="Kembali" class="btn btn-success"></a>
    </div>

	<br/>

	@foreach($mobil as $m)
	<form action="/mobil/update" method="post">
		{{ csrf_field() }}

        <input type="hidden" name="kodemobil" value="{{ $m->kodemobil }}">
        <div class="p-5 rounded-lg bg-warning text-white">
            <div class="form-group row mt-3">
                <label class="font-weight-bold col-sm-2 col-form-label">Merk Mobil</label>
                <div class="col-sm-10">
                    <input type="text" required="required" name="merkmobil" value="{{ $m->merkmobil }}" class="form-control">
                </div>
            </div>

            <div class="form-group row mt-3">
                <label class="font-weight-bold col-sm-2 col-form-label">Stock Mobil</label>
                <div class="col-sm-10">
                    <input type="number" required="required" name="stockmobil" value="{{ $m->stockmobil }}" class="form-control">
                </div>
            </div>

            <div class="form-group row mt-3">
                <label class="font-weight-bold col-sm-2 col-form-label">Tersedia</label>
                <div class="col-sm-10">
                    <select name="tersedia" class="custom-select">
                        <option value="V" <?php echo ($m->tersedia == 'V') ? 'selected' : ''; ?>>Ada</option>
                        <option value="X" <?php echo ($m->tersedia == 'X') ? 'selected' : ''; ?>>Tidak Ada</option>
                    </select>
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
