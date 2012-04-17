<?php $pagename = 'Media';
$basepage = 'media';
include('header.php'); ?>

<!-- - - - - - - - - - CONTENT STARTS - - - - - - - - - -->

<div class="content">
	<div class="main">
		<h1 class="genbox col-full">Full-width banner</h1>
		<!-- <figure class="genbox col-full img-centre" style="margin-bottom: 9px; height: 350px;"><img src="<?= $burl ?>images/gorrila.jpg" alt="gorrila" height="529" width="1187" /><figcaption>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</figcaption></figure> -->
		<div id="selected"><canvas id="myCanvas" class="genbox col-full" height="350" width="848" style="height: 350px;"><img src="<?= $burl ?>images/gorrila.jpg" alt="gorrila" height="350" width="848" /></canvas></div>
		
		<div class="genbox col-full">
			<h2>Aligned left, inside a paragraph</h2>		
			<p><!-- <canvas class="myCanvas alignleft" width="246" height="162"><img src="<?= $burl ?>images/flower.jpg" alt="flower" width="246" height="162" /></canvas> -->Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p><!-- <canvas class="myCanvas alignleft" width="246" height="162"><img src="<?= $burl ?>images/cat.jpg" alt="cat" width="246" height="162" /></canvas> -->Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
		
		<script type="text/javascript">
			$j(document).ready(function(){
				
				if ($docWidth < 1200 && $docWidth > 1026) {
					var $i = (848 - (($docWidth/1200) * 848));
					draw($i);
				} else {
					var $i = 0;
					draw($i);
				}
				
				$j(window).resize(function() {
					$docWidth = $j(window).width();
					if ($docWidth < 1200 && $docWidth > 1026) {
						var $i = (848 - (($docWidth/1200) * 848));
						draw($i);
					}
				});
				
				function draw($i) {
	
					myCanvas($i);
					function myCanvas($i) {
						
						$j('#myCanvas').attr('width', (848 - $i))
						console.log( $i, $docWidth );
						var $source = $j('#myCanvas').find('> img').attr('src');
						var ctx = $j('#myCanvas')[0].getContext('2d');
		
				      ctx.beginPath();
				      ctx.moveTo(26.6, 0.0);
				      ctx.bezierCurveTo(6.9, 48.3, 0.0, 108.9, 0.0, 169.7);
				      ctx.bezierCurveTo(0.0, 236.1, 7.5, 300.0, 28.1, 350.0);
				      ctx.lineTo((819.9 - $i), 350.0);
	//				   ctx.lineTo(696.9, 350.0);
				      ctx.bezierCurveTo((840.5 - $i), 300.0, (848.0 - $i), 236.1, (848.0 - $i), 169.7);
	//				   ctx.bezierCurveTo(717.5, 300.0, 725.0, 236.1, 725.0, 169.7);
				      ctx.bezierCurveTo((848.0 - $i), 108.9, (841.1 - $i), 48.3, (821.4 - $i), 0.0);
	//				   ctx.bezierCurveTo(725.0, 108.9, 718.1, 48.3, 698.4, 0.0);
				      ctx.lineTo(26.6, 0.0);
				      ctx.closePath();
	//			      ctx.fillStyle = "rgb(53, 150, 207)";
	//			      ctx.fill();
						ctx.clip()
						
				      ctx.drawImage($j("#selected img")[0], (0 - ($i / 2)), -60);
						/* var img = new Image();
						img.onload = function(){
							ctx.drawImage(img,0,0,848,350);
						};
						img.src = $source; */
					}
				}
							
			})
		</script>
				
		<div class="genbox col-full border">
			<h2>Aligned right, inside a bordered div and a paragraph</h2>
			<p><img src="images/cat.jpg" alt="cat" class="alignright" />Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
		
		<div class="genbox col-full">
			<h3>Floated Column</h3>
			<iframe class="alignleft" src="http://www.youtube.com/embed/uu8INQWP5yY" frameborder="0" allowfullscreen style="height: 330px;"></iframe>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>

	</div><!-- END .main -->
	<?php include('aside.php');?>

</div><!-- END .content -->
<?php include('footer.php'); ?>