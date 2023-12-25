@extends('Layouts.Admin')

{{-- Add Button --}}
@section('add-button')
<a href="{{ route('admin.kategori.tambah') }}"><button class="btn btn-primary rounded-lg">Tambah Kategori</button></a>
@endsection
{{-- Add Button --}}

{{-- Breadcrumb --}}
@section('breadcrumb')
<li class="breadcrumb-item"><a href="/">Dashboard</a></li>
<li class="breadcrumb-item active" aria-current="page">Data Kategori</li>
@endsection
{{-- Breadcrumb --}}

{{-- Main Page --}}
@section('admin-page')
<div class="card">
   <div class="card-header">
      <h3 class="card-title">Tabel Data Kategori</h3>
   </div>
   <div class="card-body">
      <table id="datatables" class="table table-bordered table-striped">
         <thead>
            <tr>
               <th>Nama Kategori</th>
               <th>Deskripsi</th>
               <th class="text-center">Aksi</th>
            </tr>
         </thead>
         <tbody>
            @foreach ($modifiedData as $kategori)
            <tr>
               <td>{{ $kategori['nama'] }}</td>
               <td>{{ $kategori['truncatedDeskripsi'] }}</td>
               <td class="text-center">
                  <a href="{{ route('admin.kategori.detail', $kategori['id']) }}"
                     class="btn btn-sm btn-info rounded-lg">
                     <i class="fas fa-info-circle" style="color: #ffffff;"></i>
                  </a>
                  <a href="{{ route('admin.kategori.edit', $kategori['id']) }}"
                     class="btn btn-sm btn-warning rounded-lg">
                     <i class="fas fa-tools" style="color: #ffffff;"></i>
                  </a>
                  <form action="{{ route('admin.kategori.delete', $kategori['id']) }}" method="POST" class="d-inline">
                     @method('DELETE')
                     @csrf
                     <button type="submit" class="btn btn-sm btn-danger btn-submit">
                        <i class="fas fa-trash-alt"></i>
                     </button>
                  </form>
                  <a href="{{ route('admin.kategori.download', $kategori['id']) }}">
                     <button type="button" class="btn-success rounded-lg">
                        <i class="fas fa-download"></i>
                     </button>
                  </a>
               </td>

            </tr>
            @endforeach
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

   $('.btn-submit').click(function (e) {
      e.preventDefault();
      const deleteForm = $(this).closest('form');
      
      Swal.fire({
         title: "Are you sure?",
         text: "You won't be able to revert this!",
         icon: "warning",
         showCancelButton: true,
         confirmButtonColor: "#3085d6",
         cancelButtonColor: "#d33",
         confirmButtonText: "Yes, delete it!"
      }).then((result) => {
         if (result.isConfirmed) {
            deleteForm.submit();
         }
      });
   });
</script>
@endpush
{{-- Script Datatables --}}