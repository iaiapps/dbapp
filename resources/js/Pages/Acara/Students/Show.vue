<template>
    <AppLayout>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Nama Acara</th>
                        <th scope="col">Jam</th>
                        <th scope="col">Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(item, index) in acara" :key="item.id">
                        <td>{{ index + 1 }}</td>
                        <td>{{ item.kategori }}</td>
                        <td>{{ item.nama_acara }}</td>
                        <td>{{ item.jam }}</td>
                        <td>{{ item.tanggal }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </AppLayout>
</template>
<script>
import AppLayout from "../../Shared/AppLayout.vue";
export default {
    components: {
        AppLayout,
    },
    props: {
        acara: Object,
    },
};
</script>
