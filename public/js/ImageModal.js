(window.webpackJsonp=window.webpackJsonp||[]).push([[3],{"KHd+":function(t,e,n){"use strict";function s(t,e,n,s,i,o,r,a){var l,c="function"==typeof t?t.options:t;if(e&&(c.render=e,c.staticRenderFns=n,c._compiled=!0),s&&(c.functional=!0),o&&(c._scopeId="data-v-"+o),r?(l=function(t){(t=t||this.$vnode&&this.$vnode.ssrContext||this.parent&&this.parent.$vnode&&this.parent.$vnode.ssrContext)||"undefined"==typeof __VUE_SSR_CONTEXT__||(t=__VUE_SSR_CONTEXT__),i&&i.call(this,t),t&&t._registeredComponents&&t._registeredComponents.add(r)},c._ssrRegister=l):i&&(l=a?function(){i.call(this,this.$root.$options.shadowRoot)}:i),l)if(c.functional){c._injectStyles=l;var d=c.render;c.render=function(t,e){return l.call(e),d(t,e)}}else{var h=c.beforeCreate;c.beforeCreate=h?[].concat(h,l):[l]}return{exports:t,options:c}}n.d(e,"a",function(){return s})},slQF:function(t,e,n){"use strict";n.r(e);var s={props:{id:Number},data:function(){return{link:"no-src",width:500,height:500,reset:!1}},methods:{beforeOpen:function(t){"/storage/no-src"===t.params.imageUrl?this.link="/storage/placeholder.jpg":this.link=t.params.imageUrl,console.log(t.params.imageUrl)}},mounted:function(){document.getElementsByTagName("body")[0].clientWidth<this.width&&(this.width=250,this.height=250,this.reset=!0)}},i=n("KHd+"),o=Object(i.a)(s,function(){var t=this.$createElement,e=this._self._c||t;return e("modal",{attrs:{name:"image-modal",classes:"-mt-24 rounded-lg bg-white shadow-lg",height:this.height,reset:this.reset,width:this.width},on:{"before-open":this.beforeOpen}},[e("div",{staticClass:"w-full h-full flex flex-col items-center justify-center"},[e("img",{staticClass:"h-full w-auto",class:["/storage/placeholder.jpg"===this.link?"object-cover":"object-contain"],attrs:{src:this.link,alt:"Image du produit"}})])])},[],!1,null,null,null);e.default=o.exports}}]);