<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportCallsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_calls', function (Blueprint $table) {
            $table->increments('id');
            $table->string('months');
            $table->integer('year');
            $table->integer('presentedCall');
            $table->integer('handledCall');
            $table->integer('abandonedCall');
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
        Schema::dropIfExists('report_calls');
    }
}
