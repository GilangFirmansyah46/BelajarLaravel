<?php

use Illuminate\Database\Seeder;

use App\Dosen;
use App\Wali;
use App\Mahasiswa;
use App\Hobi;

class RelasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        # Kosongin isi tabel
		DB::table('mahasiswas')->delete();
		DB::table('walis')->delete();
		DB::table('dosens')->delete();
		DB::table('hobis')->delete();
		DB::table('mahasiswa_hobi')->delete();

		# Membuat data Dosen
		$dosen = Dosen::create(array(
			'nama' => 'Abdul Musthafa',
			'nipd' => '1234567890'
		));

		# Mahasiswa Pertama bernama Noviyanto Rachmadi. Dengan NIM 1015015072.
		$novay = Mahasiswa::create(array(
			'nama' => 'Noviyanto Rachmadi',
			'nim'  => '1015015072',
			'id_dosen' => $dosen ->id));

		# Mahasiswa Kedua bernama Djaffar. Dengan NIM 1015015088.
		$dije = Mahasiswa::create(array(
			'nama' => 'Djaffar',
			'nim'  => '1015015088',
			'id_dosen' => $dosen ->id));

		# Mahasiswa Ketiga bernama Puji Rahayu. Dengan NIM 1015015078.
		$ayu = Mahasiswa::create(array(
			'nama' => 'Puji Rahayu',
			'nim'  => '1015015078',
			'id_dosen' => $dosen ->id));

		# Informasi ketika mahasiswa telah diisi.
		$this->command->info('Mahasiswa telah diisi!');

		/*
		 * Disini kita akan menggunakan ketiga variabel yang kita
		 * deklarasikan diatas yaitu '$novay', '$dije', '$ayu'
		 * dengan cara mengambil id dari masing-masing variabel yang
		 * baru saja di isi.
		 */

		# Ciptakan wali si $novay
		Wali::create(array(
			'nama'  => 'Achmad S',
			'id_mahasiswa' => $novay->id
		));
		# Ciptakan wali si $dije
		Wali::create(array(
			'nama'  => 'Entahlah',
			'id_mahasiswa' => $dije->id
		));
		# Ciptakan wali si $ayu
		Wali::create(array(
			'nama'  => 'Arianto',
			'id_mahasiswa' => $ayu->id
		));

		# Informasi ketika semua wali telah diisi.
		$this->command->info('Data mahasiswa dan wali telah diisi!');

		#Membuat Data Tabel Hobi
		$mandi_hujan = Hobi::create(array('hobi' => 'Mandi Hujan'));
		$baca_buku = Hobi::create(array('hobi' => 'Baca Buku'));

		// attach untuk melampirkan data
		// sync untuk mengupdate data
		$novay->hobi()->attach($mandi_hujan->id);
		$novay->hobi()->attach($baca_buku->id);
		$dije->hobi()->attach($mandi_hujan->id);
		$ayu->hobi()->attach($baca_buku->id);
		$this->command->info('Mahasiswa beserta Hobi telah di isi!');
    }
}
