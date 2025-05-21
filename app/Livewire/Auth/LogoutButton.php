<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Livewire\Attributes\Layout; // ✅ Correct for Livewire 4

// #[Layout('liewire.layouts.app')]
class LogoutButton extends Component
{
    public function logout()
    {
        session::flush();
        Auth::logout();
        return redirect('/login');
    }

    public function render()
    {
        return view('livewire.auth.logout-button');
    }
}
