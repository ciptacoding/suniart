@extends('Layouts.Admin')

{{-- Add Button --}}
@section('add-button')
<h4>Detail Produk</h4>
@endsection
{{-- Add Button --}}

{{-- Breadcrumb --}}
@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{ route('admin.produk') }}">Produk</a></li>
<li class="breadcrumb-item active" aria-current="page">Detail Produk</li>
@endsection
{{-- Breadcrumb --}}

{{-- Main Page --}}
@section('admin-page')
<div class="row">
   <div class="card card-default col-lg-6">
      <div class="card-header">
         <h4 class="text-center mt-2">{{ $produk->nama_produk }}</h4>
      </div>
      <!-- /.card-header -->

      <div class="p-4">
         <div class="d-flex justify-content-center mb-2">
            <img src="{{ asset('storage/produk/'.$produk->foto) }}" style="height: 150px;" alt="produk">
         </div>
         <p>Kode Produk : {{ $produk->kode_produk }}</p>
         <p>Stok Produk : {{ $produk->stok }} Pcs</p>
         <p>Harga Produk : {{ 'Rp. ' . number_format($produk->harga, 0, ',', '.') }}</p>
         <p>Deskripsi : {!! $produk->deskripsi !!}</p>
      </div>
   </div>
</div>
@endsection
{{-- Main Page --}}