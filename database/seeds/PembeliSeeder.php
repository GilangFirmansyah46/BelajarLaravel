<?php

use App\Pembeli;
use Illuminate\Database\Seeder;

class PembeliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembeli = new Pembeli;
        $pembeli->nama_pembeli = 'Puput';
        $pembeli->jumlah_buku_pembeli = 80;
        $pembeli->status_pembeli = 1;
        $pembeli->alamat_pembeli = 'Sadang';
        $pembeli->save();
    }
}
//protected = 'buku';