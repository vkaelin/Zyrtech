<template>
    <div class="mt-8 flex flex-wrap items-center">
        <a
            v-if="pagination.current_page > 1"
            href="#"
            @click.prevent="changePage(pagination.current_page - 1)"
            class="rounded bg-white border border-gray-400 px-3 py-2 text-gray-900 hover:bg-gray-400"
        >
            Précédent
        </a>
        <span v-else class="rounded bg-white border border-gray-400 px-3 py-2 text-gray-600 cursor-default select-none">
            Précédent
        </span>

        <a
            v-for="page in pagesNumber"
            :key="'page' + page"
            :class="{'bg-gray-400': page == pagination.current_page}"
            class="ml-2 hidden md:block rounded bg-white border border-gray-400 px-3 py-2 hover:bg-gray-400 text-gray-900"
            href="#"
            @click.prevent="changePage(page)"
        >
            {{ page }}
        </a>
        
        <a
            v-if="pagination.current_page < pagination.last_page"
            href="#" 
            @click.prevent="changePage(pagination.current_page + 1)"
            class="ml-2 rounded bg-white border border-gray-400 px-3 py-2 hover:bg-gray-400 text-gray-900"
        >
            Suivant
        </a>
        <span v-else class="ml-2 rounded bg-white border border-gray-400 px-3 py-2 text-gray-600 cursor-default select-none">
            Suivant
        </span>
    </div>
</template>
<script>
export default {
  props: {
    pagination: {
      type: Object,
      required: true
    },
    offset: {
      type: Number,
      default: 4
    }
  },
  computed: {
    pagesNumber() {
      if (!this.pagination.to) {
        return [];
      }
      let from = this.pagination.current_page - this.offset;
      if (from < 1) {
        from = 1;
      }
      let to = from + (this.offset * 2);
      if (to >= this.pagination.last_page) {
        to = this.pagination.last_page;
      }
      let pagesArray = [];
      for (let page = from; page <= to; page++) {
        pagesArray.push(page);
      }
      return pagesArray;
    }
  },
  methods: {
    changePage(page) {
      this.pagination.current_page = page;
      window.location.href = `${this.pagination.path}?page=${page}`;
    }
  }
}
</script>