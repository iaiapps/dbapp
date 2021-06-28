 <div class="logout d-none col-3 col-xs-6 bg-secondary" id="panellogout">
     <div class="panel">
         <div class="foto py-2">
             <img src="{{ url('dbapps') }}/img/hacker.svg" alt="" />
             <p class="text-center" style="font-weight: bold; text-transform:lowercase">{{ Auth::user()->name }}</p>
         </div>
         <div class="panel-footer">
             <a href="{{ route('ganti-pass') }}" class="btn btn-sd col-12">Ganti password</a>

             <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                 <button class="btn btn-primary col-12  mt-2">Keluar</button>
             </a>
             <br>

             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                 @csrf
             </form>
         </div>
     </div>
 </div>
