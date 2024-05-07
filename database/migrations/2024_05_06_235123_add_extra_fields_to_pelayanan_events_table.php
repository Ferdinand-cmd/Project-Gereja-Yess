<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('pelayanan_events', function (Blueprint $table) {
            $table->string('email')->after('id');  // Assumes 'nama' is an existing field
            $table->string('alasan', 200)->after('kecamatan');
            $table->enum('role', ['Usher', 'Singer', 'Multimedia', 'Camera', 'Pemain Musik'])->after('kegiatan_saat_ini');
            $table->boolean('is_accepted')->default(false)->after('role');
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pelayanan_events', function (Blueprint $table) {
            //
        });
    }
};
