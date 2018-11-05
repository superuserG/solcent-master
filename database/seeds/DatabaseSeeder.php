<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $this->call(kanwilSeeder::class);
      $this->call(statusSeeder::class);
      $this->call(categorySeeder::class);
      $this->call(subCategorySeeder::class);
      $this->call(typeSeeder::class);
      $this->call(roleSeeder::class);
      $this->call(UserTableSeeder::class);
      $this->call(CustomerTableSeeder::class);
      $this->call(EmployeeSeeder::class);
      $this->call(ReportSolcentSeeder::class);
      $this->call(serviceSeeder::class);
    }
}
