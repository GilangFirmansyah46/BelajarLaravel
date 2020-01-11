<?php

use App\Peminjam;
use Illuminate\Database\Seeder;

class PeminjamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $peminjam = new Peminjam;
        $peminjam->nama_peminjam = 'Gilang';
        $peminjam->jumlah_buku_peminjam= 90;
        $peminjam->status_peminjam = 1;
        $peminjam->alamat_peminjam = 'Permata Kopo';
        $peminjam->save();
    }
}
