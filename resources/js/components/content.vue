<template>
  <div v-for="product in pagined" :key="product.id">
    <div
      class="text-grey-300 w-56 h-32 mx:w-46 lg:w-72 md:w-56 sm:w-56 font-bold text-center shadow-xl border-gray-400 border-2 rounded-2xl"
    >
      <div class="flex justify-end px-4 pt-2">
        <button
          id="dropdownButton"
          data-dropdown-toggle="dropdown"
          class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5"
          type="button"
        >
          <span class="sr-only"></span>
          <svg
            class="w-4 h-4"
            aria-hidden="true"
            fill="currentColor"
            viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"
            ></path>
          </svg>
        </button>
        <div
          id="dropdown"
          class="hidden z-10 w-20 text-base list-none rounded border-2 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700"
        >
          <ul class="py-1" aria-labelledby="dropdownButton">
            <li>
              <form action="{{ route('products.delete', $product) }}" method="POST">
                <input
                  type="submit"
                  class="block py-2 px-4 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"
                  value="Borrar"
                />
              </form>
            </li>
            <li>
              <a
                href="{{ route('products.edit', $product) }}"
                class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"
                >Editar</a
              >
            </li>
            <li>
              <a
                href="{{ route('products.edit', $product) }}"
                class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"
                >Ver</a
              >
            </li>
          </ul>
        </div>
      </div>
      <h2 class="m-4 lg:m-4 md:m-3 sm:m-6">{{ product.nombre }}</h2>
    </div>
  </div>
  <Pagination :products="products" @change="setProductsPagined" ></Pagination>
</template>

<script>
import useProducts from "../products";
import Pagination from "./pagination.vue";
import { onMounted } from "vue";

export default {
  components: { Pagination },
  data: () => ({
    products: [],
    pagined: [],
  }),
  setup() {
    const { products, getProducts } = useProducts();
    onMounted(() => getProducts() )
    return { products, getProducts }
  },
  methods: {
    setProductsPagined(data) {
      this.pagined = data;
    }
  },  
  watch: {
    pagined() {
      return this.pagined;
    }
  },
};
</script>
