! function(o) {
    "use strict";
    o(window).on("load", function() { o(".loader-container").delay("500").fadeOut(2e3) }), o(document).ready(function() {
        o(document).on("click", ".side-menu-wrap .side-menu-ul>li>a .btn-toggle", function() { return o(this).closest("li").siblings().removeClass("active").find(".dropdown-menu-item").slideUp(200), o(this).closest("li").toggleClass("active").find(".dropdown-menu-item").slideToggle(200), !1 }), o(document).on("click", ".logo-right-content .side-menu-open", function() { o(".side-nav-container").toggleClass("active") }), o(document).on("click", ".dashboard-nav-trigger-btn", function() { o(".dashboard-nav-container").addClass("active") }), o(document).on("click", ".user-menu-open", function() { o(".user-nav-container").addClass("active") }), o(document).on("click", ".humburger-menu .side-menu-close", function() { o(".side-nav-container, .dashboard-nav-container, .user-nav-container").removeClass("active") }), o(".skillbar").each(function() { o(this).find(".skill-item").animate({ width: o(this).attr("data-percent") }, 3e3) }), o(window).on("scroll", function() { 0 < o(window).scrollTop() ? o(".header-menu-wrapper").addClass("header-fixed") : o(".header-menu-wrapper").removeClass("header-fixed"), 500 < o(window).scrollTop() ? o("#back-to-top").addClass("show-back-to-top") : o("#back-to-top").removeClass("show-back-to-top") }), o(document).on("click", "#back-to-top", function() { return o("html, body").animate({ scrollTop: 0 }, 800), !1 }), o(".card-carousel").owlCarousel({ loop: !0, items: 2, nav: !1, dots: !1, autoplay: !0, smartSpeed: 500, margin: 30, responsive: { 0: { items: 1 }, 768: { items: 2 } } }), o(".client-logo").owlCarousel({ loop: !0, items: 6, nav: !1, dots: !1, smartSpeed: 700, autoplay: !0, responsive: { 0: { items: 1 }, 425: { items: 2 }, 480: { items: 2 }, 767: { items: 4 }, 992: { items: 6 } } }), o(".testimonial-carousel").owlCarousel({ loop: !0, items: 3, nav: !1, dots: !0, smartSpeed: 700, autoplay: !1, margin: 30, responsive: { 0: { items: 1 }, 768: { items: 2 }, 992: { items: 3 } } }), o(".testimonial-carousel-2").owlCarousel({ loop: !0, items: 5, nav: !1, dots: !0, smartSpeed: 700, autoplay: !1, margin: 30, responsive: { 0: { items: 1 }, 576: { items: 2 }, 991: { items: 3 }, 992: { items: 4 }, 1200: { items: 5 } } }), o(".gallery-carousel").owlCarousel({ loop: !0, items: 1, nav: !0, dots: !0, smartSpeed: 700, autoplay: !1, dotsData: !0, navText: ['<span class="la la-chevron-left"></span>', '<span class="la la-chevron-right"></span>'] }), o(".video-popup-btn").magnificPopup({ type: "video" }), o('input[name="daterange"]').daterangepicker({ opens: "right", singleDatePicker: !0 }), o(document).on("click", ".input-number-increment", function() {
            var e = o(this).parents(".input-number-group").find(".input-number"),
                a = parseInt(e.val(), 10);
            e.val(a + 1)
        }), o(document).on("click", ".input-number-decrement", function() {
            var e = o(this).parents(".input-number-group").find(".input-number"),
                a = parseInt(e.val(), 10);
            e.val(a - 1)
        }), o(".location-option-field").select2({ placeholder: "Location", allowClear: !0 }), o(".category-option-field").select2({ placeholder: "Select category", allowClear: !0 }), o(".job-type-option-field").select2({ placeholder: "Select Job Type", allowClear: !0 }), o(".faculty-option-field").select2({ placeholder: "Select Faculty", allowClear: !0 }), o(".department-option-field").select2({ placeholder: "Select Department", allowClear: !0 }), o(".semester-option-field").select2({ placeholder: "Select Semester", allowClear: !0 }), o(".level-option-field").select2({ placeholder: "Select Level", allowClear: !0 }), o(".course-option-field").select2({ placeholder: "Select Course", allowClear: !0 }), o(".student-option-field").select2({ placeholder: "Select Student", allowClear: !0 }), o(".lecturer-option-field").select2({ placeholder: "Select Lecturer", allowClear: !0 }), o(".assignment-option-field").select2({ placeholder: "Select Assignment", allowClear: !0 }), o(".experience-option-field").select2({ placeholder: "Choose experience", allowClear: !0 }), o(".qualification-option-field").select2({ placeholder: "Choose qualification", allowClear: !0 }), o(".choose-gender-option-field").select2({ placeholder: "Gender", allowClear: !0 }), o(".job-category-option-field").select2({ placeholder: "Choose One", allowClear: !0 }), o(".tag-option-field").select2({ tags: !0, placeholder: "e.g. PHP, responsibilites", tokenSeparators: [",", " "] }), o(".location-tag-option-field").select2({ tags: !0, placeholder: "e.g. Australia", tokenSeparators: [",", " "] }), o(".experience-tag-option-field").select2({ tags: !0, placeholder: "e.g. 3 Years", tokenSeparators: [",", " "] }), o(".qualification-tag-option-field").select2({ tags: !0, placeholder: "e.g. Graduate", tokenSeparators: [",", " "] }), o(".gender-tag-option-field").select2({ tags: !0, placeholder: "e.g. Male", tokenSeparators: [",", " "] }), o(".search-tag-option-field").select2({ tags: !0, placeholder: "Please select", tokenSeparators: [",", " "] }), o(".city-tag-option-field").select2({ tags: !0, placeholder: "Select a city", tokenSeparators: [",", " "] }), o(".current-salary-tag-option-field").select2({ tags: !0, placeholder: "Current salary", tokenSeparators: [",", " "] }), o(".expected-salary-tag-option-field").select2({ tags: !0, placeholder: "Expected salary", tokenSeparators: [",", " "] }), o(".languages-tag-option-field").select2({ tags: !0, placeholder: "Select languages", tokenSeparators: [",", " "] }), o(".skill-option-field").select2({ tags: !0, placeholder: "Skill requirements", tokenSeparators: [",", " "] }), o(".business-tag-option-field").select2({ placeholder: "Select business type", allowClear: !0 }), o(".short-option-field").select2({ placeholder: "Short by", allowClear: !0 }), o(".reason-option-field").select2({ placeholder: "Reason for contact", allowClear: !0 }), o(".industry-option-field").select2({ placeholder: "Select industry", allowClear: !0 }), o('[data-toggle="tooltip"]').tooltip({}), o("#slider-range").slider({ range: !0, min: 0, max: 500, values: [50, 290], slide: function(e, a) { o("#amount").val("$" + a.values[0] + " - $" + a.values[1]) } }), o("#amount").val("$" + o("#slider-range").slider("values", 0) + " - $" + o("#slider-range").slider("values", 1)), o("#filer_input, #filer_input-2").filer({ limit: 10, maxSize: 100, showThumbs: !0 }), o(".team-carousel").owlCarousel({ loop: !0, items: 3, nav: !0, dots: !0, smartSpeed: 500, autoplay: !1, margin: 30, navText: ["<i class='la la-angle-left'></i>", "<i class='la la-angle-right'></i>"], responsive: { 0: { items: 1 }, 768: { items: 2 }, 991: { items: 2 }, 992: { items: 3 } } }), o(".popular-job-carousel").owlCarousel({ loop: !0, items: 1, nav: !1, dots: !1, autoplay: !0 }), o(".dropdown-toggle").dropdown(), o(".circlechart").circlechart(), o("#map").length && initMap("map", 40.717499, -74.044113, "images/map-marker.png")
    })
}(jQuery);