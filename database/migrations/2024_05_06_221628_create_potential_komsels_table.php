<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePotentialKomselsTable extends Migration
{
    public function up()
    {
        Schema::create('potential_komsels', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('umur');
            $table->string('nomor');
            $table->string('kecamatan');
            $table->string('kegiatan');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('potential_komsels');
    }
}