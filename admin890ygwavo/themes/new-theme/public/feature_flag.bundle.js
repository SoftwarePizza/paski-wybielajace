(()=>{var t={68840:(t,e,r)=>{"use strict";Object.defineProperty(e,"__esModule",{value:!0});var n,o=r(85315),i=(n=o)&&n.__esModule?n:{default:n};e.default=function(t,e,r){var n=this,o=t.id,u=t.closable;this.modal=function(t){var e,r=t.id,n=void 0===r?"confirm-modal":r,o=t.confirmTitle,a=t.confirmMessage,u=void 0===a?"":a,c=t.closeButtonLabel,s=void 0===c?"Close":c,l=t.confirmButtonLabel,f=void 0===l?"Accept":l,d=t.confirmButtonClass,p=void 0===d?"btn-primary":d,v=t.customButtons,m=void 0===v?[]:v,y={};y.container=document.createElement("div"),y.container.classList.add("modal","fade"),y.container.id=n,y.dialog=document.createElement("div"),y.dialog.classList.add("modal-dialog"),y.content=document.createElement("div"),y.content.classList.add("modal-content"),y.header=document.createElement("div"),y.header.classList.add("modal-header"),o&&(y.title=document.createElement("h4"),y.title.classList.add("modal-title"),y.title.innerHTML=o);y.closeIcon=document.createElement("button"),y.closeIcon.classList.add("close"),y.closeIcon.setAttribute("type","button"),y.closeIcon.dataset.dismiss="modal",y.closeIcon.innerHTML="×",y.body=document.createElement("div"),y.body.classList.add("modal-body","text-left","font-weight-normal"),y.message=document.createElement("p"),y.message.classList.add("confirm-message"),y.message.innerHTML=u,y.footer=document.createElement("div"),y.footer.classList.add("modal-footer"),y.closeButton=document.createElement("button"),y.closeButton.setAttribute("type","button"),y.closeButton.classList.add("btn","btn-outline-secondary","btn-lg"),y.closeButton.dataset.dismiss="modal",y.closeButton.innerHTML=s,y.confirmButton=document.createElement("button"),y.confirmButton.setAttribute("type","button"),y.confirmButton.classList.add("btn",p,"btn-lg","btn-confirm-submit"),y.confirmButton.dataset.dismiss="modal",y.confirmButton.innerHTML=f,o?y.header.append(y.title,y.closeIcon):y.header.appendChild(y.closeIcon);return y.body.appendChild(y.message),(e=y.footer).append.apply(e,[y.closeButton].concat((0,i.default)(m),[y.confirmButton])),y.content.append(y.header,y.body,y.footer),y.dialog.appendChild(y.content),y.container.appendChild(y.dialog),y}(t),this.$modal=a(this.modal.container),this.show=function(){n.$modal.modal()},this.modal.confirmButton.addEventListener("click",e),this.$modal.modal({backdrop:!!u||"static",keyboard:void 0===u||u,closable:void 0===u||u,show:!1}),this.$modal.on("hidden.bs.modal",(function(){document.querySelector("#"+o).remove(),r&&r()})),document.body.appendChild(this.modal.container)};
/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 */
var a=window.$},24043:(t,e,r)=>{t.exports={default:r(47185),__esModule:!0}},85315:(t,e,r)=>{"use strict";e.__esModule=!0;var n,o=r(24043),i=(n=o)&&n.__esModule?n:{default:n};e.default=function(t){if(Array.isArray(t)){for(var e=0,r=Array(t.length);e<t.length;e++)r[e]=t[e];return r}return(0,i.default)(t)}},47185:(t,e,r)=>{r(91867),r(2586),t.exports=r(34579).Array.from},85663:t=>{t.exports=function(t){if("function"!=typeof t)throw TypeError(t+" is not a function!");return t}},12159:(t,e,r)=>{var n=r(36727);t.exports=function(t){if(!n(t))throw TypeError(t+" is not an object!");return t}},57428:(t,e,r)=>{var n=r(7932),o=r(78728),i=r(16531);t.exports=function(t){return function(e,r,a){var u,c=n(e),s=o(c.length),l=i(a,s);if(t&&r!=r){for(;s>l;)if((u=c[l++])!=u)return!0}else for(;s>l;l++)if((t||l in c)&&c[l]===r)return t||l||0;return!t&&-1}}},14677:(t,e,r)=>{var n=r(32894),o=r(22939)("toStringTag"),i="Arguments"==n(function(){return arguments}());t.exports=function(t){var e,r,a;return void 0===t?"Undefined":null===t?"Null":"string"==typeof(r=function(t,e){try{return t[e]}catch(t){}}(e=Object(t),o))?r:i?n(e):"Object"==(a=n(e))&&"function"==typeof e.callee?"Arguments":a}},32894:t=>{var e={}.toString;t.exports=function(t){return e.call(t).slice(8,-1)}},34579:t=>{var e=t.exports={version:"2.6.11"};"number"==typeof __e&&(__e=e)},52445:(t,e,r)=>{"use strict";var n=r(4743),o=r(83101);t.exports=function(t,e,r){e in t?n.f(t,e,o(0,r)):t[e]=r}},19216:(t,e,r)=>{var n=r(85663);t.exports=function(t,e,r){if(n(t),void 0===e)return t;switch(r){case 1:return function(r){return t.call(e,r)};case 2:return function(r,n){return t.call(e,r,n)};case 3:return function(r,n,o){return t.call(e,r,n,o)}}return function(){return t.apply(e,arguments)}}},8333:t=>{t.exports=function(t){if(null==t)throw TypeError("Can't call method on  "+t);return t}},89666:(t,e,r)=>{t.exports=!r(7929)((function(){return 7!=Object.defineProperty({},"a",{get:function(){return 7}}).a}))},97467:(t,e,r)=>{var n=r(36727),o=r(33938).document,i=n(o)&&n(o.createElement);t.exports=function(t){return i?o.createElement(t):{}}},73338:t=>{t.exports="constructor,hasOwnProperty,isPrototypeOf,propertyIsEnumerable,toLocaleString,toString,valueOf".split(",")},83856:(t,e,r)=>{var n=r(33938),o=r(34579),i=r(19216),a=r(41818),u=r(27069),c=function(t,e,r){var s,l,f,d=t&c.F,p=t&c.G,v=t&c.S,m=t&c.P,y=t&c.B,h=t&c.W,b=p?o:o[e]||(o[e]={}),g=b.prototype,x=p?n:v?n[e]:(n[e]||{}).prototype;for(s in p&&(r=e),r)(l=!d&&x&&void 0!==x[s])&&u(b,s)||(f=l?x[s]:r[s],b[s]=p&&"function"!=typeof x[s]?r[s]:y&&l?i(f,n):h&&x[s]==f?function(t){var e=function(e,r,n){if(this instanceof t){switch(arguments.length){case 0:return new t;case 1:return new t(e);case 2:return new t(e,r)}return new t(e,r,n)}return t.apply(this,arguments)};return e.prototype=t.prototype,e}(f):m&&"function"==typeof f?i(Function.call,f):f,m&&((b.virtual||(b.virtual={}))[s]=f,t&c.R&&g&&!g[s]&&a(g,s,f)))};c.F=1,c.G=2,c.S=4,c.P=8,c.B=16,c.W=32,c.U=64,c.R=128,t.exports=c},7929:t=>{t.exports=function(t){try{return!!t()}catch(t){return!0}}},33938:t=>{var e=t.exports="undefined"!=typeof window&&window.Math==Math?window:"undefined"!=typeof self&&self.Math==Math?self:Function("return this")();"number"==typeof __g&&(__g=e)},27069:t=>{var e={}.hasOwnProperty;t.exports=function(t,r){return e.call(t,r)}},41818:(t,e,r)=>{var n=r(4743),o=r(83101);t.exports=r(89666)?function(t,e,r){return n.f(t,e,o(1,r))}:function(t,e,r){return t[e]=r,t}},54881:(t,e,r)=>{var n=r(33938).document;t.exports=n&&n.documentElement},33758:(t,e,r)=>{t.exports=!r(89666)&&!r(7929)((function(){return 7!=Object.defineProperty(r(97467)("div"),"a",{get:function(){return 7}}).a}))},50799:(t,e,r)=>{var n=r(32894);t.exports=Object("z").propertyIsEnumerable(0)?Object:function(t){return"String"==n(t)?t.split(""):Object(t)}},45991:(t,e,r)=>{var n=r(15449),o=r(22939)("iterator"),i=Array.prototype;t.exports=function(t){return void 0!==t&&(n.Array===t||i[o]===t)}},36727:t=>{t.exports=function(t){return"object"==typeof t?null!==t:"function"==typeof t}},95602:(t,e,r)=>{var n=r(12159);t.exports=function(t,e,r,o){try{return o?e(n(r)[0],r[1]):e(r)}catch(e){var i=t.return;throw void 0!==i&&n(i.call(t)),e}}},33945:(t,e,r)=>{"use strict";var n=r(98989),o=r(83101),i=r(25378),a={};r(41818)(a,r(22939)("iterator"),(function(){return this})),t.exports=function(t,e,r){t.prototype=n(a,{next:o(1,r)}),i(t,e+" Iterator")}},45700:(t,e,r)=>{"use strict";var n=r(16227),o=r(83856),i=r(57470),a=r(41818),u=r(15449),c=r(33945),s=r(25378),l=r(95089),f=r(22939)("iterator"),d=!([].keys&&"next"in[].keys()),p="keys",v="values",m=function(){return this};t.exports=function(t,e,r,y,h,b,g){c(r,e,y);var x,w,_,O=function(t){if(!d&&t in M)return M[t];switch(t){case p:case v:return function(){return new r(this,t)}}return function(){return new r(this,t)}},E=e+" Iterator",j=h==v,A=!1,M=t.prototype,L=M[f]||M["@@iterator"]||h&&M[h],B=L||O(h),S=h?j?O("entries"):B:void 0,P="Array"==e&&M.entries||L;if(P&&(_=l(P.call(new t)))!==Object.prototype&&_.next&&(s(_,E,!0),n||"function"==typeof _[f]||a(_,f,m)),j&&L&&L.name!==v&&(A=!0,B=function(){return L.call(this)}),n&&!g||!d&&!A&&M[f]||a(M,f,B),u[e]=B,u[E]=m,h)if(x={values:j?B:O(v),keys:b?B:O(p),entries:S},g)for(w in x)w in M||i(M,w,x[w]);else o(o.P+o.F*(d||A),e,x);return x}},96630:(t,e,r)=>{var n=r(22939)("iterator"),o=!1;try{var i=[7][n]();i.return=function(){o=!0},Array.from(i,(function(){throw 2}))}catch(t){}t.exports=function(t,e){if(!e&&!o)return!1;var r=!1;try{var i=[7],a=i[n]();a.next=function(){return{done:r=!0}},i[n]=function(){return a},t(i)}catch(t){}return r}},15449:t=>{t.exports={}},16227:t=>{t.exports=!0},98989:(t,e,r)=>{var n=r(12159),o=r(57856),i=r(73338),a=r(58989)("IE_PROTO"),u=function(){},c=function(){var t,e=r(97467)("iframe"),n=i.length;for(e.style.display="none",r(54881).appendChild(e),e.src="javascript:",(t=e.contentWindow.document).open(),t.write("<script>document.F=Object<\/script>"),t.close(),c=t.F;n--;)delete c.prototype[i[n]];return c()};t.exports=Object.create||function(t,e){var r;return null!==t?(u.prototype=n(t),r=new u,u.prototype=null,r[a]=t):r=c(),void 0===e?r:o(r,e)}},4743:(t,e,r)=>{var n=r(12159),o=r(33758),i=r(33206),a=Object.defineProperty;e.f=r(89666)?Object.defineProperty:function(t,e,r){if(n(t),e=i(e,!0),n(r),o)try{return a(t,e,r)}catch(t){}if("get"in r||"set"in r)throw TypeError("Accessors not supported!");return"value"in r&&(t[e]=r.value),t}},57856:(t,e,r)=>{var n=r(4743),o=r(12159),i=r(46162);t.exports=r(89666)?Object.defineProperties:function(t,e){o(t);for(var r,a=i(e),u=a.length,c=0;u>c;)n.f(t,r=a[c++],e[r]);return t}},95089:(t,e,r)=>{var n=r(27069),o=r(66530),i=r(58989)("IE_PROTO"),a=Object.prototype;t.exports=Object.getPrototypeOf||function(t){return t=o(t),n(t,i)?t[i]:"function"==typeof t.constructor&&t instanceof t.constructor?t.constructor.prototype:t instanceof Object?a:null}},12963:(t,e,r)=>{var n=r(27069),o=r(7932),i=r(57428)(!1),a=r(58989)("IE_PROTO");t.exports=function(t,e){var r,u=o(t),c=0,s=[];for(r in u)r!=a&&n(u,r)&&s.push(r);for(;e.length>c;)n(u,r=e[c++])&&(~i(s,r)||s.push(r));return s}},46162:(t,e,r)=>{var n=r(12963),o=r(73338);t.exports=Object.keys||function(t){return n(t,o)}},83101:t=>{t.exports=function(t,e){return{enumerable:!(1&t),configurable:!(2&t),writable:!(4&t),value:e}}},57470:(t,e,r)=>{t.exports=r(41818)},25378:(t,e,r)=>{var n=r(4743).f,o=r(27069),i=r(22939)("toStringTag");t.exports=function(t,e,r){t&&!o(t=r?t:t.prototype,i)&&n(t,i,{configurable:!0,value:e})}},58989:(t,e,r)=>{var n=r(20250)("keys"),o=r(65730);t.exports=function(t){return n[t]||(n[t]=o(t))}},20250:(t,e,r)=>{var n=r(34579),o=r(33938),i="__core-js_shared__",a=o[i]||(o[i]={});(t.exports=function(t,e){return a[t]||(a[t]=void 0!==e?e:{})})("versions",[]).push({version:n.version,mode:r(16227)?"pure":"global",copyright:"© 2019 Denis Pushkarev (zloirock.ru)"})},90510:(t,e,r)=>{var n=r(11052),o=r(8333);t.exports=function(t){return function(e,r){var i,a,u=String(o(e)),c=n(r),s=u.length;return c<0||c>=s?t?"":void 0:(i=u.charCodeAt(c))<55296||i>56319||c+1===s||(a=u.charCodeAt(c+1))<56320||a>57343?t?u.charAt(c):i:t?u.slice(c,c+2):a-56320+(i-55296<<10)+65536}}},16531:(t,e,r)=>{var n=r(11052),o=Math.max,i=Math.min;t.exports=function(t,e){return(t=n(t))<0?o(t+e,0):i(t,e)}},11052:t=>{var e=Math.ceil,r=Math.floor;t.exports=function(t){return isNaN(t=+t)?0:(t>0?r:e)(t)}},7932:(t,e,r)=>{var n=r(50799),o=r(8333);t.exports=function(t){return n(o(t))}},78728:(t,e,r)=>{var n=r(11052),o=Math.min;t.exports=function(t){return t>0?o(n(t),9007199254740991):0}},66530:(t,e,r)=>{var n=r(8333);t.exports=function(t){return Object(n(t))}},33206:(t,e,r)=>{var n=r(36727);t.exports=function(t,e){if(!n(t))return t;var r,o;if(e&&"function"==typeof(r=t.toString)&&!n(o=r.call(t)))return o;if("function"==typeof(r=t.valueOf)&&!n(o=r.call(t)))return o;if(!e&&"function"==typeof(r=t.toString)&&!n(o=r.call(t)))return o;throw TypeError("Can't convert object to primitive value")}},65730:t=>{var e=0,r=Math.random();t.exports=function(t){return"Symbol(".concat(void 0===t?"":t,")_",(++e+r).toString(36))}},22939:(t,e,r)=>{var n=r(20250)("wks"),o=r(65730),i=r(33938).Symbol,a="function"==typeof i;(t.exports=function(t){return n[t]||(n[t]=a&&i[t]||(a?i:o)("Symbol."+t))}).store=n},83728:(t,e,r)=>{var n=r(14677),o=r(22939)("iterator"),i=r(15449);t.exports=r(34579).getIteratorMethod=function(t){if(null!=t)return t[o]||t["@@iterator"]||i[n(t)]}},2586:(t,e,r)=>{"use strict";var n=r(19216),o=r(83856),i=r(66530),a=r(95602),u=r(45991),c=r(78728),s=r(52445),l=r(83728);o(o.S+o.F*!r(96630)((function(t){Array.from(t)})),"Array",{from:function(t){var e,r,o,f,d=i(t),p="function"==typeof this?this:Array,v=arguments.length,m=v>1?arguments[1]:void 0,y=void 0!==m,h=0,b=l(d);if(y&&(m=n(m,v>2?arguments[2]:void 0,2)),null==b||p==Array&&u(b))for(r=new p(e=c(d.length));e>h;h++)s(r,h,y?m(d[h],h):d[h]);else for(f=b.call(d),r=new p;!(o=f.next()).done;h++)s(r,h,y?a(f,m,[o.value,h],!0):o.value);return r.length=h,r}})},91867:(t,e,r)=>{"use strict";var n=r(90510)(!0);r(45700)(String,"String",(function(t){this._t=String(t),this._i=0}),(function(){var t,e=this._t,r=this._i;return r>=e.length?{value:void 0,done:!0}:(t=n(e,r),this._i+=t.length,{value:t,done:!1})}))}},e={};function r(n){var o=e[n];if(void 0!==o)return o.exports;var i=e[n]={exports:{}};return t[n](i,i.exports,r),i.exports}(()=>{"use strict";var t,e=r(68840),n=(t=e)&&t.__esModule?t:{default:t};var o=window.$;
/**
                    * Copyright since 2007 PrestaShop SA and Contributors
                    * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
                    *
                    * NOTICE OF LICENSE
                    *
                    * This source file is subject to the Open Software License (OSL 3.0)
                    * that is bundled with this package in the file LICENSE.md.
                    * It is also available through the world-wide-web at this URL:
                    * https://opensource.org/licenses/OSL-3.0
                    * If you did not receive a copy of the license and are unable to
                    * obtain it through the world-wide-web, please send an email
                    * to license@prestashop.com so we can send you a copy immediately.
                    *
                    * DISCLAIMER
                    *
                    * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
                    * versions in the future. If you wish to customize PrestaShop for your
                    * needs please refer to https://devdocs.prestashop.com/ for more information.
                    *
                    * @author    PrestaShop SA and Contributors <contact@prestashop.com>
                    * @copyright Since 2007 PrestaShop SA and Contributors
                    * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
                    */o((function(){var t=o("#submit-btn-feature-flag");t.prop("disabled",!0);var e=o("#feature-flag-form"),r=o("#feature-flag-form input"),i=e.serialize(),a=e.serializeArray();r.change((function(){t.prop("disabled",i===e.serialize())})),t.on("click",(function(r){r.preventDefault();var o=e.serializeArray();if(i!==e.serialize()){for(var u=!1,c=0;c<o.length;c+=1)if("form[_token]"!==o[c].name&&"0"!==o[c].value&&"0"===a[c].value){u=!0;break}var s=new n.default({id:"modal-confirm-submit-feature-flag",confirmTitle:t.data("modal-title"),confirmMessage:t.data("modal-message"),confirmButtonLabel:t.data("modal-apply"),closeButtonLabel:t.data("modal-cancel")},(function(){e.submit()}));u?s.show():e.submit()}}))}))})(),window.feature_flag={}})();