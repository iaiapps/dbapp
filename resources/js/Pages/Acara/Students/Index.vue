<template>
    <AppLayout>
        <div class="d-md-flex justify-content-between mb-3">
            <div class="">
                <h4>Rekap Kehadiran Siswa/Ortu</h4>
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
                        <th scope="col">Detail</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </AppLayout>
</template>
<script setup>
import { Inertia } from "@inertiajs/inertia";
import { ref, defineProps } from "vue";
import AppLayout from "../../../Shared/AppLayout.vue";
const now = new Date();
let bulan = ref(props.filters.bulan);
let tahun = ref(props.filters.tahun);

const props = defineProps({
    teachers: Object,
    filters: Object,
});
const handleFilter = () => {
    Inertia.get(
        "/acara/teachers",
        {
            bulan: bulan.value,
            tahun: tahun.value,
        },
        {
            preserveState: true,
            replace: true,
        }
    );
};
const namaBulan = [
    { id: 1, label: "Januari" },
    { id: 2, label: "Februari" },
    { id: 3, label: "Maret" },
    { id: 4, label: "April" },
    { id: 5, label: "Mei" },
    { id: 6, label: "Juni" },
    { id: 7, label: "Juli" },
    { id: 8, label: "Agustus" },
    { id: 9, label: "September" },
    { id: 10, label: "Oktober" },
    { id: 11, label: "November" },
    { id: 12, label: "Desember" },
];
</script>
