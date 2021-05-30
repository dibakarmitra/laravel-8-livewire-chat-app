<form wire:submit.prevent="save">
  <h1 class="h3 mb-3 fw-normal">Please sign up</h1>
  <div class="form-floating">
    <input wire:model.lazy="name" type="name" class="form-control" id="floatingInput" placeholder="Your Full Name">
    <label for="floatingInput">Full Name</label>
    @error('name')
    <p class="text-sm text-red-500 text-center error-message">{{$message}}</p>
    @enderror
  </div>
  <div class="form-floating">
    <input wire:model.lazy="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
    <label for="floatingInput">Email address</label>
    @error('email')
    <p class="text-sm text-red-500 text-center error-message">{{$message}}</p>
    @enderror
  </div>
  <div class="form-floating">
    <input wire:model.lazy="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
    <label for="floatingPassword">Password</label>
    @error('password')
    <p class="text-sm text-red-500 text-center error-message">{{$message}}</p>
    @enderror
  </div>
  <button class="w-100 btn btn-lg btn-primary" type="submit">Sign Up</button>
  <x-notify />

  <!-- <p class="mt-5 mb-3 text-muted">© 2017–2021</p> -->
</form>