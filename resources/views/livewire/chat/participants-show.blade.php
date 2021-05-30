<div class="inbox_msg">
  <div class="inbox_people">
    <div class="headind_srch">
      <div class="recent_heading">
        <h4>Recent</h4>
      </div>
      <div class="srch_bar">
        <div class="stylish-input-group">
          <input type="text" class="search-bar" placeholder="Search">
          <span class="input-group-addon">
            <button type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
          </span>
        </div>
      </div>
    </div>
    <div class="inbox_chat">
      @foreach ($participants as $participant)
      @if(Auth::user()->id != $participant->id)
      <div class="chat_list 
          @if ($participant->id == Auth::user()->id)
          active_chat
          @endif
          ">
        <div class="chat_people">
          <a href="#" wire:click="$set('showMessage', {{$participant->id}})">
            <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
            <div class="chat_ib">
              <h5> {{$participant->name}} <span class="chat_date">Dec 25</span></h5>
              <p>Test, which is a new approach to have all solutions
                astrology under one roof.</p>
            </div>
          </a>
        </div>
      </div>
      @endif
      @endforeach
    </div>
  </div>
  <h1>
  </h1>
  @if ($showMessage > 0)
  @livewire('chat.message-show',[
  'reciever_id' => $showMessage,
  ])
  @endif
</div>