function getScrollBarWidth(){var e=jQuery("<div>").css({visibility:"hidden",width:100,overflow:"scroll"}).appendTo("body"),n=jQuery("<div>").css({width:"100%"}).appendTo(e).outerWidth();return e.remove(),100-n}jQuery(window).on("load",function(){var i=parseFloat(getScrollBarWidth());jQuery(".fusion-modal").each(function(){jQuery(this).parent(".fusion-builder-element-content").length||jQuery("body").append(jQuery(this))}),jQuery(".fusion-modal").bind("hidden.bs.modal",function(){jQuery("html").css("overflow",""),0!==i&&(jQuery("body").hasClass("layout-boxed-mode")&&jQuery('#sliders-container .main-flex[data-parallax="1"]').css("margin-left",function(e,n){return parseFloat(n)+i/2+"px"}),jQuery('body, .fusion-is-sticky .fusion-header, .fusion-is-sticky .fusion-secondary-main-menu, #sliders-container .main-flex[data-parallax="1"], #wpadminbar, .fusion-footer.fusion-footer-parallax').css("padding-right",""))}),jQuery(".fusion-modal").bind("show.bs.modal",function(){var e,n='body, .fusion-is-sticky .fusion-header, .fusion-is-sticky .fusion-secondary-main-menu, #sliders-container .main-flex[data-parallax="1"], #wpadminbar, .fusion-footer.fusion-footer-parallax';jQuery("html").css("overflow","visible"),0!==i&&(jQuery("body").hasClass("layout-boxed-mode")&&(n="body, #wpadminbar",jQuery('#sliders-container .main-flex[data-parallax="1"]').css("margin-left",function(e,n){return parseFloat(n)-i/2+"px"})),jQuery(n).css("padding-right",function(e,n){return parseFloat(n)+i+"px"})),e=jQuery(this),setTimeout(function(){jQuery(window).trigger("fusion-dynamic-content-render",e),jQuery(window).trigger("resize",["modal-open"])},350)}),1==jQuery("#sliders-container .tfs-slider").data("parallax")&&jQuery(".fusion-modal").css("top",jQuery(".header-wrapper").height()),jQuery(".fusion-modal").each(function(){jQuery(this).on("hide.bs.modal",function(){jQuery(this).find(".fusion-youtube iframe").each(function(){this.contentWindow.postMessage('{"event":"command","func":"pauseVideo","args":""}',"*")}),jQuery(this).find(".fusion-vimeo iframe").each(function(){new Vimeo.Player(this).pause()})})}),jQuery("[data-toggle=modal]").on("click",function(e){e.preventDefault()}),jQuery(".fusion-modal-text-link").click(function(e){e.preventDefault()})}),jQuery(document).ready(function(){jQuery(".fusion-modal").on("shown.bs.modal",function(){jQuery(this).find(".shortcode-map").each(function(){jQuery(this).reinitializeGoogleMap()})})});