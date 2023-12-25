<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <title>Cetak Data Produk</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
      integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
   <div class="row">
      <div class="card card-default">
         <div class="card-header">
            <h4 class="text-center mt-2">{{ $produk->nama_produk }}</h4>
         </div>
         <!-- /.card-header -->

         <div class="p-4">
            <div class="d-flex justify-content-center mb-2">
               <img src="./storage/produk/{{ $produk->foto }}" style="height: 150px;" alt="produk">
            </div>
            <p>Kode Produk : {{ $produk->kode_produk }}</p>
            <p>Stok Produk : {{ $produk->stok }} Pcs</p>
            <p>Harga Produk : {{ 'Rp. ' . number_format($produk->harga, 0, ',', '.') }}</p>
            <p>Deskripsi : {!! $produk->deskripsi !!}</p>
         </div>
      </div>
   </div>

   <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
   </script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
   </script>

</body>

</html>