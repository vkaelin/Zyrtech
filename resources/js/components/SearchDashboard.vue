<template>
    <div class="relative flex">
        <svg class="icon absolute left-0 ml-3 absolute-vert-center" viewBox="0 0 20 20"><path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"/></svg>
        <input
            v-model="value"
            @input="search"
            class="form-input pl-10"
            type="text"
            name="search"
            autocomplete="off"
            placeholder="Recherche..."
        />
        <button @click="reset" class="ml-2 bg-white flex items-center justify-center rounded px-4 py-3 leading-normal border border-gray-300 focus:outline-none hover:bg-gray-400">
            <svg class="icon text-gray-800" viewBox="0 0 20 20"><path d="M6 2l2-2h4l2 2h4v2H2V2h4zM3 6h14l-1 14H4L3 6zm5 2v10h1V8H8zm3 0v10h1V8h-1z"/></svg>
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
