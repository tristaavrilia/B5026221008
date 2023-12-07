@extends('master')
@section('title', 'Data Mobil')
@section('konten')

	<h2>Data Mobil</h2>

	<a href="/mobil/tambah" class="btn btn-primary"> + Tambah Mobil Baru</a>
    <br/>
	<br/>

	<p>Cari Data Mobil Berdasarkan Merk :</p>
	<form action="/mobil/cari" method="GET">
		<input class="form-control" type="text" name="cari" placeholder="Cari Mobil .."
		value="{{ old("cari", isset($cari) ? $cari : '') }}">
		<input class="btn btn-primary mt-2" type="submit" value="CARI">
	</form>
	<br/>

	<table class="table table-striped table-hover">
		<tr class="text-center">
			{{-- <th>Kode Mobil</th> --}}
			<th>Merk Mobil</th>
			<th>Stock Mobil</th>
			<th>Tersedia</th>
			<th>Opsi</th>
		</tr>
		@foreach($mobil as $m)
		<tr class="text-center">
			{{-- <td>{{ $m->kodemobil }}</td> --}}
			<td class="text-left">{{ $m->merkmobil }}</td>
			<td>{{ $m->stockmobil }}</td>
			<td>{{ $m->tersedia }}</td>
			<td>
				<a href="/mobil/view/{{ $m->kodemobil }}" class="btn btn-success">View</a>
				|
                <a href="/mobil/edit/{{ $m->kodemobil }}" class="btn btn-warning">Edit</a>
				|
				<a href="/mobil/hapus/{{ $m->kodemobil }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
@endsection
