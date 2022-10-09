<template>
    <div class="text-center justify-items-center p-4">
        <div class="container">
            <card>
                <div class="card-body">
                    <H1>Pilih</H1>
                    <h1>{{ form.guru }}</h1>
                    <h1>{{ form.acara }}</h1>
                </div>
            </card>
            <div class="col-md-6" style="float: none; margin: auto">
                <button
                    v-if="!isSelected"
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
                <v-select
                    v-if="isSelected"
                    v-model="form.guru"
                    :options="guru"
                    :reduce="(guru) => guru.id"
                    label="nama"
                />
                <button
                    v-if="isSelected"
                    @click="submit"
                    class="btn btn-outline-success btn-block mt-4"
                >
                    Kirim
                </button>
            </div>
        </div>
    </div>
</template>
<script setup>
import { useForm } from "@inertiajs/inertia-vue3";
import { defineProps, ref } from "vue";
import Swal from "sweetalert2";
import { Inertia } from "@inertiajs/inertia";
// let selectedAcara = ref("");
// let selectedGuru = ref("");
const form = useForm({
    guru: "",
    acara: "",
});
let isSelected = ref(false);

const props = defineProps({
    acara: Object,
    guru: Object,
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
                title: "Good Job",
                text: "Terima kasih, telah berpartisipasi",
                icon: "success",
                confirmButtonText: "Harum",
            });
            Inertia.get("/saya_hadir");
        },
    });
};
</script>
