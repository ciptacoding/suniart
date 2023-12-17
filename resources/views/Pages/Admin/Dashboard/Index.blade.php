@extends('Layouts.Admin')

@section('title')
<h1 class="m-0">Dashboard</h1>
@endsection

@section('admin-page')
<!-- Small boxes (Stat box) -->

<!-- first row -->
<div class="row">
   <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-info">
         <div class="inner">
            <h3>10</h3>

            <p>Sejarah Tari-tarian</p>
         </div>
         <div class="icon">
            <i class="fas fa-history"></i>
         </div>
         <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
   </div>
   <!-- ./col -->
   <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-success">
         <div class="inner">
            <h3>10</h3>

            <p>Data Pelanggan</p>
         </div>
         <div class="icon">
            <i class="fas fa-user-friends"></i>
         </div>
         <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
   </div>
   <!-- ./col -->
   <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-warning">
         <div class="inner">
            <h3>11</h3>

            <p>Data Kategori</p>
         </div>
         <div class="icon">
            <i class="fas fa-tags"></i>
         </div>
         <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
   </div>
   <!-- ./col -->
   <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-danger">
         <div class="inner">
            <h3>16</h3>

            <p>Data Produk</p>
         </div>
         <div class="icon">
            <i class="fas fa-shopping-cart"></i>
         </div>
         <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
   </div>
   <!-- ./col -->
</div>
<!-- first row -->

<!-- second row -->
<div class="row">
   <!-- ./col -->
   <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-pink">
         <div class="inner">
            <h3>12</h3>

            <p>Data Penyewaan</p>
         </div>
         <div class="icon">
            <i class="fab fa-shopify"></i>
         </div>
         <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
   </div>
   <!-- ./col -->
   <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-primary">
         <div class="inner">
            <h3>14</h3>

            <p>Detail Penyewaan</p>
         </div>
         <div class="icon">
            <i class="fas fa-cart-plus"></i>
         </div>
         <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
   </div>
   <!-- ./col -->
   <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-purple">
         <div class="inner">
            <h3>21</h3>

            <p>Data Pembayaran</p>
         </div>
         <div class="icon">
            <i class="far fa-credit-card"></i>
         </div>
         <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
   </div>
   <!-- ./col -->
   <!-- ./col -->
   <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-orange">
         <div class="inner">
            <h3>17</h3>

            <p>Data Pengembalian</p>
         </div>
         <div class="icon">
            <i class="fas fa-undo"></i>
         </div>
         <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
   </div>
   <!-- ./col -->
</div>
<!-- second row -->
@endsection