 <header class="navbar bg-secondary">
     <section class="navbar-section m-2">
         <button id="openclose" class="btn btn-primary btn-lg btn-action m-2">
             <i class="las la-bars"></i>
         </button>
     </section>

     @yield('alert')

     <section class="navbar-section m-2">
         <a href="{{ route('siswa.contact_center') }}" class="btn btn-primary btn-lg btn-action m-2">
             <i class="las la-envelope"></i>
         </a>
         <button class="btn btn-primary btn-lg btn-action m-2" id="tbllogout">
             <i class="las la-user"></i>
         </button>
     </section>
 </header>
