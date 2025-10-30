<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suratpengantars', function (Blueprint $table) {
           $table->id();
           $table->char('surat_nik', 16);
            $table->string('nomorsurat');
              $table->string('nik')->unique();
            
            $table->string('nama');
            $table->string('alamat');
            $table->string('jenissurat');
            $table->string('tempatlahir');
            $table->date('tanggallahir');
            
            $table->string('agama');
          
            $table->string('nomorhp');
       
            $table->timestamps();
            $table->foreign('surat_nik')->references('nik')->on('penduduks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suratpengantars');
    }
};
