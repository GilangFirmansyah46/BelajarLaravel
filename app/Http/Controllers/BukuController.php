<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;

class BukuController extends Controller
{
    public function index()
    {
        $buku = Buku::all();
        return view('buku.index',compact('buku'));
    }

    public function show($id)
    {
        $buku = Buku::find($id);
        return view('buku.show',compact('buku'));
    }

    public function hitungbuku(){
        $buku = Buku::count();
        return $buku;
    }
    
    public function buat_data($jdl)
    {
        $buku = new Buku();
        $buku->judul = $jdl;
        $buku->jumlah_halaman = "55";
        $buku->penerbit = "Gilang";
        $buku->synopsis = "Buku ini.....";
        $buku->status = "1";
        $buku->save();
        return $buku;
    }
    public function update($id)
    {
        $buku = Buku::find($id);
        $buku->judul = $jdl;
        $buku->jumlah_halaman = "100";
        $buku->penerbit = "Firmansyah";
        $buku->synopsis = "Buku ini.....";
        $buku->status = false;
        $buku->save();
        return $buku;
    }
    public function delete($id)
    {
        $buku = Buku::find($id);
        $buku->delete();
        return $buku;
    }
}