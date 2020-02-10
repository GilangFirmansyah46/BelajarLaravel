<?php

use App\Buku;
use Illuminate\Database\Seeder;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $buku = new Buku;
        $buku->judul = 'Belajar PHP';
        $buku->jumlah_halaman= 100;
        $buku->penerbit = 'Gramedia Pustaka';
        $buku->synopsis = 'ini adalah.....';
        $buku->status = 1;
        $buku->save();

        $buku = new Buku;
        $buku->judul = 'Belajar Ngoding';
        $buku->jumlah_halaman= 100;
        $buku->penerbit = 'Gramedia Pustaka';
        $buku->synopsis = 'ini adalah.....';
        $buku->status = 1;
        $buku->save();

        $buku = new Buku;
        $buku->judul = 'Belajar Menulis';
        $buku->jumlah_halaman= 100;
        $buku->penerbit = 'Gramedia Pustaka';
        $buku->synopsis = 'ini adalah.....';
        $buku->status = 1;
        $buku->save();

        $buku = new Buku;
        $buku->judul = 'Belajar Membaca';
        $buku->jumlah_halaman= 100;
        $buku->penerbit = 'Gramedia Pustaka';
        $buku->synopsis = 'ini adalah.....';
        $buku->status = 1;
        $buku->save();

        $buku = new Buku;
        $buku->judul = 'Belajar Menghitung';
        $buku->jumlah_halaman= 100;
        $buku->penerbit = 'Gramedia Pustaka';
        $buku->synopsis = 'ini adalah.....';
        $buku->status = 1;
        $buku->save();
    }
}
