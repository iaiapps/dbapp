<template>
    <div>
        <h1>{{ options }}</h1>
        <multiselect v-model="value" :options="options"></multiselect>
    </div>
</template>
<script>
export default {
    data() {
        return {
            value: "",
            options: [
                "Select option",
                "options",
                "selected",
                "multiple",
                "label",
                "searchable",
                "clearOnSelect",
                "hideSelected",
                "maxHeight",
                "allowEmpty",
                "showLabels",
                "onChange",
                "touched",
            ],
        };
    },
};
</script>
