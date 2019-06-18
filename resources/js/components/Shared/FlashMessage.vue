<template>
  <div class="fixed top-0 right-0 m-6">
    <transition name="slide-fade">
      <div
        v-if="message"
        :class="{
          'bg-red-500': message.type === 'error',
          'bg-green-500': message.type === 'success'
        }"
        class="rounded-lg shadow-md p-6 pr-10 text-white"
        style="min-width: 240px"
      >
        <button
            @click="hideMessage"
            class="cursor-pointer block absolute top-0 right-0 border border-transparent rounded-full py-1 px-1 my-1 mx-1 focus:outline-none hover:border-white"
        >
        <svg class="fill-current w-3 h-3" viewBox="0 0 20 20"><path d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z"/></svg>
        </button>
        <div class="flex items-center text-white">
            <svg v-if="message.type === 'success'" class="icon icon-md" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM6.7 9.29L9 11.6l4.3-4.3 1.4 1.42L9 14.4l-3.7-3.7 1.4-1.42z"/></svg>
            <svg v-if="message.type === 'error'" class="icon icon-md" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm1.41-1.41A8 8 0 1 0 15.66 4.34 8 8 0 0 0 4.34 15.66zm9.9-8.49L11.41 10l2.83 2.83-1.41 1.41L10 11.41l-2.83 2.83-1.41-1.41L8.59 10 5.76 7.17l1.41-1.41L10 8.59l2.83-2.83 1.41 1.41z"/></svg>
            <span class="ml-3">{{ message.text }}</span>
        </div>
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
        this.hideMessage()
      }, time);
    },
    hideMessage() {
        this.message = null
    }
  },

  mounted() {
    // Regular form
    if (this.msg) {
        this.clearAfterTimer(3000);
    }

    // Ajax
    Bus.$on('flash-message', message => {
      this.message = message;
      this.clearAfterTimer(3000);
    });
  }
};
</script>
