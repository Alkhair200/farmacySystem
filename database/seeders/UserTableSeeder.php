<?php

namespace Database\Seeders;

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
        $user = \App\Models\User::create([

            'first_name' => 'super',
            'last_name'  => 'admin',
            'email'      => 'super_admin@gmail.com',
            'address'    => 'Khartoum',
            'mobile'     => '0920016568',
            'gender'     => 'mal',
            'UserJob'    => 'doctor',
            'password'   =>bcrypt('123456') ,
        ]);

        $user->attachRole('super_admin');

    } // end of run

} // end of seeder
