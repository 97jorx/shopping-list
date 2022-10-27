<template>
  <nav
    class="justify-center w-full inline-flex mt-10"
    ara-label="Page navigation example"
  >
    <ul class="inline-flex items-center -space-x-px">
      <li v-for="product, index in pages" :key="index">
        <a
          @click="getPage(index)"
          class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
          >{{ index }}</a
        >
      </li>
    </ul>
  </nav>
</template>

<script>
export default {
  props: {
    products: {
     type: Object,
     required: true,
   }
  },
  data() {
    return {
      items: [],
      eachPages: 10,
      pages: [],
    }
  },
  mounted() {
    this.getData(this.products)
    this.products;
  },
  methods: {
    getPage(page) {
      console.log(page)
      this.$emit('change', this.paginate(page))
    },
    getData(data)  {
      this.items = data;
    },
    totalPages() {
       return Math.ceil(this.getAllItems.length / this.eachPages); // 
    },
    paginate(currentPage) {
      let start = (currentPage * this.eachPages) - this.eachPages; // (1 * 5) - 5 -> 0
      let end = (currentPage * this.eachPages); // (1 * 5) -> 5
      this.pages = this.getAllItems.slice(start, end);
      return this.pages;
    },
  },
  computed: {
    getAllItems() {
      return JSON.parse(JSON.stringify(this.items));
    }
  },
  watch: {
    products: function(newData) {
      this.getData(newData);
      this.paginate(1)
    }
  }
};
</script>
