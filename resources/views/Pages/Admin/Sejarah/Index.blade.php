@extends('Layouts.Admin')

{{-- Add Button --}}
@section('add-button')
<a href="#"><button class="btn btn-primary rounded-lg">Tambah Sejarah</button></a>
@endsection
{{-- Add Button --}}

{{-- Breadcrumb --}}
@section('breadcrumb')
<li class="breadcrumb-item"><a href="/">Dashboard</a></li>
<li class="breadcrumb-item active" aria-current="page">Sejarah Tari-tarian</li>
@endsection
{{-- Breadcrumb --}}

{{-- Main Page --}}
@section('admin-page')
<div class="card">
   <div class="card-header">
      <h3 class="card-title">Tabel Data Sejarah Tari-tarian</h3>
   </div>
   <div class="card-body">
      <table id="datatables" class="table table-bordered table-striped">
         <thead>
            <tr>
               <th>Nama Tari</th>
               <th>Deskripsi</th>
               <th class="text-center">Aksi</th>
            </tr>
         </thead>
         <tbody>
            <tr>
               <td>Tari PendeT</td>
               <td>Tari pendet merupakan warisan budaya Indonesia yang berasal dari pulau Bali
                  yang diciptakan oleh
                  seniman tari Bali, I
                  Nyoman Kaler...</td>
               <td class="d-flex justify-content-center">

                  <button type="submit" class="btn-info rounded-lg mx-1">
                     <i class="fas fa-info-circle" style="color: #ffffff;"></i>
                  </button>
                  <button type="submit" class="btn-warning rounded-lg mx-1">
                     <i class="fas fa-tools" style="color: #ffffff;"></i>
                  </button>

                  <button type="submit" class="btn-danger rounded-lg mx-1">
                     <i class="fas fa-trash-alt" style="color: #ffffff;"></i>
                  </button>

               </td>

            </tr>
         </tbody>
      </table>
   </div>
</div>
@endsection
{{-- Main Page --}}

{{-- Script Datatables --}}
@push('scripts')
<script>
   $(function () {
      $('#datatables').DataTable({
         "paging": true,
         "lengthChange": true,
         "searching": true,
         "ordering": true,
         "info": true,
         "autoWidth": true,
         "responsive": true,
      });
   });
</script>
@endpush
{{-- Script Datatables --}}