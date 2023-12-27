@extends('Layouts.Customer')

@push('styles')
<style>
   .custom-section {
      margin: 0 auto;
   }

   .custom-card {
      display: flex;
      gap: 16px;
      justify-content: center;
      flex-wrap: wrap;
   }

   .custom-thumbnail {
      object-fit: contain;
      height: 180px;
   }
</style>
@endpush

@section('customer-page')
<h6 class="text-center text-xl mt-5">Search Produk</h6>
<div class="row">
   <div class="col-md-8 offset-md-2">
      <form action="simple-results.html">
         <div class="input-group">
            <input type="search" class="form-control form-control-lg" placeholder="Type your keywords here">
            <div class="input-group-append">
               <button type="submit" class="btn btn-lg btn-default">
                  <i class="fa fa-search"></i>
               </button>
            </div>
         </div>
      </form>
   </div>
</div>

<section class="row"></section>

<section class="mt-4 custom-section">
   <div class="row custom-card">
      @foreach ($produks as $produk)
      <div class="card col-11 col-sm-5 col-md-4 col-xl-3" style="width: 18rem;">
         <img src="{{ asset('storage/produk/'.$produk->foto) }}" class="card-img-top custom-thumbnail" alt="...">
         <div class="card-body">
            <h5 class="card-title font-weight-bold">{{ $produk->nama_produk }}</h5>
            <p class="card-text">{!! Str::limit($produk->deskripsi, 50, '...') !!}</p>
            <p class="card-text font-weight-bolder">{{ 'Rp. ' . number_format($produk->harga, 0, ',', '.') }}</p>
            <a href="#" class="btn btn-primary w-100">+ Keranjang</a>
         </div>
      </div>
      @endforeach
   </div>

</section>
@endsection