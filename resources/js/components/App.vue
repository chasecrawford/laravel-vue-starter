<template>

    <main>
        <component
            v-bind:is="primary_component"
            v-bind:data="data"
        ></component>
    </main>

</template>
<script>
export default {
    props: [
        'primary_component',
        'data'
    ],
    data: function() {
        return {
        }
    },
    mounted() {
    }
}
</script>
