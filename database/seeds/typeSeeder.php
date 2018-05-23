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
        'name' => 'In-Progress',
        'slug' => str_slug('in-progress')
      ]);
      Type::create([
        'name' => 'Completed',
        'slug' => str_slug('completed')
      ]);
      Type::create([
        'name' => 'Verified',
        'slug' => str_slug('verified')
      ]);
      Type::create([
        'name' => 'Escalation',
        'slug' => str_slug('escalation')
      ]);
    }
}
