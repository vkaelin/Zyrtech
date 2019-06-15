<template>
    <div>
        <div class=" mt-4 flex items-center justify-between flex-wrap">
            <search-dashboard @searching="filterChefs" class="mt-2"></search-dashboard>
            <a class="mt-2 bg-green-500 rounded py-2 px-4 text-white leading-tight hover:bg-green-400" href="/dashboard/chefs/create">Ajouter un chef</a>
        </div>
        <div class="mt-4 table-container">
            <table class="table">
                <thead>
                    <tr>
                        <th v-for="(title, index) in headers" :key="'title-' + index"
                        class="py-4 px-6 bg-gray-800 font-bold uppercase text-sm text-gray-100 border-r border-white">
                            {{ title }}
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-if="! chefs.data.length" class="hover:bg-gray-300">
                        <td class="py-4 px-6" colspan="3">Vous n'avez pas de chefs.</td>
                    </tr>

                    <tr v-for="(chef, index) in chefs.data" :key="'chef-' + index">
                        <td class="py-4 px-6 border-b border-gray-200">
                            <svg v-if="chef.group" class="fill-current w-4" viewBox="0 0 20 20">
                                <path
                                    d="M7 8a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0 1c2.15 0 4.2.4 6.1 1.09L12 16h-1.25L10 20H4l-.75-4H2L.9 10.09A17.93 17.93 0 0 1 7 9zm8.31.17c1.32.18 2.59.48 3.8.92L18 16h-1.25L16 20h-3.96l.37-2h1.25l1.65-8.83zM13 0a4 4 0 1 1-1.33 7.76 5.96 5.96 0 0 0 0-7.52C12.1.1 12.53 0 13 0z" />
                            </svg>
                            <svg v-else class="fill-current w-4" viewBox="0 0 20 20">
                                <path
                                    d="M5 5a5 5 0 0 1 10 0v2A5 5 0 0 1 5 7V5zM0 16.68A19.9 19.9 0 0 1 10 14c3.64 0 7.06.97 10 2.68V20H0v-3.32z" />
                            </svg>
                        </td>
                        <td class="py-4 px-6 border-b border-gray-200">
                            {{ chef['first_name'] }} {{ chef['last_name'] }}
                        </td>
                        <td class="py-4 px-6 border-b border-gray-200">
                            <div class="flex">
                                <a href="#"
                                    class="text-white font-bold py-1 px-3 mr-2 rounded text-xs bg-green-600 hover:bg-green-700">
                                    Modifier
                                </a>
                                <a href="#" class="text-white font-bold py-1 px-3 rounded text-xs bg-red-600 hover:bg-red-700">
                                    Supprimer
                                </a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <pagination :pagination="chefs" @paginate="getChefsPerPage" :offset="5"></pagination>
    </div>
</template>

<script>
import ZyrtechForm from './ZyrtechForm';

export default {
  props: {
    'headers': Array,
    'allChefs': Object
  },

  data() {
    return {
      chefs: this.allChefs,
      form: new ZyrtechForm({
        search: ''
      })
    }
  },

  methods: {
    filterChefs(value) {
      // Empty Search
      if (!value) {
        this.chefs = this.allChefs
        return
      }
      this.form.get('/api/findChef?search=' + value)
        .then(response => {
          this.chefs = response.data
        })
        .catch(err => {})
    },

    getChefsPerPage() {
        this.form.get('/dashboard/chefs/?page=' + this.chefs.current_page)
        .then(response => {
          this.chefs = response.data
        })
        .catch(err => {})
    }
  }
}
</script>
