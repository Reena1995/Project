<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Crone;

class CroneSendJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $fileName;

    public function __construct($file_name)
    {
        $this->fileName=$file_name;
        
    }

    
    public function handle()
    {
        $fileName = $this->fileName['fileName'];
       
        $cronedata = [];
        if(($open = fopen($fileName,"r")) !== FALSE)
        {
            $header = false;
             while(($data = fgetcsv($open,",")) !== FALSE)
             {
                if(!$header){
                    $header = true;
                }else{
                    $cronedata = $data;

                    $crone = new Crone;
                    $crone->name = $cronedata['0'];
                    $crone->email =  $cronedata['1'];
                    $crone->mobile =  $cronedata['2'];
                    $crone->password =  $cronedata['3'];
                    $res = $crone->save();
                }
             }
             fclose($open);
        }
 
    }
}
