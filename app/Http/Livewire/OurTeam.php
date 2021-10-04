<?php

namespace App\Http\Livewire;

use Livewire\Component;

class OurTeam extends Component
{
    public function render()
    {
        return view('livewire.our-team')->layout('layouts.app');
    }
}
