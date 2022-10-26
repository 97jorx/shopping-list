import axios from 'axios';
import { ref } from 'vue';


export default function useProducts() {

    const products = ref([]);

    const getProducts = async (page) => {
        axios.get('/products/index?page=' + page)
        .then(res => {
            products.value = res.data.products;
        });
    }
     
    return { products, getProducts }
}