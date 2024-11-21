<?php
// database/migrations/xxxx_xx_xx_create_akun_owners_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('akun_owners', function (Blueprint $table) {
            $table->string('username_admin', 50)->primary();
            $table->string('password_admin');
            $table->timestamps();
        });

        // Insert default owner data
        DB::table('akun_owners')->insert([
            'username_admin' => 'ownerternakmart',
            'password_admin' => bcrypt('ternakmartpalinglengkap'),
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('akun_owners');
    }
};
