<template>
    <div>
        <input
            v-model="value"
            @input="test"
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
      test() {
          this.$emit('searching', this.value)
      }
  }
}
</script>
