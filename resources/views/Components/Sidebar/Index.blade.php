<aside class="main-sidebar sidebar-dark-primary elevation-4">
   <!-- Brand Logo -->
   <a href="/" class="brand-link d-flex flex-column align-items-center nav nav-pills nav-sidebar">
      <img src="{{ asset('Logo/logo-suniart.jpg') }}" alt="Logo" class="rounded-circle w-50">
      <span class="text-md nav-header">Admin Dashboard</span>
   </a>

   <!-- Sidebar -->
   <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-1">
         <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
               <a href="{{ route('admin.dashboard') }}"
                  class="nav-link {{ Route::currentRouteName() === 'admin.dashboard' ? 'active' : ' '}}">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                     Dashboard
                  </p>
               </a>
            </li>
            <li class="nav-item">
               <a href="{{ route('admin.sejarah') }}"
                  class="nav-link {{ Route::currentRouteName() === 'admin.sejarah' ? 'active' : ' '}}">
                  <i class="nav-icon fas fa-history"></i>
                  <p>
                     Sejarah Tari-tarian
                  </p>
               </a>
            </li>
            <li class="nav-item">
               <a href="{{ route('admin.pelanggan') }}"
                  class="nav-link {{ Route::currentRouteName() === 'admin.pelanggan' ? 'active' : ' '}}">
                  <i class="nav-icon fas fa-user-friends"></i>
                  <p>
                     Data Pelanggan
                  </p>
               </a>
            </li>
            <li class="nav-item">
               <a href="{{ route('admin.kategori') }}"
                  class="nav-link {{ Route::currentRouteName() === 'admin.kategori' ? 'active' : ' '}}">
                  <i class="nav-icon fas fa-tags"></i>
                  <p>
                     Data Kategori
                  </p>
               </a>
            </li>
            <li class="nav-item">
               <a href="{{ route('admin.produk') }}"
                  class="nav-link {{ Route::currentRouteName() === 'admin.produk' ? 'active' : ' '}}">
                  <i class="nav-icon fas fa-shopping-cart"></i>
                  <p>
                     Data Produk
                  </p>
               </a>
            </li>
            <li class="nav-item">
               <a href="#" class="nav-link">
                  <i class="nav-icon fab fa-shopify"></i>
                  <p>
                     Data Penyewaan
                  </p>
               </a>
            </li>

            <li class="nav-item">
               <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-cart-plus"></i>
                  <p>
                     Detail Penyewaan
                  </p>
               </a>
            </li>

            <li class="nav-item">
               <a href="#" class="nav-link">
                  <i class="nav-icon far fa-credit-card"></i>
                  <p>
                     Data Pembayaran
                  </p>
               </a>
            </li>
            <li class="nav-item">
               <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-undo"></i>
                  <p>
                     Data Pengembalian
                  </p>
               </a>
            </li>

         </ul>
      </nav>
      <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
</aside>