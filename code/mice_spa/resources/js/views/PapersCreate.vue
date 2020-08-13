<template>
    <div>
        <h1>Create a Paper</h1>
   
        <div v-if="message" class="alert">{{ message }}</div>
        <form @submit.prevent="onSubmit($event)">

        <div class="form-group">
              <label for="title">title</label>
              <textarea name="title" id="title" v-model="paper.title" ></textarea>
         </div>

         <div class="form-group">
              <label for="title">abstract</label>
              <textarea name="abstract" id="abstract" v-model="paper.abstracts" ></textarea>
         </div>

         
          <div class="form-group">
              <button type="submit" :disabled="saving">
                  {{ saving ? 'Creating...' : 'Create' }}
              </button>
          </div>
          </form>
    </div>
</template>

<script>

    import api from "../api/papers"

    export default {
        data() 
        {
            return {
                
                paper:{
                    title:'',
                    abstracts:''
                },
                saving:false,
                message:false
            };
        },

        methods :{
            onSubmit($event){
                this.saving = true
                this.message = false
                 api.create(this.paper)
                    .then((response) => {
                        console.log(response);
                        this.$router.push({ name: 'papers.edit', params: { id: response.data.data.id } });
                    })
                    .catch((e) => {
                        this.message = e.response.data.message || 'There was an issue creating the user.';
                    })
                    .then(() => this.saving = false)
            }
        }
    }


</script>