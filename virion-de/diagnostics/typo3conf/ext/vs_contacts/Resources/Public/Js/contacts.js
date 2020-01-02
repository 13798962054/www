
$(document).ready(function(){
    $("select").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("id");
            if(optionValue){
                $(".box").not("." + optionValue).hide();
                $("." + optionValue).show();
            } else{
                $(".box").hide();
            }
        });
    }).change();

    $('.inter-contact.de').chosen({
        no_results_text: "Kein Treffer gefunden.",
        placeholder_text_single: "Bitte wählen Sie eine Option",
        placeholder_text_multiple: "Bitte Optionen wählen"
    });
    $('.inter-contact.en').chosen({
        no_results_text: "No results found.",
        placeholder_text_single: "Please choose an option",
        placeholder_text_multiple: "Please choose options"
    });


    $(".search-close").click(function(){
        // Clear the input field before this clear button
        // and give it focus.
        $(this).prev().val('').focus();
    });


    $(function(){
        $("#north").popover({
            trigger:'focus',
            placement:'right'
        });
        $("#south").popover({
            trigger:'focus',
            placement:'right'
        });
        $("#east").popover({
            trigger:'focus',
            placement:'right'
        });
        $("#west").popover({
            trigger:'focus',
            placement:'right'
        });


        $('.south').click(function (e) {
        	$('#popovercontent-south, #popovercontent-east, #popovercontent-west, #popovercontent-north').hide();
            var offset = $('.south').offset();
            var left = e.pageX;
            var top = e.pageY;
            var theHeight = $('#popovercontent-south').height();
            $('#popovercontent-south').show();
            $('#popovercontent-south').css('display', 'block');
            $('#popovercontent-south').css('left', (left-270) + 'px');
            $('#popovercontent-south').css('top', (top-300) + 'px');
        });
        $('.east').click(function (e) {
        	$('#popovercontent-south, #popovercontent-east, #popovercontent-west, #popovercontent-north').hide();
            var offset = $('.east').offset();
            var left = e.pageX;
            var top = e.pageY;
            var theHeight = $('#popovercontent-east').height();
            $('#popovercontent-east').show();
            $('#popovercontent-east').css('display', 'block');
            $('#popovercontent-east').css('left', (left-270) + 'px');
            $('#popovercontent-east').css('top', (top-300) + 'px');
        });
        $('.west').click(function (e) {
        	$('#popovercontent-south, #popovercontent-east, #popovercontent-west, #popovercontent-north').hide();
            var offset = $('.west').offset();
            var left = e.pageX;
            var top = e.pageY;
            var theHeight = $('#popovercontent-west').height();
            $('#popovercontent-west').show();
            $('#popovercontent-west').css('display', 'block');
            $('#popovercontent-west').css('left', (left-270) + 'px');
            $('#popovercontent-west').css('top', (top-300) + 'px');
        });
        $('.north').click(function (e) {
        	$('#popovercontent-south, #popovercontent-east, #popovercontent-west, #popovercontent-north').hide();
            var offset = $('.north').offset();
            var left = e.pageX;
            var top = e.pageY;
            var theHeight = $('#popovercontent-north').height();
            $('#popovercontent-north').show();
            $('#popovercontent-north').css('display', 'block');
            $('#popovercontent-north').css('left', (left-270) + 'px');
            $('#popovercontent-north').css('top', (top-300) + 'px');
        });

        $('.popover-south .close').on('click', function(e){
            $('.popover-south').hide();
        });

        $('.popover-north .close').on('click', function(e){
            $('.popover-north').hide();
        });

        $('.popover-west .close').on('click', function(e){
            $('.popover-west').hide();
        });

        $('.popover-east .close').on('click', function(e){
            $('.popover-east').hide();
        });

        if ($(window).width() <= 1399){

        }
        if ($(window).width() <= 1199){

        }
        if ($(window).width() <= 991){

        }
        if ($(window).width() <= 767){

        }
        if ($(window).width() <= 480){
            $('.btn-special').attr('data-trigger', 'focus');
            $('.btn-special').attr('data-placement', 'bottom');
        }
        if ($(window).width() <= 320){
            $('.btn-special').attr('data-trigger', 'focus');
            $('.btn-special').attr('data-placement', 'bottom');
        }
    });
});