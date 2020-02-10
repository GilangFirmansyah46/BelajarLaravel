<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    // protected $table = 'mahasiswa';

	protected $fillable = array('nama', 'nim', 'id_dosen');
	public $timestamps = true;

	public function wali() {
		return $this->hasOne('App\Wali', 'id_mahasiswa');
	}
	public function dosen() {
		return $this->belongsTo('App\Dosen', 'id_dosen');
	}
	public function hobi()
    {
        return $this->belongsToMany(
            'App\Hobi', #model hobi
            'mahasiswa_hobi', #tabel mahasiswa_hobi
            'id_mahasiswa', #fk tabel mahasiswa
            'id_hobi' #fk tabel untuk Hobi
        );
	}
}