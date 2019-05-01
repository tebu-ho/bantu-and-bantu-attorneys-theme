<?php

 /**
  * Setting up styles and scripts
  */
  
function bantu_and_bantu_files()
{
    wp_enqueue_script('main-scripts', get_theme_file_uri('/js/script.js'), null, '1.0', true);
    wp_enqueue_script('jquery-scripts', '//cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js', null, '3.3.1', true);
    wp_enqueue_script('lazy-load', get_theme_file_uri('/js/jquery.lazy.min.js'), null, '1.7.9', true);
    wp_enqueue_style('bootstrap-4.3.1', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
    wp_enqueue_style('hover', get_theme_file_uri('/styles/hover-min.css'));
    wp_enqueue_style('grid-skeleton', get_theme_file_uri('/styles/grid--skeleton.min.css'));
    // wp_enqueue_style('main-full', get_theme_file_uri('/styles/main.full.css'));
    wp_enqueue_style('reset', get_theme_file_uri('/styles/reset.css'));
    wp_enqueue_style('font-awesome', '//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('bantu_and_bantu_main_styles', get_stylesheet_uri(), null, microtime());
    
}
add_action('wp_enqueue_scripts', 'bantu_and_bantu_files');

 /**
  * Setting up features supported by this theme
  */

function bantu_and_bantu_features()
{
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    add_image_size('page-banner', 1500, 350, true);
}
add_action('after_setup_theme', 'bantu_and_bantu_features');

 /**
  * For customizing the site using the customize option
  */

function bantu_and_bantu_customize_register($wp_customize)
{

    //The footer section to customize
    $wp_customize->add_section(
        'content_footer_section', array(
        'title' => __('Footer', 'bantuandbantu'),
        'priority' => 30,
        )
    );

    //Setting up the left footer section to customize
    $wp_customize->add_setting(
        'footer_content_left', array(
        'default' => '',
        'transport' => 'refresh',
        )
    );
    $wp_customize->add_control(
        'footer_control_left', 
        array(
            'label'    => __( 'Footer Left', 'bantuandbantu' ),
            'section'  => 'content_footer_section',
            'settings' => 'footer_content_left',
            'type'     => 'textarea',
            'choices'  => array(
                'left'  => 'left',
                'right' => 'right',
            ),
        )
    );

    //Setting up the center footer section to customize
    $wp_customize->add_setting(
        'footer_content_email', array(
        'default' => '',
        'transport' => 'refresh',
        )
    );
    $wp_customize->add_control(
        'footer_control_email', 
        array(
            'label'    => __( 'Footer Email', 'bantuandbantu' ),
            'section'  => 'content_footer_section',
            'settings' => 'footer_content_email',
            'type'     => 'email',
            'choices'  => array(
                'left'  => 'left',
                'right' => 'right',
            ),
        )
    );
    $wp_customize->add_setting(
        'footer_content_phone1', array(
        'default' => '',
        'transport' => 'refresh',
        )
    );
    $wp_customize->add_control(
        'footer_content_phone1', 
        array(
            'label'    => __( 'Footer 1st Phone Number', 'bantuandbantu' ),
            'section'  => 'content_footer_section',
            'settings' => 'footer_content_phone1',
            'type'     => 'text',
            'choices'  => array(
                'left'  => 'left',
                'right' => 'right',
            ),
        )
    );

    //Setting up the right footer section to customize
    $wp_customize->add_setting(
        'footer_content_phone2', array(
        'default' => '',
        'transport' => 'refresh',
        )
    );
    $wp_customize->add_control(
        'footer_content_phone2', 
        array(
            'label'     => __('Footer Phone 2nd Number', 'bantuandbantu'),
            'section'   => 'content_footer_section',
            'settings'  => 'footer_content_phone2',
            'type'      => 'text',
            'choices'   => array(
                'left'  => 'left',
                'right' => 'right',
            ),
        )
    );

    //Setting up the footer copyright
    $wp_customize->add_setting(
        'footer_copyright_content', array(
        'default' => '',
        'transport' => 'refresh',
        )
    );
    $wp_customize->add_control(
        'footer_copyright_content', 
        array(
            'label'    => __('Copyright Info', 'bantuandbantu'),
            'section'  => 'content_footer_section',
            'settings' => 'footer_copyright_content',
            'type'     => 'text',
        )
    );

    //Setting up the call to action button
    $wp_customize->add_section(
        'call_to_action_button_section', array(
        'title' => __('Button', 'bantuandbantu'),
        'priority' => 40,
        )
    );
    $wp_customize->add_setting(
        'call_to_action', array(
        'default' => 'Book an Appointment',
        'transport' => 'refresh',
        )
    );
    $wp_customize->add_control(
        'call_to_action', 
        array(
            'label'    => __( 'Button Label', 'bantuandbantu' ),
            'section'  => 'call_to_action_button_section',
            'settings' => 'call_to_action',
            'type'     => 'text',
        )
    );

    //Setting up customizable section for "The Firm in Numbers"
    $wp_customize->add_section(
        'firm_accomplishments', array(
        'title' => __('Firm in Numbers', 'bantuandbantu'),
        'priority' => 40,
        )
    );
    $wp_customize->add_setting(
        'firm_files', array(
        'default' => '',
        'transport' => 'refresh',
        )
    );
    $wp_customize->add_control(
        'filed_files', 
        array(
            'label'    => __( 'Number of files filed', 'bantuandbantu' ),
            'section'  => 'firm_accomplishments',
            'settings' => 'firm_files',
            'type'     => 'number',
        )
    );
    $wp_customize->add_setting(
        'firm_in_years', array(
        'default' => '',
        'transport' => 'refresh',
        )
    );
    $wp_customize->add_control(
        'num_of_years', 
        array(
            'label'    => __( 'Number of Years', 'bantuandbantu' ),
            'section'  => 'firm_accomplishments',
            'settings' => 'firm_in_years',
            'type'     => 'number',
        )
    );
    $wp_customize->add_setting(
        'firm_attorneys', array(
        'default' => '',
        'transport' => 'refresh',
        )
    );
    $wp_customize->add_control(
        'num_of_attorneys', 
        array(
            'label'    => __( 'Number of Attorneys', 'bantuandbantu' ),
            'section'  => 'firm_accomplishments',
            'settings' => 'firm_attorneys',
            'type'     => 'number',
        )
    );
    $wp_customize->add_setting(
        'firm_awards', array(
        'default' => '',
        'transport' => 'refresh',
        )
    );
    $wp_customize->add_control(
        'num_of_awards', 
        array(
            'label'    => __( 'Number of Awards', 'bantuandbantu' ),
            'section'  => 'firm_accomplishments',
            'settings' => 'firm_awards',
            'type'     => 'number',
        )
    );
}
    add_action('customize_register', 'bantu_and_bantu_customize_register');


/**
 * Generates Font-Awesome icons based on section title
 */

class FontAwesomeIcons
{
    public $bank = 'fa fa-bank fa-3x';
    public $chart = 'fa fa-bar-chart fa-3x';
    public $scale = 'fa fa-balance-scale fa-3x';
    public $pie = 'fa fa-pie-chart fa-3x';
    public $building = 'fa fa-building fa-3x';
    public $umbrella = 'fa fa-umbrella fa-3x';
    public $mastercard = 'fa fa-cc-mastercard fa-3x';
    public $gift = 'fa fa-gift fa-3x';
    public $lineChart = 'fa fa-line-chart fa-3x';

 /**
  * If section title is 'Organized To Advise Entrepreneurs' display 'bank' icon
  */

    public function displayIcon()
    {
        if (get_the_title() == 'Organized To Advise Entrepreneurs') {
            echo $this->bank;
        } elseif (get_the_title() == 'Entrepreneurial Growth Challenges') {
            echo $this->chart;
        } elseif (get_the_title() == 'Managing Working Relationships') {
            echo $this->scale;
        } elseif (get_the_title() == 'Real Estate') {
            echo $this->building;
        } elseif (get_the_title() == 'Pay Only When In Need Of Advice') {
            echo $this->mastercard;
        } elseif (get_the_title() == 'Get First Legal Consultation Free') {
            echo $this->gift;
        } elseif (get_the_title() == 'Prepare Your Business For Growth') {
            echo $this->lineChart;
        } elseif (get_the_title() == 'Corporate Governance') {
            echo $this->umbrella;
        } else {
            echo $this->pie;
        }
    }
}
?>
<?php

/**
 * Custom function for changing the_title tag to uppercase first letter
 * 
 */

function captitle($title)
{
    $title = ucwords($title);
    return $title;
}
add_filter('the_title', 'captitle');

 /**
  * Custom function for displaying the page banner
  * Home page banner is option is different
  */

function pagebanner()
{ 
    if (is_front_page()) :
        ?>

<section class="hero__overlay sec--hero" style="background-image:url(
        <?php $pageBannerImage = get_field('page_banner_background_image'); 
        echo $pageBannerImage['sizes']['page-banner'];?>
    )">
    <div class="container">
        <div class="row">
            <div class="hero__content">
                <h1><mark><?php bloginfo('description');?></mark></h1>
                <h2><mark><?php echo get_field('page_banner_subtitle');?></mark></h2>
                <ul class="hero__buttons">
                    <li>
                        <a href="<?php echo site_url('/contact-us'); ?>" class="btn btn-info" role="button">
                        <?php echo get_theme_mod('call_to_action', 'default_value'); ?>&nbsp;&nbsp;
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

        <?php 

else: ?>

<section id="hero" class="sec--hero" 
style="background-image:url(
    <?php $pageBannerImage = get_field('page_banner_background_image'); 
    echo $pageBannerImage['sizes']['page-banner'];?>)">
      <div class="hero__overlay">
        <div class="container">
          <div class="row">
            <div class="hero__content">
                <h1><mark><?php  the_field('page_banner_subtitle'); ?></mark></h1>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php
endif;
} 