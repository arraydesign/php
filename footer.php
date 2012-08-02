	</div><!-- END #wrapper -->

<!-- - - - - - - - - FOOTER STARTS - - - - - - - - -->

	<?php if (is_ie()) { ?><div class="footer"><?php } else { ?><footer><?php } ?>
		<div>
			<p>&copy; <?php echo date('Y'); ?>. <span class="source-org vcard copyright">Copyright info.</span></p>
			<ul class="inline foot-nav">
				<li><a href="#">FAQ</a></li>
				<li><a href="#">Privacy Policy</a></li>
			</ul>
		</div>
	<?php if (is_ie()) { ?></div><?php } else { ?></footer><?php } ?><!-- END footer -->
	
	
	<!-- <script type="text/javascript" src="<?= $burl ?>js/webfont.js"></script>
	<script type="text/javascript">
		WebFont.load({
			typekit: { id: 'xxxxxx' },
			custom: { families: ['optima-std'], urls: ['/css/assets/'] }
		});
	</script> -->
	<script type="text/javascript" src="<?= $burl ?>js/jquery.jkey.js"></script>
	<script type="text/javascript" src="<?= $burl ?>js/jquery.fancybox.js"></script>
	<!-- <script type="text/javascript" src="js/paper.js"></script>  -->
	<script type="text/javascript" src="<?= $burl ?>js/wires.js"></script>
<?php if (is_ie()) { ?>
	<!--[if lte IE 8]><script type="text/javascript" src="<?= $burl ?>js/lte-ie8.js"></script><![endif]-->
	<!--[if IE 7]><script type="text/javascript" src="<?= $burl ?>js/ie7.js"></script><![endif]-->
<?php } else { ?>
	<!--[if IE 9]><script type="text/javascript" src="<?= $burl ?>js/ie9.js"></script><![endif]-->
<?php } ?>
</body>
</html>