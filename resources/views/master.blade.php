<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@yield('title')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>

<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">Logo</a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="/">Welcome Page</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/pegawai">Pegawai</a>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Tugas Lain
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="/keranjangbelanja">Tugas Pertemuan 15 Perempuan - Keranjang Belanja </a>
        <a class="dropdown-item" href="/nilai">Tugas Pertemuan 15 Laki Laki - Nilai Kuliah </a>
        <a class="dropdown-item" href="/mobil">Tugas Pra UAS - Mobil</a>
        <a class="dropdown-item" href="/formulir">Formulir</a>
      </div>
    </li>
  </ul>
</nav>
<br>

<div class="container">
@yield('konten')
</div>

<br>
@include('footer')

</body>
</html>
