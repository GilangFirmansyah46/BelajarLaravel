<?php

use Illuminate\Database\Seeder;
use App\Gaji;

class GajiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gaji = new Gaji;
        $gaji->nip = 1;
        $gaji->nama= 'Gilang Firmansyah';
        $gaji->agama = 'Islam';
        $gaji->jenis_kelamin = 'Laki-Laki';
        $gaji->alamat = 'Permata Kopo';
        $gaji->jabatan = 'Manager';
        $gaji->jam_kerja = 250;
        $gaji->save();

        $gaji = new Gaji;
        $gaji->nip = 2;
        $gaji->nama= 'Puput';
        $gaji->agama = 'Islam';
        $gaji->jenis_kelamin = 'Laki-Laki';
        $gaji->alamat = 'Sadang';
        $gaji->jabatan = 'Sekretaris';
        $gaji->jam_kerja = 200;
        $gaji->save();

        $gaji = new Gaji;
        $gaji->nip = 3;
        $gaji->nama= 'Deni';
        $gaji->agama = 'Islam';
        $gaji->jenis_kelamin = 'Laki-Laki';
        $gaji->alamat = 'TCI';
        $gaji->jabatan = 'Staff';
        $gaji->jam_kerja = 150;
        $gaji->save();

    }
}
