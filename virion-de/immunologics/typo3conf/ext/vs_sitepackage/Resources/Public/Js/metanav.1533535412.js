$(document).ready(function() {

	$('.search-trigger').next('.tooltip').css({'visibility': 'none', 'opacity': '0', 'z-index': '0'});
	$('.login-trigger').next('.tooltip').css({'visibility': 'none', 'opacity': '0', 'z-index': '0'});

    $('.search-trigger,.login-trigger').next('.tooltip').on('click', function(e) {
        e.stopPropagation();
    });

	$('body').click(function() {
		$('.search-trigger').next('.tooltip').css({'visibility': 'none', 'opacity': '0', 'z-index': '0'});
        $('.search-trigger,.login-trigger').removeClass('active');
		$('.login-trigger').next('.tooltip').css({'visibility': 'none', 'opacity': '0', 'z-index': '0'});
        $('.login-trigger,.login-trigger').removeClass('active');
	});
	
	$('.search-trigger,.login-trigger').on('click', function(e) {
        e.stopPropagation();
        $('.search-trigger,.login-trigger').removeClass('active');
        $(this).addClass('active');
        $('.search-trigger,.login-trigger').next('.tooltip').css({'visibility': 'none', 'opacity': '0', 'z-index': '0'});
		if ($(this).next('.tooltip').css('opacity') == 0) {
			$(this).next('.tooltip').css({'visibility': 'visible', 'opacity': '1', 'z-index': '1000'});
		} else {
			$(this).next('.tooltip').css({'visibility': 'none', 'opacity': '0', 'z-index': '0'});
		}
	});
});