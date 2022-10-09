<template>
    <AppLayout>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr class="bg-dark text-light">
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jam</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(item, index) in teachers" :key="item.id">
                        <td>{{ index + 1 }}</td>
                        <td>{{ item.nama }}</td>
                        <td>{{ item.jam }}</td>
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
        teachers: Object,
    },
};
</script>
