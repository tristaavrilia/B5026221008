@extends('master')
@section('title', 'Nilai Kuliah')
@section('konten')

	<h2>Data Nilai Kuliah</h2>

	<a href="/nilai/tambah" class="btn btn-primary"> + Tambah Nilai Baru</a>
    <br/>
	<br/>

	<p>Cari Nilai Berdasarkan NRP :</p>
	<form action="/nilai/cari" method="GET">
		<input class="form-control" type="text" name="cari" placeholder="Masukkan NRP..."
		value="{{ old("cari", isset($cari) ? $cari : '') }}">
		<input class="btn btn-primary mt-2" type="submit" value="CARI">
	</form>
	<br/>

	<table class="table table-striped table-hover">
		<tr class="text-center">
			<th>ID</th>
			<th>NRP</th>
			<th>Nilai Angka</th>
			<th>SKS</th>
			<th>Nilai Huruf</th>
            <th>Bobot</th>
		</tr>
		@foreach($nilaikuliah as $n)
		<tr class="text-center">
			<td>{{ $n->ID }}</td>
			<td>{{ $n->NRP }}</td>
			<td>{{ $n->NilaiAngka }}</td>
			<td>{{ $n->SKS }}</td>

            @if(($n->NilaiAngka)<=40)
            <td>D</td>
            @elseif (($n->NilaiAngka)>=40 && ($n->NilaiAngka)<=60)
            <td>C</td>
            @elseif (($n->NilaiAngka)>=61 && ($n->NilaiAngka)<=80)
            <td>B</td>
            @else
            <td>A</td>
            @endif

            <td>
                {{$n->NilaiAngka * $n->SKS}}
            </td>
		</tr>
		@endforeach
	</table>
	{{-- {{$nilaikuliah->links()}} --}}
@endsection
