// WOW

new WOW().init();   



function isBreakpoint(alias) {

    return $('.device-' + alias).is(':visible');

}



// Backstretch

$(".sponsors").backstretch('/img/renaissance-sportive-forestoise-background-2.jpg');

$(".header").backstretch('/img/renaissance-sportive-forestoise-background.jpg');



// LazyLoad

$('img.lazy').lazyload({

    effect : 'fadeIn'

});



// Full Width Images & Video from TinyMce

function addFullWidthToImageAndVideo(selector) {



    $(selector).each(function() {



        if ($(this).attr('style') === undefined || $(this).attr('style') === false) {



            $(this).css({'width' : '100%'})

        };

     

    });

	

}

addFullWidthToImageAndVideo('iframe');

addFullWidthToImageAndVideo('img.lazy');



// Fix display checkbox in form

$('#appbundle_tournament_registration_add_tournamentRegistrationTeams').parent().removeClass('col-lg-6');

