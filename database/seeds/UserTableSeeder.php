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
          'nip'=>'2222222',
          'email'=>'admin@solcent.com',
          'profilepicture'=>'admin.jpg',
          'password'=>bcrypt('admin'),
          'kanwil'=>'Kantor Pusat',
          'kcu'=>'Kantor Pusat',
          'kcukcp'=>'Kantor Pusat',
          'role'=>'admin',
        ]);

        User::create([
          'iduser'=>Uuid::generate(4),
          'name'=>'User 1',
          'nip'=>'3333333',
          'email'=>'user1@solcent.com',
          'profilepicture'=>'admin.jpg',
          'password'=>bcrypt('123456'),
          'kanwil'=>'Kantor Pusat',
          'kcu'=>'Kantor Pusat',
          'kcukcp'=>'Kantor Pusat',
          'role'=>'user',
        ]);
    }
}
