@extends('layouts.app')

@section('title', $detail['judul'])

@section('content')
<section class="page-banner">
    <p class="eyebrow">INFORMASI BUKU</p>
    <h1>Detail Buku</h1>
    <p>Kenali buku pilihanmu lebih dekat.</p>
</section>

<section class="section">
    <article class="detail-card">
        <div
            class="detail-cover"
            style="background-color: {{ $detail['warna'] }};"
        >
            <span class="cover-small">KOLEKSI NUSANTARA</span>
            <h2>{{ $detail['judul'] }}</h2>
            <p>{{ $detail['penulis'] }}</p>
        </div>

        <div class="detail-content">
            <span class="category-tag">
                {{ $detail['kategori'] }}
            </span>

            <h2>{{ $detail['judul'] }}</h2>

            <p>
                <strong>Penulis:</strong>
                {{ $detail['penulis'] }}
            </p>

            <p>
                <strong>Kategori:</strong>
                {{ $detail['kategori'] }}
            </p>

            <p>
                <strong>Tahun terbit:</strong>
                {{ $detail['tahun'] }}
            </p>

            <h3>Deskripsi Buku</h3>

            <p>{{ $detail['deskripsi'] }}</p>

            <a href="{{ route('buku.index') }}" class="btn">
                Kembali ke Daftar Buku
            </a>
        </div>
    </article>
</section>
@endsection
