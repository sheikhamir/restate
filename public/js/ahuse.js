$(function(){
    $( '.country-list-box-title').click(function(){
        $( '.country-list-box').toggleClass( 'on' );
    });
    $('.mobile-toggle').click(function(){
        $(this).toggleClass('active');
        $('.mobile-menu').toggleClass('on');
    });
    $('.sign-in-trigger').click(function(){
        $('.search-form-xs').toggleClass('hidden');
        $('.login-form-xs').toggleClass('hidden');
        $(this).toggleClass('hidden');
    });
    $('.cancel-trigger').click(function(){
        $('.search-form-xs').toggleClass('hidden');
        $('.login-form-xs').toggleClass('hidden');
        $('.sign-in-trigger').toggleClass('hidden');
    });
    if ($(window).width() < 993) {
        $("input.search-input").attr("placeholder","City or Neighbourhood");
    }
    else {
        $("input.search-input").attr("placeholder","Enter a city, neighbourhood, address or school");
    }
    $(window).resize(function () {
        if ($(window).width() < 993) {
            $("input.search-input").attr("placeholder","City or Neighbourhood");
        }
        else {
            $("input.search-input").attr("placeholder","Enter a city, neighbourhood, address or school");
        }
    });
    $('.back-to-top').click(function() {
        $("html, body").animate({scrollTop: 0}, 500);
    });
    /*$('.searchTypeSelector__desktop').click(function(){
     $('.searchTypeSelector__desktop').removeClass('active');
     $('.searchTypeSelector__desktop').removeClass('btn-info');
     $('.searchType_desktop').val($(this).attr('name'));
     $(this).addClass('active');
     $(this).addClass('btn-info');
     $('#searchTerm__desktop').focus();
     });*/
    $('.searchTypeSelector__mobile').click(function(){
        $('.searchTypeSelector__mobile').removeClass('active');
        $('.searchTypeSelector__mobile').removeClass('btn-info');
        $('.searchType_mobile').val($(this).attr('name'));
        $(this).addClass('active');
        $(this).addClass('btn-info');
        $('#searchTerm__desktop').focus();
    });
});