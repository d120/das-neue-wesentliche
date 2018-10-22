<!DOCTYPE html>
<html>
  <head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <meta name="robots" content="index, follow" />
  <meta name="revisit-after" content="3 days" />
  <meta name="keywords" content="dasWesentliche, das Wesentliche, D120, TU Darmstadt, FB20, Blog, Fachschaft, Informatik, Fachschaft Informatik, Kommentare, Kummerkasten, Ophase, Inforz, TUD, Informatik, Studium" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<title><?php bloginfo('name'); wp_title(); ?></title>
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
	<style type="text/css" media="screen, projection">
		@import url( https://daswesentliche.d120.de/wp-content/plugins/schreikasten/css/schreikasten.css );
		/*@import url( https://www.fachschaft.informatik.tu-darmstadt.de/d120de/css/head.css );*/
    <?php /*$base = 'http://localhost:8000/djangocms'*/ ?>
    <?php $base = 'https://www.fachschaft.informatik.tu-darmstadt.de/' ?>
    @import url( <?php echo $base ?>/static/vendor/bootstrap/dist/css/bootstrap.min.css );
    @import url( <?php echo $base ?>/static/vendor/font-awesome/css/font-awesome.min.css );
    @import url( <?php echo $base ?>/static/vendor/typeface-libre-franklin/index.css );
    @import url( <?php echo $base ?>/static/d120/css/custom.css );
      a, footer a:hover, .sidebar-nav a, .sidebar-nav a:hover {
        color:#009D81;
      }
      .navbar, .sidebar-active, .sidebar-active:hover, .sidebar-active:focus, .sidebar-active > a:hover, .sidebar-active > a:focus, #mainLogo {
        background-color:#009D81!important;
      }
      .sidebar-active, .sidebar-active:hover {
        border-left: 5px solid #009D81!important;
      }
	</style>
        <link media="screen,projection" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" rel="stylesheet" title="Standard-Layout" />
        <!--[if lt IE 7]>
        <style media="screen" type="text/css">
        .inhalt_container2 {
            width:100%;
	}
        </style>
        <![endif]-->

	<link rel="SHORTCUT ICON" type="image/x-icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_get_archives('type=monthly&format=link'); ?>
	<?php wp_head(); ?>

	<link rel="stylesheet" type="text/css" href="https://daswesentliche.d120.de/wp-content/themes/dasWesentliche/voteitup.css" />
  </head>

  <body onload="wppoll_fix_https()">

    <div class="container" id="header">
        <a href="https://www.fachschaft.informatik.tu-darmstadt.de"><img src="<?php echo $base ?>/static/d120/img/d120_logo.png" id="mainLogo" alt="D120: Fachschaft Informatik" class="pull-left"></a>
        <a href="https://www.tu-darmstadt.de" id="responsivelogo"><img src="<?php echo $base ?>/static/d120/img/tu_da_logo.png" alt="Technische Universität Darmstadt" class="pull-right"></a>
    </div>
    <nav class="navbar navbar-default">
        <div class="container">
            <ul class="header-navbar pull-right nav navbar-nav">
                <li><a href="https://www.fachschaft.informatik.tu-darmstadt.de"><i class="fa fa-home fa-lg"></i> <span class="hidden-xs">Webseite</span></a></li>
                <li class="active"><a href="https://daswesentliche.fachschaft.informatik.tu-darmstadt.de"><i class="fa fa-newspaper-o fa-lg"></i> <span class="hidden-xs">dasWESENtliche</span></a></li>
                <li><a href="https://www.fachschaft.informatik.tu-darmstadt.de/forum"><i class="fa fa-comments-o fa-lg"></i> <span class="hidden-xs">Forum</span></a></li>
                <li><a href="https://www.informatik.tu-darmstadt.de"><i class="fa fa-university fa-lg"></i> <span class="hidden-xs">Fachbereich</span></a></li>
            </ul>
        </div>
    </nav>

	  <!--<div id="Header">
    <a href="https://www.d120.de/das-wesen/"><img src="https://www.fachschaft.informatik.tu-darmstadt.de/d120de/images/das-wesen-der-informatik.png" id="wesen" title="Das Wesen der Informatik" alt="Das Wesen der Informatik"/></a>
    <a href="https://www.tu-darmstadt.de/"><img src="https://www.fachschaft.informatik.tu-darmstadt.de/d120de/images/athene.png" alt="Athene der TU Darmstadt" title="Athene der TU Darmstadt" id="athene"/></a>

    <h1>Fachschaft Informatik</h1>
    <h2><?php bloginfo('title'); ?> &ndash; <?php bloginfo('description'); ?></h2>

    </div>-->

  	<!--<div id="Subheader">
  		<ul id="Menu1">
  			  <li class="link"><a href="https://www.d120.de/">Startseite</a></li>
  			  <li class="current"><a href="https://daswesentliche.d120.de/" >das Wesentliche</a></li>
  			  <li class="link"><a href="https://www.d120.de/forum/">Forum</a></li>
  		</ul>
  		<div id="MenuSpacerLeft"></div>
  		<div id="MenuSpacerRight"></div>
  	</div>-->

<!--<?php
	if ($_GET['zweispaltig'] != '1') { echo '<div id="Hintergrundwesen"></div>'; }
?>-->

	<!--<div class="mantel"><div class="mantel2">-->
