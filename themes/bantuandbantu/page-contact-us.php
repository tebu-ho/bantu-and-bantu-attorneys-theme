<?php

acf_form_head();

get_header();

while (have_posts()) {
     the_post(); ?>
<section id="map" class="sec--map">
    <?php the_content(); ?>
</section>
<div class="divider--grey"></div>
<section id="about" class="sec--contact">
      <div class="container">
        <h1 class="heading--big"><?php the_title(); ?></h1>
            <p class="kicker"><?php the_field('service_description', 18); ?></p>
        <hr>
        <div class="card p-4 col-md-8 mx-auto text-left">
        <?php echo do_shortcode(get_field('contact_form', 18)); ?>
        </div>
        <br>
      </div>
    </section>
<?php }

?>

<?php get_footer();?>