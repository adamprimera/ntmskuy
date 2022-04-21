<!-- Font Awesome 5 -->
<script src="<?= base_url(); ?>assets/vendor/fontawesome/js/fontawesome.min.js"></script>

<!-- Feather Icons JS -->
<script src="<?= base_url(); ?>assets/vendor/feather/feather.min.js"></script>

<script>
    var feathericons = ["activity", "airplay", "alert-circle", "alert-octagon", "alert-triangle", "align-center", "align-justify", "align-left", "align-right", "anchor", "at-sign", "award", "bar-chart-2", "bar-chart", "battery-charging", "battery", "bell-off", "bell", "bluetooth", "book", "bookmark", "box", "briefcase", "calendar", "cast", "check-circle", "check-square", "check", "circle", "clipboard", "clock", "cloud-off", "cloud", "command", "copy", "cpu", "delete", "disc", "download-cloud", "download", "edit-2", "edit-3", "edit", "external-link", "eye-off", "eye", "feather", "file", "filter", "flag", "folder", "grid", "hash", "headphones", "heart", "home", "inbox", "info", "layers", "layout", "life-buoy", "link-2", "link", "list", "loader", "lock", "log-in", "log-out", "maximize-2", "maximize", "menu", "mic-off", "mic", "minimize-2", "minimize", "minus-circle", "minus-square", "minus", "monitor", "more-horizontal", "more-vertical", "move", "music", "octagon", "package", "pie-chart", "plus-circle", "plus-square", "plus", "power", "printer", "radio", "refresh-ccw", "refresh-cw", "rotate-ccw", "rotate-cw", "scissors", "search", "settings", "share-2", "share", "slash", "speaker", "square", "star", "tag", "target", "thumbs-down", "thumbs-up", "toggle-left", "toggle-right", "trash-2", "trash", "trending-down", "trending-up", "triangle", "type", "unlock", "upload-cloud", "upload", "user-check", "user-minus", "user-plus", "user-x", "user", "watch", "wifi", "x-circle", "x-square", "x", "zap", "zoom-in", "zoom-out", "fast-forward", "pause", "play", "repeat", "rewind", "shuffle", "skip-back", "skip-forward", "volume-1", "volume-2", "volume-x", "volume", "mail", "message-circle", "message-square", "phone-call", "phone-forwarded", "phone-incoming", "phone-missed", "phone-off", "phone-outgoing", "phone", "voicemail", "aperture", "camera-off", "camera", "image", "video-off", "video", "compass", "crosshair", "globe", "map-pin", "map", "navigation-2", "navigation", "cloud-drizzle", "cloud-lightning", "cloud-rain", "cloud-snow", "droplet", "moon", "sun", "sunrise", "sunset", "thermometer", "umbrella", "wind", "arrow-down-left", "arrow-down-right", "arrow-down", "arrow-left", "arrow-right", "arrow-up-left", "arrow-up-right", "arrow-up", "chevron-down", "chevron-left", "chevron-right", "chevron-up", "chevrons-down", "chevrons-left", "chevrons-right", "chevrons-up", "chrome", "codepen", "facebook", "instagram", "pocket", "slack", "twitter"]
</script>

<!-- Bootstrap 5 -->
<script src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js" crossorigin="anonymous">
</script>

<!-- JQUERY! -->
<script src="<?= base_url(); ?>assets/vendor/jquery/jquery-3.6.0.min.js" crossorigin="anonymous"></script>

<!-- Nestable Menu Drag & Drop -->
<script src="<?= base_url(); ?>assets/vendor/nestable/jquery.nestable.js" crossorigin="anonymous"></script>

<!-- Sweetalert 2 JS -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Is Valid URL -->
<script>
    function isUrlValid(url) {
        return /^(https?|s?ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i.test(url);
    }
</script>

<!-- SETUP BREADCRUMB -->
<script>
    function setupBreadcrumb() {
        var url = window.location.href;
        var currentItem = $("#accordionSidenav").find("[href$='" + url + "']");
        var html = "";
        html += '<li class="breadcrumb-item"><a href="' + base_url + '">Home</a></li>';
        var length = currentItem.parents("li").get().reverse().length;
        $(currentItem.parents("li").get().reverse()).each(function(key, value) {
            if ((length - 1) == key) {
                html += '<li class="breadcrumb-item text-capitalize active">' + $(this).children('a').text() + '</li>';
            } else {
                html += '<li class="breadcrumb-item text-capitalize"><span>' + $(this).children('li.nav-link div.nav-link-wrapper').text() + '</span></li>';
            }
        });
        $(".breadcrumb").html(html);
    }
</script>

<!-- Form Validation -->
<script>
    function bsValidation(forms) {
        var state = true;
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                    state = false;
                }

                form.classList.add('was-validated');
            });

        return state;
    }
</script>

<script>
    (function($) {
        $.fn.buttonLoader = function(action) {
            var self = $(this);
            //start loading animation
            if (action == 'start') {
                if ($(self).attr("disabled") == "disabled") {
                    e.preventDefault();
                }
                //disable buttons when loading state
                $('.has-spinner').attr("disabled", "disabled");
                $(self).attr('data-btn-text', $(self).text());
                //binding spinner element to button and changing button text
                $(self).html('<span class="spinner"><i class="fa fa-spinner fa-spin"></i></span>');
                $(self).addClass('active');
                $(self).attr('disabled', true);
            }
            //stop loading animation
            if (action == 'stop') {
                $(self).html($(self).attr('data-btn-text'));
                $(self).removeClass('active');
                //enable buttons after finish loading
                $('.has-spinner').removeAttr("disabled");
                $(self).attr('disabled', false);
            }
        }
    })(jQuery);
</script>

<script>
    // sweetalert 2 toast
    //* icon = ["success","error","warning","info","question"]
    function toast(icon = "success", title = "this is title", position = "top-end", timer = 3000, timerProgressBar = true) {
        const Toast = Swal.mixin({
            toast: true,
            position: position,
            showConfirmButton: false,
            timer: timer,
            timerProgressBar: timerProgressBar,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })

        return Toast.fire({
            icon: icon,
            title: title
        })
    }

    // sweetalert 2 confirm dialog

    function confirmDialog({
        icon = "warning",
        title = "this is title",
        html = "this is text",
        confirmColor = '#06794f',
        cancelColor = '#d73f30',
        confirmText = 'Yes',
        cancelText = 'Cancel',
    }) {
        var swal = Swal.fire({
            title: title,
            html: html,
            icon: icon,
            showCancelButton: true,
            confirmButtonColor: confirmColor,
            cancelButtonColor: cancelColor,
            confirmButtonText: confirmText,
            cancelButtonText: cancelText,
            customClass: {
                cancelButton: 'order-1',
                confirmButton: 'order-2',
            }
            // confirmButtonText: 'Yes, delete it!'
        });

        return swal;
    }
</script>

<script>
    function litepickerRange(el) {
        const litepickerRangePlugin = el;
        if (litepickerRangePlugin) {
            const picker = new Litepicker({
                element: litepickerRangePlugin,
                singleMode: false,
                numberOfMonths: 2,
                numberOfColumns: 2,
                format: 'MMM DD, YYYY',
                tooltipText: {
                    one: 'day',
                    other: 'days'
                },
                tooltipNumber: (totalDays) => {
                    return totalDays;
                },
                plugins: ['mobilefriendly'],
                mobilefriendly: {
                    breakpoint: 480,
                }
            });
        }
    }
</script>