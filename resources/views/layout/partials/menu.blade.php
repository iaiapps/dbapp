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
