<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('iduser',255);
            $table->string('name');
            $table->string('nip',255);
            $table->string('email')->unique();
            $table->string('password');
            $table->string('profilepicture',255)->nullable();
            $table->string('kanwil',255)->nullable();
            $table->string('kcu',255)->nullable();
            $table->string('kcukcp',255)->nullable();
            $table->string('deletereason',255)->nullable();
            $table->string('role',255)->default('user');
            $table->rememberToken();
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
