/* global $ */

$(document).ready(function () {
    var $divClassWrapper = $('div.wrapper'),
        $importImageURL = $('.import-img-url'),
        $previewImage = $('.preview-image'),
        $imagePlaceholder = $('a.image-placeholder'),
        $buttonClassImport = $('button.import'),
        $removeImageLink = $('a.remove-image');

    if ($divClassWrapper.hasClass('hidden')) {
        $buttonClassImport.on('click', function () {
            $previewImage.attr('src', $importImageURL.val());
            $(this).attr('data-dismiss', 'modal');
            $importImageURL.val('');

            $divClassWrapper.removeClass('hidden');
            $imagePlaceholder.addClass('hidden');
        });
    }

    $removeImageLink.on('click', function () {
        $imagePlaceholder.removeClass('hidden');
        $divClassWrapper.addClass('hidden');
    });
});