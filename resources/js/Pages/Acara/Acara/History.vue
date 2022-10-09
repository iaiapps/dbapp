<template>
    <AppLayout>
        <div class="d-md-flex justify-content-between mb-3">
            <div class="">
                <h4>History</h4>
            </div>
            <div>
                <!-- <form @submit.prevent="handleFilter">
                    <div class="input-group">
                        <label class="input-group-text">Bulan</label>
                        <select
                            class="form-select me-2"
                            @change="filterBulan"
                            v-model="bulan"
                        >
                            <option selected disabled>Pilih</option>
                            <option
                                v-for="item in namaBulan"
                                :value="item.id"
                                v-html="item.label"
                            />
                        </select>
                        <label class="input-group-text">Tahun</label>
                        <input
                            type="text"
                            class="form-control"
                            v-model="tahun"
                        />
                        <input
                            class="input-group-text ms-1"
                            type="submit"
                            value="Filter"
                        />
                        <Link
                            class="btn btn-default btn-outline-dark"
                            href="/acara/teachers"
                        >
                            Reset
                        </Link>
                    </div>
                </form> -->
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Acara</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(item, index) in history.data" :key="item.id">
                        <td>{{ index + 1 }}</td>
                        <td>{{ item.nama }}</td>
                        <td>{{ item.nama_acara }}</td>
                    </tr>
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                <Link
                    as="button"
                    class="btn btn-outline-primary btn-sm mx-1"
                    :href="history.first_page_url"
                    v-if="history.first_page_url"
                    >First</Link
                >
                <Link
                    as="button"
                    class="btn btn-outline-primary btn-sm mx-1"
                    :href="history.prev_page_url"
                    >&laquo</Link
                >
                <Link
                    as="button"
                    class="btn btn-primary btn-sm mx-1"
                    :href="history.prev_page_url"
                    >{{ history.current_page }}</Link
                >
                <Link
                    as="button"
                    class="btn btn-outline-primary btn-sm mx-1"
                    :href="history.next_page_url"
                    >&raquo</Link
                >
                <Link
                    as="button"
                    class="btn btn-outline-primary btn-sm mx-1"
                    :href="history.last_page_url"
                    v-if="history.last_page_url"
                    >Last</Link
                >
            </div>
        </div>
    </AppLayout>
</template>
<script setup>
import { Inertia } from "@inertiajs/inertia";
import AppLayout from "../../../Shared/AppLayout.vue";
defineProps({
    history: Object,
});
</script>
