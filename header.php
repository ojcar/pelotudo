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
<link href="https://fonts.googleapis.com/css?family=Karla|Roboto+Slab" rel="stylesheet">

<script src="js/vendor/modernizr.js"></script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div class="row header">
    <div class="small-12 columns logo"><a href="/">MUNDO PELOTA</a></div>
  </div>
