<?php

namespace App\Http\Livewire\Pages;

use App\Models\Page;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Jackpots extends Component
{
    public $content;
    public $title = 'Jackpots';
    public $test;
    public $jackpot;
    public $list;

    public function mount($id = 'default')
    {
        // \Cache::flush();

        // $data = \Cache::rememberForever('data', function() {
        //     return  $test = [ $this->pid, $this->points, $this->name ];
        // });
        // $this->pid = $data[0];
        // $this->points = $data[1];
        // $this->name = $data[2];

        if(isset($id)) {
            // $this->content = Page::first();
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
        // $this->emit('value', 'jackpots');
        $this->list = false;
    }
    public function save()
    {
        $this->emit('value', 'jackpots');
    }
}
