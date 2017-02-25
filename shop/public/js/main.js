$(document).ready(function() {
	
	//Nur das erste Bild einblenden
	$.each($(".image"), function() {
		$(this).parent().children().css("display","none")
		$(this).parent().children().first().css("display","block");
		
	});
	
});