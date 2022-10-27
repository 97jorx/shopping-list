<template>
  <nav
    class="justify-center w-full inline-flex mt-10"
    ara-label="Page navigation example"
  >
    <ul class="inline-flex items-center -space-x-px">
      <a
        v-if="page != 1"
        @click="getPage(page--)"
        class="cursor-pointer py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
      >
        PREVIOUS</a
      >
      <a
        v-for="numberPage in pages.slice(page - 1, page + 5)"
        :key="numberPage"
        v-bind:class="(numberPage == page)?'text-red-500':''"
        @click="getPage(numberPage)"
        class="cursor-pointer py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
        >{{ numberPage }}</a
      >
      <a
        v-if="page < pages.length"
        @click="getPage(page++)"
        class="cursor-pointer py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
      >
        NEXT</a
      >
    </ul>
  </nav>
</template>

<script>
export default {
  props: {
    products: {
      type: Object,
      required: true,
    },
  },
  data() {
    return {
      items: [],
      eachPages: 10,
      page: 1,
      pages: [],
    };
  },
  mounted() {
    this.getData(this.products);
  },
  methods: {
    getPage(page) {
      this.page = page;
      console.log(page);
      this.$emit("change", this.paginate());
    },
    getData(data) {
      this.items = data;
    },
    totalPages() {
      let totalPages = Math.ceil(this.getAllItems.length / this.eachPages);
      for (let i = 1; i <= totalPages; i++) {
        this.pages.push(i);
      }
    },
    paginate() {
      let start = this.page * this.eachPages - this.eachPages; // (1 * 5) - 5 -> 0
      let end = this.page * this.eachPages; // (1 * 5) -> 5
      return this.getAllItems.slice(start, end);
    },
  },
  computed: {
    getAllItems() {
      return JSON.parse(JSON.stringify(this.items));
    },
  },
  watch: {
    products: function (newData) {
      this.getData(newData);
      this.totalPages();
      this.getPage(this.page);
    },
  },
};
</script>
