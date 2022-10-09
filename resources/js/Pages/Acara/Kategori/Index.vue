<template>
    <AppLayout>
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
                                class="btn btn-success btn-sm mx-1"
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
import AppLayout from "../../../Shared/AppLayout.vue";
export default {
    components: {
        AppLayout,
    },
    props: {
        kategori: Object,
    },
};
</script>
