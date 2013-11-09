<?php include('functions.php'); ?>
<?php if ($basepage == '') { $basepage = basename($_SERVER['PHP_SELF'], ".php"); } ?>
<?php if (is_ie()) { ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><?php } else { ?><!DOCTYPE html><?php } ?>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" class="wf-inactive">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
	<style type="text/css" media="screen">html.wf-loading h1, html.wf-loading h2, html.wf-loading h3, html.wf-loading h4, html.wf-loading p, html.wf-loading li, html.wf-loading a, html.wf-loading span, html.wf-loading label, html.wf-loading td, html.wf-loading th, html.wf-loading input, html.wf-loading select, html.wf-loading textarea, html.wf-loading small {visibility: hidden;}</style>
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
	<title><?php if ($meta_title) { echo $meta_title; } else { echo 'Wireframes'; } ?></title>
	<meta name="description" content="<?php if ($meta_desc) { echo $meta_desc; } else { echo 'Description'; } ?>">
	<meta name="keywords" content="<?php if ($meta_keys) { echo $meta_keys; } else { echo 'Keywords'; } ?>">

	<!-- <meta name="author" content="Author"> -->
	<!-- <meta name="copyright" content="Copyright"> -->

	<!-- <meta name="twitter:card" content="summary, photo, or player"> -->
	<!-- <meta name="twitter:site" content="@username of website"> -->
	<!-- <meta name="twitter:creator" content="@username of content creator"> -->

	<!-- <meta property="og:site_name" content="Site name"> -->
	<!-- <meta property="og:title" content="<?php if ($meta_title) { echo $meta_title; } else { echo 'Wireframes'; } ?>"> -->
	<!-- <meta property="og:description" content="Description"> -->
	<!-- <meta property="og:url" content="<?= $baseurl ?>"> -->
	<!-- <meta property="og:type" content="Type"> -->
	<!-- <meta property="og:image" content="<?= $baseurl ?>css/assets/LOGO.gif"> -->

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="robots" content="index,follow">

	<!-- <link rel="alternate" type="application/rss+xml" title="Title" href="<?= $burl ?>feed.xml"> -->
	<!-- <link rel="shortcut icon" href="<?= $burl ?>favicon.ico"> -->
	<link rel="stylesheet" href="<?= $burl ?>style.css" type="text/css" media="screen">
	<script type="text/javascript" src="<?= $burl ?>js/jquery.min.js"></script>
	<script type="text/javascript">var $j = jQuery.noConflict(), $docWidth = $j(window).width();</script>
<?php if (is_ie()) { ?>
	<!--[if lte IE 8]><link rel="stylesheet" type="text/css" media="screen" href="<?= $burl ?>css/lte-ie8.css" /><![endif]-->
	<!--[if IE 7]><link rel="stylesheet" type="text/css" media="screen" href="<?= $burl ?>css/ie7.css" /><![endif]-->
<?php } else { ?>
	<!--[if lte IE 10]><link rel="stylesheet" type="text/css" media="screen" href="<?= $burl ?>css/lte-ie10.css" /><![endif]-->
	<!--[if IE 9]><link rel="stylesheet" type="text/css" media="screen" href="<?= $burl ?>css/ie9.css" /><![endif]-->
<?php } ?>
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
