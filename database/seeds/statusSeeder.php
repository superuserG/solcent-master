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
        'name' => 'In-Progress',
        'slug' => str_slug('in-progress')
      ]);
      Status::create([
        'name' => 'Completed',
        'slug' => str_slug('completed')
      ]);
      Status::create([
        'name' => 'Verified',
        'slug' => str_slug('verified')
      ]);
      Status::create([
        'name' => 'Escalation',
        'slug' => str_slug('escalation')
      ]);

    }
}
