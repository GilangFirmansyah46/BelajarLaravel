<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // $this->call(BukuSeeder::class);
        // $this->call(PeminjamSeeder::class);
        // $this->call(PembeliSeeder::class);
        // $this->call(KeuanganSeeder::class);
        // $this->call(SiswaSeeder::class);
        // $this->call(GajiSeeder::class);
        $this->call(RelasiSeeder::class);
		# Tampilkan informasi berikut bila Seeder telah dilakukan
		$this->command->info('SeederRelasi berhasil.');
    }
}
