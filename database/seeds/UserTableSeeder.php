<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
          'iduser'=>Uuid::generate(4),
          'name'=>'Admin',
          'email'=>'admin@solcent.com',
          'password'=>bcrypt('admin'),
          'role'=>'admin',
        ]);

        User::create([
          'iduser'=>Uuid::generate(4),
          'name'=>'User 1',
          'email'=>'user1@solcent.com',
          'password'=>bcrypt('123456'),
          'role'=>'user',
        ]);
    }
}
