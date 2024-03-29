@extends('layouts.app')

@section('content')


<div class="px-6 mx-auto container">
    <div class="product-info flex flex-col sm:flex-row justify-between">
        <div class="imageText-section flex flex-col sm:flex-row">
            <div class="flex flex-col mx-auto md:block md:mx-0">
                <img class="block w-72 sm:w-88 h-48 lg:h-64 object-contain bg-white shadow-lg rounded"
                    src="{{$product->getImage()}}" alt="placeholder">
                <div class="my-4 md:mb-0 md:mt-4 flex items-baseline">
                    <product-star :stars="{{$product->getStarNote()}}" size="text-xl lg:text-3xl" :readonly="true">
                    </product-star>
                    <span class="ml-4 block text-m text-gray-700 ">{{$product->stars->count()}}
                        {{$product->stars->count() <= 1 ? 'vote' : 'votes'}}
                    </span>
                </div>
            </div>
            <div class="md:ml-6 lg:w-116">
                <h2 class="text-gray-800 text-lg sm:text-3xl font-bold -mt-1 flex justify-between">{{{$product->name}}}
                    <span class="text-gray-800 text-sm md:text-lg lg:text-2xl font-bold italic">
                        {{$product->getTypeName()}} &#8250; {{$product->getPeriodName()}}
                    </span>
                </h2>
                <p
                    class="pr-3 xl:pr-0 mb-4 mt-2 lg:mb-6 lg:mt-4 h-32 sm:h-40 overflow-y-scroll text-sm text-justify max-w-md lg:max-w-lg text-gray-700 leading-snug">
                    {{ $product->description }}</p>
                <div>
                    @forelse ($product->labels as $label)
                    <span
                        class="inline-block bg-green-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-1">
                        {{$label->name}}
                    </span>
                    @empty
                    <span
                        class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-1">
                        Aucun label
                    </span>
                    @endforelse
                </div>
            </div>
        </div>
        <div class="ml-3 lg:ml-6 xl:ml-0 notation-section flex flex-col justify-center items-center">
            <span class="mt-6 md:-mt-6 text-green-400 inline-block italic text-sm lg:text-base">Note des chefs</span>
            <span
                class="text-green-400 inline-block font-bold text-5xl lg:text-6xl">{{ $product->getRatingsNote() }}/10</span>
            <div class="mt-4">
                <a href="#" class="inline-block"
                    @click.prevent="$modal.show('youtube-modal', { videoId: {{$product->id}} })">
                    <svg viewBox="0 0 90 90" class="w-8 h-8 text-red-700 fill-current"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M70.939 65.832H66l.023-2.869a2.329 2.329 0 0 1 2.326-2.318h.315a2.332 2.332 0 0 1 2.332 2.318l-.057 2.869zm-18.526-6.148c-1.253 0-2.278.842-2.278 1.873V75.51c0 1.029 1.025 1.869 2.278 1.869 1.258 0 2.284-.84 2.284-1.869V61.557c0-1.032-1.026-1.873-2.284-1.873zM82.5 51.879v26.544C82.5 84.79 76.979 90 70.23 90H19.771C13.02 90 7.5 84.79 7.5 78.423V51.879c0-6.367 5.52-11.578 12.271-11.578H70.23c6.749 0 12.27 5.211 12.27 11.578zM23.137 81.305l-.004-27.961 6.255.002v-4.143l-16.674-.025v4.073l5.205.015v28.039h5.218zm18.75-23.796h-5.215V72.44c0 2.16.131 3.24-.008 3.621-.424 1.158-2.33 2.388-3.073.125-.126-.396-.015-1.591-.017-3.643l-.021-15.034h-5.186l.016 14.798c.004 2.268-.051 3.959.018 4.729.127 1.357.082 2.939 1.341 3.843 2.346 1.69 6.843-.252 7.968-2.668l-.01 3.083 4.188.005-.001-23.79zM58.57 74.607l-.011-12.427c-.004-4.736-3.547-7.572-8.356-3.74l.021-9.239-5.209.008-.025 31.89 4.284-.062.39-1.986c5.473 5.021 8.914 1.58 8.906-4.444zm16.321-1.647l-3.91.021c-.002.155-.008.334-.01.529v2.182c0 1.168-.965 2.119-2.137 2.119h-.766c-1.174 0-2.139-.951-2.139-2.119v-5.739h8.954v-3.37c0-2.463-.063-4.925-.267-6.333-.641-4.454-6.893-5.161-10.051-2.881a5.887 5.887 0 0 0-2.188 2.945c-.444 1.281-.665 3.031-.665 5.254v7.41c.002 12.318 14.964 10.577 13.179-.018zM54.833 32.732a3.55 3.55 0 0 0 1.254 1.584c.56.394 1.276.592 2.134.592.752 0 1.418-.203 1.998-.622.578-.417 1.065-1.04 1.463-1.871l-.099 2.046h5.813V9.74H62.82v19.24a1.907 1.907 0 0 1-3.811 0V9.74h-4.776v16.674c0 2.124.039 3.54.102 4.258.065.713.229 1.397.498 2.06zM37.217 18.77c0-2.373.198-4.226.591-5.562.396-1.331 1.107-2.401 2.137-3.208 1.027-.811 2.342-1.217 3.941-1.217 1.345 0 2.497.264 3.459.781.967.52 1.713 1.195 2.23 2.028a8 8 0 0 1 1.076 2.574c.195.891.291 2.235.291 4.048v6.252c0 2.293-.092 3.98-.271 5.051a8.006 8.006 0 0 1-1.146 3.004c-.58.924-1.329 1.615-2.237 2.056-.918.445-1.968.663-3.154.663-1.325 0-2.441-.183-3.361-.565-.923-.38-1.636-.953-2.144-1.714-.513-.762-.874-1.69-1.092-2.772-.219-1.081-.323-2.707-.323-4.874l.003-6.545zm4.553 9.82c0 1.4 1.042 2.543 2.311 2.543 1.27 0 2.308-1.143 2.308-2.543V15.43c0-1.398-1.038-2.541-2.308-2.541-1.269 0-2.311 1.143-2.311 2.541v13.16zm-16.088 6.645h5.484l.006-18.96L37.652.033h-5.998l-3.445 12.064L24.715 0h-5.936l6.894 16.284.009 18.951z" />
                    </svg>
                </a>
                <a href="#" class="inline-block">
                    <svg viewBox="0 0 533 533" class="w-8 h-8 text-grey-700 fill-current"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M438.548 307.021c-7.108-7.003-22.872-10.712-46.86-11.027-16.238-.179-35.782 1.251-56.339 4.129-9.205-5.311-18.691-11.091-26.139-18.051-20.033-18.707-36.755-44.673-47.175-73.226a267.572 267.572 0 0 0 1.795-7.403s11.284-64.093 8.297-85.763c-.411-2.972-.664-3.834-1.463-6.144l-.98-2.518c-3.069-7.079-9.087-14.58-18.522-14.171l-5.533-.176-.152-.003c-10.521 0-19.096 5.381-21.347 13.424-6.842 25.226.218 62.964 13.012 111.842l-3.275 7.961c-9.161 22.332-20.641 44.823-30.77 64.665l-1.317 2.581c-10.656 20.854-20.325 38.557-29.09 53.554l-9.05 4.785c-.659.348-16.169 8.551-19.807 10.752-30.862 18.427-51.313 39.346-54.706 55.946-1.08 5.297-.276 12.075 5.215 15.214l8.753 4.405c3.797 1.902 7.801 2.866 11.903 2.866 21.981 0 47.5-27.382 82.654-88.732 40.588-13.214 86.799-24.197 127.299-30.255 30.864 17.379 68.824 29.449 92.783 29.449 4.254 0 7.921-.406 10.901-1.194 4.595-1.217 8.468-3.838 10.829-7.394 4.648-6.995 5.591-16.631 4.329-26.497-.376-2.927-2.715-6.547-5.245-9.019zM110.233 423.983c4.008-10.96 19.875-32.627 43.335-51.852 1.475-1.196 5.108-4.601 8.435-7.762-24.533 39.128-40.962 54.723-51.77 59.614zm138.952-319.98c7.066 0 11.085 17.81 11.419 34.507.333 16.698-3.572 28.417-8.416 37.088-4.012-12.838-5.951-33.073-5.951-46.304 0 0-.295-25.291 2.948-25.291zm-41.45 228.025c4.922-8.811 10.043-18.103 15.276-27.957 12.756-24.123 20.812-42.999 26.812-58.514 11.933 21.71 26.794 40.167 44.264 54.955a174.49 174.49 0 0 0 6.913 5.547c-35.526 7.029-66.231 15.578-93.265 25.969zm223.987-2.001c-2.164 1.353-8.362 2.135-12.349 2.135-12.867 0-28.787-5.883-51.105-15.451 8.575-.635 16.438-.957 23.489-.957 12.906 0 16.729-.056 29.349 3.163s12.779 9.757 10.616 11.11zm38.816-226.157L396.13 29.463C379.925 13.258 347.917 0 325 0H75C52.083 0 33.333 18.75 33.333 41.667v450c0 22.916 18.75 41.666 41.667 41.666h383.333c22.916 0 41.666-18.75 41.666-41.666V175c.001-22.917-13.257-54.926-29.461-71.13zm-23.57 23.57c1.631 1.631 3.255 3.633 4.833 5.893h-85.134V48.2c2.261 1.578 4.263 3.203 5.893 4.833l74.408 74.407zm19.699 364.227c0 4.517-3.816 8.333-8.333 8.333H75c-4.517 0-8.333-3.816-8.333-8.333v-450c0-4.517 3.817-8.333 8.333-8.333h250c2.517 0 5.341.318 8.334.887v132.446H465.78c.569 2.993.887 5.816.887 8.333v316.667z" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <div class="mt-12 comment-section">
        <h3 class="text-gray-800 text-2xl mb-2 font-bold">Commentaires</h3>
        <div class="notation flex justify-between items-end">
            <product-star :product="{{$product}}"
                :stars="{{Cookie::has('voting_cookie_id' . $product->id) ? Cookie::get('voting_cookie_id' . $product->id) : 0}}"
                size="text-2xl sm:text-base" :readonly="false"></product-star>
            <div>
                @if (Auth::check() && auth()->user()->canRateProduct($product))

                @if ($times = $product->alreadyRatedBySetChef(auth()->user()))
                <span class="inline-block text-xs italic text-green-500 mb-2">Vous avez déjà évalué ce produit
                    {{ $times }} fois</span>
                @endif
                <form class="max-w-sm flex items-center justify-end" method="POST"
                    action="/products/{{ $product->id }}/rating">
                    @csrf
                    <label class="flex">
                        <select
                            class="form-select block w-full pr-8 pl-6 py-1 focus:outline-none focus:shadow-none focus:border-green-400"
                            name="value">
                            @for ($i = 1; $i <= 10; $i++) <option>{{ $i }}</option>
                                @endfor
                        </select>
                    </label>
                    <button class="ml-2 bg-green-500 text-white px-4 py-2 rounded hover:bg-green-400"
                        type="submit">Evaluer</button>
                </form>

                @endif
            </div>
        </div>
        <div class="w-full mt-4">
            <form method="POST" action="/products/{{ $product->id }}/comment" class="flex flex-col items-end">
                @csrf
                <textarea
                    class="bg-gray-200 text-gray-700 leading-snug w-full h-48 rounded shadow-lg resize-none p-5 focus:outline-none"
                    name="content" placeholder="Votre commentaire ici..."></textarea>
                <button class="bg-green-500 text-white px-4 py-2 mt-4 rounded hover:bg-green-400"
                    type="submit">Envoyer</button>

                @include ('partials.errors')
            </form>
        </div>
        <div class=" mt-4 border-b border-gray-400"></div>
        <div class=" mt-8">
            <h4 class="text-gray-800 font-bold text-xl italic">Les derniers commentaires</h4>
            <div class="comments-wrapper mt-4 w-full pb-12">
                @forelse ($comments as $comment)
                <div class="text-gray-800 comment bg-gray-200 rounded p-6 mt-6 shadow-lg">
                    <div class="comment-infos flex ">
                        <i class="fas fa-user"></i>
                        <p class="ml-2 font-bold italic text-m">
                            @if ($comment->user)
                            {{ $comment->user->full_name }}
                            @else
                            Anonyme
                            @endif
                            <span class=" font-normal not-italic text-sm">
                                le {{ $comment->created_at->format('d.m.Y à H:i') }}
                            </span>
                        </p>
                    </div>
                    <div class="comment-content mt-3 text-sm text-gray-700">
                        <p>{{ $comment->content }}</p>
                    </div>
                </div>
                @empty
                <p>Aucun commentaire sur ce produit.</p>
                @endforelse
                {{ $comments->links('partials.pagination') }}
            </div>
        </div>
    </div>
</div>
<youtube-modal link={{$product->video_link === null ? 'empty' : $product->video_link}} :id={{$product->id}}>
</youtube-modal>

@endsection