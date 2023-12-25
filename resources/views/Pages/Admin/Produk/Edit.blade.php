@extends('Layouts.Admin')

{{-- Add Button --}}
@section('add-button')
<h4>Edit Produk</h4>
@endsection
{{-- Add Button --}}

{{-- Breadcrumb --}}
@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{ route('admin.kategori') }}">Produk</a></li>
<li class="breadcrumb-item active" aria-current="page">Edit Kategori</li>
@endsection
{{-- Breadcrumb --}}

{{-- Main Page --}}
@section('admin-page')
<div class="card card-default">
   <div class="card-header">
      <h3 class="card-title">Isi formulir dibawah ini</h3>
   </div>
   <!-- /.card-header -->
   <form action="{{ route('admin.produk.update', $produk->id) }}" method="POST" enctype="multipart/form-data">
      @method('PUT')
      @csrf
      <div class="card-body">
         <div class="row">
            <div class="col-md-6">
               <div class="form-group">
                  <label for="kategori_id">Kategori Produk</label>
                  <select name="kategori_id" class="form-control select2bs4 @error('kategori_id') is-invalid @enderror"
                     style="width: 100%;">
                     @foreach ($categories as $category)
                     @if ($category->id == $produk->kategori_id)
                     <option selected value="{{ $produk->kategori_id }}">{{ $produk->kategori->nama }}</option>
                     @else
                     <option value="{{ $category->id }}">{{ $category->nama }}</option>
                     @endif
                     @endforeach
                  </select>
                  @error('kategori_id')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
               </div>
            </div>

            <div class="col-6">
               <div class="form-group">
                  <label for="nama_produk">Nama Produk</label>
                  <input type="text" class="form-control @error('nama_produk') is-invalid @enderror" id="nama_produk"
                     name="nama_produk" placeholder="Masukkan nama produk"
                     value="{{ old('nama_produk', $produk->nama_produk) }}">
                  @error('nama_produk')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
               </div>
            </div>
         </div>

         <div class="row">
            <div class="col-6">
               <div class="form-group">
                  <label for="kode_produk">Kode Produk</label>
                  <input type="text" class="form-control @error('kode_produk') is-invalid @enderror" id="kode_produk"
                     name="kode_produk" placeholder="Masukkan kode produk"
                     value="{{ old('kode_produk', $produk->kode_produk) }}">
                  @error('kode_produk')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
               </div>
            </div>

            <div class="col-6">
               <div class="form-group">
                  <label for="harga">Harga Produk</label>
                  <input type="number" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga"
                     placeholder="Masukkan kode produk" value="{{ old('harga', $produk->harga) }}">
                  @error('harga')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
               </div>
            </div>
         </div>

         <div class="row">
            <div class="col-md-6">
               <div class="form-group">
                  <label for="customFile">Foto Produk</label>
                  <div class="custom-file">
                     <input type="file" class="custom-file-input @error('foto') is-invalid @enderror" id="customFile"
                        name="foto" value="{{ old('foto', $produk->foto) }}" />
                     <label class=" custom-file-label" for="customFile">Choose file</label>
                  </div>
               </div>
               @error('foto')
               <div class="invalid-feedback">{{ $message }}</div>
               @enderror
            </div>

            <div class="col-6">
               <div class="form-group">
                  <label for="stok">Stok Produk</label>
                  <input type="number" class="form-control @error('stok') is-invalid @enderror" id="stok" name="stok"
                     placeholder="Masukkan kode produk" value="{{ old('stok', $produk->stok) }}">
                  @error('stok')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
               </div>
            </div>
         </div>

         <div class="row">
            <div class="col-12">
               <div class="form-group">
                  <label for="deskripsi">Deskripsi Produk</label>
                  <textarea id="summernote" name="deskripsi" id="deskripsi"
                     class="form-control @error('deskripsi') is-invalid @enderror">
                                             {!! $produk->deskripsi !!}
                                          </textarea>
                  @error('deskripsi')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
               </div>
            </div>
         </div>
         <button type="submit" class="btn btn-primary mt-2 pr-4 pl-4">Simpan</button>
      </div>
   </form>
</div>
@endsection
{{-- Main Page --}}

@push('scripts')
<script>
   $(function () {
      // Summernote
      $('#summernote').summernote()
   });

   $(document).ready(function() {
      //Initialize Select2 Elements
      $('.select2bs4').select2({
         theme: 'bootstrap4'
      });

      bsCustomFileInput.init();
   });
</script>
@endpush