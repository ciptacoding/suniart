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
         <p class="login-box-msg">Silakan sign in untuk masuk ke sistem</p>

         <form action="{{ route('authenticate') }}" method="POST">
            @csrf
            <div class="input-group mb-3">
               <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email"
                  name="email">
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
               <input type="password" class="form-control" placeholder="Password" name="password">
               <div class="input-group-append">
                  <div class="input-group-text">
                     <span class="fas fa-lock"></span>
                  </div>
               </div>
            </div>
            <div class="row">

               <!-- /.col -->
               <div class="col-12 mt-2 mb-3">
                  <button type="submit" class="btn btn-dark btn-block">Sign In</button>
               </div>
               <!-- /.col -->
            </div>
         </form>
         <!-- /.social-auth-links -->
         <div class="d-flex justify-content-center">
            <span class="text-sm">
               Belum punya akun? <a href="/register">Registrasi disini!</a>
            </span>
         </div>
      </div>
      <!-- /.login-card-body -->
   </div>
</div>
<!-- /.login-box -->
@endsection