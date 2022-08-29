<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class ShowJackpot extends Component
{
    public $var = false;
    public $showJackpot = true;
    public $showAll = false;
    public $jackpotID;

    protected $listeners = ['goBack'];

    public function mount($ids) {
        $this->jackpotID = $ids;
    }
    public function render()
    {
        return view('livewire.pages.show-jackpot');
    }
    public function save()
    {
        $this->emit('value', 'jackpots');
        // $this->showJackpot = false;
        // $this->showAll = true;
    }
    public function goBack() {
        $this->showJackpot = false;
        $this->showAll = true;
    }
}
