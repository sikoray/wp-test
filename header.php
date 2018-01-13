<?php
/**
 * Header template (header.php)
 * @package WordPress
 * @subpackage your-clean-template
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); // display your language attribute ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); // default charset ?>">
	<?php /* RSS and other staff */ ?>
	<link rel="alternate" type="application/rdf+xml" title="RDF mapping" href="<?php bloginfo('rdf_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="Comments RSS" href="<?php bloginfo('comments_rss2_url'); ?>">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); // absolute path to youк theme ?>/style.css">
	    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700,800" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js">
	 <!--[if lt IE 9]>
	 <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	 <![endif]-->
	<title><?php typical_title(); // generate title, located in function.php ?></title>
	<?php wp_head(); // necessary for work plugins and functionality wp ?>
</head>
<body <?php body_class(); // all body classes, may be needed for styling ?>>
	<header>
	

<header>
    <nav>
        <ul class="navigation">
            <li><a href="#home" class="navigation__item">home</a></li>
			<li><a href="#portfolio" class="navigation__item">portfolio</a></li>
			<li><a href="#aboutus" class="navigation__item">about us</a></li>
			<li><a href="#contact" class="navigation__item">contact</a></li>
        </ul>
    </nav>
<div class="about">
    <div class="about-text">
        <div class="about-text__title"><?php echo get_field('service_title'); ?></div>
        <div class="about-text__txt"><?php echo get_field('service_text'); ?></div>
        <div class="about-text__btn">Contact Us</div>
    </div>
<iframe class="about-video" width="640" height="360" src="https://www.youtube.com/embed/<?php echo get_field('video_link'); ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
</div>
</header>
	</header>