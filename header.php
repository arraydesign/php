<?php include('functions.php'); ?>
<?php if ($basepage == '') { $basepage = basename($_SERVER['PHP_SELF'], ".php"); } ?>
<?php if (is_ie()) { ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><?php } else { ?><!DOCTYPE html><?php } ?>
<html lang="en" class="wf-inactive">
<head>
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- <link rel="alternate" type="application/rss+xml" title="Title" href="<?= $burl ?>feed.xml" /> -->
	<!-- <link rel="shortcut icon" href="<?= $burl ?>favicon.ico" /> -->
	<!-- <meta name=description content="Description" /> -->
	<!-- <meta name=keywords content="Keywords" /> -->
	<meta name="robots" content="index,follow" />
	<!-- <meta property="og:title" content="Title" /> -->
	<!-- <meta property="og:type" content="Type" /> -->
	<!-- <meta property="og:url" content="<?= $baseurl ?>" /> -->
	<!-- <meta property="og:image" content="<?= $baseurl ?>css/assets/LOGO.gif" /> -->
	<title><?= $pagename ?>&mdash;Wireframes</title>
	<link rel="stylesheet" href="<?= $burl ?>style.css" type="text/css" media="screen" />
	<!--[if lte IE 9]><link rel="stylesheet" type="text/css" media="screen" href="<?= $burl ?>css/lte-ie9.css" /><![endif]-->
	<!--[if IE 8]><link rel="stylesheet" type="text/css" media="screen" href="<?= $burl ?>css/ie8.css" /><![endif]-->
	<!--[if IE 7]><link rel="stylesheet" type="text/css" media="screen" href=<?= $burl ?>"css/ie7.css" /><![endif]-->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js"></script>
	<!-- <script type="text/javascript">
		WebFont.load({
			typekit: { id: 'xxxxxx' },
			custom: { families: ['optima-std'], urls: ['/css/assets/'] }
		});
	</script> -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script type="text/javascript" src="<?= $burl ?>js/jquery.hotkeys.js"></script>
	<script type="text/javascript" src="<?= $burl ?>js/jquery.fancybox.js"></script>
	<script type="text/javascript">var $j = jQuery.noConflict(), $docWidth = $j(window).width();</script>
	<!-- <script type="text/javascript" src="js/paper.js"></script>
	<script type="text/paperscript" src="js/canvasId.js" canvas="canvasId"></script> -->
</head>

<body id="<?= $basepage ?>" class="<?= $baseclass ?>"> 

<!-- - - - - - - - - - GRID STARTS - - - - - - - - - -->
	
	<ul id="grid"><li class="img-txt">column</li><li class="img-txt">column</li><li class="img-txt">column</li><li class="img-txt">column</li><li class="img-txt">column</li><li class="img-txt">column</li><li class="img-txt">column</li><li class="img-txt">column</li><li class="img-txt">column</li><li class="img-txt">column</li><li class="img-txt">column</li><li class="img-txt">column</li></ul><!-- END #grid -->
	
	<div class="wrapper">

<!-- - - - - - - - - - HEADER STARTS - - - - - - - - - -->

	<?php if (is_ie()) { ?><div class="header"><?php } else { ?><header><?php } ?>
		<a href="<?= $burl ?>index.php" id="logo">Wires</a>
		<?php if (is_ie()) { ?><div class="nav"><?php } else { ?><nav><?php } ?>
			<ul class="inline">
				<li><a href="<?= $burl ?>index.php" class="home-tab" <?php if ($basepage == home) { echo 'id="current-tab"'; } ?>>HOME</a></li>
				<li><a href="<?= $burl ?>forms.php" class="forms-tab" <?php if ($basepage == forms) { echo 'id="current-tab"'; } ?>>FORMS</a></li>
				<li><a href="<?= $burl ?>media.php" class="images-tab" <?php if ($basepage == media) { echo 'id="current-tab"'; } ?>>MEDIA</a></li>
			</ul>
		<?php if (is_ie()) { ?></div><?php } else { ?></nav><?php } ?><!-- END nav -->
	<?php if (is_ie()) { ?></div><?php } else { ?></header><?php } ?><!-- END header -->
