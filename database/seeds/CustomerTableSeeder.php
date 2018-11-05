<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Factory;
use App\Customer;
class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Factory::create();

        $users = User::get();
        foreach ($users as $user) {
          // code...
          Customer::create([
            'iduser'=>$user->iduser,
            'idcustomer'=>Uuid::generate(4),
            'NIP'=>rand(),
            'status'=>'ACTIVE',
          ]);
        }
    }
}
