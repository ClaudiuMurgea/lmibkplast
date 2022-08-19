<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class ShowJackpot extends Component
{
    public $var = false;

    public function render()
    {
        return view('livewire.pages.show-jackpot');
    }
    public function save()
    {
        $this->emit('value', 'jackpots');
    }
}
