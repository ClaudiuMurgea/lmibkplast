<?php

namespace App\Http\Livewire\Sections;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Header extends Component
{
    public $pid;
    public $points;
    public $name;
    public $data;
    public $MasterIP;
    public $readyToLoad = false;

    public function mount() {
        // $mac = "00:2e:15:00:14:82";
        // $mac = "00:1b:eb:54:74:44";
        // $getMasterIP = DB::connection('mysql_main')->select("select LmiPP.GetMasterIP() MasterIP");
        // $MasterIP=$getMasterIP[0]->MasterIP;
        // $this->MasterIP = $MasterIP;
        // config(['database.connections.mysql_master.host' => $MasterIP]);

        // $getPID = DB::connection('mysql_main')->select("select LmiPP.MAC2PID('".$mac."') PID");
        // $PID=$getPID[0]->PID;
        // $this->pid = $PID;

        // $getPoints = DB::connection('mysql_master')->select("select lmi.GetMasterOnlyB1Points('".$PID."') Points");
        // $points = $getPoints[0]->Points;
        // $this->points = $points;

        // $getName = DB::connection('mysql_main')->select("select lmi.GET_PLAYER_NAME('".$PID."') Points");
        // $this->name = $getName[0]->Points;

        // \Cache::flush();

        // $data = \Cache::rememberForever('data', function() {
        //     return  $test = [ $this->pid, $this->points, $this->name ];
        // });
        // $this->pid = $data[0];
        // $this->points = $data[1];
        // $this->name = $data[2];
    }
    public function render()
    {
        return view('livewire.sections.header');
    }
}
