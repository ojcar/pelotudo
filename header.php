<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package pelotudo
 */
?><!DOCTYPE html>
<html lang="es" class="no-js">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/foundation.min.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans|PT+Serif:700' rel='stylesheet' type='text/css'>

<script src="js/vendor/modernizr.js"></script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="header">
  <div class="row">
    <div class="large-12 columns">
    	<div id="logo" class="text-center">
      <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/mp-logo-01a.png" height="20" class="logo hide-for-small-only" /></a>
      </div>
    </div>        
  </div>
</header>