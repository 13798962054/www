
$(document).ready(function () {

    $(".search-close").click(function(){
        // Clear the input field before this clear button
        // and give it focus.
        $(this).prev().val('').focus();
    });


    $('.instruction-trigger').next('.instruction-tooltip').css({'visibility': 'none', 'opacity': '0', 'z-index': '0', 'display':'none'});

    $('.instruction-trigger').next('.instruction-tooltip').on('click', function(e) {
        e.stopPropagation();
    });

    $(document).on('click',function(){
        $('.instruction-trigger').next('.instruction-tooltip').css({'visibility': 'none', 'opacity': '0', 'z-index': '0', 'display':'none'});
        $('.instruction-trigger').removeClass('active');
    });

    $('.instruction-trigger').on('click', function(e) {
        e.stopPropagation();
        $('.instruction-trigger').removeClass('active');
        $(this).addClass('active');
        $('.instruction-trigger').next('.instruction-tooltip').css({'visibility': 'visible', 'opacity': '1', 'z-index': '1000', 'display':'block'});
    });


    $(function() {
        $(".btn-special").popover({
            trigger: 'focus',
            placement: 'right'
        });

        // var button = $("div[id^='popoverbutton']");
        // var content = $("div[id^='popovercontent']");
        //
        // console.log(button, content);
        $('.btn-special').on('click', function (e) {
        	e.preventDefault();
            var objid = $(this).attr("id");
            var divid = "popovercontent-"+objid.substr(objid.length-1,1);

            var offset = $('.btn-special').offset();
            var left = e.pageX;
            var top = e.pageY;
            //var theHeight = $("#"+divid).height();
            $("#"+divid).css('left', (left-350) + 'px');
            $("#"+divid).css('top', (top-200) + 'px');
            $('#'+divid).toggleClass('hidden');
            $('.popover').not('#'+divid).addClass('hidden');
            e.stopPropagation();

            $("#"+objid).find('.number').toggleClass('hidden');
            $("#"+objid).find('.closex').toggleClass('hidden');
            $('.btn-special').not('#'+objid).find('.closex').addClass('hidden');
            $('.btn-special').not('#'+objid).find('.number').removeClass('hidden');
        });
        $(window).click(function() {
            var objid = $(this).attr("id");
            $(".popover").addClass("hidden");
            $('.btn-special').not('#'+objid).find('.closex').addClass('hidden');
            $('.btn-special').not('#'+objid).find('.number').removeClass('hidden');
        });
    });


    if ($(window).width() <= 1399){
        $('circle').attr('r',12);
        $('text').attr('font-size', 14);
        $('text.closex').attr('font-size', 25);
        $('text').attr('dy', '5px');
    }
    if ($(window).width() <= 1199){
        $('circle').attr('r',12);
        $('text').attr('font-size', 15);
        $('text.closex').attr('font-size', 20);
        $('text').attr('dy', '6px');
    }
    if ($(window).width() <= 991){
        $('circle').attr('r',14);
        $('text').attr('font-size', 16);
        $('text.closex').attr('font-size', 20);
        $('text').attr('dy', '6px');
    }
    if ($(window).width() <= 767){
        $('circle').attr('r',13);
        $('text').attr('font-size', 18);
        $('text.closex').attr('font-size', 20);
        $('text').attr('dy', '6px');
    }
    if ($(window).width() <= 640){
        $('circle').attr('r',12);
        $('text').attr('font-size', 16);
        $('text').css('display', 'block');
        $('text').attr('dy', '6px');

        $('.close-mob').removeClass('hidden');
        $('.close-mob').click(function() {
            this.parent('.popover').addClass('hidden');
        });

    }
    if ($(window).width() <= 320){
        $('circle').attr('r',12);
        $('text').attr('font-size', 16);
        $('text').css('display', 'block');
        $('text').attr('dy', '5px');

        $('.close-mob').removeClass('hidden');
        $('.close-mob').click(function() {
            this.parent('.popover').addClass('hidden');
        });
    }

});


