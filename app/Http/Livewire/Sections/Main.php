<?php

namespace App\Http\Livewire\Sections;

use App\Models\Page;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Main extends Component
{
    public $component;
    public $showThis;
    public $pid;
    public $points;
    public $showBack = false;
    public $times;

    protected $listeners = [
        'value'
    ];
    public function mount()
    {
        $this->component = 'jackpots';
    }
    public function render()
    {
        return view('livewire.sections.main');
    }
    public function ShowComponent($data) 
    {
        $this->component = $data;
        $this->emitTo('pages.show-jackpot','goBack');
    }
    public function back()
    {
        $this->emitTo('pages.show-jackpot','goBack');
        $this->showBack = false;

        // Livewire::listen('component.hydrate', function ($component, $request) {
        // $this->component = $data;
        // //
        // });
        // $this->showBack = false;
        // $this->redirect(request()->header('Referer'));
        // $this->times += 1; 

        // if ($this->times > 1) {
        // }
    }
  
    public function value($value)
    {
        $this->showBack = true;
        $this->showThis = $value;
        $this->component = $value;
    }
}
