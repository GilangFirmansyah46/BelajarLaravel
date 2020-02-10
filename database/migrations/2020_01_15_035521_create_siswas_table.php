<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('nama')->default(); 
            $table->string('nis')->unique(); 
            $table->string('kelas')->nullable(); 
            $table->string('jurusan')->nullable(); 
            $table->text('alamat')->default(50); 
            $table->date('tgl_lahir')->nullable(); 
            
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
        Schema::dropIfExists('siswas');
    }
}
