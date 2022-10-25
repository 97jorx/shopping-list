<template>
  <nav
    class="justify-center w-full inline-flex mt-10"
    ara-label="Page navigation example"
  >
    <ul class="inline-flex items-center -space-x-px">
      <li v-for="product in products.links" :key="product.id">
        <input type="hidden" v-model="product.label">
        <a
          @click="getPage(product.label)"
          class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
          >{{ product.label }}</a
        >
      </li>
    </ul>
  </nav>
</template>

<script>
export default {
  props: ["products"],
  methods: {
    getPage(label) {
      console.log(label);
      this.$emit('change', label)
    }
  },
  setup(props) {
    console.log(props);
  },
};
</script>
