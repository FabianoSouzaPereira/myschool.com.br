$(document).ready(function(){
	$("td").find('dd').hide().end().find('dt').click(function() {
		 var info = $(this).next();
		 if (info.is(':visible')) {
		 info.slideUp();
		 } else {
		 info.slideDown();
		 }
	})
});

