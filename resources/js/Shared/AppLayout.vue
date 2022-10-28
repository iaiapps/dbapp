<template>
    <div>
        <nav
            class="navbar navbar-expand-lg navbar-dark"
            style="background-color: #27ae60"
        >
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Acara</a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div
                    class="collapse navbar-collapse"
                    id="navbarSupportedContent"
                >
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <!-- <li class="nav-item">
                            <a
                                class="nav-link active"
                                aria-current="page"
                                href="#"
                                >Home</a
                            >
                        </li> -->
                        <li class="nav-item">
                            <Link
                                class="nav-link active"
                                aria-current="page"
                                href="/kategori-acara/index"
                                >Kategori</Link
                            >
                        </li>
                        <li class="nav-item">
                            <Link
                                class="nav-link active"
                                aria-current="page"
                                href="/acara/index"
                                >Acara</Link
                            >
                        </li>
                        <li class="nav-item">
                            <Link
                                class="nav-link active"
                                aria-current="page"
                                href="/acara/teachers"
                                >Rekap Guru</Link
                            >
                        </li>
                        <li class="nav-item">
                            <Link
                                class="nav-link active"
                                aria-current="page"
                                href="/acara/students"
                                >Rekap Ortu/Siswa</Link
                            >
                        </li>
                        <li class="nav-item">
                            <Link
                                class="nav-link active"
                                aria-current="page"
                                href="/acara/history"
                                >History</Link
                            >
                        </li>
                    </ul>
                    <Link
                        as="button"
                        class="btn btn-outline-light"
                        href="/saya_hadir"
                        >Hadir</Link
                    >
                </div>
            </div>
        </nav>
        <div class="container p-5">
            <slot />
        </div>
    </div>
    <a
        style="position: fixed; bottom: 20px; right: 20px"
        href="whatsapp://send?text=http%3A%2F%2Fsister.sditharum.id%3A8000%2Fsaya_hadir"
        data-action="share/whatsapp/share"
        class="btn btn-sm btn-secondary"
        ><svg
            xmlns="http://www.w3.org/2000/svg"
            width="16"
            height="16"
            fill="currentColor"
            class="bi bi-share-fill"
            viewBox="0 0 16 16"
        >
            <path
                d="M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5z"
            /></svg
    ></a>
</template>
<script></script>
