<template>
    <AppLayout>
        <div class="d-flex justify-content-between mb-3">
            <div class="">
                <h4>Kategori</h4>
            </div>

            <button
                type="button"
                class="btn btn-success"
                data-bs-toggle="modal"
                data-bs-target="#exampleModal"
            >
                +
            </button>

            <!-- Modal -->
            <div
                class="modal fade"
                id="exampleModal"
                tabindex="-1"
                aria-labelledby="exampleModalLabel"
                aria-hidden="true"
            >
                <form @submit.prevent="handleSubmit">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">
                                    Tambah Kategori
                                </h5>
                                <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="modal"
                                    aria-label="Close"
                                ></button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Nama Kategori</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        v-model="form.nama"
                                    />
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button
                                    type="button"
                                    class="btn btn-secondary"
                                    data-bs-dismiss="modal"
                                >
                                    Close
                                </button>
                                <button
                                    type="submit"
                                    :disabled="form.processing"
                                    class="btn btn-success"
                                >
                                    Save changes
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Kategori</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(kt, index) in kategori">
                        <td>
                            {{ index + 1 }}
                        </td>
                        <td>
                            {{ kt.nama_kategori }}
                        </td>
                        <td>
                            <Link
                                as="button"
                                class="btn btn-success btn-sm mx-1"
                                >Edit</Link
                            >
                            <Link
                                as="button"
                                @click="hapusKategori(kt.id)"
                                class="btn btn-danger btn-sm mx-1"
                                >Hapus</Link
                            >
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </AppLayout>
</template>
<script>
import { useForm } from "@inertiajs/inertia-vue3";
import AppLayout from "../../../Shared/AppLayout.vue";
import Swal from "sweetalert2";
import { Inertia } from "@inertiajs/inertia";

export default {
    components: {
        AppLayout,
    },
    props: {
        kategori: Object,
    },
    setup() {
        const form = useForm({
            nama: null,
        });
        const handleSubmit = () => {
            form.post("/kategori-acara/store", {
                preserveScroll: true,
                onSuccess: () => {
                    form.reset("nama");
                    Toast.fire({
                        icon: "success",
                        title: "Kategori, Berhasil di tambah",
                    });
                },
            });
        };
        const hapusKategori = (id) => {
            Swal.fire({
                title: "Yakin Bos?",
                text: "Pikir lagi! Acara yang punya kategori tersebut juga terhapus",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!",
            }).then((result) => {
                if (result.isConfirmed) {
                    Inertia.get(route("acara.kategori.delete", id));
                    Swal.fire("Deleted!", "Berhasil di hapus.", "success");
                }
            });
        };
        return { form, handleSubmit, hapusKategori };
    },
};
</script>
