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
		<?php /*@import url( https://www.fachschaft.informatik.tu-darmstadt.de/d120de/css/head.css );*/ ?>
    <?php /*$base = 'http://localhost:8080/djangocms'*/ ?>
    <?php $base = 'https://www.fachschaft.informatik.tu-darmstadt.de/' ?>
    @import url( <?php echo $base ?>/static/vendor/bootstrap/dist/css/bootstrap.min.css );
    <?php /*@import url( <?php echo $base ?>/static/vendor/font-awesome/css/font-awesome.min.css );*/ ?>
    @import url( <?php echo $base ?>/static/vendor/typeface-libre-franklin/index.css );
    @import url( <?php echo $base ?>/static/d120/css/custom.css );

    <?php $color = '#0083CC'; /* $color = '#009D81'; */ ?>
      a, footer a:hover, .sidebar-nav a, .sidebar-nav a:hover {
        color: <?php echo $color; ?>;
      }
      #blog-sidebar .widget_nav_menu, .sidebar-active,
      .sidebar-active:hover, .sidebar-active:focus, .sidebar-active > a:hover,
      .sidebar-active > a:focus, #mainLogo, #colored-navbar {
        background-color:<?php echo $color; ?>!important;
      }
      .sidebar-active, .sidebar-active:hover {
        border-left: 5px solid <?php echo $color; ?>!important;
      }
  </style>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/v4-shims.css">
  <link media="screen,projection" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" rel="stylesheet" title="Standard-Layout" />

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

    <nav class="navbar navbar-logos">
      <div class="container" id="header">
        <a href="https://www.fachschaft.informatik.tu-darmstadt.de">
            <img src="<?php echo $base ?>/static/d120/img/d120_logo.png" id="mainLogo"
                 alt="D120: Fachschaft Informatik" class="mr-auto">
        </a>
        <a href="https://www.tu-darmstadt.de" id="responsivelogo">
            <img src="<?php echo $base ?>/static/d120/img/tu_da_logo.png" alt="Technische Universität Darmstadt">
        </a>
      </div>
    </nav>
    <nav class="navbar navbar-expand header-navbar" id="colored-navbar">
        <div class="container justify-content-end">
            <ul class="nav navbar-nav">
                <li class="nav-item header-navbar-item">
                    <a class="nav-link header-navbar-link" href="https://www.fachschaft.informatik.tu-darmstadt.de">
                        <i class="fa fa-home fa-lg"></i>
                        <span class="d-none d-sm-inline">Webseite</span>
                    </a>
                </li>
                <li class="nav-item header-navbar-item">
                    <a class="nav-link header-navbar-link" href="<?php echo get_home_url() ?>">
                        <i class="fa fa-newspaper-o fa-lg"></i>
                        <span class="d-none d-sm-inline">dasWESENtliche</span>
                    </a>
                </li>
                <li class="nav-item header-navbar-item">
                    <a class="nav-link header-navbar-link" href="https://www.fachschaft.informatik.tu-darmstadt.de/forum">
                        <i class="fa fa-comments-o fa-lg"></i>
                        <span class="d-none d-sm-inline">Forum</span>
                    </a>
                </li>
                <li class="nav-item header-navbar-item">
                    <a class="nav-link header-navbar-link" href="https://www.informatik.tu-darmstadt.de">
                        <i class="fa fa-university fa-lg"></i>
                        <span class="d-none d-sm-inline">Fachbereich</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

	  <!--

    <h1>Fachschaft Informatik</h1>
    <h2><?php bloginfo('title'); ?> &ndash; <?php bloginfo('description'); ?></h2>

    </div>-->
