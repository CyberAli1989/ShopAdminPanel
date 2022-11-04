<template>
    <p>
        {{ this.comfy(this.val) }}
    </p>
</template>

<script>
export default {
    name: "price",
    props: ['val'],
    methods: {
        comfy: function (num) {
            var str = num.toString().split('.');
            if (str[0].length >= 5) {
                str[0] = str[0].replace(/(\d)(?=(\d{3})+$)/g, '$1,');
            }
            if (str[1] && str[1].length >= 5) {
                str[1] = str[1].replace(/(\d{3})/g, '$1 ');
            }
            return str.join('.');
        }

    }
}
</script>

<style scoped>

</style>
