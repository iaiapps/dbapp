<template>
    <AppLayout>
        <div class="d-md-flex justify-content-between mb-3">
            <div class="">
                <h4>Acara</h4>
            </div>

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
                                    Tambah Acara
                                </h5>
                                <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="modal"
                                    aria-label="Close"
                                ></button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group mb-2">
                                    <label>Kategori</label>
                                    <select
                                        v-model="form.kategori_acara_id"
                                        class="form-select"
                                    >
                                        <option
                                            v-for="i in kategori"
                                            v-html="i.nama_kategori"
                                            :value="i.id"
                                        />
                                    </select>
                                </div>
                                <div class="form-group mb-2">
                                    <label>Untuk</label>
                                    <v-select
                                        multiple
                                        v-model="form.for"
                                        :reduce="(option) => option.id"
                                        :options="[
                                            { label: 'Semua', id: 3 },
                                            { label: 'Hanya Guru', id: 1 },
                                            {
                                                label: 'Hanya Siswa/Ortu',
                                                id: 2,
                                            },
                                        ]"
                                    />
                                </div>
                                <div class="form-group mb-2">
                                    <label>Nama Acara</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        v-model="form.nama_acara"
                                    />
                                </div>
                                <div class="form-group mb-2">
                                    <label>Untuk tanggal</label>
                                    <input
                                        type="date"
                                        class="form-control"
                                        v-model="form.untuk_tanggal"
                                    />
                                </div>
                                <div class="form-group mb-2">
                                    <label>Tempat</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        v-model="form.tempat"
                                    />
                                </div>
                                <!-- <div class="form-group mb-2">
                                    <label>Catatan</label>
                                    <textarea
                                        type="text"
                                        class="form-control"
                                        v-model="form.catatan"
                                    />
                                </div> -->
                                <div class="form-group mb-2">
                                    <label>Status</label>

                                    <div class="custom-control custom-checkbox">
                                        <input
                                            type="checkbox"
                                            class="custom-control-input"
                                            id="customCheck1"
                                            :checked="form.is_active"
                                            v-model="form.is_active"
                                        />
                                        <label
                                            class="custom-control-label"
                                            for="customCheck1"
                                            >Aktif</label
                                        >
                                    </div>
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
                                <button type="submit" class="btn btn-success">
                                    Save changes
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div>
                <form @submit.prevent="handleFilter">
                    <div class="input-group">
                        <label class="input-group-text">Tahun</label>
                        <input
                            type="text"
                            class="form-control"
                            v-model="tahun"
                            @input="handleFilter"
                        />
                        <Link
                            class="btn btn-default btn-outline-dark"
                            href="/acara/index"
                        >
                            Reset
                        </Link>
                        <button
                            type="button"
                            class="btn btn-success ms-3"
                            data-bs-toggle="modal"
                            data-bs-target="#exampleModal"
                        >
                            +
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr class="bg-dark text-light">
                        <th scope="col">#</th>
                        <th scope="col">Nama acara</th>
                        <th scope="col">Tgl</th>
                        <th scope="col">Lokasi</th>
                        <!-- <th scope="col">Note</th> -->
                        <th scope="col">Status</th>
                        <th scope="col">jml hadir</th>
                        <th scope="col">Atur</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(item, index) in acara.data" :key="item.id">
                        <td>
                            {{ index + 1 }}
                        </td>
                        <td>
                            {{ item.nama }}
                            <br />
                            <small class="badge rounded-pill bg-primary">{{
                                item.kategori
                            }}</small>
                        </td>
                        <td>{{ item.tanggal }}</td>
                        <td>{{ item.lokasi }}</td>
                        <!-- <td>{{ item.catatan }}</td> -->
                        <td v-html="item.is_active ? 'aktif' : 'tidak aktif'" />
                        <td>{{ item.jml_hadir }}</td>
                        <td>
                            <Link
                                v-if="!item.is_active"
                                as="button"
                                class="btn btn-success btn-sm mx-1"
                                @click="jadwalkanHandle(item.id)"
                                >Aktifkan</Link
                            >
                            <Link
                                v-else
                                as="button"
                                class="btn btn-outline-danger btn-sm mx-1"
                                @click="jadwalkanHandle(item.id)"
                                >Nonaktifkan</Link
                            >
                        </td>
                        <td>
                            <Link
                                :href="'/acara/' + item.id + '/show'"
                                class="me-3"
                                >Lihat</Link
                            >

                            <Link
                                class="text-danger"
                                @click="hapusAcara(item.id)"
                                >Hapus</Link
                            >
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center">
            <Link
                as="button"
                class="btn btn-outline-primary btn-sm mx-1"
                :href="acara.first_page_url"
                v-if="acara.first_page_url"
                >First</Link
            >
            <Link
                as="button"
                class="btn btn-outline-primary btn-sm mx-1"
                :href="acara.prev_page_url"
                >&laquo</Link
            >
            <Link
                as="button"
                class="btn btn-primary btn-sm mx-1"
                :href="acara.prev_page_url"
                >{{ acara.current_page }}</Link
            >
            <Link
                as="button"
                class="btn btn-outline-primary btn-sm mx-1"
                :href="acara.next_page_url"
                >&raquo</Link
            >
            <Link
                as="button"
                class="btn btn-outline-primary btn-sm mx-1"
                :href="acara.last_page_url"
                v-if="acara.last_page_url"
                >Last</Link
            >
        </div>
    </AppLayout>
</template>
<script>
import { Inertia } from "@inertiajs/inertia";
import { useForm } from "@inertiajs/inertia-vue3";
import Swal from "sweetalert2";
import AppLayout from "../../../Shared/AppLayout.vue";

export default {
    data() {
        return {
            tahun: this.tahun,
        };
    },
    components: {
        AppLayout,
    },
    props: {
        kategori: Object,
        acara: Object,
        tahun: Object,
    },
    methods: {
        jadwalkanHandle(id) {
            Inertia.get(route("acara.jadwalkan", id));
        },
        handleFilter() {
            Inertia.get(
                route("acara.index"),
                {
                    tahun: this.tahun,
                },
                {
                    preserveState: true,
                    replace: true,
                }
            );
        },
    },
    setup() {
        const form = useForm({
            nama_acara: "",
            kategori_acara_id: "",
            untuk_tanggal: "",
            tempat: "",
            catatan: "",
            for: null,
            is_active: true,
        });
        const handleSubmit = () => {
            form.post(route("acara.store"), {
                preserveScroll: true,
                onSuccess: () => {
                    form.reset();
                    Toast.fire({
                        icon: "success",
                        title: "Acara Berhasil di buat",
                    });
                },
            });
        };
        const hapusAcara = (id) => {
            // if (
            //     confirm(
            //         "MENGHAPUS MENYEBABKAN DATA REKAP ACARA JUGA HILANG ! -- Yakin mau hapus acara? "
            //     )
            // ) {
            //     Inertia.get(route("acara.destroy", id));
            // }

            Swal.fire({
                title: "Yakin Bos?",
                text: "Pikir lagi! Menghapusnya menyebabkan data rekap Hilang juga loh!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!",
            }).then((result) => {
                if (result.isConfirmed) {
                    Inertia.get(route("acara.destroy", id));
                    Swal.fire(
                        "Deleted!",
                        "Your file has been deleted.",
                        "success"
                    );
                }
            });
        };
        return { handleSubmit, form, hapusAcara };
    },
};
</script>
