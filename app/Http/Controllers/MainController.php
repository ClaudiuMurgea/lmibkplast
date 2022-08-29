<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index() 
    {
        // $mac = "00:2e:15:00:14:82";
        
        // $getPID = DB::select("select LmiPP.MAC2PID('".$mac."') PID");
        // $PID=$getPID[0]->PID;
        $test = ["merchantId" => "SITM2202280707", "classId" => "01", "operationId" => "0600"];
        $encoded = json_encode($test);

        return view('welcome');
    }
    public function test(){
        $mac = "00:2e:15:00:14:832";
        $getPID = DB::select("select LmiPP.MAC2PID('".$mac."') PID");
        $PID=$getPID[0]->PID;

        if($PID > 0)
        {
            if(isset($result)) 
                $PID = $result;
            return $PID;
        }
        else
        {
            for($i = 0; $i <= 3; $i++) {

                $getPID = DB::select("select LmiPP.MAC2PID('".$mac."') PID");
                $PID=$getPID[0]->PID;
                $result = $PID;
                
                sleep(2);
            }
        }

    }
}
