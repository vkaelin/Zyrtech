(window.webpackJsonp=window.webpackJsonp||[]).push([[7],{"KHd+":function(e,t,n){"use strict";function o(e,t,n,o,i,s,r,a){var l,d="function"==typeof e?e.options:e;if(t&&(d.render=t,d.staticRenderFns=n,d._compiled=!0),o&&(d.functional=!0),s&&(d._scopeId="data-v-"+s),r?(l=function(e){(e=e||this.$vnode&&this.$vnode.ssrContext||this.parent&&this.parent.$vnode&&this.parent.$vnode.ssrContext)||"undefined"==typeof __VUE_SSR_CONTEXT__||(e=__VUE_SSR_CONTEXT__),i&&i.call(this,e),e&&e._registeredComponents&&e._registeredComponents.add(r)},d._ssrRegister=l):i&&(l=a?function(){i.call(this,this.$root.$options.shadowRoot)}:i),l)if(d.functional){d._injectStyles=l;var c=d.render;d.render=function(e,t){return l.call(t),c(e,t)}}else{var u=d.beforeCreate;d.beforeCreate=u?[].concat(u,l):[l]}return{exports:e,options:d}}n.d(t,"a",function(){return o})},SNnb:function(e,t,n){"use strict";n.r(t);var o={props:{link:String,id:Number},data:function(){return{height:360,width:640,reset:!1}},methods:{beforeOpen:function(e){var t=document.getElementsByTagName("body")[0];console.log(t.clientHeight),console.log(t.clientWidth),this.id!==e.params.videoId&&e.stop()}},mounted:function(){document.getElementsByTagName("body")[0].clientWidth<this.width&&(this.width=320,this.height=180,this.reset=!0)}},i=n("KHd+"),s=Object(i.a)(o,function(){var e=this,t=e.$createElement,n=e._self._c||t;return null!==e.link&&"empty"!==e.link?n("modal",{attrs:{name:"youtube-modal",classes:"rounded-lg shadow-lg",reset:e.reset,height:e.height,width:e.width},on:{"before-open":e.beforeOpen}},[n("iframe",{attrs:{width:e.width,height:e.height,src:"https://www.youtube-nocookie.com/embed/"+e.link,frameborder:"0",allow:"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture",allowfullscreen:""}})]):n("modal",{attrs:{name:"youtube-modal",classes:"md:-mt-24 bg-white rounded-lg shadow-lg text-base italic",height:"100",width:"340"},on:{"before-open":e.beforeOpen}},[n("div",{staticClass:"w-full h-full flex flex-col items-center justify-center"},[n("i",{staticClass:"text-green-500 fa-2x inline-text fas fa-exclamation-circle"}),e._v(" "),n("p",{staticClass:"text-gray-800 mt-2 text-center"},[e._v("Il n'y a pas de vidéo pour ce produit.")])])])},[],!1,null,null,null);t.default=s.exports}}]);