/* Funktionen FadeIn und FadeOut */
function fadeOut(element) {
	$(element).animate({
		opacity: 0,
	}, 500, function(){
		$(element).css("visibility","hidden");
	});
}
function fadeIn(element) {
	$(element).css("visibility","visible");
	$(element).animate({
		opacity: 1,
	}, 300);
}

/* Menu Overlay */
$(".nav-link.dropdown-toggle").click(function(e){	
	e.preventDefault();
	
	if(window.innerWidth > 991) {
		if(!$(this).parent().hasClass("show")){
			
			updateMenuOverlay($(this));
			
			fadeIn($(".nav-overlay"));
			
			if(!$("body").hasClass("nav-expanded")){
				$("body").toggleClass("nav-expanded");
			}	
			
			$(".nav-overlay, .header").addClass("open");
			$(".overlay").css("visibility","visible");
			$(".overlay").css("opacity","1");
		}
		else {
			closeMenu(true);
		}
	}
});

// close menu by clicking on overlay
$(".overlay").click(function(e){
	closeMenu();
});

// change menu text by hovering over second level menu link
$('.haupt-navi .dropdown-menu a').on('mouseenter', function () {
	if (window.innerWidth > 991) {
		updateMenuOverlay($(this));
    }
});
// force click event on tap for iOS
$('.haupt-navi .dropdown-menu a').on('click touchend', function(e) {
    var el = $(this);
    var link = el.attr('href');
    window.location = link;
});

// function updateMenuOverlay: calculates height of navi overlay (desktop only)
function updateMenuOverlay(obj) {
	// height to first level underline
	var headerHeight = 89;
	// get height of open dropdown list
	var overlayHeight = obj.closest(".nav-item").find(".dropdown-menu").outerHeight();
	// adjust the menulink text if available and return its new height
	var addHeight = adjustMenuLinkText(obj);
	// adjust navi overlay height
	$(".nav-overlay").css('height', headerHeight+overlayHeight+addHeight);
}

// function adjustMenuLinkText: changes menu text and returns its height
function adjustMenuLinkText(obj) {
	var newText = '';
	// set menutext if available
	if(obj.siblings(".menulinktext").html()) {
		var newText = '<div class="showmenutext">' + obj.siblings(".menulinktext").html() + '</div>';
	}
	// fill menutext div with new text if available
	$(".nav-overlay .menutext-container").html(newText);
	// adjust width of 'menutext-container'
	adjustMenuTextWidth();
	// return new height
	return $(".nav-overlay .menutext-container").height();

}

// function adjustMenuTextWidth: changes width of menu text
function adjustMenuTextWidth() {
	var naviPosition = $(".haupt-navi").offset().left;
	$(".menutext-container").css("left", naviPosition+20);
}

$(window).resize(function(){adjustMenuTextWidth();});

// function closeMenu
function closeMenu(openMenuClicked) {
	if($(".navbar-toggler[aria-expanded=true]")[0]) {
		$("button.navbar-toggler").click();
	}
	$("body").removeClass("nav-expanded");
	fadeOut($(".overlay"));
	if(!openMenuClicked) {
		$('.dropdown.show .dropdown-toggle').dropdown('toggle');
	}
	fadeOut($(".nav-overlay"));
	$(".nav-overlay, .header").removeClass("open");
}

// Add fading animation to Bootstrap dropdown when expanding and collapsing
$('.dropdown').on('show.bs.dropdown', function() {
	if(window.innerWidth > 991) {
		$(this).find('.dropdown-menu').first().stop(true, true).fadeToggle(300);
	} else {
		$(this).find('.dropdown-menu').first().stop(true, true).slideDown();
	}
}).on('hide.bs.dropdown', function() {
	if(window.innerWidth > 991) {
		$(this).find('.dropdown-menu').first().stop(true, true).fadeToggle(300);
	} else {
		$(this).find('.dropdown-menu').first().stop(true, true).slideUp();
	}
});

// mobile toggle body class "nav-expanded"
$('.navbar-collapse').on('show.bs.collapse', function() {
	$("body").toggleClass("nav-expanded");
	fadeIn($(".overlay"));
});
$('.navbar-collapse').on('hide.bs.collapse', function() {
	$("body").toggleClass("nav-expanded");
	fadeOut($(".overlay"));
});

/* Disable standard events & initialize menu dropdowns */
$(document).ready(function() {
	$(document).off('.dropdown.data-api');
	$('.dropdown-toggle').dropdown();
});

/* *********************
 * Close menu on viewport change
 **********************/
function toggleResponsive() {
	// initial call
	if(!$("body").hasClass("mobile-xs") && !$("body").hasClass("mobile") && !$("body").hasClass("desktop")){
		if(window.innerWidth > 991) {
			$("body").addClass("desktop");
		} else if (window.innerWidth > 767) {
			$("body").addClass("mobile");
		} else {
			$("body").addClass("mobile-xs");
		}
	}
	else if(window.innerWidth > 991){
		if($("body").hasClass("mobile")){
			//size changed from mobile to desktop
			$("body").removeClass("mobile").addClass("desktop");
			closeMenu();
			if($(".productfinder .filter")[0]){
				openFilterBar();
			}
		} 
	} else if(window.innerWidth > 767){
		if($("body").hasClass("desktop")){
			//size changed from desktop to mobile
			$("body").removeClass("desktop").addClass("mobile");
			closeMenu();
			if($(".productfinder .filter")[0]){
				closeFilterBar();
			}
		} else if($("body").hasClass("mobile-xs")){
			//size changed from mobile-xs to mobile
			$("body").removeClass("mobile-xs").addClass("mobile");
			closeMenu();
			if($(".productfinder .filter")[0]){
				openFilterToggles();
				openFilterBar();
			}
		} 
	} else {	
		if($("body").hasClass("mobile")){
			//size changed from mobile to mobile-x
			$("body").removeClass("mobile").addClass("mobile-xs");
			closeMenu();
			if($(".productfinder .filter")[0]){
				closeFilterBar();
				closeFilterToggles();
			}
		}
	} 
}
$(window).on('load resize', function () {toggleResponsive();});


