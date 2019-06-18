<template>
  <div class="relative flex">
    <svg class="icon absolute left-0 ml-3 absolute-vert-center" viewBox="0 0 20 20">
      <path
        d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"
      ></path>
    </svg>
    <input
      v-model="value"
      @input="search"
      class="form-input px-10"
      type="text"
      name="search"
      autocomplete="off"
      placeholder="Recherche..."
    >
    <button v-show="!searchEmpty" @click="reset" class="mr-3 absolute right-0 absolute-vert-center focus:outline-none">
      <svg class="icon text-gray-800" viewBox="0 0 20 20">
        <path
          d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z"
        ></path>
      </svg>
    </button>
  </div>
</template>

<script>
export default {
  data() {
    return {
      value: ''
    }
  },

  computed: {
      searchEmpty() {
          return this.value.length === 0
      }
  },

  methods: {
    reset() {
      this.value = ''
      this.search()
    },
    search() {
      this.$emit('searching', this.value)
    }
  }
}
</script>
