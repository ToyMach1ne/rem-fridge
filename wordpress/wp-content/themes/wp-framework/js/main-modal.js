jQuery(document).ready(function(a){var r="";return a(".main-modal-submit").click(function(){r=a(this).attr("data-form");var o=a("html").outerHeight(),t=a(window).height();if(a(".form-wrapper-main-modal[data-form="+r+"]").css("display","block"),o>t)var m="17px";else var m="0px";return a("body").css({overflow:"hidden","padding-right":m}),a(document).bind("click.myEvent",function(o){0==a(o.target).closest(".form-wrapper-main-modal[data-form="+r+"] .main-modal-block-form").length&&(a(".form-wrapper-main-modal[data-form="+r+"]").css("display","none"),a("body").removeAttr("style"),a(document).unbind("click.myEvent"))}),!1}),a(".main-modal-gift-submit").click(function(){r=a(this).attr("data-form");var o=a("html").outerHeight(),t=a(window).height();if(a(".form-wrapper-main-modal[data-form="+r+"]").css("display","block"),o>t)var m="17px";else var m="0px";a("body").css({overflow:"hidden","padding-right":m});var n=a(this).attr("brd"),d="Вызовите мастера и получите подарок!";return a(".modal-zag").html(d),a(".inpbr").val(n),a(document).bind("click.myEvent",function(o){0==a(o.target).closest(".form-wrapper-main-modal[data-form="+r+"] .main-modal-block-form").length&&(a(".form-wrapper-main-modal[data-form="+r+"]").css("display","none"),a("body").removeAttr("style"),a(document).unbind("click.myEvent"))}),!1}),a(".main-modal-brand-submit").click(function(){r=a(this).attr("data-form");var o=a("html").outerHeight(),t=a(window).height();if(a(".form-wrapper-main-modal[data-form="+r+"]").css("display","block"),o>t)var m="17px";else var m="0px";a("body").css({overflow:"hidden","padding-right":m});var n=a(this).attr("brd"),d="Заявка на ремонт стиральной машины "+n;return a(".modal-zag").html(d),a(".inpbr").val(n),a(document).bind("click.myEvent",function(o){0==a(o.target).closest(".form-wrapper-main-modal[data-form="+r+"] .main-modal-block-form").length&&(a(".form-wrapper-main-modal[data-form="+r+"]").css("display","none"),a("body").removeAttr("style"),a(document).unbind("click.myEvent"))}),!1}),a("body").on("click",".modal-close",function(){return a(".form-wrapper-main-modal[data-form="+r+"]").css("display","none"),a("body").removeAttr("style"),!1}),!1});
//# sourceMappingURL=maps/main-modal.js.map