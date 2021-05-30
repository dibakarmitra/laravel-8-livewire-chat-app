<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Chat;

class ChatBox extends Component
{   
    public $messages = '';

    public function render()
    {
        return view('livewire.chat-box');
    }
}
