
@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')
<section class="section">

    <div class="section-heading">
        <p class="eyebrow">KOLEKSI KATALOG BUKU NUSANTARA</p>
        <h1>Temukan Buku Favoritmu 📚</h1>
        <p>
            Jelajahi berbagai cerita, pengetahuan, dan petualangan
            menarik dari koleksi buku pilihan kami.
        </p>
    </div>

    <div class="info-grid">

        @foreach ($buku as $item)
        <article class="info-card">

            <img
                src="{{ asset('images/' . $item['gambar']) }}"
                alt="Sampul {{ $item['judul'] }}"
                class="book-cover"
            >

            <h3>{{ $item['judul'] }}</h3>

            <p>
                <strong>Penulis:</strong>
                {{ $item['penulis'] }}
            </p>

            <p>
                <strong>Kategori:</strong>
                {{ $item['kategori'] }}
            </p>

            <p>
                <strong>Tahun:</strong>
                {{ $item['tahun'] }}
            </p>

            <p>{{ $item['deskripsi'] }}</p>

            <a
                href="{{ route('buku.detail', ['id' => $item['id']]) }}"
                class="btn"
            >
                Lihat Detail
            </a>

        </article>
        @endforeach

    </div>
</section>
@endsection
