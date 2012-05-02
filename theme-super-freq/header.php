<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" /> 
<title><?php wp_title(); ?> <?php bloginfo('name'); ?> </title>

<link href='http://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Pontano+Sans' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/960.css" type="text/css" media="all">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen,projection" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	<div class="container_12" id="wrap">
