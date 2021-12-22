<?php

namespace Database\Seeders;

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
        User::create(


            // [
            //     'nid_number'=>'12345',
            //     'email'=>'admin@gmail.com',
            //     'phone_number'=>'0191567',
            //     'password'=>bcrypt('hira'),


            // ]
            // );
            [
                'first_name'=>'admin',
                'last_name'=>'panel',
                'nid_number'=>'12345',
                'email'=>'admin@gmail.com',
                'phone_number'=>'0191567',
                'gender'=>'female',
                'city'=>'dhaka',
                'country'=>'bangladesh',
                'address'=>'uttara',
                'password'=>bcrypt('hira'),
            ]
        );
    }
}
