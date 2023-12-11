<!-- resources/views/indexff.blade.php -->

@extends('master')
@section('title', 'Kode Soal FF')
@section('konten')

<script>
    document.addEventListener("DOMContentLoaded", function () {
        var currentCount = {{ $counter->Jumlah }};
        currentCount++;

        document.getElementById("countDisplay").innerHTML = "Anda telah membuka URL ini sebanyak " + currentCount + " kali";

        fetch("/kodeff/update", {
            method: "POST",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded",
                "X-CSRF-TOKEN": "{{ csrf_token() }}",
            },
            body: "ID={{ $counter->ID }}&Jumlah=" + currentCount,
        });
    });
</script>

<h2 id="countDisplay">Anda telah membuka URL ini sebanyak {{ $counter->Jumlah }} kali</h2>

@endsection
