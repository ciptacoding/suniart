<nav class="main-header navbar navbar-expand navbar-white navbar-light">
   <!-- Left navbar links -->
   <ul class="navbar-nav">
      <li class="nav-item">
         <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
   </ul>

   <!-- Right navbar links -->
   <ul class="navbar-nav ml-auto d-flex align-items-center">
      <li class="nav-item dropdown pl-4 pr-3">
         <a data-toggle="dropdown" href="#">
            <div class="user-panel d-flex align-items-center" style="padding-right: -18px;">
               <div class="text-secondary d-none d-md-inline-block">
                  {{-- <span class="d-block" style="margin-bottom: -10px">{{ Auth::user()->username }}</span> --}}
                  <span class="d-block" style="margin-bottom: -10px">Winten</span>
                  {{-- <span class="text-xs">{{ Auth::user()->role->nama }}</span> --}}
                  <span class="text-xs">Administrator</span>
               </div>
               <div class="image">
                  {{-- @if (Auth::user()->foto)
                  <img src="{{ asset('storage/profiles/' . Auth::user()->foto) }}"
                     style="height: 32px; object-fit:cover" class="overflow-hidden rounded-lg" alt="user-image">
                  @else
                  <img src="{{ asset('img/person.png') }}" style="height: 32px; object-fit:cover"
                     class="overflow-hidden rounded-lg" alt="user-image">
                  @endif --}}
                  <img src="{{ asset('img/person.png') }}" style="height: 32px; object-fit:cover"
                     class="overflow-hidden rounded-lg" alt="user-image">
               </div>
            </div>
         </a>
         <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
               <span>Profile</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
               <span>Password</span>
            </a>
            <div class="dropdown-divider"></div>
            {{-- <a href="{{ route('logout') }}" onclick="handleLogout()" class="dropdown-item">
               <span>Logout</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
               @csrf
            </form> --}}
            <a href="#" class="dropdown-item">
               <span>Logout</span>
            </a>
         </div>
      </li>

   </ul>
</nav>

@push('scripts')
<script>
   function handleLogout()
      {
         event.preventDefault();
         document.getElementById('logout-form').submit();
      }
</script>
@endpush