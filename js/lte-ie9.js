var $j = jQuery.noConflict();

$j(document).ready(function(){
	$j('table tr th:first-child, table tr td:first-child').css({'padding-left': '7px'});
	$j('table tr th:last-child, table tr td:last-child').css({'padding-right': '7px'});
	$j('table tbody tr:last-child td').css({'border-bottom': '1px solid black'});
	$j('div.fieldrow.multiple').css({'border-bottom': 'none'});
	$j('.nav ul li:last-child').css({'border-right': '1px solid black'});
});