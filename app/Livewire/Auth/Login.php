<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use App\Repositories\AuthRepository;
use Livewire\Attributes\Layout; // ✅ Correct for Livewire 4
use Illuminate\Support\Facades\Auth;

#[Layout('layouts.app')]
class Login extends Component
{
    public $email, $password;

    public function login(AuthRepository $authRepo)
    {
        try {
            $result = $authRepo->login($this->email, $this->password);
            session(['user' => $result['user'], 'token' => $result['token']]);
            Auth::login($result['user']);
            return redirect('/dashboard');
        } catch (\Illuminate\Validation\ValidationException $e) {
            $this->addError('email', 'Invalid credentials.');
        }
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
