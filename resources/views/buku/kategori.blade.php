
@extends('layouts.app')

@section('title', 'Kategori Buku')

@section('content')
<section class="section">
    <div class="section-heading">
        <p class="eyebrow">JELAJAHI KOLEKSI</p>
        <h1>Pilih Kategori Favoritmu 📚</h1>
        <p>
            Temukan bacaan sesuai minatmu, mulai dari cerita
            petualangan hingga buku pengembangan diri.
        </p>
    </div>

    <div class="info-grid">
        <article class="info-card">
            <span class="card-icon">📖</span>
            <h3>Novel</h3>
            <p>Kisah menarik tentang kehidupan, persahabatan, dan perjuangan.</p>
            <p><strong>Contoh:</strong> Laskar Pelangi, Negeri 5 Menara.</p>
        </article>

        <article class="info-card">
            <span class="card-icon">✨</span>
            <h3>Fantasi</h3>
            <p>Petualangan seru di dunia imajinasi yang penuh misteri.</p>
            <p><strong>Contoh:</strong> Bumi, Bulan.</p>
        </article>

        <article class="info-card">
            <span class="card-icon">🎓</span>
            <h3>Pendidikan</h3>
            <p>Bacaan untuk menambah pengetahuan dan wawasan.</p>
        </article>

        <article class="info-card">
            <span class="card-icon">💌</span>
            <h3>Romansa</h3>
            <p>Cerita tentang cinta, hubungan, dan perjalanan perasaan.</p>
            <p><strong>Contoh:</strong> Dilan 1990.</p>
        </article>

        <article class="info-card">
            <span class="card-icon">🌱</span>
            <h3>Pengembangan Diri</h3>
            <p>Bacaan untuk membangun kebiasaan baik dan mengembangkan diri.</p>
            <p><strong>Contoh:</strong> Filosofi Teras, Atomic Habits.</p>
        </article>

        <article class="info-card">
            <span class="card-icon">🌧️</span>
            <h3>Fiksi</h3>
            <p>Kisah imajinatif yang mengajak pembaca melihat kehidupan dari sudut pandang berbeda.</p>
            <p><strong>Contoh:</strong> Hujan.</p>
        </article>
    </div>

    <div style="text-align: center; margin-top: 35px;">
        <a href="{{ route('buku.index') }}" class="btn">
            Lihat Semua Buku
        </a>
    </div>
</section>
@endsection
