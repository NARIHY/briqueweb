function slider() {
    $current = $('.slider h1.actiff');
    if ($current.length == 0) {
        $('.slider h1:first-child').addClass('actiff');
    } else {
        $next = $current.removeClass('actiff').next();

        if ($next.length == 0) {
            $('.slider h1:first-child').addClass('actiff');
        } else {
            $next.addClass('actiff');
        }
    }
}

setInterval(slider, 2500);
