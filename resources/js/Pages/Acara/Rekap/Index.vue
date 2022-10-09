<template>
    <AppLayout>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Acara</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody></tbody>
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
        rekap: Object,
    },
};
</script>
