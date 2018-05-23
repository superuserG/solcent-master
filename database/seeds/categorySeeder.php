=<?php

use Illuminate\Database\Seeder;
use App\Category;

class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Category::create([
        'name' => 'KlikBCA Bisnis',
        'slug' => str_slug('KBB')
      ]);
      Category::create([
        'name' => 'Operator',
        'slug' => str_slug('operator')
      ]);
      Category::create([
        'name' => 'Rekening',
        'slug' => str_slug('rekening')
      ]);
      Category::create([
        'name' => 'E-Channel',
        'slug' => str_slug('e-channel')
      ]);
      Category::create([
        'name' => 'Kartu ATM',
        'slug' => str_slug('kartu ATM')
      ]);
    }
}
