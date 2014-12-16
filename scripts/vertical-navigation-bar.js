/*$(document).ready(function() {
	$('#content-container').load($('.vert-nav-link:first').attr('href'));
});*/

$(document).ready(function(){
  $(".vertical-navigation-bar-link-toggle").click(function(){
    $(".cost-center-links-container").slideToggle("normal");
  });
});

$('.vert-nav-link').click(function() {	
	var href = $(this).attr('href');
	$('#content-container').hide().load(href).fadeIn('fast');// hide -> load -> fadeIn
	
	// fix for redirecting a page at the end
	return false;
});


