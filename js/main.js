jQuery(function($) {
	$("input[type='tel']").mask("+7 (999) 999-99-99");
	
	lightbox.option({		
		'albumLabel': "Изображение %1 из %2"
		/*,
		'wrapAround': true*/
	});

	$(".slider-trainers .slides").slick({
		prevArrow: '<button class="slider-controls prev" type="button">Предыдущий</button>',
		nextArrow: '<button class="slider-controls next" type="button">Следующий</button>',
		infinite: true,
		slidesToShow: 4,
		slidesToScroll: 1,
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1
				}
			}, {
				breakpoint: 768,
				settings: {
					dots: true,
					arrows: false,
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}
		]
	})

	$(".slider-photos .slides").slick({
		prevArrow: '<button class="slider-controls prev" type="button">Предыдущий</button>',
		nextArrow: '<button class="slider-controls next" type="button">Следующий</button>',
		infinite: true,
		slidesToShow: 4,
		slidesToScroll: 4,
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 3
				}
			}, {
				breakpoint: 768,
				settings: {
					dots: true,
					arrows: false,
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}
		]
	})

	$(".slider-fresh-news .slides").slick({
		prevArrow: '<button class="slider-controls prev" type="button">Предыдущий</button>',
		nextArrow: '<button class="slider-controls next" type="button">Следующий</button>',
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 1,
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2
				}
			}, {
				breakpoint: 768,
				settings: {
					dots: true,
					arrows: false,
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}
		]
	})

	$(".slider-students .slides").slick({
		prevArrow: '<button class="slider-controls with-arrow prev" type="button">Предыдущий</button>',
		nextArrow: '<button class="slider-controls with-arrow next" type="button">Следующий</button>',
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		responsive: [
			{
				breakpoint: 768,
				settings: {
					dots: true,
					arrows: false,
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}
		]
	});


	/*
		Слайдеры на halls_item.html
	*/
	$(".halls-item-slider .slider-nav").slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		infinite: true,
		vertical: true,
		focusOnSelect: true,
		customPaging: "20px",
		asNavFor: ".halls-item-slider .slider-for"
	});

	$(".halls-item-slider .slider-for").slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		infinite: true,
		asNavFor: ".halls-item-slider .slider-nav",
		responsive: [
			{
				breakpoint: 768,
				settings: {
					dots: true
				}
			}
		]
	});

	$(".slider-more-halls .slides").slick({
		prevArrow: '<button class="slider-controls prev" type="button">Предыдущий</button>',
		nextArrow: '<button class="slider-controls next" type="button">Следующий</button>',
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 1,
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2
				}
			}, {
				breakpoint: 768,
				settings: {
					dots: true,
					arrows: false,
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}
		]
	});
	
	/*
		Слайдер на our_trainers.html
	*/
	$(".slider-rewards .slides").slick({
		prevArrow: '<button class="slider-controls prev" type="button">Предыдущий</button>',
		nextArrow: '<button class="slider-controls next" type="button">Следующий</button>',
		infinite: true,
		slidesToShow: 5,
		slidesToScroll: 1,
		focusOnSelect: true,
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1
				}
			}, {
				breakpoint: 768,
				settings: {
					dots: true,
					arrows: false,
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}
		]
	});
	

	/*
		Open Video
	*/
	$(".video-js").click(function(event) {
		event.preventDefault();
		$(".modal-video").fadeIn(500);
		$(".modal-video").click(function(event) {
			if(event.target.classList == "modal-video") {
				$(".modal-video").fadeOut(500);
			}
		});
		
		$(".modal-video .close").click(function(event) {
			$(".modal-video").fadeOut(500);
		})
	})
});


