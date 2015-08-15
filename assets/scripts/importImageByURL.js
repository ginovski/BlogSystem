/* global $ */

$(document).ready(function () {
    var $divClassWrapper = $('div.wrapper'),
        $importImageURL = $('.import-img-url'),
        $previewImage = $('.preview-image'),
        $imagePlaceholder = $('a.image-placeholder'),
        $buttonClassImport = $('button.import'),
        $removeImageLink = $('a.remove-image'),
        $newImage = $('<img/>');

    if ($divClassWrapper.hasClass('hidden')) {
        $buttonClassImport.on('click', function () {
            $newImage.addClass('preview-image')
                .attr('src', $importImageURL.val())
                .attr('alt', 'Imported image by URL');
            $newImage.appendTo('.wrapper');

            $(this).attr('data-dismiss', 'modal');

            $divClassWrapper.removeClass('hidden');
            $imagePlaceholder.addClass('hidden');
        });
    }

    $removeImageLink.on('click', function () {
        $('.preview-image').remove();
        $imagePlaceholder.removeClass('hidden');
        $divClassWrapper.addClass('hidden');
    });
});