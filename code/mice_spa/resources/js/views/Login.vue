<template>
  <div class="row">
    <div class="col-lg-8 m-auto">
        <form @submit.prevent="onSubmit($event)" >
          <!-- Email -->
          <div class="form-group row">
            <label class="col-md-3 col-form-label text-md-right">email</label>
            <div class="col-md-7">
              <input v-model="form.email"  class="form-control" type="email" name="email">
            </div>
          </div>

          <!-- Password -->
          <div class="form-group row">
            <label class="col-md-3 col-form-label text-md-right">password</label>
            <div class="col-md-7">
              <input v-model="form.password" class="form-control" type="password" name="password">
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-7 offset-md-3 d-flex">
              <!-- Submit Button -->
              <button type='submit'>
                login
              </button>

              <!-- GitHub Login Button -->
            </div>
          </div>
        </form>
    </div>
  </div>
</template>

<script>
import Form from 'vform'
import axios from 'axios'


export default {

  data: () => ({
    form: {
      email: '',
      password: ''
    },
    errors:[]
  }),

  methods: {
     onSubmit () {
      // Submit the form.
      /*
      axios
      .post('/api/login',this.form)
       .then((response) => {
                        console.log(response);
                        this.$router.push({ name: 'home' });
                    })
                    .catch((e) => {
                        this.message = e.response.data.message || 'There was an issue creating the user.';
                    })*/
        axios.get('/sanctum/csrf-cookie').then(response => {
            console.log(response);
            
        axios.post('/api/login', this.form).then(()=>{
            this.$router.push( {name:'home'});        
        })
        .catch((error)=>{
            this.errors = error.response.data.erros;
        })
        
});            
    }
  }
}
</script>
