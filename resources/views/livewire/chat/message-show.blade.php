<div class="mesgs">
    <div class="msg_history" wire:poll>
    @auth
        @foreach ($messages as $message)
        @if(($message->user_id == $reciever_id) && ($message->reciever_id == Auth::user()->id))
        <div class="incoming_msg">
            <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
            <div class="received_msg">
                <div class="received_withd_msg">
                    <p>{{$message->message}}</p>
                    <span class="time_date">{{$message->created_at->diffForHumans()}}</span>
                </div>
            </div>
        </div>
        @endif
        @if(($message->user_id == Auth::user()->id) && ($message->reciever_id == $reciever_id))
        <div class="outgoing_msg">
            <div class="sent_msg">
                <p>{{$message->message}}</p>
                <span class="time_date">{{$message->created_at->diffForHumans()}}</span>
            </div>
        </div>
        @endif
        @endforeach
    @endauth
    </div>
    @livewire('chat.message-create', ['reciever_id' => $reciever_id])
</div>