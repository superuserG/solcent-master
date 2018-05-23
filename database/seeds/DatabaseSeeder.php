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
    }
}
