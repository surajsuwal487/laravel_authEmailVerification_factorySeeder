$(window).scroll(function() {
    if ($(window).scrollTop() >= 300) {
        $('header').addClass('fixed-header');
        $('header div').addClass('visible-title');
    } else {
        $('header').removeClass('fixed-header');
        $('header div').removeClass('visible-title');
    }
});



/*---categories slideToggle---*/
$(".categories_title").on("click", function() {
    $(this).toggleClass('active');
    $('.categories_menu_toggle').slideToggle('medium');
});




/*----------  Category more toggle  ----------*/

$(".categories_menu_toggle li.hidden").hide();
$("#more-btn").on('click', function(e) {

    e.preventDefault();
    $(".categories_menu_toggle li.hidden").toggle(500);
    var htmlAfter = '<i class="fa fa-minus" aria-hidden="true"></i> Less Categories';
    var htmlBefore = '<i class="fa fa-plus" aria-hidden="true"></i> More Categories';


    if ($(this).html() == htmlBefore) {
        $(this).html(htmlAfter);
    } else {
        $(this).html(htmlBefore);
    }
});


/*---Category menu---*/
function categorySubMenuToggle() {
    $('.categories_menu_toggle li.menu_item_children > a').on('click', function() {
        if ($(window).width() < 992) {
            $(this).removeAttr('href');
            var element = $(this).parent('li');
            if (element.hasClass('open')) {
                element.removeClass('open');
                element.find('li').removeClass('open');
                element.find('ul').slideUp();
            } else {
                element.addClass('open');
                element.children('ul').slideDown();
                element.siblings('li').children('ul').slideUp();
                element.siblings('li').removeClass('open');
                element.siblings('li').find('li').removeClass('open');
                element.siblings('li').find('ul').slideUp();
            }
        }
    });
    $('.categories_menu_toggle li.menu_item_children > a').append('<span class="expand"></span>');
}
categorySubMenuToggle();