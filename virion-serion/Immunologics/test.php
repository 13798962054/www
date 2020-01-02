<?php ?>

<script src="js/vue2.6.10.js"></script>

<div id="app">
    <p @click="clickMe(1)">aabe</p>
</div>

<script>

    var vm = new Vue({
        el: "#app",
        data: {
            msg: "af"
        },
        methods: {
            clickMe(a, b){
                this.msg = [a, b]
                console.log(this.msg)
            }
        }
    })
</script>


