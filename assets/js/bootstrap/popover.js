
/* ========================================================================
 * Bootstrap: popover.js v3.3.6
 * http://getbootstrap.com/javascript/#popovers
 * ========================================================================
 * Copyright 2011-2015 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */


+function ($) {
  'use strict';

  // POPOVER PUBLIC CLASS DEFINITION
  // ===============================

  var PopoverRC = function (element, options) {
    this.init('popover', element, options)
  }

  if (!$.fn.rc_tooltip) throw new Error('PopoverRC requires tooltip.js')

  PopoverRC.VERSION  = '3.3.6'

  PopoverRC.DEFAULTS = $.extend({}, $.fn.rc_tooltip.Constructor.DEFAULTS, {
    placement: 'right',
    trigger: 'hover',
    content: '',
    template: '<div class="popover-box" role="tooltip"><div class="popover-box__arrow"></div><h3 class="popover-box__title"></h3><div class="popover-box__content"></div></div>'
  })


  // NOTE: POPOVER EXTENDS tooltip.js
  // ================================

  PopoverRC.prototype = $.extend({}, $.fn.rc_tooltip.Constructor.prototype)

  PopoverRC.prototype.constructor = PopoverRC

  PopoverRC.prototype.getDefaults = function () {
    return PopoverRC.DEFAULTS
  }

  PopoverRC.prototype.setContent = function () {
    var $tip    = this.tip()
    var title   = this.getTitle()
    var content = this.getContent()

    $tip.find('.popover-box__title')[this.options.html ? 'html' : 'text'](title)
    $tip.find('.popover-box__content').children().detach().end()[ // we use append for html objects to maintain js events
      this.options.html ? (typeof content == 'string' ? 'html' : 'append') : 'text'
    ](content)

    $tip.removeClass('fade top bottom left right in')

    // IE8 doesn't accept hiding via the `:empty` pseudo selector, we have to do
    // this manually by checking the contents.
    if (!$tip.find('.popover-box__title').html()) $tip.find('.popover-box__title').hide()
  }

  PopoverRC.prototype.hasContent = function () {
    return this.getTitle() || this.getContent()
  }

  PopoverRC.prototype.getContent = function () {
    var $e = this.$element
    var o  = this.options

    return $e.attr('data-content')
      || (typeof o.content == 'function' ?
            o.content.call($e[0]) :
            o.content)
  }

  PopoverRC.prototype.arrow = function () {
    return (this.$arrow = this.$arrow || this.tip().find('.popover-box__arrow'))
  }


  // POPOVER PLUGIN DEFINITION
  // =========================

  function Plugin(option) {
    return this.each(function () {
      var $this   = $(this)
      var data    = $this.data('bs.rc_popover')
      var options = typeof option == 'object' && option

      if (!data && /destroy|hide/.test(option)) return
      if (!data) $this.data('bs.rc_popover', (data = new PopoverRC(this, options)))
      if (typeof option == 'string') data[option]()
    })
  }

  var old = $.fn.rc_popover

  $.fn.rc_popover             = Plugin
  $.fn.rc_popover.Constructor = PopoverRC


  // POPOVER NO CONFLICT
  // ===================

  $.fn.rc_popover.noConflict = function () {
    $.fn.rc_popover = old
    return this
  }

}(jQuery);