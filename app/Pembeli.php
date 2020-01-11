<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    //jika bikin table tidak menggunakan huruf akhir "S", maka wajib menggunakan ini
    protected $table = 'pembeli';
}
