$.fn.jumpto = function() {
	return this.each(function() {
		$(this).click(function(event) {
			event.preventDefault();
			var href = $(this).attr("href");
			var top = $(href).offset().top;
			$("body").animate({ scrollTop: top }, 500)
		});
	});
}