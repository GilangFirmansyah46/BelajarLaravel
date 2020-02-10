<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContohController extends Controller
{
    public function latihan()
    {
        return 'Ini Contoh Latihan Controller';
    }

    public function latihan2()
    {
        $a = 'Mahmud';
        $b = 'Zulkarnaen';

        return 'Nama Saya Adalah '.$a.' '.$b;
    }

    //passing data from controller to view
    public function latihan3()
    {
        $a = 'Dadang Mambo';
        return view('test',compact('a'));
    }

    public function latihan4()
    {
        $a = 'Icip Nirin';
        return view('test2',['nama' => $a]);
    }

    public function menu($a)
    {
        return view('menu',compact('a'));
    }

    public function motor($a = null, $b = null, $c = null)
    {
        if (isset($a)) {
            $a = "Anda Memesan $a";
        }
        if (isset($b)) {
            $b = "& $b";
        }
        if (isset($c)) {
            if ($c >= 25000) {
                $c = " = $c Anda Mendapatkan Ukuran Jumbo";
            }
            elseif ($c >= 15000 && $c <= 25000) {
                $c = " = $c Anda Mendapatkan Ukuran Medium";
            }
            elseif ($c >= 0 && $c <= 15000) {
                $c = " = $c Anda Mendapatkan Ukuran Small";
            }
            else {
                $c = "Harga Tidak Valid";
            }
        }
        //tidak sama
        if (!isset($a)) {
            $a = "Anda Belum Memesan Sesuatu";
        }
        return view('motor',compact('a','b','c'));
    }
}
