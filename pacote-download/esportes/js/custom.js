$(function () {
    $('html').on('click', '.menu a:not(.default)', function (e) {
        e.preventDefault();
        let ths = $(this);
        let target = ths.attr('href');
        let el = $('html').find(target);
        // $('html, body').animate({scrollTop: e.offset()}, 0);
        $('html, body').animate({scrollTop: el.offset().top}, 1500);
    });
});
