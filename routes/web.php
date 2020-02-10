<?php

use App\Buku;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Buku::all();
});

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('pesan', function(){
    return "Halo Smackdown";
});

Route::get('pesan2', function(){
    return "Salam sunda sampurasun";
});

Route::get('pesan3', function(){
    return "Nama Saya Gilang";
});

Route::get('pesan4', function(){
    return "Hobby saya sunmori";
});

Route::get('variable', function(){
    $data1 = "Ini Variable 1";
    $data2 = "Ini Variable 2";
    $data3 = "Ini Variable 3";
    $data4 = "Ini Variable 4";
    $data5 = "Ini Variable 5";
    return "$data1<br> $data2<br> $data3<br> $data4<br> $data5";
});

// Route::get('angkot/{jurusan}', function(){
//     $jurusan = 'Caheum - ledeng';
//     return 'Angkot Jurusan:' .$jurusan;
// });

Route::get('angkot/{jurusan1}', function(){
    $jurusan = 'Cibaduyut - karangsetra'; 
    $data = 'Angkot Jurusan:';
    $kapasitas = '10 Penumpang';
    $data2 = 'Kapasitas Penumpang:';
    return $data .' '. $jurusan .'<br>'. $data2 .' '. $kapasitas;
});

Route::get('user/{nama}/{alamat}/{nomor}', function($nama, $alamat, $nomor){
    return 'halo ' . $nama . ' yang beralamat di ' . $alamat . ' nomor' . $nomor;
});

Route::get('nilai/{nilai?}', function($nilai = null){
    return $nilai;
});

Route::get('user1/{nama1}/{nilai1?}', function($nama1, $nilai1=null, $grade='isi duluu'){
    if ($nilai1 <=20) {
        $grade = 'Grade E';
    }
    elseif ($nilai1 <=30) {
        $grade = 'Grade D';
    }
    elseif ($nilai1 <=40) {
        $grade = 'Grade C';
    }
    elseif ($nilai1 <=50) {
        $grade = 'Grade B';
    }
    elseif ($nilai1 >50) {
        $grade = 'Grade A';
    }

    if ($nilai1 != null) {
        return 'halo ' . $nama1 .'<br>'. ' nilai anda : ' . $nilai1 .'<br>'. $grade;
    }
    else {
        return 'isi duluu';
    }  
});


Route::get('contoh','ContohController@latihan');
Route::get('profil','ContohController@latihan2');
Route::get('profil2','ContohController@latihan3');
Route::get('profil3','ContohController@latihan4');
Route::get('profil4','BiodataController@biodata');

//CRUD Buku
Route::get('get-buku','BukuController@index');
Route::get('create-buku','BukuController@buat_data');
Route::get('get-buku/{id}','BukuController@show');
Route::get('delete-buku/{id}','BukuController@delete');
Route::get('update-buku/{id}','BukuController@update');
Route::get('hitungbuku','BukuController@hitungbuku');

Route::get('menu/{mkn}','ContohController@menu');
Route::get('motor/{pilih?}/{minum?}/{harga?}','ContohController@motor');

//CRUD Siswa
Route::get('get-siswa','SiswaController@indexsiswa');
Route::get('create-siswa/{nama}','SiswaController@buat_datasiswa');
Route::get('get-siswa/{id}','SiswaController@showsiswa');
Route::get('delete-siswa/{id}','SiswaController@deletesiswa');
Route::get('update-siswa/{id}/{nama}/{nis}','SiswaController@updatesiswa');
Route::get('hitung-siswa','SiswaController@hitungsiswa');

//passing data
Route::get('passing','PracticeController@pass');
Route::get('passing1','PracticeController@pass1');
Route::get('status/{a?}','PracticeController@status');
Route::get('buku','PracticeController@loop');

//book
Route::get('book','BukuController@index');
Route::get('book/{id}','BukuController@show');

//Gaji
Route::get('gaji','GajiController@index');
Route::get('gaji/{id}','GajiController@show');

//belajar blade templating
Route::get('/profil',function () {
    return view('profil');
});

Route::get('/kontak',function () {
    return view('contact');
});


//Relasi
use App\Mahasiswa;
use App\Wali;
use App\Dosen;
use App\Hobi;

Route::get('relasi-1', function() {

    # Temukan mahasiswa dengan NIM 1015015072
    $mahasiswa = Mahasiswa::where('nim', '=', '1015015072')->first();

    # Tampilkan nama wali mahasiswa
    return $mahasiswa->wali->nama;
});

Route::get('relasi-2', function() {

    # Temukan mahasiswa dengan NIM 1015015072
    $mahasiswa = Mahasiswa::where('nim', '=', '1015015072')->first();

    # Tampilkan nama dosen pembimbing dari mahasiswa
    return $mahasiswa->dosen->nama;
});

Route::get('relasi-3', function() {

    # Mencari data dosen yang bernama abdul
    $dosen = Dosen::where('nama', '=', 'Abdul Musthafa')->first();

    # Tampilkan seluruh data mahasiswa didikannya
    foreach ($dosen->mahasiswa as $temp) {
        echo '<li> Nama : ' . $temp->nama .
        '<strong>' . $temp->nim . '</strong></li>';
    }
});

Route::get('relasi-4', function() {

    # Temukan mahasiswa dengan nama noviyanto rachmadi
    $novay = Mahasiswa::where('nama', '=', 'Noviyanto Rachmadi')->first();

    # Tampilkan seluruh hobi si novay
    foreach ($novay->hobi as $temp) {
        echo '<li>' . $temp->hobi . '</li>';
    }
});

Route::get('relasi-5', function() {

    # mencari data hobi yang bernama mandi hujan
    $mandi_hujan = Hobi::where('hobi', '=', 'Mandi Hujan')->first();

    # Tampilkan nama wali mahasiswa
    foreach ($mandi_hujan->mahasiswa as $temp) {
        echo '<li> Nama : ' . $temp->nama .
        '<strong>' . $temp->nim . '</strong></li>';
    }
});

Route::get('eloquent', function () {
    $data = Mahasiswa::with('wali', 'dosen', 'hobi')->get();
    return view('eloquent', compact('data'));
});