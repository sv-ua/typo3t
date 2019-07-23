

$(window).on('load', function () {
    var $preloader = $('.spinner_block'),
        $spinner   = $preloader.find('.spinner'),
        time = 500;
    $spinner.delay(time).fadeOut();

    $preloader.delay(time + 500).fadeOut('slow');    
    $("#header, #main, #footer").removeClass("opasiti_load");
});



$(document).ready(function(){  	

/*
    $(".wrapper_scroll").niceScroll({
        touchbehavior: true,
        cursordragontouch: true
    });
*/

/*animation block*/
/*
    $(window).on("scroll load", function(){
        $('.block_container_animate').each(function(){
            var obj = $(this);
            var offsetTop = obj.offset().top;
            var w_height = $(window).height();
            var scrollTop = $(window).scrollTop();

            if(offsetTop < (scrollTop + w_height - 100 ))
                obj.addClass('shown');
        });
    });
*/ 

/*mobile menu toggle*/
	$( ".mobile_toggle" ).on('click',function() {
	  $( ".mobile_hidden" ).fadeToggle(200);
	  $(this).toggleClass("open");
	}); 


/*lang toggle*/
	/*
	$(".lang").on("click", function(){	
		$(this).addClass("default_lang").siblings().removeClass("default_lang").parent().toggleClass("over_lang_hide");	
	});
	$('.lant_toggle').hover(		
       function () {
           $(this).removeClass("over_lang_hide");
       }, 		
       function () {
        	$(this).addClass("over_lang_hide");
       }
    );
    */


    $('.carusel_specializcje .item_spec .vn_spec, .item__zespol').hover(        
       function () {
           $(this).find(".hidden_content").stop(true, true).slideDown();
       },       
       function () {
            $(this).find(".hidden_content").stop(true, true).slideUp();
       }
    );
	

/*scroll class togle*/
	var $menu = $("#header");
    $(window).scroll(function(){    	
    	if($(this).scrollTop() > 50){
    		$('body').addClass("scroll");
    	}if($(this).scrollTop() <= 50){
    		$('body').removeClass("scroll");
    	}
    });


/*animateLink*/
     /*$(".logo_top a").on("click", function (event) {    
        event.preventDefault();   
        var id  = $(this).attr('href'),   
        top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 1000);
        });*/
        $(".scrol_to_block a").on("click", function (event) {    
            event.preventDefault();   
            var id  = $(this).attr('href'),   
            topAmimate = $(id).offset().top;
            if($(window).width() > 1220){
                topAmimate -= 90; 
            }
            $('body,html').animate({scrollTop: topAmimate}, 1000);
        });

	    $("#scroll_top").on("click", function (event) { 
            $('body,html').animate({scrollTop: 0}, 1000);
	    });


/*
    $(".bottom_btn a, .scrollstyle_2 a").on("click", function (event) {    
        event.preventDefault();   
        var top = $(".front_block_in_top_decor").offset().top - 0;
        $('body,html').animate({scrollTop: top}, 1000);
    });
*/


//owl-1-slider
    $(".owl-carousel-slider").owlCarousel({
        loop:true,
        dots:true,
        nav:false,
        animateOut: 'fadeOut',
        autoplay:true,
        smartSpeed:1500,
        responsive:{
            0:{
                items:1
            },
            500:{
                items:1
            },
            767:{
                items:1
            },
            991:{
                items:1
            },
            1200:{
                items:1
            }
        }
    });
//owl-1-specialixation
    $(".owl-carousel-specc").owlCarousel({
        //loop:true,
        dots:false,
        nav:true,
        //autoplay:true,
        smartSpeed:1500,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            767:{
                items:2
            },
            991:{
                items:3
            },
            1200:{
                items:4
            }
        }
    });
//owl-1-citata
	$(".owl-carousel-citata").owlCarousel({
		loop:true,
        dots:true,
        nav:false,
        autoplay:true,
        smartSpeed:1500,
		responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:1
	        },
	        767:{
	            items:1
	        },
	        991:{
	            items:1
	        },
	        1200:{
	            items:1
	        }
    	}
	});




/*modal windov bootsrtap */
/*
	$('.windov').on('shown.bs.modal', function (){});
	$('.windov').modal('show')
*/

