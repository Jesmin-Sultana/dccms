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
                'name'=>'admin',
                // 'last_name'=>'panel',
                'nid_number'=>'2233456789',
                'email'=>'admin.panel21@gmail.com',
                'phone_number'=>'01915673416',
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
