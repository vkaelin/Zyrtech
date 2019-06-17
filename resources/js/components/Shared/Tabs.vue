<template>
  <div>
    <nav class="bg-white rounded px-8 pt-2 shadow">
      <div class="-mb-px flex">
        <a
          v-for="tab in tabs"
          class="no-underline border-b-2 border-transparent uppercase tracking-wide font-bold text-xs py-3 mr-8"
          :class="{ 'text-green-500 font-bold': tab.isActive, 'text-grey-900': tab.isActive == false }"
          :href="tab.href"
          @click="selectTab(tab)"
          :key="tab.name"
        >{{ tab.name }}</a>
      </div>
    </nav>

    <div class="tabs-details">
      <slot></slot>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      tabs: []
    };
  },

  methods: {
    selectTab(selectedTab) {
      this.tabs.forEach(tab => {
        tab.isActive = (tab.href == selectedTab.href);
      });
    }
  },
  created() {
    this.tabs = this.$children;
  },
}
</script>