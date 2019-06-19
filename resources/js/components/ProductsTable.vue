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
                <svg class="w-6 h-auto inline" viewBox="0 0 20 20">
                  <path
                    d="M0 6c0-1.1.9-2 2-2h3l2-2h6l2 2h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V6zm10 10a5 5 0 1 0 0-10 5 5 0 0 0 0 10zm0-2a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"
                  ></path>
                </svg>
              </a>
            </td>
            <td class="py-3 px-6 border-b border-gray-200">{{ product.type.name }}</td>
            <td class="py-3 px-6 border-b border-gray-200">{{ product.period.name }}</td>
            <td class="py-3 px-6 border-b border-gray-200">
              <span v-for="(label, index) in product.labels" :key="'label-' + index">{{ label.name }},</span>
            </td>
            <td class="py-3 px-6 border-b border-gray-200">
              <div class="cursor-pointer" @click="$modal.show('youtube-modal', {videoId: product.id} )">
                <svg viewBox="0 0 90 90" class="w-6 h-auto inline text-red-700 fill-current"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M70.939 65.832H66l.023-2.869a2.329 2.329 0 0 1 2.326-2.318h.315a2.332 2.332 0 0 1 2.332 2.318l-.057 2.869zm-18.526-6.148c-1.253 0-2.278.842-2.278 1.873V75.51c0 1.029 1.025 1.869 2.278 1.869 1.258 0 2.284-.84 2.284-1.869V61.557c0-1.032-1.026-1.873-2.284-1.873zM82.5 51.879v26.544C82.5 84.79 76.979 90 70.23 90H19.771C13.02 90 7.5 84.79 7.5 78.423V51.879c0-6.367 5.52-11.578 12.271-11.578H70.23c6.749 0 12.27 5.211 12.27 11.578zM23.137 81.305l-.004-27.961 6.255.002v-4.143l-16.674-.025v4.073l5.205.015v28.039h5.218zm18.75-23.796h-5.215V72.44c0 2.16.131 3.24-.008 3.621-.424 1.158-2.33 2.388-3.073.125-.126-.396-.015-1.591-.017-3.643l-.021-15.034h-5.186l.016 14.798c.004 2.268-.051 3.959.018 4.729.127 1.357.082 2.939 1.341 3.843 2.346 1.69 6.843-.252 7.968-2.668l-.01 3.083 4.188.005-.001-23.79zM58.57 74.607l-.011-12.427c-.004-4.736-3.547-7.572-8.356-3.74l.021-9.239-5.209.008-.025 31.89 4.284-.062.39-1.986c5.473 5.021 8.914 1.58 8.906-4.444zm16.321-1.647l-3.91.021c-.002.155-.008.334-.01.529v2.182c0 1.168-.965 2.119-2.137 2.119h-.766c-1.174 0-2.139-.951-2.139-2.119v-5.739h8.954v-3.37c0-2.463-.063-4.925-.267-6.333-.641-4.454-6.893-5.161-10.051-2.881a5.887 5.887 0 0 0-2.188 2.945c-.444 1.281-.665 3.031-.665 5.254v7.41c.002 12.318 14.964 10.577 13.179-.018zM54.833 32.732a3.55 3.55 0 0 0 1.254 1.584c.56.394 1.276.592 2.134.592.752 0 1.418-.203 1.998-.622.578-.417 1.065-1.04 1.463-1.871l-.099 2.046h5.813V9.74H62.82v19.24a1.907 1.907 0 0 1-3.811 0V9.74h-4.776v16.674c0 2.124.039 3.54.102 4.258.065.713.229 1.397.498 2.06zM37.217 18.77c0-2.373.198-4.226.591-5.562.396-1.331 1.107-2.401 2.137-3.208 1.027-.811 2.342-1.217 3.941-1.217 1.345 0 2.497.264 3.459.781.967.52 1.713 1.195 2.23 2.028a8 8 0 0 1 1.076 2.574c.195.891.291 2.235.291 4.048v6.252c0 2.293-.092 3.98-.271 5.051a8.006 8.006 0 0 1-1.146 3.004c-.58.924-1.329 1.615-2.237 2.056-.918.445-1.968.663-3.154.663-1.325 0-2.441-.183-3.361-.565-.923-.38-1.636-.953-2.144-1.714-.513-.762-.874-1.69-1.092-2.772-.219-1.081-.323-2.707-.323-4.874l.003-6.545zm4.553 9.82c0 1.4 1.042 2.543 2.311 2.543 1.27 0 2.308-1.143 2.308-2.543V15.43c0-1.398-1.038-2.541-2.308-2.541-1.269 0-2.311 1.143-2.311 2.541v13.16zm-16.088 6.645h5.484l.006-18.96L37.652.033h-5.998l-3.445 12.064L24.715 0h-5.936l6.894 16.284.009 18.951z" />
                </svg>
              </div>
            </td>
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
                <youtube-modal :link="product['video_link']" :id="product.id" ></youtube-modal>
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
      this.form.get('/api/findProduct?search=' + value)
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
