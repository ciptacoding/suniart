@extends('Layouts.Admin')

{{-- Add Button --}}
@section('add-button')
<h4>Detail {{ $sejarahTari->nama }}</h4>
@endsection
{{-- Add Button --}}

{{-- Breadcrumb --}}
@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{ route('admin.sejarah') }}">Sejarah Tari</a></li>
<li class="breadcrumb-item active" aria-current="page">Detail Sejarah Tari</li>
@endsection
{{-- Breadcrumb --}}

{{-- Main Page --}}
@section('admin-page')
<div class="card card-default">
   <div class="card-header">
      <h3 class="text-center mt-2">Sejarah {{ $sejarahTari['nama'] }}</h3>
   </div>
   <!-- /.card-header -->

   <div class="p-4">
      {!! $sejarahTari->deskripsi !!}
   </div>
</div>
@endsection
{{-- Main Page --}}