<?php

get_header();

while (have_posts()) {
     the_post();
     pagebanner()
     ?>

    <div class="divider--grey"></div>
    <section id="about" class="sec--about">
      <div class="container">
        <div class="row">
          <div class="eight columns offset-by-two">
            <p class="text--center"><?php the_field('quality_service_left', 14); ?></p>
          </div>
        </div>
        <div class="row margin-row">
        <h2 class="heading--medium text--center"><?php the_field('quality_service_heading', 14); ?></h2>
        <hr>
        <?php
        $a = new FontAwesomeIcons();
        $teamMemberInfo = new WP_Query(
            array(
                'posts_per_page' => 3,
                'post_type' => 'attorney',
                'post__in' => array(146, 148, 150),
                'order' => 'ASC'
                )
            );
            while ($teamMemberInfo->have_posts()) {
                $teamMemberInfo->the_post(); ?>
            <div class="four columns">
              <div class="details__box team__member">
                <p>
                  <img class="team__photo lazy" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Daniel photo">
                </p>
                <h2 class="heading--medium"><?php the_title(); ?></h2>
                <h3><?php the_field('position_in_firm'); ?></h3>
                <ul class="team__links">
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a href="#"><i class="fa fa-facebook-official"></i></a></li>
                </ul>
                <p><?php the_field('attorney_profile'); ?></p>
              </div>
            </div>
        <?php }
        ?>
        </div>
        <div class="row margin-row">
        <?php
        $a = new FontAwesomeIcons();
        $teamMemberInfo = new WP_Query(
            array(
                'posts_per_page' => 3,
                'post_type' => 'attorney',
                'post__in' => array(152, 154, 157),
                'order' => 'ASC'
                )
            );
            while ($teamMemberInfo->have_posts()) {
                $teamMemberInfo->the_post(); ?>
            <div class="four columns">
              <div class="details__box team__member">
                <p>
                  <img class="team__photo lazy" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Daniel photo">
                </p>
                <h2 class="heading--medium"><?php the_title(); ?></h2>
                <h3><?php the_field('position_in_firm'); ?></h3>
                <ul class="team__links">
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a href="#"><i class="fa fa-facebook-official"></i></a></li>
                </ul>
                <p><?php the_field('attorney_profile'); ?></p>
              </div>
            </div>
        <?php }
        ?>
        </div>
      </div>
    </section>
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
<?php }

?>

<?php get_footer();?>