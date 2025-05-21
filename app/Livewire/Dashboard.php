<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Auth;

#[Layout('livewire.layouts.app')]
class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.dashboard');
    }
}
