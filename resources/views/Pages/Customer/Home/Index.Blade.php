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
<h6 class="text-center font-weight-bold text-lg mt-5">Cari Produk</h6>
<div class="row">
   <div class="col-md-6 offset-md-3">
      <form action="simple-results.html">
         <div class="input-group">
            <input type="search" name="search" class="form-control form-control-lg"
               placeholder="Type your keywords here">
            <div class="input-group-append">
               <button type="submit" class="btn btn-lg btn-default">
                  <i class="fa fa-search"></i>
               </button>
            </div>
         </div>
      </form>
   </div>
</div>

<section class="mt-2">
   <h6 class="text-lg font-weight-bold">Kategori Produk</h6>
   <div class="row">
      <div class="col-md-3 col-sm-6 col-12">
         <div class="info-box">
            <span class="info-box-icon bg-info"><i class="fas fa-tags"></i></span>

            <div class="info-box-content">
               <span class="info-box-number">Tari <br> Rejang Dewa</span>
            </div>
            <!-- /.info-box-content -->
         </div>
         <!-- /.info-box -->
      </div>
      <div class="col-md-3 col-sm-6 col-12">
         <div class="info-box">
            <span class="info-box-icon bg-info"><i class="fas fa-tags"></i></span>

            <div class="info-box-content">
               <span class="info-box-number">Tari <br> Sekar Jagat</span>
            </div>
            <!-- /.info-box-content -->
         </div>
         <!-- /.info-box -->
      </div>
      <div class="col-md-3 col-sm-6 col-12">
         <div class="info-box">
            <span class="info-box-icon bg-info"><i class="fas fa-tags"></i></span>

            <div class="info-box-content">
               <span class="info-box-number">Tari <br> Cilinaya</span>
            </div>
            <!-- /.info-box-content -->
         </div>
         <!-- /.info-box -->
      </div>
      <div class="col-md-3 col-sm-6 col-12">
         <div class="info-box">
            <span class="info-box-icon bg-info"><i class="fas fa-tags"></i></span>

            <div class="info-box-content">
               <span class="info-box-number">Tari <br> Kembang Girang</span>
            </div>
            <!-- /.info-box-content -->
         </div>
         <!-- /.info-box -->
      </div>
      <div class="col-md-3 col-sm-6 col-12">
         <div class="info-box">
            <span class="info-box-icon bg-info"><i class="fas fa-tags"></i></span>

            <div class="info-box-content">
               <span class="info-box-number">Tari <br> Condong</span>
            </div>
            <!-- /.info-box-content -->
         </div>
         <!-- /.info-box -->
      </div>
      <div class="col-md-3 col-sm-6 col-12">
         <div class="info-box">
            <span class="info-box-icon bg-info"><i class="fas fa-tags"></i></span>

            <div class="info-box-content">
               <span class="info-box-number">Tari <br> Sekar Pucuk</span>
            </div>
            <!-- /.info-box-content -->
         </div>
         <!-- /.info-box -->
      </div>
      <div class="col-md-3 col-sm-6 col-12">
         <div class="info-box">
            <span class="info-box-icon bg-info"><i class="fas fa-tags"></i></span>

            <div class="info-box-content">
               <span class="info-box-number">Tari <br> Cendrawasih</span>
            </div>
            <!-- /.info-box-content -->
         </div>
         <!-- /.info-box -->
      </div>
      <div class="col-md-3 col-sm-6 col-12">
         <div class="info-box">
            <span class="info-box-icon bg-info"><i class="fas fa-tags"></i></span>

            <div class="info-box-content">
               <span class="info-box-number">Tari <br> Sisya</span>
            </div>
            <!-- /.info-box-content -->
         </div>
         <!-- /.info-box -->
      </div>
      <div class="col-md-3 col-sm-6 col-12">
         <div class="info-box">
            <span class="info-box-icon bg-info"><i class="fas fa-tags"></i></span>

            <div class="info-box-content">
               <span class="info-box-number">Tari <br> Puspanjali</span>
            </div>
            <!-- /.info-box-content -->
         </div>
         <!-- /.info-box -->
      </div>
      <div class="col-md-3 col-sm-6 col-12">
         <div class="info-box">
            <span class="info-box-icon bg-info"><i class="fas fa-tags"></i></span>

            <div class="info-box-content">
               <span class="info-box-number">Tari <br> Pendet</span>
            </div>
            <!-- /.info-box-content -->
         </div>
         <!-- /.info-box -->
      </div>
   </div>
</section>

<section class="mt-4 custom-section">
   <h6 class="font-weight-bold text-lg text-center mt-2">Semua Daftar Produk</h6>
   <div class="row custom-card" style="margin-top: 20px !important;">
      @foreach ($produks as $produk)
      <div class="card col-11 col-sm-5 col-md-4 col-xl-3" style="width: 18rem;">
         <a href="{{ route('customer.produk.detail', $produk->id) }}" style="text-decoration: none; color: inherit;">
            <img src="{{ asset('storage/produk/'.$produk->foto) }}" class="card-img-top custom-thumbnail" alt="...">
            <div class="card-body">
               <h5 class="card-title font-weight-bold">{{ $produk->nama_produk }}</h5>
               <p class="card-text">{!! Str::limit($produk->deskripsi, 50, '...') !!}</p>
               <p style="margin-top: -10px !important;" class="card-text font-weight-bolder mb-1">{{ 'Rp. ' .
                  number_format($produk->harga, 0, ',', '.')
                  }}
               </p>
               <a href="#" class="btn btn-primary w-100">+ Keranjang</a>
            </div>
         </a>
      </div>
      @endforeach
   </div>

</section>
@endsection