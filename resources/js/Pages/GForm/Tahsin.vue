<!-- https://docs.google.com/forms/d/e/1FAIpQLSexndeVBBLvWglT1kfHZiQ6qywhp6zkATegoM0HChhpLy7Zmg/formResponse

entry.283949581=Ayah&
entry.85551255=xxxx-nama&
entry.15352034=xxxx-ortu&
entry.1048074324=xxxx-kelas&
entry.470168096=xxxx-waktu -->

<template>
    <div class="container mt-5">
        <div class="row mb-3 justify-content-center">
            <h3 class="text-center">Tahsin</h3>
            <h1>{{ selectedKelas }}</h1>
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
                        <div class="card-header">Ayah / Bunda</div>
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
                        <div class="card-header mb-3">Orang tua dari :</div>

                        <select
                            name="entry.1048074324"
                            class="form-select"
                            id="caricari"
                        >
                            <option selected disabled>Pilih</option>
                            <option selected>Pilih</option>
                            <option selected>Pilih</option>
                            <!-- <option
                                v-for="(i, index) in kelas"
                                :key="i.id"
                                :value="i.id"
                            >
                                {{ i.name }}
                            </option> -->
                        </select>
                        <!-- <v-select
                            @change="cariSiswa"
                            v-model="selectedKelas"
                            :options="kelas"
                            :reduce="(kelas) => kelas.name"
                            label="name"
                        /> -->
                        <!-- <option selected disabled>Pilih</option> -->
                        <select
                            name="entry.15352034"
                            v-model="form.ortudari"
                            class="form-select"
                        >
                            <option v-for="ii in siswa">
                                {{ ii.name }}
                            </option>
                        </select>
                        <select name="entry.470168096" class="form-select">
                            <option>Rabu</option>
                            <option>Kami</option>
                            <option>jumat</option>
                        </select>
                    </div>

                    <button type="submit" @click="handleSubmit">o</button>
                </form>
            </div>
        </div>
    </div>
</template>
<script setup>
// import { defineProps } from "vue";
// import { Inertia } from "@inertiajs/inertia";
// import { reactive, ref } from "vue";
// import Swal from "sweetalert2";
// var submitted = false;
// let selectedKelas = ref();
// defineProps({
//     kelas: Object,
//     siswa: Object,
//     // siswa: Object,
// });
// const form = reactive({
//     siapa: "",
//     nama: "",
//     kelas: "",
//     ortudari: "",
// });

// const handleSubmit = () => {
//     Swal.fire({
//         title: "Jazakumullah",
//         text: "Semoga dimudahkan urusannya",
//         icon: "success",
//         confirmButtonText: "Aamiin",
//     });
//     form.namaayah = "";
// };
// const cariSiswa = (index) => {
//     console.log(index);
//     Inertia.get(
//         route("tahsin"),
//         {
//             kelas: selectedKelas.value,
//         },
//         {
//             preserveState: true,
//             replace: true,
//         }
//     );
// };
var index = document.getElementById("caricari").selectedIndex;
console.log(index);
</script>
