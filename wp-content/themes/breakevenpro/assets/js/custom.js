// mobile menu Toggle JS
$('#sidebar .widget_nav_menu .widget-title').click(function(){
	if ( $(window).width() <= 767 ){
		$(this).toggleClass('chev-down');
		$('#sidebar .widget_nav_menu .menu-home-sidebar-menu-container').slideToggle();
	}
});

$(window).resize(function() {
	if ($(window).width() >= 768 ){
		if($('#sidebar .widget_nav_menu .widget-title').hasClass('chev-down')){
    		$('#sidebar .widget_nav_menu .widget-title').removeClass('chev-down');
		}
		$('#sidebar .widget_nav_menu .menu-home-sidebar-menu-container').css('display', 'block');
	} else{
		$('#sidebar .widget_nav_menu .menu-home-sidebar-menu-container').css('display', 'none');
	}
});
// mobile menu Toggle JS - END
$(document).ready(function() {

    /*$("#owl-demo3").owlCarousel({
        navigation : false, // Show next and prev buttons
        slideSpeed : 3000,
        autoPlay: true,
        paginationSpeed : 400,
        singleItem:true
    });*/

    $('.menu-item-has-children').each(function () {
        $(this).addClass('dropdown');
        $('> a', this).addClass('dropdown-toggle');
        $('a.dropdown-toggle', this).append('<i class="fa fa-angle-down"></i>');
        $('> ul', this).addClass('dropdown-menu');
    });

    $('.menu-item-has-children .menu-item-has-children').each(function () {
        $(this).removeClass('dropdown');
        $(this).addClass('dropdown-submenu');

        $('> a i', this).remove();

        $('> a', this).append('<i class="fa fa-angle-right"></i>');
        $('> ul', this).addClass('dropdown-menu');

    });

    $('.usefull-links > li > a').each(function () {
        $(this).prepend('<i class="fa fa-angle-right"></i>');
    });

    $(".team-holder7").mouseenter(function(){
        $(".user-info", this).show();
    });
    $(".team-holder7").mouseleave(function(){
        $(".user-info", this).hide();
    });

});

$(window).load(function() {
    equalheight(".team-holder7");
});

$(window).resize(function() {
    equalheight(".team-holder7");
});

function equalheight(container){
    //alert('working');
    var currentTallest = 0,
        currentRowStart = 0,
        rowDivs = new Array(),
        $el,
        topPosition = 0;
    $(container).each(function() {
        $el = $(this);
        $($el).height('auto')
        topPostion = $el.position().top;

        if (currentRowStart != topPostion) {
            for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
                rowDivs[currentDiv].height(currentTallest);
            }
            rowDivs.length = 0; // empty the array
            currentRowStart = topPostion;
            currentTallest = $el.height();
            rowDivs.push($el);
        } else {
            rowDivs.push($el);
            currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
        }
        for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
            rowDivs[currentDiv].height(currentTallest);
        }
    });

};