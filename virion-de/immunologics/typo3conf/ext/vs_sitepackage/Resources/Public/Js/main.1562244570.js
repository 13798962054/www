// decrypt helper function
function decryptCharcode(n,start,end,offset) {
    n = n + offset;
    if (offset > 0 && n > end) {
        n = start + (n - end - 1);
    } else if (offset < 0 && n < start) {
        n = end - (start - n - 1);
    }
    return String.fromCharCode(n);
}
// decrypt string
function decryptString(enc,offset) {
    var dec = "";
    var len = enc.length;
    for(var i=0; i < len; i++) {
        var n = enc.charCodeAt(i);
        if (n >= 0x2B && n <= 0x3A) {
            dec += decryptCharcode(n,0x2B,0x3A,offset);	// 0-9 . , - + / :
        } else if (n >= 0x40 && n <= 0x5A) {
            dec += decryptCharcode(n,0x40,0x5A,offset);	// A-Z @
        } else if (n >= 0x61 && n <= 0x7A) {
            dec += decryptCharcode(n,0x61,0x7A,offset);	// a-z
        } else {
            dec += enc.charAt(i);
        }
    }
    return dec;
}
// decrypt spam-protected emails
function linkTo_UnCryptMailto(s) {
    location.href = decryptString(s,4);
}

document.documentElement.setAttribute("data-browser", navigator.userAgent);

/* Initialisiere Plugins */
$(document).ready(function() {

    /* Visual Slider */
    if($('.visual.xtrasmall.slider')[0]) {
        $('.visual.xtrasmall.slider').flexslider({
            animation: "fade",
            smoothHeight:true,
            slideshowSpeed: 7000,
            directionNav: false,
            controlsContainer: $(".custom-controls-container"),
            customDirectionNav: $(".custom-navigation a")
        });
    }
    if($('.visual.small.slider')[0]) {
        $('.visual.small.slider').flexslider({
            animation: "fade",
            slideshowSpeed: 7000,
            smoothHeight:true,
            directionNav: false,
            controlsContainer: $(".custom-controls-container"),
            customDirectionNav: $(".custom-navigation a")
        });
    }

    if($('.visual.big.slider')[0]) {
        $('.visual.big.slider').flexslider({
            animation: "fade",
            slideshowSpeed: 7000,
            directionNav: false,
            controlsContainer: $(".custom-controls-container"),
            customDirectionNav: $(".custom-navigation a")
        });
    }

    if ($('#minicart')) {
        // initial loading
        $('#minicart').load($('#minicart').data('url') + ' #minicart > *', function() {

            // !!! Achtung !!! Kopie von typo3conf/ext/vs_products/Resources/Public/Js/products.js showProductsAlreadyInCart()
            // prüfe, welche products bereits auf Merkliste sind und zeige entsprechendes form
            var productsInCart = $("#product_ids").val().trim().split(',');
            var targets = ['default', 'variants', 'related'];
            for (var j = 0; j < productsInCart.length; j++) {
                for (var i = 0; i < targets.length; i++) {
                    if ($('#' + targets[i] + '-addForm-' + productsInCart[j])) {
                        $('#' + targets[i] + '-addForm-' + productsInCart[j]).toggle();
                    }
                    if ($('#' + targets[i] + '-removeForm-' + productsInCart[j])) {
                        $('#' + targets[i] + '-removeForm-' + productsInCart[j]).toggle();
                    }
                }
            }

        } );
    }
});

/* Parallax Visual */
$(window).scroll(function() {
    $('.visual.xtrasmall img').css('transform', "translate3d(0, "+ $(window).scrollTop()/2 +"px , 0)");
    $('.visual.small img').css('transform', "translate3d(0, "+ $(window).scrollTop()/2 +"px , 0)");
    $('.visual.small video').css('transform', "translate3d(0, "+ $(window).scrollTop()/2 +"px , 0)");
    $('.visual.big img').css('transform', "translate3d(0, "+ $(window).scrollTop()/2 +"px , 0)");
    /*    $('.visual.small video').css('transform', "translate3d(0, "+ $(window).scrollTop()/2 +"px , 0)");
        $('.visual.big video').css('transform', "translate3d(0, "+ $(window).scrollTop() +"px , 0)");*/
    /*$('.header-wrapper').addClass('scrollfix');*/
});

/* *********************
 * Slider/Visual ausrichten
 **********************/
function visualImagesAusrichten(){

    /* alle auszurichtenden Bilder ausrichten */
    if($(".visual .img-wrap")[0]){
        var marginTopPic, marginLeftPic;

        for(var i=0; i<$(".visual .img-wrap img").length; i++){
            // bei großen Bildschirmen Bild über gesamte Breite ziehen, ansonsten automatische Breite
            if($($(".visual .img-wrap img")[i]).width() <= window.innerWidth)
                $($(".visual .img-wrap img")[i]).css("min-width", "100%");
            else {
                $($(".visual .img-wrap img")[i]).css("width", "auto");
            }
            $($(".visual .img-wrap img")[i]).css("left", "50%");
            marginLeftPic = $($(".visual .img-wrap img")[i]).width() /2;
            $($(".visual .img-wrap img")[i]).css("margin-left", -marginLeftPic);

            // falls img höher als vorgesehen, vertikal zentrieren
            if($($(".visual .img-wrap img")[i]).height() > $(".visual .img-wrap").height()) {
                $($(".visual .img-wrap img")[i]).css("top", "50%");
                marginTopPic = $($(".visual .img-wrap img")[i]).height() /2;
                $($(".visual .img-wrap img")[i]).css("margin-top", -marginTopPic);
            }
        }
    }
}

$(document).ready(function() {
    $('fieldset#workshop-fieldset-1').hide();

    $('#workshop-multicheckbox-2-0').click(function(){
        if($(this).prop("checked") == true){
            $('fieldset.form-group').show();
            $('#workshop-multicheckbox-2-1').prop('checked', false);
        }
        else if($(this).prop("checked") == false){
            $('fieldset.form-group').hide();
            $('#workshop-multicheckbox-2-1').prop('checked', true);
        }
    });

    $('#workshop-multicheckbox-2-1').click(function(){
        if($(this).prop("checked") == true){
            $('fieldset.form-group').hide();
            $('#workshop-multicheckbox-2-0').prop('checked', false);
        }
        else if($(this).prop("checked") == false){
            $('fieldset.form-group').show();
            $('#workshop-multicheckbox-2-0').prop('checked', true);
        }
    });
    
    // sanftes Einblenden des Sliders
    visualImagesAusrichten();
    $(".visual .img-wrap").css("opacity",1);
});
window.addEventListener('resize', visualImagesAusrichten);


// $(function(){
//     function initialize(e) {
//         var $map = $(e);
//         var myLatlng = new google.maps.LatLng($map.data('lat'), $map.data('lng'));
//         var mapOptions = {
//             zoom: 17,
//             center: myLatlng,
//             // draggable: false,
//             disableDefaultUI: true,
//             scrollwheel: false,
//             disableDoubleClickZoom: true
//         };
//
//         var map = new google.maps.Map(e, mapOptions);
//         var image = '../Images/Pin.png';
//
//         var marker = new google.maps.Marker({
//             position: myLatlng,
//             map: map,
//             icon: image
//         });
//
//     }
//
//     $('.gMap').each(function(i,e) {
//         google.maps.event.addDomListener(window, 'load', initialize(e));
//     });
// });


// function initMap() {
//     $.HSCore.components.HSGMap.init('.js-g-map');
// }


/* *********************
 * Show modal on page load
 **********************/
$(window).on('load',function(){
    $('#home-modal').modal('show');
});