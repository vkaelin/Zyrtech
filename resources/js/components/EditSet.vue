<template>
  <div class="max-w-lg">
    <form @submit.prevent="submit" method="POST">

        <label class="block mb-4">
          <span class="text-gray-700">Chef / Groupe</span>
          <select
            v-model="form.chef"
            class="form-multiselect block w-full mt-1"
            name="chef"
          >
            <option
              v-for="(chef) in chefs"
              :key="chef.id"
              :value="chef.id"
              :selected="chef.id === set.chef.id"
            >
              {{ chef.first_name }} {{ chef.last_name }}
            </option>
          </select>
        </label>

        <div class="mb-6">
          <h3 class="text-lg font-bold mb-3">Produits dans le set</h3>
          <div
              v-for="(product) in form.products"
              :key="'selected-'+product.id"
              @click="removeProduct(product.id)"
              class="inline-block"
          >
              <div class="group label-edit bg-green-500 hover:bg-red-500">
                <span>{{ product.name }}</span>
                <span class="ml-2 opacity-0 group-hover:opacity-100">
                  <svg class="fill-current w-2" viewBox="0 0 20 20"><path d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z"/></svg>
                </span>
              </div>
          </div>
        </div>

        <div class="mb-6">
          <h3 class="text-lg font-bold mb-3">Produits pas dans le set</h3>
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
                  <svg class="fill-current w-2" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                </span>
              </div>
          </div>
        </div>

        <button class="block bg-green-400 rounded py-2 px-4 text-white mt-8" type="submit">Valider les modifications</button>
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
      const setId = this.set.id;
      this.form.submit(`/dashboard/sets/${setId}`, 'patch')
        .then(response => location = response.data.message)
        .catch(err => {})
    }
  }
}
</script>