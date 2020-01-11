<?php

use App\Keuangan;
use Illuminate\Database\Seeder;

class KeuanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $keuangan = new Keuangan;
        $keuangan->keuangan = 'Amann';
        $keuangan->save();
    }
}
