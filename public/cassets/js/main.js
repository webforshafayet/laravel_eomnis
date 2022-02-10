(function ($) {
    "use strict";
    $(".preloader").delay(1600).fadeOut("slow");
    $(window).on("scroll", function () {
        var scroll = $(window).scrollTop();
        if (scroll >= 10) {
            $(".header-menu-area").addClass("sticky");
        } else {
            $(".header-menu-area").removeClass("sticky");
        }
    });
    $(".hamburger").on("click", function (event) {
        $(this).toggleClass("h-active");
        $(".main-nav").toggleClass("slidenav");
    });
    $(".header-home .main-nav ul li  a").on("click", function (event) {
        $(".hamburger").removeClass("h-active");
        $(".main-nav").removeClass("slidenav");
    });
    $(".main-nav .fl").on("click", function (event) {
        var $fl = $(this);
        $(this).parent().siblings().find(".sub-menu").slideUp();
        $(this).parent().siblings().find(".fl").addClass("flaticon-plus").text("+");
        if ($fl.hasClass("flaticon-plus")) {
            $fl.removeClass("flaticon-plus").addClass("flaticon-minus").text("-");
        } else {
            $fl.removeClass("flaticon-minus").addClass("flaticon-plus").text("+");
        }
        $fl.next(".sub-menu").slideToggle();
    });
    $(".single-sidebar-gallery").magnificPopup({ delegate: "a", gallery: { enabled: true }, type: "image" });
    $(".home-three-hero-slide-img-wrap").slick({ slidesToShow: 1, slidesToScroll: 1, fade: true, arrows: false, dots: false, asNavFor: ".home-three-hero-slide-content-wrap" });
    $(".home-three-hero-slide-content-wrap").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows: false,
        prevArrow: "<i class='bx bxs-chevron-left'></i>",
        nextArrow: "<i class='bx bxs-chevron-right' ></i>",
        asNavFor: ".home-three-hero-slide-img-wrap",
    });
    $(".home-one-hero-slide-img-wrap").slick({ slidesToShow: 1, slidesToScroll: 1, fade: true, arrows: false, dots: true, asNavFor: ".home-one-hero-slide-content-wrap" });
    $(".home-one-hero-slide-content-wrap").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
        prevArrow: "<i class='bx bxs-chevron-left'></i>",
        nextArrow: "<i class='bx bxs-chevron-right' ></i>",
        asNavFor: ".home-one-hero-slide-img-wrap",
    });
    $(".single-home-two-arrival-slide").owlCarousel({
        items: 4,
        loop: true,
        smartSpeed: 1500,
        autoplay: false,
        dots: true,
        margin: 24,
        nav: false,
        navText: ["<i class='fas fa-chevron-left'></i>", "<i class='fas fa-chevron-right'></i>"],
        responsive: { 0: { items: 1 }, 480: { items: 1 }, 768: { items: 2 }, 992: { items: 3 }, 1200: { items: 4 }, 1400: { items: 4 } },
    });
    $(".home-two-hero-slide-wrap").owlCarousel({
        items: 1,
        loop: true,
        smartSpeed: 1500,
        autoplay: false,
        dots: false,
        nav: true,
        navText: ["<i class='bi bi-arrow-left'></i>", "<i class='bi bi-arrow-right'></i>"],
        responsive: { 0: { items: 1 }, 480: { items: 1 }, 768: { items: 1 }, 992: { items: 1 }, 1200: { items: 1 }, 1400: { items: 1 } },
    });
    $(".single-home-one-favorite-slide").owlCarousel({
        items: 4,
        loop: true,
        smartSpeed: 1500,
        autoplay: false,
        dots: false,
        margin: 24,
        nav: true,
        navText: ["<i class='fas fa-chevron-left'></i>", "<i class='fas fa-chevron-right'></i>"],
        responsive: { 0: { items: 1, autoplay: true }, 480: { items: 1, autoplay: true }, 768: { items: 2, autoplay: true }, 992: { items: 3, autoplay: true }, 1200: { items: 4 }, 1400: { items: 4 } },
    });
    $(".testimonial-wrap").owlCarousel({
        items: 1,
        loop: true,
        smartSpeed: 1500,
        autoplay: false,
        dots: true,
        margin: 24,
        nav: true,
        navText: ["<i class='fas fa-chevron-left'></i>", "<i class='fas fa-chevron-right'></i>"],
        responsive: { 0: { items: 1, autoplay: true }, 480: { items: 1, autoplay: true }, 768: { items: 1, autoplay: true }, 992: { items: 1, autoplay: true }, 1200: { items: 1 }, 1400: { items: 1 } },
    });
    $("#nlmOverlay").delay(5800).fadeIn(400);
    $("#nlmPopup").delay(6000).fadeIn(400);
    $("#btnClose").on("click", function (e) {
        HideDialog();
        e.preventDefault();
    });
    function HideDialog() {
        $("#nlmOverlay").fadeOut(400);
        $("#nlmPopup").fadeOut(300);
    }
    (function ($) {
        "use strict";
        var DEBUG = false,
            PLUGIN_IDENTIFIER = "RangeSlider";
        var RangeSlider = function (element, options) {
            this.element = element;
            this.options = options || {};
            this.defaults = {
                output: {
                    prefix: "",
                    suffix: "",
                    format: function (output) {
                        return output;
                    },
                },
                change: function (event, obj) {},
            };
            this.metadata = $(this.element).data("options");
        };
        RangeSlider.prototype = {
            init: function () {
                if (DEBUG && console) console.log("RangeSlider init");
                this.config = $.extend(true, {}, this.defaults, this.options, this.metadata);
                var self = this;
                this.trackFull = $('<div class="track track--full"></div>').appendTo(self.element);
                this.trackIncluded = $('<div class="track track--included"></div>').appendTo(self.element);
                this.inputs = [];
                $('input[type="range"]', this.element).each(function (index, value) {
                    var rangeInput = this;
                    rangeInput.output = $("<output>").appendTo(self.element);
                    rangeInput.output.zindex = parseInt($(rangeInput.output).css("z-index")) || 1;
                    rangeInput.thumb = $('<div class="slider-thumb">').prependTo(self.element);
                    rangeInput.initialValue = $(this).val();
                    rangeInput.update = function () {
                        if (DEBUG && console) console.log("RangeSlider rangeInput.update");
                        var range = $(this).attr("max") - $(this).attr("min"),
                            offset = $(this).val() - $(this).attr("min"),
                            pos = (offset / range) * 100 + "%",
                            transPos = (offset / range) * -100 + "%",
                            prefix = typeof self.config.output.prefix == "function" ? self.config.output.prefix.call(self, rangeInput) : self.config.output.prefix,
                            format = self.config.output.format($(rangeInput).val()),
                            suffix = typeof self.config.output.suffix == "function" ? self.config.output.suffix.call(self, rangeInput) : self.config.output.suffix;
                        $(rangeInput.output).html(prefix + "" + format + "" + suffix);
                        $(rangeInput.output).css("left", pos);
                        $(rangeInput.output).css("transform", "translate(" + transPos + ",0)");
                        $(rangeInput.thumb).css("left", pos);
                        $(rangeInput.thumb).css("transform", "translate(" + transPos + ",0)");
                        self.adjustTrack();
                    };
                    rangeInput.sendOutputToFront = function () {
                        $(this.output).css("z-index", rangeInput.output.zindex + 1);
                    };
                    rangeInput.sendOutputToBack = function () {
                        $(this.output).css("z-index", rangeInput.output.zindex);
                    };
                    $(rangeInput.thumb).on("mousedown", function (event) {
                        self.sendAllOutputToBack();
                        rangeInput.sendOutputToFront();
                        $(this).data("tracking", true);
                        $(document).one("mouseup", function () {
                            $(rangeInput.thumb).data("tracking", false);
                            self.change(event);
                        });
                    });
                    $("body").on("mousemove", function (event) {
                        if ($(rangeInput.thumb).data("tracking")) {
                            var rangeOffset = $(rangeInput).offset(),
                                relX = event.pageX - rangeOffset.left,
                                rangeWidth = $(rangeInput).width();
                            if (relX <= rangeWidth) {
                                var val = relX / rangeWidth;
                                $(rangeInput).val(val * $(rangeInput).attr("max"));
                                rangeInput.update();
                            }
                        }
                    });
                    $(this).on("mousedown input change touchstart", function (event) {
                        if (DEBUG && console) console.log("RangeSlider rangeInput, mousedown input touchstart");
                        self.sendAllOutputToBack();
                        rangeInput.sendOutputToFront();
                        rangeInput.update();
                    });
                    $(this).on("mouseup touchend", function (event) {
                        if (DEBUG && console) console.log("RangeSlider rangeInput, change");
                        self.change(event);
                    });
                    self.inputs.push(this);
                });
                this.reset();
                return this;
            },
            sendAllOutputToBack: function () {
                $.map(this.inputs, function (input, index) {
                    input.sendOutputToBack();
                });
            },
            change: function (event) {
                if (DEBUG && console) console.log("RangeSlider change", event);
                var values = $.map(this.inputs, function (input, index) {
                    return { value: parseInt($(input).val()), min: parseInt($(input).attr("min")), max: parseInt($(input).attr("max")) };
                });
                values.sort(function (a, b) {
                    return a.value - b.value;
                });
                this.config.change.call(this, event, values);
            },
            reset: function () {
                if (DEBUG && console) console.log("RangeSlider reset");
                $.map(this.inputs, function (input, index) {
                    $(input).val(input.initialValue);
                    input.update();
                });
            },
            adjustTrack: function () {
                if (DEBUG && console) console.log("RangeSlider adjustTrack");
                var valueMin = Infinity,
                    rangeMin = Infinity,
                    valueMax = 0,
                    rangeMax = 0;
                $.map(this.inputs, function (input, index) {
                    var val = parseInt($(input).val()),
                        min = parseInt($(input).attr("min")),
                        max = parseInt($(input).attr("max"));
                    valueMin = val < valueMin ? val : valueMin;
                    valueMax = val > valueMax ? val : valueMax;
                    rangeMin = min < rangeMin ? min : rangeMin;
                    rangeMax = max > rangeMax ? max : rangeMax;
                });
                if (this.inputs.length > 1) {
                    this.trackIncluded.css("width", ((valueMax - valueMin) / (rangeMax - rangeMin)) * 100 + "%");
                    this.trackIncluded.css("left", ((valueMin - rangeMin) / (rangeMax - rangeMin)) * 100 + "%");
                } else {
                    this.trackIncluded.css("width", (valueMax / (rangeMax - rangeMin)) * 100 + "%");
                    this.trackIncluded.css("left", "0%");
                }
            },
        };
        RangeSlider.defaults = RangeSlider.prototype.defaults;
        $.fn.RangeSlider = function (options) {
            if (DEBUG && console) console.log("$.fn.RangeSlider", options);
            return this.each(function () {
                var instance = $(this).data(PLUGIN_IDENTIFIER);
                if (!instance) {
                    instance = new RangeSlider(this, options).init();
                    $(this).data(PLUGIN_IDENTIFIER, instance);
                }
            });
        };
    })(jQuery);
    var rangeSlider = $("#facet-price-range-slider");
    if (rangeSlider.length > 0) {
        rangeSlider.RangeSlider({
            output: {
                format: function (output) {
                    return output.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
                },
                suffix: function (input) {
                    return parseInt($(input).val()) == parseInt($(input).attr("max")) ? this.config.maxSymbol : "";
                },
            },
        });
    }
    var catDropdown = document.querySelectorAll(".click-address-here");
    var catCard = document.querySelectorAll(".cart-address-change-wrap");
    catDropdown.forEach((element) => {
        element.addEventListener("click", () => {
            element.nextElementSibling.classList.toggle("short-cart-active");
        });
    });
    $(".popup-gallery").magnificPopup({ delegate: "a", gallery: { enabled: true }, type: "image" });
    function wcqib_refresh_quantity_increments() {
        jQuery("div.quantity:not(.buttons_added), td.quantity:not(.buttons_added)").each(function (a, b) {
            var c = jQuery(b);
            c.addClass("buttons_added"), c.children().first().before('<input type="button" value="-" class="minus" />'), c.children().last().after('<input type="button" value="+" class="plus" />');
        });
    }
    String.prototype.getDecimals ||
        (String.prototype.getDecimals = function () {
            var a = this,
                b = ("" + a).match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?$/);
            return b ? Math.max(0, (b[1] ? b[1].length : 0) - (b[2] ? +b[2] : 0)) : 0;
        }),
        jQuery(document).ready(function () {
            wcqib_refresh_quantity_increments();
        }),
        jQuery(document).on("updated_wc_div", function () {
            wcqib_refresh_quantity_increments();
        }),
        jQuery(document).on("click", ".plus, .minus", function () {
            var a = jQuery(this).closest(".quantity").find(".qty"),
                b = parseFloat(a.val()),
                c = parseFloat(a.attr("max")),
                d = parseFloat(a.attr("min")),
                e = a.attr("step");
            (b && "" !== b && "NaN" !== b) || (b = 0),
                ("" !== c && "NaN" !== c) || (c = ""),
                ("" !== d && "NaN" !== d) || (d = 0),
                ("any" !== e && "" !== e && void 0 !== e && "NaN" !== parseFloat(e)) || (e = 1),
                jQuery(this).is(".plus") ? (c && b >= c ? a.val(c) : a.val((b + parseFloat(e)).toFixed(e.getDecimals()))) : d && b <= d ? a.val(d) : b > 0 && a.val((b - parseFloat(e)).toFixed(e.getDecimals())),
                a.trigger("change");
        });
    document.querySelectorAll(".fl-switch").forEach((element) => {
        element.addEventListener("click", () => {
            document.querySelectorAll(".flash-light-box-wrap").forEach((el) => {
                el.classList.toggle("light-active");
            });
        });
    });
    var form = $("#contact-form");
    var formMessages = $(".form-message");
    $(form).on("submit", function (e) {
        e.preventDefault();
        var formData = $(form).serialize();
        $.ajax({ type: "POST", url: $(form).attr("action"), data: formData })
            .done(function (response) {
                $(formMessages).removeClass("error");
                $(formMessages).addClass("success");
                $(formMessages).text(response);
                $("#contact-form input,#contact-form textarea").val("");
            })
            .fail(function (data) {
                $(formMessages).removeClass("success");
                $(formMessages).addClass("error");
                if (data.responseText !== "") {
                    $(formMessages).text(data.responseText);
                } else {
                    $(formMessages).text("Oops! An error occured. Message could not be sent.");
                }
            });
    });
    $(document).ready(function () {
        $(window).on("scroll", function () {
            if ($(this).scrollTop() > 100) {
                $("#scroll-top").fadeIn();
            } else {
                $("#scroll-top").fadeOut();
            }
        });
        $("#scroll-top").on("click", function () {
            $("html, body").animate({ scrollTop: 0 }, 600);
            return false;
        });
    });
    function timeConverter(UNIX_timestamp) {
        var a = new Date(UNIX_timestamp * 1000);
        var months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
        var year = a.getFullYear();
        var month = months[a.getMonth()];
        var date = a.getDate();
        var hour = a.getHours();
        var min = a.getMinutes();
        var sec = a.getSeconds();
        var time = date + " " + month + " " + year + " " + hour + ":" + min + ":" + sec;
        console.log(date);
        $("#timer #days").html(date);
        $("#timer #hours").html(hour);
        $("#timer #minutes").html(min);
        $("#timer #seconds").html(sec);
    }
    function makeTimer() {
        var endTime = new Date("September 01, 2022 00:00:00");
        var endTime = Date.parse(endTime) / 1000;
        var now = new Date();
        var now = Date.parse(now) / 1000;
        var timeLeft = endTime - now;
        var days = Math.floor(timeLeft / 86400);
        var hours = Math.floor((timeLeft - days * 86400) / 3600);
        var Xmas95 = new Date("December 25, 1995 23:15:30");
        var hour = Xmas95.getHours();
        var minutes = Math.floor((timeLeft - days * 86400 - hours * 3600) / 60);
        var seconds = Math.floor(timeLeft - days * 86400 - hours * 3600 - minutes * 60);
        if (hours < "10") {
            hours = "0" + hours;
        }
        if (minutes < "10") {
            minutes = "0" + minutes;
        }
        if (seconds < "10") {
            seconds = "0" + seconds;
        }
        $("#timer #days").html(days);
        $("#timer #hours").html(hours);
        $("#timer #minutes").html(minutes);
        $("#timer #seconds").html(seconds);
    }
    setInterval(function () {
        makeTimer();
    }, 1000);
    var searchIcon = document.querySelectorAll(".menu-search-click");
    var searchcloseIcon = document.querySelectorAll(".search-close");
    var searchWrap = document.querySelectorAll(".search-bar-wrap");
    searchIcon.forEach((element) => {
        element.addEventListener("click", () => {
            document.querySelectorAll(".search-bar-wrap").forEach((el) => {
                el.classList.add("show-search");
            });
        });
    });
    searchcloseIcon.forEach((element) => {
        element.addEventListener("click", () => {
            document.querySelectorAll(".search-bar-wrap").forEach((el) => {
                el.classList.remove("show-search");
            });
        });
    });
    window.onclick = function (event) {
        searchWrap.forEach((el) => {
            if (event.target == el) {
                el.classList.remove("show-search");
            }
        });
    };

    var gridThree = document.querySelectorAll(".shop-icon-three");
    var gridTwo = document.querySelectorAll(".shop-icon-two");
    var gridRowThree = document.querySelectorAll(".shop-grid-three");
    var gridRowTwo = document.querySelectorAll(".shop-grid-two");
    gridThree.forEach((element) => {
        element.addEventListener("click", () => {
            gridThree.forEach((ele) => {
                ele.classList.add("shop-grid-active-color");
            });
            gridTwo.forEach((ele) => {
                ele.classList.remove("shop-grid-active-color");
            });
        });
    });
    gridTwo.forEach((element) => {
        element.addEventListener("click", () => {
            gridTwo.forEach((ele) => {
                ele.classList.add("shop-grid-active-color");
            });
            gridThree.forEach((ele) => {
                ele.classList.remove("shop-grid-active-color");
            });
        });
    });
    gridTwo.forEach((element) => {
        element.addEventListener("click", () => {
            gridRowThree.forEach((ele) => {
                ele.classList.add("shop-grid-none");
            });
            gridRowTwo.forEach((ele) => {
                ele.classList.remove("shop-grid-none");
            });
        });
    });
    gridThree.forEach((element) => {
        element.addEventListener("click", () => {
            gridRowTwo.forEach((ele) => {
                ele.classList.add("shop-grid-none");
            });
            gridRowThree.forEach((ele) => {
                ele.classList.remove("shop-grid-none");
            });
        });
    });
    jQuery(window).on("load", function () {
        new WOW().init();
        window.wow = new WOW({ boxClass: "wow", animateClass: "animated", offset: 0, mobile: true, live: true, offset: 100 });
        window.wow.init();
    });



  /*--
        Custom script to call Background
        Image & Color from html data attribute
    -----------------------------------*/
    $('[data-bg-image]').each(function () {
        var $this = $(this),
            $image = $this.data('bg-image');
        $this.css('background-image', 'url(' + $image + ')');
      });
      $('[data-bg-color]').each(function () {
        var $this = $(this),
            $color = $this.data('bg-color');
        $this.css('background-color', $color);
      });
    
	// Background Image JS start
	var bgSelector = $(".bg-img");
	bgSelector.each(function (index, elem) {
		var element = $(elem),
			bgSource = element.data('bg');
		element.css('background-image', 'url(' + bgSource + ')');
	});


	// hero slider active js
	$('.hero-slider-active').slick({
		fade: true,
		speed: 1000,
		autoplay: false,
		prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-angle-left"></i></button>',
		nextArrow: '<button type="button" class="slick-next"><i class="fa fa-angle-right"></i></button>',
		responsive: [{
			breakpoint: 992,
			settings: {
				arrows: false,
				dots: true
			}
		}]
	});


})(jQuery);
