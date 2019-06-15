<template>
    <div>
        <input
            v-model="value"
            @input="search"
            class="form-input"
            type="text"
            name="search"
            autocomplete="off"
            placeholder="Recherche..."
        />
    </div>
</template>

<script>
export default {
  data() {
    return {
      value: ''
    }
  },

  methods: {
      search() {
          this.$emit('searching', this.value)
      }
  }
}
</script>
