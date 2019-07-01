<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id'=>'1',
            'fname'=> 'Md',
            'lname'=> 'Admin',
            'email'=> 'admin@localhost.local',
            'phone'=> '01773700970',
            'address'=> 'Shyamoli ',
            'bdate'=> '9999-12-31 23:59:59',
            'password'=> bcrypt('admin'),

            ]);

        DB::table('users')->insert([
            'role_id'=>'2',
            'fname'=> 'Pranta',
            'lname'=> 'Roy',
            'email'=> 'pranta@gmail.com',
            'phone'=> '01973700970',
            'address'=> 'Shyamoli',
            'bdate'=> '9999-12-31 23:59:59',
            'password'=> bcrypt('12345678'),

        ]);
    }
}
