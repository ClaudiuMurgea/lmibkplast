<?php

namespace App\Http\Livewire\Pages;

use App\Models\Page;
use App\Models\Test;
use Livewire\Component;

class Market extends Component
{
    public $content;
    public $title = 'Market';
    public $test;
    public $nr = 2;

    public function mount($id = 'default')
    {
        if(isset($id)) {
            // $this->content = Page::first();
        }
        $this->test = Test::all();
    }
    public function render()
    {
        return view('livewire.pages.market');
    }
    public function lower($amt) {
        $this->emitTo('sections.header','golow', $amt);
    }
}