/*
	Карта
*/
var isMapsApiLoaded = false;
window.mapsCallback = function () {
	isMapsApiLoaded = true;
  
	google.maps.event.addDomListener(window, 'load', init);

	function init() {
		// Basic options for a simple Google Map
		// For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
		var mapOptions = {
			// How zoomed in you want the map to start at (always required)
			zoom: 10,
			scrollwheel: false,
			mapTypeControl: false,


			// The latitude and longitude to center the map (always required)
			center: new google.maps.LatLng(55.719906, 37.453559), // New York

			// How you would like to style the map. 
			// This is where you would paste any style found on Snazzy Maps.
			styles: [{
				"featureType":"landscape",
				"stylers":[{
					"hue":"#FFBB00"
				}, {
					"saturation":43.400000000000006
				}, {
					"lightness":37.599999999999994
				}, {
					"gamma":1
				}]
			}, {
				"featureType":"road.highway",
				"stylers":[{
					"hue":"#FFC200"
				}, {
					"saturation":-61.8
				}, {
					"lightness":45.599999999999994
				}, {
					"gamma":1
				}]
			}, {
				"featureType":"road.arterial",
				"stylers":[{
					"hue":"#FF0300"
				}, {
					"saturation":-100
				}, {
					"lightness":51.19999999999999
				}, {
					"gamma":1
				}]
			}, {
				"featureType":"road.local",
				"stylers":[{
					"hue":"#FF0300"
				}, {
					"saturation":-100
				}, {
					"lightness":52
				}, {
					"gamma":1
				}]
			}, {
				"featureType":"water",
				"stylers":[{
					"hue":"#0078FF"
				}, {
					"saturation":-13.200000000000003
				}, {
					"lightness":2.4000000000000057
				}, {
					"gamma":1
				}]
			}, {
				"featureType":"poi",
				"stylers":[{
					"hue":"#00FF6A"
				}, {
					"saturation":-1.0989010989011234
				}, {
					"lightness":11.200000000000017
				}, {
					"gamma":1
				}]
			}]
		};

		// Get the HTML DOM element that will contain your map 
		// We are using a div with id="map" seen below in the <body>
		var mapElement = document.getElementById('map');

		// Create the Google Map using our element and options defined above
		var map = new google.maps.Map(mapElement, mapOptions);

		// Let's also add a marker while we're at it
		var image = "../judo/img/placemark.png";
		/*
		var halls = [
			["1 микрорайон д.23 корпус Д. На базе студии танца Dance23", 55.603072, 37.356154, 1],
			["град Московский , улица Солнечная д.5<br>На базе фитнес клуба СпортЛэнд", 55.589887, 37.368918, 2],
			["Перово: ул. Перовская д.1", 55.748109, 37.755428, 3],
			["Поселок Коммунарка, Лазурная улица , 14", 55.567394, 37.470851, 4]
		]*/

		 var contentString1 = 
			 '<div class=' + 'open-placemark clearfix' + '>' +
				'<div class=' + 'open-placemark-img' + '>' + 
					'<img src=' + '../judo/img/placemark-point.png' + '>' + 
				'</div>' + 
				'<p>Зал в Кунцево, ул. Артамонова 1</p>' + 
				'<a href="halls_item.html" class="btn btn-red">Посмотреть зал</a>' + 
			'<div>';

		var infowindow1 = new google.maps.InfoWindow({
			content: contentString1
		});

		var marker1 = new google.maps.Marker({
			position: new google.maps.LatLng(55.603072, 37.356154),
			map: map,
			icon: image,
			title: "Зал 1"
		});

		marker1.addListener('click', function() {
			infowindow1.open(map, marker1);
		});

	}
}

/*
	Back to top
*/
var scrolled;

function Show_btn() {
	scrolled = window.pageYOffset;
	
	if(scrolled > 1000) {
		$(".btn-to-top").fadeIn(500);
	} else {
		$(".btn-to-top").fadeOut(500);
	}
}

Show_btn();

window.addEventListener("scroll", function() {
	Show_btn();
})

$(".btn-to-top").on("click", function(event) {
	event.preventDefault();
	$('html,body').animate({ scrollTop: 0 }, 'slow');
	return false; 
})	

