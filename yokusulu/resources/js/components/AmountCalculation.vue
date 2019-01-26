<template>
    <table class='table'>
        <thead>
        <tr>
            <th></th>
            <th>価格</th>
            <th>数量</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Nintendo Switch</td>
            <td>{{a}}</td>
            <td>
                <input class='form-control' type='number' v-model='b'>
            </td>
        </tr>
        <tr>
            <td>スプラトゥーン 2</td>
            <td>{{c}}</td>
            <td>
                <input class='form-control' type='number' v-model='d'>
            </td>
        </tr>
        </tbody>
    </table>
    <div class='text-right'>
        <p>  小計￥ {{sum}}</p>
        <p>消費税￥ {{tax}}</p>
        <p>  合計￥ {{sum + tax}}</p>
    </div>
</template>
<script>

    // 金額、計算
    export default {
        // button-counter と呼ばれる新しいコンポーネントを定義します
        // new Vue({
        //     el: "#app",
        //     data: { a: 43300, b: 1, c: 5566, d: 1},
        //     computed: {
        //         sum: function() { return this.a * this.b + this.c * this.d },
        //         tax: function() { return Math.ceil(this.sum * 0.08) },
        //     },
        // })

        mounted() {
            console.log('Component mounted.')
        }
    }
    new Vue({
        el: "#app",
        data: { a: 43300, b: 1, c: 5566, d: 1},
        computed: {
            sum: function() { return this.a * this.b + this.c * this.d },
            tax: function() { return Math.ceil(this.sum * 0.08) },
        },
    })
</script>
