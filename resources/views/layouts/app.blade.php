<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Katalog Buku Nusantara</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<header class="navbar">
    <a href="{{ route('beranda') }}" class="brand">
        Katalog<span>Buku.</span>
    </a>

    <nav>
        <a href="{{ route('beranda') }}">Beranda</a>
        <a href="{{ route('tentang') }}">Tentang</a>
        <a href="{{ route('buku.index') }}">Daftar Buku</a>
        <a href="{{ route('buku.kategori') }}">Kategori</a>
    </nav>
</header>

<main>
    @yield('content')
</main>

<footer class="footer">
    <h3>Katalog Buku Nusantara</h3>
    <p>Temukan buku, perluas wawasan, dan tumbuhkan minat baca.</p>
    <p>&copy; {{ date('Y') }} Katalog Buku Nusantara</p>
</footer>

</body>
</html>
