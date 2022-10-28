<template>
    <div class="text-center justify-items-center p-4">
        <div class="container">
            <card>
                <div class="card-body">
                    <H1 v-if="guru == null && siswa == null"
                        >Daftar Hadir Untuk</H1
                    >
                    <h1 v-else>Pilih acara</h1>
                </div>
            </card>
            <!-- PERTAMA, PILIH KEHADIRAN UNTUK -->
            <!-- <multiselect :options="options"></multiselect> -->
            <div
                class="col-md-6"
                style="float: none; margin: auto"
                v-if="!acara"
            >
                <button
                    class="btn btn-block btn-success text-uppercase my-3"
                    @click="pilih(1)"
                >
                    Guru
                </button>
                <button
                    class="btn btn-block btn-success text-uppercase my-3"
                    @click="pilih(2)"
                >
                    Siswa / Orang tua
                </button>
            </div>
            <!-- KEDUA, PILIH ACARA -->
            <div
                class="col-md-6"
                style="float: none; margin: auto"
                v-if="!isSelected"
            >
                <button
                    v-for="item in acara"
                    class="btn btn-block btn-success text-uppercase my-3"
                    @click="
                        {
                            (form.acara = item.id), (isSelected = true);
                        }
                    "
                >
                    {{ item.nama_acara }}
                </button>
            </div>

            <!-- KETIGA, INPUT FORM -->
            <div class="col-md-6" style="float: none; margin: auto" v-else>
                <div>
                    <label class="typo__label">Pilih</label>
                    <multiselect
                        v-model="siswaTerpilih"
                        :options="data"
                        label="nama"
                        placeholder="Siswa / Orang tua dari"
                        @search-change="cariData"
                        track-by="nama"
                    ></multiselect>
                    <input
                        type="text"
                        disabled
                        class="form-control"
                        :value="siswaTerpilih.kelas"
                    />
                </div>
            </div>
        </div>
    </div>
    <a
        style="position: fixed; bottom: 20px; right: 20px"
        href="/acara/history"
        class="btn btn-sm btn-secondary"
        ><svg
            xmlns="http://www.w3.org/2000/svg"
            width="16"
            height="16"
            fill="currentColor"
            class="bi bi-clock-history"
            viewBox="0 0 16 16"
        >
            <path
                d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"
            />
            <path
                d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z"
            />
            <path
                d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"
            /></svg
    ></a>
</template>

<script setup>
import { useForm } from "@inertiajs/inertia-vue3";
import { defineProps, ref } from "vue";
import Swal from "sweetalert2";
import { Inertia } from "@inertiajs/inertia";
components: {
    Multiselect: window.VueMultiselect.default;
}
// let selectedAcara = ref("");
// let selectedGuru = ref("");
const form = useForm({
    guru: "",
    acara: "",
});

let isSelected = ref(false);
let disableFor = ref(false);
let siswaTerpilih = ref("");

const props = defineProps({
    acara: Object,
    data: Object,
    filters: Object,
});
const handleSelect = (id) => {
    selectedAcara.value = id;
    isSelected.value = true;
};

const submit = () => {
    form.post("/saya_hadir", {
        preserveScroll: true,
        onSuccess: () => {
            Swal.fire({
                title: "Jazakumullah",
                text: "Terima kasih, atas kehadirannya",
                icon: "success",
                confirmButtonText: "Aamiin",
            });
            Inertia.get("/saya_hadir");
        },
    });
};
const pilih = (id) => {
    Inertia.get(
        route("acara.hadir"),
        {
            for: id,
        },
        {
            preserveScroll: true,
            preserveState: true,
        }
    );
    disableFor.value = true;
};

let options = [
    "Select option",
    "options",
    "selected",
    "multiple",
    "label",
    "searchable",
    "clearOnSelect",
    "hideSelected",
    "maxHeight",
    "allowEmpty",
    "showLabels",
    "onChange",
    "touched",
];
const cariData = (term) => {
    Inertia.get(
        route("acara.hadir"),
        {
            for: props.filters.for,
            name: term,
        },
        {
            preserveState: true,
            preserveScroll: true,
            replace: true,
        }
    );
};
</script>
