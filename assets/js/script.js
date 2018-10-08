// navbar sticky top on scroll
(function ($) {
    $(document).ready(function () {
        var offset = $('#nav-sm').offset().top;
        $(document).scroll(function () {
            var scrollTop = $(document).scrollTop();
            if (scrollTop > offset) {
                $('#nav-sm').css('position', 'fixed');
            } else {
                $('#nav-sm').css('position', 'static');
            }
        });
    });
})(jQuery);

//// table row as link
//$('.data').click(function () {
//    window.location = 'profil-patient.php?id=$idLink';
//});

$('#myModal').modal('show');
