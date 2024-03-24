@extends('layouts.main')

@section('container')
<div class="row justify-content-center">

  @if(session()->has('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif

<main class="form-registration w-100 m-auto">
  <form action="/register" method="post">
    @csrf
    <h1 class="h3 mb-3 fw-normal">Form Registration</h1>

    <div class="form-floating">
      <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="name" required value="{{ old('nama') }}">
      <label for="name">Name</label>
      @error('name')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="form-floating">
      <input type="text" name="username" class="form-control rounded-top @error('Username') is-invalid @enderror" id="username" placeholder="username" required value="{{ old('username') }}">
      <label for="username">Username</label>
      @error('username')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="form-floating">
      <input type="email" name="email" class="form-control rounded-top @error('Email address') is-invalid @enderror" id="Email adress" placeholder="name@example.com" required value="{{ old('email') }}">
      <label for="email">Email</label>
      @error('email')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control rounded-top @error('Password') is-invalid @enderror" id="password" placeholder="Password" required>
      <label for="password">Password</label>
      @error('password')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="form-floating">
      <input type="text" name="nama_lengkap" class="form-control rounded-top @error('nama_lengkap') is-invalid @enderror" id="nama_lengkap" placeholder="nama_lengkap" required value="{{ old('nama_lengkap') }}">
      <label for="nama_lengkap">Nama lengkap</label>
      @error('nama_lengkap')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="form-floating">
      <input type="text" name="alamat" class="form-control rounded-top @error('alamat') is-invalid @enderror" id="alamat" placeholder="alamat" required value="{{ old('alamat') }}">
      <label for="alamat">Alamat</label>
      @error('alamat')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Register</button>
  </form>
  <small class="d-block text-center mt-3">Already registered? <a href="/login">login</a></small>
</main>

@endsection