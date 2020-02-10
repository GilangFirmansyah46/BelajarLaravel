<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gaji;

class GajiController extends Controller
{
    public function index()
    {
        $gaji = Gaji::all();
        return view('gaji.indexgaji',compact('gaji'));
    }

    public function show($id)
    {
        $gaji = Gaji::find($id);
        return view('gaji.showgaji',compact('gaji'));
    }

    public function hitunggaji(){
        $gaji = Gaji::count();
        return $gaji;
    }
    
    public function buat_data($jdl)
    {
        $gaji = new Gaji();
        $gaji->nip = $jdl;
        $gaji->nama = "55";
        $gaji->agama = "Gilang";
        $gaji->jenis_kelamin = "Buku ini.....";
        $gaji->alamat = "1";
        $gaji->jabatan = "1";
        $gaji->jam_kerja = "1";
        $gaji->save();
        return $gaji;
    }
    public function update($id)
    {
        $gaji = Gaji::find($id);
        $gaji->nip = $jdl;
        $gaji->nama = "55";
        $gaji->agama = "Gilang";
        $gaji->jenis_kelamin = "Buku ini.....";
        $gaji->alamat = "1";
        $gaji->jabatan = "1";
        $gaji->jam_kerja = "1";
        $gaji->save();
        return $gaji;
    }
    public function delete($id)
    {
        $gaji = Gaji::find($id);
        $gaji->delete();
        return $gaji;
    }
}
