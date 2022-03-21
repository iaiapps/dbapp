@php
$role_id = Auth::user()->roles->first()->id;
$menus = DB::table('menus')
    ->where('role_id', $role_id)
    ->get();
@endphp

<div class="p-1 p-sm-2">
    <ul id="menu" class="nav flex-column px-0 px-sm-2">
        <li class="nav-item">
            @foreach ($menus as $menu)
                <a href="{{ $menu->url }}"
                    class="nav-link hover text-success py-2 rounded-1 text-center text-sm-start">
                    <i class="{{ $menu->icon }} menu-icon"></i>
                    <span class="ms-2 d-none d-sm-inline"> {{ $menu->name }} </span>
                </a>
            @endforeach
        </li>
    </ul>
</div>
