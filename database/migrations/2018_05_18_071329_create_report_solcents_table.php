<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportSolcentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_solcents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('WO_ID');
            $table->string('Category_1');
            $table->string('Category_2');
            $table->string('Category_3');
            $table->string('Type');
            $table->dateTime('Submit_Date');
            $table->dateTime('Completed_Date');
            $table->string('Summary');
            $table->string('Notes');
            $table->text('Resolution');
            $table->string('Status');
            $table->string('Assignee');
            $table->string('Nama');
            $table->integer('NIP');
            $table->string('Wilayah');
            $table->string('Site_Group');
            $table->string('Site');
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
        Schema::dropIfExists('report_solcents');
    }
}
