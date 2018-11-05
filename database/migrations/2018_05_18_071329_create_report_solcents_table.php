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
            // $table->increments('id');
            // $table->string('WO_ID',255);
            // $table->string('nip',255);
            // $table->string('Employee',255);
            // $table->string('Category_1',255);
            // $table->string('Category_2',255);
            // $table->string('Category_3',255);
            // $table->string('status',255)->nullable();
            // $table->string('type',255)->nullable();
            // $table->string('summary',255);
            // $table->string('question',255);
            // $table->string('resolution',255);
            // $table->string('reference',255);
            // $table->string('Wilayah',255)->nullable();
            // $table->string('Site_Group',255)->nullable();
            // $table->string('Site',255)->nullable();
            $table->increments('id');
            $table->string('WO_ID',255);
            $table->string('Nama',255);
            $table->string('NIP',255);
            $table->string('Summary',255);
            $table->string('Notes',255);
            $table->string('Resolution',255);
            $table->string('Status',255)->nullable();
            $table->string('Assignee',255);
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->string('Type',255)->nullable();
            $table->string('Category_1',255);
            $table->string('Category_2',255);
            $table->string('Category_3',255);
            $table->string('Wilayah',255)->nullable();
            $table->string('Site_Group',255)->nullable();
            $table->string('Site',255)->nullable();
            $table->string('Reference',255)->nullable();
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
        Schema::dropIfExists('report_solcents');
    }
}
