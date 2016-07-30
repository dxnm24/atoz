$(document).foundation();
function tinyScroll()
{
	window.scrollBy(0, 1);
}
function lazy()
{
	$('.tabs-title > h3 > a').on('click', function(){
		tinyScroll();
	});
	$(".item>a>img").each(function(){
		$(this).attr("data-original", $(this).attr("src"));
		$(this).attr("src", "");
	});
	$(".item>a>img").lazyload({skip_invisible : false,failure_limit : 15, effect: "fadeIn", bind: "event"});
}
function searchhide() {
	var div = document.getElementById('search');
	if (div.style.display !== 'block') {
	    div.style.display = 'block';
	}
	else {
	    div.style.display = 'none';
	}
};
$(function () {
	lazy();
});