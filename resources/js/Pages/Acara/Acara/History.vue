<template>
    <div class="container mt-4">
        <div class="d-md-flex justify-content-between mb-3">
            <div class="">
                <h4>History</h4>
            </div>
            <div></div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Acara</th>
                        <th scope="col">Time</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(item, index) in history.data" :key="item.id">
                        <td>{{ index + 1 }}</td>
                        <td>{{ item.nama }}</td>
                        <td>{{ item.nama_acara }}</td>
                        <td>{{ item.ca }}</td>
                    </tr>
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                <Link
                    as="button"
                    class="btn btn-outline-success btn-sm mx-1"
                    :href="history.first_page_url"
                    v-if="history.first_page_url"
                    >First</Link
                >
                <Link
                    as="button"
                    class="btn btn-outline-success btn-sm mx-1"
                    :href="history.prev_page_url"
                    >&laquo</Link
                >
                <Link
                    as="button"
                    class="btn btn-success btn-sm mx-1"
                    :href="history.prev_page_url"
                    >{{ history.current_page }}</Link
                >
                <Link
                    as="button"
                    class="btn btn-outline-success btn-sm mx-1"
                    :href="history.next_page_url"
                    >&raquo</Link
                >
                <Link
                    as="button"
                    class="btn btn-outline-success btn-sm mx-1"
                    :href="history.last_page_url"
                    v-if="history.last_page_url"
                    >Last</Link
                >
            </div>
        </div>
    </div>
    <Link
        style="position: fixed; bottom: 20px; right: 20px"
        href="/saya_hadir"
        data-action="share/whatsapp/share"
        class="btn btn-sm btn-secondary"
        ><svg
            xmlns="http://www.w3.org/2000/svg"
            width="16"
            height="16"
            fill="currentColor"
            class="bi bi-pencil-square"
            viewBox="0 0 16 16"
        >
            <path
                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"
            />
            <path
                fill-rule="evenodd"
                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"
            /></svg
    ></Link>
</template>
<script setup>
import { Inertia } from "@inertiajs/inertia";
defineProps({
    history: Object,
});
</script>
