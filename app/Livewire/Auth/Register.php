<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use App\Repositories\AuthRepository;
use Livewire\Attributes\Layout; // ✅ Correct for Livewire 4

#[Layout('layouts.app')]
class Register extends Component
{
    public $name, $email, $password;

    public function register(AuthRepository $authRepo) {

        $data = [
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
        ];

        $result = $authRepo->register($data);

        session(['user' => $result['user'], 'token' => $result['token']]);

        return redirect('/dashboard');
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
