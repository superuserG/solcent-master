<?php

use Illuminate\Database\Seeder;
use App\Service;

class serviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Service::create([
          'service' => 'KlikBCA Bisnis',
          'slug' => str_slug('kbb')
        ]);
        Service::create([
          'service' => 'Operator',
          'slug' => str_slug('operator')
        ]);
        Service::create([
          'service' => 'Rekening',
          'slug' => str_slug('rekening')
        ]);
        Service::create([
          'service' => 'E-Channel',
          'slug' => str_slug('e-channel')
        ]);
        Service::create([
          'service' => 'Kartu ATM',
          'slug' => str_slug('kartu ATM')
        ]);
    }
}
