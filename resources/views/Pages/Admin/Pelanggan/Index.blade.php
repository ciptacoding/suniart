@extends('Layouts.Admin')

{{-- Add Button --}}
@section('add-button')
<h4>Data Pelanggan</h4>
@endsection
{{-- Add Button --}}

{{-- Breadcrumb --}}
@section('breadcrumb')
<li class="breadcrumb-item"><a href="/">Dashboard</a></li>
<li class="breadcrumb-item active" aria-current="page">Data Pelanggan</li>
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
               <th>Username</th>
               <th>Email</th>
               <th>Whatsapp</th>
               <th>Jenis Kelamin</th>
               <th>Status</th>
               <th>Aksi</th>
            </tr>
         </thead>
         <tbody>
            @foreach ($users as $user )
            <tr>
               <td>{{ $user->username }}</td>
               <td>{{ $user->email }}</td>
               <td>{{ $user->whatsapp }}</td>
               <td>{{ $user->jenis_kelamin }}</td>
               <td>
                  <span class="{{ $user->status === 1 ? 'badge badge-success' : 'badge badge-danger' }}">
                     {{ $user->status === 1 ? 'Aktif' : 'Non-Active' }}
                  </span>
               </td>
               <td>
                  <a href="{{ route('admin.pelanggan.download', $user->id) }}">
                     <button type="button" class="btn-success rounded-lg">
                        <i class="fas fa-download"></i>
                     </button>
                  </a>
                  <a href="{{ route('admin.pelanggan.detail', $user->id) }}">
                     <button type="button" class="btn-info rounded-lg">
                        <i class="fas fa-info-circle" style="color: #ffffff;"></i>
                     </button>
                  </a>
                  @if ($user->status === 1)
                  <form action="{{ route('admin.pelanggan.nonaktif', $user->id) }}" method="POST" class="d-inline">
                     @method('PATCH')
                     @csrf
                     <button type="submit" class="btn-danger rounded-lg" title="Disabled user">
                        <i class="fas fa-times fa-lg" style="color: #ffffff;"></i>
                     </button>
                  </form>
                  @else
                  <form action="{{ route('admin.pelanggan.aktif', $user->id) }}" method="POST" class="d-inline">
                     @method('PATCH')
                     @csrf
                     <button type="submit" class="btn-success rounded-lg" title="Activated user">
                        <i class="fas fa-check fa-sm" style="color: #ffffff;"></i>
                     </button>
                  </form>
                  @endif
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