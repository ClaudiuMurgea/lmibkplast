<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Config;
use App\Models\Page;
use Illuminate\Database\Eloquent\Collection;

class Cashout extends Component
{
    public $content;
    public $title = 'Bonus';
    public $property = [0];
    public $keyboard = false;
    public $message = false;
    public $searchTerm = "";

    public function mount($id = 'default')
    {

    }
    public function render()
    {

        // $mac = "00:2e:15:00:14:82";
        $mac = "00:1b:eb:54:74:44";
        $MasterIP=DB::connection('mysql_main')->select("select LmiPP.GetMasterIP() MasterIP")[0]->MasterIP;
        // $this->MasterIP = $MasterIP;
        config(['database.connections.mysql_master.host' => $MasterIP]);
        
        //$ceva = DB::connection('mysql_master')->select("select id ceva from PlayerTracking.location")[0]->ceva;


        // $lmiTable = DB::connection('mysql_master');
        $arrayToString = implode($this->property);
        $this->searchTerm = ltrim($arrayToString, '0');

        $test = Page::where('MaxInactiveMin', 'like', '%' . $this->searchTerm . '%')->paginate(10);
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

        // $products = Product::where(function($sub_query)
        // {
        //     $sub_query->where('Name', 'like', '%' . $this->searchTerm . '%');
        // })->paginate(10);

        // foreach ($products as $product) {
        //     if ($product->IsUsedBy == 'Dispenser') {
        //         $this->Dispenser[$product->Id] = 'Dispenser';
        //     } elseif ($product->IsUsedBy == 'Locker') {
        //         $this->Locker[$product->Id] = 'Locker';
        //     } elseif ($product->IsUsedBy == 'Both') {
        //         $this->Both[$product->Id] = 'Both';
        //         $this->Dispenser[$product->Id] = 'Dispenser';
        //         $this->Locker[$product->Id] = 'Locker';
        //     }
        // }
        // $allProducts   = Product::count();


        // return view('livewire.wine-dispenser.product.filter.filter', ['products' => $products, 'allProducts' => $allProducts]);

        // $searchTerm = $this->property;
        return view('livewire.pages.cashout', ['test' => $test]);
    }
    public function calculate($nr) 
    {
        if($nr == 'back') 
        {
           array_pop($this->property);

        } 
        elseif($nr == 'del')
        {
            $this->property = [0];
        } 
        else
        {
            if((count($this->property) < 10))
            {
                $this->property[] = $nr;
            } else {
                $this->message = "Maximum number of digits reached!";
            }
        }
    }
    public function showKeyboard()
    {
        $this->keyboard = true;
        $this->emit('slide', false);
    }
    public function hideKeyboard()
    {
        $this->keyboard = false;
        $this->emit('slide', true);

    }
    public function debug()
    {
        dd($this->property);
    }
}

