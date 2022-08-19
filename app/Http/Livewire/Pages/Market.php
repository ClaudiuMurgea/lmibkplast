<?php

namespace App\Http\Livewire\Pages;

use App\Models\Page;
use Livewire\Component;

class Market extends Component
{
    public $content;
    public $title = 'Market';

    public function mount($id = 'default')
    {
        if(isset($id)) {
            // $this->content = Page::first();
        }
    }
    public function render()
    {
        return view('livewire.pages.market');
    }
}
