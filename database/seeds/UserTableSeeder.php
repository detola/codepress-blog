<?php

use Illuminate\Database\Seeder;


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
        App\User::create([
            'name' => 'Detola Ali',
            'email' => trim('example@gmail.com'),
            'password' => \Hash::make('password'),
            'role_id' => 1,
            'is_active' => 1,
        ]);
    }
}
