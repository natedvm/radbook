<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User([
            'name' => 'Nate Miller',
            'password' => bcrypt('testing'),
            'admin' => true,
            'coordinator' => false,
            'doctor' => true,
            'email' => 'natedvm@gmail.com'
        ]);
        $user->save();
         $user = new \App\User([
            'name' => 'A coordinator',
            'password' => bcrypt('testing'),
            'admin' => false,
            'coordinator' => true,
            'doctor' => false,
             'email' => 'coord@gmail.com'
        ]);
        $user->save();
    }
}
