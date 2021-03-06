(function() {

// IMAGE CENTRE

	$j.fn.imgWidthCentre = function() {
		return this.each(function(){
		var tWide = ($j(this).width())/2;
			tWide = '-' + tWide + 'px';
			$j(this).css({
				"margin-left" : tWide
			});
		});
	};	
	$j.fn.imgHeightCentre = function() {
		return this.each(function(){
			var tHeight = ($j(this).height())/2;
			tHeight = '-' + tHeight + 'px';
			$j(this).css({
				"margin-top" : tHeight
			});
		});
	};

// CAROUSEL
	
	$j.fn.theCarousel = function(){
		return this.each(function(){
			$j(this).wrap('<div class="the-carousel"><div class="carousel-wrap"></div></div>');
			var $wrapper = $j(this).parents(".carousel-wrap"),
				 $slider = $j(this).css('width','9999px'),
				 $items = $slider.find('> li.gallery-item'),
				 $single = $items.filter(':first'),
				 $singleWidth = $single.outerWidth(),
				 $totalSlides = $items.length,
				 $currentSlide = 1;
			
			$items.filter(':last').after($items.filter(':first').clone().addClass('cloned'));
			
			function gotoSlide($slide) {
				var $dir = $slide < $currentSlide ? -1 : 1,
					 $n = Math.abs($currentSlide - $slide),
					 $left = $singleWidth * $dir * $n;

				$wrapper.filter(':not(:animated)').animate({
					scrollLeft : '+=' + $left
				}, 700, function(){
					if ($slide > $totalSlides) {
						$wrapper.scrollLeft(0);
						$slide = 1;
					}
					$currentSlide = $slide;
				});
			}
			
			$j(this).bind('goto', function($event, $slide){ gotoSlide($slide); });
			$j(this).bind('next', function(){ gotoSlide($currentSlide + 1); });
		});
	}

})(jQuery);

// DOCUMENT READY

$j(document).ready(function(){

/* GLOBAL
-------------------------------------------------------------- */
	
	$j('html').addClass('js-active');

/* Grid */
	  	
	$j(document).jkey('control+g', function() {
		$j('ul#grid').toggle();
	});
	
/* Sidebar Height */

	var mainHeight = $j('.main').height();
	var winWidth = $j(window).width();
	if (winWidth > 592) { $j('aside, .aside').css({'min-height': mainHeight}); }
	$j(window).resize(function () {
		var mainHeight = $j('.main').height();
		var winWidth = $j(window).width();
		if (winWidth > 592) { $j('aside, .aside').css({'min-height': mainHeight}); } else { $j('aside, .aside').css({'min-height': 0}); }
	});

/* Image centre */
   
   $j(".img-centre img, .img-centre-w img").imgWidthCentre();
	$j(".img-centre img, .img-centre-h img").imgHeightCentre();
	
/* Figure caption */

	$j("figure").append("<a href='#' class='caption'>i</a>");
   $j("figure a.caption").click(function() {
		$j(this).prev().toggle();
	});

/* Carousel

	$j('ul.carousel').theCarousel();
	
	var $autoscroll = true;
	
	$j('ul.carousel.scroll').mouseover(function(){
		$autoscroll = false;
	}).mouseout(function(){
		$autoscroll = true;
	});
	
	setInterval(function(){
		if ($autoscroll) {
			$j('ul.carousel.scroll').trigger('next');	
		}	
	}, 5000); */

/* Section tabs

	var sectionDesc = $j('dl.section-list dd');
	sectionDesc.hide().filter(':first').show();
	$j('dl.section-list dt').filter(':first').addClass('selected');
	$j('dl.section-list dt a').click(function(){
		sectionDesc.hide();
		sectionDesc.filter(this.hash).show();
		$j(this).parents('dl.section-list').children('dt').removeClass('selected');
		$j(this).parent().addClass('selected');
		tOffset = $j(this).parents('dl.section-list').offset();
		$j(window).scrollTop(tOffset.top);
		return false;
	}); */

/* Fancybox
	
	$j("span.gallery-icon a").fancybox({
		openEffect 			: 'none',
    	closeEffect			: 'none',
    	maxWidth				:	900,
    	maxHeight			:	768,
    	fitToView			:	true,
    	aspectRatio			:	true,
    	closeBtn				:	true,
    	arrows				:	true,
    	helpers				:	{
			title					:	{
				type					:	'inside'
			},
			overlay				:	{
				opacity				:	0.9,
				css					:	{
					'background-color'	:	'#000000'
				}
			},
		}
	});
	
	$j(".fb-iframe").fancybox({
		type					: 'iframe',
		autoSize				:	true,
		width					:	692,
		height				:	450,
		helpers				:	{
			title					:	{
				type					:	'inside'
			},
			overlay				:	{
				opacity				:	0.9,
				css					:	{
					'background-color'	:	'#000000'
				}
			},
		}
	}); */

});