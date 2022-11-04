<template>
    <div>
        <input type="text" className="form-control" @keyup="fix" :placeholder="place" v-model="price">
        <input type="hidden" :name="myname" v-model="myvalue">
    </div>
</template>

<script>
export default {
    name: "comfy",
    props: ['place', 'val', 'myname'],
    data: function () {
        return {
            price: '',
            myvalue: '',
        }
    },
    mounted() {
        this.price = this.commafy(this.val);
        this.myvalue = this.val;
    },
    methods: {
        fix: function () {
            this.price = this.commafy(this.price.split(',').join(''));
            this.myvalue = this.price.split(',').join('');
        },
        commafy: function (num) {
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
