<template>
  <div class="text-white">
    <div class="flex items-center justify-between px-4">
      <h2>
        <a class="text-lg sm:text-xl font-bold" href="/">Zyrtech SA</a>
      </h2>
      <div class="flex items-center">
        <div class="flex items-center">
          <h3 class="text-base font-bold mr-1">{{ title }}</h3>
          <p class="px-2 py-1 text-xs text-white bg-green-500 rounded-full">{{ tag }}</p>
        </div>
        <div @click="openNav = !openNav" class="ml-4">
          <svg class="fill-current w-4" viewBox="0 0 20 20">
            <path
              v-if="openNav"
              d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z"
            ></path>
            <path v-else d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
          </svg>
        </div>
      </div>   
    </div>
    <nav :class="[openNav ? 'open pt-8' : 'close']">
      <ul>
        <slot></slot>
      </ul>
    </nav>
  </div>
</template>

<script>
export default {
  props: ['title', 'tag'],

  data() {
    return {
      openNav: false
    }
  },
}
</script>

<style scoped>
.open {
  height: auto;
}

.close {
  height: 0;
  overflow: hidden;
}
</style>
