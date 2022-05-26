<div id="nav" class="clearfix bg-white p-3 rounded ">
    <div class="float-start">
        <button id="buttonSidebar" class="btn btn-success btn-sm hover bg-light text-success rounded fs-5">
            <i class="las la-icons la-lg"></i>
        </button>
    </div>
    <div class="float-end d-flex">
        <div class="d-none d-sm-block bg-light py-1 py-sm-2 px-2 px-sm-3 mx-3 mx-sm-3 rounded lh-md">
            <span id="jam" class="fw-bold"> hari </span>
        </div>
        <div class="dropdown  me-3">
            <button class="btn btn-success btn-sm hover bg-light text-success rounded fs-5" type="button"
                data-bs-toggle="dropdown" data-bs-toggle="dropdown" id="dropdownmenu" aria-expanded="false">
                <i class="las la-envelope la-lg"></i>
            </button>

            <div class="dropdown-menu shadow p-3 mt-3 rounded" aria-labelledby="dropdownmenu">
                <div class="text-center">
                    <i class="las la-paper-plane la-4x text-success"></i>
                    <p class="text-center mb-3">Pusat Informasi</p>
                    @php
                        $collection = DB::table('database_settings')
                            ->where('id', '!=', 1)
                            ->get();
                        // dd($collection);
                    @endphp
                    @foreach ($collection as $item)
                        <a href="https://wa.me/{{ $item->value }}" target="_blank"
                            class="btn btn-outline-success w-100 mb-3">{{ $item->info }}</a>
                    @endforeach

                </div>
            </div>
        </div>
        <div class="dropdown">
            <button class="btn btn-success btn-sm hover bg-light text-success rounded fs-5" type="button"
                data-bs-toggle="dropdown" data-bs-toggle="dropdown" id="dropdownmenu" aria-expanded="false">
                <i class="las la-user-circle la-lg"></i>
            </button>

            <div class="dropdown-menu shadow p-3 mt-3 rounded" aria-labelledby="dropdownmenu">
                <div class="text-center">
                    <i class="las la-user-circle la-4x text-success"></i>
                    <p class="text-center mb-3">Pengaturan Akun</p>
                    <a href="{{ route('ganti-pass') }}" class=" btn btn-outline-success mb-3 w-100">
                        Ganti Password
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const hari = new Date().toLocaleDateString("id-ID", {
        weekday: "long",
        day: "numeric",
        month: "long",
        year: "numeric",
    });
    const day = document.getElementById("jam");
    day.innerHTML = `${hari}`

    const buttonSidebar = document.getElementById("buttonSidebar");
    const sidebar = document.getElementById("sidebar")
    const page = document.getElementById("page")

    buttonSidebar.addEventListener("click", () => {
        sidebar.classList.toggle("d-none")
        sidebar.classList.toggle("d-sm-none")
        page.classList.toggle("page-margin")
    })
</script>
@push('js')
@endpush
