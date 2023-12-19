@extends('Layouts.Auth')

@section('auth-layout')
<div class="login-box">
   <div class="login-logo">
      <a href="#"><img class="rounded-circle w-25" src="{{ asset('Logo/logo-suniart.jpg') }}" alt="logo"></a>
      <p class="text-lg font-weight-bold">Sanggar Tari Bali D'Suniart</p>
   </div>
   <!-- /.login-logo -->
   <div class="card">
      <div class="card-body login-card-body">
         <p class="login-box-msg">Silakan registrasi untuk masuk ke sistem</p>

         <form action="{{ route('store.register') }}" method="POST">
            @csrf
            <div class="input-group mb-3">
               <input type="text" class="form-control @error('username') is-invalid @enderror" placeholder="username"
                  name="username" value="{{ old('username') }}">
               <div class="input-group-append">
                  <div class="input-group-text">
                     <span class="fas fa-user-lock"></span>
                  </div>
               </div>
               @error('username')
               <span class="invalid-feedback">{{ $message }}</span>
               @enderror
            </div>

            <div class="input-group mb-3">
               <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email"
                  name="email" value="{{ old('email') }}">
               <div class="input-group-append">
                  <div class="input-group-text">
                     <span class="fas fa-envelope"></span>
                  </div>
               </div>
               @error('email')
               <span class="invalid-feedback">{{ $message }}</span>
               @enderror
            </div>

            <div class="input-group mb-3">
               <input type="whatsapp" class="form-control @error('whatsapp') is-invalid @enderror"
                  placeholder="whatsapp" name="whatsapp" value="{{ old('whatsapp') }}">
               <div class="input-group-append">
                  <div class="input-group-text">
                     <span class="fab fa-whatsapp fa-lg"></span>
                  </div>
               </div>
               @error('whatsapp')
               <span class="invalid-feedback">{{ $message }}</span>
               @enderror
            </div>

            <div class="input-group mb-3">
               <input type="password" class="form-control @error('password') is-invalid @enderror"
                  placeholder="Password" name="password">
               <div class="input-group-append">
                  <div class="input-group-text">
                     <span class="fas fa-lock"></span>
                  </div>
               </div>
               @error('password')
               <span class="invalid-feedback">{{ $message }}</span>
               @enderror
            </div>

            <div class="input-group mb-3">
               <input type="password" class="form-control @error('password') is-invalid @enderror"
                  placeholder="Konfirmasi Password" name="password_confirmation">
               <div class="input-group-append">
                  <div class="input-group-text">
                     <span class="fas fa-lock"></span>
                  </div>
               </div>
            </div>

            <div class="row">
               <!-- /.col -->
               <div class="col-12 mt-2 mb-3">
                  <button type="submit" class="btn btn-dark btn-block">Sign Up</button>
               </div>
               <!-- /.col -->
            </div>
         </form>
         <!-- /.social-auth-links -->
         <div class="d-flex justify-content-center">
            <span class="text-sm">
               Sudah punya akun? <a href="/login">Login disini!</a>
            </span>
         </div>
      </div>
      <!-- /.login-card-body -->
   </div>
</div>
<!-- /.login-box -->
@endsection