<?php

use Illuminate\Database\Seeder;
use App\Status;

class statusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Status::create([
        'name' => 'Information',
        'slug' => str_slug('information')
      ]);
      Status::create([
        'name' => 'Problem',
        'slug' => str_slug('problem')
      ]);
    }
}
