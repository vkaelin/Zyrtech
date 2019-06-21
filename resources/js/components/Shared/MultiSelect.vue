<template>
  <div class="mt-2">
    <label class="hidden">
      <select :name="name" multiple>
        <option
          v-for="(item, index) in data"
          :key="'option-' + index"
          :value="item.id"
          :selected="selection.includes(item.id)"
        ></option>
      </select>
    </label>

    <slot name="label"></slot>
    <div class="mt-2 flex flex-wrap">
      <label
        v-for="(item, index) in data"
        :key="'check-' + index"
        class="mt-2 inline-flex items-center w-1/2 sm:w-1/3 md:w-1/4"
      >
        <input
          @click="toggle(item.id)"
          type="checkbox"
          class="form-checkbox w-5 h-5 border-gray-400"
        >
        <span class="ml-2">{{ item.name }}</span>
      </label>
    </div>
  </div>
</template>

<script>
export default {
  props: ['name', 'data'],

  data() {
    return {
      selection: []
    }
  },

  methods: {
    toggle(item) {
      if (this.selection.includes(item)) {
        this.selection = this.selection.filter((i) => {
          return i !== item
        })
      } else {
        this.selection.push(item)
      }
    }
  }
}
</script>
