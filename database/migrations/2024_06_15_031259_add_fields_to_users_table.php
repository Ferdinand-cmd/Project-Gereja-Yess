<?php

// database/migrations/xxxx_xx_xx_add_fields_to_users_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('gender')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('wa')->nullable();
            $table->string('status')->nullable();
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['gender', 'tanggal_lahir', 'wa', 'status']);
        });
    }
}
