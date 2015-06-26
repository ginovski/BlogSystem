/// <reference path="../typings/jquery/jquery.d.ts"/>

$(document).ready(function() {
	$('span.number-comments').each(function() {
		if(parseInt($(this).html(), 10) > 0)
		{
			$(this).parent().css('color', '#54c0b0');
		}
		else
		{
			$(this).parent().css('color', '#c1bfbf');
		}
	});
});