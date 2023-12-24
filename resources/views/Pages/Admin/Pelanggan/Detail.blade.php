@extends('Layouts.Admin')

{{-- Add Button --}}
@section('add-button')
<h4>Detail Pelanggan</h4>
@endsection
{{-- Add Button --}}

{{-- Breadcrumb --}}
@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{ route('admin.pelanggan') }}">Data Pelanggan</a></li>
<li class="breadcrumb-item active" aria-current="page">Detail Pelanggan</li>
@endsection
{{-- Breadcrumb --}}

{{-- Main Page --}}
@section('admin-page')
<div class="row">
   <div class="card card-default col-xl-6">
      <div class="p-1 p-lg-4 row">
         <div class="col-lg-3">
            <div class="image">
               @if (Auth::user()->foto)
               <img src="{{ asset('storage/profiles/' . Auth::user()->foto) }}" style="height: 100px; object-fit:cover"
                  class="overflow-hidden rounded-lg" alt="user-image">
               @else
               <img src="{{ asset('img/person.png') }}" style="height: 100px; object-fit:cover"
                  class="overflow-hidden rounded-lg" alt="user-image">
               @endif
            </div>
         </div>
         <div class="col-lg-9">
            <div class="row">
               <span class="col-5 col-lg-4">Username</span>
               <span class="col-7 col-lg-8">: {{ $user->username }}</span>
            </div>
            <div class="row">
               <span class="col-5 col-lg-4">Email</span>
               <span class="col-7 col-lg-8">: {{ $user->email }}</span>
            </div>
            <div class="row">
               <span class="col-5 col-lg-4">Whatsapp</span>
               <span class="col-7 col-lg-8">: {{ $user->whatsapp }}</span>
            </div>
            <div class="row">
               <span class="col-5 col-lg-4">Jenis Kelamin</span>
               <span class="col-7 col-lg-8">: {{ $user->jenis_kelamin }}</span>
            </div>
            <div class="row">
               <span class="col-5 col-lg-4">Status</span>
               <div class="col-7 col-lg-8">
                  :
                  <span class="{{ $user->status === 1 ? 'badge badge-success' : 'badge badge-danger' }}">
                     {{ $user->status === 1 ? 'Aktif' : 'Nonaktif' }}
                  </span>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
{{-- Main Page --}}