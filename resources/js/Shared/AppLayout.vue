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
                            <a
                                class="nav-link active"
                                aria-current="page"
                                href="/acara/index"
                                >Acara</a
                            >
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link active"
                                aria-current="page"
                                href="/acara/teachers"
                                >Guru</a
                            >
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input
                            class="form-control me-2"
                            type="search"
                            placeholder="Cari"
                            aria-label="Search"
                        />
                    </form>
                </div>
            </div>
        </nav>
        <div class="container p-5">
            <slot />
        </div>
    </div>
</template>
<script></script>
