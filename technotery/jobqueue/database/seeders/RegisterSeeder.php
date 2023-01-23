<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Register;


class RegisterSeeder extends Seeder
{
    /*seeder through entry*/
    public function run()
    {
       
        $register = new Register;
        $register->name = 'reena';
        $register->email = 'reena@gmail.com';
        $register->mobile ='9904154492';
        $register->pwd =\Hash::make('1234');
        $res = $register->save();
    }
}
