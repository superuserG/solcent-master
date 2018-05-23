<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('agentName');
            $table->string('formID');
            $table->string('domain');
            $table->string('guestName');
            $table->string('jobTitle');
            $table->integer('kanwil')->unsigned();
            $table->integer('kcu')->unsigned();
            $table->integer('kcp')->unsigned();
            $table->integer('type')->unsigned();
            $table->integer('status')->unsigned();
            $table->integer('cat_1')->unsigned();
            $table->integer('cat_2')->unsigned();
            $table->string('title');
            $table->text('question');
            $table->text('res');
            $table->string('ref');
            $table->timestamps();

            $table->foreign('kanwil')->references('id')->on('kanwils')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('kcu')->references('id')->on('kcus')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('kcp')->references('id')->on('kcps')->onUpdate('CASCADE')->onDelete('CASCADE');            $table->foreign('type')->references('id')->on('types')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('status')->references('id')->on('statuses')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('cat_1')->references('id')->on('categories')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('cat_2')->references('id')->on('sub_categories')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
