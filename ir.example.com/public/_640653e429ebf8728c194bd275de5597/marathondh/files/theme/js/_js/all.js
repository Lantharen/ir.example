/*!
 * Generated using the Bootstrap Customizer (https://getbootstrap.com/docs/3.4/customize/)
 */

/*!
 * Bootstrap v3.4.1 (https://getbootstrap.com/)
 * Copyright 2011-2019 Twitter, Inc.
 * Licensed under the MIT license
 */

if (typeof jQuery === 'undefined') {
    throw new Error('Bootstrap\'s JavaScript requires jQuery')
}
+function ($) {
    'use strict';
    var version = $.fn.jquery.split(' ')[0].split('.')
    if ((version[0] < 2 && version[1] < 9) || (version[0] == 1 && version[1] == 9 && version[2] < 1) || (version[0] > 3)) {
        throw new Error('Bootstrap\'s JavaScript requires jQuery version 1.9.1 or higher, but lower than version 4')
    }
}(jQuery);

/* ========================================================================
 * Bootstrap: dropdown.js v3.4.1
 * https://getbootstrap.com/docs/3.4/javascript/#dropdowns
 * ========================================================================
 * Copyright 2011-2019 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */


+function ($) {
    'use strict';

    // DROPDOWN CLASS DEFINITION
    // =========================

    var backdrop = '.dropdown-backdrop'
    var toggle = '[data-toggle="dropdown"]'
    var Dropdown = function (element) {
        $(element).on('click.bs.dropdown', this.toggle)
    }

    Dropdown.VERSION = '3.4.1'

    function getParent($this) {
        var selector = $this.attr('data-target')

        if (!selector) {
            selector = $this.attr('href')
            selector = selector && /#[A-Za-z]/.test(selector) && selector.replace(/.*(?=#[^\s]*$)/, '') // strip for ie7
        }

        var $parent = selector !== '#' ? $(document).find(selector) : null

        return $parent && $parent.length ? $parent : $this.parent()
    }

    function clearMenus(e) {
        if (e && e.which === 3) return
        $(backdrop).remove()
        $(toggle).each(function () {
            var $this = $(this)
            var $parent = getParent($this)
            var relatedTarget = {relatedTarget: this}

            if (!$parent.hasClass('open')) return

            if (e && e.type == 'click' && /input|textarea/i.test(e.target.tagName) && $.contains($parent[0], e.target)) return

            $parent.trigger(e = $.Event('hide.bs.dropdown', relatedTarget))

            if (e.isDefaultPrevented()) return

            $this.attr('aria-expanded', 'false')
            $parent.removeClass('open').trigger($.Event('hidden.bs.dropdown', relatedTarget))
        })
    }

    Dropdown.prototype.toggle = function (e) {
        var $this = $(this)

        if ($this.is('.disabled, :disabled')) return

        var $parent = getParent($this)
        var isActive = $parent.hasClass('open')

        clearMenus()

        if (!isActive) {
            if ('ontouchstart' in document.documentElement && !$parent.closest('.navbar-nav').length) {
                // if mobile we use a backdrop because click events don't delegate
                $(document.createElement('div'))
                    .addClass('dropdown-backdrop')
                    .insertAfter($(this))
                    .on('click', clearMenus)
            }

            var relatedTarget = {relatedTarget: this}
            $parent.trigger(e = $.Event('show.bs.dropdown', relatedTarget))

            if (e.isDefaultPrevented()) return

            $this
                .trigger('focus')
                .attr('aria-expanded', 'true')

            $parent
                .toggleClass('open')
                .trigger($.Event('shown.bs.dropdown', relatedTarget))
        }

        return false
    }

    Dropdown.prototype.keydown = function (e) {
        if (!/(38|40|27|32)/.test(e.which) || /input|textarea/i.test(e.target.tagName)) return

        var $this = $(this)

        e.preventDefault()
        e.stopPropagation()

        if ($this.is('.disabled, :disabled')) return

        var $parent = getParent($this)
        var isActive = $parent.hasClass('open')

        if (!isActive && e.which != 27 || isActive && e.which == 27) {
            if (e.which == 27) $parent.find(toggle).trigger('focus')
            return $this.trigger('click')
        }

        var desc = ' li:not(.disabled):visible a'
        var $items = $parent.find('.dropdown-menu' + desc)

        if (!$items.length) return

        var index = $items.index(e.target)

        if (e.which == 38 && index > 0) index--         // up
        if (e.which == 40 && index < $items.length - 1) index++         // down
        if (!~index) index = 0

        $items.eq(index).trigger('focus')
    }


    // DROPDOWN PLUGIN DEFINITION
    // ==========================

    function Plugin(option) {
        return this.each(function () {
            var $this = $(this)
            var data = $this.data('bs.dropdown')

            if (!data) $this.data('bs.dropdown', (data = new Dropdown(this)))
            if (typeof option == 'string') data[option].call($this)
        })
    }

    var old = $.fn.dropdown

    $.fn.dropdown = Plugin
    $.fn.dropdown.Constructor = Dropdown


    // DROPDOWN NO CONFLICT
    // ====================

    $.fn.dropdown.noConflict = function () {
        $.fn.dropdown = old
        return this
    }


    // APPLY TO STANDARD DROPDOWN ELEMENTS
    // ===================================

    $(document)
        .on('click.bs.dropdown.data-api', clearMenus)
        .on('click.bs.dropdown.data-api', '.dropdown form', function (e) {
            e.stopPropagation()
        })
        .on('click.bs.dropdown.data-api', toggle, Dropdown.prototype.toggle)
        .on('keydown.bs.dropdown.data-api', toggle, Dropdown.prototype.keydown)
        .on('keydown.bs.dropdown.data-api', '.dropdown-menu', Dropdown.prototype.keydown)

}(jQuery);

/* ========================================================================
 * Bootstrap: tab.js v3.4.1
 * https://getbootstrap.com/docs/3.4/javascript/#tabs
 * ========================================================================
 * Copyright 2011-2019 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */


