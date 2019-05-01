<?php get_header();
pagebanner(); ?>


<div class="divider--grey"></div>
<section id="about" class="sec--about">
    <div class="container">
        <p class="kicker" style="margin-bottom:10px"><?php the_field('paragraph_one'); ?></p>
        <p class="kicker">
        <?php the_field('paragraph_two'); ?></p>
        <hr />
        <div class="row margin-row">
            <?php
             $a = new FontAwesomeIcons();
                $homePageTestimonials = new WP_Query(array(
                    'posts_per_page' => 3,
                    'post_type' => 'post'
                    )
                );
                while ($homePageTestimonials->have_posts()) {
                    $homePageTestimonials->the_post(); ?>
                    <div class="four columns about__container">
                <i class="<?php $a->displayIcon(); ?>" style="color:#2098d1"></i>
                <h2 class="heading--medium"><?php the_title(); ?></h2>
                <?php the_content(); ?>
            </div>
                <?php } ?>
        </div>
    </div>
</section>
<section id="gallery" class="sec--gallery">
    <h1 class="heading--big"><?php echo strtoupper('Trusted by These Companies');?></h1>
    <hr />
    <div class="container">
            <div class="twelve columns">
            <?php
                $homePageTestimonials = new WP_Query(array(
                    'posts_per_page' => 4,
                    'post_type' => 'testimonial',
                    'post__in' => array(232, 235, 240, 251),
                    )
                );
                while ($homePageTestimonials->have_posts()) {
                    $homePageTestimonials->the_post(); ?>
                    
                <div class="gallery__box--medium">
                    <img class="gallery__thumbnail lazy" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="App thumbnail" />
                </div>
                <?php } ?>
            </div>
    </div>
</section>
<section id="testimonials" class="sec--testimonials">
    <div class="container">
        <h1 class="heading--big">What Our Clients Say</h1>
        <div class="slider__container" data-autoplay="true" data-slider-timeout="2000">
            <div class="row slider__slide slide--active">
                <?php
                $homePageTestimonials = new WP_Query(
                    array(
                    'posts_per_page' => 3,
                    'post__in' => array(68, 71, 75),
                    'post_type' => 'testimonial'
                    )
                );
                while ($homePageTestimonials->have_posts()) {
                    $homePageTestimonials->the_post(); ?>
                    <div class="four columns">
                        <div class="testimonial__box">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Testimonial photo" style="border-radius: 50%;max-width: 75px;width: 100%;">
                            <h2 class="box__name"><?php the_title(); ?></h2>
                            <h3 class="box__company"><?php the_excerpt(); ?></h3>
                            <hr class="box__divider"/>
                            <blockquote class="box__quote"><i class="fa fa-quote-left"></i><?php the_content(); ?><i class="fa fa-quote-right"></i></blockquote>
                        </div>
                    </div>
                    <?php   } ?>
                </div>
                <div class="row slider__slide slide--hidden">
                    <?php
                    $homePageTestimonials = new WP_Query(
                        array(
                        'posts_per_page' => 3,
                        'post_type' => 'testimonial',
                        'post__in' => array(84, 80, 77)
                        )
                    );
                    while ($homePageTestimonials->have_posts()) {
                        $homePageTestimonials->the_post(); ?>
                        <div class="four columns">
                            <div class="testimonial__box">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Testimonial photo" style="border-radius: 50%;max-width: 75px;width: 100%;">
                                <h2 class="box__name"><?php the_title(); ?></h2>
                                <h3 class="box__company"><?php the_excerpt(); ?></h3>
                                <hr class="box__divider"/>
                                <blockquote class="box__quote"><i class="fa fa-quote-left"></i><?php the_content(); ?><i class="fa fa-quote-right"></i></blockquote>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
          <div class="row slider__slide slide--hidden">
            <?php
            $homePageTestimonials = new WP_Query(
                array(
                    'posts_per_page' => 3,
                    'post_type' => 'testimonial',
                    'post__in' => array(94, 91, 87)
                    )
            );
            while ($homePageTestimonials->have_posts()) {
                $homePageTestimonials->the_post(); ?>
                <div class="four columns">
                <div class="testimonial__box">
                 <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Testimonial photo" style="border-radius: 50%;max-width: 75px;width: 100%;">
                    <h2 class="box__name"><?php the_title(); ?></h2>
                    <h3 class="box__company"><?php the_excerpt(); ?></h3>
                    <hr class="box__divider"/>
                    <blockquote class="box__quote">
                        <i class="fa fa-quote-left"></i>
                        <?php the_content(); ?>
                        <i class="fa fa-quote-right"></i>
                        </blockquote>
              </div>
            </div>
<?php } ?>
          </div>
      </div>
        <div class="slider__box">
          <ul class="slider__list">
            <li class="slider__dot slider__dot--active"></li>
            <li class="slider__dot"></li>
            <li class="slider__dot"></li>
          </ul>
        </div>
</div>
    </section>
    <section id="facts" class="sec--facts">
      <h1 class="heading--big">Our Firm in Numbers</h1>
      <hr />
      <div class="container">
        <div class="row">
          <div class="three columns facts__container">
            <p><i class="fa fa-file-text-o fa-2x"></i></p>
            <h2><?php echo get_theme_mod( 'firm_files', 'default_value' ); ?></h2>
            <h3>Documents Filed</h3>
          </div>
          <div class="three columns facts__container">
            <p><i class="fa fa-clock-o fa-2x"></i></p>
            <h2><?php echo get_theme_mod( 'firm_in_years', 'default_value' ); ?></h2>
            <h3>Years of Practice</h3>
          </div>
          <div class="three columns facts__container">
            <p><i class="fa fa-users fa-2x"></i></p>
            <h2><?php echo get_theme_mod( 'firm_attorneys', 'default_value' ); ?></h2>
            <h3>Committed Attorneys</h3>
          </div>
          <div class="three columns facts__container">
            <p><i class="fa fa-trophy fa-2x"></i></p>
            <h2><?php echo get_theme_mod( 'firm_awards', 'default_value' ); ?></h2>
            <h3>Awards Won</h3>
          </div>
        </div>
      </div>
    </section>
    <div class="cta">
        <ul class="hero__buttons">
            <li class="card">
                <a href="<?php echo site_url('/contact-us'); ?>" class="btn btn-info" role="button">
                    <?php echo get_theme_mod('call_to_action', 'default_value'); ?> &nbsp;&nbsp;
                    <i class="fa fa-angle-right"></i>
                </a>
            </li>
        </ul>
    </div>

<?php get_footer();?>