<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function biodata()
    {
        $a = '<b>Gilang Firmansyah Kusumah</b>, ';
        $b = '<b>Islam</b>, ';
        $c = '<b>Laki-Laki</b>, ';
        $d = '<b>Permata Kopo Blok CA No.111 RT.06 RW.08</b>, ';
        $e = '<b>SMK Assalaam Bandung</b>, ';
        $f = '<b>XI RPL 3</b>, ';
        $g = '<b>RPL</b>, ';
        $h = '<b>Fitness</b>, ';
        $i = '<b>16 Tahun</b>, ';
        return view('biodata',compact('a','b','c','d','e','f','g','h','i'));
    }
}