+function ($) {
    'use strict';

    // TAB CLASS DEFINITION
    // ====================

    var Tab = function (element) {
        // jscs:disable requireDollarBeforejQueryAssignment
        this.element = $(element)
        // jscs:enable requireDollarBeforejQueryAssignment
    }

    Tab.VERSION = '3.4.1'

    Tab.TRANSITION_DURATION = 150

    Tab.prototype.show = function () {
        var $this = this.element
        var $ul = $this.closest('ul:not(.dropdown-menu)')
        var selector = $this.data('target')

        if (!selector) {
            selector = $this.attr('href')
            selector = selector && selector.replace(/.*(?=#[^\s]*$)/, '') // strip for ie7
        }

        if ($this.parent('li').hasClass('active')) return

        var $previous = $ul.find('.active:last a')
        var hideEvent = $.Event('hide.bs.tab', {
            relatedTarget: $this[0]
        })
        var showEvent = $.Event('show.bs.tab', {
            relatedTarget: $previous[0]
        })

        $previous.trigger(hideEvent)
        $this.trigger(showEvent)

        if (showEvent.isDefaultPrevented() || hideEvent.isDefaultPrevented()) return

        var $target = $(document).find(selector)

        this.activate($this.closest('li'), $ul)
        this.activate($target, $target.parent(), function () {
            $previous.trigger({
                type: 'hidden.bs.tab',
                relatedTarget: $this[0]
            })
            $this.trigger({
                type: 'shown.bs.tab',
                relatedTarget: $previous[0]
            })
        })
    }

    Tab.prototype.activate = function (element, container, callback) {
        var $active = container.find('> .active')
        var transition = callback
            && $.support.transition
            && ($active.length && $active.hasClass('fade') || !!container.find('> .fade').length)

        function next() {
            $active
                .removeClass('active')
                .find('> .dropdown-menu > .active')
                .removeClass('active')
                .end()
                .find('[data-toggle="tab"]')
                .attr('aria-expanded', false)

            element
                .addClass('active')
                .find('[data-toggle="tab"]')
                .attr('aria-expanded', true)

            if (transition) {
                element[0].offsetWidth // reflow for transition
                element.addClass('in')
            } else {
                element.removeClass('fade')
            }

            if (element.parent('.dropdown-menu').length) {
                element
                    .closest('li.dropdown')
                    .addClass('active')
                    .end()
                    .find('[data-toggle="tab"]')
                    .attr('aria-expanded', true)
            }

            callback && callback()
        }

        $active.length && transition ?
            $active
                .one('bsTransitionEnd', next)
                .emulateTransitionEnd(Tab.TRANSITION_DURATION) :
            next()

        $active.removeClass('in')
    }


    // TAB PLUGIN DEFINITION
    // =====================

    function Plugin(option) {
        return this.each(function () {
            var $this = $(this)
            var data = $this.data('bs.tab')

            if (!data) $this.data('bs.tab', (data = new Tab(this)))
            if (typeof option == 'string') data[option]()
        })
    }

    var old = $.fn.tab

    $.fn.tab = Plugin
    $.fn.tab.Constructor = Tab


    // TAB NO CONFLICT
    // ===============

    $.fn.tab.noConflict = function () {
        $.fn.tab = old
        return this
    }


    // TAB DATA-API
    // ============

    var clickHandler = function (e) {
        e.preventDefault()
        Plugin.call($(this), 'show')
    }

    $(document)
        .on('click.bs.tab.data-api', '[data-toggle="tab"]', clickHandler)
        .on('click.bs.tab.data-api', '[data-toggle="pill"]', clickHandler)

}(jQuery);

/* ========================================================================
 * Bootstrap: affix.js v3.4.1
 * https://getbootstrap.com/docs/3.4/javascript/#affix
 * ========================================================================
 * Copyright 2011-2019 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */


+function ($) {
    'use strict';

    // AFFIX CLASS DEFINITION
    // ======================

    var Affix = function (element, options) {
        this.options = $.extend({}, Affix.DEFAULTS, options)

        var target = this.options.target === Affix.DEFAULTS.target ? $(this.options.target) : $(document).find(this.options.target)

        this.$target = target
            .on('scroll.bs.affix.data-api', $.proxy(this.checkPosition, this))
            .on('click.bs.affix.data-api', $.proxy(this.checkPositionWithEventLoop, this))

        this.$element = $(element)
        this.affixed = null
        this.unpin = null
        this.pinnedOffset = null

        this.checkPosition()
    }

    Affix.VERSION = '3.4.1'

    Affix.RESET = 'affix affix-top affix-bottom'

    Affix.DEFAULTS = {
        offset: 0,
        target: window
    }

    Affix.prototype.getState = function (scrollHeight, height, offsetTop, offsetBottom) {
        var scrollTop = this.$target.scrollTop()
        var position = this.$element.offset()
        var targetHeight = this.$target.height()

        if (offsetTop != null && this.affixed == 'top') return scrollTop < offsetTop ? 'top' : false

        if (this.affixed == 'bottom') {
            if (offsetTop != null) return (scrollTop + this.unpin <= position.top) ? false : 'bottom'
            return (scrollTop + targetHeight <= scrollHeight - offsetBottom) ? false : 'bottom'
        }

        var initializing = this.affixed == null
        var colliderTop = initializing ? scrollTop : position.top
        var colliderHeight = initializing ? targetHeight : height

        if (offsetTop != null && scrollTop <= offsetTop) return 'top'
        if (offsetBottom != null && (colliderTop + colliderHeight >= scrollHeight - offsetBottom)) return 'bottom'

        return false
    }

    Affix.prototype.getPinnedOffset = function () {
        if (this.pinnedOffset) return this.pinnedOffset
        this.$element.removeClass(Affix.RESET).addClass('affix')
        var scrollTop = this.$target.scrollTop()
        var position = this.$element.offset()
        return (this.pinnedOffset = position.top - scrollTop)
    }

    Affix.prototype.checkPositionWithEventLoop = function () {
        setTimeout($.proxy(this.checkPosition, this), 1)
    }

    Affix.prototype.checkPosition = function () {
        if (!this.$element.is(':visible')) return

        var height = this.$element.height()
        var offset = this.options.offset
        var offsetTop = offset.top
        var offsetBottom = offset.bottom
        var scrollHeight = Math.max($(document).height(), $(document.body).height())

        if (typeof offset != 'object') offsetBottom = offsetTop = offset
        if (typeof offsetTop == 'function') offsetTop = offset.top(this.$element)
        if (typeof offsetBottom == 'function') offsetBottom = offset.bottom(this.$element)

        var affix = this.getState(scrollHeight, height, offsetTop, offsetBottom)

        if (this.affixed != affix) {
            if (this.unpin != null) this.$element.css('top', '')

            var affixType = 'affix' + (affix ? '-' + affix : '')
            var e = $.Event(affixType + '.bs.affix')

            this.$element.trigger(e)

            if (e.isDefaultPrevented()) return

            this.affixed = affix
            this.unpin = affix == 'bottom' ? this.getPinnedOffset() : null

            this.$element
                .removeClass(Affix.RESET)
                .addClass(affixType)
                .trigger(affixType.replace('affix', 'affixed') + '.bs.affix')
        }

        if (affix == 'bottom') {
            this.$element.offset({
                top: scrollHeight - height - offsetBottom
            })
        }
    }


    // AFFIX PLUGIN DEFINITION
    // =======================

    function Plugin(option) {
        return this.each(function () {
            var $this = $(this)
            var data = $this.data('bs.affix')
            var options = typeof option == 'object' && option

            if (!data) $this.data('bs.affix', (data = new Affix(this, options)))
            if (typeof option == 'string') data[option]()
        })
    }

    var old = $.fn.affix

    $.fn.affix = Plugin
    $.fn.affix.Constructor = Affix


    // AFFIX NO CONFLICT
    // =================

    $.fn.affix.noConflict = function () {
        $.fn.affix = old
        return this
    }


    // AFFIX DATA-API
    // ==============

    $(window).on('load', function () {
        $('[data-spy="affix"]').each(function () {
            var $spy = $(this)
            var data = $spy.data()

            data.offset = data.offset || {}

            if (data.offsetBottom != null) data.offset.bottom = data.offsetBottom
            if (data.offsetTop != null) data.offset.top = data.offsetTop

            Plugin.call($spy, data)
        })
    })

}(jQuery);

/* ========================================================================
 * Bootstrap: collapse.js v3.4.1
 * https://getbootstrap.com/docs/3.4/javascript/#collapse
 * ========================================================================
 * Copyright 2011-2019 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */

/* jshint latedef: false */

+function ($) {
    'use strict';

    // COLLAPSE PUBLIC CLASS DEFINITION
    // ================================

    var Collapse = function (element, options) {
        this.$element = $(element)
        this.options = $.extend({}, Collapse.DEFAULTS, options)
        this.$trigger = $('[data-toggle="collapse"][href="#' + element.id + '"],' +
            '[data-toggle="collapse"][data-target="#' + element.id + '"]')
        this.transitioning = null

        if (this.options.parent) {
            this.$parent = this.getParent()
        } else {
            this.addAriaAndCollapsedClass(this.$element, this.$trigger)
        }

        if (this.options.toggle) this.toggle()
    }

    Collapse.VERSION = '3.4.1'

    Collapse.TRANSITION_DURATION = 350

    Collapse.DEFAULTS = {
        toggle: true
    }

    Collapse.prototype.dimension = function () {
        var hasWidth = this.$element.hasClass('width')
        return hasWidth ? 'width' : 'height'
    }

    Collapse.prototype.show = function () {
        if (this.transitioning || this.$element.hasClass('in')) return

        var activesData
        var actives = this.$parent && this.$parent.children('.panel').children('.in, .collapsing')

        if (actives && actives.length) {
            activesData = actives.data('bs.collapse')
            if (activesData && activesData.transitioning) return
        }

        var startEvent = $.Event('show.bs.collapse')
        this.$element.trigger(startEvent)
        if (startEvent.isDefaultPrevented()) return

        if (actives && actives.length) {
            Plugin.call(actives, 'hide')
            activesData || actives.data('bs.collapse', null)
        }

        var dimension = this.dimension()

        this.$element
            .removeClass('collapse')
            .addClass('collapsing')[dimension](0)
            .attr('aria-expanded', true)

        this.$trigger
            .removeClass('collapsed')
            .attr('aria-expanded', true)

        this.transitioning = 1

        var complete = function () {
            this.$element
                .removeClass('collapsing')
                .addClass('collapse in')[dimension]('')
            this.transitioning = 0
            this.$element
                .trigger('shown.bs.collapse')
        }

        if (!$.support.transition) return complete.call(this)

        var scrollSize = $.camelCase(['scroll', dimension].join('-'))

        this.$element
            .one('bsTransitionEnd', $.proxy(complete, this))
            .emulateTransitionEnd(Collapse.TRANSITION_DURATION)[dimension](this.$element[0][scrollSize])
    }

    Collapse.prototype.hide = function () {
        if (this.transitioning || !this.$element.hasClass('in')) return

        var startEvent = $.Event('hide.bs.collapse')
        this.$element.trigger(startEvent)
        if (startEvent.isDefaultPrevented()) return

        var dimension = this.dimension()

        this.$element[dimension](this.$element[dimension]())[0].offsetHeight

        this.$element
            .addClass('collapsing')
            .removeClass('collapse in')
            .attr('aria-expanded', false)

        this.$trigger
            .addClass('collapsed')
            .attr('aria-expanded', false)

        this.transitioning = 1

        var complete = function () {
            this.transitioning = 0
            this.$element
                .removeClass('collapsing')
                .addClass('collapse')
                .trigger('hidden.bs.collapse')
        }

        if (!$.support.transition) return complete.call(this)

        this.$element
            [dimension](0)
            .one('bsTransitionEnd', $.proxy(complete, this))
            .emulateTransitionEnd(Collapse.TRANSITION_DURATION)
    }

    Collapse.prototype.toggle = function () {
        this[this.$element.hasClass('in') ? 'hide' : 'show']()
    }

    Collapse.prototype.getParent = function () {
        return $(document).find(this.options.parent)
            .find('[data-toggle="collapse"][data-parent="' + this.options.parent + '"]')
            .each($.proxy(function (i, element) {
                var $element = $(element)
                this.addAriaAndCollapsedClass(getTargetFromTrigger($element), $element)
            }, this))
            .end()
    }

    Collapse.prototype.addAriaAndCollapsedClass = function ($element, $trigger) {
        var isOpen = $element.hasClass('in')

        $element.attr('aria-expanded', isOpen)
        $trigger
            .toggleClass('collapsed', !isOpen)
            .attr('aria-expanded', isOpen)
    }

    function getTargetFromTrigger($trigger) {
        var href
        var target = $trigger.attr('data-target')
            || (href = $trigger.attr('href')) && href.replace(/.*(?=#[^\s]+$)/, '') // strip for ie7

        return $(document).find(target)
    }


    // COLLAPSE PLUGIN DEFINITION
    // ==========================

    function Plugin(option) {
        return this.each(function () {
            var $this = $(this)
            var data = $this.data('bs.collapse')
            var options = $.extend({}, Collapse.DEFAULTS, $this.data(), typeof option == 'object' && option)

            if (!data && options.toggle && /show|hide/.test(option)) options.toggle = false
            if (!data) $this.data('bs.collapse', (data = new Collapse(this, options)))
            if (typeof option == 'string') data[option]()
        })
    }

    var old = $.fn.collapse

    $.fn.collapse = Plugin
    $.fn.collapse.Constructor = Collapse


    // COLLAPSE NO CONFLICT
    // ====================

    $.fn.collapse.noConflict = function () {
        $.fn.collapse = old
        return this
    }


    // COLLAPSE DATA-API
    // =================

    $(document).on('click.bs.collapse.data-api', '[data-toggle="collapse"]', function (e) {
        var $this = $(this)

        if (!$this.attr('data-target')) e.preventDefault()

        var $target = getTargetFromTrigger($this)
        var data = $target.data('bs.collapse')
        var option = data ? 'toggle' : $this.data()

        Plugin.call($target, option)
    })

}(jQuery);

/* ========================================================================
 * Bootstrap: transition.js v3.4.1
 * https://getbootstrap.com/docs/3.4/javascript/#transitions
 * ========================================================================
 * Copyright 2011-2019 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */


+function ($) {
    'use strict';

    // CSS TRANSITION SUPPORT (Shoutout: https://modernizr.com/)
    // ============================================================

    function transitionEnd() {
        var el = document.createElement('bootstrap')

        var transEndEventNames = {
            WebkitTransition: 'webkitTransitionEnd',
            MozTransition: 'transitionend',
            OTransition: 'oTransitionEnd otransitionend',
            transition: 'transitionend'
        }

        for (var name in transEndEventNames) {
            if (el.style[name] !== undefined) {
                return {end: transEndEventNames[name]}
            }
        }

        return false // explicit for ie8 (  ._.)
    }

    // https://blog.alexmaccaw.com/css-transitions
    $.fn.emulateTransitionEnd = function (duration) {
        var called = false
        var $el = this
        $(this).one('bsTransitionEnd', function () {
            called = true
        })
        var callback = function () {
            if (!called) $($el).trigger($.support.transition.end)
        }
        setTimeout(callback, duration)
        return this
    }

    $(function () {
        $.support.transition = transitionEnd()

        if (!$.support.transition) return

        $.event.special.bsTransitionEnd = {
            bindType: $.support.transition.end,
            delegateType: $.support.transition.end,
            handle: function (e) {
                if ($(e.target).is(this)) return e.handleObj.handler.apply(this, arguments)
            }
        }
    })

}(jQuery);

/*!
 * Bootstrap-select v1.13.14 (https://developer.snapappointments.com/bootstrap-select)
 *
 * Copyright 2012-2020 SnapAppointments, LLC
 * Licensed under MIT (https://github.com/snapappointments/bootstrap-select/blob/master/LICENSE)
 */

!function (e, t) {
    void 0 === e && void 0 !== window && (e = window), "function" == typeof define && define.amd ? define(["jquery"], function (e) {
        return t(e)
    }) : "object" == typeof module && module.exports ? module.exports = t(require("jquery")) : t(e.jQuery)
}(this, function (e) {
    !function (z) {
        "use strict";
        var d = ["sanitize", "whiteList", "sanitizeFn"],
            r = ["background", "cite", "href", "itemtype", "longdesc", "poster", "src", "xlink:href"], e = {
                "*": ["class", "dir", "id", "lang", "role", "tabindex", "style", /^aria-[\w-]*$/i],
                a: ["target", "href", "title", "rel"],
                area: [],
                b: [],
                br: [],
                col: [],
                code: [],
                div: [],
                em: [],
                hr: [],
                h1: [],
                h2: [],
                h3: [],
                h4: [],
                h5: [],
                h6: [],
                i: [],
                img: ["src", "alt", "title", "width", "height"],
                li: [],
                ol: [],
                p: [],
                pre: [],
                s: [],
                small: [],
                span: [],
                sub: [],
                sup: [],
                strong: [],
                u: [],
                ul: []
            }, l = /^(?:(?:https?|mailto|ftp|tel|file):|[^&:/?#]*(?:[/?#]|$))/gi,
            a = /^data:(?:image\/(?:bmp|gif|jpeg|jpg|png|tiff|webp)|video\/(?:mpeg|mp4|ogg|webm)|audio\/(?:mp3|oga|ogg|opus));base64,[a-z0-9+/]+=*$/i;

        function v(e, t) {
            var i = e.nodeName.toLowerCase();
            if (-1 !== z.inArray(i, t)) return -1 === z.inArray(i, r) || Boolean(e.nodeValue.match(l) || e.nodeValue.match(a));
            for (var s = z(t).filter(function (e, t) {
                return t instanceof RegExp
            }), n = 0, o = s.length; n < o; n++) if (i.match(s[n])) return !0;
            return !1
        }

        function P(e, t, i) {
            if (i && "function" == typeof i) return i(e);
            for (var s = Object.keys(t), n = 0, o = e.length; n < o; n++) for (var r = e[n].querySelectorAll("*"), l = 0, a = r.length; l < a; l++) {
                var c = r[l], d = c.nodeName.toLowerCase();
                if (-1 !== s.indexOf(d)) for (var h = [].slice.call(c.attributes), p = [].concat(t["*"] || [], t[d] || []), u = 0, f = h.length; u < f; u++) {
                    var m = h[u];
                    v(m, p) || c.removeAttribute(m.nodeName)
                } else c.parentNode.removeChild(c)
            }
        }

        "classList" in document.createElement("_") || function (e) {
            if ("Element" in e) {
                var t = "classList", i = "prototype", s = e.Element[i], n = Object, o = function () {
                    var i = z(this);
                    return {
                        add: function (e) {
                            return e = Array.prototype.slice.call(arguments).join(" "), i.addClass(e)
                        }, remove: function (e) {
                            return e = Array.prototype.slice.call(arguments).join(" "), i.removeClass(e)
                        }, toggle: function (e, t) {
                            return i.toggleClass(e, t)
                        }, contains: function (e) {
                            return i.hasClass(e)
                        }
                    }
                };
                if (n.defineProperty) {
                    var r = {get: o, enumerable: !0, configurable: !0};
                    try {
                        n.defineProperty(s, t, r)
                    } catch (e) {
                        void 0 !== e.number && -2146823252 !== e.number || (r.enumerable = !1, n.defineProperty(s, t, r))
                    }
                } else n[i].__defineGetter__ && s.__defineGetter__(t, o)
            }
        }(window);
        var t, c, i = document.createElement("_");
        if (i.classList.add("c1", "c2"), !i.classList.contains("c2")) {
            var s = DOMTokenList.prototype.add, n = DOMTokenList.prototype.remove;
            DOMTokenList.prototype.add = function () {
                Array.prototype.forEach.call(arguments, s.bind(this))
            }, DOMTokenList.prototype.remove = function () {
                Array.prototype.forEach.call(arguments, n.bind(this))
            }
        }
        if (i.classList.toggle("c3", !1), i.classList.contains("c3")) {
            var o = DOMTokenList.prototype.toggle;
            DOMTokenList.prototype.toggle = function (e, t) {
                return 1 in arguments && !this.contains(e) == !t ? t : o.call(this, e)
            }
        }

        function h(e) {
            if (null == this) throw new TypeError;
            var t = String(this);
            if (e && "[object RegExp]" == c.call(e)) throw new TypeError;
            var i = t.length, s = String(e), n = s.length, o = 1 < arguments.length ? arguments[1] : void 0,
                r = o ? Number(o) : 0;
            r != r && (r = 0);
            var l = Math.min(Math.max(r, 0), i);
            if (i < n + l) return !1;
            for (var a = -1; ++a < n;) if (t.charCodeAt(l + a) != s.charCodeAt(a)) return !1;
            return !0
        }

        function O(e, t) {
            var i, s = e.selectedOptions, n = [];
            if (t) {
                for (var o = 0, r = s.length; o < r; o++) (i = s[o]).disabled || "OPTGROUP" === i.parentNode.tagName && i.parentNode.disabled || n.push(i);
                return n
            }
            return s
        }

        function T(e, t) {
            for (var i, s = [], n = t || e.selectedOptions, o = 0, r = n.length; o < r; o++) (i = n[o]).disabled || "OPTGROUP" === i.parentNode.tagName && i.parentNode.disabled || s.push(i.value);
            return e.multiple ? s : s.length ? s[0] : null
        }

        i = null, String.prototype.startsWith || (t = function () {
            try {
                var e = {}, t = Object.defineProperty, i = t(e, e, e) && t
            } catch (e) {
            }
            return i
        }(), c = {}.toString, t ? t(String.prototype, "startsWith", {
            value: h,
            configurable: !0,
            writable: !0
        }) : String.prototype.startsWith = h), Object.keys || (Object.keys = function (e, t, i) {
            for (t in i = [], e) i.hasOwnProperty.call(e, t) && i.push(t);
            return i
        }), HTMLSelectElement && !HTMLSelectElement.prototype.hasOwnProperty("selectedOptions") && Object.defineProperty(HTMLSelectElement.prototype, "selectedOptions", {
            get: function () {
                return this.querySelectorAll(":checked")
            }
        });
        var p = {useDefault: !1, _set: z.valHooks.select.set};
        z.valHooks.select.set = function (e, t) {
            return t && !p.useDefault && z(e).data("selected", !0), p._set.apply(this, arguments)
        };
        var A = null, u = function () {
            try {
                return new Event("change"), !0
            } catch (e) {
                return !1
            }
        }();

        function k(e, t, i, s) {
            for (var n = ["display", "subtext", "tokens"], o = !1, r = 0; r < n.length; r++) {
                var l = n[r], a = e[l];
                if (a && (a = a.toString(), "display" === l && (a = a.replace(/<[^>]+>/g, "")), s && (a = w(a)), a = a.toUpperCase(), o = "contains" === i ? 0 <= a.indexOf(t) : a.startsWith(t))) break
            }
            return o
        }

        function L(e) {
            return parseInt(e, 10) || 0
        }

        z.fn.triggerNative = function (e) {
            var t, i = this[0];
            i.dispatchEvent ? (u ? t = new Event(e, {bubbles: !0}) : (t = document.createEvent("Event")).initEvent(e, !0, !1), i.dispatchEvent(t)) : i.fireEvent ? ((t = document.createEventObject()).eventType = e, i.fireEvent("on" + e, t)) : this.trigger(e)
        };
        var f = {
                "\xc0": "A",
                "\xc1": "A",
                "\xc2": "A",
                "\xc3": "A",
                "\xc4": "A",
                "\xc5": "A",
                "\xe0": "a",
                "\xe1": "a",
                "\xe2": "a",
                "\xe3": "a",
                "\xe4": "a",
                "\xe5": "a",
                "\xc7": "C",
                "\xe7": "c",
                "\xd0": "D",
                "\xf0": "d",
                "\xc8": "E",
                "\xc9": "E",
                "\xca": "E",
                "\xcb": "E",
                "\xe8": "e",
                "\xe9": "e",
                "\xea": "e",
                "\xeb": "e",
                "\xcc": "I",
                "\xcd": "I",
                "\xce": "I",
                "\xcf": "I",
                "\xec": "i",
                "\xed": "i",
                "\xee": "i",
                "\xef": "i",
                "\xd1": "N",
                "\xf1": "n",
                "\xd2": "O",
                "\xd3": "O",
                "\xd4": "O",
                "\xd5": "O",
                "\xd6": "O",
                "\xd8": "O",
                "\xf2": "o",
                "\xf3": "o",
                "\xf4": "o",
                "\xf5": "o",
                "\xf6": "o",
                "\xf8": "o",
                "\xd9": "U",
                "\xda": "U",
                "\xdb": "U",
                "\xdc": "U",
                "\xf9": "u",
                "\xfa": "u",
                "\xfb": "u",
                "\xfc": "u",
                "\xdd": "Y",
                "\xfd": "y",
                "\xff": "y",
                "\xc6": "Ae",
                "\xe6": "ae",
                "\xde": "Th",
                "\xfe": "th",
                "\xdf": "ss",
                "\u0100": "A",
                "\u0102": "A",
                "\u0104": "A",
                "\u0101": "a",
                "\u0103": "a",
                "\u0105": "a",
                "\u0106": "C",
                "\u0108": "C",
                "\u010a": "C",
                "\u010c": "C",
                "\u0107": "c",
                "\u0109": "c",
                "\u010b": "c",
                "\u010d": "c",
                "\u010e": "D",
                "\u0110": "D",
                "\u010f": "d",
                "\u0111": "d",
                "\u0112": "E",
                "\u0114": "E",
                "\u0116": "E",
                "\u0118": "E",
                "\u011a": "E",
                "\u0113": "e",
                "\u0115": "e",
                "\u0117": "e",
                "\u0119": "e",
                "\u011b": "e",
                "\u011c": "G",
                "\u011e": "G",
                "\u0120": "G",
                "\u0122": "G",
                "\u011d": "g",
                "\u011f": "g",
                "\u0121": "g",
                "\u0123": "g",
                "\u0124": "H",
                "\u0126": "H",
                "\u0125": "h",
                "\u0127": "h",
                "\u0128": "I",
                "\u012a": "I",
                "\u012c": "I",
                "\u012e": "I",
                "\u0130": "I",
                "\u0129": "i",
                "\u012b": "i",
                "\u012d": "i",
                "\u012f": "i",
                "\u0131": "i",
                "\u0134": "J",
                "\u0135": "j",
                "\u0136": "K",
                "\u0137": "k",
                "\u0138": "k",
                "\u0139": "L",
                "\u013b": "L",
                "\u013d": "L",
                "\u013f": "L",
                "\u0141": "L",
                "\u013a": "l",
                "\u013c": "l",
                "\u013e": "l",
                "\u0140": "l",
                "\u0142": "l",
                "\u0143": "N",
                "\u0145": "N",
                "\u0147": "N",
                "\u014a": "N",
                "\u0144": "n",
                "\u0146": "n",
                "\u0148": "n",
                "\u014b": "n",
                "\u014c": "O",
                "\u014e": "O",
                "\u0150": "O",
                "\u014d": "o",
                "\u014f": "o",
                "\u0151": "o",
                "\u0154": "R",
                "\u0156": "R",
                "\u0158": "R",
                "\u0155": "r",
                "\u0157": "r",
                "\u0159": "r",
                "\u015a": "S",
                "\u015c": "S",
                "\u015e": "S",
                "\u0160": "S",
                "\u015b": "s",
                "\u015d": "s",
                "\u015f": "s",
                "\u0161": "s",
                "\u0162": "T",
                "\u0164": "T",
                "\u0166": "T",
                "\u0163": "t",
                "\u0165": "t",
                "\u0167": "t",
                "\u0168": "U",
                "\u016a": "U",
                "\u016c": "U",
                "\u016e": "U",
                "\u0170": "U",
                "\u0172": "U",
                "\u0169": "u",
                "\u016b": "u",
                "\u016d": "u",
                "\u016f": "u",
                "\u0171": "u",
                "\u0173": "u",
                "\u0174": "W",
                "\u0175": "w",
                "\u0176": "Y",
                "\u0177": "y",
                "\u0178": "Y",
                "\u0179": "Z",
                "\u017b": "Z",
                "\u017d": "Z",
                "\u017a": "z",
                "\u017c": "z",
                "\u017e": "z",
                "\u0132": "IJ",
                "\u0133": "ij",
                "\u0152": "Oe",
                "\u0153": "oe",
                "\u0149": "'n",
                "\u017f": "s"
            }, m = /[\xc0-\xd6\xd8-\xf6\xf8-\xff\u0100-\u017f]/g,
            g = RegExp("[\\u0300-\\u036f\\ufe20-\\ufe2f\\u20d0-\\u20ff\\u1ab0-\\u1aff\\u1dc0-\\u1dff]", "g");

        function b(e) {
            return f[e]
        }

        function w(e) {
            return (e = e.toString()) && e.replace(m, b).replace(g, "")
        }

        var I, x, y, $, S = (I = {
            "&": "&amp;",
            "<": "&lt;",
            ">": "&gt;",
            '"': "&quot;",
            "'": "&#x27;",
            "`": "&#x60;"
        }, x = "(?:" + Object.keys(I).join("|") + ")", y = RegExp(x), $ = RegExp(x, "g"), function (e) {
            return e = null == e ? "" : "" + e, y.test(e) ? e.replace($, E) : e
        });

        function E(e) {
            return I[e]
        }

        var C = {
            32: " ",
            48: "0",
            49: "1",
            50: "2",
            51: "3",
            52: "4",
            53: "5",
            54: "6",
            55: "7",
            56: "8",
            57: "9",
            59: ";",
            65: "A",
            66: "B",
            67: "C",
            68: "D",
            69: "E",
            70: "F",
            71: "G",
            72: "H",
            73: "I",
            74: "J",
            75: "K",
            76: "L",
            77: "M",
            78: "N",
            79: "O",
            80: "P",
            81: "Q",
            82: "R",
            83: "S",
            84: "T",
            85: "U",
            86: "V",
            87: "W",
            88: "X",
            89: "Y",
            90: "Z",
            96: "0",
            97: "1",
            98: "2",
            99: "3",
            100: "4",
            101: "5",
            102: "6",
            103: "7",
            104: "8",
            105: "9"
        }, N = 27, D = 13, H = 32, W = 9, B = 38, M = 40, R = {success: !1, major: "3"};
        try {
            R.full = (z.fn.dropdown.Constructor.VERSION || "").split(" ")[0].split("."), R.major = R.full[0], R.success = !0
        } catch (e) {
        }
        var U = 0, j = ".bs.select", V = {
            DISABLED: "disabled",
            DIVIDER: "divider",
            SHOW: "open",
            DROPUP: "dropup",
            MENU: "dropdown-menu",
            MENURIGHT: "dropdown-menu-right",
            MENULEFT: "dropdown-menu-left",
            BUTTONCLASS: "btn-default",
            POPOVERHEADER: "popover-title",
            ICONBASE: "glyphicon",
            TICKICON: "glyphicon-ok"
        }, F = {MENU: "." + V.MENU}, _ = {
            span: document.createElement("span"),
            i: document.createElement("i"),
            subtext: document.createElement("small"),
            a: document.createElement("a"),
            li: document.createElement("li"),
            whitespace: document.createTextNode("\xa0"),
            fragment: document.createDocumentFragment()
        };
        _.a.setAttribute("role", "option"), "4" === R.major && (_.a.className = "dropdown-item"), _.subtext.className = "text-muted", _.text = _.span.cloneNode(!1), _.text.className = "text", _.checkMark = _.span.cloneNode(!1);
        var G = new RegExp(B + "|" + M), q = new RegExp("^" + W + "$|" + N), K = {
            li: function (e, t, i) {
                var s = _.li.cloneNode(!1);
                return e && (1 === e.nodeType || 11 === e.nodeType ? s.appendChild(e) : s.innerHTML = e), void 0 !== t && "" !== t && (s.className = t), null != i && s.classList.add("optgroup-" + i), s
            }, a: function (e, t, i) {
                var s = _.a.cloneNode(!0);
                return e && (11 === e.nodeType ? s.appendChild(e) : s.insertAdjacentHTML("beforeend", e)), void 0 !== t && "" !== t && s.classList.add.apply(s.classList, t.split(" ")), i && s.setAttribute("style", i), s
            }, text: function (e, t) {
                var i, s, n = _.text.cloneNode(!1);
                if (e.content) n.innerHTML = e.content; else {
                    if (n.textContent = e.text, e.icon) {
                        var o = _.whitespace.cloneNode(!1);
                        (s = (!0 === t ? _.i : _.span).cloneNode(!1)).className = this.options.iconBase + " " + e.icon, _.fragment.appendChild(s), _.fragment.appendChild(o)
                    }
                    e.subtext && ((i = _.subtext.cloneNode(!1)).textContent = e.subtext, n.appendChild(i))
                }
                if (!0 === t) for (; 0 < n.childNodes.length;) _.fragment.appendChild(n.childNodes[0]); else _.fragment.appendChild(n);
                return _.fragment
            }, label: function (e) {
                var t, i, s = _.text.cloneNode(!1);
                if (s.innerHTML = e.display, e.icon) {
                    var n = _.whitespace.cloneNode(!1);
                    (i = _.span.cloneNode(!1)).className = this.options.iconBase + " " + e.icon, _.fragment.appendChild(i), _.fragment.appendChild(n)
                }
                return e.subtext && ((t = _.subtext.cloneNode(!1)).textContent = e.subtext, s.appendChild(t)), _.fragment.appendChild(s), _.fragment
            }
        }, Y = function (e, t) {
            var i = this;
            p.useDefault || (z.valHooks.select.set = p._set, p.useDefault = !0), this.$element = z(e), this.$newElement = null, this.$button = null, this.$menu = null, this.options = t, this.selectpicker = {
                main: {},
                search: {},
                current: {},
                view: {},
                isSearching: !1,
                keydown: {
                    keyHistory: "", resetKeyHistory: {
                        start: function () {
                            return setTimeout(function () {
                                i.selectpicker.keydown.keyHistory = ""
                            }, 800)
                        }
                    }
                }
            }, this.sizeInfo = {}, null === this.options.title && (this.options.title = this.$element.attr("title"));
            var s = this.options.windowPadding;
            "number" == typeof s && (this.options.windowPadding = [s, s, s, s]), this.val = Y.prototype.val, this.render = Y.prototype.render, this.refresh = Y.prototype.refresh, this.setStyle = Y.prototype.setStyle, this.selectAll = Y.prototype.selectAll, this.deselectAll = Y.prototype.deselectAll, this.destroy = Y.prototype.destroy, this.remove = Y.prototype.remove, this.show = Y.prototype.show, this.hide = Y.prototype.hide, this.init()
        };

        function Z(e) {
            var l, a = arguments, c = e;
            if ([].shift.apply(a), !R.success) {
                try {
                    R.full = (z.fn.dropdown.Constructor.VERSION || "").split(" ")[0].split(".")
                } catch (e) {
                    Y.BootstrapVersion ? R.full = Y.BootstrapVersion.split(" ")[0].split(".") : (R.full = [R.major, "0", "0"], console.warn("There was an issue retrieving Bootstrap's version. Ensure Bootstrap is being loaded before bootstrap-select and there is no namespace collision. If loading Bootstrap asynchronously, the version may need to be manually specified via $.fn.selectpicker.Constructor.BootstrapVersion.", e))
                }
                R.major = R.full[0], R.success = !0
            }
            if ("4" === R.major) {
                var t = [];
                Y.DEFAULTS.style === V.BUTTONCLASS && t.push({
                    name: "style",
                    className: "BUTTONCLASS"
                }), Y.DEFAULTS.iconBase === V.ICONBASE && t.push({
                    name: "iconBase",
                    className: "ICONBASE"
                }), Y.DEFAULTS.tickIcon === V.TICKICON && t.push({
                    name: "tickIcon",
                    className: "TICKICON"
                }), V.DIVIDER = "dropdown-divider", V.SHOW = "show", V.BUTTONCLASS = "btn-light", V.POPOVERHEADER = "popover-header", V.ICONBASE = "", V.TICKICON = "bs-ok-default";
                for (var i = 0; i < t.length; i++) {
                    e = t[i];
                    Y.DEFAULTS[e.name] = V[e.className]
                }
            }
            var s = this.each(function () {
                var e = z(this);
                if (e.is("select")) {
                    var t = e.data("selectpicker"), i = "object" == typeof c && c;
                    if (t) {
                        if (i) for (var s in i) i.hasOwnProperty(s) && (t.options[s] = i[s])
                    } else {
                        var n = e.data();
                        for (var o in n) n.hasOwnProperty(o) && -1 !== z.inArray(o, d) && delete n[o];
                        var r = z.extend({}, Y.DEFAULTS, z.fn.selectpicker.defaults || {}, n, i);
                        r.template = z.extend({}, Y.DEFAULTS.template, z.fn.selectpicker.defaults ? z.fn.selectpicker.defaults.template : {}, n.template, i.template), e.data("selectpicker", t = new Y(this, r))
                    }
                    "string" == typeof c && (l = t[c] instanceof Function ? t[c].apply(t, a) : t.options[c])
                }
            });
            return void 0 !== l ? l : s
        }

        Y.VERSION = "1.13.14", Y.DEFAULTS = {
            noneSelectedText: "Nothing selected",
            noneResultsText: "No results matched {0}",
            countSelectedText: function (e, t) {
                return 1 == e ? "{0} item selected" : "{0} items selected"
            },
            maxOptionsText: function (e, t) {
                return [1 == e ? "Limit reached ({n} item max)" : "Limit reached ({n} items max)", 1 == t ? "Group limit reached ({n} item max)" : "Group limit reached ({n} items max)"]
            },
            selectAllText: "Select All",
            deselectAllText: "Deselect All",
            doneButton: !1,
            doneButtonText: "Close",
            multipleSeparator: ", ",
            styleBase: "btn",
            style: V.BUTTONCLASS,
            size: "auto",
            title: null,
            selectedTextFormat: "values",
            width: !1,
            container: !1,
            hideDisabled: !1,
            showSubtext: !1,
            showIcon: !0,
            showContent: !0,
            dropupAuto: !0,
            header: !1,
            liveSearch: !1,
            liveSearchPlaceholder: null,
            liveSearchNormalize: !1,
            liveSearchStyle: "contains",
            actionsBox: !1,
            iconBase: V.ICONBASE,
            tickIcon: V.TICKICON,
            showTick: !1,
            template: {caret: '<span class="caret"></span>'},
            maxOptions: !1,
            mobile: !1,
            selectOnTab: !1,
            dropdownAlignRight: !1,
            windowPadding: 0,
            virtualScroll: 600,
            display: !1,
            sanitize: !0,
            sanitizeFn: null,
            whiteList: e
        }, Y.prototype = {
            constructor: Y, init: function () {
                var i = this, e = this.$element.attr("id");
                U++, this.selectId = "bs-select-" + U, this.$element[0].classList.add("bs-select-hidden"), this.multiple = this.$element.prop("multiple"), this.autofocus = this.$element.prop("autofocus"), this.$element[0].classList.contains("show-tick") && (this.options.showTick = !0), this.$newElement = this.createDropdown(), this.buildData(), this.$element.after(this.$newElement).prependTo(this.$newElement), this.$button = this.$newElement.children("button"), this.$menu = this.$newElement.children(F.MENU), this.$menuInner = this.$menu.children(".inner"), this.$searchbox = this.$menu.find("input"), this.$element[0].classList.remove("bs-select-hidden"), !0 === this.options.dropdownAlignRight && this.$menu[0].classList.add(V.MENURIGHT), void 0 !== e && this.$button.attr("data-id", e), this.checkDisabled(), this.clickListener(), this.options.liveSearch ? (this.liveSearchListener(), this.focusedParent = this.$searchbox[0]) : this.focusedParent = this.$menuInner[0], this.setStyle(), this.render(), this.setWidth(), this.options.container ? this.selectPosition() : this.$element.on("hide" + j, function () {
                    if (i.isVirtual()) {
                        var e = i.$menuInner[0], t = e.firstChild.cloneNode(!1);
                        e.replaceChild(t, e.firstChild), e.scrollTop = 0
                    }
                }), this.$menu.data("this", this), this.$newElement.data("this", this), this.options.mobile && this.mobile(), this.$newElement.on({
                    "hide.bs.dropdown": function (e) {
                        i.$element.trigger("hide" + j, e)
                    }, "hidden.bs.dropdown": function (e) {
                        i.$element.trigger("hidden" + j, e)
                    }, "show.bs.dropdown": function (e) {
                        i.$element.trigger("show" + j, e)
                    }, "shown.bs.dropdown": function (e) {
                        i.$element.trigger("shown" + j, e)
                    }
                }), i.$element[0].hasAttribute("required") && this.$element.on("invalid" + j, function () {
                    i.$button[0].classList.add("bs-invalid"), i.$element.on("shown" + j + ".invalid", function () {
                        i.$element.val(i.$element.val()).off("shown" + j + ".invalid")
                    }).on("rendered" + j, function () {
                        this.validity.valid && i.$button[0].classList.remove("bs-invalid"), i.$element.off("rendered" + j)
                    }), i.$button.on("blur" + j, function () {
                        i.$element.trigger("focus").trigger("blur"), i.$button.off("blur" + j)
                    })
                }), setTimeout(function () {
                    i.buildList(), i.$element.trigger("loaded" + j)
                })
            }, createDropdown: function () {
                var e = this.multiple || this.options.showTick ? " show-tick" : "",
                    t = this.multiple ? ' aria-multiselectable="true"' : "", i = "",
                    s = this.autofocus ? " autofocus" : "";
                R.major < 4 && this.$element.parent().hasClass("input-group") && (i = " input-group-btn");
                var n, o = "", r = "", l = "", a = "";
                return this.options.header && (o = '<div class="' + V.POPOVERHEADER + '"><button type="button" class="close" aria-hidden="true">&times;</button>' + this.options.header + "</div>"), this.options.liveSearch && (r = '<div class="bs-searchbox"><input type="search" class="form-control" autocomplete="off"' + (null === this.options.liveSearchPlaceholder ? "" : ' placeholder="' + S(this.options.liveSearchPlaceholder) + '"') + ' role="combobox" aria-label="Search" aria-controls="' + this.selectId + '" aria-autocomplete="list"></div>'), this.multiple && this.options.actionsBox && (l = '<div class="bs-actionsbox"><div class="btn-group btn-group-sm btn-block"><button type="button" class="actions-btn bs-select-all btn ' + V.BUTTONCLASS + '">' + this.options.selectAllText + '</button><button type="button" class="actions-btn bs-deselect-all btn ' + V.BUTTONCLASS + '">' + this.options.deselectAllText + "</button></div></div>"), this.multiple && this.options.doneButton && (a = '<div class="bs-donebutton"><div class="btn-group btn-block"><button type="button" class="btn btn-sm ' + V.BUTTONCLASS + '">' + this.options.doneButtonText + "</button></div></div>"), n = '<div class="dropdown bootstrap-select' + e + i + '"><button type="button" class="' + this.options.styleBase + ' dropdown-toggle" ' + ("static" === this.options.display ? 'data-display="static"' : "") + 'data-toggle="dropdown"' + s + ' role="combobox" aria-owns="' + this.selectId + '" aria-haspopup="listbox" aria-expanded="false"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner"></div></div> </div>' + ("4" === R.major ? "" : '<span class="bs-caret">' + this.options.template.caret + "</span>") + '</button><div class="' + V.MENU + " " + ("4" === R.major ? "" : V.SHOW) + '">' + o + r + l + '<div class="inner ' + V.SHOW + '" role="listbox" id="' + this.selectId + '" tabindex="-1" ' + t + '><ul class="' + V.MENU + " inner " + ("4" === R.major ? V.SHOW : "") + '" role="presentation"></ul></div>' + a + "</div></div>", z(n)
            }, setPositionData: function () {
                this.selectpicker.view.canHighlight = [];
                for (var e = this.selectpicker.view.size = 0; e < this.selectpicker.current.data.length; e++) {
                    var t = this.selectpicker.current.data[e], i = !0;
                    "divider" === t.type ? (i = !1, t.height = this.sizeInfo.dividerHeight) : "optgroup-label" === t.type ? (i = !1, t.height = this.sizeInfo.dropdownHeaderHeight) : t.height = this.sizeInfo.liHeight, t.disabled && (i = !1), this.selectpicker.view.canHighlight.push(i), i && (this.selectpicker.view.size++, t.posinset = this.selectpicker.view.size), t.position = (0 === e ? 0 : this.selectpicker.current.data[e - 1].position) + t.height
                }
            }, isVirtual: function () {
                return !1 !== this.options.virtualScroll && this.selectpicker.main.elements.length >= this.options.virtualScroll || !0 === this.options.virtualScroll
            }, createView: function (A, e, t) {
                var L, N, D = this, i = 0, H = [];
                if (this.selectpicker.isSearching = A, this.selectpicker.current = A ? this.selectpicker.search : this.selectpicker.main, this.setPositionData(), e) if (t) i = this.$menuInner[0].scrollTop; else if (!D.multiple) {
                    var s = D.$element[0], n = (s.options[s.selectedIndex] || {}).liIndex;
                    if ("number" == typeof n && !1 !== D.options.size) {
                        var o = D.selectpicker.main.data[n], r = o && o.position;
                        r && (i = r - (D.sizeInfo.menuInnerHeight + D.sizeInfo.liHeight) / 2)
                    }
                }

                function l(e, t) {
                    var i, s, n, o, r, l, a, c, d = D.selectpicker.current.elements.length, h = [], p = !0,
                        u = D.isVirtual();
                    D.selectpicker.view.scrollTop = e, i = Math.ceil(D.sizeInfo.menuInnerHeight / D.sizeInfo.liHeight * 1.5), s = Math.round(d / i) || 1;
                    for (var f = 0; f < s; f++) {
                        var m = (f + 1) * i;
                        if (f === s - 1 && (m = d), h[f] = [f * i + (f ? 1 : 0), m], !d) break;
                        void 0 === r && e - 1 <= D.selectpicker.current.data[m - 1].position - D.sizeInfo.menuInnerHeight && (r = f)
                    }
                    if (void 0 === r && (r = 0), l = [D.selectpicker.view.position0, D.selectpicker.view.position1], n = Math.max(0, r - 1), o = Math.min(s - 1, r + 1), D.selectpicker.view.position0 = !1 === u ? 0 : Math.max(0, h[n][0]) || 0, D.selectpicker.view.position1 = !1 === u ? d : Math.min(d, h[o][1]) || 0, a = l[0] !== D.selectpicker.view.position0 || l[1] !== D.selectpicker.view.position1, void 0 !== D.activeIndex && (N = D.selectpicker.main.elements[D.prevActiveIndex], H = D.selectpicker.main.elements[D.activeIndex], L = D.selectpicker.main.elements[D.selectedIndex], t && (D.activeIndex !== D.selectedIndex && D.defocusItem(H), D.activeIndex = void 0), D.activeIndex && D.activeIndex !== D.selectedIndex && D.defocusItem(L)), void 0 !== D.prevActiveIndex && D.prevActiveIndex !== D.activeIndex && D.prevActiveIndex !== D.selectedIndex && D.defocusItem(N), (t || a) && (c = D.selectpicker.view.visibleElements ? D.selectpicker.view.visibleElements.slice() : [], D.selectpicker.view.visibleElements = !1 === u ? D.selectpicker.current.elements : D.selectpicker.current.elements.slice(D.selectpicker.view.position0, D.selectpicker.view.position1), D.setOptionStatus(), (A || !1 === u && t) && (p = !function (e, i) {
                        return e.length === i.length && e.every(function (e, t) {
                            return e === i[t]
                        })
                    }(c, D.selectpicker.view.visibleElements)), (t || !0 === u) && p)) {
                        var v, g, b = D.$menuInner[0], w = document.createDocumentFragment(),
                            I = b.firstChild.cloneNode(!1), x = D.selectpicker.view.visibleElements, k = [];
                        b.replaceChild(I, b.firstChild);
                        f = 0;
                        for (var y = x.length; f < y; f++) {
                            var $, S, E = x[f];
                            D.options.sanitize && ($ = E.lastChild) && (S = D.selectpicker.current.data[f + D.selectpicker.view.position0]) && S.content && !S.sanitized && (k.push($), S.sanitized = !0), w.appendChild(E)
                        }
                        if (D.options.sanitize && k.length && P(k, D.options.whiteList, D.options.sanitizeFn), !0 === u ? (v = 0 === D.selectpicker.view.position0 ? 0 : D.selectpicker.current.data[D.selectpicker.view.position0 - 1].position, g = D.selectpicker.view.position1 > d - 1 ? 0 : D.selectpicker.current.data[d - 1].position - D.selectpicker.current.data[D.selectpicker.view.position1 - 1].position, b.firstChild.style.marginTop = v + "px", b.firstChild.style.marginBottom = g + "px") : (b.firstChild.style.marginTop = 0, b.firstChild.style.marginBottom = 0), b.firstChild.appendChild(w), !0 === u && D.sizeInfo.hasScrollBar) {
                            var C = b.firstChild.offsetWidth;
                            if (t && C < D.sizeInfo.menuInnerInnerWidth && D.sizeInfo.totalMenuWidth > D.sizeInfo.selectWidth) b.firstChild.style.minWidth = D.sizeInfo.menuInnerInnerWidth + "px"; else if (C > D.sizeInfo.menuInnerInnerWidth) {
                                D.$menu[0].style.minWidth = 0;
                                var O = b.firstChild.offsetWidth;
                                O > D.sizeInfo.menuInnerInnerWidth && (D.sizeInfo.menuInnerInnerWidth = O, b.firstChild.style.minWidth = D.sizeInfo.menuInnerInnerWidth + "px"), D.$menu[0].style.minWidth = ""
                            }
                        }
                    }
                    if (D.prevActiveIndex = D.activeIndex, D.options.liveSearch) {
                        if (A && t) {
                            var z, T = 0;
                            D.selectpicker.view.canHighlight[T] || (T = 1 + D.selectpicker.view.canHighlight.slice(1).indexOf(!0)), z = D.selectpicker.view.visibleElements[T], D.defocusItem(D.selectpicker.view.currentActive), D.activeIndex = (D.selectpicker.current.data[T] || {}).index, D.focusItem(z)
                        }
                    } else D.$menuInner.trigger("focus")
                }

                l(i, !0), this.$menuInner.off("scroll.createView").on("scroll.createView", function (e, t) {
                    D.noScroll || l(this.scrollTop, t), D.noScroll = !1
                }), z(window).off("resize" + j + "." + this.selectId + ".createView").on("resize" + j + "." + this.selectId + ".createView", function () {
                    D.$newElement.hasClass(V.SHOW) && l(D.$menuInner[0].scrollTop)
                })
            }, focusItem: function (e, t, i) {
                if (e) {
                    t = t || this.selectpicker.main.data[this.activeIndex];
                    var s = e.firstChild;
                    s && (s.setAttribute("aria-setsize", this.selectpicker.view.size), s.setAttribute("aria-posinset", t.posinset), !0 !== i && (this.focusedParent.setAttribute("aria-activedescendant", s.id), e.classList.add("active"), s.classList.add("active")))
                }
            }, defocusItem: function (e) {
                e && (e.classList.remove("active"), e.firstChild && e.firstChild.classList.remove("active"))
            }, setPlaceholder: function () {
                var e = !1;
                if (this.options.title && !this.multiple) {
                    this.selectpicker.view.titleOption || (this.selectpicker.view.titleOption = document.createElement("option")), e = !0;
                    var t = this.$element[0], i = !1, s = !this.selectpicker.view.titleOption.parentNode;
                    if (s) this.selectpicker.view.titleOption.className = "bs-title-option", this.selectpicker.view.titleOption.value = "", i = void 0 === z(t.options[t.selectedIndex]).attr("selected") && void 0 === this.$element.data("selected");
                    !s && 0 === this.selectpicker.view.titleOption.index || t.insertBefore(this.selectpicker.view.titleOption, t.firstChild), i && (t.selectedIndex = 0)
                }
                return e
            }, buildData: function () {
                var p = ':not([hidden]):not([data-hidden="true"])', u = [], f = 0, e = this.setPlaceholder() ? 1 : 0;
                this.options.hideDisabled && (p += ":not(:disabled)");
                var t = this.$element[0].querySelectorAll("select > *" + p);

                function m(e) {
                    var t = u[u.length - 1];
                    t && "divider" === t.type && (t.optID || e.optID) || ((e = e || {}).type = "divider", u.push(e))
                }

                function v(e, t) {
                    if ((t = t || {}).divider = "true" === e.getAttribute("data-divider"), t.divider) m({optID: t.optID}); else {
                        var i = u.length, s = e.style.cssText, n = s ? S(s) : "",
                            o = (e.className || "") + (t.optgroupClass || "");
                        t.optID && (o = "opt " + o), t.optionClass = o.trim(), t.inlineStyle = n, t.text = e.textContent, t.content = e.getAttribute("data-content"), t.tokens = e.getAttribute("data-tokens"), t.subtext = e.getAttribute("data-subtext"), t.icon = e.getAttribute("data-icon"), e.liIndex = i, t.display = t.content || t.text, t.type = "option", t.index = i, t.option = e, t.selected = !!e.selected, t.disabled = t.disabled || !!e.disabled, u.push(t)
                    }
                }

                function i(e, t) {
                    var i = t[e], s = t[e - 1], n = t[e + 1], o = i.querySelectorAll("option" + p);
                    if (o.length) {
                        var r, l, a = {
                            display: S(i.label),
                            subtext: i.getAttribute("data-subtext"),
                            icon: i.getAttribute("data-icon"),
                            type: "optgroup-label",
                            optgroupClass: " " + (i.className || "")
                        };
                        f++, s && m({optID: f}), a.optID = f, u.push(a);
                        for (var c = 0, d = o.length; c < d; c++) {
                            var h = o[c];
                            0 === c && (l = (r = u.length - 1) + d), v(h, {
                                headerIndex: r,
                                lastIndex: l,
                                optID: a.optID,
                                optgroupClass: a.optgroupClass,
                                disabled: i.disabled
                            })
                        }
                        n && m({optID: f})
                    }
                }

                for (var s = t.length; e < s; e++) {
                    var n = t[e];
                    "OPTGROUP" !== n.tagName ? v(n, {}) : i(e, t)
                }
                this.selectpicker.main.data = this.selectpicker.current.data = u
            }, buildList: function () {
                var s = this, e = this.selectpicker.main.data, n = [], o = 0;

                function t(e) {
                    var t, i = 0;
                    switch (e.type) {
                        case"divider":
                            t = K.li(!1, V.DIVIDER, e.optID ? e.optID + "div" : void 0);
                            break;
                        case"option":
                            (t = K.li(K.a(K.text.call(s, e), e.optionClass, e.inlineStyle), "", e.optID)).firstChild && (t.firstChild.id = s.selectId + "-" + e.index);
                            break;
                        case"optgroup-label":
                            t = K.li(K.label.call(s, e), "dropdown-header" + e.optgroupClass, e.optID)
                    }
                    n.push(t), e.display && (i += e.display.length), e.subtext && (i += e.subtext.length), e.icon && (i += 1), o < i && (o = i, s.selectpicker.view.widestOption = n[n.length - 1])
                }

                !s.options.showTick && !s.multiple || _.checkMark.parentNode || (_.checkMark.className = this.options.iconBase + " " + s.options.tickIcon + " check-mark", _.a.appendChild(_.checkMark));
                for (var i = e.length, r = 0; r < i; r++) {
                    t(e[r])
                }
                this.selectpicker.main.elements = this.selectpicker.current.elements = n
            }, findLis: function () {
                return this.$menuInner.find(".inner > li")
            }, render: function () {
                var e, t = this, i = this.$element[0], s = this.setPlaceholder() && 0 === i.selectedIndex,
                    n = O(i, this.options.hideDisabled), o = n.length, r = this.$button[0],
                    l = r.querySelector(".filter-option-inner-inner"),
                    a = document.createTextNode(this.options.multipleSeparator), c = _.fragment.cloneNode(!1), d = !1;
                if (r.classList.toggle("bs-placeholder", t.multiple ? !o : !T(i, n)), this.tabIndex(), "static" === this.options.selectedTextFormat) c = K.text.call(this, {text: this.options.title}, !0); else if (!1 === (this.multiple && -1 !== this.options.selectedTextFormat.indexOf("count") && 1 < o && (1 < (e = this.options.selectedTextFormat.split(">")).length && o > e[1] || 1 === e.length && 2 <= o))) {
                    if (!s) {
                        for (var h = 0; h < o && h < 50; h++) {
                            var p = n[h], u = this.selectpicker.main.data[p.liIndex], f = {};
                            this.multiple && 0 < h && c.appendChild(a.cloneNode(!1)), p.title ? f.text = p.title : u && (u.content && t.options.showContent ? (f.content = u.content.toString(), d = !0) : (t.options.showIcon && (f.icon = u.icon), t.options.showSubtext && !t.multiple && u.subtext && (f.subtext = " " + u.subtext), f.text = p.textContent.trim())), c.appendChild(K.text.call(this, f, !0))
                        }
                        49 < o && c.appendChild(document.createTextNode("..."))
                    }
                } else {
                    var m = ':not([hidden]):not([data-hidden="true"]):not([data-divider="true"])';
                    this.options.hideDisabled && (m += ":not(:disabled)");
                    var v = this.$element[0].querySelectorAll("select > option" + m + ", optgroup" + m + " option" + m).length,
                        g = "function" == typeof this.options.countSelectedText ? this.options.countSelectedText(o, v) : this.options.countSelectedText;
                    c = K.text.call(this, {text: g.replace("{0}", o.toString()).replace("{1}", v.toString())}, !0)
                }
                if (null == this.options.title && (this.options.title = this.$element.attr("title")), c.childNodes.length || (c = K.text.call(this, {text: void 0 !== this.options.title ? this.options.title : this.options.noneSelectedText}, !0)), r.title = c.textContent.replace(/<[^>]*>?/g, "").trim(), this.options.sanitize && d && P([c], t.options.whiteList, t.options.sanitizeFn), l.innerHTML = "", l.appendChild(c), R.major < 4 && this.$newElement[0].classList.contains("bs3-has-addon")) {
                    var b = r.querySelector(".filter-expand"), w = l.cloneNode(!0);
                    w.className = "filter-expand", b ? r.replaceChild(w, b) : r.appendChild(w)
                }
                this.$element.trigger("rendered" + j)
            }, setStyle: function (e, t) {
                var i, s = this.$button[0], n = this.$newElement[0], o = this.options.style.trim();
                this.$element.attr("class") && this.$newElement.addClass(this.$element.attr("class").replace(/selectpicker|mobile-device|bs-select-hidden|validate\[.*\]/gi, "")), R.major < 4 && (n.classList.add("bs3"), n.parentNode.classList.contains("input-group") && (n.previousElementSibling || n.nextElementSibling) && (n.previousElementSibling || n.nextElementSibling).classList.contains("input-group-addon") && n.classList.add("bs3-has-addon")), i = e ? e.trim() : o, "add" == t ? i && s.classList.add.apply(s.classList, i.split(" ")) : "remove" == t ? i && s.classList.remove.apply(s.classList, i.split(" ")) : (o && s.classList.remove.apply(s.classList, o.split(" ")), i && s.classList.add.apply(s.classList, i.split(" ")))
            }, liHeight: function (e) {
                if (e || !1 !== this.options.size && !Object.keys(this.sizeInfo).length) {
                    var t = document.createElement("div"), i = document.createElement("div"),
                        s = document.createElement("div"), n = document.createElement("ul"),
                        o = document.createElement("li"), r = document.createElement("li"),
                        l = document.createElement("li"), a = document.createElement("a"),
                        c = document.createElement("span"),
                        d = this.options.header && 0 < this.$menu.find("." + V.POPOVERHEADER).length ? this.$menu.find("." + V.POPOVERHEADER)[0].cloneNode(!0) : null,
                        h = this.options.liveSearch ? document.createElement("div") : null,
                        p = this.options.actionsBox && this.multiple && 0 < this.$menu.find(".bs-actionsbox").length ? this.$menu.find(".bs-actionsbox")[0].cloneNode(!0) : null,
                        u = this.options.doneButton && this.multiple && 0 < this.$menu.find(".bs-donebutton").length ? this.$menu.find(".bs-donebutton")[0].cloneNode(!0) : null,
                        f = this.$element.find("option")[0];
                    if (this.sizeInfo.selectWidth = this.$newElement[0].offsetWidth, c.className = "text", a.className = "dropdown-item " + (f ? f.className : ""), t.className = this.$menu[0].parentNode.className + " " + V.SHOW, t.style.width = 0, "auto" === this.options.width && (i.style.minWidth = 0), i.className = V.MENU + " " + V.SHOW, s.className = "inner " + V.SHOW, n.className = V.MENU + " inner " + ("4" === R.major ? V.SHOW : ""), o.className = V.DIVIDER, r.className = "dropdown-header", c.appendChild(document.createTextNode("\u200b")), a.appendChild(c), l.appendChild(a), r.appendChild(c.cloneNode(!0)), this.selectpicker.view.widestOption && n.appendChild(this.selectpicker.view.widestOption.cloneNode(!0)), n.appendChild(l), n.appendChild(o), n.appendChild(r), d && i.appendChild(d), h) {
                        var m = document.createElement("input");
                        h.className = "bs-searchbox", m.className = "form-control", h.appendChild(m), i.appendChild(h)
                    }
                    p && i.appendChild(p), s.appendChild(n), i.appendChild(s), u && i.appendChild(u), t.appendChild(i), document.body.appendChild(t);
                    var v, g = l.offsetHeight, b = r ? r.offsetHeight : 0, w = d ? d.offsetHeight : 0,
                        I = h ? h.offsetHeight : 0, x = p ? p.offsetHeight : 0, k = u ? u.offsetHeight : 0,
                        y = z(o).outerHeight(!0), $ = !!window.getComputedStyle && window.getComputedStyle(i),
                        S = i.offsetWidth, E = $ ? null : z(i), C = {
                            vert: L($ ? $.paddingTop : E.css("paddingTop")) + L($ ? $.paddingBottom : E.css("paddingBottom")) + L($ ? $.borderTopWidth : E.css("borderTopWidth")) + L($ ? $.borderBottomWidth : E.css("borderBottomWidth")),
                            horiz: L($ ? $.paddingLeft : E.css("paddingLeft")) + L($ ? $.paddingRight : E.css("paddingRight")) + L($ ? $.borderLeftWidth : E.css("borderLeftWidth")) + L($ ? $.borderRightWidth : E.css("borderRightWidth"))
                        }, O = {
                            vert: C.vert + L($ ? $.marginTop : E.css("marginTop")) + L($ ? $.marginBottom : E.css("marginBottom")) + 2,
                            horiz: C.horiz + L($ ? $.marginLeft : E.css("marginLeft")) + L($ ? $.marginRight : E.css("marginRight")) + 2
                        };
                    s.style.overflowY = "scroll", v = i.offsetWidth - S, document.body.removeChild(t), this.sizeInfo.liHeight = g, this.sizeInfo.dropdownHeaderHeight = b, this.sizeInfo.headerHeight = w, this.sizeInfo.searchHeight = I, this.sizeInfo.actionsHeight = x, this.sizeInfo.doneButtonHeight = k, this.sizeInfo.dividerHeight = y, this.sizeInfo.menuPadding = C, this.sizeInfo.menuExtras = O, this.sizeInfo.menuWidth = S, this.sizeInfo.menuInnerInnerWidth = S - C.horiz, this.sizeInfo.totalMenuWidth = this.sizeInfo.menuWidth, this.sizeInfo.scrollBarWidth = v, this.sizeInfo.selectHeight = this.$newElement[0].offsetHeight, this.setPositionData()
                }
            }, getSelectPosition: function () {
                var e, t = z(window), i = this.$newElement.offset(), s = z(this.options.container);
                this.options.container && s.length && !s.is("body") ? ((e = s.offset()).top += parseInt(s.css("borderTopWidth")), e.left += parseInt(s.css("borderLeftWidth"))) : e = {
                    top: 0,
                    left: 0
                };
                var n = this.options.windowPadding;
                this.sizeInfo.selectOffsetTop = i.top - e.top - t.scrollTop(), this.sizeInfo.selectOffsetBot = t.height() - this.sizeInfo.selectOffsetTop - this.sizeInfo.selectHeight - e.top - n[2], this.sizeInfo.selectOffsetLeft = i.left - e.left - t.scrollLeft(), this.sizeInfo.selectOffsetRight = t.width() - this.sizeInfo.selectOffsetLeft - this.sizeInfo.selectWidth - e.left - n[1], this.sizeInfo.selectOffsetTop -= n[0], this.sizeInfo.selectOffsetLeft -= n[3]
            }, setMenuSize: function (e) {
                this.getSelectPosition();
                var t, i, s, n, o, r, l, a, c = this.sizeInfo.selectWidth, d = this.sizeInfo.liHeight,
                    h = this.sizeInfo.headerHeight, p = this.sizeInfo.searchHeight, u = this.sizeInfo.actionsHeight,
                    f = this.sizeInfo.doneButtonHeight, m = this.sizeInfo.dividerHeight, v = this.sizeInfo.menuPadding,
                    g = 0;
                if (this.options.dropupAuto && (l = d * this.selectpicker.current.elements.length + v.vert, a = this.sizeInfo.selectOffsetTop - this.sizeInfo.selectOffsetBot > this.sizeInfo.menuExtras.vert && l + this.sizeInfo.menuExtras.vert + 50 > this.sizeInfo.selectOffsetBot, !0 === this.selectpicker.isSearching && (a = this.selectpicker.dropup), this.$newElement.toggleClass(V.DROPUP, a), this.selectpicker.dropup = a), "auto" === this.options.size) n = 3 < this.selectpicker.current.elements.length ? 3 * this.sizeInfo.liHeight + this.sizeInfo.menuExtras.vert - 2 : 0, i = this.sizeInfo.selectOffsetBot - this.sizeInfo.menuExtras.vert, s = n + h + p + u + f, r = Math.max(n - v.vert, 0), this.$newElement.hasClass(V.DROPUP) && (i = this.sizeInfo.selectOffsetTop - this.sizeInfo.menuExtras.vert), t = (o = i) - h - p - u - f - v.vert; else if (this.options.size && "auto" != this.options.size && this.selectpicker.current.elements.length > this.options.size) {
                    for (var b = 0; b < this.options.size; b++) "divider" === this.selectpicker.current.data[b].type && g++;
                    t = (i = d * this.options.size + g * m + v.vert) - v.vert, o = i + h + p + u + f, s = r = ""
                }
                this.$menu.css({
                    "max-height": o + "px",
                    overflow: "hidden",
                    "min-height": s + "px"
                }), this.$menuInner.css({
                    "max-height": t + "px",
                    "overflow-y": "auto",
                    "min-height": r + "px"
                }), this.sizeInfo.menuInnerHeight = Math.max(t, 1), this.selectpicker.current.data.length && this.selectpicker.current.data[this.selectpicker.current.data.length - 1].position > this.sizeInfo.menuInnerHeight && (this.sizeInfo.hasScrollBar = !0, this.sizeInfo.totalMenuWidth = this.sizeInfo.menuWidth + this.sizeInfo.scrollBarWidth), "auto" === this.options.dropdownAlignRight && this.$menu.toggleClass(V.MENURIGHT, this.sizeInfo.selectOffsetLeft > this.sizeInfo.selectOffsetRight && this.sizeInfo.selectOffsetRight < this.sizeInfo.totalMenuWidth - c), this.dropdown && this.dropdown._popper && this.dropdown._popper.update()
            }, setSize: function (e) {
                if (this.liHeight(e), this.options.header && this.$menu.css("padding-top", 0), !1 !== this.options.size) {
                    var t = this, i = z(window);
                    this.setMenuSize(), this.options.liveSearch && this.$searchbox.off("input.setMenuSize propertychange.setMenuSize").on("input.setMenuSize propertychange.setMenuSize", function () {
                        return t.setMenuSize()
                    }), "auto" === this.options.size ? i.off("resize" + j + "." + this.selectId + ".setMenuSize scroll" + j + "." + this.selectId + ".setMenuSize").on("resize" + j + "." + this.selectId + ".setMenuSize scroll" + j + "." + this.selectId + ".setMenuSize", function () {
                        return t.setMenuSize()
                    }) : this.options.size && "auto" != this.options.size && this.selectpicker.current.elements.length > this.options.size && i.off("resize" + j + "." + this.selectId + ".setMenuSize scroll" + j + "." + this.selectId + ".setMenuSize")
                }
                this.createView(!1, !0, e)
            }, setWidth: function () {
                var i = this;
                "auto" === this.options.width ? requestAnimationFrame(function () {
                    i.$menu.css("min-width", "0"), i.$element.on("loaded" + j, function () {
                        i.liHeight(), i.setMenuSize();
                        var e = i.$newElement.clone().appendTo("body"),
                            t = e.css("width", "auto").children("button").outerWidth();
                        e.remove(), i.sizeInfo.selectWidth = Math.max(i.sizeInfo.totalMenuWidth, t), i.$newElement.css("width", i.sizeInfo.selectWidth + "px")
                    })
                }) : "fit" === this.options.width ? (this.$menu.css("min-width", ""), this.$newElement.css("width", "").addClass("fit-width")) : this.options.width ? (this.$menu.css("min-width", ""), this.$newElement.css("width", this.options.width)) : (this.$menu.css("min-width", ""), this.$newElement.css("width", "")), this.$newElement.hasClass("fit-width") && "fit" !== this.options.width && this.$newElement[0].classList.remove("fit-width")
            }, selectPosition: function () {
                this.$bsContainer = z('<div class="bs-container" />');

                function e(e) {
                    var t = {},
                        i = r.options.display || !!z.fn.dropdown.Constructor.Default && z.fn.dropdown.Constructor.Default.display;
                    r.$bsContainer.addClass(e.attr("class").replace(/form-control|fit-width/gi, "")).toggleClass(V.DROPUP, e.hasClass(V.DROPUP)), s = e.offset(), l.is("body") ? n = {
                        top: 0,
                        left: 0
                    } : ((n = l.offset()).top += parseInt(l.css("borderTopWidth")) - l.scrollTop(), n.left += parseInt(l.css("borderLeftWidth")) - l.scrollLeft()), o = e.hasClass(V.DROPUP) ? 0 : e[0].offsetHeight, (R.major < 4 || "static" === i) && (t.top = s.top - n.top + o, t.left = s.left - n.left), t.width = e[0].offsetWidth, r.$bsContainer.css(t)
                }

                var s, n, o, r = this, l = z(this.options.container);
                this.$button.on("click.bs.dropdown.data-api", function () {
                    r.isDisabled() || (e(r.$newElement), r.$bsContainer.appendTo(r.options.container).toggleClass(V.SHOW, !r.$button.hasClass(V.SHOW)).append(r.$menu))
                }), z(window).off("resize" + j + "." + this.selectId + " scroll" + j + "." + this.selectId).on("resize" + j + "." + this.selectId + " scroll" + j + "." + this.selectId, function () {
                    r.$newElement.hasClass(V.SHOW) && e(r.$newElement)
                }), this.$element.on("hide" + j, function () {
                    r.$menu.data("height", r.$menu.height()), r.$bsContainer.detach()
                })
            }, setOptionStatus: function (e) {
                var t = this;
                if (t.noScroll = !1, t.selectpicker.view.visibleElements && t.selectpicker.view.visibleElements.length) for (var i = 0; i < t.selectpicker.view.visibleElements.length; i++) {
                    var s = t.selectpicker.current.data[i + t.selectpicker.view.position0], n = s.option;
                    n && (!0 !== e && t.setDisabled(s.index, s.disabled), t.setSelected(s.index, n.selected))
                }
            }, setSelected: function (e, t) {
                var i, s, n = this.selectpicker.main.elements[e], o = this.selectpicker.main.data[e],
                    r = void 0 !== this.activeIndex, l = this.activeIndex === e || t && !this.multiple && !r;
                o.selected = t, s = n.firstChild, t && (this.selectedIndex = e), n.classList.toggle("selected", t), l ? (this.focusItem(n, o), this.selectpicker.view.currentActive = n, this.activeIndex = e) : this.defocusItem(n), s && (s.classList.toggle("selected", t), t ? s.setAttribute("aria-selected", !0) : this.multiple ? s.setAttribute("aria-selected", !1) : s.removeAttribute("aria-selected")), l || r || !t || void 0 === this.prevActiveIndex || (i = this.selectpicker.main.elements[this.prevActiveIndex], this.defocusItem(i))
            }, setDisabled: function (e, t) {
                var i, s = this.selectpicker.main.elements[e];
                this.selectpicker.main.data[e].disabled = t, i = s.firstChild, s.classList.toggle(V.DISABLED, t), i && ("4" === R.major && i.classList.toggle(V.DISABLED, t), t ? (i.setAttribute("aria-disabled", t), i.setAttribute("tabindex", -1)) : (i.removeAttribute("aria-disabled"), i.setAttribute("tabindex", 0)))
            }, isDisabled: function () {
                return this.$element[0].disabled
            }, checkDisabled: function () {
                this.isDisabled() ? (this.$newElement[0].classList.add(V.DISABLED), this.$button.addClass(V.DISABLED).attr("tabindex", -1).attr("aria-disabled", !0)) : (this.$button[0].classList.contains(V.DISABLED) && (this.$newElement[0].classList.remove(V.DISABLED), this.$button.removeClass(V.DISABLED).attr("aria-disabled", !1)), -1 != this.$button.attr("tabindex") || this.$element.data("tabindex") || this.$button.removeAttr("tabindex"))
            }, tabIndex: function () {
                this.$element.data("tabindex") !== this.$element.attr("tabindex") && -98 !== this.$element.attr("tabindex") && "-98" !== this.$element.attr("tabindex") && (this.$element.data("tabindex", this.$element.attr("tabindex")), this.$button.attr("tabindex", this.$element.data("tabindex"))), this.$element.attr("tabindex", -98)
            }, clickListener: function () {
                var C = this, t = z(document);

                function e() {
                    C.options.liveSearch ? C.$searchbox.trigger("focus") : C.$menuInner.trigger("focus")
                }

                function i() {
                    C.dropdown && C.dropdown._popper && C.dropdown._popper.state.isCreated ? e() : requestAnimationFrame(i)
                }

                t.data("spaceSelect", !1), this.$button.on("keyup", function (e) {
                    /(32)/.test(e.keyCode.toString(10)) && t.data("spaceSelect") && (e.preventDefault(), t.data("spaceSelect", !1))
                }), this.$newElement.on("show.bs.dropdown", function () {
                    3 < R.major && !C.dropdown && (C.dropdown = C.$button.data("bs.dropdown"), C.dropdown._menu = C.$menu[0])
                }), this.$button.on("click.bs.dropdown.data-api", function () {
                    C.$newElement.hasClass(V.SHOW) || C.setSize()
                }), this.$element.on("shown" + j, function () {
                    C.$menuInner[0].scrollTop !== C.selectpicker.view.scrollTop && (C.$menuInner[0].scrollTop = C.selectpicker.view.scrollTop), 3 < R.major ? requestAnimationFrame(i) : e()
                }), this.$menuInner.on("mouseenter", "li a", function (e) {
                    var t = this.parentElement, i = C.isVirtual() ? C.selectpicker.view.position0 : 0,
                        s = Array.prototype.indexOf.call(t.parentElement.children, t),
                        n = C.selectpicker.current.data[s + i];
                    C.focusItem(t, n, !0)
                }), this.$menuInner.on("click", "li a", function (e, t) {
                    var i = z(this), s = C.$element[0], n = C.isVirtual() ? C.selectpicker.view.position0 : 0,
                        o = C.selectpicker.current.data[i.parent().index() + n], r = o.index, l = T(s),
                        a = s.selectedIndex, c = s.options[a], d = !0;
                    if (C.multiple && 1 !== C.options.maxOptions && e.stopPropagation(), e.preventDefault(), !C.isDisabled() && !i.parent().hasClass(V.DISABLED)) {
                        var h = o.option, p = z(h), u = h.selected, f = p.parent("optgroup"), m = f.find("option"),
                            v = C.options.maxOptions, g = f.data("maxOptions") || !1;
                        if (r === C.activeIndex && (t = !0), t || (C.prevActiveIndex = C.activeIndex, C.activeIndex = void 0), C.multiple) {
                            if (h.selected = !u, C.setSelected(r, !u), i.trigger("blur"), !1 !== v || !1 !== g) {
                                var b = v < O(s).length, w = g < f.find("option:selected").length;
                                if (v && b || g && w) if (v && 1 == v) s.selectedIndex = -1, h.selected = !0, C.setOptionStatus(!0); else if (g && 1 == g) {
                                    for (var I = 0; I < m.length; I++) {
                                        var x = m[I];
                                        x.selected = !1, C.setSelected(x.liIndex, !1)
                                    }
                                    h.selected = !0, C.setSelected(r, !0)
                                } else {
                                    var k = "string" == typeof C.options.maxOptionsText ? [C.options.maxOptionsText, C.options.maxOptionsText] : C.options.maxOptionsText,
                                        y = "function" == typeof k ? k(v, g) : k, $ = y[0].replace("{n}", v),
                                        S = y[1].replace("{n}", g), E = z('<div class="notify"></div>');
                                    y[2] && ($ = $.replace("{var}", y[2][1 < v ? 0 : 1]), S = S.replace("{var}", y[2][1 < g ? 0 : 1])), h.selected = !1, C.$menu.append(E), v && b && (E.append(z("<div>" + $ + "</div>")), d = !1, C.$element.trigger("maxReached" + j)), g && w && (E.append(z("<div>" + S + "</div>")), d = !1, C.$element.trigger("maxReachedGrp" + j)), setTimeout(function () {
                                        C.setSelected(r, !1)
                                    }, 10), E[0].classList.add("fadeOut"), setTimeout(function () {
                                        E.remove()
                                    }, 1050)
                                }
                            }
                        } else c && (c.selected = !1), h.selected = !0, C.setSelected(r, !0);
                        !C.multiple || C.multiple && 1 === C.options.maxOptions ? C.$button.trigger("focus") : C.options.liveSearch && C.$searchbox.trigger("focus"), d && (!C.multiple && a === s.selectedIndex || (A = [h.index, p.prop("selected"), l], C.$element.triggerNative("change")))
                    }
                }), this.$menu.on("click", "li." + V.DISABLED + " a, ." + V.POPOVERHEADER + ", ." + V.POPOVERHEADER + " :not(.close)", function (e) {
                    e.currentTarget == this && (e.preventDefault(), e.stopPropagation(), C.options.liveSearch && !z(e.target).hasClass("close") ? C.$searchbox.trigger("focus") : C.$button.trigger("focus"))
                }), this.$menuInner.on("click", ".divider, .dropdown-header", function (e) {
                    e.preventDefault(), e.stopPropagation(), C.options.liveSearch ? C.$searchbox.trigger("focus") : C.$button.trigger("focus")
                }), this.$menu.on("click", "." + V.POPOVERHEADER + " .close", function () {
                    C.$button.trigger("click")
                }), this.$searchbox.on("click", function (e) {
                    e.stopPropagation()
                }), this.$menu.on("click", ".actions-btn", function (e) {
                    C.options.liveSearch ? C.$searchbox.trigger("focus") : C.$button.trigger("focus"), e.preventDefault(), e.stopPropagation(), z(this).hasClass("bs-select-all") ? C.selectAll() : C.deselectAll()
                }), this.$element.on("change" + j, function () {
                    C.render(), C.$element.trigger("changed" + j, A), A = null
                }).on("focus" + j, function () {
                    C.options.mobile || C.$button.trigger("focus")
                })
            }, liveSearchListener: function () {
                var u = this, f = document.createElement("li");
                this.$button.on("click.bs.dropdown.data-api", function () {
                    u.$searchbox.val() && u.$searchbox.val("")
                }), this.$searchbox.on("click.bs.dropdown.data-api focus.bs.dropdown.data-api touchend.bs.dropdown.data-api", function (e) {
                    e.stopPropagation()
                }), this.$searchbox.on("input propertychange", function () {
                    var e = u.$searchbox.val();
                    if (u.selectpicker.search.elements = [], u.selectpicker.search.data = [], e) {
                        var t = [], i = e.toUpperCase(), s = {}, n = [], o = u._searchStyle(),
                            r = u.options.liveSearchNormalize;
                        r && (i = w(i));
                        for (var l = 0; l < u.selectpicker.main.data.length; l++) {
                            var a = u.selectpicker.main.data[l];
                            s[l] || (s[l] = k(a, i, o, r)), s[l] && void 0 !== a.headerIndex && -1 === n.indexOf(a.headerIndex) && (0 < a.headerIndex && (s[a.headerIndex - 1] = !0, n.push(a.headerIndex - 1)), s[a.headerIndex] = !0, n.push(a.headerIndex), s[a.lastIndex + 1] = !0), s[l] && "optgroup-label" !== a.type && n.push(l)
                        }
                        l = 0;
                        for (var c = n.length; l < c; l++) {
                            var d = n[l], h = n[l - 1],
                                p = (a = u.selectpicker.main.data[d], u.selectpicker.main.data[h]);
                            ("divider" !== a.type || "divider" === a.type && p && "divider" !== p.type && c - 1 !== l) && (u.selectpicker.search.data.push(a), t.push(u.selectpicker.main.elements[d]))
                        }
                        u.activeIndex = void 0, u.noScroll = !0, u.$menuInner.scrollTop(0), u.selectpicker.search.elements = t, u.createView(!0), t.length || (f.className = "no-results", f.innerHTML = u.options.noneResultsText.replace("{0}", '"' + S(e) + '"'), u.$menuInner[0].firstChild.appendChild(f))
                    } else u.$menuInner.scrollTop(0), u.createView(!1)
                })
            }, _searchStyle: function () {
                return this.options.liveSearchStyle || "contains"
            }, val: function (e) {
                var t = this.$element[0];
                if (void 0 === e) return this.$element.val();
                var i = T(t);
                if (A = [null, null, i], this.$element.val(e).trigger("changed" + j, A), this.$newElement.hasClass(V.SHOW)) if (this.multiple) this.setOptionStatus(!0); else {
                    var s = (t.options[t.selectedIndex] || {}).liIndex;
                    "number" == typeof s && (this.setSelected(this.selectedIndex, !1), this.setSelected(s, !0))
                }
                return this.render(), A = null, this.$element
            }, changeAll: function (e) {
                if (this.multiple) {
                    void 0 === e && (e = !0);
                    var t = this.$element[0], i = 0, s = 0, n = T(t);
                    t.classList.add("bs-select-hidden");
                    for (var o = 0, r = this.selectpicker.current.data, l = r.length; o < l; o++) {
                        var a = r[o], c = a.option;
                        c && !a.disabled && "divider" !== a.type && (a.selected && i++, !0 === (c.selected = e) && s++)
                    }
                    t.classList.remove("bs-select-hidden"), i !== s && (this.setOptionStatus(), A = [null, null, n], this.$element.triggerNative("change"))
                }
            }, selectAll: function () {
                return this.changeAll(!0)
            }, deselectAll: function () {
                return this.changeAll(!1)
            }, toggle: function (e) {
                (e = e || window.event) && e.stopPropagation(), this.$button.trigger("click.bs.dropdown.data-api")
            }, keydown: function (e) {
                var t, i, s, n, o, r = z(this), l = r.hasClass("dropdown-toggle"),
                    a = (l ? r.closest(".dropdown") : r.closest(F.MENU)).data("this"), c = a.findLis(), d = !1,
                    h = e.which === W && !l && !a.options.selectOnTab, p = G.test(e.which) || h,
                    u = a.$menuInner[0].scrollTop, f = !0 === a.isVirtual() ? a.selectpicker.view.position0 : 0;
                if (!(112 <= e.which && e.which <= 123)) if (!(i = a.$newElement.hasClass(V.SHOW)) && (p || 48 <= e.which && e.which <= 57 || 96 <= e.which && e.which <= 105 || 65 <= e.which && e.which <= 90) && (a.$button.trigger("click.bs.dropdown.data-api"), a.options.liveSearch)) a.$searchbox.trigger("focus"); else {
                    if (e.which === N && i && (e.preventDefault(), a.$button.trigger("click.bs.dropdown.data-api").trigger("focus")), p) {
                        if (!c.length) return;
                        -1 !== (t = (s = a.selectpicker.main.elements[a.activeIndex]) ? Array.prototype.indexOf.call(s.parentElement.children, s) : -1) && a.defocusItem(s), e.which === B ? (-1 !== t && t--, t + f < 0 && (t += c.length), a.selectpicker.view.canHighlight[t + f] || -1 === (t = a.selectpicker.view.canHighlight.slice(0, t + f).lastIndexOf(!0) - f) && (t = c.length - 1)) : e.which !== M && !h || (++t + f >= a.selectpicker.view.canHighlight.length && (t = 0), a.selectpicker.view.canHighlight[t + f] || (t = t + 1 + a.selectpicker.view.canHighlight.slice(t + f + 1).indexOf(!0))), e.preventDefault();
                        var m = f + t;
                        e.which === B ? 0 === f && t === c.length - 1 ? (a.$menuInner[0].scrollTop = a.$menuInner[0].scrollHeight, m = a.selectpicker.current.elements.length - 1) : d = (o = (n = a.selectpicker.current.data[m]).position - n.height) < u : e.which !== M && !h || (0 === t ? m = a.$menuInner[0].scrollTop = 0 : d = u < (o = (n = a.selectpicker.current.data[m]).position - a.sizeInfo.menuInnerHeight)), s = a.selectpicker.current.elements[m], a.activeIndex = a.selectpicker.current.data[m].index, a.focusItem(s), a.selectpicker.view.currentActive = s, d && (a.$menuInner[0].scrollTop = o), a.options.liveSearch ? a.$searchbox.trigger("focus") : r.trigger("focus")
                    } else if (!r.is("input") && !q.test(e.which) || e.which === H && a.selectpicker.keydown.keyHistory) {
                        var v, g, b = [];
                        e.preventDefault(), a.selectpicker.keydown.keyHistory += C[e.which], a.selectpicker.keydown.resetKeyHistory.cancel && clearTimeout(a.selectpicker.keydown.resetKeyHistory.cancel), a.selectpicker.keydown.resetKeyHistory.cancel = a.selectpicker.keydown.resetKeyHistory.start(), g = a.selectpicker.keydown.keyHistory, /^(.)\1+$/.test(g) && (g = g.charAt(0));
                        for (var w = 0; w < a.selectpicker.current.data.length; w++) {
                            var I = a.selectpicker.current.data[w];
                            k(I, g, "startsWith", !0) && a.selectpicker.view.canHighlight[w] && b.push(I.index)
                        }
                        if (b.length) {
                            var x = 0;
                            c.removeClass("active").find("a").removeClass("active"), 1 === g.length && (-1 === (x = b.indexOf(a.activeIndex)) || x === b.length - 1 ? x = 0 : x++), v = b[x], d = 0 < u - (n = a.selectpicker.main.data[v]).position ? (o = n.position - n.height, !0) : (o = n.position - a.sizeInfo.menuInnerHeight, n.position > u + a.sizeInfo.menuInnerHeight), s = a.selectpicker.main.elements[v], a.activeIndex = b[x], a.focusItem(s), s && s.firstChild.focus(), d && (a.$menuInner[0].scrollTop = o), r.trigger("focus")
                        }
                    }
                    i && (e.which === H && !a.selectpicker.keydown.keyHistory || e.which === D || e.which === W && a.options.selectOnTab) && (e.which !== H && e.preventDefault(), a.options.liveSearch && e.which === H || (a.$menuInner.find(".active a").trigger("click", !0), r.trigger("focus"), a.options.liveSearch || (e.preventDefault(), z(document).data("spaceSelect", !0))))
                }
            }, mobile: function () {
                this.$element[0].classList.add("mobile-device")
            }, refresh: function () {
                var e = z.extend({}, this.options, this.$element.data());
                this.options = e, this.checkDisabled(), this.setStyle(), this.render(), this.buildData(), this.buildList(), this.setWidth(), this.setSize(!0), this.$element.trigger("refreshed" + j)
            }, hide: function () {
                this.$newElement.hide()
            }, show: function () {
                this.$newElement.show()
            }, remove: function () {
                this.$newElement.remove(), this.$element.remove()
            }, destroy: function () {
                this.$newElement.before(this.$element).remove(), this.$bsContainer ? this.$bsContainer.remove() : this.$menu.remove(), this.$element.off(j).removeData("selectpicker").removeClass("bs-select-hidden selectpicker"), z(window).off(j + "." + this.selectId)
            }
        };
        var J = z.fn.selectpicker;
        z.fn.selectpicker = Z, z.fn.selectpicker.Constructor = Y, z.fn.selectpicker.noConflict = function () {
            return z.fn.selectpicker = J, this
        };
        var Q = z.fn.dropdown.Constructor._dataApiKeydownHandler || z.fn.dropdown.Constructor.prototype.keydown;
        z(document).off("keydown.bs.dropdown.data-api").on("keydown.bs.dropdown.data-api", ':not(.bootstrap-select) > [data-toggle="dropdown"]', Q).on("keydown.bs.dropdown.data-api", ":not(.bootstrap-select) > .dropdown-menu", Q).on("keydown" + j, '.bootstrap-select [data-toggle="dropdown"], .bootstrap-select [role="listbox"], .bootstrap-select .bs-searchbox input', Y.prototype.keydown).on("focusin.modal", '.bootstrap-select [data-toggle="dropdown"], .bootstrap-select [role="listbox"], .bootstrap-select .bs-searchbox input', function (e) {
            e.stopPropagation()
        }), z(window).on("load" + j + ".data-api", function () {
            z(".selectpicker").each(function () {
                var e = z(this);
                Z.call(e, e.data())
            })
        })
    }(e)
});
/*! jQuery Validation Plugin - v1.19.3 - 1/9/2021
 * https://jqueryvalidation.org/
 * Copyright (c) 2021 J????rn Zaefferer; Licensed MIT */
!function (a) {
    "function" == typeof define && define.amd ? define(["jquery"], a) : "object" == typeof module && module.exports ? module.exports = a(require("jquery")) : a(jQuery)
}(function (a) {
    a.extend(a.fn, {
        validate: function (b) {
            if (!this.length) return void (b && b.debug && window.console && console.warn("Nothing selected, can't validate, returning nothing."));
            var c = a.data(this[0], "validator");
            return c ? c : (this.attr("novalidate", "novalidate"), c = new a.validator(b, this[0]), a.data(this[0], "validator", c), c.settings.onsubmit && (this.on("click.validate", ":submit", function (b) {
                c.submitButton = b.currentTarget, a(this).hasClass("cancel") && (c.cancelSubmit = !0), void 0 !== a(this).attr("formnovalidate") && (c.cancelSubmit = !0)
            }), this.on("submit.validate", function (b) {
                function d() {
                    var d, e;
                    return c.submitButton && (c.settings.submitHandler || c.formSubmitted) && (d = a("<input type='hidden'/>").attr("name", c.submitButton.name).val(a(c.submitButton).val()).appendTo(c.currentForm)), !(c.settings.submitHandler && !c.settings.debug) || (e = c.settings.submitHandler.call(c, c.currentForm, b), d && d.remove(), void 0 !== e && e)
                }

                return c.settings.debug && b.preventDefault(), c.cancelSubmit ? (c.cancelSubmit = !1, d()) : c.form() ? c.pendingRequest ? (c.formSubmitted = !0, !1) : d() : (c.focusInvalid(), !1)
            })), c)
        }, valid: function () {
            var b, c, d;
            return a(this[0]).is("form") ? b = this.validate().form() : (d = [], b = !0, c = a(this[0].form).validate(), this.each(function () {
                b = c.element(this) && b, b || (d = d.concat(c.errorList))
            }), c.errorList = d), b
        }, rules: function (b, c) {
            var d, e, f, g, h, i, j = this[0],
                k = "undefined" != typeof this.attr("contenteditable") && "false" !== this.attr("contenteditable");
            if (null != j && (!j.form && k && (j.form = this.closest("form")[0], j.name = this.attr("name")), null != j.form)) {
                if (b) switch (d = a.data(j.form, "validator").settings, e = d.rules, f = a.validator.staticRules(j), b) {
                    case"add":
                        a.extend(f, a.validator.normalizeRule(c)), delete f.messages, e[j.name] = f, c.messages && (d.messages[j.name] = a.extend(d.messages[j.name], c.messages));
                        break;
                    case"remove":
                        return c ? (i = {}, a.each(c.split(/\s/), function (a, b) {
                            i[b] = f[b], delete f[b]
                        }), i) : (delete e[j.name], f)
                }
                return g = a.validator.normalizeRules(a.extend({}, a.validator.classRules(j), a.validator.attributeRules(j), a.validator.dataRules(j), a.validator.staticRules(j)), j), g.required && (h = g.required, delete g.required, g = a.extend({required: h}, g)), g.remote && (h = g.remote, delete g.remote, g = a.extend(g, {remote: h})), g
            }
        }
    });
    var b = function (a) {
        return a.replace(/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g, "")
    };
    a.extend(a.expr.pseudos || a.expr[":"], {
        blank: function (c) {
            return !b("" + a(c).val())
        }, filled: function (c) {
            var d = a(c).val();
            return null !== d && !!b("" + d)
        }, unchecked: function (b) {
            return !a(b).prop("checked")
        }
    }), a.validator = function (b, c) {
        this.settings = a.extend(!0, {}, a.validator.defaults, b), this.currentForm = c, this.init()
    }, a.validator.format = function (b, c) {
        return 1 === arguments.length ? function () {
            var c = a.makeArray(arguments);
            return c.unshift(b), a.validator.format.apply(this, c)
        } : void 0 === c ? b : (arguments.length > 2 && c.constructor !== Array && (c = a.makeArray(arguments).slice(1)), c.constructor !== Array && (c = [c]), a.each(c, function (a, c) {
            b = b.replace(new RegExp("\\{" + a + "\\}", "g"), function () {
                return c
            })
        }), b)
    }, a.extend(a.validator, {
        defaults: {
            messages: {},
            groups: {},
            rules: {},
            errorClass: "error",
            pendingClass: "pending",
            validClass: "valid",
            errorElement: "label",
            focusCleanup: !1,
            focusInvalid: !0,
            errorContainer: a([]),
            errorLabelContainer: a([]),
            onsubmit: !0,
            ignore: ":hidden",
            ignoreTitle: !1,
            onfocusin: function (a) {
                this.lastActive = a, this.settings.focusCleanup && (this.settings.unhighlight && this.settings.unhighlight.call(this, a, this.settings.errorClass, this.settings.validClass), this.hideThese(this.errorsFor(a)))
            },
            onfocusout: function (a) {
                this.checkable(a) || !(a.name in this.submitted) && this.optional(a) || this.element(a)
            },
            onkeyup: function (b, c) {
                var d = [16, 17, 18, 20, 35, 36, 37, 38, 39, 40, 45, 144, 225];
                9 === c.which && "" === this.elementValue(b) || a.inArray(c.keyCode, d) !== -1 || (b.name in this.submitted || b.name in this.invalid) && this.element(b)
            },
            onclick: function (a) {
                a.name in this.submitted ? this.element(a) : a.parentNode.name in this.submitted && this.element(a.parentNode)
            },
            highlight: function (b, c, d) {
                "radio" === b.type ? this.findByName(b.name).addClass(c).removeClass(d) : a(b).addClass(c).removeClass(d)
            },
            unhighlight: function (b, c, d) {
                "radio" === b.type ? this.findByName(b.name).removeClass(c).addClass(d) : a(b).removeClass(c).addClass(d)
            }
        },
        setDefaults: function (b) {
            a.extend(a.validator.defaults, b)
        },
        messages: {
            required: "This field is required.",
            remote: "Please fix this field.",
            email: "Please enter a valid email address.",
            url: "Please enter a valid URL.",
            date: "Please enter a valid date.",
            dateISO: "Please enter a valid date (ISO).",
            number: "Please enter a valid number.",
            digits: "Please enter only digits.",
            equalTo: "Please enter the same value again.",
            maxlength: a.validator.format("Please enter no more than {0} characters."),
            minlength: a.validator.format("Please enter at least {0} characters."),
            rangelength: a.validator.format("Please enter a value between {0} and {1} characters long."),
            range: a.validator.format("Please enter a value between {0} and {1}."),
            max: a.validator.format("Please enter a value less than or equal to {0}."),
            min: a.validator.format("Please enter a value greater than or equal to {0}."),
            step: a.validator.format("Please enter a multiple of {0}.")
        },
        autoCreateRanges: !1,
        prototype: {
            init: function () {
                function b(b) {
                    var c = "undefined" != typeof a(this).attr("contenteditable") && "false" !== a(this).attr("contenteditable");
                    if (!this.form && c && (this.form = a(this).closest("form")[0], this.name = a(this).attr("name")), d === this.form) {
                        var e = a.data(this.form, "validator"), f = "on" + b.type.replace(/^validate/, ""),
                            g = e.settings;
                        g[f] && !a(this).is(g.ignore) && g[f].call(e, this, b)
                    }
                }

                this.labelContainer = a(this.settings.errorLabelContainer), this.errorContext = this.labelContainer.length && this.labelContainer || a(this.currentForm), this.containers = a(this.settings.errorContainer).add(this.settings.errorLabelContainer), this.submitted = {}, this.valueCache = {}, this.pendingRequest = 0, this.pending = {}, this.invalid = {}, this.reset();
                var c, d = this.currentForm, e = this.groups = {};
                a.each(this.settings.groups, function (b, c) {
                    "string" == typeof c && (c = c.split(/\s/)), a.each(c, function (a, c) {
                        e[c] = b
                    })
                }), c = this.settings.rules, a.each(c, function (b, d) {
                    c[b] = a.validator.normalizeRule(d)
                }), a(this.currentForm).on("focusin.validate focusout.validate keyup.validate", ":text, [type='password'], [type='file'], select, textarea, [type='number'], [type='search'], [type='tel'], [type='url'], [type='email'], [type='datetime'], [type='date'], [type='month'], [type='week'], [type='time'], [type='datetime-local'], [type='range'], [type='color'], [type='radio'], [type='checkbox'], [contenteditable], [type='button']", b).on("click.validate", "select, option, [type='radio'], [type='checkbox']", b), this.settings.invalidHandler && a(this.currentForm).on("invalid-form.validate", this.settings.invalidHandler)
            }, form: function () {
                return this.checkForm(), a.extend(this.submitted, this.errorMap), this.invalid = a.extend({}, this.errorMap), this.valid() || a(this.currentForm).triggerHandler("invalid-form", [this]), this.showErrors(), this.valid()
            }, checkForm: function () {
                this.prepareForm();
                for (var a = 0, b = this.currentElements = this.elements(); b[a]; a++) this.check(b[a]);
                return this.valid()
            }, element: function (b) {
                var c, d, e = this.clean(b), f = this.validationTargetFor(e), g = this, h = !0;
                return void 0 === f ? delete this.invalid[e.name] : (this.prepareElement(f), this.currentElements = a(f), d = this.groups[f.name], d && a.each(this.groups, function (a, b) {
                    b === d && a !== f.name && (e = g.validationTargetFor(g.clean(g.findByName(a))), e && e.name in g.invalid && (g.currentElements.push(e), h = g.check(e) && h))
                }), c = this.check(f) !== !1, h = h && c, c ? this.invalid[f.name] = !1 : this.invalid[f.name] = !0, this.numberOfInvalids() || (this.toHide = this.toHide.add(this.containers)), this.showErrors(), a(b).attr("aria-invalid", !c)), h
            }, showErrors: function (b) {
                if (b) {
                    var c = this;
                    a.extend(this.errorMap, b), this.errorList = a.map(this.errorMap, function (a, b) {
                        return {message: a, element: c.findByName(b)[0]}
                    }), this.successList = a.grep(this.successList, function (a) {
                        return !(a.name in b)
                    })
                }
                this.settings.showErrors ? this.settings.showErrors.call(this, this.errorMap, this.errorList) : this.defaultShowErrors()
            }, resetForm: function () {
                a.fn.resetForm && a(this.currentForm).resetForm(), this.invalid = {}, this.submitted = {}, this.prepareForm(), this.hideErrors();
                var b = this.elements().removeData("previousValue").removeAttr("aria-invalid");
                this.resetElements(b)
            }, resetElements: function (a) {
                var b;
                if (this.settings.unhighlight) for (b = 0; a[b]; b++) this.settings.unhighlight.call(this, a[b], this.settings.errorClass, ""), this.findByName(a[b].name).removeClass(this.settings.validClass); else a.removeClass(this.settings.errorClass).removeClass(this.settings.validClass)
            }, numberOfInvalids: function () {
                return this.objectLength(this.invalid)
            }, objectLength: function (a) {
                var b, c = 0;
                for (b in a) void 0 !== a[b] && null !== a[b] && a[b] !== !1 && c++;
                return c
            }, hideErrors: function () {
                this.hideThese(this.toHide)
            }, hideThese: function (a) {
                a.not(this.containers).text(""), this.addWrapper(a).hide()
            }, valid: function () {
                return 0 === this.size()
            }, size: function () {
                return this.errorList.length
            }, focusInvalid: function () {
                if (this.settings.focusInvalid) try {
                    a(this.findLastActive() || this.errorList.length && this.errorList[0].element || []).filter(":visible").trigger("focus").trigger("focusin")
                } catch (b) {
                }
            }, findLastActive: function () {
                var b = this.lastActive;
                return b && 1 === a.grep(this.errorList, function (a) {
                    return a.element.name === b.name
                }).length && b
            }, elements: function () {
                var b = this, c = {};
                return a(this.currentForm).find("input, select, textarea, [contenteditable]").not(":submit, :reset, :image, :disabled").not(this.settings.ignore).filter(function () {
                    var d = this.name || a(this).attr("name"),
                        e = "undefined" != typeof a(this).attr("contenteditable") && "false" !== a(this).attr("contenteditable");
                    return !d && b.settings.debug && window.console && console.error("%o has no name assigned", this), e && (this.form = a(this).closest("form")[0], this.name = d), this.form === b.currentForm && (!(d in c || !b.objectLength(a(this).rules())) && (c[d] = !0, !0))
                })
            }, clean: function (b) {
                return a(b)[0]
            }, errors: function () {
                var b = this.settings.errorClass.split(" ").join(".");
                return a(this.settings.errorElement + "." + b, this.errorContext)
            }, resetInternals: function () {
                this.successList = [], this.errorList = [], this.errorMap = {}, this.toShow = a([]), this.toHide = a([])
            }, reset: function () {
                this.resetInternals(), this.currentElements = a([])
            }, prepareForm: function () {
                this.reset(), this.toHide = this.errors().add(this.containers)
            }, prepareElement: function (a) {
                this.reset(), this.toHide = this.errorsFor(a)
            }, elementValue: function (b) {
                var c, d, e = a(b), f = b.type,
                    g = "undefined" != typeof e.attr("contenteditable") && "false" !== e.attr("contenteditable");
                return "radio" === f || "checkbox" === f ? this.findByName(b.name).filter(":checked").val() : "number" === f && "undefined" != typeof b.validity ? b.validity.badInput ? "NaN" : e.val() : (c = g ? e.text() : e.val(), "file" === f ? "C:\\fakepath\\" === c.substr(0, 12) ? c.substr(12) : (d = c.lastIndexOf("/"), d >= 0 ? c.substr(d + 1) : (d = c.lastIndexOf("\\"), d >= 0 ? c.substr(d + 1) : c)) : "string" == typeof c ? c.replace(/\r/g, "") : c)
            }, check: function (b) {
                b = this.validationTargetFor(this.clean(b));
                var c, d, e, f, g = a(b).rules(), h = a.map(g, function (a, b) {
                    return b
                }).length, i = !1, j = this.elementValue(b);
                "function" == typeof g.normalizer ? f = g.normalizer : "function" == typeof this.settings.normalizer && (f = this.settings.normalizer), f && (j = f.call(b, j), delete g.normalizer);
                for (d in g) {
                    e = {method: d, parameters: g[d]};
                    try {
                        if (c = a.validator.methods[d].call(this, j, b, e.parameters), "dependency-mismatch" === c && 1 === h) {
                            i = !0;
                            continue
                        }
                        if (i = !1, "pending" === c) return void (this.toHide = this.toHide.not(this.errorsFor(b)));
                        if (!c) return this.formatAndAdd(b, e), !1
                    } catch (k) {
                        throw this.settings.debug && window.console && console.log("Exception occurred when checking element " + b.id + ", check the '" + e.method + "' method.", k), k instanceof TypeError && (k.message += ".  Exception occurred when checking element " + b.id + ", check the '" + e.method + "' method."), k
                    }
                }
                if (!i) return this.objectLength(g) && this.successList.push(b), !0
            }, customDataMessage: function (b, c) {
                return a(b).data("msg" + c.charAt(0).toUpperCase() + c.substring(1).toLowerCase()) || a(b).data("msg")
            }, customMessage: function (a, b) {
                var c = this.settings.messages[a];
                return c && (c.constructor === String ? c : c[b])
            }, findDefined: function () {
                for (var a = 0; a < arguments.length; a++) if (void 0 !== arguments[a]) return arguments[a]
            }, defaultMessage: function (b, c) {
                "string" == typeof c && (c = {method: c});
                var d = this.findDefined(this.customMessage(b.name, c.method), this.customDataMessage(b, c.method), !this.settings.ignoreTitle && b.title || void 0, a.validator.messages[c.method], "<strong>Warning: No message defined for " + b.name + "</strong>"),
                    e = /\$?\{(\d+)\}/g;
                return "function" == typeof d ? d = d.call(this, c.parameters, b) : e.test(d) && (d = a.validator.format(d.replace(e, "{$1}"), c.parameters)), d
            }, formatAndAdd: function (a, b) {
                var c = this.defaultMessage(a, b);
                this.errorList.push({
                    message: c,
                    element: a,
                    method: b.method
                }), this.errorMap[a.name] = c, this.submitted[a.name] = c
            }, addWrapper: function (a) {
                return this.settings.wrapper && (a = a.add(a.parent(this.settings.wrapper))), a
            }, defaultShowErrors: function () {
                var a, b, c;
                for (a = 0; this.errorList[a]; a++) c = this.errorList[a], this.settings.highlight && this.settings.highlight.call(this, c.element, this.settings.errorClass, this.settings.validClass), this.showLabel(c.element, c.message);
                if (this.errorList.length && (this.toShow = this.toShow.add(this.containers)), this.settings.success) for (a = 0; this.successList[a]; a++) this.showLabel(this.successList[a]);
                if (this.settings.unhighlight) for (a = 0, b = this.validElements(); b[a]; a++) this.settings.unhighlight.call(this, b[a], this.settings.errorClass, this.settings.validClass);
                this.toHide = this.toHide.not(this.toShow), this.hideErrors(), this.addWrapper(this.toShow).show()
            }, validElements: function () {
                return this.currentElements.not(this.invalidElements())
            }, invalidElements: function () {
                return a(this.errorList).map(function () {
                    return this.element
                })
            }, showLabel: function (b, c) {
                var d, e, f, g, h = this.errorsFor(b), i = this.idOrName(b), j = a(b).attr("aria-describedby");
                h.length ? (h.removeClass(this.settings.validClass).addClass(this.settings.errorClass), h.html(c)) : (h = a("<" + this.settings.errorElement + ">").attr("id", i + "-error").addClass(this.settings.errorClass).html(c || ""), d = h, this.settings.wrapper && (d = h.hide().show().wrap("<" + this.settings.wrapper + "/>").parent()), this.labelContainer.length ? this.labelContainer.append(d) : this.settings.errorPlacement ? this.settings.errorPlacement.call(this, d, a(b)) : d.insertAfter(b), h.is("label") ? h.attr("for", i) : 0 === h.parents("label[for='" + this.escapeCssMeta(i) + "']").length && (f = h.attr("id"), j ? j.match(new RegExp("\\b" + this.escapeCssMeta(f) + "\\b")) || (j += " " + f) : j = f, a(b).attr("aria-describedby", j), e = this.groups[b.name], e && (g = this, a.each(g.groups, function (b, c) {
                    c === e && a("[name='" + g.escapeCssMeta(b) + "']", g.currentForm).attr("aria-describedby", h.attr("id"))
                })))), !c && this.settings.success && (h.text(""), "string" == typeof this.settings.success ? h.addClass(this.settings.success) : this.settings.success(h, b)), this.toShow = this.toShow.add(h)
            }, errorsFor: function (b) {
                var c = this.escapeCssMeta(this.idOrName(b)), d = a(b).attr("aria-describedby"),
                    e = "label[for='" + c + "'], label[for='" + c + "'] *";
                return d && (e = e + ", #" + this.escapeCssMeta(d).replace(/\s+/g, ", #")), this.errors().filter(e)
            }, escapeCssMeta: function (a) {
                return a.replace(/([\\!"#$%&'()*+,.\/:;<=>?@\[\]^`{|}~])/g, "\\$1")
            }, idOrName: function (a) {
                return this.groups[a.name] || (this.checkable(a) ? a.name : a.id || a.name)
            }, validationTargetFor: function (b) {
                return this.checkable(b) && (b = this.findByName(b.name)), a(b).not(this.settings.ignore)[0]
            }, checkable: function (a) {
                return /radio|checkbox/i.test(a.type)
            }, findByName: function (b) {
                return a(this.currentForm).find("[name='" + this.escapeCssMeta(b) + "']")
            }, getLength: function (b, c) {
                switch (c.nodeName.toLowerCase()) {
                    case"select":
                        return a("option:selected", c).length;
                    case"input":
                        if (this.checkable(c)) return this.findByName(c.name).filter(":checked").length
                }
                return b.length
            }, depend: function (a, b) {
                return !this.dependTypes[typeof a] || this.dependTypes[typeof a](a, b)
            }, dependTypes: {
                "boolean": function (a) {
                    return a
                }, string: function (b, c) {
                    return !!a(b, c.form).length
                }, "function": function (a, b) {
                    return a(b)
                }
            }, optional: function (b) {
                var c = this.elementValue(b);
                return !a.validator.methods.required.call(this, c, b) && "dependency-mismatch"
            }, startRequest: function (b) {
                this.pending[b.name] || (this.pendingRequest++, a(b).addClass(this.settings.pendingClass), this.pending[b.name] = !0)
            }, stopRequest: function (b, c) {
                this.pendingRequest--, this.pendingRequest < 0 && (this.pendingRequest = 0), delete this.pending[b.name], a(b).removeClass(this.settings.pendingClass), c && 0 === this.pendingRequest && this.formSubmitted && this.form() ? (a(this.currentForm).submit(), this.submitButton && a("input:hidden[name='" + this.submitButton.name + "']", this.currentForm).remove(), this.formSubmitted = !1) : !c && 0 === this.pendingRequest && this.formSubmitted && (a(this.currentForm).triggerHandler("invalid-form", [this]), this.formSubmitted = !1)
            }, previousValue: function (b, c) {
                return c = "string" == typeof c && c || "remote", a.data(b, "previousValue") || a.data(b, "previousValue", {
                    old: null,
                    valid: !0,
                    message: this.defaultMessage(b, {method: c})
                })
            }, destroy: function () {
                this.resetForm(), a(this.currentForm).off(".validate").removeData("validator").find(".validate-equalTo-blur").off(".validate-equalTo").removeClass("validate-equalTo-blur").find(".validate-lessThan-blur").off(".validate-lessThan").removeClass("validate-lessThan-blur").find(".validate-lessThanEqual-blur").off(".validate-lessThanEqual").removeClass("validate-lessThanEqual-blur").find(".validate-greaterThanEqual-blur").off(".validate-greaterThanEqual").removeClass("validate-greaterThanEqual-blur").find(".validate-greaterThan-blur").off(".validate-greaterThan").removeClass("validate-greaterThan-blur")
            }
        },
        classRuleSettings: {
            required: {required: !0},
            email: {email: !0},
            url: {url: !0},
            date: {date: !0},
            dateISO: {dateISO: !0},
            number: {number: !0},
            digits: {digits: !0},
            creditcard: {creditcard: !0}
        },
        addClassRules: function (b, c) {
            b.constructor === String ? this.classRuleSettings[b] = c : a.extend(this.classRuleSettings, b)
        },
        classRules: function (b) {
            var c = {}, d = a(b).attr("class");
            return d && a.each(d.split(" "), function () {
                this in a.validator.classRuleSettings && a.extend(c, a.validator.classRuleSettings[this])
            }), c
        },
        normalizeAttributeRule: function (a, b, c, d) {
            /min|max|step/.test(c) && (null === b || /number|range|text/.test(b)) && (d = Number(d), isNaN(d) && (d = void 0)), d || 0 === d ? a[c] = d : b === c && "range" !== b && (a[c] = !0)
        },
        attributeRules: function (b) {
            var c, d, e = {}, f = a(b), g = b.getAttribute("type");
            for (c in a.validator.methods) "required" === c ? (d = b.getAttribute(c), "" === d && (d = !0), d = !!d) : d = f.attr(c), this.normalizeAttributeRule(e, g, c, d);
            return e.maxlength && /-1|2147483647|524288/.test(e.maxlength) && delete e.maxlength, e
        },
        dataRules: function (b) {
            var c, d, e = {}, f = a(b), g = b.getAttribute("type");
            for (c in a.validator.methods) d = f.data("rule" + c.charAt(0).toUpperCase() + c.substring(1).toLowerCase()), "" === d && (d = !0), this.normalizeAttributeRule(e, g, c, d);
            return e
        },
        staticRules: function (b) {
            var c = {}, d = a.data(b.form, "validator");
            return d.settings.rules && (c = a.validator.normalizeRule(d.settings.rules[b.name]) || {}), c
        },
        normalizeRules: function (b, c) {
            return a.each(b, function (d, e) {
                if (e === !1) return void delete b[d];
                if (e.param || e.depends) {
                    var f = !0;
                    switch (typeof e.depends) {
                        case"string":
                            f = !!a(e.depends, c.form).length;
                            break;
                        case"function":
                            f = e.depends.call(c, c)
                    }
                    f ? b[d] = void 0 === e.param || e.param : (a.data(c.form, "validator").resetElements(a(c)), delete b[d])
                }
            }), a.each(b, function (a, d) {
                b[a] = "function" == typeof d && "normalizer" !== a ? d(c) : d
            }), a.each(["minlength", "maxlength"], function () {
                b[this] && (b[this] = Number(b[this]))
            }), a.each(["rangelength", "range"], function () {
                var a;
                b[this] && (Array.isArray(b[this]) ? b[this] = [Number(b[this][0]), Number(b[this][1])] : "string" == typeof b[this] && (a = b[this].replace(/[\[\]]/g, "").split(/[\s,]+/), b[this] = [Number(a[0]), Number(a[1])]))
            }), a.validator.autoCreateRanges && (null != b.min && null != b.max && (b.range = [b.min, b.max], delete b.min, delete b.max), null != b.minlength && null != b.maxlength && (b.rangelength = [b.minlength, b.maxlength], delete b.minlength, delete b.maxlength)), b
        },
        normalizeRule: function (b) {
            if ("string" == typeof b) {
                var c = {};
                a.each(b.split(/\s/), function () {
                    c[this] = !0
                }), b = c
            }
            return b
        },
        addMethod: function (b, c, d) {
            a.validator.methods[b] = c, a.validator.messages[b] = void 0 !== d ? d : a.validator.messages[b], c.length < 3 && a.validator.addClassRules(b, a.validator.normalizeRule(b))
        },
        methods: {
            required: function (b, c, d) {
                if (!this.depend(d, c)) return "dependency-mismatch";
                if ("select" === c.nodeName.toLowerCase()) {
                    var e = a(c).val();
                    return e && e.length > 0
                }
                return this.checkable(c) ? this.getLength(b, c) > 0 : void 0 !== b && null !== b && b.length > 0
            }, email: function (a, b) {
                return this.optional(b) || /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/.test(a)
            }, url: function (a, b) {
                return this.optional(b) || /^(?:(?:(?:https?|ftp):)?\/\/)(?:\S+(?::\S*)?@)?(?:(?!(?:10|127)(?:\.\d{1,3}){3})(?!(?:169\.254|192\.168)(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-z0-9\u00a1-\uffff][a-z0-9\u00a1-\uffff_-]{0,62})?[a-z0-9\u00a1-\uffff]\.)+(?:[a-z\u00a1-\uffff]{2,}\.?))(?::\d{2,5})?(?:[\/?#]\S*)?$/i.test(a)
            }, date: function () {
                var a = !1;
                return function (b, c) {
                    return a || (a = !0, this.settings.debug && window.console && console.warn("The `date` method is deprecated and will be removed in version '2.0.0'.\nPlease don't use it, since it relies on the Date constructor, which\nbehaves very differently across browsers and locales. Use `dateISO`\ninstead or one of the locale specific methods in `localizations/`\nand `additional-methods.js`.")), this.optional(c) || !/Invalid|NaN/.test(new Date(b).toString())
                }
            }(), dateISO: function (a, b) {
                return this.optional(b) || /^\d{4}[\/\-](0?[1-9]|1[012])[\/\-](0?[1-9]|[12][0-9]|3[01])$/.test(a)
            }, number: function (a, b) {
                return this.optional(b) || /^(?:-?\d+|-?\d{1,3}(?:,\d{3})+)?(?:\.\d+)?$/.test(a)
            }, digits: function (a, b) {
                return this.optional(b) || /^\d+$/.test(a)
            }, minlength: function (a, b, c) {
                var d = Array.isArray(a) ? a.length : this.getLength(a, b);
                return this.optional(b) || d >= c
            }, maxlength: function (a, b, c) {
                var d = Array.isArray(a) ? a.length : this.getLength(a, b);
                return this.optional(b) || d <= c
            }, rangelength: function (a, b, c) {
                var d = Array.isArray(a) ? a.length : this.getLength(a, b);
                return this.optional(b) || d >= c[0] && d <= c[1]
            }, min: function (a, b, c) {
                return this.optional(b) || a >= c
            }, max: function (a, b, c) {
                return this.optional(b) || a <= c
            }, range: function (a, b, c) {
                return this.optional(b) || a >= c[0] && a <= c[1]
            }, step: function (b, c, d) {
                var e, f = a(c).attr("type"), g = "Step attribute on input type " + f + " is not supported.",
                    h = ["text", "number", "range"], i = new RegExp("\\b" + f + "\\b"), j = f && !i.test(h.join()),
                    k = function (a) {
                        var b = ("" + a).match(/(?:\.(\d+))?$/);
                        return b && b[1] ? b[1].length : 0
                    }, l = function (a) {
                        return Math.round(a * Math.pow(10, e))
                    }, m = !0;
                if (j) throw new Error(g);
                return e = k(d), (k(b) > e || l(b) % l(d) !== 0) && (m = !1), this.optional(c) || m
            }, equalTo: function (b, c, d) {
                var e = a(d);
                return this.settings.onfocusout && e.not(".validate-equalTo-blur").length && e.addClass("validate-equalTo-blur").on("blur.validate-equalTo", function () {
                    a(c).valid()
                }), b === e.val()
            }, remote: function (b, c, d, e) {
                if (this.optional(c)) return "dependency-mismatch";
                e = "string" == typeof e && e || "remote";
                var f, g, h, i = this.previousValue(c, e);
                return this.settings.messages[c.name] || (this.settings.messages[c.name] = {}), i.originalMessage = i.originalMessage || this.settings.messages[c.name][e], this.settings.messages[c.name][e] = i.message, d = "string" == typeof d && {url: d} || d, h = a.param(a.extend({data: b}, d.data)), i.old === h ? i.valid : (i.old = h, f = this, this.startRequest(c), g = {}, g[c.name] = b, a.ajax(a.extend(!0, {
                    mode: "abort",
                    port: "validate" + c.name,
                    dataType: "json",
                    data: g,
                    context: f.currentForm,
                    success: function (a) {
                        var d, g, h, j = a === !0 || "true" === a;
                        f.settings.messages[c.name][e] = i.originalMessage, j ? (h = f.formSubmitted, f.resetInternals(), f.toHide = f.errorsFor(c), f.formSubmitted = h, f.successList.push(c), f.invalid[c.name] = !1, f.showErrors()) : (d = {}, g = a || f.defaultMessage(c, {
                            method: e,
                            parameters: b
                        }), d[c.name] = i.message = g, f.invalid[c.name] = !0, f.showErrors(d)), i.valid = j, f.stopRequest(c, j)
                    }
                }, d)), "pending")
            }
        }
    });
    var c, d = {};
    return a.ajaxPrefilter ? a.ajaxPrefilter(function (a, b, c) {
        var e = a.port;
        "abort" === a.mode && (d[e] && d[e].abort(), d[e] = c)
    }) : (c = a.ajax, a.ajax = function (b) {
        var e = ("mode" in b ? b : a.ajaxSettings).mode, f = ("port" in b ? b : a.ajaxSettings).port;
        return "abort" === e ? (d[f] && d[f].abort(), d[f] = c.apply(this, arguments), d[f]) : c.apply(this, arguments)
    }), a
});
// ==================================================
// fancyBox v3.5.7
//
// Licensed GPLv3 for open source use
// or fancyBox Commercial License for commercial use
//
// http://fancyapps.com/fancybox/
// Copyright 2019 fancyApps
//
// ==================================================
!function (t, e, n, o) {
    "use strict";

    function i(t, e) {
        var o, i, a, s = [], r = 0;
        t && t.isDefaultPrevented() || (t.preventDefault(), e = e || {}, t && t.data && (e = h(t.data.options, e)), o = e.$target || n(t.currentTarget).trigger("blur"), (a = n.fancybox.getInstance()) && a.$trigger && a.$trigger.is(o) || (e.selector ? s = n(e.selector) : (i = o.attr("data-fancybox") || "", i ? (s = t.data ? t.data.items : [], s = s.length ? s.filter('[data-fancybox="' + i + '"]') : n('[data-fancybox="' + i + '"]')) : s = [o]), r = n(s).index(o), r < 0 && (r = 0), a = n.fancybox.open(s, e, r), a.$trigger = o))
    }

    if (t.console = t.console || {
        info: function (t) {
        }
    }, n) {
        if (n.fn.fancybox) return void console.info("fancyBox already initialized");
        var a = {
            closeExisting: !1,
            loop: !1,
            gutter: 50,
            keyboard: !0,
            preventCaptionOverlap: !0,
            arrows: !0,
            infobar: !0,
            smallBtn: "auto",
            toolbar: "auto",
            buttons: ["zoom", "slideShow", "thumbs", "close"],
            idleTime: 3,
            protect: !1,
            modal: !1,
            image: {preload: !1},
            ajax: {settings: {data: {fancybox: !0}}},
            iframe: {
                tpl: '<iframe id="fancybox-frame{rnd}" name="fancybox-frame{rnd}" class="fancybox-iframe" allowfullscreen="allowfullscreen" allow="autoplay; fullscreen" src=""></iframe>',
                preload: !0,
                css: {},
                attr: {scrolling: "auto"}
            },
            video: {
                tpl: '<video class="fancybox-video" controls controlsList="nodownload" poster="{{poster}}"><source src="{{src}}" type="{{format}}" />Sorry, your browser doesn\'t support embedded videos, <a href="{{src}}">download</a> and watch with your favorite video player!</video>',
                format: "",
                autoStart: !0
            },
            defaultType: "image",
            animationEffect: "zoom",
            animationDuration: 366,
            zoomOpacity: "auto",
            transitionEffect: "fade",
            transitionDuration: 366,
            slideClass: "",
            baseClass: "",
            baseTpl: '<div class="fancybox-container" role="dialog" tabindex="-1"><div class="fancybox-bg"></div><div class="fancybox-inner"><div class="fancybox-infobar"><span data-fancybox-index></span>&nbsp;/&nbsp;<span data-fancybox-count></span></div><div class="fancybox-toolbar">{{buttons}}</div><div class="fancybox-navigation">{{arrows}}</div><div class="fancybox-stage"></div><div class="fancybox-caption"><div class="fancybox-caption__body"></div></div></div></div>',
            spinnerTpl: '<div class="fancybox-loading"></div>',
            errorTpl: '<div class="fancybox-error"><p>{{ERROR}}</p></div>',
            btnTpl: {
                download: '<a download data-fancybox-download class="fancybox-button fancybox-button--download" title="{{DOWNLOAD}}" href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.62 17.09V19H5.38v-1.91zm-2.97-6.96L17 11.45l-5 4.87-5-4.87 1.36-1.32 2.68 2.64V5h1.92v7.77z"/></svg></a>',
                zoom: '<button data-fancybox-zoom class="fancybox-button fancybox-button--zoom" title="{{ZOOM}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.7 17.3l-3-3a5.9 5.9 0 0 0-.6-7.6 5.9 5.9 0 0 0-8.4 0 5.9 5.9 0 0 0 0 8.4 5.9 5.9 0 0 0 7.7.7l3 3a1 1 0 0 0 1.3 0c.4-.5.4-1 0-1.5zM8.1 13.8a4 4 0 0 1 0-5.7 4 4 0 0 1 5.7 0 4 4 0 0 1 0 5.7 4 4 0 0 1-5.7 0z"/></svg></button>',
                close: '<button data-fancybox-close class="fancybox-button fancybox-button--close" title="{{CLOSE}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 10.6L6.6 5.2 5.2 6.6l5.4 5.4-5.4 5.4 1.4 1.4 5.4-5.4 5.4 5.4 1.4-1.4-5.4-5.4 5.4-5.4-1.4-1.4-5.4 5.4z"/></svg></button>',
                arrowLeft: '<button data-fancybox-prev class="fancybox-button fancybox-button--arrow_left" title="{{PREV}}"><div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M11.28 15.7l-1.34 1.37L5 12l4.94-5.07 1.34 1.38-2.68 2.72H19v1.94H8.6z"/></svg></div></button>',
                arrowRight: '<button data-fancybox-next class="fancybox-button fancybox-button--arrow_right" title="{{NEXT}}"><div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M15.4 12.97l-2.68 2.72 1.34 1.38L19 12l-4.94-5.07-1.34 1.38 2.68 2.72H5v1.94z"/></svg></div></button>',
                smallBtn: '<button type="button" data-fancybox-close class="fancybox-button fancybox-close-small" title="{{CLOSE}}"><svg xmlns="http://www.w3.org/2000/svg" version="1" viewBox="0 0 24 24"><path d="M13 12l5-5-1-1-5 5-5-5-1 1 5 5-5 5 1 1 5-5 5 5 1-1z"/></svg></button>'
            },
            parentEl: "body",
            hideScrollbar: !0,
            autoFocus: !0,
            backFocus: !0,
            trapFocus: !0,
            fullScreen: {autoStart: !1},
            touch: {vertical: !0, momentum: !0},
            hash: null,
            media: {},
            slideShow: {autoStart: !1, speed: 3e3},
            thumbs: {autoStart: !1, hideOnClose: !0, parentEl: ".fancybox-container", axis: "y"},
            wheel: "auto",
            onInit: n.noop,
            beforeLoad: n.noop,
            afterLoad: n.noop,
            beforeShow: n.noop,
            afterShow: n.noop,
            beforeClose: n.noop,
            afterClose: n.noop,
            onActivate: n.noop,
            onDeactivate: n.noop,
            clickContent: function (t, e) {
                return "image" === t.type && "zoom"
            },
            clickSlide: "close",
            clickOutside: "close",
            dblclickContent: !1,
            dblclickSlide: !1,
            dblclickOutside: !1,
            mobile: {
                preventCaptionOverlap: !1, idleTime: !1, clickContent: function (t, e) {
                    return "image" === t.type && "toggleControls"
                }, clickSlide: function (t, e) {
                    return "image" === t.type ? "toggleControls" : "close"
                }, dblclickContent: function (t, e) {
                    return "image" === t.type && "zoom"
                }, dblclickSlide: function (t, e) {
                    return "image" === t.type && "zoom"
                }
            },
            lang: "en",
            i18n: {
                en: {
                    CLOSE: "Close",
                    NEXT: "Next",
                    PREV: "Previous",
                    ERROR: "The requested content cannot be loaded. <br/> Please try again later.",
                    PLAY_START: "Start slideshow",
                    PLAY_STOP: "Pause slideshow",
                    FULL_SCREEN: "Full screen",
                    THUMBS: "Thumbnails",
                    DOWNLOAD: "Download",
                    SHARE: "Share",
                    ZOOM: "Zoom"
                },
                de: {
                    CLOSE: "Schlie&szlig;en",
                    NEXT: "Weiter",
                    PREV: "Zur&uuml;ck",
                    ERROR: "Die angeforderten Daten konnten nicht geladen werden. <br/> Bitte versuchen Sie es sp&auml;ter nochmal.",
                    PLAY_START: "Diaschau starten",
                    PLAY_STOP: "Diaschau beenden",
                    FULL_SCREEN: "Vollbild",
                    THUMBS: "Vorschaubilder",
                    DOWNLOAD: "Herunterladen",
                    SHARE: "Teilen",
                    ZOOM: "Vergr&ouml;&szlig;ern"
                }
            }
        }, s = n(t), r = n(e), c = 0, l = function (t) {
            return t && t.hasOwnProperty && t instanceof n
        }, d = function () {
            return t.requestAnimationFrame || t.webkitRequestAnimationFrame || t.mozRequestAnimationFrame || t.oRequestAnimationFrame || function (e) {
                return t.setTimeout(e, 1e3 / 60)
            }
        }(), u = function () {
            return t.cancelAnimationFrame || t.webkitCancelAnimationFrame || t.mozCancelAnimationFrame || t.oCancelAnimationFrame || function (e) {
                t.clearTimeout(e)
            }
        }(), f = function () {
            var t, n = e.createElement("fakeelement"), o = {
                transition: "transitionend",
                OTransition: "oTransitionEnd",
                MozTransition: "transitionend",
                WebkitTransition: "webkitTransitionEnd"
            };
            for (t in o) if (void 0 !== n.style[t]) return o[t];
            return "transitionend"
        }(), p = function (t) {
            return t && t.length && t[0].offsetHeight
        }, h = function (t, e) {
            var o = n.extend(!0, {}, t, e);
            return n.each(e, function (t, e) {
                n.isArray(e) && (o[t] = e)
            }), o
        }, g = function (t) {
            var o, i;
            return !(!t || t.ownerDocument !== e) && (n(".fancybox-container").css("pointer-events", "none"), o = {
                x: t.getBoundingClientRect().left + t.offsetWidth / 2,
                y: t.getBoundingClientRect().top + t.offsetHeight / 2
            }, i = e.elementFromPoint(o.x, o.y) === t, n(".fancybox-container").css("pointer-events", ""), i)
        }, b = function (t, e, o) {
            var i = this;
            i.opts = h({index: o}, n.fancybox.defaults), n.isPlainObject(e) && (i.opts = h(i.opts, e)), n.fancybox.isMobile && (i.opts = h(i.opts, i.opts.mobile)), i.id = i.opts.id || ++c, i.currIndex = parseInt(i.opts.index, 10) || 0, i.prevIndex = null, i.prevPos = null, i.currPos = 0, i.firstRun = !0, i.group = [], i.slides = {}, i.addContent(t), i.group.length && i.init()
        };
        n.extend(b.prototype, {
            init: function () {
                var o, i, a = this, s = a.group[a.currIndex], r = s.opts;
                r.closeExisting && n.fancybox.close(!0), n("body").addClass("fancybox-active"), !n.fancybox.getInstance() && !1 !== r.hideScrollbar && !n.fancybox.isMobile && e.body.scrollHeight > t.innerHeight && (n("head").append('<style id="fancybox-style-noscroll" type="text/css">.compensate-for-scrollbar{margin-right:' + (t.innerWidth - e.documentElement.clientWidth) + "px;}</style>"), n("body").addClass("compensate-for-scrollbar")), i = "", n.each(r.buttons, function (t, e) {
                    i += r.btnTpl[e] || ""
                }), o = n(a.translate(a, r.baseTpl.replace("{{buttons}}", i).replace("{{arrows}}", r.btnTpl.arrowLeft + r.btnTpl.arrowRight))).attr("id", "fancybox-container-" + a.id).addClass(r.baseClass).data("FancyBox", a).appendTo(r.parentEl), a.$refs = {container: o}, ["bg", "inner", "infobar", "toolbar", "stage", "caption", "navigation"].forEach(function (t) {
                    a.$refs[t] = o.find(".fancybox-" + t)
                }), a.trigger("onInit"), a.activate(), a.jumpTo(a.currIndex)
            }, translate: function (t, e) {
                var n = t.opts.i18n[t.opts.lang] || t.opts.i18n.en;
                return e.replace(/\{\{(\w+)\}\}/g, function (t, e) {
                    return void 0 === n[e] ? t : n[e]
                })
            }, addContent: function (t) {
                var e, o = this, i = n.makeArray(t);
                n.each(i, function (t, e) {
                    var i, a, s, r, c, l = {}, d = {};
                    n.isPlainObject(e) ? (l = e, d = e.opts || e) : "object" === n.type(e) && n(e).length ? (i = n(e), d = i.data() || {}, d = n.extend(!0, {}, d, d.options), d.$orig = i, l.src = o.opts.src || d.src || i.attr("href"), l.type || l.src || (l.type = "inline", l.src = e)) : l = {
                        type: "html",
                        src: e + ""
                    }, l.opts = n.extend(!0, {}, o.opts, d), n.isArray(d.buttons) && (l.opts.buttons = d.buttons), n.fancybox.isMobile && l.opts.mobile && (l.opts = h(l.opts, l.opts.mobile)), a = l.type || l.opts.type, r = l.src || "", !a && r && ((s = r.match(/\.(mp4|mov|ogv|webm)((\?|#).*)?$/i)) ? (a = "video", l.opts.video.format || (l.opts.video.format = "video/" + ("ogv" === s[1] ? "ogg" : s[1]))) : r.match(/(^data:image\/[a-z0-9+\/=]*,)|(\.(jp(e|g|eg)|gif|png|bmp|webp|svg|ico)((\?|#).*)?$)/i) ? a = "image" : r.match(/\.(pdf)((\?|#).*)?$/i) ? (a = "iframe", l = n.extend(!0, l, {
                        contentType: "pdf",
                        opts: {iframe: {preload: !1}}
                    })) : "#" === r.charAt(0) && (a = "inline")), a ? l.type = a : o.trigger("objectNeedsType", l), l.contentType || (l.contentType = n.inArray(l.type, ["html", "inline", "ajax"]) > -1 ? "html" : l.type), l.index = o.group.length, "auto" == l.opts.smallBtn && (l.opts.smallBtn = n.inArray(l.type, ["html", "inline", "ajax"]) > -1), "auto" === l.opts.toolbar && (l.opts.toolbar = !l.opts.smallBtn), l.$thumb = l.opts.$thumb || null, l.opts.$trigger && l.index === o.opts.index && (l.$thumb = l.opts.$trigger.find("img:first"), l.$thumb.length && (l.opts.$orig = l.opts.$trigger)), l.$thumb && l.$thumb.length || !l.opts.$orig || (l.$thumb = l.opts.$orig.find("img:first")), l.$thumb && !l.$thumb.length && (l.$thumb = null), l.thumb = l.opts.thumb || (l.$thumb ? l.$thumb[0].src : null), "function" === n.type(l.opts.caption) && (l.opts.caption = l.opts.caption.apply(e, [o, l])), "function" === n.type(o.opts.caption) && (l.opts.caption = o.opts.caption.apply(e, [o, l])), l.opts.caption instanceof n || (l.opts.caption = void 0 === l.opts.caption ? "" : l.opts.caption + ""), "ajax" === l.type && (c = r.split(/\s+/, 2), c.length > 1 && (l.src = c.shift(), l.opts.filter = c.shift())), l.opts.modal && (l.opts = n.extend(!0, l.opts, {
                        trapFocus: !0,
                        infobar: 0,
                        toolbar: 0,
                        smallBtn: 0,
                        keyboard: 0,
                        slideShow: 0,
                        fullScreen: 0,
                        thumbs: 0,
                        touch: 0,
                        clickContent: !1,
                        clickSlide: !1,
                        clickOutside: !1,
                        dblclickContent: !1,
                        dblclickSlide: !1,
                        dblclickOutside: !1
                    })), o.group.push(l)
                }), Object.keys(o.slides).length && (o.updateControls(), (e = o.Thumbs) && e.isActive && (e.create(), e.focus()))
            }, addEvents: function () {
                var e = this;
                e.removeEvents(), e.$refs.container.on("click.fb-close", "[data-fancybox-close]", function (t) {
                    t.stopPropagation(), t.preventDefault(), e.close(t)
                }).on("touchstart.fb-prev click.fb-prev", "[data-fancybox-prev]", function (t) {
                    t.stopPropagation(), t.preventDefault(), e.previous()
                }).on("touchstart.fb-next click.fb-next", "[data-fancybox-next]", function (t) {
                    t.stopPropagation(), t.preventDefault(), e.next()
                }).on("click.fb", "[data-fancybox-zoom]", function (t) {
                    e[e.isScaledDown() ? "scaleToActual" : "scaleToFit"]()
                }), s.on("orientationchange.fb resize.fb", function (t) {
                    t && t.originalEvent && "resize" === t.originalEvent.type ? (e.requestId && u(e.requestId), e.requestId = d(function () {
                        e.update(t)
                    })) : (e.current && "iframe" === e.current.type && e.$refs.stage.hide(), setTimeout(function () {
                        e.$refs.stage.show(), e.update(t)
                    }, n.fancybox.isMobile ? 600 : 250))
                }), r.on("keydown.fb", function (t) {
                    var o = n.fancybox ? n.fancybox.getInstance() : null, i = o.current, a = t.keyCode || t.which;
                    if (9 == a) return void (i.opts.trapFocus && e.focus(t));
                    if (!(!i.opts.keyboard || t.ctrlKey || t.altKey || t.shiftKey || n(t.target).is("input,textarea,video,audio,select"))) return 8 === a || 27 === a ? (t.preventDefault(), void e.close(t)) : 37 === a || 38 === a ? (t.preventDefault(), void e.previous()) : 39 === a || 40 === a ? (t.preventDefault(), void e.next()) : void e.trigger("afterKeydown", t, a)
                }), e.group[e.currIndex].opts.idleTime && (e.idleSecondsCounter = 0, r.on("mousemove.fb-idle mouseleave.fb-idle mousedown.fb-idle touchstart.fb-idle touchmove.fb-idle scroll.fb-idle keydown.fb-idle", function (t) {
                    e.idleSecondsCounter = 0, e.isIdle && e.showControls(), e.isIdle = !1
                }), e.idleInterval = t.setInterval(function () {
                    ++e.idleSecondsCounter >= e.group[e.currIndex].opts.idleTime && !e.isDragging && (e.isIdle = !0, e.idleSecondsCounter = 0, e.hideControls())
                }, 1e3))
            }, removeEvents: function () {
                var e = this;
                s.off("orientationchange.fb resize.fb"), r.off("keydown.fb .fb-idle"), this.$refs.container.off(".fb-close .fb-prev .fb-next"), e.idleInterval && (t.clearInterval(e.idleInterval), e.idleInterval = null)
            }, previous: function (t) {
                return this.jumpTo(this.currPos - 1, t)
            }, next: function (t) {
                return this.jumpTo(this.currPos + 1, t)
            }, jumpTo: function (t, e) {
                var o, i, a, s, r, c, l, d, u, f = this, h = f.group.length;
                if (!(f.isDragging || f.isClosing || f.isAnimating && f.firstRun)) {
                    if (t = parseInt(t, 10), !(a = f.current ? f.current.opts.loop : f.opts.loop) && (t < 0 || t >= h)) return !1;
                    if (o = f.firstRun = !Object.keys(f.slides).length, r = f.current, f.prevIndex = f.currIndex, f.prevPos = f.currPos, s = f.createSlide(t), h > 1 && ((a || s.index < h - 1) && f.createSlide(t + 1), (a || s.index > 0) && f.createSlide(t - 1)), f.current = s, f.currIndex = s.index, f.currPos = s.pos, f.trigger("beforeShow", o), f.updateControls(), s.forcedDuration = void 0, n.isNumeric(e) ? s.forcedDuration = e : e = s.opts[o ? "animationDuration" : "transitionDuration"], e = parseInt(e, 10), i = f.isMoved(s), s.$slide.addClass("fancybox-slide--current"), o) return s.opts.animationEffect && e && f.$refs.container.css("transition-duration", e + "ms"), f.$refs.container.addClass("fancybox-is-open").trigger("focus"), f.loadSlide(s), void f.preload("image");
                    c = n.fancybox.getTranslate(r.$slide), l = n.fancybox.getTranslate(f.$refs.stage), n.each(f.slides, function (t, e) {
                        n.fancybox.stop(e.$slide, !0)
                    }), r.pos !== s.pos && (r.isComplete = !1), r.$slide.removeClass("fancybox-slide--complete fancybox-slide--current"), i ? (u = c.left - (r.pos * c.width + r.pos * r.opts.gutter), n.each(f.slides, function (t, o) {
                        o.$slide.removeClass("fancybox-animated").removeClass(function (t, e) {
                            return (e.match(/(^|\s)fancybox-fx-\S+/g) || []).join(" ")
                        });
                        var i = o.pos * c.width + o.pos * o.opts.gutter;
                        n.fancybox.setTranslate(o.$slide, {
                            top: 0,
                            left: i - l.left + u
                        }), o.pos !== s.pos && o.$slide.addClass("fancybox-slide--" + (o.pos > s.pos ? "next" : "previous")), p(o.$slide), n.fancybox.animate(o.$slide, {
                            top: 0,
                            left: (o.pos - s.pos) * c.width + (o.pos - s.pos) * o.opts.gutter
                        }, e, function () {
                            o.$slide.css({
                                transform: "",
                                opacity: ""
                            }).removeClass("fancybox-slide--next fancybox-slide--previous"), o.pos === f.currPos && f.complete()
                        })
                    })) : e && s.opts.transitionEffect && (d = "fancybox-animated fancybox-fx-" + s.opts.transitionEffect, r.$slide.addClass("fancybox-slide--" + (r.pos > s.pos ? "next" : "previous")), n.fancybox.animate(r.$slide, d, e, function () {
                        r.$slide.removeClass(d).removeClass("fancybox-slide--next fancybox-slide--previous")
                    }, !1)), s.isLoaded ? f.revealContent(s) : f.loadSlide(s), f.preload("image")
                }
            }, createSlide: function (t) {
                var e, o, i = this;
                return o = t % i.group.length, o = o < 0 ? i.group.length + o : o, !i.slides[t] && i.group[o] && (e = n('<div class="fancybox-slide"></div>').appendTo(i.$refs.stage), i.slides[t] = n.extend(!0, {}, i.group[o], {
                    pos: t,
                    $slide: e,
                    isLoaded: !1
                }), i.updateSlide(i.slides[t])), i.slides[t]
            }, scaleToActual: function (t, e, o) {
                var i, a, s, r, c, l = this, d = l.current, u = d.$content, f = n.fancybox.getTranslate(d.$slide).width,
                    p = n.fancybox.getTranslate(d.$slide).height, h = d.width, g = d.height;
                l.isAnimating || l.isMoved() || !u || "image" != d.type || !d.isLoaded || d.hasError || (l.isAnimating = !0, n.fancybox.stop(u), t = void 0 === t ? .5 * f : t, e = void 0 === e ? .5 * p : e, i = n.fancybox.getTranslate(u), i.top -= n.fancybox.getTranslate(d.$slide).top, i.left -= n.fancybox.getTranslate(d.$slide).left, r = h / i.width, c = g / i.height, a = .5 * f - .5 * h, s = .5 * p - .5 * g, h > f && (a = i.left * r - (t * r - t), a > 0 && (a = 0), a < f - h && (a = f - h)), g > p && (s = i.top * c - (e * c - e), s > 0 && (s = 0), s < p - g && (s = p - g)), l.updateCursor(h, g), n.fancybox.animate(u, {
                    top: s,
                    left: a,
                    scaleX: r,
                    scaleY: c
                }, o || 366, function () {
                    l.isAnimating = !1
                }), l.SlideShow && l.SlideShow.isActive && l.SlideShow.stop())
            }, scaleToFit: function (t) {
                var e, o = this, i = o.current, a = i.$content;
                o.isAnimating || o.isMoved() || !a || "image" != i.type || !i.isLoaded || i.hasError || (o.isAnimating = !0, n.fancybox.stop(a), e = o.getFitPos(i), o.updateCursor(e.width, e.height), n.fancybox.animate(a, {
                    top: e.top,
                    left: e.left,
                    scaleX: e.width / a.width(),
                    scaleY: e.height / a.height()
                }, t || 366, function () {
                    o.isAnimating = !1
                }))
            }, getFitPos: function (t) {
                var e, o, i, a, s = this, r = t.$content, c = t.$slide, l = t.width || t.opts.width,
                    d = t.height || t.opts.height, u = {};
                return !!(t.isLoaded && r && r.length) && (e = n.fancybox.getTranslate(s.$refs.stage).width, o = n.fancybox.getTranslate(s.$refs.stage).height, e -= parseFloat(c.css("paddingLeft")) + parseFloat(c.css("paddingRight")) + parseFloat(r.css("marginLeft")) + parseFloat(r.css("marginRight")), o -= parseFloat(c.css("paddingTop")) + parseFloat(c.css("paddingBottom")) + parseFloat(r.css("marginTop")) + parseFloat(r.css("marginBottom")), l && d || (l = e, d = o), i = Math.min(1, e / l, o / d), l *= i, d *= i, l > e - .5 && (l = e), d > o - .5 && (d = o), "image" === t.type ? (u.top = Math.floor(.5 * (o - d)) + parseFloat(c.css("paddingTop")), u.left = Math.floor(.5 * (e - l)) + parseFloat(c.css("paddingLeft"))) : "video" === t.contentType && (a = t.opts.width && t.opts.height ? l / d : t.opts.ratio || 16 / 9, d > l / a ? d = l / a : l > d * a && (l = d * a)), u.width = l, u.height = d, u)
            }, update: function (t) {
                var e = this;
                n.each(e.slides, function (n, o) {
                    e.updateSlide(o, t)
                })
            }, updateSlide: function (t, e) {
                var o = this, i = t && t.$content, a = t.width || t.opts.width, s = t.height || t.opts.height,
                    r = t.$slide;
                o.adjustCaption(t), i && (a || s || "video" === t.contentType) && !t.hasError && (n.fancybox.stop(i), n.fancybox.setTranslate(i, o.getFitPos(t)), t.pos === o.currPos && (o.isAnimating = !1, o.updateCursor())), o.adjustLayout(t), r.length && (r.trigger("refresh"), t.pos === o.currPos && o.$refs.toolbar.add(o.$refs.navigation.find(".fancybox-button--arrow_right")).toggleClass("compensate-for-scrollbar", r.get(0).scrollHeight > r.get(0).clientHeight)), o.trigger("onUpdate", t, e)
            }, centerSlide: function (t) {
                var e = this, o = e.current, i = o.$slide;
                !e.isClosing && o && (i.siblings().css({
                    transform: "",
                    opacity: ""
                }), i.parent().children().removeClass("fancybox-slide--previous fancybox-slide--next"), n.fancybox.animate(i, {
                    top: 0,
                    left: 0,
                    opacity: 1
                }, void 0 === t ? 0 : t, function () {
                    i.css({transform: "", opacity: ""}), o.isComplete || e.complete()
                }, !1))
            }, isMoved: function (t) {
                var e, o, i = t || this.current;
                return !!i && (o = n.fancybox.getTranslate(this.$refs.stage), e = n.fancybox.getTranslate(i.$slide), !i.$slide.hasClass("fancybox-animated") && (Math.abs(e.top - o.top) > .5 || Math.abs(e.left - o.left) > .5))
            }, updateCursor: function (t, e) {
                var o, i, a = this, s = a.current, r = a.$refs.container;
                s && !a.isClosing && a.Guestures && (r.removeClass("fancybox-is-zoomable fancybox-can-zoomIn fancybox-can-zoomOut fancybox-can-swipe fancybox-can-pan"), o = a.canPan(t, e), i = !!o || a.isZoomable(), r.toggleClass("fancybox-is-zoomable", i), n("[data-fancybox-zoom]").prop("disabled", !i), o ? r.addClass("fancybox-can-pan") : i && ("zoom" === s.opts.clickContent || n.isFunction(s.opts.clickContent) && "zoom" == s.opts.clickContent(s)) ? r.addClass("fancybox-can-zoomIn") : s.opts.touch && (s.opts.touch.vertical || a.group.length > 1) && "video" !== s.contentType && r.addClass("fancybox-can-swipe"))
            }, isZoomable: function () {
                var t, e = this, n = e.current;
                if (n && !e.isClosing && "image" === n.type && !n.hasError) {
                    if (!n.isLoaded) return !0;
                    if ((t = e.getFitPos(n)) && (n.width > t.width || n.height > t.height)) return !0
                }
                return !1
            }, isScaledDown: function (t, e) {
                var o = this, i = !1, a = o.current, s = a.$content;
                return void 0 !== t && void 0 !== e ? i = t < a.width && e < a.height : s && (i = n.fancybox.getTranslate(s), i = i.width < a.width && i.height < a.height), i
            }, canPan: function (t, e) {
                var o = this, i = o.current, a = null, s = !1;
                return "image" === i.type && (i.isComplete || t && e) && !i.hasError && (s = o.getFitPos(i), void 0 !== t && void 0 !== e ? a = {
                    width: t,
                    height: e
                } : i.isComplete && (a = n.fancybox.getTranslate(i.$content)), a && s && (s = Math.abs(a.width - s.width) > 1.5 || Math.abs(a.height - s.height) > 1.5)), s
            }, loadSlide: function (t) {
                var e, o, i, a = this;
                if (!t.isLoading && !t.isLoaded) {
                    if (t.isLoading = !0, !1 === a.trigger("beforeLoad", t)) return t.isLoading = !1, !1;
                    switch (e = t.type, o = t.$slide, o.off("refresh").trigger("onReset").addClass(t.opts.slideClass), e) {
                        case"image":
                            a.setImage(t);
                            break;
                        case"iframe":
                            a.setIframe(t);
                            break;
                        case"html":
                            a.setContent(t, t.src || t.content);
                            break;
                        case"video":
                            a.setContent(t, t.opts.video.tpl.replace(/\{\{src\}\}/gi, t.src).replace("{{format}}", t.opts.videoFormat || t.opts.video.format || "").replace("{{poster}}", t.thumb || ""));
                            break;
                        case"inline":
                            n(t.src).length ? a.setContent(t, n(t.src)) : a.setError(t);
                            break;
                        case"ajax":
                            a.showLoading(t), i = n.ajax(n.extend({}, t.opts.ajax.settings, {
                                url: t.src,
                                success: function (e, n) {
                                    "success" === n && a.setContent(t, e)
                                },
                                error: function (e, n) {
                                    e && "abort" !== n && a.setError(t)
                                }
                            })), o.one("onReset", function () {
                                i.abort()
                            });
                            break;
                        default:
                            a.setError(t)
                    }
                    return !0
                }
            }, setImage: function (t) {
                var o, i = this;
                setTimeout(function () {
                    var e = t.$image;
                    i.isClosing || !t.isLoading || e && e.length && e[0].complete || t.hasError || i.showLoading(t)
                }, 50), i.checkSrcset(t), t.$content = n('<div class="fancybox-content"></div>').addClass("fancybox-is-hidden").appendTo(t.$slide.addClass("fancybox-slide--image")), !1 !== t.opts.preload && t.opts.width && t.opts.height && t.thumb && (t.width = t.opts.width, t.height = t.opts.height, o = e.createElement("img"), o.onerror = function () {
                    n(this).remove(), t.$ghost = null
                }, o.onload = function () {
                    i.afterLoad(t)
                }, t.$ghost = n(o).addClass("fancybox-image").appendTo(t.$content).attr("src", t.thumb)), i.setBigImage(t)
            }, checkSrcset: function (e) {
                var n, o, i, a, s = e.opts.srcset || e.opts.image.srcset;
                if (s) {
                    i = t.devicePixelRatio || 1, a = t.innerWidth * i, o = s.split(",").map(function (t) {
                        var e = {};
                        return t.trim().split(/\s+/).forEach(function (t, n) {
                            var o = parseInt(t.substring(0, t.length - 1), 10);
                            if (0 === n) return e.url = t;
                            o && (e.value = o, e.postfix = t[t.length - 1])
                        }), e
                    }), o.sort(function (t, e) {
                        return t.value - e.value
                    });
                    for (var r = 0; r < o.length; r++) {
                        var c = o[r];
                        if ("w" === c.postfix && c.value >= a || "x" === c.postfix && c.value >= i) {
                            n = c;
                            break
                        }
                    }
                    !n && o.length && (n = o[o.length - 1]), n && (e.src = n.url, e.width && e.height && "w" == n.postfix && (e.height = e.width / e.height * n.value, e.width = n.value), e.opts.srcset = s)
                }
            }, setBigImage: function (t) {
                var o = this, i = e.createElement("img"), a = n(i);
                t.$image = a.one("error", function () {
                    o.setError(t)
                }).one("load", function () {
                    var e;
                    t.$ghost || (o.resolveImageSlideSize(t, this.naturalWidth, this.naturalHeight), o.afterLoad(t)), o.isClosing || (t.opts.srcset && (e = t.opts.sizes, e && "auto" !== e || (e = (t.width / t.height > 1 && s.width() / s.height() > 1 ? "100" : Math.round(t.width / t.height * 100)) + "vw"), a.attr("sizes", e).attr("srcset", t.opts.srcset)), t.$ghost && setTimeout(function () {
                        t.$ghost && !o.isClosing && t.$ghost.hide()
                    }, Math.min(300, Math.max(1e3, t.height / 1600))), o.hideLoading(t))
                }).addClass("fancybox-image").attr("src", t.src).appendTo(t.$content), (i.complete || "complete" == i.readyState) && a.naturalWidth && a.naturalHeight ? a.trigger("load") : i.error && a.trigger("error")
            }, resolveImageSlideSize: function (t, e, n) {
                var o = parseInt(t.opts.width, 10), i = parseInt(t.opts.height, 10);
                t.width = e, t.height = n, o > 0 && (t.width = o, t.height = Math.floor(o * n / e)), i > 0 && (t.width = Math.floor(i * e / n), t.height = i)
            }, setIframe: function (t) {
                var e, o = this, i = t.opts.iframe, a = t.$slide;
                t.$content = n('<div class="fancybox-content' + (i.preload ? " fancybox-is-hidden" : "") + '"></div>').css(i.css).appendTo(a), a.addClass("fancybox-slide--" + t.contentType), t.$iframe = e = n(i.tpl.replace(/\{rnd\}/g, (new Date).getTime())).attr(i.attr).appendTo(t.$content), i.preload ? (o.showLoading(t), e.on("load.fb error.fb", function (e) {
                    this.isReady = 1, t.$slide.trigger("refresh"), o.afterLoad(t)
                }), a.on("refresh.fb", function () {
                    var n, o, s = t.$content, r = i.css.width, c = i.css.height;
                    if (1 === e[0].isReady) {
                        try {
                            n = e.contents(), o = n.find("body")
                        } catch (t) {
                        }
                        o && o.length && o.children().length && (a.css("overflow", "visible"), s.css({
                            width: "100%",
                            "max-width": "100%",
                            height: "9999px"
                        }), void 0 === r && (r = Math.ceil(Math.max(o[0].clientWidth, o.outerWidth(!0)))), s.css("width", r || "").css("max-width", ""), void 0 === c && (c = Math.ceil(Math.max(o[0].clientHeight, o.outerHeight(!0)))), s.css("height", c || ""), a.css("overflow", "auto")), s.removeClass("fancybox-is-hidden")
                    }
                })) : o.afterLoad(t), e.attr("src", t.src), a.one("onReset", function () {
                    try {
                        n(this).find("iframe").hide().unbind().attr("src", "//about:blank")
                    } catch (t) {
                    }
                    n(this).off("refresh.fb").empty(), t.isLoaded = !1, t.isRevealed = !1
                })
            }, setContent: function (t, e) {
                var o = this;
                o.isClosing || (o.hideLoading(t), t.$content && n.fancybox.stop(t.$content), t.$slide.empty(), l(e) && e.parent().length ? ((e.hasClass("fancybox-content") || e.parent().hasClass("fancybox-content")) && e.parents(".fancybox-slide").trigger("onReset"), t.$placeholder = n("<div>").hide().insertAfter(e), e.css("display", "inline-block")) : t.hasError || ("string" === n.type(e) && (e = n("<div>").append(n.trim(e)).contents()), t.opts.filter && (e = n("<div>").html(e).find(t.opts.filter))), t.$slide.one("onReset", function () {
                    n(this).find("video,audio").trigger("pause"), t.$placeholder && (t.$placeholder.after(e.removeClass("fancybox-content").hide()).remove(), t.$placeholder = null), t.$smallBtn && (t.$smallBtn.remove(), t.$smallBtn = null), t.hasError || (n(this).empty(), t.isLoaded = !1, t.isRevealed = !1)
                }), n(e).appendTo(t.$slide), n(e).is("video,audio") && (n(e).addClass("fancybox-video"), n(e).wrap("<div></div>"), t.contentType = "video", t.opts.width = t.opts.width || n(e).attr("width"), t.opts.height = t.opts.height || n(e).attr("height")), t.$content = t.$slide.children().filter("div,form,main,video,audio,article,.fancybox-content").first(), t.$content.siblings().hide(), t.$content.length || (t.$content = t.$slide.wrapInner("<div></div>").children().first()), t.$content.addClass("fancybox-content"), t.$slide.addClass("fancybox-slide--" + t.contentType), o.afterLoad(t))
            }, setError: function (t) {
                t.hasError = !0, t.$slide.trigger("onReset").removeClass("fancybox-slide--" + t.contentType).addClass("fancybox-slide--error"), t.contentType = "html", this.setContent(t, this.translate(t, t.opts.errorTpl)), t.pos === this.currPos && (this.isAnimating = !1)
            }, showLoading: function (t) {
                var e = this;
                (t = t || e.current) && !t.$spinner && (t.$spinner = n(e.translate(e, e.opts.spinnerTpl)).appendTo(t.$slide).hide().fadeIn("fast"))
            }, hideLoading: function (t) {
                var e = this;
                (t = t || e.current) && t.$spinner && (t.$spinner.stop().remove(), delete t.$spinner)
            }, afterLoad: function (t) {
                var e = this;
                e.isClosing || (t.isLoading = !1, t.isLoaded = !0, e.trigger("afterLoad", t), e.hideLoading(t), !t.opts.smallBtn || t.$smallBtn && t.$smallBtn.length || (t.$smallBtn = n(e.translate(t, t.opts.btnTpl.smallBtn)).appendTo(t.$content)), t.opts.protect && t.$content && !t.hasError && (t.$content.on("contextmenu.fb", function (t) {
                    return 2 == t.button && t.preventDefault(), !0
                }), "image" === t.type && n('<div class="fancybox-spaceball"></div>').appendTo(t.$content)), e.adjustCaption(t), e.adjustLayout(t), t.pos === e.currPos && e.updateCursor(), e.revealContent(t))
            }, adjustCaption: function (t) {
                var e, n = this, o = t || n.current, i = o.opts.caption, a = o.opts.preventCaptionOverlap,
                    s = n.$refs.caption, r = !1;
                s.toggleClass("fancybox-caption--separate", a), a && i && i.length && (o.pos !== n.currPos ? (e = s.clone().appendTo(s.parent()), e.children().eq(0).empty().html(i), r = e.outerHeight(!0), e.empty().remove()) : n.$caption && (r = n.$caption.outerHeight(!0)), o.$slide.css("padding-bottom", r || ""))
            }, adjustLayout: function (t) {
                var e, n, o, i, a = this, s = t || a.current;
                s.isLoaded && !0 !== s.opts.disableLayoutFix && (s.$content.css("margin-bottom", ""), s.$content.outerHeight() > s.$slide.height() + .5 && (o = s.$slide[0].style["padding-bottom"], i = s.$slide.css("padding-bottom"), parseFloat(i) > 0 && (e = s.$slide[0].scrollHeight, s.$slide.css("padding-bottom", 0), Math.abs(e - s.$slide[0].scrollHeight) < 1 && (n = i), s.$slide.css("padding-bottom", o))), s.$content.css("margin-bottom", n))
            }, revealContent: function (t) {
                var e, o, i, a, s = this, r = t.$slide, c = !1, l = !1, d = s.isMoved(t), u = t.isRevealed;
                return t.isRevealed = !0, e = t.opts[s.firstRun ? "animationEffect" : "transitionEffect"], i = t.opts[s.firstRun ? "animationDuration" : "transitionDuration"], i = parseInt(void 0 === t.forcedDuration ? i : t.forcedDuration, 10), !d && t.pos === s.currPos && i || (e = !1), "zoom" === e && (t.pos === s.currPos && i && "image" === t.type && !t.hasError && (l = s.getThumbPos(t)) ? c = s.getFitPos(t) : e = "fade"), "zoom" === e ? (s.isAnimating = !0, c.scaleX = c.width / l.width, c.scaleY = c.height / l.height, a = t.opts.zoomOpacity, "auto" == a && (a = Math.abs(t.width / t.height - l.width / l.height) > .1), a && (l.opacity = .1, c.opacity = 1), n.fancybox.setTranslate(t.$content.removeClass("fancybox-is-hidden"), l), p(t.$content), void n.fancybox.animate(t.$content, c, i, function () {
                    s.isAnimating = !1, s.complete()
                })) : (s.updateSlide(t), e ? (n.fancybox.stop(r), o = "fancybox-slide--" + (t.pos >= s.prevPos ? "next" : "previous") + " fancybox-animated fancybox-fx-" + e, r.addClass(o).removeClass("fancybox-slide--current"), t.$content.removeClass("fancybox-is-hidden"), p(r), "image" !== t.type && t.$content.hide().show(0), void n.fancybox.animate(r, "fancybox-slide--current", i, function () {
                    r.removeClass(o).css({transform: "", opacity: ""}), t.pos === s.currPos && s.complete()
                }, !0)) : (t.$content.removeClass("fancybox-is-hidden"), u || !d || "image" !== t.type || t.hasError || t.$content.hide().fadeIn("fast"), void (t.pos === s.currPos && s.complete())))
            }, getThumbPos: function (t) {
                var e, o, i, a, s, r = !1, c = t.$thumb;
                return !(!c || !g(c[0])) && (e = n.fancybox.getTranslate(c), o = parseFloat(c.css("border-top-width") || 0), i = parseFloat(c.css("border-right-width") || 0), a = parseFloat(c.css("border-bottom-width") || 0), s = parseFloat(c.css("border-left-width") || 0), r = {
                    top: e.top + o,
                    left: e.left + s,
                    width: e.width - i - s,
                    height: e.height - o - a,
                    scaleX: 1,
                    scaleY: 1
                }, e.width > 0 && e.height > 0 && r)
            }, complete: function () {
                var t, e = this, o = e.current, i = {};
                !e.isMoved() && o.isLoaded && (o.isComplete || (o.isComplete = !0, o.$slide.siblings().trigger("onReset"), e.preload("inline"), p(o.$slide), o.$slide.addClass("fancybox-slide--complete"), n.each(e.slides, function (t, o) {
                    o.pos >= e.currPos - 1 && o.pos <= e.currPos + 1 ? i[o.pos] = o : o && (n.fancybox.stop(o.$slide), o.$slide.off().remove())
                }), e.slides = i), e.isAnimating = !1, e.updateCursor(), e.trigger("afterShow"), o.opts.video.autoStart && o.$slide.find("video,audio").filter(":visible:first").trigger("play").one("ended", function () {
                    Document.exitFullscreen ? Document.exitFullscreen() : this.webkitExitFullscreen && this.webkitExitFullscreen(), e.next()
                }), o.opts.autoFocus && "html" === o.contentType && (t = o.$content.find("input[autofocus]:enabled:visible:first"), t.length ? t.trigger("focus") : e.focus(null, !0)), o.$slide.scrollTop(0).scrollLeft(0))
            }, preload: function (t) {
                var e, n, o = this;
                o.group.length < 2 || (n = o.slides[o.currPos + 1], e = o.slides[o.currPos - 1], e && e.type === t && o.loadSlide(e), n && n.type === t && o.loadSlide(n))
            }, focus: function (t, o) {
                var i, a, s = this,
                    r = ["a[href]", "area[href]", 'input:not([disabled]):not([type="hidden"]):not([aria-hidden])', "select:not([disabled]):not([aria-hidden])", "textarea:not([disabled]):not([aria-hidden])", "button:not([disabled]):not([aria-hidden])", "iframe", "object", "embed", "video", "audio", "[contenteditable]", '[tabindex]:not([tabindex^="-"])'].join(",");
                s.isClosing || (i = !t && s.current && s.current.isComplete ? s.current.$slide.find("*:visible" + (o ? ":not(.fancybox-close-small)" : "")) : s.$refs.container.find("*:visible"), i = i.filter(r).filter(function () {
                    return "hidden" !== n(this).css("visibility") && !n(this).hasClass("disabled")
                }), i.length ? (a = i.index(e.activeElement), t && t.shiftKey ? (a < 0 || 0 == a) && (t.preventDefault(), i.eq(i.length - 1).trigger("focus")) : (a < 0 || a == i.length - 1) && (t && t.preventDefault(), i.eq(0).trigger("focus"))) : s.$refs.container.trigger("focus"))
            }, activate: function () {
                var t = this;
                n(".fancybox-container").each(function () {
                    var e = n(this).data("FancyBox");
                    e && e.id !== t.id && !e.isClosing && (e.trigger("onDeactivate"), e.removeEvents(), e.isVisible = !1)
                }), t.isVisible = !0, (t.current || t.isIdle) && (t.update(), t.updateControls()), t.trigger("onActivate"), t.addEvents()
            }, close: function (t, e) {
                var o, i, a, s, r, c, l, u = this, f = u.current, h = function () {
                    u.cleanUp(t)
                };
                return !u.isClosing && (u.isClosing = !0, !1 === u.trigger("beforeClose", t) ? (u.isClosing = !1, d(function () {
                    u.update()
                }), !1) : (u.removeEvents(), a = f.$content, o = f.opts.animationEffect, i = n.isNumeric(e) ? e : o ? f.opts.animationDuration : 0, f.$slide.removeClass("fancybox-slide--complete fancybox-slide--next fancybox-slide--previous fancybox-animated"), !0 !== t ? n.fancybox.stop(f.$slide) : o = !1, f.$slide.siblings().trigger("onReset").remove(), i && u.$refs.container.removeClass("fancybox-is-open").addClass("fancybox-is-closing").css("transition-duration", i + "ms"), u.hideLoading(f), u.hideControls(!0), u.updateCursor(), "zoom" !== o || a && i && "image" === f.type && !u.isMoved() && !f.hasError && (l = u.getThumbPos(f)) || (o = "fade"), "zoom" === o ? (n.fancybox.stop(a), s = n.fancybox.getTranslate(a), c = {
                    top: s.top,
                    left: s.left,
                    scaleX: s.width / l.width,
                    scaleY: s.height / l.height,
                    width: l.width,
                    height: l.height
                }, r = f.opts.zoomOpacity,
                "auto" == r && (r = Math.abs(f.width / f.height - l.width / l.height) > .1), r && (l.opacity = 0), n.fancybox.setTranslate(a, c), p(a), n.fancybox.animate(a, l, i, h), !0) : (o && i ? n.fancybox.animate(f.$slide.addClass("fancybox-slide--previous").removeClass("fancybox-slide--current"), "fancybox-animated fancybox-fx-" + o, i, h) : !0 === t ? setTimeout(h, i) : h(), !0)))
            }, cleanUp: function (e) {
                var o, i, a, s = this, r = s.current.opts.$orig;
                s.current.$slide.trigger("onReset"), s.$refs.container.empty().remove(), s.trigger("afterClose", e), s.current.opts.backFocus && (r && r.length && r.is(":visible") || (r = s.$trigger), r && r.length && (i = t.scrollX, a = t.scrollY, r.trigger("focus"), n("html, body").scrollTop(a).scrollLeft(i))), s.current = null, o = n.fancybox.getInstance(), o ? o.activate() : (n("body").removeClass("fancybox-active compensate-for-scrollbar"), n("#fancybox-style-noscroll").remove())
            }, trigger: function (t, e) {
                var o, i = Array.prototype.slice.call(arguments, 1), a = this, s = e && e.opts ? e : a.current;
                if (s ? i.unshift(s) : s = a, i.unshift(a), n.isFunction(s.opts[t]) && (o = s.opts[t].apply(s, i)), !1 === o) return o;
                "afterClose" !== t && a.$refs ? a.$refs.container.trigger(t + ".fb", i) : r.trigger(t + ".fb", i)
            }, updateControls: function () {
                var t = this, o = t.current, i = o.index, a = t.$refs.container, s = t.$refs.caption,
                    r = o.opts.caption;
                o.$slide.trigger("refresh"), r && r.length ? (t.$caption = s, s.children().eq(0).html(r)) : t.$caption = null, t.hasHiddenControls || t.isIdle || t.showControls(), a.find("[data-fancybox-count]").html(t.group.length), a.find("[data-fancybox-index]").html(i + 1), a.find("[data-fancybox-prev]").prop("disabled", !o.opts.loop && i <= 0), a.find("[data-fancybox-next]").prop("disabled", !o.opts.loop && i >= t.group.length - 1), "image" === o.type ? a.find("[data-fancybox-zoom]").show().end().find("[data-fancybox-download]").attr("href", o.opts.image.src || o.src).show() : o.opts.toolbar && a.find("[data-fancybox-download],[data-fancybox-zoom]").hide(), n(e.activeElement).is(":hidden,[disabled]") && t.$refs.container.trigger("focus")
            }, hideControls: function (t) {
                var e = this, n = ["infobar", "toolbar", "nav"];
                !t && e.current.opts.preventCaptionOverlap || n.push("caption"), this.$refs.container.removeClass(n.map(function (t) {
                    return "fancybox-show-" + t
                }).join(" ")), this.hasHiddenControls = !0
            }, showControls: function () {
                var t = this, e = t.current ? t.current.opts : t.opts, n = t.$refs.container;
                t.hasHiddenControls = !1, t.idleSecondsCounter = 0, n.toggleClass("fancybox-show-toolbar", !(!e.toolbar || !e.buttons)).toggleClass("fancybox-show-infobar", !!(e.infobar && t.group.length > 1)).toggleClass("fancybox-show-caption", !!t.$caption).toggleClass("fancybox-show-nav", !!(e.arrows && t.group.length > 1)).toggleClass("fancybox-is-modal", !!e.modal)
            }, toggleControls: function () {
                this.hasHiddenControls ? this.showControls() : this.hideControls()
            }
        }), n.fancybox = {
            version: "3.5.7",
            defaults: a,
            getInstance: function (t) {
                var e = n('.fancybox-container:not(".fancybox-is-closing"):last').data("FancyBox"),
                    o = Array.prototype.slice.call(arguments, 1);
                return e instanceof b && ("string" === n.type(t) ? e[t].apply(e, o) : "function" === n.type(t) && t.apply(e, o), e)
            },
            open: function (t, e, n) {
                return new b(t, e, n)
            },
            close: function (t) {
                var e = this.getInstance();
                e && (e.close(), !0 === t && this.close(t))
            },
            destroy: function () {
                this.close(!0), r.add("body").off("click.fb-start", "**")
            },
            isMobile: /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent),
            use3d: function () {
                var n = e.createElement("div");
                return t.getComputedStyle && t.getComputedStyle(n) && t.getComputedStyle(n).getPropertyValue("transform") && !(e.documentMode && e.documentMode < 11)
            }(),
            getTranslate: function (t) {
                var e;
                return !(!t || !t.length) && (e = t[0].getBoundingClientRect(), {
                    top: e.top || 0,
                    left: e.left || 0,
                    width: e.width,
                    height: e.height,
                    opacity: parseFloat(t.css("opacity"))
                })
            },
            setTranslate: function (t, e) {
                var n = "", o = {};
                if (t && e) return void 0 === e.left && void 0 === e.top || (n = (void 0 === e.left ? t.position().left : e.left) + "px, " + (void 0 === e.top ? t.position().top : e.top) + "px", n = this.use3d ? "translate3d(" + n + ", 0px)" : "translate(" + n + ")"), void 0 !== e.scaleX && void 0 !== e.scaleY ? n += " scale(" + e.scaleX + ", " + e.scaleY + ")" : void 0 !== e.scaleX && (n += " scaleX(" + e.scaleX + ")"), n.length && (o.transform = n), void 0 !== e.opacity && (o.opacity = e.opacity), void 0 !== e.width && (o.width = e.width), void 0 !== e.height && (o.height = e.height), t.css(o)
            },
            animate: function (t, e, o, i, a) {
                var s, r = this;
                n.isFunction(o) && (i = o, o = null), r.stop(t), s = r.getTranslate(t), t.on(f, function (c) {
                    (!c || !c.originalEvent || t.is(c.originalEvent.target) && "z-index" != c.originalEvent.propertyName) && (r.stop(t), n.isNumeric(o) && t.css("transition-duration", ""), n.isPlainObject(e) ? void 0 !== e.scaleX && void 0 !== e.scaleY && r.setTranslate(t, {
                        top: e.top,
                        left: e.left,
                        width: s.width * e.scaleX,
                        height: s.height * e.scaleY,
                        scaleX: 1,
                        scaleY: 1
                    }) : !0 !== a && t.removeClass(e), n.isFunction(i) && i(c))
                }), n.isNumeric(o) && t.css("transition-duration", o + "ms"), n.isPlainObject(e) ? (void 0 !== e.scaleX && void 0 !== e.scaleY && (delete e.width, delete e.height, t.parent().hasClass("fancybox-slide--image") && t.parent().addClass("fancybox-is-scaling")), n.fancybox.setTranslate(t, e)) : t.addClass(e), t.data("timer", setTimeout(function () {
                    t.trigger(f)
                }, o + 33))
            },
            stop: function (t, e) {
                t && t.length && (clearTimeout(t.data("timer")), e && t.trigger(f), t.off(f).css("transition-duration", ""), t.parent().removeClass("fancybox-is-scaling"))
            }
        }, n.fn.fancybox = function (t) {
            var e;
            return t = t || {}, e = t.selector || !1, e ? n("body").off("click.fb-start", e).on("click.fb-start", e, {options: t}, i) : this.off("click.fb-start").on("click.fb-start", {
                items: this,
                options: t
            }, i), this
        }, r.on("click.fb-start", "[data-fancybox]", i), r.on("click.fb-start", "[data-fancybox-trigger]", function (t) {
            n('[data-fancybox="' + n(this).attr("data-fancybox-trigger") + '"]').eq(n(this).attr("data-fancybox-index") || 0).trigger("click.fb-start", {$trigger: n(this)})
        }), function () {
            var t = null;
            r.on("mousedown mouseup focus blur", ".fancybox-button", function (e) {
                switch (e.type) {
                    case"mousedown":
                        t = n(this);
                        break;
                    case"mouseup":
                        t = null;
                        break;
                    case"focusin":
                        n(".fancybox-button").removeClass("fancybox-focus"), n(this).is(t) || n(this).is("[disabled]") || n(this).addClass("fancybox-focus");
                        break;
                    case"focusout":
                        n(".fancybox-button").removeClass("fancybox-focus")
                }
            })
        }()
    }
}(window, document, jQuery), function (t) {
    "use strict";
    var e = {
        youtube: {
            matcher: /(youtube\.com|youtu\.be|youtube\-nocookie\.com)\/(watch\?(.*&)?v=|v\/|u\/|embed\/?)?(videoseries\?list=(.*)|[\w-]{11}|\?listType=(.*)&list=(.*))(.*)/i,
            params: {autoplay: 1, autohide: 1, fs: 1, rel: 0, hd: 1, wmode: "transparent", enablejsapi: 1, html5: 1},
            paramPlace: 8,
            type: "iframe",
            url: "https://www.youtube-nocookie.com/embed/$4",
            thumb: "https://img.youtube.com/vi/$4/hqdefault.jpg"
        },
        vimeo: {
            matcher: /^.+vimeo.com\/(.*\/)?([\d]+)(.*)?/,
            params: {autoplay: 1, hd: 1, show_title: 1, show_byline: 1, show_portrait: 0, fullscreen: 1},
            paramPlace: 3,
            type: "iframe",
            url: "//player.vimeo.com/video/$2"
        },
        instagram: {
            matcher: /(instagr\.am|instagram\.com)\/p\/([a-zA-Z0-9_\-]+)\/?/i,
            type: "image",
            url: "//$1/p/$2/media/?size=l"
        },
        gmap_place: {
            matcher: /(maps\.)?google\.([a-z]{2,3}(\.[a-z]{2})?)\/(((maps\/(place\/(.*)\/)?\@(.*),(\d+.?\d+?)z))|(\?ll=))(.*)?/i,
            type: "iframe",
            url: function (t) {
                return "//maps.google." + t[2] + "/?ll=" + (t[9] ? t[9] + "&z=" + Math.floor(t[10]) + (t[12] ? t[12].replace(/^\//, "&") : "") : t[12] + "").replace(/\?/, "&") + "&output=" + (t[12] && t[12].indexOf("layer=c") > 0 ? "svembed" : "embed")
            }
        },
        gmap_search: {
            matcher: /(maps\.)?google\.([a-z]{2,3}(\.[a-z]{2})?)\/(maps\/search\/)(.*)/i,
            type: "iframe",
            url: function (t) {
                return "//maps.google." + t[2] + "/maps?q=" + t[5].replace("query=", "q=").replace("api=1", "") + "&output=embed"
            }
        }
    }, n = function (e, n, o) {
        if (e) return o = o || "", "object" === t.type(o) && (o = t.param(o, !0)), t.each(n, function (t, n) {
            e = e.replace("$" + t, n || "")
        }), o.length && (e += (e.indexOf("?") > 0 ? "&" : "?") + o), e
    };
    t(document).on("objectNeedsType.fb", function (o, i, a) {
        var s, r, c, l, d, u, f, p = a.src || "", h = !1;
        s = t.extend(!0, {}, e, a.opts.media), t.each(s, function (e, o) {
            if (c = p.match(o.matcher)) {
                if (h = o.type, f = e, u = {}, o.paramPlace && c[o.paramPlace]) {
                    d = c[o.paramPlace], "?" == d[0] && (d = d.substring(1)), d = d.split("&");
                    for (var i = 0; i < d.length; ++i) {
                        var s = d[i].split("=", 2);
                        2 == s.length && (u[s[0]] = decodeURIComponent(s[1].replace(/\+/g, " ")))
                    }
                }
                return l = t.extend(!0, {}, o.params, a.opts[e], u), p = "function" === t.type(o.url) ? o.url.call(this, c, l, a) : n(o.url, c, l), r = "function" === t.type(o.thumb) ? o.thumb.call(this, c, l, a) : n(o.thumb, c), "youtube" === e ? p = p.replace(/&t=((\d+)m)?(\d+)s/, function (t, e, n, o) {
                    return "&start=" + ((n ? 60 * parseInt(n, 10) : 0) + parseInt(o, 10))
                }) : "vimeo" === e && (p = p.replace("&%23", "#")), !1
            }
        }), h ? (a.opts.thumb || a.opts.$thumb && a.opts.$thumb.length || (a.opts.thumb = r), "iframe" === h && (a.opts = t.extend(!0, a.opts, {
            iframe: {
                preload: !1,
                attr: {scrolling: "no"}
            }
        })), t.extend(a, {
            type: h,
            src: p,
            origSrc: a.src,
            contentSource: f,
            contentType: "image" === h ? "image" : "gmap_place" == f || "gmap_search" == f ? "map" : "video"
        })) : p && (a.type = a.opts.defaultType)
    });
    var o = {
        youtube: {src: "https://www.youtube.com/iframe_api", class: "YT", loading: !1, loaded: !1},
        vimeo: {src: "https://player.vimeo.com/api/player.js", class: "Vimeo", loading: !1, loaded: !1},
        load: function (t) {
            var e, n = this;
            if (this[t].loaded) return void setTimeout(function () {
                n.done(t)
            });
            this[t].loading || (this[t].loading = !0, e = document.createElement("script"), e.type = "text/javascript", e.src = this[t].src, "youtube" === t ? window.onYouTubeIframeAPIReady = function () {
                n[t].loaded = !0, n.done(t)
            } : e.onload = function () {
                n[t].loaded = !0, n.done(t)
            }, document.body.appendChild(e))
        },
        done: function (e) {
            var n, o, i;
            "youtube" === e && delete window.onYouTubeIframeAPIReady, (n = t.fancybox.getInstance()) && (o = n.current.$content.find("iframe"), "youtube" === e && void 0 !== YT && YT ? i = new YT.Player(o.attr("id"), {
                events: {
                    onStateChange: function (t) {
                        0 == t.data && n.next()
                    }
                }
            }) : "vimeo" === e && void 0 !== Vimeo && Vimeo && (i = new Vimeo.Player(o), i.on("ended", function () {
                n.next()
            })))
        }
    };
    t(document).on({
        "afterShow.fb": function (t, e, n) {
            e.group.length > 1 && ("youtube" === n.contentSource || "vimeo" === n.contentSource) && o.load(n.contentSource)
        }
    })
}(jQuery), function (t, e, n) {
    "use strict";
    var o = function () {
        return t.requestAnimationFrame || t.webkitRequestAnimationFrame || t.mozRequestAnimationFrame || t.oRequestAnimationFrame || function (e) {
            return t.setTimeout(e, 1e3 / 60)
        }
    }(), i = function () {
        return t.cancelAnimationFrame || t.webkitCancelAnimationFrame || t.mozCancelAnimationFrame || t.oCancelAnimationFrame || function (e) {
            t.clearTimeout(e)
        }
    }(), a = function (e) {
        var n = [];
        e = e.originalEvent || e || t.e, e = e.touches && e.touches.length ? e.touches : e.changedTouches && e.changedTouches.length ? e.changedTouches : [e];
        for (var o in e) e[o].pageX ? n.push({x: e[o].pageX, y: e[o].pageY}) : e[o].clientX && n.push({
            x: e[o].clientX,
            y: e[o].clientY
        });
        return n
    }, s = function (t, e, n) {
        return e && t ? "x" === n ? t.x - e.x : "y" === n ? t.y - e.y : Math.sqrt(Math.pow(t.x - e.x, 2) + Math.pow(t.y - e.y, 2)) : 0
    }, r = function (t) {
        if (t.is('a,area,button,[role="button"],input,label,select,summary,textarea,video,audio,iframe') || n.isFunction(t.get(0).onclick) || t.data("selectable")) return !0;
        for (var e = 0, o = t[0].attributes, i = o.length; e < i; e++) if ("data-fancybox-" === o[e].nodeName.substr(0, 14)) return !0;
        return !1
    }, c = function (e) {
        var n = t.getComputedStyle(e)["overflow-y"], o = t.getComputedStyle(e)["overflow-x"],
            i = ("scroll" === n || "auto" === n) && e.scrollHeight > e.clientHeight,
            a = ("scroll" === o || "auto" === o) && e.scrollWidth > e.clientWidth;
        return i || a
    }, l = function (t) {
        for (var e = !1; ;) {
            if (e = c(t.get(0))) break;
            if (t = t.parent(), !t.length || t.hasClass("fancybox-stage") || t.is("body")) break
        }
        return e
    }, d = function (t) {
        var e = this;
        e.instance = t, e.$bg = t.$refs.bg, e.$stage = t.$refs.stage, e.$container = t.$refs.container, e.destroy(), e.$container.on("touchstart.fb.touch mousedown.fb.touch", n.proxy(e, "ontouchstart"))
    };
    d.prototype.destroy = function () {
        var t = this;
        t.$container.off(".fb.touch"), n(e).off(".fb.touch"), t.requestId && (i(t.requestId), t.requestId = null), t.tapped && (clearTimeout(t.tapped), t.tapped = null)
    }, d.prototype.ontouchstart = function (o) {
        var i = this, c = n(o.target), d = i.instance, u = d.current, f = u.$slide, p = u.$content,
            h = "touchstart" == o.type;
        if (h && i.$container.off("mousedown.fb.touch"), (!o.originalEvent || 2 != o.originalEvent.button) && f.length && c.length && !r(c) && !r(c.parent()) && (c.is("img") || !(o.originalEvent.clientX > c[0].clientWidth + c.offset().left))) {
            if (!u || d.isAnimating || u.$slide.hasClass("fancybox-animated")) return o.stopPropagation(), void o.preventDefault();
            i.realPoints = i.startPoints = a(o), i.startPoints.length && (u.touch && o.stopPropagation(), i.startEvent = o, i.canTap = !0, i.$target = c, i.$content = p, i.opts = u.opts.touch, i.isPanning = !1, i.isSwiping = !1, i.isZooming = !1, i.isScrolling = !1, i.canPan = d.canPan(), i.startTime = (new Date).getTime(), i.distanceX = i.distanceY = i.distance = 0, i.canvasWidth = Math.round(f[0].clientWidth), i.canvasHeight = Math.round(f[0].clientHeight), i.contentLastPos = null, i.contentStartPos = n.fancybox.getTranslate(i.$content) || {
                top: 0,
                left: 0
            }, i.sliderStartPos = n.fancybox.getTranslate(f), i.stagePos = n.fancybox.getTranslate(d.$refs.stage), i.sliderStartPos.top -= i.stagePos.top, i.sliderStartPos.left -= i.stagePos.left, i.contentStartPos.top -= i.stagePos.top, i.contentStartPos.left -= i.stagePos.left, n(e).off(".fb.touch").on(h ? "touchend.fb.touch touchcancel.fb.touch" : "mouseup.fb.touch mouseleave.fb.touch", n.proxy(i, "ontouchend")).on(h ? "touchmove.fb.touch" : "mousemove.fb.touch", n.proxy(i, "ontouchmove")), n.fancybox.isMobile && e.addEventListener("scroll", i.onscroll, !0), ((i.opts || i.canPan) && (c.is(i.$stage) || i.$stage.find(c).length) || (c.is(".fancybox-image") && o.preventDefault(), n.fancybox.isMobile && c.parents(".fancybox-caption").length)) && (i.isScrollable = l(c) || l(c.parent()), n.fancybox.isMobile && i.isScrollable || o.preventDefault(), (1 === i.startPoints.length || u.hasError) && (i.canPan ? (n.fancybox.stop(i.$content), i.isPanning = !0) : i.isSwiping = !0, i.$container.addClass("fancybox-is-grabbing")), 2 === i.startPoints.length && "image" === u.type && (u.isLoaded || u.$ghost) && (i.canTap = !1, i.isSwiping = !1, i.isPanning = !1, i.isZooming = !0, n.fancybox.stop(i.$content), i.centerPointStartX = .5 * (i.startPoints[0].x + i.startPoints[1].x) - n(t).scrollLeft(), i.centerPointStartY = .5 * (i.startPoints[0].y + i.startPoints[1].y) - n(t).scrollTop(), i.percentageOfImageAtPinchPointX = (i.centerPointStartX - i.contentStartPos.left) / i.contentStartPos.width, i.percentageOfImageAtPinchPointY = (i.centerPointStartY - i.contentStartPos.top) / i.contentStartPos.height, i.startDistanceBetweenFingers = s(i.startPoints[0], i.startPoints[1]))))
        }
    }, d.prototype.onscroll = function (t) {
        var n = this;
        n.isScrolling = !0, e.removeEventListener("scroll", n.onscroll, !0)
    }, d.prototype.ontouchmove = function (t) {
        var e = this;
        return void 0 !== t.originalEvent.buttons && 0 === t.originalEvent.buttons ? void e.ontouchend(t) : e.isScrolling ? void (e.canTap = !1) : (e.newPoints = a(t), void ((e.opts || e.canPan) && e.newPoints.length && e.newPoints.length && (e.isSwiping && !0 === e.isSwiping || t.preventDefault(), e.distanceX = s(e.newPoints[0], e.startPoints[0], "x"), e.distanceY = s(e.newPoints[0], e.startPoints[0], "y"), e.distance = s(e.newPoints[0], e.startPoints[0]), e.distance > 0 && (e.isSwiping ? e.onSwipe(t) : e.isPanning ? e.onPan() : e.isZooming && e.onZoom()))))
    }, d.prototype.onSwipe = function (e) {
        var a, s = this, r = s.instance, c = s.isSwiping, l = s.sliderStartPos.left || 0;
        if (!0 !== c) "x" == c && (s.distanceX > 0 && (s.instance.group.length < 2 || 0 === s.instance.current.index && !s.instance.current.opts.loop) ? l += Math.pow(s.distanceX, .8) : s.distanceX < 0 && (s.instance.group.length < 2 || s.instance.current.index === s.instance.group.length - 1 && !s.instance.current.opts.loop) ? l -= Math.pow(-s.distanceX, .8) : l += s.distanceX), s.sliderLastPos = {
            top: "x" == c ? 0 : s.sliderStartPos.top + s.distanceY,
            left: l
        }, s.requestId && (i(s.requestId), s.requestId = null), s.requestId = o(function () {
            s.sliderLastPos && (n.each(s.instance.slides, function (t, e) {
                var o = e.pos - s.instance.currPos;
                n.fancybox.setTranslate(e.$slide, {
                    top: s.sliderLastPos.top,
                    left: s.sliderLastPos.left + o * s.canvasWidth + o * e.opts.gutter
                })
            }), s.$container.addClass("fancybox-is-sliding"))
        }); else if (Math.abs(s.distance) > 10) {
            if (s.canTap = !1, r.group.length < 2 && s.opts.vertical ? s.isSwiping = "y" : r.isDragging || !1 === s.opts.vertical || "auto" === s.opts.vertical && n(t).width() > 800 ? s.isSwiping = "x" : (a = Math.abs(180 * Math.atan2(s.distanceY, s.distanceX) / Math.PI), s.isSwiping = a > 45 && a < 135 ? "y" : "x"), "y" === s.isSwiping && n.fancybox.isMobile && s.isScrollable) return void (s.isScrolling = !0);
            r.isDragging = s.isSwiping, s.startPoints = s.newPoints, n.each(r.slides, function (t, e) {
                var o, i;
                n.fancybox.stop(e.$slide), o = n.fancybox.getTranslate(e.$slide), i = n.fancybox.getTranslate(r.$refs.stage), e.$slide.css({
                    transform: "",
                    opacity: "",
                    "transition-duration": ""
                }).removeClass("fancybox-animated").removeClass(function (t, e) {
                    return (e.match(/(^|\s)fancybox-fx-\S+/g) || []).join(" ")
                }), e.pos === r.current.pos && (s.sliderStartPos.top = o.top - i.top, s.sliderStartPos.left = o.left - i.left), n.fancybox.setTranslate(e.$slide, {
                    top: o.top - i.top,
                    left: o.left - i.left
                })
            }), r.SlideShow && r.SlideShow.isActive && r.SlideShow.stop()
        }
    }, d.prototype.onPan = function () {
        var t = this;
        if (s(t.newPoints[0], t.realPoints[0]) < (n.fancybox.isMobile ? 10 : 5)) return void (t.startPoints = t.newPoints);
        t.canTap = !1, t.contentLastPos = t.limitMovement(), t.requestId && i(t.requestId), t.requestId = o(function () {
            n.fancybox.setTranslate(t.$content, t.contentLastPos)
        })
    }, d.prototype.limitMovement = function () {
        var t, e, n, o, i, a, s = this, r = s.canvasWidth, c = s.canvasHeight, l = s.distanceX, d = s.distanceY,
            u = s.contentStartPos, f = u.left, p = u.top, h = u.width, g = u.height;
        return i = h > r ? f + l : f, a = p + d, t = Math.max(0, .5 * r - .5 * h), e = Math.max(0, .5 * c - .5 * g), n = Math.min(r - h, .5 * r - .5 * h), o = Math.min(c - g, .5 * c - .5 * g), l > 0 && i > t && (i = t - 1 + Math.pow(-t + f + l, .8) || 0), l < 0 && i < n && (i = n + 1 - Math.pow(n - f - l, .8) || 0), d > 0 && a > e && (a = e - 1 + Math.pow(-e + p + d, .8) || 0), d < 0 && a < o && (a = o + 1 - Math.pow(o - p - d, .8) || 0), {
            top: a,
            left: i
        }
    }, d.prototype.limitPosition = function (t, e, n, o) {
        var i = this, a = i.canvasWidth, s = i.canvasHeight;
        return n > a ? (t = t > 0 ? 0 : t, t = t < a - n ? a - n : t) : t = Math.max(0, a / 2 - n / 2), o > s ? (e = e > 0 ? 0 : e, e = e < s - o ? s - o : e) : e = Math.max(0, s / 2 - o / 2), {
            top: e,
            left: t
        }
    }, d.prototype.onZoom = function () {
        var e = this, a = e.contentStartPos, r = a.width, c = a.height, l = a.left, d = a.top,
            u = s(e.newPoints[0], e.newPoints[1]), f = u / e.startDistanceBetweenFingers, p = Math.floor(r * f),
            h = Math.floor(c * f), g = (r - p) * e.percentageOfImageAtPinchPointX,
            b = (c - h) * e.percentageOfImageAtPinchPointY,
            m = (e.newPoints[0].x + e.newPoints[1].x) / 2 - n(t).scrollLeft(),
            v = (e.newPoints[0].y + e.newPoints[1].y) / 2 - n(t).scrollTop(), y = m - e.centerPointStartX,
            x = v - e.centerPointStartY, w = l + (g + y), $ = d + (b + x), S = {top: $, left: w, scaleX: f, scaleY: f};
        e.canTap = !1, e.newWidth = p, e.newHeight = h, e.contentLastPos = S, e.requestId && i(e.requestId), e.requestId = o(function () {
            n.fancybox.setTranslate(e.$content, e.contentLastPos)
        })
    }, d.prototype.ontouchend = function (t) {
        var o = this, s = o.isSwiping, r = o.isPanning, c = o.isZooming, l = o.isScrolling;
        if (o.endPoints = a(t), o.dMs = Math.max((new Date).getTime() - o.startTime, 1), o.$container.removeClass("fancybox-is-grabbing"), n(e).off(".fb.touch"), e.removeEventListener("scroll", o.onscroll, !0), o.requestId && (i(o.requestId), o.requestId = null), o.isSwiping = !1, o.isPanning = !1, o.isZooming = !1, o.isScrolling = !1, o.instance.isDragging = !1, o.canTap) return o.onTap(t);
        o.speed = 100, o.velocityX = o.distanceX / o.dMs * .5, o.velocityY = o.distanceY / o.dMs * .5, r ? o.endPanning() : c ? o.endZooming() : o.endSwiping(s, l)
    }, d.prototype.endSwiping = function (t, e) {
        var o = this, i = !1, a = o.instance.group.length, s = Math.abs(o.distanceX),
            r = "x" == t && a > 1 && (o.dMs > 130 && s > 10 || s > 50);
        o.sliderLastPos = null, "y" == t && !e && Math.abs(o.distanceY) > 50 ? (n.fancybox.animate(o.instance.current.$slide, {
            top: o.sliderStartPos.top + o.distanceY + 150 * o.velocityY,
            opacity: 0
        }, 200), i = o.instance.close(!0, 250)) : r && o.distanceX > 0 ? i = o.instance.previous(300) : r && o.distanceX < 0 && (i = o.instance.next(300)), !1 !== i || "x" != t && "y" != t || o.instance.centerSlide(200), o.$container.removeClass("fancybox-is-sliding")
    }, d.prototype.endPanning = function () {
        var t, e, o, i = this;
        i.contentLastPos && (!1 === i.opts.momentum || i.dMs > 350 ? (t = i.contentLastPos.left, e = i.contentLastPos.top) : (t = i.contentLastPos.left + 500 * i.velocityX, e = i.contentLastPos.top + 500 * i.velocityY), o = i.limitPosition(t, e, i.contentStartPos.width, i.contentStartPos.height), o.width = i.contentStartPos.width, o.height = i.contentStartPos.height, n.fancybox.animate(i.$content, o, 366))
    }, d.prototype.endZooming = function () {
        var t, e, o, i, a = this, s = a.instance.current, r = a.newWidth, c = a.newHeight;
        a.contentLastPos && (t = a.contentLastPos.left, e = a.contentLastPos.top, i = {
            top: e,
            left: t,
            width: r,
            height: c,
            scaleX: 1,
            scaleY: 1
        }, n.fancybox.setTranslate(a.$content, i), r < a.canvasWidth && c < a.canvasHeight ? a.instance.scaleToFit(150) : r > s.width || c > s.height ? a.instance.scaleToActual(a.centerPointStartX, a.centerPointStartY, 150) : (o = a.limitPosition(t, e, r, c), n.fancybox.animate(a.$content, o, 150)))
    }, d.prototype.onTap = function (e) {
        var o, i = this, s = n(e.target), r = i.instance, c = r.current, l = e && a(e) || i.startPoints,
            d = l[0] ? l[0].x - n(t).scrollLeft() - i.stagePos.left : 0,
            u = l[0] ? l[0].y - n(t).scrollTop() - i.stagePos.top : 0, f = function (t) {
                var o = c.opts[t];
                if (n.isFunction(o) && (o = o.apply(r, [c, e])), o) switch (o) {
                    case"close":
                        r.close(i.startEvent);
                        break;
                    case"toggleControls":
                        r.toggleControls();
                        break;
                    case"next":
                        r.next();
                        break;
                    case"nextOrClose":
                        r.group.length > 1 ? r.next() : r.close(i.startEvent);
                        break;
                    case"zoom":
                        "image" == c.type && (c.isLoaded || c.$ghost) && (r.canPan() ? r.scaleToFit() : r.isScaledDown() ? r.scaleToActual(d, u) : r.group.length < 2 && r.close(i.startEvent))
                }
            };
        if ((!e.originalEvent || 2 != e.originalEvent.button) && (s.is("img") || !(d > s[0].clientWidth + s.offset().left))) {
            if (s.is(".fancybox-bg,.fancybox-inner,.fancybox-outer,.fancybox-container")) o = "Outside"; else if (s.is(".fancybox-slide")) o = "Slide"; else {
                if (!r.current.$content || !r.current.$content.find(s).addBack().filter(s).length) return;
                o = "Content"
            }
            if (i.tapped) {
                if (clearTimeout(i.tapped), i.tapped = null, Math.abs(d - i.tapX) > 50 || Math.abs(u - i.tapY) > 50) return this;
                f("dblclick" + o)
            } else i.tapX = d, i.tapY = u, c.opts["dblclick" + o] && c.opts["dblclick" + o] !== c.opts["click" + o] ? i.tapped = setTimeout(function () {
                i.tapped = null, r.isAnimating || f("click" + o)
            }, 500) : f("click" + o);
            return this
        }
    }, n(e).on("onActivate.fb", function (t, e) {
        e && !e.Guestures && (e.Guestures = new d(e))
    }).on("beforeClose.fb", function (t, e) {
        e && e.Guestures && e.Guestures.destroy()
    })
}(window, document, jQuery), function (t, e) {
    "use strict";
    e.extend(!0, e.fancybox.defaults, {
        btnTpl: {slideShow: '<button data-fancybox-play class="fancybox-button fancybox-button--play" title="{{PLAY_START}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M6.5 5.4v13.2l11-6.6z"/></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M8.33 5.75h2.2v12.5h-2.2V5.75zm5.15 0h2.2v12.5h-2.2V5.75z"/></svg></button>'},
        slideShow: {autoStart: !1, speed: 3e3, progress: !0}
    });
    var n = function (t) {
        this.instance = t, this.init()
    };
    e.extend(n.prototype, {
        timer: null, isActive: !1, $button: null, init: function () {
            var t = this, n = t.instance, o = n.group[n.currIndex].opts.slideShow;
            t.$button = n.$refs.toolbar.find("[data-fancybox-play]").on("click", function () {
                t.toggle()
            }), n.group.length < 2 || !o ? t.$button.hide() : o.progress && (t.$progress = e('<div class="fancybox-progress"></div>').appendTo(n.$refs.inner))
        }, set: function (t) {
            var n = this, o = n.instance, i = o.current;
            i && (!0 === t || i.opts.loop || o.currIndex < o.group.length - 1) ? n.isActive && "video" !== i.contentType && (n.$progress && e.fancybox.animate(n.$progress.show(), {scaleX: 1}, i.opts.slideShow.speed), n.timer = setTimeout(function () {
                o.current.opts.loop || o.current.index != o.group.length - 1 ? o.next() : o.jumpTo(0)
            }, i.opts.slideShow.speed)) : (n.stop(), o.idleSecondsCounter = 0, o.showControls())
        }, clear: function () {
            var t = this;
            clearTimeout(t.timer), t.timer = null, t.$progress && t.$progress.removeAttr("style").hide()
        }, start: function () {
            var t = this, e = t.instance.current;
            e && (t.$button.attr("title", (e.opts.i18n[e.opts.lang] || e.opts.i18n.en).PLAY_STOP).removeClass("fancybox-button--play").addClass("fancybox-button--pause"), t.isActive = !0, e.isComplete && t.set(!0), t.instance.trigger("onSlideShowChange", !0))
        }, stop: function () {
            var t = this, e = t.instance.current;
            t.clear(), t.$button.attr("title", (e.opts.i18n[e.opts.lang] || e.opts.i18n.en).PLAY_START).removeClass("fancybox-button--pause").addClass("fancybox-button--play"), t.isActive = !1, t.instance.trigger("onSlideShowChange", !1), t.$progress && t.$progress.removeAttr("style").hide()
        }, toggle: function () {
            var t = this;
            t.isActive ? t.stop() : t.start()
        }
    }), e(t).on({
        "onInit.fb": function (t, e) {
            e && !e.SlideShow && (e.SlideShow = new n(e))
        }, "beforeShow.fb": function (t, e, n, o) {
            var i = e && e.SlideShow;
            o ? i && n.opts.slideShow.autoStart && i.start() : i && i.isActive && i.clear()
        }, "afterShow.fb": function (t, e, n) {
            var o = e && e.SlideShow;
            o && o.isActive && o.set()
        }, "afterKeydown.fb": function (n, o, i, a, s) {
            var r = o && o.SlideShow;
            !r || !i.opts.slideShow || 80 !== s && 32 !== s || e(t.activeElement).is("button,a,input") || (a.preventDefault(), r.toggle())
        }, "beforeClose.fb onDeactivate.fb": function (t, e) {
            var n = e && e.SlideShow;
            n && n.stop()
        }
    }), e(t).on("visibilitychange", function () {
        var n = e.fancybox.getInstance(), o = n && n.SlideShow;
        o && o.isActive && (t.hidden ? o.clear() : o.set())
    })
}(document, jQuery), function (t, e) {
    "use strict";
    var n = function () {
        for (var e = [["requestFullscreen", "exitFullscreen", "fullscreenElement", "fullscreenEnabled", "fullscreenchange", "fullscreenerror"], ["webkitRequestFullscreen", "webkitExitFullscreen", "webkitFullscreenElement", "webkitFullscreenEnabled", "webkitfullscreenchange", "webkitfullscreenerror"], ["webkitRequestFullScreen", "webkitCancelFullScreen", "webkitCurrentFullScreenElement", "webkitCancelFullScreen", "webkitfullscreenchange", "webkitfullscreenerror"], ["mozRequestFullScreen", "mozCancelFullScreen", "mozFullScreenElement", "mozFullScreenEnabled", "mozfullscreenchange", "mozfullscreenerror"], ["msRequestFullscreen", "msExitFullscreen", "msFullscreenElement", "msFullscreenEnabled", "MSFullscreenChange", "MSFullscreenError"]], n = {}, o = 0; o < e.length; o++) {
            var i = e[o];
            if (i && i[1] in t) {
                for (var a = 0; a < i.length; a++) n[e[0][a]] = i[a];
                return n
            }
        }
        return !1
    }();
    if (n) {
        var o = {
            request: function (e) {
                e = e || t.documentElement, e[n.requestFullscreen](e.ALLOW_KEYBOARD_INPUT)
            }, exit: function () {
                t[n.exitFullscreen]()
            }, toggle: function (e) {
                e = e || t.documentElement, this.isFullscreen() ? this.exit() : this.request(e)
            }, isFullscreen: function () {
                return Boolean(t[n.fullscreenElement])
            }, enabled: function () {
                return Boolean(t[n.fullscreenEnabled])
            }
        };
        e.extend(!0, e.fancybox.defaults, {
            btnTpl: {fullScreen: '<button data-fancybox-fullscreen class="fancybox-button fancybox-button--fsenter" title="{{FULL_SCREEN}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M7 14H5v5h5v-2H7v-3zm-2-4h2V7h3V5H5v5zm12 7h-3v2h5v-5h-2v3zM14 5v2h3v3h2V5h-5z"/></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M5 16h3v3h2v-5H5zm3-8H5v2h5V5H8zm6 11h2v-3h3v-2h-5zm2-11V5h-2v5h5V8z"/></svg></button>'},
            fullScreen: {autoStart: !1}
        }), e(t).on(n.fullscreenchange, function () {
            var t = o.isFullscreen(), n = e.fancybox.getInstance();
            n && (n.current && "image" === n.current.type && n.isAnimating && (n.isAnimating = !1, n.update(!0, !0, 0), n.isComplete || n.complete()), n.trigger("onFullscreenChange", t), n.$refs.container.toggleClass("fancybox-is-fullscreen", t), n.$refs.toolbar.find("[data-fancybox-fullscreen]").toggleClass("fancybox-button--fsenter", !t).toggleClass("fancybox-button--fsexit", t))
        })
    }
    e(t).on({
        "onInit.fb": function (t, e) {
            var i;
            if (!n) return void e.$refs.toolbar.find("[data-fancybox-fullscreen]").remove();
            e && e.group[e.currIndex].opts.fullScreen ? (i = e.$refs.container, i.on("click.fb-fullscreen", "[data-fancybox-fullscreen]", function (t) {
                t.stopPropagation(), t.preventDefault(), o.toggle()
            }), e.opts.fullScreen && !0 === e.opts.fullScreen.autoStart && o.request(), e.FullScreen = o) : e && e.$refs.toolbar.find("[data-fancybox-fullscreen]").hide()
        }, "afterKeydown.fb": function (t, e, n, o, i) {
            e && e.FullScreen && 70 === i && (o.preventDefault(), e.FullScreen.toggle())
        }, "beforeClose.fb": function (t, e) {
            e && e.FullScreen && e.$refs.container.hasClass("fancybox-is-fullscreen") && o.exit()
        }
    })
}(document, jQuery), function (t, e) {
    "use strict";
    var n = "fancybox-thumbs";
    e.fancybox.defaults = e.extend(!0, {
        btnTpl: {thumbs: '<button data-fancybox-thumbs class="fancybox-button fancybox-button--thumbs" title="{{THUMBS}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M14.59 14.59h3.76v3.76h-3.76v-3.76zm-4.47 0h3.76v3.76h-3.76v-3.76zm-4.47 0h3.76v3.76H5.65v-3.76zm8.94-4.47h3.76v3.76h-3.76v-3.76zm-4.47 0h3.76v3.76h-3.76v-3.76zm-4.47 0h3.76v3.76H5.65v-3.76zm8.94-4.47h3.76v3.76h-3.76V5.65zm-4.47 0h3.76v3.76h-3.76V5.65zm-4.47 0h3.76v3.76H5.65V5.65z"/></svg></button>'},
        thumbs: {autoStart: !1, hideOnClose: !0, parentEl: ".fancybox-container", axis: "y"}
    }, e.fancybox.defaults);
    var o = function (t) {
        this.init(t)
    };
    e.extend(o.prototype, {
        $button: null, $grid: null, $list: null, isVisible: !1, isActive: !1, init: function (t) {
            var e = this, n = t.group, o = 0;
            e.instance = t, e.opts = n[t.currIndex].opts.thumbs, t.Thumbs = e, e.$button = t.$refs.toolbar.find("[data-fancybox-thumbs]");
            for (var i = 0, a = n.length; i < a && (n[i].thumb && o++, !(o > 1)); i++) ;
            o > 1 && e.opts ? (e.$button.removeAttr("style").on("click", function () {
                e.toggle()
            }), e.isActive = !0) : e.$button.hide()
        }, create: function () {
            var t, o = this, i = o.instance, a = o.opts.parentEl, s = [];
            o.$grid || (o.$grid = e('<div class="' + n + " " + n + "-" + o.opts.axis + '"></div>').appendTo(i.$refs.container.find(a).addBack().filter(a)), o.$grid.on("click", "a", function () {
                i.jumpTo(e(this).attr("data-index"))
            })), o.$list || (o.$list = e('<div class="' + n + '__list">').appendTo(o.$grid)), e.each(i.group, function (e, n) {
                t = n.thumb, t || "image" !== n.type || (t = n.src), s.push('<a href="javascript:;" tabindex="0" data-index="' + e + '"' + (t && t.length ? ' style="background-image:url(' + t + ')"' : 'class="fancybox-thumbs-missing"') + "></a>")
            }), o.$list[0].innerHTML = s.join(""), "x" === o.opts.axis && o.$list.width(parseInt(o.$grid.css("padding-right"), 10) + i.group.length * o.$list.children().eq(0).outerWidth(!0))
        }, focus: function (t) {
            var e, n, o = this, i = o.$list, a = o.$grid;
            o.instance.current && (e = i.children().removeClass("fancybox-thumbs-active").filter('[data-index="' + o.instance.current.index + '"]').addClass("fancybox-thumbs-active"), n = e.position(), "y" === o.opts.axis && (n.top < 0 || n.top > i.height() - e.outerHeight()) ? i.stop().animate({scrollTop: i.scrollTop() + n.top}, t) : "x" === o.opts.axis && (n.left < a.scrollLeft() || n.left > a.scrollLeft() + (a.width() - e.outerWidth())) && i.parent().stop().animate({scrollLeft: n.left}, t))
        }, update: function () {
            var t = this;
            t.instance.$refs.container.toggleClass("fancybox-show-thumbs", this.isVisible), t.isVisible ? (t.$grid || t.create(), t.instance.trigger("onThumbsShow"), t.focus(0)) : t.$grid && t.instance.trigger("onThumbsHide"), t.instance.update()
        }, hide: function () {
            this.isVisible = !1, this.update()
        }, show: function () {
            this.isVisible = !0, this.update()
        }, toggle: function () {
            this.isVisible = !this.isVisible, this.update()
        }
    }), e(t).on({
        "onInit.fb": function (t, e) {
            var n;
            e && !e.Thumbs && (n = new o(e), n.isActive && !0 === n.opts.autoStart && n.show())
        }, "beforeShow.fb": function (t, e, n, o) {
            var i = e && e.Thumbs;
            i && i.isVisible && i.focus(o ? 0 : 250)
        }, "afterKeydown.fb": function (t, e, n, o, i) {
            var a = e && e.Thumbs;
            a && a.isActive && 71 === i && (o.preventDefault(), a.toggle())
        }, "beforeClose.fb": function (t, e) {
            var n = e && e.Thumbs;
            n && n.isVisible && !1 !== n.opts.hideOnClose && n.$grid.hide()
        }
    })
}(document, jQuery), function (t, e) {
    "use strict";

    function n(t) {
        var e = {
            "&": "&amp;",
            "<": "&lt;",
            ">": "&gt;",
            '"': "&quot;",
            "'": "&#39;",
            "/": "&#x2F;",
            "`": "&#x60;",
            "=": "&#x3D;"
        };
        return String(t).replace(/[&<>"'`=\/]/g, function (t) {
            return e[t]
        })
    }

    e.extend(!0, e.fancybox.defaults, {
        btnTpl: {share: '<button data-fancybox-share class="fancybox-button fancybox-button--share" title="{{SHARE}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M2.55 19c1.4-8.4 9.1-9.8 11.9-9.8V5l7 7-7 6.3v-3.5c-2.8 0-10.5 2.1-11.9 4.2z"/></svg></button>'},
        share: {
            url: function (t, e) {
                return !t.currentHash && "inline" !== e.type && "html" !== e.type && (e.origSrc || e.src) || window.location
            },
            tpl: '<div class="fancybox-share"><h1>{{SHARE}}</h1><p><a class="fancybox-share__button fancybox-share__button--fb" href="https://www.facebook.com/sharer/sharer.php?u={{url}}"><svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m287 456v-299c0-21 6-35 35-35h38v-63c-7-1-29-3-55-3-54 0-91 33-91 94v306m143-254h-205v72h196" /></svg><span>Facebook</span></a><a class="fancybox-share__button fancybox-share__button--tw" href="https://twitter.com/intent/tweet?url={{url}}&text={{descr}}"><svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m456 133c-14 7-31 11-47 13 17-10 30-27 37-46-15 10-34 16-52 20-61-62-157-7-141 75-68-3-129-35-169-85-22 37-11 86 26 109-13 0-26-4-37-9 0 39 28 72 65 80-12 3-25 4-37 2 10 33 41 57 77 57-42 30-77 38-122 34 170 111 378-32 359-208 16-11 30-25 41-42z" /></svg><span>Twitter</span></a><a class="fancybox-share__button fancybox-share__button--pt" href="https://www.pinterest.com/pin/create/button/?url={{url}}&description={{descr}}&media={{media}}"><svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m265 56c-109 0-164 78-164 144 0 39 15 74 47 87 5 2 10 0 12-5l4-19c2-6 1-8-3-13-9-11-15-25-15-45 0-58 43-110 113-110 62 0 96 38 96 88 0 67-30 122-73 122-24 0-42-19-36-44 6-29 20-60 20-81 0-19-10-35-31-35-25 0-44 26-44 60 0 21 7 36 7 36l-30 125c-8 37-1 83 0 87 0 3 4 4 5 2 2-3 32-39 42-75l16-64c8 16 31 29 56 29 74 0 124-67 124-157 0-69-58-132-146-132z" fill="#fff"/></svg><span>Pinterest</span></a></p><p><input class="fancybox-share__input" type="text" value="{{url_raw}}" onclick="select()" /></p></div>'
        }
    }), e(t).on("click", "[data-fancybox-share]", function () {
        var t, o, i = e.fancybox.getInstance(), a = i.current || null;
        a && ("function" === e.type(a.opts.share.url) && (t = a.opts.share.url.apply(a, [i, a])), o = a.opts.share.tpl.replace(/\{\{media\}\}/g, "image" === a.type ? encodeURIComponent(a.src) : "").replace(/\{\{url\}\}/g, encodeURIComponent(t)).replace(/\{\{url_raw\}\}/g, n(t)).replace(/\{\{descr\}\}/g, i.$caption ? encodeURIComponent(i.$caption.text()) : ""), e.fancybox.open({
            src: i.translate(i, o),
            type: "html",
            opts: {
                touch: !1, animationEffect: !1, afterLoad: function (t, e) {
                    i.$refs.container.one("beforeClose.fb", function () {
                        t.close(null, 0)
                    }), e.$content.find(".fancybox-share__button").click(function () {
                        return window.open(this.href, "Share", "width=550, height=450"), !1
                    })
                }, mobile: {autoFocus: !1}
            }
        }))
    })
}(document, jQuery), function (t, e, n) {
    "use strict";

    function o() {
        var e = t.location.hash.substr(1), n = e.split("-"),
            o = n.length > 1 && /^\+?\d+$/.test(n[n.length - 1]) ? parseInt(n.pop(-1), 10) || 1 : 1, i = n.join("-");
        return {hash: e, index: o < 1 ? 1 : o, gallery: i}
    }

    function i(t) {
        "" !== t.gallery && n("[data-fancybox='" + n.escapeSelector(t.gallery) + "']").eq(t.index - 1).focus().trigger("click.fb-start")
    }

    function a(t) {
        var e, n;
        return !!t && (e = t.current ? t.current.opts : t.opts, "" !== (n = e.hash || (e.$orig ? e.$orig.data("fancybox") || e.$orig.data("fancybox-trigger") : "")) && n)
    }

    n.escapeSelector || (n.escapeSelector = function (t) {
        return (t + "").replace(/([\0-\x1f\x7f]|^-?\d)|^-$|[^\x80-\uFFFF\w-]/g, function (t, e) {
            return e ? "\0" === t ? "??????" : t.slice(0, -1) + "\\" + t.charCodeAt(t.length - 1).toString(16) + " " : "\\" + t
        })
    }), n(function () {
        !1 !== n.fancybox.defaults.hash && (n(e).on({
            "onInit.fb": function (t, e) {
                var n, i;
                !1 !== e.group[e.currIndex].opts.hash && (n = o(), (i = a(e)) && n.gallery && i == n.gallery && (e.currIndex = n.index - 1))
            }, "beforeShow.fb": function (n, o, i, s) {
                var r;
                i && !1 !== i.opts.hash && (r = a(o)) && (o.currentHash = r + (o.group.length > 1 ? "-" + (i.index + 1) : ""), t.location.hash !== "#" + o.currentHash && (s && !o.origHash && (o.origHash = t.location.hash), o.hashTimer && clearTimeout(o.hashTimer), o.hashTimer = setTimeout(function () {
                    "replaceState" in t.history ? (t.history[s ? "pushState" : "replaceState"]({}, e.title, t.location.pathname + t.location.search + "#" + o.currentHash), s && (o.hasCreatedHistory = !0)) : t.location.hash = o.currentHash, o.hashTimer = null
                }, 300)))
            }, "beforeClose.fb": function (n, o, i) {
                i && !1 !== i.opts.hash && (clearTimeout(o.hashTimer), o.currentHash && o.hasCreatedHistory ? t.history.back() : o.currentHash && ("replaceState" in t.history ? t.history.replaceState({}, e.title, t.location.pathname + t.location.search + (o.origHash || "")) : t.location.hash = o.origHash), o.currentHash = null)
            }
        }), n(t).on("hashchange.fb", function () {
            var t = o(), e = null;
            n.each(n(".fancybox-container").get().reverse(), function (t, o) {
                var i = n(o).data("FancyBox");
                if (i && i.currentHash) return e = i, !1
            }), e ? e.currentHash === t.gallery + "-" + t.index || 1 === t.index && e.currentHash == t.gallery || (e.currentHash = null, e.close()) : "" !== t.gallery && i(t)
        }), setTimeout(function () {
            n.fancybox.getInstance() || i(o())
        }, 50))
    })
}(window, document, jQuery), function (t, e) {
    "use strict";
    var n = (new Date).getTime();
    e(t).on({
        "onInit.fb": function (t, e, o) {
            e.$refs.stage.on("mousewheel DOMMouseScroll wheel MozMousePixelScroll", function (t) {
                var o = e.current, i = (new Date).getTime();
                e.group.length < 2 || !1 === o.opts.wheel || "auto" === o.opts.wheel && "image" !== o.type || (t.preventDefault(), t.stopPropagation(), o.$slide.hasClass("fancybox-animated") || (t = t.originalEvent || t, i - n < 250 || (n = i, e[(-t.deltaY || -t.deltaX || t.wheelDelta || -t.detail) < 0 ? "next" : "previous"]())))
            })
        }
    })
}(document, jQuery);
/*
* jquery-match-height 0.7.2 by @liabru
* http://brm.io/jquery-match-height/
* License MIT
*/
!function (t) {
    "use strict";
    "function" == typeof define && define.amd ? define(["jquery"], t) : "undefined" != typeof module && module.exports ? module.exports = t(require("jquery")) : t(jQuery)
}(function (t) {
    var e = -1, o = -1, n = function (t) {
        return parseFloat(t) || 0
    }, a = function (e) {
        var o = 1, a = t(e), i = null, r = [];
        return a.each(function () {
            var e = t(this), a = e.offset().top - n(e.css("margin-top")), s = r.length > 0 ? r[r.length - 1] : null;
            null === s ? r.push(e) : Math.floor(Math.abs(i - a)) <= o ? r[r.length - 1] = s.add(e) : r.push(e), i = a
        }), r
    }, i = function (e) {
        var o = {
            byRow: !0, property: "height", target: null, remove: !1
        };
        return "object" == typeof e ? t.extend(o, e) : ("boolean" == typeof e ? o.byRow = e : "remove" === e && (o.remove = !0), o)
    }, r = t.fn.matchHeight = function (e) {
        var o = i(e);
        if (o.remove) {
            var n = this;
            return this.css(o.property, ""), t.each(r._groups, function (t, e) {
                e.elements = e.elements.not(n)
            }), this
        }
        return this.length <= 1 && !o.target ? this : (r._groups.push({
            elements: this,
            options: o
        }), r._apply(this, o), this)
    };
    r.version = "0.7.2", r._groups = [], r._throttle = 80, r._maintainScroll = !1, r._beforeUpdate = null,
        r._afterUpdate = null, r._rows = a, r._parse = n, r._parseOptions = i, r._apply = function (e, o) {
        var s = i(o), h = t(e), l = [h], c = t(window).scrollTop(), p = t("html").outerHeight(!0),
            u = h.parents().filter(":hidden");
        return u.each(function () {
            var e = t(this);
            e.data("style-cache", e.attr("style"))
        }), u.css("display", "block"), s.byRow && !s.target && (h.each(function () {
            var e = t(this), o = e.css("display");
            "inline-block" !== o && "flex" !== o && "inline-flex" !== o && (o = "block"), e.data("style-cache", e.attr("style")), e.css({
                display: o,
                "padding-top": "0",
                "padding-bottom": "0",
                "margin-top": "0",
                "margin-bottom": "0",
                "border-top-width": "0",
                "border-bottom-width": "0",
                height: "100px",
                overflow: "hidden"
            })
        }), l = a(h), h.each(function () {
            var e = t(this);
            e.attr("style", e.data("style-cache") || "")
        })), t.each(l, function (e, o) {
            var a = t(o), i = 0;
            if (s.target) i = s.target.outerHeight(!1); else {
                if (s.byRow && a.length <= 1) return void a.css(s.property, "");
                a.each(function () {
                    var e = t(this), o = e.attr("style"), n = e.css("display");
                    "inline-block" !== n && "flex" !== n && "inline-flex" !== n && (n = "block");
                    var a = {
                        display: n
                    };
                    a[s.property] = "", e.css(a), e.outerHeight(!1) > i && (i = e.outerHeight(!1)), o ? e.attr("style", o) : e.css("display", "")
                })
            }
            a.each(function () {
                var e = t(this), o = 0;
                s.target && e.is(s.target) || ("border-box" !== e.css("box-sizing") && (o += n(e.css("border-top-width")) + n(e.css("border-bottom-width")), o += n(e.css("padding-top")) + n(e.css("padding-bottom"))), e.css(s.property, i - o + "px"))
            })
        }), u.each(function () {
            var e = t(this);
            e.attr("style", e.data("style-cache") || null)
        }), r._maintainScroll && t(window).scrollTop(c / p * t("html").outerHeight(!0)),
            this
    }, r._applyDataApi = function () {
        var e = {};
        t("[data-match-height], [data-mh]").each(function () {
            var o = t(this), n = o.attr("data-mh") || o.attr("data-match-height");
            n in e ? e[n] = e[n].add(o) : e[n] = o
        }), t.each(e, function () {
            this.matchHeight(!0)
        })
    };
    var s = function (e) {
        r._beforeUpdate && r._beforeUpdate(e, r._groups), t.each(r._groups, function () {
            r._apply(this.elements, this.options)
        }), r._afterUpdate && r._afterUpdate(e, r._groups)
    };
    r._update = function (n, a) {
        if (a && "resize" === a.type) {
            var i = t(window).width();
            if (i === e) return;
            e = i;
        }
        n ? o === -1 && (o = setTimeout(function () {
            s(a), o = -1
        }, r._throttle)) : s(a)
    }, t(r._applyDataApi);
    var h = t.fn.on ? "on" : "bind";
    t(window)[h]("load", function (t) {
        r._update(!1, t)
    }), t(window)[h]("resize orientationchange", function (t) {
        r._update(!0, t)
    })
});
/*!
 * JavaScript Cookie v2.2.1
 * https://github.com/js-cookie/js-cookie
 *
 * Copyright 2006, 2015 Klaus Hartl & Fagner Brack
 * Released under the MIT license
 */
!function (e) {
    var n;
    if ("function" == typeof define && define.amd && (define(e), n = !0), "object" == typeof exports && (module.exports = e(), n = !0), !n) {
        var t = window.Cookies, o = window.Cookies = e();
        o.noConflict = function () {
            return window.Cookies = t, o
        }
    }
}(function () {
    function e() {
        for (var e = 0, n = {}; e < arguments.length; e++) {
            var t = arguments[e];
            for (var o in t) n[o] = t[o]
        }
        return n
    }

    function n(e) {
        return e.replace(/(%[0-9A-Z]{2})+/g, decodeURIComponent)
    }

    return function t(o) {
        function r() {
        }

        function i(n, t, i) {
            if ("undefined" != typeof document) {
                "number" == typeof (i = e({path: "/"}, r.defaults, i)).expires && (i.expires = new Date(1 * new Date + 864e5 * i.expires)), i.expires = i.expires ? i.expires.toUTCString() : "";
                try {
                    var c = JSON.stringify(t);
                    /^[\{\[]/.test(c) && (t = c)
                } catch (e) {
                }
                t = o.write ? o.write(t, n) : encodeURIComponent(String(t)).replace(/%(23|24|26|2B|3A|3C|3E|3D|2F|3F|40|5B|5D|5E|60|7B|7D|7C)/g, decodeURIComponent), n = encodeURIComponent(String(n)).replace(/%(23|24|26|2B|5E|60|7C)/g, decodeURIComponent).replace(/[\(\)]/g, escape);
                var f = "";
                for (var u in i) i[u] && (f += "; " + u, !0 !== i[u] && (f += "=" + i[u].split(";")[0]));
                return document.cookie = n + "=" + t + f
            }
        }

        function c(e, t) {
            if ("undefined" != typeof document) {
                for (var r = {}, i = document.cookie ? document.cookie.split("; ") : [], c = 0; c < i.length; c++) {
                    var f = i[c].split("="), u = f.slice(1).join("=");
                    t || '"' !== u.charAt(0) || (u = u.slice(1, -1));
                    try {
                        var a = n(f[0]);
                        if (u = (o.read || o)(u, a) || n(u), t) try {
                            u = JSON.parse(u)
                        } catch (e) {
                        }
                        if (r[a] = u, e === a) break
                    } catch (e) {
                    }
                }
                return e ? r[e] : r
            }
        }

        return r.set = i, r.get = function (e) {
            return c(e, !1)
        }, r.getJSON = function (e) {
            return c(e, !0)
        }, r.remove = function (n, t) {
            i(n, "", e(t, {expires: -1}))
        }, r.defaults = {}, r.withConverter = t, r
    }(function () {
    })
});
//# sourceMappingURL=/sm/b0ce608ffc029736e9ac80a8dd6a7db2da8e1d45d2dcfc92043deb2214aa30d8.map
var jq = jQuery.noConflict();

var companyVars = JSON.parse(document.getElementById("companyVars").innerText),
    asset_url = companyVars.assetUrl,
    website_base_url = companyVars.website_base_url,
    ir_base_url = companyVars.ir_base_url,
    isQmod = companyVars.isQmod;


function onInvisibleRecaptchaSubmit(token) {
    jq("form.validate-form").submit();
    return true;
}

// Fires on click or enter keypress
jq.fn.accessibleClick = function (handler) {
    jq(this).on('click keyup', function (event) {
        if (event.type === 'keyup') {
            var code = event.which;
            // Don't consider it a click if we don't press enter or spacebar
            if ((code !== 32) && (code !== 13)) {
                return false;
            }
        }
        handler.call(this, event);
    });
};

/**
 * Adds a label to Google ReCAPTCHA after it initializes for WAVE compliance
 **/
function recaptchaOnloadCallback() {
    jq("#g-recaptcha-response").attr("aria-hidden", true).before('<label for="g-recaptcha-response" class="sr-only" aria-hidden="true">Captcha</label>');
}

// Main document ready scripts
jq(document).ready(function () {
    // Buttons arrow
    jq('.btn:not(.main-select)').append('<span class="material-icons">arrow_forward</span>');

    // Add noopener to all links that open in a new tab.
    jq('a[target="_blank"]').each(function () {
        var linkRel = jq(this).attr('rel');
        if (!linkRel || (linkRel && linkRel.indexOf('noopener') == -1)) {
            var newRel = linkRel;
            newRel += linkRel && linkRel.length ? ' noopener' : 'noopener';
            jq(this).attr('rel', newRel);
        }
    });
    addRequiredAsteriskToLabels();

    // Scroll more home hero button
    var scrollMore = document.getElementById("scroll-more");
    if (scrollMore) {
        jq(scrollMore).accessibleClick(function (e) {
            e.preventDefault();
            var target = jq(this).closest(".home-hero").siblings(".module").first();
            jq("html,body").animate({
                scrollTop: target.offset().top - jq("#header").height()
            }, "slow");
        });
    }

    jq(".mobile-nav-trigger").click(function () {
        jq(".main-nav").css("height", "auto");
    });

    jq("#header.affixed").affix({
        offset: {
            top: 1
        }
    });

    //Circle Stat with Percentage Animation
    var divPercentage = jq(".stats-row-w-percents");
    if (divPercentage.length) {
        jq(document).bind("scroll", function (ev) {
            var scrollOffset = jq(document).scrollTop();
            var containerOffset = jq(".stats-row-w-percents").offset().top - window.innerHeight;
            if (scrollOffset > containerOffset) {
                jq(".stats-row-w-percents .stat").each(function () {
                    var percDiv = jq(this).find(".number"),
                        svgElm = jq(this).find(".circle"),
                        percentNumber = jq(this).attr("data-percent");
                    svgElm.attr("stroke-dasharray", percentNumber + ", 100");
                    svgElm.addClass("active");
                    jq({percentage: 0}).stop(true).animate({percentage: percentNumber}, {
                        duration: 2000,
                        step: function () {
                            var percentageVal = Math.round(this.percentage);
                            percDiv.text(percentageVal + "%");
                        }
                    }).promise().done(function () {
                        percDiv.text(percentNumber + "%");
                    });
                });
                jq(document).unbind("scroll");
            }
        });
    }

    var subNav = jq(".sub-navigation.affixed");
    if (subNav.length) {
        jq(subNav).affix({
            offset: {
                top: jq(".sub-navigation").offset().top - jq("#header").outerHeight() + 40
            }
        });
    }

    var menuRight = document.getElementById("mobile-nav"),
        showRight = document.getElementById("showRight");

    if (showRight) {
        showRight.onclick = function () {
            toggleMenuKeybind();
            jq(this).toggleClass("active");
            jq("body").toggleClass("push-to-left");
            jq(menuRight).toggleClass("cbp-spmenu-open");
            disableOther("showRight");
        };
    }

    function disableOther(button) {
        if (button !== "showRight") {
            jq(showRight).toggleClass("disabled");
        }
    }

    /**
     * This function handles keydown events when a full screen nav is present, allowing
     * the navigation to be closed by pressing the esc key
     */
    function toggleMenuKeybind() {
        var $body = jq('body');
        if ($body.hasClass('push-to-left')) {
            $body.off("keydown");
        } else {
            $body.on("keydown", function (e) {
                if (e.which == 27) {
                    jq(".main-nav").toggleClass("active");
                    jq(showRight).toggleClass('active');
                    jq("body").toggleClass("push-to-left");
                    jq(menuRight).toggleClass("cbp-spmenu-open");
                    disableOther("showRight");
                    $body.off("keydown");
                }
            });
        }
    }

    // Basic Form Validation
    var validator = jq(".validate-form");
    validator.each(function () {
        jq(this).validate({
            rules: {
                password_confirm: {
                    equalTo: "#password",
                    messages: {
                        equalTo: "Passwords must be the same"
                    }
                }
            },
            errorPlacement: function (error, element) {
                error.appendTo(element.parent());
            },
            submitHandler: function (form) {
                if (grecaptcha.getResponse()) {
                    form.submit();
                } else {
                    grecaptcha.reset();
                    grecaptcha.execute();
                }
            }
        });
    });

    jq.validator.methods.email = function (value, element) {
        return this.optional(element) || /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(value);
    }

    jq(".fancybox").fancybox({
        helpers: {
            overlay: {
                locked: true
            }
        },
        minHeight: "600"
    });
    jq(".fancybox-sec-filing").fancybox({
        helpers: {
            overlay: {
                locked: true
            }
        },
        minHeight: "900"
    });

    jq(".fancybox-bio").fancybox({
        helpers: {
            overlay: {
                locked: true
            }
        },
        minHeight: "0"
    });

    jq(".fancybox-modal").fancybox({
        width: 970,
        autoSize: false,
        height: "auto"
    });

    jq(".fancybox\\.iframe").fancybox({
        type: "iframe",
        iframe: {
            css: {
                width: "80%",
                maxWidth: "1024px",
            }
        }
    });

    //Bootstrap Select
    jq(".selectpicker").selectpicker({
        iconBase: "DIN",
        tickIcon: "no-icon"
    });

    //File input
    var fileInput = jq(".file-text input");
    fileInput.change(function (e) {
        $this = jq(this);
        var val = $this.val().split("\\");
        var length = val.length;
        var filename = val[length - 1];
        jq(this).parent(".file-text").children(".text-wrapper").text(filename);
    });

    // SEC Filing Filters - auto submit form
    jq("#sec-filing-filter select").on("change", function (e) {
        jq(this).closest("form").submit();
    });

    var $filterSelect = jq(".year-filter .selectpicker");
    if ($filterSelect.length) {
        $filterSelect.on("change", function () {
            var url = window.location.protocol + "//" + window.location.hostname + window.location.pathname;
            var query = "";
            jq(".year-filter .selectpicker").each(function () {
                var prefix = "&";
                if (query.length === 0) {
                    prefix = "?";
                }
                if (jq(this).val() != -1) {
                    query += prefix + jq(this).attr("name") + "=" + jq(this).val();
                }
            });
            url = url + query;
            if (!query) {
                var full_url = url + "?year=" + jq(this).val();
                if (window.location.href != full_url) {
                    window.location.href = full_url;
                }
            } else {
                if (window.location.href != url) {
                    window.location.href = url;
                }
            }
        });
    }

    // Resources module
    if (jq(".module-resources-page").length) {
        var viewModel = new ViewModel(JSON.parse(document.getElementById("resourcesVm").innerText));
    }

    // News slider
    if (jq(".news-slider").length) {
        jq(".news-slider").slick(JSON.parse(document.getElementById("newsSlickOptions").innerText));
    }

    // SEC Filings expand
    jq(".spr-expandable").hide();
    jq(".spr-toggle-expandable").click(function () {
        jq(this).next(".spr-expandable").toggle("blind");
    });

    // Crisis Messaging
    var $majorAnnouncement = jq('#majorAnnouncement');
    var majorAnnouncementCookieName = "eqMajorAnnouncement";
    if ($majorAnnouncement.length) {
        var majorAnnouncementTimestamp = $majorAnnouncement.data("timestamp");
        var majorAnnouncementCookie = Cookies.get(majorAnnouncementCookieName);
        if (majorAnnouncementCookie != majorAnnouncementTimestamp) {
            jq.fancybox.open({
                src: '#majorAnnouncement',
                type: 'inline',
                touch: window.outerWidth < 768,
                beforeLoad: function () {
                    // Add an aria-label to the modal
                    var fancyboxContainer = jq.fancybox.getInstance().$refs.container;
                    fancyboxContainer.attr('aria-label', 'Announcement');
                },
                afterLoad: function () {
                    // Remove main content visibility to screen readers
                    jq('.general-wrapper').attr('aria-hidden', true);
                },
                afterClose: function () {
                    jq('.general-wrapper').attr('aria-hidden', false);
                }
            });
            // Expires should be set to a number of days
            Cookies.set(majorAnnouncementCookieName, majorAnnouncementTimestamp, {
                secure: true,
                domain: window.location.hostname,
                expires: 7
            });
        }
    }
}); // end document.ready

// Adds asterisk to the labels of required form inputs
function addRequiredAsteriskToLabels() {
    jq("form .required").siblings("label").each(function () {
        var currentText = jq(this).text();
        jq(this).text(currentText + "*");
    });
}

//Smooth scroll to
function goToByScroll(id, callback) {
    jq("html,body").animate({
        scrollTop: jq(id).offset().top
    }, "slow", "swing", callback);
}

jq(".smooth").click(function () {
    goToByScroll(jq(this).attr("href"));
    return false;
});

// Checkbox Groups
var update_sec_checkboxes = function () {
    if (jq("#ir-sec-all").is(":checked")) {
        jq(".ir-sec-sub").prop("checked", true).prop("disabled", true);
    } else {
        jq(".ir-sec-sub").prop("disabled", false).prop("checked", false);
    }
}
jq("#ir-sec-all").change(update_sec_checkboxes);
if (jq("#ir-sec-all").is(":checked")) {
    jq(".ir-sec-sub").prop("checked", true).prop("disabled", true);
}

// Timeline
var $timelineEl = jq(".module-timeline");
if ($timelineEl.length) {
    var timeline = {
        resizePoints: function () {
            if (jq(window).outerWidth() < 768) return;
            jq(".point-wrapper").each(function () {
                var point = jq(this).find(".point");
                jq(this).css("height", point.outerHeight() / 1.2);
            });
        }
    };
    // Once we"re done resizing, calculate the height for the points.
    var resizeTimer;
    jq(window).on("resize", function (e) {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(timeline.resizePoints, 250);
    });
    timeline.resizePoints();
}
/* Site-Specific JavaScript */

/*Bitcoin Pricing */
//Get Price
jq.ajax({
    dataType: 'json',
    url: website_base_url + '/api/v1/bitcoin',
    success: function (data) {
        var price = data.price;
        var priceEl = jq('footer .bitcoin-price');
        if (priceEl.length) {
            //Format as currency
            var formatter = new Intl.NumberFormat('en-US', {
                style: 'currency',
                currency: 'USD',
                minimumFractionDigits: 2,
                maximumFractionDigits: 2,
            });
            var formattedPrice = formatter.format(price);
            //Set price
            priceEl.text(formattedPrice);
        }
    },
    error: function (responseData, textStatus, errorThrown) {
        console.log('failed');
        console.log(responseData);
    }
});
