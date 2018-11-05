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
        'service_id'=>'1',
        'name' => 'KlikBCA Bisnis',
        'slug' => str_slug('KBB')
      ]);
      Category::create([
        'service_id'=>'2',
        'name' => 'Operator',
        'slug' => str_slug('operator')
      ]);
      Category::create([
        'service_id'=>'3',
        'name' => 'Rekening',
        'slug' => str_slug('rekening')
      ]);
      Category::create([
        'service_id'=>'4',
        'name' => 'E-Channel',
        'slug' => str_slug('e-channel')
      ]);
      Category::create([
        'service_id'=>'5',
        'name' => 'Kartu ATM',
        'slug' => str_slug('kartu ATM')
      ]);
    }
}
