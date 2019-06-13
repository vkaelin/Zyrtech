@extends('layouts.app')

@section('content')


<div class="mx-auto container">
    <div class="product-info flex">
        <div class="imageText-section flex w-2/3">
            <img class="w-80 h-64 object-cover rounded" src="{{Storage::url('placeholder.jpg')}}" alt="placeholder">
            <div class="ml-4">
                <h2 class="text-3xl font-bold align-top -mt-1">Nom du produit</h2>
                <p class="my-4 text-sm">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit voluptates magnam
                    necessitatibus error. Mollitia illo labore earum temporibus magni ratione id iusto nobis suscipit
                    quam ipsa voluptas atque, quidem nesciunt sunt facilis quaerat reprehenderit, eaque quia. Aliquid,
                    corporis laudantium? Beatae molestias cupiditate cumque unde, expedita dolor neque dolore vero
                    aliquid et dolorum, impedit, laudantium sit. Itaque, dignissimos nesciunt voluptatum dolore
                    inventore architecto sint. Ad illo officia accusamus dolorem, a corrupti quae dolor deleniti sit
                    perspiciatis eligendi, quaerat quam facilis, aut quia consequatur magnam necessitatibus perferendis
                    illum. Accusantium, illum recusandae. Dignissimos obcaecati sed repudiandae reiciendis? Provident et
                    praesentium repudiandae ex modi, quis voluptate error corrupti iste ipsam ad, deserunt voluptatem
                    voluptas numquam quam ea corporis exercitationem possimus laborum distinctio molestias enim
                    consequuntur aperiam! Nihil mollitia fugiat vitae consequatur blanditiis vel cum beatae dolorum
                    expedita amet, est porro at totam eaque non quos vero necessitatibus facere fuga optio quod sunt
                    doloremque adipisci.
                </p>
                <product-star :stars="2" size="fa-2x" :readonly="true"></product-star>
            </div>
        </div>
        <div class="notation-section w-1/3 ml-4 flex flex-col justify-center items-center">
            <span class="text-green-400 inline-block font-bold text-6xl">9/10</span>
            <div class="mt-4">
                <a href="#" class="inline-block">
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
    <div class="comment-section mt-6">
        <h3 class="text-2xl">Commentaires</h3>
        <div class="notation flex justify-between items-end">
            <product-star :product="{{$product}}" :stars="0" size="" :readonly="false"></product-star>
            <div>
                @if (Auth::check() && auth()->user()->canRateProduct($product))

                <form class="max-w-sm flex" method="POST" action="/products/{{ $product->id }}/rating">
                    @csrf

                    <label class="inline-block">
                        <span class="text-gray-700">Note</span>
                        <select class="form-select block w-full mt-1" name="value">
                            @for ($i = 1; $i <= 10; $i++) <option>{{ $i }}</option>
                                @endfor
                        </select>
                    </label>
                    <div class="flex items-center">
                        <button class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-400"
                            type="submit">Evaluer</button>
                    </div>
                </form>
                @if ($times = $product->alreadyRatedBySetChef(auth()->user()))
                <p class="my-2">Vous avez déjà évalué ce produit {{ $times }} fois</p>
                @endif
                @endif
            </div>
        </div>
        <div class="w-full mt-2">
            <form action="" class="flex flex-col items-end">
                <textarea
                    class="bg-gray-200 text-gray-700 leading-snug w-full h-48 rounded shadow-lg resize-none p-5 focus:outline-none"
                    name="" id="" placeholder="Votre commentaire ici..."></textarea>
                <button class="bg-green-500 text-white px-4 py-2 mt-4 rounded hover:bg-green-400"
                    type="submit">Envoyer</button>
            </form>
        </div>
        <div class=" mt-4 border-b border-gray-400"></div>
        <div class=" mt-8">
            <h4 class="text-xl italic">Les derniers commentaires</h4>
            <div class="comments-wrapper mt-4 w-full pb-12">
                <div class="comment bg-gray-200 rounded p-6 mt-6 shadow-lg">
                    <div class="comment-infos flex ">
                        <i class="fas fa-user"></i>
                        <p class="ml-2 italic text-m">Anonyme <span class=" not-italic text-sm"> le 13.06.2019 à
                                13:12</span></p>
                    </div>
                    <div class="comment-content mt-3 text-sm text-gray-700">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse error quod aliquid sit rerum,
                            adipisci fuga architecto nesciunt quas facere unde! Cum id, iure nulla animi mollitia
                            ducimus similique, sint, illo aperiam nostrum consequuntur rem architecto ipsum fugiat
                            aliquam tempora?</p>
                    </div>
                </div>
                <div class="comment  bg-gray-200 rounded p-6 mt-6 shadow-lg">
                    <div class="comment-infos flex ">
                        <i class="fas fa-user"></i>
                        <p class="ml-2 italic text-m">Anonyme <span class=" not-italic text-sm"> le 13.06.2019 à
                                13:12</span></p>
                    </div>
                    <div class="comment-content mt-3 text-sm text-gray-700">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores nobis veritatis libero
                            veniam officiis saepe, numquam minus voluptatem voluptates iusto aut labore. Nobis error
                            iusto neque earum quisquam ut minima, ullam dolorem rem expedita vel autem dicta mollitia,
                            consequuntur molestias rerum quam porro cupiditate incidunt asperiores, voluptatem sint
                            aliquid ex blanditiis! Delectus vero quibusdam dignissimos officia ducimus illo fugit. Quo
                            nemo repudiandae cumque! Labore consectetur cupiditate sunt hic libero, excepturi voluptatum
                            atque fugit debitis fuga deleniti vitae, minus optio eligendi eum cum cumque ratione autem
                            quam aperiam numquam, voluptatibus est. Aut alias necessitatibus dolorum earum, explicabo
                            dignissimos placeat beatae vitae inventore aliquam! Reprehenderit, neque hic non libero
                            ipsum dolores labore, quo repellendus eius, aspernatur cupiditate repudiandae temporibus.
                            Quaerat, ad maiores! Fuga odit consectetur quia, nisi adipisci iure voluptates? Ad
                            laboriosam tempora corporis aut fugiat quibusdam aliquam rem in sunt consequuntur reiciendis
                            perspiciatis numquam amet omnis odit, eaque culpa ipsum! Voluptatibus itaque, dicta
                            distinctio repellat quas obcaecati consequatur non exercitationem! Esse recusandae at, quas
                            quae eum architecto ab fuga corrupti obcaecati nisi, unde consequatur magnam quod possimus
                            odio! Tempore totam hic consequuntur a accusamus molestias sunt temporibus libero repellat
                            error, provident in ipsam aperiam et similique earum dolorem suscipit. Magnam repudiandae
                            atque quia quidem rerum, nobis enim aliquid earum est nulla dicta possimus id accusamus at
                            omnis autem eveniet ducimus veritatis quisquam et facilis laborum illum consequatur? Tenetur
                            mollitia in, quos recusandae magni excepturi sequi aspernatur impedit magnam voluptas eos
                            repudiandae ipsam sed nulla? Non error aut enim obcaecati, assumenda maiores eaque. Iste
                            consequuntur distinctio incidunt.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


{{-- <h1>Product show page</h1>

<p>{{$product->name}}</p>
<p>{{$product->getTypeName()}}</p>
<p>{{$product->getPeriodName()}}</p>
@foreach ($product->labels as $label)
<p>{{$label->name}}</p>
@endforeach
<p>{{$product->getStarAverage()}}</p>

<product-star :product="{{$product}}" :stars="{{$product->getStarAverage()}}" :readonly="false">
</product-star>

<div class="mt-8">
    @if (Auth::check() && auth()->user()->canRateProduct($product))

    @if ($product->alreadyRatedBySetChef(auth()->user()))
    <span>Produit évalué</span>
    @else
    <form class="max-w-sm" method="POST" action="/products/{{ $product->id }}/rating">
        @csrf

        <label class="block">
            <span class="text-gray-700">Note</span>
            <select class="form-select block w-full mt-1" name="value">
                @for ($i = 1; $i <= 10; $i++) <option>{{ $i }}</option>
                    @endfor
            </select>
        </label>
        <button class="bg-green-500 text-white px-4 py-2 mt-2 rounded hover:bg-green-400" type="submit">Evaluer</button>
    </form>

    @endif
    @endif
</div> --}}

@endsection