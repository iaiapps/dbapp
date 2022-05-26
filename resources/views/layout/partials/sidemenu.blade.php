 {{-- avatar --}}
 @php
     use YoHang88\LetterAvatar\LetterAvatar;
     $avatar = new LetterAvatar(Auth::user()->name, 'circle', '200');
 @endphp
 <div id="avatar" class="text-center pt-1 p-sm-2">
     <img src="{{ $avatar->setColor('#198754', '#ffffff') }}" class="my-3 m-sm-2 border-white" alt="avatar pic" />
     <p class="mb-1 d-none d-sm-block">{{ Auth::user()->name }}</p>

 </div>
 <hr class="m-0">

 {{-- daftar menu --}}
 @php
     $role_id = Auth::user()->roles->first()->id;
     if ($role_id) {
         $menus = DB::table('menus')
             ->where('role_id', $role_id)
             ->get();
     } else {
         $role_id = 4;
     }
 @endphp

 <div id="scrolll" class="p-1 p-sm-2 scroll">
     <ul id="menu" class="nav flex-column px-0 px-sm-2">
         @foreach ($menus as $menu)
             <li class="nav-item">
                 <a href="{{ $menu->url }}"
                     class="nav-link hover text-success py-2  rounded-1 text-center text-sm-start">
                     <i class="{{ $menu->icon }} menu-icon"></i>
                     <span class="ms-2 d-none d-sm-inline"> {{ $menu->name }} </span>
                 </a>
             </li>
         @endforeach
     </ul>
 </div>

 {{-- menu logout --}}
 <hr>
 <a id="logout" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" class="mt-3 rounded bg-success text-center">
     <span class="py-1 px-2 bg-white rounded-1 fs-6 text-success"><i class="las la-sign-out-alt"></i></span>
     <small class="d-block mt-1 text-white fw-small">keluar</small>
 </a>
 <br>
 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
     @csrf
 </form>


 @push('js')
     <script>
         document.addEventListener("DOMContentLoaded", () => {
             OverlayScrollbars(document.querySelector("#scrolll"), {
                 className: "os-theme-dark",
                 resize: "none",
                 paddingAbsolute: true,
                 scrollbars: {
                     visibility: "auto",
                     autoHide: "move",
                     autoHideDelay: 800,
                     dragScrolling: true,
                     clickScrolling: false,
                     touchSupport: true,
                 },
                 overflowBehavior: {
                     x: "hidden",
                     y: "scroll"
                 },
             });
         });
     </script>
 @endpush
