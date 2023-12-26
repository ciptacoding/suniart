@extends('Layouts.Customer')

@section('customer-page')
<h6 class="text-center text-xl mt-5">Search Produk</h6>
<div class="row">
   <div class="col-md-8 offset-md-2">
      <form action="simple-results.html">
         <div class="input-group">
            <input type="search" class="form-control form-control-lg" placeholder="Type your keywords here">
            <div class="input-group-append">
               <button type="submit" class="btn btn-lg btn-default">
                  <i class="fa fa-search"></i>
               </button>
            </div>
         </div>
      </form>
   </div>
</div>
@endsection