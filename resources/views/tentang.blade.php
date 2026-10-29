@extends('layouts.app')

@section('title', 'Tentang Toko')

@section('content')
<section class="page-banner">
    <p class="eyebrow">TENTANG KAMI</p>
    <h1>Mengenal Katalog Buku Nusantara</h1>
    <p>Tempat untuk mengenal berbagai bacaan dan karya penulis.</p>
</section>

<section class="section about-content">
    <h2>Apa itu Katalog Buku Nusantara?</h2>

    <p>
        Katalog Buku Nusantara adalah website sederhana yang
        menyajikan informasi berbagai buku dalam satu tempat.
        Pengunjung dapat melihat judul buku, nama penulis,
        kategori, tahun terbit, dan deskripsi buku.
    </p>

    <p>
        Website ini dibuat sebagai proyek praktikum
        Pemrograman Internet untuk menerapkan penggunaan
        Laravel, Routing, Controller, dan Blade View.
    </p>

    <h2>Tujuan Website</h2>

    <p>
        Tujuan website ini adalah membantu pengunjung
        mengenal koleksi buku dan mempermudah pencarian
        informasi berdasarkan kategori serta detail buku.
    </p>

    <a href="{{ route('buku.index') }}" class="btn">
        Lihat Koleksi Buku
    </a>
</section>
@endsection
