+function($){"use strict";function t(t){var e,a=t.attr("data-target")||(e=t.attr("href"))&&e.replace(/.*(?=#[^\s]+$)/,"");return $(a)}function e(t){return this.each(function(){var e=$(this),s=e.data("bs.collapse"),i=$.extend({},a.DEFAULTS,e.data(),"object"==typeof t&&t);!s&&i.toggle&&/show|hide/.test(t)&&(i.toggle=!1),s||e.data("bs.collapse",s=new a(this,i)),"string"==typeof t&&s[t]()})}var a=function(t,e){this.$element=$(t),this.options=$.extend({},a.DEFAULTS,e),this.$trigger=$('[data-toggle="collapse__menu"][href="#'+t.id+'"],[data-toggle="collapse__menu"][data-target="#'+t.id+'"]'),this.transitioning=null,this.options.parent?this.$parent=this.getParent():this.addAriaAndCollapsedClass(this.$element,this.$trigger),this.options.toggle&&this.toggle()};a.VERSION="3.3.6",a.TRANSITION_DURATION=350,a.DEFAULTS={toggle:!0},a.prototype.dimension=function(){var t=this.$element.hasClass("width");return t?"width":"height"},a.prototype.show=function(){if(!this.transitioning&&!this.$element.hasClass("in")){var t,s=this.$parent&&this.$parent.children(".panel").children(".in, .collapsing");if(!(s&&s.length&&(t=s.data("bs.collapse"),t&&t.transitioning))){var i=$.Event("show.bs.collapse");if(this.$element.trigger(i),!i.isDefaultPrevented()){s&&s.length&&(e.call(s,"hide"),t||s.data("bs.collapse",null));var n=this.dimension();this.$element.removeClass("collapse").addClass("collapsing")[n](0).attr("aria-expanded",!0),this.$trigger.removeClass("collapsed").attr("aria-expanded",!0),this.transitioning=1;var l=function(){this.$element.removeClass("collapsing").addClass("collapse in")[n](""),this.transitioning=0,this.$element.trigger("shown.bs.collapse")};if(!$.support.transition)return l.call(this);var o=$.camelCase(["scroll",n].join("-"));this.$element.one("bsTransitionEnd",$.proxy(l,this)).emulateTransitionEnd(a.TRANSITION_DURATION)[n](this.$element[0][o])}}}},a.prototype.hide=function(){if(!this.transitioning&&this.$element.hasClass("in")){var t=$.Event("hide.bs.collapse");if(this.$element.trigger(t),!t.isDefaultPrevented()){var e=this.dimension();this.$element[e](this.$element[e]())[0].offsetHeight,this.$element.addClass("collapsing").removeClass("collapse in").attr("aria-expanded",!1),this.$trigger.addClass("collapsed").attr("aria-expanded",!1),this.transitioning=1;var s=function(){this.transitioning=0,this.$element.removeClass("collapsing").addClass("collapse").trigger("hidden.bs.collapse")};return $.support.transition?void this.$element[e](0).one("bsTransitionEnd",$.proxy(s,this)).emulateTransitionEnd(a.TRANSITION_DURATION):s.call(this)}}},a.prototype.toggle=function(){this[this.$element.hasClass("in")?"hide":"show"]()},a.prototype.getParent=function(){return $(this.options.parent).find('[data-toggle="collapse__menu"][data-parent="'+this.options.parent+'"]').each($.proxy(function(e,a){var s=$(a);this.addAriaAndCollapsedClass(t(s),s)},this)).end()},a.prototype.addAriaAndCollapsedClass=function(t,e){var a=t.hasClass("in");t.attr("aria-expanded",a),e.toggleClass("collapsed",!a).attr("aria-expanded",a)};var s=$.fn.collapse;$.fn.collapse=e,$.fn.collapse.Constructor=a,$.fn.collapse.noConflict=function(){return $.fn.collapse=s,this},$(document).on("click.bs.collapse.data-api",'[data-toggle="collapse__menu"]',function(a){var s=$(this);s.attr("data-target")||a.preventDefault();var i=t(s),n=i.data("bs.collapse"),l=n?"toggle":s.data();e.call(i,l)})}(jQuery);