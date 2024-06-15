<?php

// database/migrations/xxxx_xx_xx_create_pendetas_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendetaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendetas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('wa');
            $table->string('email')->unique();
            $table->string('role');
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
        Schema::dropIfExists('pendetas');
    }
}

