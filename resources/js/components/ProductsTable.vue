<template>
  <div>
    <div class="mt-4 flex items-center justify-between flex-wrap">
      <search-dashboard @searching="filterProducts" class="mt-2"></search-dashboard>
      <a
        class="mt-2 bg-green-500 rounded py-2 px-4 text-white leading-tight hover:bg-green-400"
        href="/admin/products/create"
      >Ajouter un produit</a>
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
          <tr v-for="(product, index) in products.data" :key="'product-' + index">
            <td class="py-3 px-6 border-b border-gray-200">{{ product.name }}</td>
            <td class="py-3 px-6 border-b border-gray-200">{{ maxLength(product.description, 20) }}</td>
            <td class="py-3 px-6 border-b border-gray-200">
              <a :href="'/storage/' + product['image_src']" target="_blank">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 20 20"
                  class="w-6 h-auto inline"
                >
                  <path
                    d="M0 6c0-1.1.9-2 2-2h3l2-2h6l2 2h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V6zm10 10a5 5 0 1 0 0-10 5 5 0 0 0 0 10zm0-2a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"
                  ></path>
                </svg>
              </a>
            </td>
            <td class="py-3 px-6 border-b border-gray-200">{{ product.type.name }}</td>
            <td class="py-3 px-6 border-b border-gray-200">{{ product.period.name }}</td>
            <td class="py-3 px-6 border-b border-gray-200">
              <span v-for="(label) in product.labels" :key="'label-' + label">{{ label.name }},</span>
            </td>
            <td class="py-3 px-6 border-b border-gray-200">vids</td>
            <td class="py-3 px-6 border-b border-gray-200">pdf</td>
            <td class="py-3 px-6 border-b border-gray-200">
              <div class="flex">
                <a
                  :href="`/admin/products/${product.id}/edit`"
                  class="inline-block btn-primary btn-sm"
                >Modifier</a>
                <form class="inline-block" method="POST" :action="`/admin/products/${product.id}`">
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

    <pagination :pagination="products" @paginate="getProductsPerPage" :offset="5"></pagination>
  </div>
</template>

<script>
import ZyrtechForm from './ZyrtechForm';

export default {
  props: {
    'headers': Array,
    'allProducts': Object,
    'csrf': String
  },

  data() {
    return {
      products: this.allProducts,
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
    filterProducts(value) {
      // Empty Search
      if (!value) {
        this.products = this.allProducts
        return
      }
      this.form.get('/api/findproduct?search=' + value)
        .then(response => {
          this.products = response.data
        })
        .catch(err => { })
    },

    getProductsPerPage() {
      this.form.get('/admin/products/?page=' + this.products.current_page)
        .then(response => {
          this.products = response.data
        })
        .catch(err => { })
    },

    maxLength(text, length) {
      if (text.length > length) {
        return text.substring(0, length) + '...'
      } else {
        return text
      }
    }
  }
}
</script>
