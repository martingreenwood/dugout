window.Modernizr=function(e,t,i){function n(e){g.cssText=e}function r(e,t){return n(prefixes.join(e+";")+(t||""))}function o(e,t){return typeof e===t}function a(e,t){return!!~(""+e).indexOf(t)}function s(e,t){for(var n in e){var r=e[n];if(!a(r,"-")&&g[r]!==i)return"pfx"!=t||r}return!1}function c(e,t,n){for(var r in e){var a=t[e[r]];if(a!==i)return!1===n?e[r]:o(a,"function")?a.bind(n||t):a}return!1}function l(e,t,i){var n=e.charAt(0).toUpperCase()+e.slice(1),r=(e+" "+b.join(n+" ")+n).split(" ");return o(t,"string")||o(t,"undefined")?s(r,t):(r=(e+" "+E.join(n+" ")+n).split(" "),c(r,t,i))}var h="2.6.2",d={},u=!0,f=t.documentElement,p="modernizr",m=t.createElement(p),g=m.style,v,y={}.toString,w="Webkit Moz O ms",b=w.split(" "),E=w.toLowerCase().split(" "),x={},T={},A={},j=[],C=j.slice,S,k={}.hasOwnProperty,F;F=o(k,"undefined")||o(k.call,"undefined")?function(e,t){return t in e&&o(e.constructor.prototype[t],"undefined")}:function(e,t){return k.call(e,t)},Function.prototype.bind||(Function.prototype.bind=function(e){var t=this;if("function"!=typeof t)throw new TypeError;var i=C.call(arguments,1),n=function(){if(this instanceof n){var r=function(){};r.prototype=t.prototype;var o=new r,a=t.apply(o,i.concat(C.call(arguments)));return Object(a)===a?a:o}return t.apply(e,i.concat(C.call(arguments)))};return n}),x.csstransitions=function(){return l("transition")};for(var L in x)F(x,L)&&(S=L.toLowerCase(),d[S]=x[L](),j.push((d[S]?"":"no-")+S));return d.addTest=function(e,t){if("object"==typeof e)for(var n in e)F(e,n)&&d.addTest(n,e[n]);else{if(e=e.toLowerCase(),d[e]!==i)return d;t="function"==typeof t?t():t,f.className+=" "+(t?"":"no-")+e,d[e]=t}return d},n(""),m=v=null,function(e,t){function i(e,t){var i=e.createElement("p"),n=e.getElementsByTagName("head")[0]||e.documentElement;return i.innerHTML="x<style>"+t+"</style>",n.insertBefore(i.lastChild,n.firstChild)}function n(){var e=v.elements;return"string"==typeof e?e.split(" "):e}function r(e){var t=m[e[f]];return t||(t={},p++,e[f]=p,m[p]=t),t}function o(e,i,n){if(i||(i=t),g)return i.createElement(e);n||(n=r(i));var o;return o=n.cache[e]?n.cache[e].cloneNode():d.test(e)?(n.cache[e]=n.createElem(e)).cloneNode():n.createElem(e),o.canHaveChildren&&!h.test(e)?n.frag.appendChild(o):o}function a(e,i){if(e||(e=t),g)return e.createDocumentFragment();i=i||r(e);for(var o=i.frag.cloneNode(),a=0,s=n(),c=s.length;a<c;a++)o.createElement(s[a]);return o}function s(e,t){t.cache||(t.cache={},t.createElem=e.createElement,t.createFrag=e.createDocumentFragment,t.frag=t.createFrag()),e.createElement=function(i){return v.shivMethods?o(i,e,t):t.createElem(i)},e.createDocumentFragment=Function("h,f","return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&("+n().join().replace(/\w+/g,function(e){return t.createElem(e),t.frag.createElement(e),'c("'+e+'")'})+");return n}")(v,t.frag)}function c(e){e||(e=t);var n=r(e);return v.shivCSS&&!u&&!n.hasCSS&&(n.hasCSS=!!i(e,"article,aside,figcaption,figure,footer,header,hgroup,nav,section{display:block}mark{background:#FF0;color:#000}")),g||s(e,n),e}var l=e.html5||{},h=/^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,d=/^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i,u,f="_html5shiv",p=0,m={},g;!function(){try{var e=t.createElement("a");e.innerHTML="<xyz></xyz>",u="hidden"in e,g=1==e.childNodes.length||function(){t.createElement("a");var e=t.createDocumentFragment();return void 0===e.cloneNode||void 0===e.createDocumentFragment||void 0===e.createElement}()}catch(e){u=!0,g=!0}}();var v={elements:l.elements||"abbr article aside audio bdi canvas data datalist details figcaption figure footer header hgroup mark meter nav output progress section summary time video",shivCSS:!1!==l.shivCSS,supportsUnknownElements:g,shivMethods:!1!==l.shivMethods,type:"default",shivDocument:c,createElement:o,createDocumentFragment:a};e.html5=v,c(t)}(this,t),d._version=h,d._domPrefixes=E,d._cssomPrefixes=b,d.testProp=function(e){return s([e])},d.testAllProps=l,d.prefixed=function(e,t,i){return t?l(e,t,i):l(e,"pfx")},f.className=f.className.replace(/(^|\s)no-js(\s|$)/,"$1$2")+" js "+j.join(" "),d}(this,this.document),function(e,t,i){function n(e){return"[object Function]"==p.call(e)}function r(e){return"string"==typeof e}function o(){}function a(e){return!e||"loaded"==e||"complete"==e||"uninitialized"==e}function s(){var e=m.shift();g=1,e?e.t?u(function(){("c"==e.t?S.injectCss:S.injectJs)(e.s,0,e.a,e.x,e.e,1)},0):(e(),s()):g=0}function c(e,i,n,r,o,c,l){function h(t){if(!p&&a(d.readyState)&&(b.r=p=1,!g&&s(),d.onload=d.onreadystatechange=null,t)){"img"!=e&&u(function(){w.removeChild(d)},50);for(var n in A[i])A[i].hasOwnProperty(n)&&A[i][n].onload()}}var l=l||S.errorTimeout,d=t.createElement(e),p=0,v=0,b={t:n,s:i,e:o,a:c,x:l};1===A[i]&&(v=1,A[i]=[]),"object"==e?d.data=i:(d.src=i,d.type=e),d.width=d.height="0",d.onerror=d.onload=d.onreadystatechange=function(){h.call(this,v)},m.splice(r,0,b),"img"!=e&&(v||2===A[i]?(w.insertBefore(d,y?null:f),u(h,l)):A[i].push(d))}function l(e,t,i,n,o){return g=0,t=t||"j",r(e)?c("c"==t?E:b,e,t,this.i++,i,n,o):(m.splice(this.i++,0,e),1==m.length&&s()),this}function h(){var e=S;return e.loader={load:l,i:0},e}var d=t.documentElement,u=e.setTimeout,f=t.getElementsByTagName("script")[0],p={}.toString,m=[],g=0,v="MozAppearance"in d.style,y=v&&!!t.createRange().compareNode,w=y?d:f.parentNode,d=e.opera&&"[object Opera]"==p.call(e.opera),d=!!t.attachEvent&&!d,b=v?"object":d?"script":"img",E=d?"script":b,x=Array.isArray||function(e){return"[object Array]"==p.call(e)},T=[],A={},j={timeout:function(e,t){return t.length&&(e.timeout=t[0]),e}},C,S;S=function(e){function t(e){var e=e.split("!"),t=T.length,i=e.pop(),n=e.length,i={url:i,origUrl:i,prefixes:e},r,o,a;for(o=0;o<n;o++)a=e[o].split("="),(r=j[a.shift()])&&(i=r(i,a));for(o=0;o<t;o++)i=T[o](i);return i}function a(e,r,o,a,s){var c=t(e),l=c.autoCallback;c.url.split(".").pop().split("?").shift(),c.bypass||(r&&(r=n(r)?r:r[e]||r[a]||r[e.split("/").pop().split("?")[0]]),c.instead?c.instead(e,r,o,a,s):(A[c.url]?c.noexec=!0:A[c.url]=1,o.load(c.url,c.forceCSS||!c.forceJS&&"css"==c.url.split(".").pop().split("?").shift()?"c":i,c.noexec,c.attrs,c.timeout),(n(r)||n(l))&&o.load(function(){h(),r&&r(c.origUrl,s,a),l&&l(c.origUrl,s,a),A[c.url]=2})))}function s(e,t){function i(e,i){if(e){if(r(e))i||(l=function(){var e=[].slice.call(arguments);h.apply(this,e),d()}),a(e,l,t,0,s);else if(Object(e)===e)for(f in u=function(){var t=0,i;for(i in e)e.hasOwnProperty(i)&&t++;return t}(),e)e.hasOwnProperty(f)&&(!i&&!--u&&(n(l)?l=function(){var e=[].slice.call(arguments);h.apply(this,e),d()}:l[f]=function(e){return function(){var t=[].slice.call(arguments);e&&e.apply(this,t),d()}}(h[f])),a(e[f],l,t,f,s))}else!i&&d()}var s=!!e.test,c=e.load||e.both,l=e.callback||o,h=l,d=e.complete||o,u,f;i(s?e.yep:e.nope,!!c),c&&i(c)}var c,l,d=this.yepnope.loader;if(r(e))a(e,0,d,0);else if(x(e))for(c=0;c<e.length;c++)l=e[c],r(l)?a(l,0,d,0):x(l)?S(l):Object(l)===l&&s(l,d);else Object(e)===e&&s(e,d)},S.addPrefix=function(e,t){j[e]=t},S.addFilter=function(e){T.push(e)},S.errorTimeout=1e4,null==t.readyState&&t.addEventListener&&(t.readyState="loading",t.addEventListener("DOMContentLoaded",C=function(){t.removeEventListener("DOMContentLoaded",C,0),t.readyState="complete"},0)),e.yepnope=h(),e.yepnope.executeStack=s,e.yepnope.injectJs=function(e,i,n,r,c,l){var h=t.createElement("script"),d,p,r=r||S.errorTimeout;h.src=e;for(p in n)h.setAttribute(p,n[p]);i=l?s:i||o,h.onreadystatechange=h.onload=function(){!d&&a(h.readyState)&&(d=1,i(),h.onload=h.onreadystatechange=null)},u(function(){d||(d=1,i(1))},r),c?h.onload():f.parentNode.insertBefore(h,f)},e.yepnope.injectCss=function(e,i,n,r,a,c){var r=t.createElement("link"),l,i=c?s:i||o;r.href=e,r.rel="stylesheet",r.type="text/css";for(l in n)r.setAttribute(l,n[l]);a||(f.parentNode.insertBefore(r,f),u(i,0))}}(this,document),Modernizr.load=function(){yepnope.apply(window,[].slice.call(arguments,0))},function($){var e=$(".hamburger");e.on("click",function(t){e.toggleClass("is-active")}),$("a").on("click",function(e){if(""!==this.hash){e.preventDefault();var t=this.hash;$("html, body").animate({scrollTop:$(t).offset().top-143},800,function(){})}}),$('img[src$="svg"]').each(function(){var e=jQuery(this),t=e.attr("id"),i=e.attr("class"),n=e.attr("src");$.get(n,function(n){var r=jQuery(n).find("svg");void 0!==t&&(r=r.attr("id",t)),void 0!==i&&(r=r.attr("class",i+" replaced-svg")),r=r.removeAttr("xmlns:a"),e.replaceWith(r)},"xml")}),$(window).scroll(function(){$(window).scrollTop()>200?$("#masthead").addClass("change"):$("#masthead").removeClass("change")});var t=$.event,i,n;i=t.special.debouncedresize={setup:function(){$(this).on("resize",i.handler)},teardown:function(){$(this).off("resize",i.handler)},handler:function(e,r){var o=this,a=arguments,s=function(){e.type="debouncedresize",t.dispatch.apply(o,a)};n&&clearTimeout(n),r?s():n=setTimeout(s,i.threshold)},threshold:250};var r="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==";$.fn.imagesLoaded=function(e){function t(){var t=$(l),i=$(h);o&&(h.length?o.reject(s,t,i):o.resolve(s)),$.isFunction(e)&&e.call(n,s,t,i)}function i(e,i){e.src!==r&&-1===$.inArray(e,c)&&(c.push(e),i?h.push(e):l.push(e),$.data(e,"imagesLoaded",{isBroken:i,src:e.src}),a&&o.notifyWith($(e),[i,s,$(l),$(h)]),s.length===c.length&&(setTimeout(t),s.unbind(".imagesLoaded")))}var n=this,o=$.isFunction($.Deferred)?$.Deferred():0,a=$.isFunction(o.notify),s=n.find("img").add(n.filter("img")),c=[],l=[],h=[];return $.isPlainObject(e)&&$.each(e,function(t,i){"callback"===t?e=i:o&&o[t](i)}),s.length?s.bind("load.imagesLoaded error.imagesLoaded",function(e){i(e.target,"error"===e.type)}).each(function(e,t){var n=t.src,o=$.data(t,"imagesLoaded");return o&&o.src===n?void i(t,o.isBroken):t.complete&&void 0!==t.naturalWidth?void i(t,0===t.naturalWidth||0===t.naturalHeight):void((t.readyState||t.complete)&&(t.src=r,t.src=n))}):t(),o?o.promise(n):n};var o=function(){function e(e){E=$.extend(!0,{},E,e),l.imagesLoaded(function(){i(!0),o(),n()})}function t(e){h=h.add(e),e.each(function(){var e=$(this);e.data({offsetTop:e.offset().top,height:e.height()})}),r(e)}function i(e){h.each(function(){var t=$(this);t.data("offsetTop",t.offset().top),e&&t.data("height",t.height())})}function n(){r(h),m.on("debouncedresize",function(){f=0,u=-1,i(),o(),void 0!==$.data(this,"preview")&&s()})}function r(e){e.on("click","span.og-close",function(){return s(),!1}).children("a").on("click",function(e){var t=$(this).parent();return d===t.index()?s():a(t),!1})}function o(){g={width:m.width(),height:m.height()}}function a(e){var t=$.data(this,"preview"),i=e.data("offsetTop");if(f=0,void 0!==t){if(u===i)return t.update(e),!1;i>u&&(f=t.height),s()}u=i,t=$.data(this,"preview",new c(e)),t.open()}function s(){d=-1,$.data(this,"preview").close(),$.removeData(this,"preview")}function c(e){this.$item=e,this.expandedIdx=this.$item.index(),this.create(),this.update()}var l=$("#og-grid"),h=l.children("li"),d=-1,u=-1,f=0,p=10,m=$(window),g,v=$("html, body"),y={WebkitTransition:"webkitTransitionEnd",MozTransition:"transitionend",OTransition:"oTransitionEnd",msTransition:"MSTransitionEnd",transition:"transitionend"},w=y[Modernizr.prefixed("transition")],b=Modernizr.csstransitions,E={minHeight:700,speed:350,easing:"ease"};return c.prototype={create:function(){this.$title=$("<h3></h3>"),this.$role=$("<h4></h4>"),this.$description=$("<p></p>"),this.$href=$('<a target="_blank" href="#">View LinkedIn Profile</a>'),this.$details=$('<div class="og-details"></div>').append(this.$description),this.$loading=$('<div class="og-loading"></div>'),this.$fullimage=$('<div class="og-fullimg"></div>').append(this.$title,this.$role,this.$href),this.$closePreview=$('<span class="og-close"></span>'),this.$previewInner=$('<div class="og-expander-inner"></div>').append(this.$closePreview,this.$fullimage,this.$details),this.$previewEl=$('<div class="og-expander"></div>').append(this.$previewInner),this.$item.append(this.getEl()),b&&this.setTransition()},update:function(e){if(e&&(this.$item=e),-1!==d){h.eq(d).removeClass("og-expanded"),this.$item.addClass("og-expanded"),this.positionPreview()}d=this.$item.index();var t=this.$item.children("a"),i={href:t.attr("href"),largesrc:t.data("largesrc"),title:t.data("title"),role:t.data("role"),description:t.data("description")};this.$title.html(i.title),this.$role.html(i.role),this.$description.html(i.description),this.$href.attr("href",i.href);var n=this;void 0!==n.$largeImg&&n.$largeImg.remove()},open:function(){setTimeout($.proxy(function(){this.setHeights(),this.positionPreview()},this),25)},close:function(){var e=this,t=function(){b&&$(this).off(w),e.$item.removeClass("og-expanded"),e.$previewEl.remove()};return setTimeout($.proxy(function(){void 0!==this.$largeImg&&this.$largeImg.fadeOut("fast"),this.$previewEl.css("height",0);var e=h.eq(this.expandedIdx);e.css("height",e.data("height")).on(w,t),b||t.call()},this),25),!1},calcHeight:function(){var e=g.height-this.$item.data("height")-10,t=g.height;e<E.minHeight&&(e=E.minHeight,t=E.minHeight+this.$item.data("height")+10),this.height=e,this.itemHeight=t},setHeights:function(){var e=this,t=function(){b&&e.$item.off(w),e.$item.addClass("og-expanded")};this.calcHeight(),this.$previewEl.css("height",this.height),this.$item.css("height",this.itemHeight).on(w,t),b||t.call()},positionPreview:function(){var e=this.$item.data("offsetTop"),t=this.$previewEl.offset().top-f,i=this.height+this.$item.data("height")+10<=g.height?e:this.height<g.height?t-(g.height-this.height):t;v.animate({scrollTop:i},E.speed)},setTransition:function(){this.$previewEl.css("transition","height "+E.speed+"ms "+E.easing),this.$item.css("transition","height "+E.speed+"ms "+E.easing)},getEl:function(){return this.$previewEl}},{init:e,addItems:t}}();$(function(){o.init()})}(jQuery);