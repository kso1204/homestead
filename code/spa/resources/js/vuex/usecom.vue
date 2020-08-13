<template>
  <div class="content">
			<div class="container-fluid">
        <h1>I will show how all other component react to changes</h1>
        The master Component : {{ $store.state.counter }}
        <div>
            <comA></comA>
        </div>
         <div>
            <comB></comB>
        </div>
         <div>
            <comC></comC>
        </div>


        <button type="info" @click="changeCounter">
            change the state of the counter
        </button>

			</div>
            
            </div>
</template>

<script>
import comA from './comA'
import comB from './comB'
import comC from './comC'
    export default {
        data(){
            return {
                
            }
        },
        created(){
            console.log(this.$store.state.counter)
        },
        methods : {
            changeCounter(){
                this.$store.commit('chnageTheCounter', 1)
            }
        },
        components : {
            comA,
            comB,
            comC,
        }
    }
</script>