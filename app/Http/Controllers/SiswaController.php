<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;

class SiswaController extends Controller
{
    public function indexsiswa()
    {
        $siswa = Siswa::all();
        return $siswa;
    }

    public function showsiswa($id)
    {
        $siswa = Siswa::find($id);
        return $siswa;
    }

    public function hitungsiswa(){
        $siswa = Siswa::count();
        return $siswa;
    }
    
    public function buat_datasiswa($ns)
    {
        $siswa = new Siswa;
        $siswa->nama = $ns;
        $siswa->nis = '001';
        $siswa->kelas = 'XI RPL 3';
        $siswa->jurusan = 'RPL';
        $siswa->alamat = 'Permata Kopo';
        $siswa->tgl_lahir = '2003-07-09';
        $siswa->save();
        return $siswa;
    }
    public function updatesiswa($id,$ns,$nis)
    {
        $siswa = Siswa::find($id);
        $siswa->nama = $ns;
        $siswa->nis = $nis;
        $siswa->kelas = 'XI RPL 3';
        $siswa->jurusan = 'RPL';
        $siswa->alamat = 'Permata Kopo';
        $siswa->tgl_lahir = '2003-07-09';
        $siswa->save();
        return $siswa;
    }
    public function deletesiswa()
    {
        $siswa = Siswa::find($id);
        $siswa->delete();
        return $siswa;
    }
}
