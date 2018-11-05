<?php

use Illuminate\Database\Seeder;
use App\Employee;
use Faker\Factory;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Employee::create([
          'idemployee'=>Uuid::generate(4),
          'nip'=>'112233',
          'domain'=>'emp112233',
          'guestname'=>'employee 1',
          'jobtitle'=>'employee',
          'kanwil'=>'kanwil 12',
          'kcu'=>'asemka',
          'kcukcp'=>'asemka'
        ]);
    }
}