/*map*/
/*
    var maptmp = [{
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [{"color": "#e9e9e9"}, {"lightness": 17}]
    }, {
        "featureType": "landscape",
        "elementType": "geometry",
        "stylers": [{"color": "#f5f5f5"}, {"lightness": 20}]
    }, {
        "featureType": "road.highway",
        "elementType": "geometry.fill",
        "stylers": [{"color": "#ffffff"}, {"lightness": 17}]
    }, {
        "featureType": "road.highway",
        "elementType": "geometry.stroke",
        "stylers": [{"color": "#ffffff"}, {"lightness": 29}, {"weight": 0.2}]
    }, {
        "featureType": "road.arterial",
        "elementType": "geometry",
        "stylers": [{"color": "#ffffff"}, {"lightness": 18}]
    }, {
        "featureType": "road.local",
        "elementType": "geometry",
        "stylers": [{"color": "#ffffff"}, {"lightness": 16}]
    }, {
        "featureType": "poi",
        "elementType": "geometry",
        "stylers": [{"color": "#f5f5f5"}, {"lightness": 21}]
    }, {
        "featureType": "poi.park",
        "elementType": "geometry",
        "stylers": [{"color": "#dedede"}, {"lightness": 21}]
    }, {
        "elementType": "labels.text.stroke",
        "stylers": [{"visibility": "on"}, {"color": "#ffffff"}, {"lightness": 16}]
    }, {
        "elementType": "labels.text.fill",
        "stylers": [{"saturation": 36}, {"color": "#333333"}, {"lightness": 40}]
    }, {"elementType": "labels.icon", "stylers": [{"visibility": "off"}]}, {
        "featureType": "transit",
        "elementType": "geometry",
        "stylers": [{"color": "#f2f2f2"}, {"lightness": 19}]
    }, {
        "featureType": "administrative",
        "elementType": "geometry.fill",
        "stylers": [{"color": "#fefefe"}, {"lightness": 20}]
    }, {
        "featureType": "administrative",
        "elementType": "geometry.stroke",
        "stylers": [{"color": "#fefefe"}, {"lightness": 17}, {"weight": 1.2}]
    }];

    function initializeMap() {
        var mapCanvas = $('#map-canvas');
        var stylesArray = maptmp;
        var styledMapOptions = {};
        var mapOptions = {
            scrollwheel: false,
            mapTypeControl: false,
            zoom: mapCanvas.data('zoom'),
            center: new google.maps.LatLng(mapCanvas.data('lat'), mapCanvas.data('lng'))
        };
        var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
        var image = mapCanvas.data('icon');
        var myLatLng = new google.maps.LatLng(mapCanvas.data('lat'), mapCanvas.data('lng'));
        new google.maps.Marker({position: myLatLng, map: map, icon: image,});
        var styledMap = new google.maps.StyledMapType(stylesArray, {name: "Styled Map"});
        map.mapTypes.set('map_style', styledMap);
        map.setMapTypeId('map_style');

        //var iconBase = 'http://demo.ravelia.pl/Volumetric_Projekt_front/asset/img/';
        var icons = {
           parking: {
             icon: 'mark_red.png'
           },
           library: {
             icon: 'mark_green.png'
           },
           info: {
             icon: 'mark_red.png'
           },
           buss: {
             icon: 'mark_red.png'
           },
           cash: {
             icon: 'mark_green.png'
           }
        };

        var features = [
          {
            position: new google.maps.LatLng(52.2417476, 21.00456687),
            type: 'parking'
          }, {
            position: new google.maps.LatLng(52.2117476, 21.00568687),
            type: 'library'
          }, {
            position: new google.maps.LatLng(52.2317476, 21.04990687),
            type: 'info'
          }, {
            position: new google.maps.LatLng(52.2217476, 21.04790687),
            type: 'buss'
          }, {
            position: new google.maps.LatLng(52.2357476, 21.00090687),
            type: 'cash'
          }
        ];

        features.forEach(function(feature) {
          var marker = new google.maps.Marker({
            position: feature.position,
            icon: icons[feature.type].icon,
            map: map
          });
        });

    };
    if ($('#map-canvas').length) google.maps.event.addDomListener(window, 'load', initializeMap);
    //google.maps.event.addDomListener(window, 'load', initializeMap);

    $('.map-lock').on('click', function () {
        $(this).fadeOut(250);
    });
*/

/*cookie popup*/
/*
	$(".block_cookie_popup span a").on("click", function(e){	
		e.preventDefault();	
		$(".block_cookie_popup").fadeOut(333);
	});
*/

/*gallery*/
/*
    $(".prev_block a img").on("click", function (e) {
        e.preventDefault();
        var src = $(this).attr("src");
        $(".big_img img").attr("src", src);
        $(".prev_block").removeClass("active");
        $(this).parent().parent().addClass("active");
    });
*/

/*first word*/	
/*
	$(".top_img_block .main_content_top .title_front p").each(function () {
		var $p = $(this);
		$p.html($p.html().replace(/^(\w+)/, '<div class="bottom">$1</div>'));
	});
*/
	


/*accarseon*/
    $(".accardion__trigger").on("click", function (event) {    
        event.preventDefault();
        var $this = $(this),
            item = $this.closest(".accardeon__item"),
            list = $this.closest(".accardion__list"),
            items = list.find(".accardeon__item"),
            content = item.find(".accardion__inner"),
            otherContent = list.find(".accardion__inner"),
            duration = 333;
        if(!item.hasClass("active")){
            items.removeClass("active");
            item.addClass("active");
            otherContent.stop(true,true).slideUp(duration);
            content.stop(true,true).slideDown(duration);
        }else{
            content.stop(true,true).slideUp(duration);
            item.stop(true,true).removeClass("active");
        }   

    }); 




});


 