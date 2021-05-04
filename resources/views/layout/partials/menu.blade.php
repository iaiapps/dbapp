 <div class="menus">
  @foreach ($menus as $menu)
    <a href="{{$menu->url}}" class="menuitem">
      <i class="las la-home"></i>
      <span class="title titlealt"> {{$menu->name}}</span>
    </a>
  @endforeach
</div>