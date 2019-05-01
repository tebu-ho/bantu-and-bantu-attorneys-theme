<footer>
  <div class="container">
    <div class="row">
      <div class="four columns footer__contact">
        <h3 class="heading--small">About Us</h3>
        <p class="contact__about">
          <?php echo get_theme_mod( 'footer_content_left', 'default_value' ); ?>
        </p>
      </div>
      <div class="four columns">
        <h3 class="heading--small">Contact Information</h3>
        <ul>
          <li><?php echo get_theme_mod( 'footer_content_email', 'default_value' ); ?></li>
          <li><?php echo get_theme_mod( 'footer_content_phone1', 'default_value' ); ?></li>
          <li><?php echo get_theme_mod( 'footer_content_phone2', 'default_value' ); ?></li>
        </ul>
      </div>
      <div class="four columns">
        <h3 class="heading--small">Address</h3>
        <p>Ground Floor, Metropole Building<br>
        135 Harvey Road, Claremont<br>
        Cape Town, 7708</p>
      </div>
    </div>
<div class="copyright">
  <span>&copy; <?php echo date('Y'); ?> <?php echo get_theme_mod( 'footer_copyright_content', 'default_value' ); ?></span>
</div>
  </div>
</footer>
</div>
  <?php wp_footer(); ?>
</body>
</html>