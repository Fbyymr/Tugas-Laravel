@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
  
</div>

<main class="form-signin w-100 m-auto">
  <form action="/login" method="post">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" placeholder="Username">
      <label for="floatingInput">Username</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
    <button class="btn btn-primary w-100 py-2" type="submit">Log in</button>
  </form>
  <small class="d-block text-center mt-3">Not registered? <a href="/register">Register Now!</a></small>
</main>

@endsection