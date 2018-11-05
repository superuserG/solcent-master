<?php

use Illuminate\Database\Seeder;
use App\ReportSolcent;
use Faker\Factory;

class ReportSolcentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        ReportSolcent::create([
          'WO_ID'=>Uuid::generate(4),
          'Nama'=>'employee 1',
          'NIP'=>'112233',
          'Summary'=>'test Summary',
          'Notes'=>'Test Question',
          'Resolution'=>'Test Resolution',
          'Status'=>'ACTIVE',
          'Assignee'=>'Admin',
          'Type'=>'1',
          'Category_1'=>'KlikBCA Bisnis',
          'Category_2'=>'KlikBCA Bisnis',
          'Category_3'=>'Auto Credit',
          'Wilayah'=>'Test Wilayah',
          'Site_Group'=>'Test Site Group',
          'Site'=>'Test Site',
          'Reference'=>'Test Reference',
        ]);
    }
}
