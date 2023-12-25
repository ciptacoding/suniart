@extends('Layouts.Admin')

{{-- Add Button --}}
@section('add-button')
<h4>Detail Penyewaan</h4>
@endsection
{{-- Add Button --}}

{{-- Breadcrumb --}}
@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{ route('admin.penyewaan') }}">Penyewaan</a></li>
<li class="breadcrumb-item active" aria-current="page">Detail Penyewaan</li>
@endsection
{{-- Breadcrumb --}}

{{-- Main Page --}}
@section('admin-page')
<div class="row">
   <div class="card card-default col-lg-6">
      <div class="card-header">
         <h4 class="text-center mt-2">{{ $penyewaan->user->username }}</h4>
      </div>
      <!-- /.card-header -->

      <div class="p-4">
         <p>Stok Produk : {{ $penyewaan->subtotal }}</p>
         <p>Tanggal Sewa : {{ $penyewaan->tanggal_sewa }}</p>
         <p>Tanggal Kembali : {{ $penyewaan->tanggal_kembali }} }}</p>
         <p>Status : {{ {{ $penyewaan->status }} }}</p>
      </div>
   </div>
</div>
@endsection
{{-- Main Page --}}