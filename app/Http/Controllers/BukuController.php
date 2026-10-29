<?php

namespace App\Http\Controllers;

class BukuController extends Controller
{
    private function dataBuku()
    {
        return [
            [
                'id' => 1,
                'judul' => 'Laskar Pelangi',
                'penulis' => 'Andrea Hirata',
                'kategori' => 'Novel',
                'tahun' => 2005,
                'gambar' => 'laskar-pelangi.jpg',
                'deskripsi' => 'Kisah perjuangan sepuluh anak Belitung dalam meraih pendidikan dan mengejar cita-cita.',
                'warna' => '#d9b58c'
            ],
            [
                'id' => 2,
                'judul' => 'Bumi',
                'penulis' => 'Tere Liye',
                'kategori' => 'Fantasi',
                'tahun' => 2014,
                'gambar' => 'bumi.jpg',
                'deskripsi' => 'Petualangan Raib, Seli, dan Ali dalam dunia paralel yang penuh misteri.',
                'warna' => '#9eae91'
            ],
            [
                'id' => 3,
                'judul' => 'Negeri 5 Menara',
                'penulis' => 'Ahmad Fuadi',
                'kategori' => 'Novel',
                'tahun' => 2009,
                'gambar' => 'negeri-5-menara.jpg',
                'deskripsi' => 'Perjalanan para santri dalam menuntut ilmu dan mewujudkan impian.',
                'warna' => '#d5c6a1'
            ],
            [
                'id' => 4,
                'judul' => 'Rantau 1 Muara',
                'penulis' => 'Ahmad Fuadi',
                'kategori' => 'Novel',
                'tahun' => 2013,
                'gambar' => 'rantau-1-muara.jpg',
                'deskripsi' => 'Kisah perjalanan, perjuangan, dan pencarian tujuan hidup.',
                'warna' => '#c5a6a0'
            ],
            [
                'id' => 5,
                'judul' => 'Bulan',
                'penulis' => 'Tere Liye',
                'kategori' => 'Fantasi',
                'tahun' => 2015,
                'gambar' => 'bulan.jpg',
                'deskripsi' => 'Petualangan di dunia paralel yang penuh tantangan dan misteri.',
                'warna' => '#aab7c2'
            ],
            [
                'id' => 6,
                'judul' => 'Dilan: Dia adalah Dilanku Tahun 1990',
                'penulis' => 'Pidi Baiq',
                'kategori' => 'Romansa',
                'tahun' => 2014,
                'gambar' => 'dilan.jpg',
                'deskripsi' => 'Kisah cinta Dilan dan Milea dengan latar kehidupan remaja tahun 1990.',
                'warna' => '#c6a58a'
            ],
            [
                'id' => 7,
                'judul' => 'Hujan',
                'penulis' => 'Tere Liye',
                'kategori' => 'Fiksi',
                'tahun' => 2016,
                'gambar' => 'hujan.jpg',
                'deskripsi' => 'Kisah tentang kehilangan, persahabatan, cinta, dan masa depan.',
                'warna' => '#9eae91'
            ],
            [
                'id' => 8,
                'judul' => 'Filosofi Teras',
                'penulis' => 'Henry Manampiring',
                'kategori' => 'Pengembangan Diri',
                'tahun' => 2018,
                'gambar' => 'filosofi-teras.jpg',
                'deskripsi' => 'Buku pengembangan diri yang mengenalkan filsafat Stoisisme untuk menghadapi kehidupan sehari-hari.',
                'warna' => '#d5c6a1'
            ],
            [
                'id' => 9,
                'judul' => 'Atomic Habits',
                'penulis' => 'James Clear',
                'kategori' => 'Pengembangan Diri',
                'tahun' => 2018,
                'gambar' => 'atomic-habits.jpg',
                'deskripsi' => 'Buku tentang membangun kebiasaan baik melalui perubahan kecil yang dilakukan secara konsisten.',
                'warna' => '#c5a6a0'
            ],
        ];
    }

    public function index()
    {
        $buku = $this->dataBuku();

        return view('buku.index', compact('buku'));
    }

    public function kategori()
    {
        $buku = $this->dataBuku();

        $kategori = array_values(
            array_unique(array_column($buku, 'kategori'))
        );

        return view('buku.kategori', compact('kategori', 'buku'));
    }

    public function show($id)
    {
        $buku = $this->dataBuku();

        $detail = null;

        foreach ($buku as $item) {
            if ($item['id'] == $id) {
                $detail = $item;
                break;
            }
        }

        if ($detail === null) {
            abort(404);
        }

        return view('buku.detail', compact('detail'));
    }
}

