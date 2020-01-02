/**
 * initial function
 */
$(document).ready(function() {
    $('.tx-download-explorer > .container > ul').addClass('dirs col-12 col-md-3 offset-md-1 col-xl-3 offset-xl-2 leftColumn');
    $('.tx-download-explorer .dirs').wrap('<div class="explorer-window row"></div>');
    $('.tx-download-explorer .explorer-window').append('<div class="files-bundle col-12 col-md-7 col-xl-5"></div>');
    $('.tx-download-explorer .files-bundle').append('<div class="row"><ul class="files"></ul></div>');
    $('.tx-download-explorer .files-bundle').append('<ul class="files-info"></ul>');
    $('.tx-download-explorer').append('<div class="clearer"></div>');


    /**
     * change rootFolderPath to rootFolderName
     */
    $('.tx-download-explorer .explorer-window').each(function(index){
        var rootFolder = $(this).find('> .dirs > .dir');
        var rootFolderPath = rootFolder.clone().children().remove().end().text();
        var splitResult = rootFolderPath.split('/');
        var rootFolderName = splitResult[splitResult.length - 2];;
        rootFolder.html(rootFolder.html().replace(rootFolderPath.trim(), rootFolderName.trim()));
    });

    $('li').each(function() {
        $(this).addClass('level-' + ($(this).parents('li').length+1));
    });

    $('.tx-download-explorer .dirs .dir .dir').hide();

    if ($('li').hasClass('level-1')){
        $('.level-1').addClass('selected');
        $('.tx-download-explorer .dirs .level-2').show();
    }

    $('ul li:has(ul)').addClass('has-child');

    equalizeHeightOfLists();

    /**
     * remove old files in the filelist,
     * add new files to the filelist,
     * make files visible
     */
    $('.tx-download-explorer .dirs .dir').click(function(event) {
        $(this).parents('.explorer-window').find('.files').empty();
        $(this).parents('.explorer-window').find('.files').append($(this).children('ul').html());
        $(this).parents('.explorer-window').find('.files .dir').hide();
        $(this).find('> ul > .dir').toggle();

        // highlight selected folders
        $(this).parents('.explorer-window').find('.dir').removeClass('selected');
        $(this).addClass('selected');

        $(this)
            //.parent()
            .find('>ul')
            .addClass('is-open');
        $(this)
            //.parent()
            .toggleClass('is-active');

        $('.tx-download-explorer ul:not(:has(ul))').addClass('files-list');

        $('.files-list').parent('li').addClass('last-ul');

        /**
         * show/hide file info
         */
        $('.tx-download-explorer .files .file').hover(function() {
            $(this).parents('.explorer-window').find('.files-info').empty();
            $(this).parents('.explorer-window').find('.files-info').append($(this).children('ul').html());

            equalizeHeightOfLists();
        },function() {
            $(this).parents('.explorer-window').find('.files-info').empty();

            equalizeHeightOfLists();
        });

        equalizeHeightOfLists();

        event.stopPropagation();
    });



});

/**
 * equalize the height of the lists
 */
function equalizeHeightOfLists() {
    $('.tx-download-explorer .explorer-window').each(function() {
        $(this).find('.dirs').css('height', '');
        $(this).find('.files').css('height', '');
        if($(this).find('.files-bundle').height() > $(this).find('.dirs').outerHeight()) {
            $(this).find('.dirs').height($(this).find('.files').outerHeight()+$(this).find('.files-info').height());
        } else {
            $(this).find('.files').height($(this).find('.dirs').height()-$(this).find('.files-info').outerHeight(true));
        }
    });
}