/*
	Mobile menu
*/
jQuery(function($) {
	var btn_menu = document.querySelector(".btn-open-menu");
	var menu = document.querySelector("nav ul");
	var btn_shop = document.querySelector(".btn-shop");
	var form_search = document.querySelector(".form-search");
//	var btn_shop_insert = menu.createElement('<li class="shop-insert insert"></li>');
//	var form_search_insert = document.createElement('li class="form_search-insert.insert"');

	var width = window.innerWidth;
	var toggle = 0;
	
	$(menu).append('<li class="search-insert insert"></li>');
	$(menu).append('<li class="shop-insert insert"></li>');
	$(btn_shop).clone().appendTo($(".shop-insert"));
	$(form_search).clone().appendTo($(".search-insert"));
//	$(menu).append(form_search_insert);

	window.addEventListener("resize", function(event) {
		width = window.innerWidth;
		if (width > 993) {
			menu.classList.add("flex");
			if (toggle == 2) {
				$("nav ul li.dropdown-menu ul").slideUp(100);
				menu.classList.add("flex");
				toggle = 0;
			} else if (toggle == 1) {
				menu.classList.add("flex");
				toggle = 0;
			}
		} else {
			menu.classList.remove("flex");
		}
		/*
		if (width < 769) {
			
		}*/
		
	});

	if (width < 993) {
		btn_menu.addEventListener("click", function(event) {
			$(menu).slideToggle(500);
			$(btn_menu).toggleClass("active");
			
			if (toggle == 0) {
				toggle = 1;
			} else {
				toggle = 0;
			}
		});
	
		$("nav ul li.dropdown-menu > a").on("click", function(event) {
			if($(this).children("ul")) {
				event.preventDefault();					
			}
		});
		
		$("nav ul li.dropdown-menu").on("click", function(event) {
			$("nav ul li.dropdown-menu ul").slideUp(500);				
			if($(this).children("ul").css("display") == "block") {
				$(this).children("ul").slideUp(500);			
			} else {
				$(this).children("ul").slideDown(500);				
			}
			
			if (toggle == 0) {
				toggle = 2;
			} else {
				toggle = 0;
			}
		});
	}
});


/*
	modal-form
*/	   
jQuery(function($) {
	var btn_call_me_node = document.querySelectorAll(".btn-call-me");
	var btn_call_me_arr = [btn_call_me_node.length];
	
	for(var i = 0; i < btn_call_me_node.length; i++) {
		btn_call_me_arr[i] = btn_call_me_node.item(i);
	}
	
	btn_call_me_arr.forEach(function(btn_call_me, i, btn_call_me_arr) {
		btn_call_me.addEventListener("click", function(event) {
			event.preventDefault();
			$(".modal").fadeToggle(500);
			$(".close").on("click", function(event) {
				$(".modal").fadeOut(500);
			})
		})
	})
});


/*
	tabs
*/
if(document.querySelector(".tabs")) {
	var btn_tabs_node = document.querySelectorAll(".btn-tab");
	var btn_tabs = [btn_tabs_node.length];
	var tab_items_node = document.querySelectorAll(".tab-item");
	var tab_items = [tab_items_node.length];
	
	for (var i = 0; i < btn_tabs_node.length; i++) {
		btn_tabs[i] = btn_tabs_node.item(i);
		tab_items[i] = tab_items_node.item(i);
	}
	
	btn_tabs[0].classList.add("active");
	tab_items[0].classList.add("active");
	
	btn_tabs.forEach(function(btn_tab, i, btn_tabs) {
		btn_tab.addEventListener("click", function(event) {
			event.preventDefault();
			for (var y = 0; y < btn_tabs.length; y++) {
				if(btn_tabs[y].classList.contains("active")) {
					btn_tabs[y].classList.remove("active");
					tab_items[y].classList.remove("active");
				}
			};
			btn_tab.classList.add("active");
			tab_items[i].classList.add("active");
		})
	})
}