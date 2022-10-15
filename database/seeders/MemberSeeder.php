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

            [
                'name' => 'test4',
                'email' => 'test4@test.com',
                'tel' => '040-0000-0000',
                'password' => Hash::make('password123'),
                'created_at' => '2022/10/04 11:11:11'
            ],        

            [
                'name' => 'test5',
                'email' => 'test5@test.com',
                'tel' => '050-0000-0000',
                'password' => Hash::make('password123'),
                'created_at' => '2022/10/05 11:11:11'
            ],      
        
            [
                'name' => 'test6',
                'email' => 'test6@test.com',
                'tel' => '060-0000-0000',
                'password' => Hash::make('password123'),
                'created_at' => '2022/10/06 11:11:11'
            ],        
            [
                'name' => 'test7',
                'email' => 'test7@test.com',
                'tel' => '070-0000-0000',
                'password' => Hash::make('password123'),
                'created_at' => '2022/10/07 11:11:11'
            ],        
            [
                'name' => 'test8',
                'email' => 'test8@test.com',
                'tel' => '080-0000-0000',
                'password' => Hash::make('password123'),
                'created_at' => '2022/10/08 11:11:11'
            ],        
            [
                'name' => 'test9',
                'email' => 'test9@test.com',
                'tel' => '090-0000-0000',
                'password' => Hash::make('password123'),
                'created_at' => '2022/10/09 11:11:11'
            ],        
            [
                'name' => 'test10',
                'email' => 'test10@test.com',
                'tel' => '011-0000-0000',
                'password' => Hash::make('password123'),
                'created_at' => '2022/10/10 11:11:11'
            ],        

        ]);
    }
}
