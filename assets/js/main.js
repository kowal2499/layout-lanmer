(function() {
    "use strict";

    function Lanmer() {
        this.hookScroll();
    }

    Lanmer.prototype.hookScroll = function() {
        var stickyMenu = $("#front #sticky");
        // skip if not on the home page
        if (!stickyMenu.length) return;

        $(window).scroll(function() {
            if (jQuery(this).scrollTop() > 30) {
                // add sticky class if element does not have it
                if (!stickyMenu.hasClass("navbar-fixed-top container")) {
                    stickyMenu.addClass("navbar-fixed-top container");
                }
            } else {
                // remove sticky class if element has it
                if (stickyMenu.hasClass("navbar-fixed-top container")) {
                    stickyMenu.removeClass("navbar-fixed-top container");
                }
            }
        });
    }

    var instance = new Lanmer();

}) ()