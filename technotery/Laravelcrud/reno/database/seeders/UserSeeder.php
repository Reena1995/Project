<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([            
            // 'id' => 1,
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' =>\Hash::make('admin@gmail.com'),
            'role_id' =>'1',
            'is_active' =>'1',
        ]);
        \DB::table('users')->insert([ 
            // 'id' => 2,
            'name' => 'riya',
            'email' => 'riya@gmail.com',
            'password' =>\Hash::make('riya@gmail.com'),
            'role_id' =>'2',
            'is_active' =>'1',
            
        ]);
    }
}
