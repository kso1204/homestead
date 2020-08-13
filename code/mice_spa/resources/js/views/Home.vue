<template>
    <p>This is the homepage</p>
</template>


<script>

import axios from 'axios';

    export default {
        data() {
            return {
                user : null
            }
        },

        mounted(){
            axios.get('/api/user').then(
                res=>{
                    this.user = res.data;
                }
            )
        }
    }

</script>