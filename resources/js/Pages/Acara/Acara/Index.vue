<template>
    <AppLayout>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr class="bg-dark text-light">
                        <th scope="col">#</th>
                        <th scope="col">Nama acara</th>
                        <th scope="col">Status</th>
                        <th scope="col">Atur</th>
                        <th scope="col">Rekap</th>
                        <!-- <th scope="col">Status</th> -->
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(item, index) in acara" :key="item.id">
                        <td>
                            {{ index + 1 }}
                        </td>
                        <td>
                            <small class="badge rounded-pill bg-primary">{{
                                item.kategori_acara.nama_kategori
                            }}</small
                            ><br />
                            {{ item.nama_acara }}
                        </td>
                        <td v-html="item.is_active ? 'aktif' : 'tidak aktif'" />
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
                            <Link :href="'/acara/' + item.id + '/show'"
                                >Detail</Link
                            >
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </AppLayout>
</template>
<script>
import { Inertia } from "@inertiajs/inertia";
import AppLayout from "../../../Shared/AppLayout.vue";

export default {
    components: {
        AppLayout,
    },
    props: {
        acara: Object,
    },
    methods: {
        jadwalkanHandle(id) {
            Inertia.get(route("acara.jadwalkan", id));
        },
    },
};
</script>
