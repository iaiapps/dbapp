<template>
    <div class="container mt-5">
        <div class="row mb-3 justify-content-center">
            <h3 class="text-center">Form Tahsin SDIT Harapan Umat Jember</h3>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <iframe
                    name="hidden_iframe"
                    style="display: none"
                    @submit="handleSubmit"
                ></iframe>
                <form
                    action="https://docs.google.com/forms/d/e/1FAIpQLSexndeVBBLvWglT1kfHZiQ6qywhp6zkATegoM0HChhpLy7Zmg/formResponse"
                    method="post"
                    target="hidden_iframe"
                    @submit="submitted = true"
                >
                    <div class="card p-3 my-3">
                        <div class="card-header bg-success text-light">
                            Ayah / Bunda
                        </div>
                        <div class="form-group mt-3">
                            <select
                                name="entry.283949581"
                                id="ayahbunda"
                                class="form-select text-capitalize"
                                v-model="form.siapa"
                            >
                                <option selected disabled>Pilih</option>
                                <option value="ayah">ayah</option>
                                <option value="bunda">bunda</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input
                                v-model="form.namaortu"
                                type="text"
                                class="form-control"
                                name="entry.85551255"
                            />
                        </div>
                    </div>

                    <div class="card p-3 my-3">
                        <div class="card-header bg-success text-light mb-3">
                            Orang tua dari :
                        </div>
                        <div class="form-group">
                            <label for="">Kelas :</label>
                            <select
                                name="entry.1048074324"
                                class="form-select"
                                v-model="selectedKelas"
                                @change="cariSiswa"
                            >
                                <option selected disabled>Pilih</option>
                                <option
                                    v-for="i in kelas"
                                    :value="i.name"
                                    v-html="i.name"
                                />
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Siswa:</label>
                            <select
                                name="entry.15352034"
                                v-model="form.ortudari"
                                class="form-select"
                            >
                                <option selected disabled>Pilih</option>
                                <option v-for="ii in siswa">
                                    {{ ii.name }}
                                </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for=""
                                >Hari
                                <i> (ket: untuk hari lain, bisi diisi manual)</i
                                >:</label
                            >
                            <input
                                type="hidden"
                                :value="selectedWaktu"
                                name="entry.470168096"
                            />
                            <v-select
                                item-text="entry.470168096"
                                item-name="entry.470168096"
                                v-model="selectedWaktu"
                                :options="pilihanWaktu"
                                :reduce="(waktu) => waktu.name"
                                label="name"
                                multiple
                                taggable
                                required
                            />
                        </div>
                    </div>

                    <p class="text-danger text-center">
                        NB: Pastikan semua telah terisi sebelum dikirim !
                    </p>
                    <button
                        type="submit"
                        @click="handleSubmit"
                        class="btn btn-success btn-block"
                    >
                        Kirim
                    </button>
                    <br /><br />
                </form>
            </div>
        </div>
    </div>
</template>
<script setup>
import { defineProps } from "vue";
import { Inertia } from "@inertiajs/inertia";
import { reactive, ref } from "vue";
import Swal from "sweetalert2";
var submitted = false;
let selectedKelas = ref();
let selectedWaktu = ref("");
const props = defineProps({
    kelas: Object,
    siswa: Object,
    // siswa: Object,
});
const form = reactive({
    siapa: "",
    nama: "",
    kelas: "",
    ortudari: "",
});

const handleSubmit = () => {
    Swal.fire({
        title: "Jazakumullah",
        text: "Semoga dimudahkan urusannya",
        icon: "success",
        confirmButtonText: "Aamiin",
    });
    setTimeout(() => {
        form.kelas = "";
        form.siapa = "";
        form.nama = "";
        form.ortudari = "";
        selectedKelas.value = "";
        Inertia.get(route("tahsin"));
    }, 3000);
};
const cariSiswa = () => {
    Inertia.get(
        route("tahsin"),
        {
            kelas: selectedKelas.value,
        },
        {
            preserveScroll: true,
            preserveState: true,
            replace: true,
        }
    );
};
let pilihanWaktu = [
    { id: 1, name: "(Selasa, 15.30)" },
    { id: 2, name: "(Rabu, 15.30)" },
    { id: 3, name: "(Jumat, 15.30)" },
];
</script>
