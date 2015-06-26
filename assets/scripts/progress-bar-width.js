$(document).ready(function() {
	$('div.skills div.green-bar').each(function() {
		var percentageWidth = parseInt($(this).data('width'), 10);
		$(this).css('width', (percentageWidth) + "%");
		$(this).parent()
			.attr('data-toggle', 'tooltip')
			.attr('title', (percentageWidth) + '%');
	});
});