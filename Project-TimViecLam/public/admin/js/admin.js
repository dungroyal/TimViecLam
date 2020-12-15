!(function (t) {
    function e() {
        document.webkitIsFullScreen ||
            document.mozFullScreen ||
            document.msFullscreenElement ||
            (console.log("pressed"),
                t("body").removeClass("fullscreen-enable"));
    }

    var n;
    t("#side-menu").metisMenu(),
        t("#vertical-menu-btn").on("click", function (e) {
            e.preventDefault(),
                t("body").toggleClass("sidebar-enable"),
                992 <= t(window).width() ?
                t("body").toggleClass("vertical-collpsed") :
                t("body").removeClass("vertical-collpsed");
        }),
        t("#sidebar-menu a").each(function () {
            var e = window.location.href.split(/[?#]/)[0];
            this.href == e &&
                (t(this).addClass("active"),
                    t(this)
                    .parent()
                    .addClass("mm-active"),
                    t(this)
                    .parent()
                    .parent()
                    .addClass("mm-show"),
                    t(this)
                    .parent()
                    .parent()
                    .prev()
                    .addClass("mm-active"),
                    t(this)
                    .parent()
                    .parent()
                    .parent()
                    .addClass("mm-active"),
                    t(this)
                    .parent()
                    .parent()
                    .parent()
                    .parent()
                    .addClass("mm-show"),
                    t(this)
                    .parent()
                    .parent()
                    .parent()
                    .parent()
                    .parent()
                    .addClass("mm-active"));
        }),
        t(".navbar-nav a").each(function () {
            var e = window.location.href.split(/[?#]/)[0];
            this.href == e &&
                (t(this).addClass("active"),
                    t(this)
                    .parent()
                    .addClass("active"),
                    t(this)
                    .parent()
                    .parent()
                    .addClass("active"),
                    t(this)
                    .parent()
                    .parent()
                    .parent()
                    .addClass("active"),
                    t(this)
                    .parent()
                    .parent()
                    .parent()
                    .parent()
                    .addClass("active"),
                    t(this)
                    .parent()
                    .parent()
                    .parent()
                    .parent()
                    .parent()
                    .addClass("active"));
        }),
        t('[data-toggle="fullscreen"]').on("click", function (e) {
            e.preventDefault(),
                t("body").toggleClass("fullscreen-enable"),
                document.fullscreenElement ||
                document.mozFullScreenElement ||
                document.webkitFullscreenElement ?
                document.cancelFullScreen ?
                document.cancelFullScreen() :
                document.mozCancelFullScreen ?
                document.mozCancelFullScreen() :
                document.webkitCancelFullScreen &&
                document.webkitCancelFullScreen() :
                document.documentElement.requestFullscreen ?
                document.documentElement.requestFullscreen() :
                document.documentElement.mozRequestFullScreen ?
                document.documentElement.mozRequestFullScreen() :
                document.documentElement.webkitRequestFullscreen &&
                document.documentElement.webkitRequestFullscreen(
                    Element.ALLOW_KEYBOARD_INPUT
                );
        }),
        document.addEventListener("fullscreenchange", e),
        document.addEventListener("webkitfullscreenchange", e),
        document.addEventListener("mozfullscreenchange", e),
        t(".dropdown-menu a.dropdown-toggle").on("click", function (e) {
            return (
                t(this)
                .next()
                .hasClass("show") ||
                t(this)
                .parents(".dropdown-menu")
                .first()
                .find(".show")
                .removeClass("show"),
                t(this)
                .next(".dropdown-menu")
                .toggleClass("show"),
                !1
            );
        }),
        t('.selectpicker').selectpicker(),
        t('.datepicker').datepicker({
            format: 'dd/mm/yyyy',
            todayBtn: 'true',
            language: 'vi',
            autoclose: 'true',
            todayHighlight: 'true',
        })
})(jQuery);


$("#imageUpload").change(function () {
    readURL(this);
});
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

// Config Sweetalert2
const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 4000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
});

