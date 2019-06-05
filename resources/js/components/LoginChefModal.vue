<template>
  <modal name="login-chef" classes="p-10 bg-white rounded-lg" height="auto">
    <h1 class="text-2xl font-bold mb-16 text-center">Entrez votre code</h1>
  <form @submit.prevent="submit" method="POST" action="">
    <label class="block mb-4">
      <span class="text-gray-700">Code</span>
      <input type="text" class="form-input mt-1 block w-full" placeholder="Ex. 78FH9EF9FB">
    </label>

    <footer class="flex justify-end">
      <button class="bg-gray-300 px-4 py-2 rounded font-bold mr-4" type="button" @click="$modal.hide('login-chef')">Annuler</button>
      <button class="bg-green-500 px-4 py-2 rounded font-bold text-white" type="submit">Connexion</button>
    </footer>
  </form>

  </modal>
</template>

<script>
export default {
  data() {
    return {

    }
  },

  methods: {
  //   submit() {
  //     this.form.submit('/login')
  //       .then(response => location = response.data.message)
  //   }
  }
}
</script>
