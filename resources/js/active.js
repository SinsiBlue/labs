
$(document).ready(function() {
	// get current URL path and assign 'active' class
	var pathname = window.location.pathname;
	$('.nav > li > a[href="'+pathname+'"]').parent().addClass('active');
})

var menu = document.getElementById('dropdown');
var rubriques = menu.parentElement.nextSibling.nextElementSibling.firstElementChild;

menu.addEventListener('click', function (){
    // rubriques.style.display = rubriques.style.display === '' ? 'block' : 'none';
    console.log('salut')
})