<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProjectsPage extends Component
{
    public function render()
    {
        return view('livewire.projects-page')->layout('layouts.app');
    }
}
