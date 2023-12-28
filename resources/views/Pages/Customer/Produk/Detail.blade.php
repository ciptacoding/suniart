@extends('Layouts.Customer')

@push('styles')
<style>
   .custom-thumbnail {
      object-fit: contain;
      height: 300px;
   }
</style>
@endpush

@section('customer-page')
<div class="card card-solid mt-4">
   <div class="card-body">
      <div class="row">
         <div class="col-12 col-sm-6">
            <h3 class="d-inline-block d-sm-none">{{ $produk->nama_produk }}</h3>
            <div class="col-12">
               <img src="{{ asset('storage/produk/'.$produk->foto) }}" class="product-image custom-thumbnail"
                  alt="Product Image">
            </div>

         </div>
         <div class="col-12 col-sm-6">
            <h3 class="my-3 d-none d-sm-block">{{ $produk->nama_produk }}</h3>
            <p>Stok : {{ $produk->stok }}</p>
            <p>Kategori : {{ $produk->kategori->nama }}</p>
            <hr>

            <div class="bg-gray py-2 px-3 mt-4">
               <h2 class="mb-0">
                  {{ 'Rp. ' . number_format($produk->harga, 0, ',', '.') }}/Set
               </h2>
            </div>

            <div class="mt-4">
               <div class="btn btn-primary btn-lg">
                  <i class="fas fa-cart-plus fa-lg mr-2"></i>
                  Tambahkan Ke Keranjang
               </div>
            </div>

         </div>
      </div>
      <div class="row mt-4">
         <nav class="w-100">
            <div class="nav nav-tabs" id="product-tab" role="tablist">
               <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc"
                  role="tab" aria-controls="product-desc" aria-selected="true">Deskripsi Produk</a>
               <a class="nav-item nav-link" id="product-rating-tab" data-toggle="tab" href="#product-rating" role="tab"
                  aria-controls="product-rating" aria-selected="false">Ulasan Pelanggan</a>
               <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments"
                  role="tab" aria-controls="product-comments" aria-selected="false">Video Tutorial</a>
            </div>
         </nav>
         <div class="tab-content p-3" id="nav-tabContent">
            <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab">
               {!! $produk->deskripsi !!}
            </div>
            <div class="tab-pane fade" id="product-rating" role="tabpanel" aria-labelledby="product-rating-tab"> Cras ut
               ipsum ornare, aliquam ipsum non, posuere elit. In hac habitasse platea dictumst. Aenean elementum leo
               augue, id fermentum risus efficitur vel. Nulla iaculis malesuada scelerisque. Praesent vel ipsum felis.
               Ut molestie, purus aliquam placerat sollicitudin, mi ligula euismod neque, non bibendum nibh neque et
               erat. Etiam dignissim aliquam ligula, aliquet feugiat nibh rhoncus ut. Aliquam efficitur lacinia lacinia.
               Morbi ac molestie lectus, vitae hendrerit nisl. Nullam metus odio, malesuada in vehicula at, consectetur
               nec justo. Quisque suscipit odio velit, at accumsan urna vestibulum a. Proin dictum, urna ut varius
               consectetur, sapien justo porta lectus, at mollis nisi orci et nulla. Donec pellentesque tortor vel nisl
               commodo ullamcorper. Donec varius massa at semper posuere. Integer finibus orci vitae vehicula placerat.
            </div>
            <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab">
               Vivamus rhoncus
               nisl sed venenatis luctus. Sed condimentum risus ut tortor feugiat laoreet. Suspendisse potenti. Donec et
               finibus
               sem, ut commodo lectus. Cras eget neque dignissim, placerat orci interdum, venenatis odio. Nulla turpis
               elit,
               consequat eu eros ac, consectetur fringilla urna. Duis gravida ex pulvinar mauris ornare, eget porttitor
               enim
               vulputate. Mauris hendrerit, massa nec aliquam cursus, ex elit euismod lorem, vehicula rhoncus nisl dui
               sit amet
               eros. Nulla turpis lorem, dignissim a sapien eget, ultrices venenatis dolor. Curabitur vel turpis at
               magna elementum
               hendrerit vel id dui. Curabitur a ex ullamcorper, ornare velit vel, tincidunt ipsum. </div>
         </div>
      </div>
   </div>
   <!-- /.card-body -->
</div>
@endsection