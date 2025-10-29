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
        Schema::create('penduduks', function (Blueprint $table) {
             $table->id();
            $table->string('nik')->unique();
             $table->string('nokk')->unique();
            $table->string('nama');
            $table->string('hubungankeluarga');
            $table->string('tempatlahir');
            $table->date('tanggallahir');
            $table->string('agama');
            $table->string('pekerjaan');
            $table->string('alamat');
            $table->string('nomorrt');
            $table->string('nomorhp');
            $table->string('foto');
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
        Schema::dropIfExists('penduduks');
    }
};
