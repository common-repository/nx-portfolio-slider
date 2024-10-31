<?php

 function nx_portfolio_slider_shortcode( $atts ){
     
    ob_start();
    extract( shortcode_atts( array (
        'type' => 'nx_portfolio_slider',
        'order' => 'date',
        'orderby' => 'ID',
        'category' => '',
    ), $atts ) );
 
    // define query parameters based on attributes
    $options = array(
        'post_type' => $type,
        'order' => $order,
        'orderby' => $orderby,
        'category_name' => $category,
    );

    $sliders = new WP_Query( $options );

    ?>
  
      <div class="owl-carousel newexslider-contant nx-portfoli-slider">
        <?php
          if( $sliders->have_posts() ) {
            while( $sliders->have_posts() ) {
              $sliders->the_post();
        ?>
        <div class="newexContainer-Slider nx-portfolio-slider-item">
            <div class="newex-contant">
                  <a href="<?php the_permalink(); ?>">
                    <div class="img">
                          <?php echo the_post_thumbnail(); ?>
                    </div>
                  </a>

                <div class="newex-title-link"><h5>Branding Design</h5></div>
                <a href="<?php the_permalink(); ?>">
                  <div class="newex-title"><h2><?php the_title() ?></h2></div>
                </a>
            </div>
        </div>
          <?php
              }}else {
              echo 'Oh no Slider!';
            }
            
          ?>
      </div>

      <script>
        (function( $ ) {

            $(document).ready(function(){
                $(".nx-portfoli-slider").owlCarousel({
                    
                    loop: <?php echo esc_attr( get_option('nx_slider_loop') ); ?>,
                    margin:80,
                    autoplay: <?php echo esc_attr( get_option('nx_slider_autoplay') ); ?>,
                    autoplayTimeout: <?php echo esc_attr(get_option('nx_slider_autoplay_timeout')); ?>,
                    nav: <?php echo esc_attr(get_option('nx_slider_navbar')); ?>,
                    navText: ["<img src='<?php echo plugin_dir_url( __FILE__ ) ?>../public/img/arrow-left.svg'>","<img src='<?php echo plugin_dir_url( __FILE__ ) ?>../public/img/arrow-right.svg'>"],
                    responsive:{
                        0:{
                            items:1
                        },
                        600:{
                            items:2
                        },
                        1000:{
                            items:2.5
                        }
                    }
                });

            });


          })( jQuery );
        </script>
    <?php
    wp_reset_query();
    return ob_get_clean();
    
  
 }

 add_shortcode( 'nx_portfolio_slider', 'nx_portfolio_slider_shortcode');