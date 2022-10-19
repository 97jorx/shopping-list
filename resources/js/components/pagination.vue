<template>
    <div>
        <ul>
            <li v-for="tag in laravelData.data" :key="tag.id">{{ tag.name }}</li>
        </ul>
        <pagination :data="laravelData" @pagination-change-page="getResults"></pagination>
    </div>
    <div>Hello!</div>
</template>
 
<script>
    export default {
        mounted() {
            console.log('Component mounted.')
            // this.allProducts();
        },
        data() {
            return {
                laravelData: {},
            }
        },
        methods: {
            getResults(page) {
                if (typeof page === 'undefined') {
                    page = 1;
                }
      
                this.$http.get('/products/index?page=' + page)
                    .then(response => {
                        return response.json();
                    }).then(data => {
                        this.laravelData = data;
                    });
            }
        }
    }
</script>