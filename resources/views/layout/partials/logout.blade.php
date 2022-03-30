<a id="logout" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" class="mt-3 rounded bg-success text-center">
    <span class="py-1 px-2 bg-white rounded-1 fs-6 text-success"><i class="bi bi-stack"></i></span>
    <small class="d-block mt-2 text-white fw-small">keluar</small>
</a>
<br>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
