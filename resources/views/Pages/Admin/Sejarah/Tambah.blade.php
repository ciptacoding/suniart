@extends('Layouts.Admin')

{{-- Add Button --}}
@section('add-button')
<h4>Tambah Sejarah Tari</h4>
@endsection
{{-- Add Button --}}

{{-- Breadcrumb --}}
@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{ route('admin.sejarah') }}">Sejarah Tari</a></li>
<li class="breadcrumb-item active" aria-current="page">Tambah Sejarah Tari</li>
@endsection
{{-- Breadcrumb --}}

{{-- Main Page --}}
@section('admin-page')
<div class="card card-default">
   <div class="card-header">
      <h3 class="card-title">Isi formulir dibawah ini</h3>
   </div>
   <!-- /.card-header -->
   <form action="{{ route('admin.simpan.sejarah') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="card-body">
         <div class="row">
            <div class="col-12">
               <div class="form-group">
                  <label for="nama">Nama Tari</label>
                  <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"
                     placeholder="Masukkan nama tari" value="{{ old('nama') }}">
                  @error('nama')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
               </div>
            </div>
         </div>

         <div class="row">
            <div class="col-12">
               <div class="form-group">
                  <label for="deskripsi">Deskripsi Sejarah Tari</label>
                  <textarea id="summernote" name="deskripsi" id="deskripsi"
                     class="form-control @error('deskripsi') is-invalid @enderror">
                                             Tuliskan deskripsi <em>sejarah tari</em> <strong>disini</strong>
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
</script>
@endpush