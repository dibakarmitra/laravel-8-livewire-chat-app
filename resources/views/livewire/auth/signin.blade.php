<main class="container min-h-screen row justify-content-center align-items-center my-3 bg-gray-100 text-center form-signin signin">
<form class="col-12" wire:submit.prevent="login">
  <svg xmlns="http://www.w3.org/2000/svg" width="72" height="57" fill="currentColor" class="bi bi-person mb-4" viewBox="0 0 16 16">
    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
  </svg>

  <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

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
  </div>

  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember" checked> Remember me
    </label>
  </div>
  <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
  <x-notify /> -->

  <!-- <p class="mt-5 mb-3 text-muted">© 2017–2021</p> -->
</form>
</main>