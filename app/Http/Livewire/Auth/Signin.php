<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Signin extends Component
{   
    public $pageTitle = "Login";

    public $email = '';
    public $password = '';

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required'
    ];

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function login()
    {
        $attr = $this->validate();

        if (Auth::attempt($attr)) {
            return redirect()->route('home');
        }

        $this->dispatchBrowserEvent('notify', 'Login Failed');
        $this->reset(['password']);
    }

    public function render()
    {
        return view('livewire.auth.signin');
    }
}
