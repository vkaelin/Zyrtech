<template>
  <div class="dropdown relative">
    <!-- trigger -->
    <div
      @click.prevent="isOpen = !isOpen"
      :aria-expanded="isOpen"
      aria-haspopup="true"
    >
      <slot name="trigger"></slot>
    </div>

    <!-- menu links -->
    <div
      v-show="isOpen"
      :class="align === 'left' ? 'left-0' : 'right-0'"
      class="dropdown-menu absolute bg-white py-2 rounded shadow mt-2"
      :style="{ width }"
    >
      <slot></slot>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    width: { default: 'auto' },
    align: { default: 'left' }
  },
  data() {
    return {
      isOpen: false
    }
  },
  methods: {
    closeIfClickedOutside(event) {
      if (!this.$el.contains(event.target)) {
        this.isOpen = false
        document.removeEventListener('click', this.closeIfClickedOutside)
      }
    }
  },
  watch: {
    isOpen(val) {
      if (this.isOpen) {
        document.addEventListener('click', this.closeIfClickedOutside)
      }
    }
  }
}
</script>