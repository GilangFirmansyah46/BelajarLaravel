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