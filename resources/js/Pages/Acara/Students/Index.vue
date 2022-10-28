<template>
    <AppLayout>
        <div class="d-md-flex justify-content-between mb-3">
            <div class="">
                <h4>Rekap Kehadiran Siswa/Ortu</h4>
            </div>
            <div>
                <form @submit.prevent="handleFilter">
                    <div class="input-group">
                        <div>
                            <multiselect
                                v-model="selectedKelas"
                                :options="kelas"
                                label="name"
                                placeholder="Pilih kelas"
                                track-by="name"
                            ></multiselect>
                        </div>
                        <Link
                            class="btn btn-default btn-outline-dark"
                            href="/acara/teachers"
                        >
                            Reset
                        </Link>
                    </div>
                </form>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Detail</th>
                        <th scope="col">Jml</th>
                        <th scope="col">Act</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(i, index) in students">
                        <td>{{ i.nama }}</td>
                        <td>{{ i.kelas }}</td>
                        <td>{{ i.jml }}</td>
                        <td>
                            <Link
                                :href="i.showUrl"
                                class="btn btn-sm btn-success"
                                >Cek</Link
                            >
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </AppLayout>
</template>
<script setup>
import { Inertia } from "@inertiajs/inertia";
import { ref, defineProps } from "vue";
import AppLayout from "../../../Shared/AppLayout.vue";
const now = new Date();

const props = defineProps({
    students: Object,
    kelas: Object,
});
</script>
