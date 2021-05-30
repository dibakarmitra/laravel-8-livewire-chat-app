<div class="type_msg">
  <form wire:submit.prevent="sendMessage" class="input_msg_write">
    <input wire:model.lazy="message" type="text" class="write_msg" placeholder="Type a message" />
    @error('text')
    <p class="text-sm text-red-500 text-center error-message">{{$message}}</p>
    @enderror
    <button class="msg_send_btn" type="submit"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
  </form>
</div>