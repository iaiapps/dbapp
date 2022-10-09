<template>
    <AppLayout>
        <div class="d-md-flex justify-content-between mb-3">
            <div class="">
                <h4>Rekap</h4>
            </div>
            <div>
                <div class="input-group">
                    <label for="" class="input-group-text">Bulan</label>
                    <select name="" id="" class="form-select me-2">
                        <option selected disabled>Pilih</option>
                        <option value="1">Januari</option>
                        <option value="2">Februari</option>
                        <option value="3">Maret</option>
                        <option value="4">April</option>
                        <option value="5">Mei</option>
                        <option value="6">Juni</option>
                        <option value="7">Juli</option>
                        <option value="8">Agustus</option>
                        <option value="9">September</option>
                        <option value="10">Oktober</option>
                        <option value="11">November</option>
                        <option value="12">Desember</option>
                    </select>
                    <label for="" class="input-group-text">Tahun</label>
                    <input
                        type="text"
                        class="form-control"
                        :value="currentYear"
                    />
                </div>
                <div class="input-group"></div>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jml_hadir_acara</th>
                        <th scope="col">Detail</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(item, index) in teachers">
                        <td>
                            {{ index + 1 }}
                        </td>
                        <td>
                            {{ item.nama }}
                        </td>
                        <td>jml</td>
                        <td>
                            <Link
                                as="button"
                                class="btn btn-success btn-sm mx-1"
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
import AppLayout from "../../Shared/AppLayout.vue";
export default {
    data() {
        return {
            currentYear: new Date().getFullYear(),
        };
    },
    components: {
        AppLayout,
    },

    props: {
        teachers: Object,
    },
};
</script>
