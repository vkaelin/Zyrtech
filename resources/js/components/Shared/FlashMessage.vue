<template>
  <div class="fixed top-0 right-0 m-6">
    <transition name="slide-fade">
      <div
        v-if="message"
        :class="{
          'bg-red-200 text-red-900': message.type === 'error',
          'bg-green-200 text-green-900': message.type === 'success'
        }"
        class="rounded-lg shadow-md p-6 pr-10"
        style="min-width: 240px"
      >
        <button
          class="opacity-75 cursor-pointer absolute top-0 right-0 py-2 px-3 hover:opacity-100"
        >&times;</button>
        <div class="flex items-center">{{ message.text }}</div>
      </div>
    </transition>
  </div>
</template>

<script>
export default {
  props: {
    msg: Object
  },

  data() {
    return {
      message: this.msg,
      timer: 0
    };
  },

  methods: {
    clearAfterTimer(time) {
      clearTimeout(this.timer);
      this.timer = setTimeout(() => {
        this.message = null;
      }, time);
    }
  },

  mounted() {
    if (this.msg) {
      this.clearAfterTimer(5000);
    }

    Bus.$on('flash-message', message => {
      this.message = message;
      this.clearAfterTimer(5000);
    });
  }
};
</script>
