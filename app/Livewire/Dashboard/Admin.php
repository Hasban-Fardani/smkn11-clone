<?php

namespace App\Livewire\Dashboard;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Admin extends Component
{
    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.dashboard.admin');
    }
}
