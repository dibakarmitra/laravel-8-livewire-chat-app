<?php

namespace App\Http\Livewire\Chat;

use Livewire\Component;
use App\Models\User;
use App\Models\Chat;

class ParticipantsShow extends Component
{
    public $participants = '';
    public $reciever_name = '';
    public $showMessage = '';
    public $reciever_id = 0;

    public function mount() {
        $this->participants = User::all();
        $this->reciever_id;
    }
    
    public function showChat($id) {
        $chat = Chat::find($id);
        $this->chat = $chat;
        $this->emit('newChat', $chat->id);
    }

    
    public function render()
    {
        return view('livewire.chat.participants-show', [
            'participants' => $this->participants,
            'reciever_id' => $this->reciever_id,

            ]);
    }
}
