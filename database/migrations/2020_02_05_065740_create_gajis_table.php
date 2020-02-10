<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGajisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gajis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nip'); //tidak boleh sama
            $table->string('nama')->default(1); 
            $table->string('agama')->default(1);
            $table->string('jenis_kelamin')->default(1); 
            $table->string('alamat')->default(1); 
            $table->string('jabatan')->default(1); 
            $table->integer('jam_kerja')->default(1); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gajis');
    }
}
