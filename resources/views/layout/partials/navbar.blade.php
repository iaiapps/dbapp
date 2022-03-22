<div id="nav" class="clearfix">
    <span class="float-end d-flex">
        <div class=" card py-1 py-sm-2 px-2 px-sm-3 mx-3 mx-sm-3 rounded lh-md">
            <span id="jam" class="fw-bold"> hari </span>
        </div>
        <div class="dropdown">
            <button class="square bg-white text-success rounded fs-5" type="button" data-bs-toggle="dropdown"
                data-bs-toggle="dropdown" id="dropdownmenu" aria-expanded="false">
                <i class="bi bi-envelope-fill"></i>
            </button>

            <div class="dropdown-menu shadow p-3 mt-3" aria-labelledby="dropdownmenu">
                <a href="#" class=" btn btn-outline-success mb-3 w-100 text-start">
                    <i class="bi bi-envelope-fill"></i>
                    <span class="ms-1 ">Hubungi Admin</span>
                </a>
                <a href="#" class=" btn btn-outline-success w-100 text-start">
                    <i class="bi bi-envelope-fill"></i>
                    <span class="ms-1 ">Hubungi Keuangan</span>
                </a>
            </div>
        </div>
    </span>
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
</script>
@push('js')
@endpush
