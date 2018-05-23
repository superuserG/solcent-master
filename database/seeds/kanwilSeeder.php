<?php

use Illuminate\Database\Seeder;
use App\Kanwil;

class kanwilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Kanwil::create([
        'name' => 'Kantor Pusat',
        'slug' => str_slug('KP')
      ]);

      Kanwil::create([
        'name' => 'Kanwil 1',
        'slug' => str_slug('kanwil 1')
      ]);

      Kanwil::create([
        'name' => 'Kanwil 2',
        'slug' => str_slug('kanwil 2')
      ]);

      Kanwil::create([
        'name' => 'Kanwil 3',
        'slug' => str_slug('kanwil 3')
      ]);

      Kanwil::create([
        'name' => 'Kanwil 4',
        'slug' => str_slug('kanwil 4')
      ]);

      Kanwil::create([
        'name' => 'Kanwil 5',
        'slug' => str_slug('kanwil 5')
      ]);

      Kanwil::create([
        'name' => 'Kanwil 6',
        'slug' => str_slug('kanwil 6')
      ]);

      Kanwil::create([
        'name' => 'Kanwil 7',
        'slug' => str_slug('kanwil 7')
      ]);

      Kanwil::create([
        'name' => 'Kanwil 8',
        'slug' => str_slug('kanwil 8')
      ]);

      Kanwil::create([
        'name' => 'Kanwil 9',
        'slug' => str_slug('kanwil 9')
      ]);

      Kanwil::create([
        'name' => 'Kanwil 10',
        'slug' => str_slug('kanwil 10')
      ]);

      Kanwil::create([
        'name' => 'Kanwil 11',
        'slug' => str_slug('kanwil 11')
      ]);

      Kanwil::create([
        'name' => 'Kanwil 12',
        'slug' => str_slug('kanwil 12')
      ]);
    }
}
