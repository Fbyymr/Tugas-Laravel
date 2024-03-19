@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
  
</div>

<main class="form-registration w-100 m-auto">
  <form>
    <h1 class="h3 mb-3 fw-normal">Form Registration</h1>

    <div class="form-floating">
      <input type="text" name="name" class="form-control" id="name" placeholder="name">
      <label for="name">Name</label>
    </div>
    <div class="form-floating">
      <input type="text" name="username" class="form-control" id="username" placeholder="username">
      <label for="username">Username</label>
    </div>
    <div class="form-floating">
      <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
      <label for="email">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="password" placeholder="Password">
      <label for="password">Password</label>
    </div>
    <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Register</button>
  </form>
  <small class="d-block text-center mt-3">Already registered? <a href="/login">login</a></small>
</main>

@endsection