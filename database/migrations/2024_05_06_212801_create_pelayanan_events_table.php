<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelayananEventsTable extends Migration
{
    public function up()
    {
        Schema::create('pelayanan_events', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('umur');
            $table->string('no_hp');
            $table->string('kecamatan');
            $table->string('kegiatan_saat_ini');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pelayanan_events');
    }
}
