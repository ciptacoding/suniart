<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <title>Cetak Data Pelanggan</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
      integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
   <div class="row">
      <h4 class="text-center">Data Pelanggan</h4>
      <div class="card card-default">
         <div class="p-1 p-lg-4 row">
            <div class="col-3">
               <div class="image">
                  <img src="./img/person.png" alt="person" style="height: 100px">
               </div>
            </div>
            <div class="col-9">
               <div class="row">
                  <span class="col-5">Username</span>
                  <span class="col-7">: {{ $user->username }}</span>
               </div>
               <div class="row">
                  <span class="col-5">Email</span>
                  <span class="col-7">: {{ $user->email }}</span>
               </div>
               <div class="row">
                  <span class="col-5">Whatsapp</span>
                  <span class="col-7">: {{ $user->whatsapp }}</span>
               </div>
               <div class="row">
                  <span class="col-5">Jenis Kelamin</span>
                  <span class="col-7">: {{ $user->jenis_kelamin }}</span>
               </div>
               <div class="row">
                  <span class="col-5">Status</span>
                  <span class="col-7">
                     :
                     <span class="{{ $user->status === 1 ? 'badge badge-success' : 'badge badge-danger' }}">
                        {{ $user->status === 1 ? 'Aktif' : 'Nonaktif' }}
                     </span>
                  </span>
               </div>
            </div>
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