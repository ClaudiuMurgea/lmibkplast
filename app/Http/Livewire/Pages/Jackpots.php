<?php

namespace App\Http\Livewire\Pages;

use App\Models\Page;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Jackpots extends Component
{
    public $title = 'Jackpots';
    public $jackpot;
    public $list;

    public function mount($id = 'default')
    {
        if(isset($id)) {
            //
        }
        $this->jackpot = '';
        $this->list = true;
    }
    public function render()
    {
        return view('livewire.pages.jackpots');
    }
    public function showJackpot($jackpot)
    {
        $this->jackpot = $jackpot;
        $this->emit('value', 'jackpots');
        $this->list = false;
    }
    public function save()
    {
        $this->emit('value', 'jackpots');
    }
}
