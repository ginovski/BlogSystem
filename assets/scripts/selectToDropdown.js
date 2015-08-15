/* global $ */

$(document).ready(function () {
    function createDropdownElement($selector) {
        var i, len,
            $categorySelect = $('#category'),
            $selectChildren = $categorySelect.children(),
            $categoryDropdownDiv = $('<div/>'),
            $toggleButton = $('<button/>'),
            $caret = $('<span/>'),
            $dropdownUl = $('<ul/>');

        $categorySelect.addClass('hidden');
        $categoryDropdownDiv.addClass('dropdown')
            .css('display', 'inline-block')
            .css('margin-bottom', '20px');

        $toggleButton.addClass('btn')
            .addClass('btn-default')
            .addClass('dropdown-toggle')
            .addClass('category-button')
            .attr('type', 'button')
            .attr('id', 'category-select-dropdown')
            .attr('data-toggle', 'dropdown')
            .attr('aria-haspopup', 'true')
            .attr('aria-expanded', 'true');

        if ($categorySelect.attr('value')) {
            var $optionWithInitialValue = $('option[value="' + $categorySelect.attr('value') + '"]');
            $toggleButton.html($optionWithInitialValue.html()    + ' ')
                .attr('data-value', $categorySelect.attr('value'));
        }
        else {
            $toggleButton.html('Select a category ');
        }

        $caret.addClass('caret');
        $caret.appendTo($toggleButton);

        $dropdownUl.addClass('dropdown-menu')
            .addClass('category-dropdown-menu')
            .attr('aria-labelledby', 'category-select-dropdown');

        for (i = 0, len = $selectChildren.length; i < len; i += 1) {
            var $currentOption = $($selectChildren[i]),
                $newListItem = $('<li/>'),
                $newAnchorTag = $('<a/>');

            $newAnchorTag.attr('href', '#')
                .attr('data-value', $currentOption.val())
                .html($currentOption.html())
                .css('text-align', 'center');

            $newAnchorTag.appendTo($newListItem);
            $newListItem.appendTo($dropdownUl);
        }

        $toggleButton.appendTo($categoryDropdownDiv);
        $dropdownUl.appendTo($categoryDropdownDiv);
        $categoryDropdownDiv.appendTo($selector);

        $('.dropdown-menu a').on('click', function () {
            var $this = $(this),
                $dataValue = $this.attr('data-value');
            $categorySelect.val($dataValue);
            $toggleButton.html($this.html() + ' ');
            $caret.appendTo($toggleButton);
        });
    }

    createDropdownElement($('.category'));
});