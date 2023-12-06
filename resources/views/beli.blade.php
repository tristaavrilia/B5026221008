@extends('master')
@section('title', 'Keranjang Belanja')
@section('konten')

<div class="container">
    <h1 class="d-flex justify-content-center">Beli</h1>
    <br/>

    <div class="d-flex justify-content-end">
        <a href="/keranjangbelanja"><input type="submit" value="Kembali" class="btn btn-success"></a>
    </div>

    <br/>

	<form action="/keranjangbelanja/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="p-5 rounded-lg bg-primary text-white">
            <div class="form-group row mt-3">
                <label class="font-weight-bold col-sm-2 col-form-label">Kode Pembelian</label>
                <div class="col-sm-10">
                    <input type="text" required="required" name="kodepembelian" placeholder="Masukkan Kode Pembelian" class="form-control">
                </div>
            </div>

            <div class="form-group row mt-3">
                <label class="font-weight-bold col-sm-2 col-form-label">Kode Barang</label>
                <div class="col-sm-10">
                    <input type="text" required="required" name="kodebarang" placeholder="Masukkan Kode Barang" class="form-control">
                </div>
            </div>

            <div class="form-group row mt-3">
                <label class="font-weight-bold col-sm-2 col-form-label">Jumlah Pembelian</label>
                <div class="col-sm-10">
                    <input type="number" required="required" name="jumlahpembelian" placeholder="Masukkan Jumlah Pembelian" class="form-control">
                </div>
            </div>

            <div class="form-group row mt-3">
                <label class="font-weight-bold col-sm-2 col-form-label">Harga Per Item</label>
                <div class="col-sm-10">
                    <input type="number" required="required" name="hargaperitem" placeholder="Masukkan Harga" class="form-control">
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
