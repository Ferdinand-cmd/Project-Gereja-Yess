<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePickupPointsTable extends Migration
{
    public function up()
    {
        Schema::create('pickup_points', function (Blueprint $table) {
            $table->id();
            $table->string('region');
            $table->string('title');
            $table->text('description');
            $table->date('date');
            $table->time('time');
            $table->string('image');
            $table->integer('seats_o')->default(0);
            $table->integer('seats_t');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pickup_points');
    }
}