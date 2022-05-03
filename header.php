<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package translators
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<script src="https://kit.fontawesome.com/edd0ab275e.js" crossorigin="anonymous"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'translators' ); ?></a>

	<header>
  <div class="container">

    <div class="logo">
      <?php the_custom_logo('custom-logo'); ?>
    </div>

    <div class="info_container">
      <div class="info_wrap">
        <div class="header_info">
          <h1>Let your company go global <br> with our outstanding <span>Translators</span> </h1>
          <p>We offer translation services to produce more content for your website in new formats and in less time</p>
          <div class="mobile_animation">
            <img src="/wp-content/uploads/2022/04/illustration.png" alt="">
          </div>
          <a href="##">Get a consultation</a>
        </div>
        <div class="header_image">
          <img src="/wp-content/uploads/2022/04/illustration.png" alt="">
        </div>
      </div>
    </div>

  </div>
</header>