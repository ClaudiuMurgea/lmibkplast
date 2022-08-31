<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class Autolevel extends Component
{
    public $content;
    public $title = 'Bonus';
    public $encoded;


    public function mount($id = 'default')
    {


        //$test = "{merchantId: \"SITM2202280707\",classId: \"01\",operationId: \"0600\",other: {merchantInfo: \"clasic\",extSysData: \"2 00:1b:eb:96:6f:cc\"}}";
        $test='{"merchantId":"SITM2202280707","classId":"01","operationId":"0600","other":{"merchantInfo":"clasic","extSysData":"2 00:1b:eb:96:6f:cc"}}';
        // $test = ["merchantId" => "SITM2202280707", "classId" => "01", "operationId" => "0600"];

        // $this->encoded =  \QrCode::size(120)
        // ->generate('{"merchantId":"SITM2202280707","classId":"01","operationId":"0600","other":{"merchantInfo":"clasic","extSysData":"2 00:1b:eb:96:6f:cc"}}');
        $this->encoded = $test;//json_encode($test);
        //dd($this->encoded);
        // dd($this->encoded);
    }
    public function render()
    {
        return view('livewire.pages.autolevel');
    }
}
