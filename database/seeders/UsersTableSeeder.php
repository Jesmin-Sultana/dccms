<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

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
            [
                'first_name'=>'admin',
                'last_name'=>'panel',
                'nid_number'=>'12345',
                'email'=>'admin.panel@gmail.com',
                'phone_number'=>'0191567',
                'gender'=>'female',
                'city'=>'dhaka',
                'country'=>'bangladesh',
                'address'=>'uttara',
                'password'=>bcrypt('hira'),
                'role'=>'admin'

            ]
        );
    }
}
