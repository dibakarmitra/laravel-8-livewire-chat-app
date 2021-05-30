<?php

namespace App\Http\Livewire\Chat;

use Livewire\Component;
use App\Models\Chat;
use Illuminate\Support\Facades\Auth;
use Throwable;

class MessageCreate extends Component
{
    public $user_id = '';
    public $message = '';
    public $reciever_id = '';

    protected $rules = [
        'message' => 'required|max:255',
    ];

    public function updated ($field)
    {
        $this->validateOnly($field);
    }

    public function sendMessage ()
    {
        $attr = $this->validate();
        if (Auth::check()) {
            try {
                Chat::create([
                    'user_id' => Auth::id(),
                    'message' => $attr['message'],
                    'reciever_id' => $this->reciever_id,
                ]);

                $this->dispatchBrowserEvent('notify', 'message send');
                $this->reset();

            } catch (Throwable $e) {
                $this->dispatchBrowserEvent('notify', $e->getMessage());
            }
        } else {
            $this->dispatchBrowserEvent('notify', 'error sending message');
            $this->reset();
        }
    }

    public function render()
    {
        return view('livewire.chat.message-create');
    }
}
