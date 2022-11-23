<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ReturnComponent extends Component
{
    public function render()
    {
        return view('livewire.return-component')->layout('layouts.base');
    }
}
