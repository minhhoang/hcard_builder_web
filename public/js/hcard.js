$(document).ready(function(){
    $('#suburb').change(function(){
    	console.log("abc");
    	var current = $(this);
    	if (current.val() != '') {
    		$('.comma').css('display', 'inline');
    	} else {
    		$('.comma').css('display', 'none');
    	}
    });
});
