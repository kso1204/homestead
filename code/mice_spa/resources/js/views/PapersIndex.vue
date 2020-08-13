<template>
    <div class="papers">
        <ul v-if="papers">
            <li v-for="paper in papers">
                <strong>title : {{paper.title}}</strong>,
                <strong>abstracts : {{paper.abstracts}}</strong>
                <router-link to="{ name:'papers.edit', params:{id} }"></router-link>
            </li>
        </ul>

        <div>
           <router-link :to="{ name: 'papers.create' }">Add Paper</router-link>
        </div>
        
         <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li v-bind:class="[{disabled: !pagination.prev_page_url}]" class="page-item">
    <a class="page-link" href="#" @click="fetchArticles(pagination.prev_page_url)">Previous</a></li>
    
    <li  class="page-item disabled">
    <a class="page-link text-dark" href="#" >Page {{ pagination.current_page}} of {{pagination.last_page}} </a></li>

    <li v-bind:class="[{disabled: !pagination.next_page_url}]" class="page-item">
    <a class="page-link" href="#" @click="fetchArticles(pagination.next_page_url)">Next</a></li>
  </ul>
</nav>
    </div>
    
</template>

<script>

    import axios from 'axios';


   export default {
        data() {
            return {
                papers: {},
                pagination: {},
                edit:false                
            }
        },

        created() {
            this.fetchArticles();
        },

        methods: {
            fetchArticles(page_url){
                let vm = this;
                page_url = page_url || '/api/papers'
                axios
                .get(page_url)
                .then(res => {
                    console.log(res);
                    this.papers = res.data.data;
                    vm.makePagination(res.data.meta, res.data.links);
                })
                .catch(err => console.log(err));
            },
            makePagination(meta, links){
                let pagination = {
                    current_page: meta.current_page,
                    last_page: meta.last_page,
                    next_page_url: links.next,
                    prev_page_url: links.prev
                }

                this.pagination = pagination;
            }
        }
   }

</script>