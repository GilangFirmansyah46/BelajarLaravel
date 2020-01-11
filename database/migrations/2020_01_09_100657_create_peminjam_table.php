<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeminjamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjam', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_peminjam')->unique(); 
            $table->integer('jumlah_buku_peminjam')->default(50);
            $table->boolean('status_peminjam')->default(1); 
            $table->string('alamat_peminjam')->nullable();
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
        Schema::dropIfExists('peminjam');
    }
}
