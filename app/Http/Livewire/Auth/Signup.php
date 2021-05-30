<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Throwable;

class Signup extends Component
{   
    public $pageTitle = "Sign up";

    public $role = 'client';
    public $name = '';
    public $email = '';
    public $password = '';

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6',
    ];

    public function updated($field)
    {
        $this->validateOnly($field);
    }

    public function save()
    {
        $attr = $this->validate();

        try {
            User::create([
                'name' => $attr['name'],
                'email' => $attr['email'],
                'password' => Hash::make($attr['password']),
                'remember_token' => Str::random(10),
            ]);

            $this->dispatchBrowserEvent('notify', 'Registration Success');
            $this->reset();

            // Or redirect with return redirect()->route('something');

        } catch (Throwable $e) {
            $this->dispatchBrowserEvent('notify', $e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.auth.signup');
    }
}
