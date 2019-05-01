<?php get_header(); ?>

<?php if ( get_header_image() ) : ?>
<div class="hero__overlay sec--hero" style="background-image:url(<?php header_image(); ?>)">
        <div class="container">
          <div class="row">
            <div class="hero__content">
                <h1><mark>The Blog Page</mark></h1>
                <h2><mark>Tax   &bull;   Real Estate     &bull; Governance</mark></h2>
              <ul class="hero__buttons">
                <li>
                  <a href="<?php echo site_url('/contact-us'); ?>" class="btn btn--green hvr-radial-in" role="button">Book Your Free Consultation</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <?php endif; ?>
    <div class="divider--grey"></div>
    <section id="about" class="sec--about">
      <div class="container">
           <hr>
        <div class="row">
            <p class="text--center kicker">As a small law firm with more than 10 years in business, we certainly came a long way. Started in 2005 in an office space the size of a small bedroom with just 2 partners. The mission was straight forward from the beginning: provide affordable quality legal advice tailored for small business needs with the growth mindset.</p>
        </div>
           <div class="row margin-row">
           <?php
          
           while (have_posts()) {
                the_post(); ?>
                     <div class="four columns about__container">
                          <i <?php postMeta(); ?>></i>
                          <h2 class="heading--medium"><?php the_title(); ?></h2>
                          <p><?php the_content(); ?></p>
                    </div>
               <?php } 
                ?>
                </div>
               <br>
               <br>
               <br>
          </div>
     </section>
<?php get_footer();?>