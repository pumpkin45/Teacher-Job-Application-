$(function () {
    var split = window.location.pathname.split('/');
    var mnurl = split[split.length - 1];
    $('ul.side-nav li a[href="' + mnurl + '"]').parents('li').addClass('active');
})