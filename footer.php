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
          <i class="fa-solid fa-envelope"></i>
          <a href="##">sales@trn-s.com</a>
        </div>
        <div>
          <i class="fa-solid fa-envelope"></i>
          <a href="##">info@trn-s.com</a>
        </div>
      </div>
    </div>
    <div class="privacy_policy">
      <p>2022 © All rights reserved</p>
      <a href="/page-privacy-policy-page" target="_blank">Privacy Policy</a>
    </div>
  </div>
</footer>

</div><!-- #page -->
<?php wp_footer(); ?>

<?php require('sendmail.php'); ?>


</body>
</html>
