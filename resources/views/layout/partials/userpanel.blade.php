 <div class="logout d-none col-3 col-xs-6 bg-secondary" id="panellogout">
        <div class="panel">
          <div class="foto py-2">
            <img src="{{url('dbapps')}}/img/hacker.svg" alt="" />
            <h4 class="text-center">operator</h4>
          </div>
          <div class="panel-footer">
            <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <button class="btn btn-primary col-12">logout</button>
                                    </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
          </div>
        </div>
      </div>