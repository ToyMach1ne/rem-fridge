jQuery(document).ready(function($) {
    
/*Вызов модельного окна*/
var data_form = "";  
$('.main-modal-submit').click(function() {
    data_form = $(this).attr('data-form');
    var scroll_html_h = $('html').outerHeight(); 
    var hv = $(window).height();
    $('.form-wrapper-main-modal[data-form='+data_form+']').css('display', 'block');
    if (scroll_html_h > hv) {
        var style_h = '17px';
    } else {
        var style_h = '0px';
    }
    $('body').css({
        'overflow': 'hidden',
        'padding-right': style_h
    });
    $(document).bind('click.myEvent', function(e) {
        if ($(e.target).closest('.form-wrapper-main-modal[data-form='+data_form+'] .main-modal-block-form').length == 0) {
            $('.form-wrapper-main-modal[data-form='+data_form+']').css('display', 'none');
            $('body').removeAttr('style');
            $(document).unbind('click.myEvent');
        }
    });
    return false;
});
$('.main-modal-gift-submit').click(function() {
    data_form = $(this).attr('data-form');
    var scroll_html_h = $('html').outerHeight(); 
    var hv = $(window).height();
    $('.form-wrapper-main-modal[data-form='+data_form+']').css('display', 'block');
    if (scroll_html_h > hv) {
        var style_h = '17px';
    } else {
        var style_h = '0px';
    }
    $('body').css({
        'overflow': 'hidden',
        'padding-right': style_h
    });
	var brand = $(this).attr('brd');
	var zag="Вызовите мастера и получите подарок!";
	
	$('.modal-zag').html(zag);
	$('.inpbr').val(brand);
    $(document).bind('click.myEvent', function(e) {
        if ($(e.target).closest('.form-wrapper-main-modal[data-form='+data_form+'] .main-modal-block-form').length == 0) {
            $('.form-wrapper-main-modal[data-form='+data_form+']').css('display', 'none');
            $('body').removeAttr('style');
            $(document).unbind('click.myEvent');
        }
    });
    return false;
});

$('.main-modal-brand-submit').click(function() {
    data_form = $(this).attr('data-form');
    var scroll_html_h = $('html').outerHeight(); 
    var hv = $(window).height();
    $('.form-wrapper-main-modal[data-form='+data_form+']').css('display', 'block');
    if (scroll_html_h > hv) {
        var style_h = '17px';
    } else {
        var style_h = '0px';
    }
    $('body').css({
        'overflow': 'hidden',
        'padding-right': style_h
    });
	var brand = $(this).attr('brd');
	var zag="Заявка на ремонт стиральной машины "+brand;
	
	$('.modal-zag').html(zag);
	$('.inpbr').val(brand);
    $(document).bind('click.myEvent', function(e) {
        if ($(e.target).closest('.form-wrapper-main-modal[data-form='+data_form+'] .main-modal-block-form').length == 0) {
            $('.form-wrapper-main-modal[data-form='+data_form+']').css('display', 'none');
            $('body').removeAttr('style');
            $(document).unbind('click.myEvent');
        }
    });
    return false;
});
$('body').on('click', '.modal-close', function() {
    $('.form-wrapper-main-modal[data-form='+data_form+']').css('display', 'none');
    $('body').removeAttr('style');
    return false;
});

  return false;
});