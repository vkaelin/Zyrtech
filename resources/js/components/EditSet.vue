<template>
  <div class="max-w-lg">
    <form method="POST" action="">
        <!-- @csrf
        @method('PATCH') -->

        <h3 class="text-lg font-bold mb-3">Chefs dans le set</h3>
        <div
            v-for="(chef) in selectedChefs"
            :key="'selected'+chef.id"
            class="inline-flex items-center bg-green-500 px-2 py-1 mb-2 mr-1 text-xs text-white rounded-full cursor-pointer"
            :id="chef.id"
        >
            <div>
              <span>{{ chef.first_name }} {{ chef.last_name }}</span>
              <span class="ml-2 font-bold">x</span>
            </div>
        </div>

        <h3 class="text-lg font-bold mb-3">Chefs pas dans le set</h3>
        <div
            v-for="(chef) in chefs"
            :key="chef.id"
            :id="chef.id"
            class="inline-flex"
        >
            <div
              v-if="! selectedChefs.some(c => c.code === chef.code)"
              class="inline-flex items-center bg-green-500 px-2 py-1 mb-2 mr-1 text-xs text-white rounded-full cursor-pointer"
            >
              <span>{{ chef.first_name }} {{ chef.last_name }}</span>
              <span class="ml-2 font-bold">x</span>
            </div>
        </div>

        <!-- <label class="block mb-4">
            <span class="text-gray-700">Produits dans le set</span>
            <select class="form-multiselect block w-full mt-1" name="products[]" multiple>
                @foreach ($set->products as $product)
                <option value="{{ $product->id }}">{{ $product->name }}</option>
                @endforeach
            </select>
        </label>

        <div class="mb-4">
            <p class="text-lg font-bold">Autres produits</p>
            @foreach ($products as $product)
                @if (! $set->products->contains($product))
                    <p>{{ $product->name }}</p>
                @endif
            @endforeach
        </div> -->

        <button class="block bg-green-400 rounded py-2 px-4 text-white mt-8">Modifier</button>
    </form>
</div>
</template>

<script>
export default {
  props: {
    'set': Object,
    'selected-products': Array,
    'selected-chefs': Array,
    'chefs': Array,
    'products': Array
  },

  // props: ['set', 'selected-products', 'selected-chefs', 'chefs', 'products'],

  mounted() {
    console.log(this)
  }
}
</script>
