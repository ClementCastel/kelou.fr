!function(e){var a={fullScreenHeader:!0,parallax:!0,parallaxFactor:10};skel.breakpoints({wide:"(max-width: 1680px)",normal:"(max-width: 1080px)",narrow:"(max-width: 840px)",mobile:"(max-width: 736px)"}),e(function(){var l=e(window),o=e("body");if(skel.vars.mobile&&(a.parallax=!1,o.addClass("is-scroll")),o.addClass("is-loading"),l.on("load",function(){o.removeClass("is-loading")}),skel.vars.IEVersion<9&&e(":last-child").addClass("last-child"),e("form").placeholder(),skel.on("+mobile -mobile",function(){e.prioritize(".important\\28 mobile\\29",skel.breakpoint("mobile").active)}),e(".scrolly-middle").scrolly({speed:1e3,anchor:"middle"}),e(".scrolly").scrolly({speed:1e3,offset:function(){return skel.breakpoint("mobile").active?70:190}}),a.fullScreenHeader){var r=e("#header");if(r.length>0){var i=r.find("header");l.on("resize.overflow_fsh",function(){if(skel.breakpoint("mobile").active)r.css("padding","");else{var e=Math.max(192,(l.height()-i.outerHeight())/2);r.css("padding",e+"px 0 "+e+"px 0")}}).trigger("resize.overflow_fsh"),l.load(function(){l.trigger("resize.overflow_fsh")})}}if(("ie"==skel.vars.browser||skel.vars.mobile)&&(a.parallax=!1),a.parallax){var s,n=e();l.on("scroll.overflow_parallax",function(){s.css("background-position","center "+parseInt(l.scrollTop())/a.parallaxFactor*-1+"px")}).on("resize.overflow_parallax",function(){!skel.breakpoint("wide").active||skel.breakpoint("narrow").active?(o.css("background-position",""),s=n):s=o,l.triggerHandler("scroll.overflow_parallax")}).trigger("resize.overflow_parallax")}e(".gallery").poptrox({useBodyOverflow:!1,usePopupEasyClose:!1,overlayColor:"#0a1919",overlayOpacity:skel.vars.IEVersion<9?0:.75,usePopupDefaultStyling:!1,usePopupCaption:!0,popupLoaderText:"",windowMargin:10,usePopupNav:!0})})}(jQuery);