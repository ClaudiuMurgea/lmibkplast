<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class Pyramid extends Component
{
    public $content;
    public $title = 'Bonus';

    public function mount($id = 'default')
    {

    }
    public function render()
    {
        return view('livewire.pages.pyramid');
    }
}
