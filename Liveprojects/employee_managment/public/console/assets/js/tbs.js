(function ($) {
    "use strict";

    /**
     * @property colors
     * @description SET colors for charts includes system colors and pastel colors for charts
     * @returns {array} - array of colors/colours
     */
    var body = $("body"),
        windowWidth = window.innerWidth;

    /**
     * @description Initialize Bootstrap tooltip
     * @param {(Element|jQuery)} [context] - A DOM Element, Document, or jQuery to use as context.
     * @requires bootstrap.js, Popper.js
     */
    $('[data-toggle="tooltip"]').tooltip();

    /**
     * @description sidebar operations like sliding sidebar,toggle and responsive options
     * @param {(Element|jQuery)} [context] - A DOM Element, Document, or jQuery to use as context.
     * @requires jQuery
     */

    // sidebar mouse events
    $(document).on("mouseenter", "body:not(.sidebar-pinned) .admin-sidebar", function (e) {
        if (windowWidth >= 1200) {
            $(this).addClass("sidebar-show");
        }
    });
    $(document).on("mouseleave", "body:not(.sidebar-pinned) .admin-sidebar", function (e) {
        if (windowWidth >= 1200) {
            $(this).removeClass("sidebar-show");
        }
    });

    //sidebar pin - toggle sidebar pin
    $(document).on("click", ".admin-pin-sidebar", function (e) {
        e.preventDefault();
        body.toggleClass("sidebar-pinned");
        $(this).toggleClass("pinned");
        // trigger resize event for charts to redraw if required
        window.dispatchEvent(new Event("resize"));
    });

    // append backdrop for mobile
    body.append('<div class="sidebar-backdrop "></div>');

    // close event on mobile by clicking close button or backdrop
    $(document).on("click", " .admin-close-sidebar ,.sidebar-backdrop", function (e) {
        e.preventDefault();
        body.removeClass("sidebar-open");
    });
    /**
     * @description toggles the target class with class given in toggleclass attr
     * * @param {(Element|jQuery)} [context] - A DOM Element, Document, or jQuery to use as context.
     * @requires jQuery
     */
    $(document).on("click", "[data-toggleclass]", function (e) {
        e.preventDefault();
        $($(this).attr("data-target")).toggleClass($(this).attr("data-toggleClass"));
    });

    /**
     * @description Sidebar Multilevel Menu
     * @param {(Element|jQuery)} [context] - A DOM Element, Document, or jQuery to use as context.
     * @requires jQuery
     */
    $(document).on("click", ".open-dropdown", function (e) {
        e.preventDefault();
        if (!$(this).next().is(":visible")) {
            //opens the adjacent list to the target
            $(this).next().slideDown();
            $(this).parent().addClass("opened");
        } else {
            //closes the adjacent list to the target
            $(this).next().slideUp();
            $(this).parent().removeClass("opened");
        }
    });

    // light and dark theme setting js END

    //Floating Form Floating label :: START

    $(document).on("input", ".floating-label input", function (e) {
        var item = $(this).parents(".floating-label");
        $(this).val() ? item.addClass("show-label") : item.removeClass("show-label");
    });

    $(document).on("blur", ".floating-label input", function (e) {
        var item = $(this).parents(".floating-label");
        $(this).val() ? item.addClass("show-label") : item.removeClass("show-label");
    });

    //checking for pre-filled forms
    $(".floating-label input").each(function () {
        var item = $(this).parents(".floating-label");
        $(this).val() ? item.addClass("show-label") : item.removeClass("show-label");
    });

    //Floating Form Floating label :: END
})(window.jQuery);
