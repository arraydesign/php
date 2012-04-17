	</div><!-- END #wrapper -->

<!-- - - - - - - - - FOOTER STARTS - - - - - - - - -->

	<?php if (is_ie()) { ?><div class="footer"><?php } else { ?><footer><?php } ?>
		<div>
			<p>Copyright info.</p>
			<ul class="inline foot-nav">
				<li><a href="#">FAQ</a></li>
				<li><a href="#">Privacy Policy</a></li>
			</ul>
		</div>
	<?php if (is_ie()) { ?></div><?php } else { ?></footer><?php } ?><!-- END footer -->

	<script type="text/javascript" src="<?= $burl ?>js/wires.js"></script>
	<!--[if lte IE 9]><script type="text/javascript" src="<?= $burl ?>js/lte-ie9.js"></script><![endif]-->
	<!--[if IE 8]><script type="text/javascript" src="<?= $burl ?>js/ie8.js"></script><![endif]-->
	<!--[if IE 7]><script type="text/javascript" src="<?= $burl ?>js/ie7.js"></script><![endif]-->
</body>
</html>