<template>
  <div>
    <div class="mt-4 flex items-center justify-between flex-wrap">
      <search-dashboard @searching="filterUsers" class="mt-2"></search-dashboard>
      <a
        class="mt-2 bg-green-500 rounded py-2 px-4 text-white leading-tight hover:bg-green-400"
        href="/admin/users/create"
      >Ajouter un utilisateur</a>
    </div>
    <div class="mt-4 table-container">
      <table class="table">
        <thead>
          <tr>
            <th
              v-for="(title, index) in headers"
              :key="'title-' + index"
              class="py-3 px-6 bg-gray-800 font-bold uppercase text-sm text-gray-100 border-r border-white"
            >{{ title }}</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="(user, index) in users.data" :key="'user-' + index">
            <td
              class="py-3 px-6 border-b border-gray-200"
            >{{ user['first_name'] }} {{ user['last_name'] }}</td>
            <td class="py-3 px-6 border-b border-gray-200">{{ user.role.name | capitalize }}</td>
            <td class="py-3 px-6 border-b border-gray-200">
              <div class="flex">
                <a
                  :href="`/admin/users/${user.id}/edit`"
                  class="inline-block btn-primary btn-sm"
                >Modifier</a>
                <form class="inline-block" method="POST" :action="`/admin/users/${user.id}`">
                  <input type="hidden" name="_token" :value="csrf">
                  <input type="hidden" name="_method" value="DELETE">

                  <button class="ml-3 btn-danger btn-sm" type="submit">Supprimer</button>
                </form>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <pagination :pagination="users" @paginate="getUsersPerPage" :offset="5"></pagination>
  </div>
</template>

<script>
import ZyrtechForm from './ZyrtechForm';

export default {
  props: {
    'headers': Array,
    'allUsers': Object,
    'csrf': String
  },

  data() {
    return {
      users: this.allUsers,
      form: new ZyrtechForm({
        search: ''
      })
    }
  },

  filters: {
    capitalize(value) {
      if (!value) return ''
      value = value.toString()
      return value.charAt(0).toUpperCase() + value.slice(1)
    }
  },

  methods: {
    filterUsers(value) {
      // Empty Search
      if (!value) {
        this.users = this.allUsers
        return
      }
      this.form.get('/api/findUser?search=' + value)
        .then(response => {
          this.users = response.data
        })
        .catch(err => { })
    },

    getUsersPerPage() {
      this.form.get('/admin/users/?page=' + this.users.current_page)
        .then(response => {
          this.users = response.data
        })
        .catch(err => { })
    },
  }
}
</script>
