// start

jQuery(function ($) {
	// Foundation
	$(document).foundation();

	// Parallax
	$(window).scroll(function (e) {
		parallax();
	});

	function parallax() {
		var scrolled = $(window).scrollTop();
		$('.parafirst').css('background-position', 'center ' + -(scrolled * 0.15) + 'px'),
			$('.parasecond').css('background-position', 'center ' + -(scrolled * 0.25) + 'px');
	}


	$('.vidscroll').slick({
		slidesToShow: 4,
		slidesToScroll: 4,
		dots: false,
		infinite: true,
		speed: 300,
		responsive: [{
				breakpoint: 1024,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 4,

				}
			}, {
				breakpoint: 600,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 3
				}
			}, {
				breakpoint: 480,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2
				}
			}
			// You can unslick at a given breakpoint now by adding:
			// settings: "unslick"
			// instead of a settings object
		]
	});

	// On swipe event
	$('.vidscroll').on('swipe', function (event, slick, direction) {
		console.log(direction);
		// left
	});

	// On edge hit
	$('.vidscroll').on('edge', function (event, slick, direction) {
		console.log('edge was hit');
	});

	// On before slide change
	$('.vidscroll').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
		console.log(nextSlide);
	});

});
//end

(function ($) {
	// Begin
	function new_map($el) {

		// var
		var $markers = $el.find('.marker');


		// vars
		var args = {
			zoom: 16,
			center: new google.maps.LatLng(0, 0),
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};


		// create map	        	
		var map = new google.maps.Map($el[0], args);


		// add a markers reference
		map.markers = [];


		// add markers
		$markers.each(function () {

			add_marker($(this), map);

		});


		// center map
		center_map(map);


		// return
		return map;

	}

	/*
	 *  add_marker
	 *
	 *  This function will add a marker to the selected Google Map
	 *
	 *  @type	function
	 *  @date	8/11/2013
	 *  @since	4.3.0
	 *
	 *  @param	$marker (jQuery element)
	 *  @param	map (Google Map object)
	 *  @return	n/a
	 */

	function add_marker($marker, map) {

		// var
		var latlng = new google.maps.LatLng($marker.attr('data-lat'), $marker.attr('data-lng'));

		// create marker
		var marker = new google.maps.Marker({
			position: latlng,
			map: map
		});

		// add to array
		map.markers.push(marker);

		// if marker contains HTML, add it to an infoWindow
		if ($marker.html()) {
			// create info window
			var infowindow = new google.maps.InfoWindow({
				content: $marker.html()
			});

			// show info window when marker is clicked
			google.maps.event.addListener(marker, 'click', function () {

				infowindow.open(map, marker);

			});
		}

	}

	/*
	 *  center_map
	 *
	 *  This function will center the map, showing all markers attached to this map
	 *
	 *  @type	function
	 *  @date	8/11/2013
	 *  @since	4.3.0
	 *
	 *  @param	map (Google Map object)
	 *  @return	n/a
	 */

	function center_map(map) {

		// vars
		var bounds = new google.maps.LatLngBounds();

		// loop through all markers and create bounds
		$.each(map.markers, function (i, marker) {

			var latlng = new google.maps.LatLng(marker.position.lat(), marker.position.lng());

			bounds.extend(latlng);

		});

		// only 1 marker?
		if (map.markers.length == 1) {
			// set center of map
			map.setCenter(bounds.getCenter());
			map.setZoom(16);
		} else {
			// fit to bounds
			map.fitBounds(bounds);
		}

	}

	/*
	 *  document ready
	 *
	 *  This function will render each map when the document is ready (page has loaded)
	 *
	 *  @type	function
	 *  @date	8/11/2013
	 *  @since	5.0.0
	 *
	 *  @param	n/a
	 *  @return	n/a
	 */
	// global var
	var map = null;

	$(document).ready(function () {

		$('.acf-map').each(function () {

			// create map
			map = new_map($(this));

		});

	});

})(jQuery);

//end









//TDR: add Google Analytics code to buttons
jQuery(document).ready(function ($j) {
	//$j(function(){
	//	$j('#signupframe').responsiveIframe();
	// });        


	var $touch = $j('.touch'),
		$notouch = $j('.no-touch'),
		$navli = $j('ul#menu-main-menu li'),
		$open = $j('.open'),
		$vidcats = $j('.vidcats ul'),
		$vidh2 = $j('.vidcats h2'),
		$signupbtn = $j('.signupbtn'),
		$signupwrap = $j('.signupwrap'),
		$signinexist = $j('.signinexistbtn'),
		$signinexist1 = $j('.signinexistbtn1'),

		$signinnew = $j('.signinnewbtn'),
		$nolink = $j('.nolink > a'),
		$body = $j('body'),
		$xbox = $j('.xbox');

	// TURN OFF NOLINK
	$nolink.click(function (e) {
		e.preventDefault();
		return false;
	});

	// PREVENT MULTIPLE FORM SUBMISSIONS
	$j("form").submit(function () {
		$j(this).submit(function () {
			return false;
		});
		return true;
	});


	// SIGN UP FORMS
	if ($touch.length) {
		if ($j('.signupwrap').hasClass('submitted')) {
			$signupwrap.show();
			$j('.signin').hide();
			$j('.signupexist').show();
		}
	} else {
		if ($j('.signupwrap').hasClass('submitted') && $j('.signupwrap').hasClass('errors')) {
			$signupwrap.show();
			$j('.signin').hide();
			$j('.signupexist').show();
		} else if ($j('.signupwrap').hasClass('submitted')) {
			$signupwrap.show();
		}
		if ($j('.officecheck').checked) {
			$j('.office-delivery').show();
		}
	}
	$signupbtn.click(function () {
		$signupwrap.show();
		$j('html, body').animate({
			scrollTop: $signupwrap.offset().top - 100
		}, 'slow');
	});
	$signinexist.click(function () {
		$j('.signin').hide();
		$j('.signupexist').show();
		//TDR: add Google Analytics code to buttons
		_gaq.push(['_trackEvent', 'CustomerConnect', 'Existing Customer']);
	});
	$signinnew.click(function () {
		window.location.href = '/customer-connect/#signup';
	});
	$j('.officecheck').change(function () {
		if (this.checked) {
			$j('.office-delivery').show();
		} else {
			$j('.office-delivery').hide();
		}
	});
	$j('.xbox').click(function () {
		$signupwrap.hide();
		$j('.account-signin-wrap').hide();
		$j('.signin').show();
		$j('.signupexist').hide();
		$j('.signupnew').hide();
	});
	$j('.account-updates').click(function (e) {
		e.preventDefault();
		$j('.account-signin-wrap').show();
	});
	//$j('.account-updates-nav').click(function(e) {
	//	e.preventDefault();
	//	$j('.account-signin-wrap').show();
	//	$j('html, body').animate({
	//		scrollTop: $j('.account-signin-wrap').offset().top}, 800);
	//	});
	//TDR: add Google Analytics code to buttons
	$existingSignupForm = $j('.signupexist #frmSignUp');
	$j('.signupexist #frmSignUp').submit(function (e) {
		if (typeof (_gaq.push) != 'array') {
			_gaq.push(['_trackEvent', 'CustomerConnect', 'Existing Customer Submit']);
			console.log('submitted');
			var date = new Date();
			var curDate = null;
			do {
				curDate = new Date();
			}
			while (curDate - date < 200);
		}
		return true;
		// window.location = '/existing-customer-sign-up/';
	});
	$signinexist1.click(function () {
		window.location.href = '/customer-connect/#login';
	});
});
//end