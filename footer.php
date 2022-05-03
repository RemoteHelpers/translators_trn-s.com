<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package translators
 */

?>

<footer>
  <div class="container">
    <div class="footer_wrapper">
      <div class="logo">
        <?php the_custom_logo('custom-logo'); ?>
      </div>
      <div class="footer_links">
        <div>
          <i class="fa-brands fa-google-plus"></i>
          <a href="##">sales@rh-s.com</a>
        </div>
        <div>
          <i class="fa-brands fa-google-plus"></i>
          <a href="##">info@trn-s.com</a>
        </div>
      </div>
    </div>
    <div class="privacy_policy">
      <p>2022 © All rights reserved</p>
      <p>Privacy Policy</p>
    </div>
  </div>
</footer>

</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
