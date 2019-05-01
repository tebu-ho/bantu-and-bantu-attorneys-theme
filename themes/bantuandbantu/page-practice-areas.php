<?php

get_header();

while (have_posts()) {
     the_post();
     pagebanner()
     ?>


    <div class="divider--grey"></div>
    <section id="services" class="sec--services">
      <div class="container">
        <h1 class="heading--big">
            <?php the_field('quality_service_heading', 16); ?>
        </h1>
        <hr />
        <div class="row">
          <div class="six columns">
            <p><?php the_field('quality_service_left', 16); ?></p>
          </div>
          <div class="six columns">
            <p><?php the_field('quality_service_right', 16); ?></p>
          </div>
        </div>
        <br>
        <br>
        <br>
        <div class="row">
    <?php
        $a = new FontAwesomeIcons();
        $practiceAreaInfo = new WP_Query(
            array(
            'posts_per_page' => 3,
            'post_type' => 'service',
            'post__in' => array(107, 110, 112),
            'order' => 'ASC'
            )
        );
    while ($practiceAreaInfo->have_posts()) {
            $practiceAreaInfo->the_post(); ?>
            <div class="four columns">
              <div class="details__box">
                <p><i class="<?php $a->displayIcon(); ?>"></i></p>
                <h2 class="heading--medium"><?php the_title(); ?></h2>
                  <hr>
                <p><?php the_field('service_description'); ?></p>
              </div>
            </div>
    <?php } ?>
        </div>
      </div>
    </section>
<?php } ?>
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