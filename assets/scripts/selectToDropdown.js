/* global $ */

$(document).ready(function () {
    function createDropdownElement($selector) {
        var $categorySelect = $('#category'),
            $selectChildren = $categorySelect.children(),
            $categoryDropdownDiv = $('<div/>');

        $categorySelect.addClass('hidden');

        $categoryDropdownDiv.addClass('dropdown');


        $categoryDropdownDiv.appendTo($selector);
    }

    createDropdownElement($('.category'));
});