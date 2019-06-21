<template>
  <div class="mt-6 max-w-xl bg-white rounded shadow p-8">
    <form @submit.prevent="submit" method="POST">
      <label class="block">
        <span class="font-semibold">Chef / Groupe</span>
        <select
          v-model="form.chef"
          class="form-select block w-full mt-1 border-gray-400"
          name="chef"
        >
          <option
            v-for="(chef) in chefs"
            :key="chef.id"
            :value="chef.id"
            :selected="chef.id === set.chef.id"
          >{{ chef.first_name }} {{ chef.last_name }}</option>
        </select>
      </label>

      <div class="mt-6">
        <h3 class="font-semibold mb-3">Produits actuellement dans le Set</h3>
        <div
          v-for="(product) in form.products"
          :key="'selected-'+product.id"
          @click="removeProduct(product.id)"
          class="inline-block"
        >
          <div class="group label-edit bg-green-500 hover:bg-red-500">
            <span>{{ product.name }}</span>
            <span class="ml-2 opacity-0 group-hover:opacity-100">
              <svg class="fill-current w-2" viewBox="0 0 20 20">
                <path
                  d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z"
                ></path>
              </svg>
            </span>
          </div>
        </div>
      </div>

      <div class="mt-6">
        <h3 class="font-semibold mb-3">Autres Produits</h3>
        <div
          v-for="(product) in products"
          :key="product.id"
          @click="addProduct(product.id)"
          class="inline-block"
        >
          <div
            v-if="! form.products.some(c => c.id === product.id)"
            class="group label-edit bg-red-500 hover:bg-green-500"
          >
            <span>{{ product.name }}</span>
            <span class="ml-2 opacity-0 group-hover:opacity-100">
              <svg class="fill-current w-2" viewBox="0 0 20 20">
                <path d="M0 11l2-2 5 5L18 3l2 2L7 18z"></path>
              </svg>
            </span>
          </div>
        </div>
      </div>

      <span v-if="form.errors.products" class="mt-2 text-xs text-red-600 italic">{{ form.errors.products }}</span>

      <button class="mt-8 ml-auto block btn-primary" type="submit">Valider les modifications</button>
    </form>
  </div>
</template>

<script>
import ZyrtechForm from './ZyrtechForm'

export default {
  props: {
    'set': Object,
    'selected-products': Array,
    'chefs': Array,
    'products': Array
  },

  data() {
    return {
      form: new ZyrtechForm({
        chef: this.set.chef.id,
        products: this.selectedProducts
      })
    }
  },

  methods: {
    addProduct(id) {
      this.form.products.push(this.products.find(item => item.id === id));
    },
    removeProduct(id) {
      this.form.products = this.form.products.filter(item => item.id !== id)
    },
    submit() {
      if (this.form.products.length === 0) {
        this.form.errors = {}
        this.form.errors.products = 'Le Set doit contenir au moins un produit.'
        return
      }
      const setId = this.set.id;
      this.form.submit(`/api/editSet/${setId}`, 'patch')
        .then(response => location = response.data.message)
        .catch(err => { })
    }
  }
}
</script>
