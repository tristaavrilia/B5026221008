@extends('master')
@section('title', 'Data Mobil')
@section('konten')

<div class="container">
	<h1 class="d-flex justify-content-center">View Mobil</h1>
	<br/>

    <div class="p-5 rounded-lg bg-success text-white">
        <div class="row">
            <div class="col mt-4 m-4 bg-light">
            </div>

            <div class="col ml-2">
                @foreach($mobil as $m)
                <form action="/mobil/view" method="post">
                    {{ csrf_field() }}

                    <input type="hidden" name="kodemobil" value="{{ $m->kodemobil }}">

                    {{ csrf_field() }}

                    <div class="form-group row mt-4">
                        <p class="font-weight-bold col-sm-4">Merk Mobil</p>
                        <div class="col-sm-8">
                            {{ $m->merkmobil }}
                        </div>
                    </div>

                    <div class="form-group row mt-4">
                        <p class="font-weight-bold col-sm-4">Stock Mobil</p>
                        <div class="col-sm-8">
                            {{ $m->stockmobil }}
                        </div>
                    </div>

                    <div class="form-group row mt-4">
                        <label class="font-weight-bold col-sm-4">Ketersediaan</label>
                        <div class="col-sm-8">
                            <?php
                            $tersediaText = ($m->tersedia == 'V') ? 'Ada' : 'Tidak Ada';
                            ?>
                            <p>{{ $tersediaText }}</p>
                        </div>
                    </div>

                </form>
                @endforeach

                <div class="d-flex justify-content-center mt-3 p-4">
                    <a href="/mobil"><input type="submit" value="OK" class="btn btn-outline-warning"></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
