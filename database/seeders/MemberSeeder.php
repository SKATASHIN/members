<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert([
            [
                'name' => 'test',
                'email' => 'test@test.com',
                'tel' => '010-0000-0000',
                'password' => Hash::make('password123'),
                'created_at' => '2022/10/01 11:11:11'
            ],

            [
                'name' => 'test2',
                'email' => 'test2@test.com',
                'tel' => '020-0000-0000',
                'password' => Hash::make('password123'),
                'created_at' => '2022/10/02 11:11:11'
            ],
            
            [
                'name' => 'test3',
                'email' => 'test3@test.com',
                'tel' => '030-0000-0000',
                'password' => Hash::make('password123'),
                'created_at' => '2022/10/03 11:11:11'
            ],        

        ]);
    }
}
