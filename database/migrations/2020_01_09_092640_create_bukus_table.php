<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bukus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judul')->unique(); //tidak boleh sama
            $table->integer('jumlah_halaman')->default(50); //kalau ga di isi otomatis 50
            $table->string('penerbit')->nullable(); //tidak wajib diisi
            $table->text('synopsis')->nullable(); //tidak wajib diisi
            $table->boolean('status')->default(1); //kalau ga di isi otomatis 1
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
        Schema::dropIfExists('bukus');
    }
}
