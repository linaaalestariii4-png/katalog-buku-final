@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<section class="hero">
    <div class="hero-content">
        <p class="eyebrow">RUANG UNTUK PARA PECINTA BUKU</p>

        <h1>Setiap Buku Membuka Jendela Dunia.</h1>

        <p>
            Temukan beragam bacaan menarik, mulai dari novel,
            fantasi, hingga sastra Indonesia dalam Katalog Buku Nusantara.
        </p>

        <a href="{{ route('buku.index') }}" class="btn">
            Jelajahi Koleksi
        </a>
    </div>

    <div class="hero-decoration">
        <div class="book book-one">LITERASI</div>
        <div class="book book-two">CERITA</div>
        <div class="book book-three">WAWASAN</div>
    </div>
</section>

<section class="section">
    <div class="section-heading">
        <p class="eyebrow">MULAI MEMBACA</p>
        <h2>Temukan Bacaan Favoritmu</h2>
        <p>
            Setiap buku memiliki cerita dan pengetahuan
            yang bisa memperkaya pengalaman membaca.
        </p>
    </div>

    <div class="info-grid">
        <article class="info-card">
            <span class="card-icon">📚</span>
            <h3>Beragam Koleksi</h3>
            <p>
                Temukan pilihan buku dari berbagai kategori
                sesuai minat membaca.
            </p>
        </article>

        <article class="info-card">
            <span class="card-icon">✍️</span>
            <h3>Kenali Penulis</h3>
            <p>
                Pelajari nama penulis, tahun terbit,
                dan deskripsi buku.
            </p>
        </article>

        <article class="info-card">
            <span class="card-icon">📖</span>
            <h3>Detail Buku</h3>
            <p>
                Buka halaman detail untuk mengetahui informasi
                lebih lengkap tentang buku pilihanmu.
            </p>
        </article>
    </div>
</section>
@endsection
