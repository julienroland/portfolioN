(function(e){var t,n,r;e(function(){e(".tri a").on("click",function(n){t=e(this).html();n.preventDefault();if(t==="Web"){e(".tri li.printt").removeClass("active");e(".tri li.toutt").removeClass("active");e(this).parent("li").addClass("active");e(".print.triage").parent(".p").css({opacity:0,transition:"all 0.5s ease"}).fadeOut();e(".print.triage").parent(".p").removeClass("show");e(".web.triage").parent(".p").removeClass("show").addClass("show");e(".web.triage").parent(".p").css({opacity:1,transition:"all 0.5s ease"}).fadeIn();e(".show:nth-child(odd)").addClass("impair");e(".show:nth-child(even)").removeClass("impair")}else if(t==="Print"){e(".tri li.webt").removeClass("active");e(".tri li.toutt").removeClass("active");e(this).parent("li").addClass("active");e(".web.triage").parent(".p").css({opacity:0,transition:"all 0.5s ease"}).delay(100).fadeOut();e(".web.triage").parent(".p").removeClass("show");e(".print.triage").parent(".p").removeClass("show").addClass("show");e(".print.triage").parent(".p").css({opacity:1,transition:"all 0.5s ease"}).fadeIn();e(".show:nth-child(odd)").addClass("impair");e(".show:nth-child(even)").removeClass("impair")}else if(t==="Tout"){e(".tri li.webt").removeClass("active");e(".tri li.printt").removeClass("active");e(this).parent("li").addClass("active");e(".web.triage").parent(".p").removeClass("show").addClass("show");e(".print.triage").parent(".p").removeClass("show").addClass("show");e(".print.triage").parent(".p").css({opacity:1,transition:"all 0.5s ease"}).fadeIn();e(".web.triage").parent(".p").css({opacity:1,transition:"all 0.5s ease"}).fadeIn();e(".show:nth-child(even)").addClass("impair");e(".show:nth-child(odd)").removeClass("impair")}})})}).call(this,jQuery);