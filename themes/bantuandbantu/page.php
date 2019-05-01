<?php

get_header();

while (have_posts()) {
     the_post();
     pagebanner()
     ?>

    <div class="divider--grey"></div>
    <section id="about" class="sec--about">
      <div class="container">
        <h1 class="heading--big"><?php the_title(); ?></h1>
        <hr>
        <div class="row">
            <p class="text--center kicker"><?php the_field('service_description', 11); ?></p>
        </div>
        <div class="row margin-row">
    <?php
        $a = new FontAwesomeIcons();
        $practiceAreaInfo = new WP_Query(
            array(
            'posts_per_page' => 3,
            'post_type' => 'service',
            'post__in' => array(166, 168, 170),
            'order' => 'DESC'
            )
        );
    while ($practiceAreaInfo->have_posts()) {
            $practiceAreaInfo->the_post(); ?>
            <div class="four columns about__container">
                <i class="<?php $a->displayIcon(); ?>"></i>
              <h2 class="heading--medium"><?php the_title(); ?></h2>
              <p><?php the_field('service_description'); ?></p>
            </div>
    <?php } ?>
        </div>
        <br>
        <br>
        <br>
      </div>
    </section>
<?php }

?>
<div class="cta">
    <ul class="hero__buttons">
        <li class="card">
            <a href="contact.html" class="btn btn-info" role="button">
            <?php echo get_theme_mod( 'call_to_action', 'default_value' ); ?> &nbsp;&nbsp;
                <i class="fa fa-angle-right"></i>
            </a>
        </li>
    </ul>
</div>

<?php get_footer();?>