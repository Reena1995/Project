<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Register;
use Faker\Factory as Faker;

class sendDataJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $faker=Faker::create();

        for($i=1;$i<=10;$i++)
        { 
            $register = new Register;
            $register->name =$faker->name;
            $register->email =$faker->email;
            $register->mobile =$faker->numerify('###-###-####');
            $register->password =\Hash::make($faker->password);
            $res = $register->save();
        }
    }
}
