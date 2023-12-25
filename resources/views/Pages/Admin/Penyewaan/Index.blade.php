@extends('Layouts.Admin')

{{-- Add Button --}}
@section('add-button')
<h4>Data Penyewaan</h4>
@endsection
{{-- Add Button --}}

{{-- Breadcrumb --}}
@section('breadcrumb')
<li class="breadcrumb-item"><a href="/">Dashboard</a></li>
<li class="breadcrumb-item active" aria-current="page">Data Penyewaan</li>
@endsection
{{-- Breadcrumb --}}

{{-- Main Page --}}
@section('admin-page')
<div class="card">
   <div class="card-header">
      <h3 class="card-title">Tabel Data Penyewaan</h3>
   </div>
   <div class="card-body">
      <table id="datatables" class="table table-bordered table-striped">
         <thead>
            <tr>
               <th>Nama Penyewa</th>
               <th>Subtotal</th>
               <th>Tanggal Sewa</th>
               <th>Tanggal Kembali</th>
               <th>Status</th>
               <th class="text-center">Aksi</th>
            </tr>
         </thead>
         <tbody>
            @foreach ($penyewaan as $sewa)
            <tr>
               <td>{{ $sewa->user->username }}</td>
               <td>{{ $sewa->subtotal }}</td>
               <td>{{ $sewa->tanggal_sewa }}</td>
               <td>{{ $sewa->tanggal_kembali }}</td>
               <td>{{ $sewa->status }}</td>
               <td class="text-center">
                  <a href="{{ route('admin.penyewaan.detail', $sewa->id) }}" class="btn btn-sm btn-info rounded-lg">
                     <i class="fas fa-info-circle" style="color: #ffffff;"></i>
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
</script>
@endpush
{{-- Script Datatables --}}