<?php

namespace App\Http\Livewire\Chat;

use Livewire\Component;
use App\Models\Chat;
use App\Models\User;
use App\Models\Room;
use Illuminate\Support\Facades\Auth;

class MessageShow extends Component
{   
    public $messages = '';
    public $rooms = '';
    public $reciever_id = '';

    public function mount($reciever_id) {

        $this->messages = Chat::where('user_id', Auth::id())
                                ->orWhere('user_id', $reciever_id)
                                ->orderBy('created_at', 'ASC')
                                ->get();
    }
    public function render()
    {   
        return view('livewire.chat.message-show', ['messages', $this->messages]);
    }

    public function getUser($user_id) 
    {
        $this->clicked_user = User::find($user_id);
        $this->messages = Chat::where('user_id', $user_id)->get();
    }

}
