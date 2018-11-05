<?php

use Illuminate\Database\Seeder;
use App\Type;

class typeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Type::create([
        'name' => 'Information',
        'slug' => str_slug('information')
      ]);
      Type::create([
        'name' => 'Problem',
        'slug' => str_slug('problem')
      ]);
    }
}
