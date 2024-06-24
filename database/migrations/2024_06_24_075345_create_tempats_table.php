<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempatsTable extends Migration
{
    public function up()
    {
        Schema::create('tempats', function (Blueprint $table) {
            $table->id();
            $table->string('tempat');
            $table->text('alamat');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tempats');
    }
}
