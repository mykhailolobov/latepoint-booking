var g=(o,i)=>()=>(i||o((i={exports:{}}).exports,i),i.exports);var P=g((p,l)=>{(function(o,i){typeof p=="object"&&typeof l<"u"?l.exports=i():typeof define=="function"&&define.amd?define(i):(o=typeof globalThis<"u"?globalThis:o||self,o.FormValidation=o.FormValidation||{},o.FormValidation.plugins=o.FormValidation.plugins||{},o.FormValidation.plugins.Turret=i())})(void 0,function(){function o(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}function i(e,t){for(var n=0;n<t.length;n++){var r=t[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(e,r.key,r)}}function d(e,t,n){return t&&i(e.prototype,t),n&&i(e,n),Object.defineProperty(e,"prototype",{writable:!1}),e}function y(e,t){if(typeof t!="function"&&t!==null)throw new TypeError("Super expression must either be null or a function");e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,writable:!0,configurable:!0}}),Object.defineProperty(e,"prototype",{writable:!1}),t&&c(e,t)}function u(e){return u=Object.setPrototypeOf?Object.getPrototypeOf.bind():function(n){return n.__proto__||Object.getPrototypeOf(n)},u(e)}function c(e,t){return c=Object.setPrototypeOf?Object.setPrototypeOf.bind():function(r,f){return r.__proto__=f,r},c(e,t)}function v(){if(typeof Reflect>"u"||!Reflect.construct||Reflect.construct.sham)return!1;if(typeof Proxy=="function")return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],function(){})),!0}catch{return!1}}function m(e){if(e===void 0)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return e}function h(e,t){if(t&&(typeof t=="object"||typeof t=="function"))return t;if(t!==void 0)throw new TypeError("Derived constructors may only return object or undefined");return m(e)}function b(e){var t=v();return function(){var r=u(e),f;if(t){var a=u(this).constructor;f=Reflect.construct(r,arguments,a)}else f=r.apply(this,arguments);return h(this,f)}}var _=FormValidation.utils.classSet,O=FormValidation.plugins.Framework,w=function(e){y(n,e);var t=b(n);function n(r){return o(this,n),t.call(this,Object.assign({},{formClass:"fv-plugins-turret",messageClass:"form-message",rowInvalidClass:"fv-invalid-row",rowPattern:/^field$/,rowSelector:".field",rowValidClass:"fv-valid-row"},r))}return d(n,[{key:"onIconPlaced",value:function(f){var a=f.element.getAttribute("type"),s=f.element.parentElement;(a==="checkbox"||a==="radio")&&(s.parentElement.insertBefore(f.iconElement,s.nextSibling),_(f.iconElement,{"fv-plugins-icon-check":!0}))}}]),n}(O);return w})});export default P();
