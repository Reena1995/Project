<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Regi;
use Faker\Factory as Faker;

class RegiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();

        for($i=1;$i<=10;$i++)
        { 
            $register = new Regi;
            $register->name =$faker->name;
            $register->email =$faker->email;
            $register->mobile =$faker->numerify('###-###-####');
            $register->pwd =\Hash::make($faker->password);
            $res = $register->save();
        }
        
    }
}
