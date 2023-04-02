<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <title>@yield('title','Sistem Informasi Mahasiswa')</title>
</head>
<body>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link @yield('menuMahasiswa')" href="/mahasiswa">Data Mahasiswa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @yield('menuDosen')" href="/dosen">Data Dosen</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @yield('menuGallery')" href="/gallery">Gallery</a>
            </li>
        </ul>
    </div>
</nav>
<div class="alert alert-primary text-center">Sistem Informasi Mahasiswa</div>
@show
@yield('content')


<footer class="bg-dark text-center py-4 text-white mt-4">
<div class="container">
    Sistem Informasi Mahasiswa | NIM : 216651036 NAMA : SATRIA JHOAN PUTRA
</div>
</footer>

</body>
</html>
