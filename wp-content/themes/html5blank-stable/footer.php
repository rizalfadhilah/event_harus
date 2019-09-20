<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
<script type="text/javascript">
      $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        dots:false,
        nav:true,
        mouseDrag:false,
        autoplay:true,
        animateOut: 'slideOutUp',
        responsive:{
          0:{
            items:1
          },
          600:{
            items:1
          },
          1000:{
            items:1
          }
        }
      });
    </script>
    <!-- Swiper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.2.5/js/swiper.min.js"></script>
    
    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        spaceBetween: 0,
        loop: true,
        effect: 'slide',
        longSwipes: true,
        autoplay:20000,
        autoplayDisableOnInteraction:true,
      });


      $(".swiper-container").mouseenter(function(){
        swiper.stopAutoplay();
      });

      $(".swiper-container").mouseleave(function(){
        swiper.startAutoplay();
      });
    </script>
<style type="text/css">
  
</style>

    </div><!-- #content -->

    <footer id="colophon" class="site-footer" role="contentinfo">
      <div class="wrap">
        <?php
        get_template_part( 'template-parts/footer/footer', 'widgets' );

        if ( has_nav_menu( 'social' ) ) :
          ?>
          <nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentyseventeen' ); ?>">
            <?php
              wp_nav_menu(
                array(
                  'theme_location' => 'social',
                  'menu_class'     => 'social-links-menu',
                  'depth'          => 1,
                  'link_before'    => '<span class="screen-reader-text">',
                  'link_after'     => '</span>' . twentyseventeen_get_svg( array( 'icon' => 'chain' ) ),
                )
              );
            ?>
          </nav><!-- .social-navigation -->
          <?php
        endif;

        get_template_part( 'template-parts/footer/site', 'info' );
        ?>
      </div><!-- .wrap -->
    </footer><!-- #colophon -->
  </div><!-- .site-content-contain -->
</div><!-- #page -->

 <section class="contact pt-100 pb-100" id="contact">
               <div class="container">
                <div class="row">
                 <div class="col-xl-6 mx-auto text-center">
                  <div class="section-title mb-100">
                    <h4>Contact</h4>
                  </div>
                </div>
              </div>
              <div class="row text-center">
                
            <div class="col-md-12">
             <div class="single-contact">
              <h5>Event Organizers:</h5>
              <p>Aldo: 081319190002 <br>
                  Dean: 0811845299
              </p>
            </div>
            <div class="single-contact">
              <h5>Payment Confirmation</h5>
              <p>Willy: 081513302361 <br>
                Setiyo: 083899169469
              </p>
            </div>
            <div class="single-contact">
              <h5>Sosial Media</h5>
              <p>Instagram: @speedcreed <br>
        LINE: @speedcreed <br>
        Facebook: fb.com/speedcreed <br>
        YouTube: youtube.com/speedcreedtv</p>
            </div>
          </div>
        </div>
      </div>
    </section>


<?php wp_footer(); ?>

<script type="text/javascript">
  function makeTimer() {

      var endTime = new Date("August 10, 2017 12:00:00 PDT");     
      var endTime = (Date.parse(endTime)) / 1000;

      var now = new Date();
      var now = (Date.parse(now) / 1000);

      var timeLeft = endTime - now;

      var days = Math.floor(timeLeft / 86400); 
      var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
      var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
      var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));

      if (hours < "10") { hours = "0" + hours; }
      if (minutes < "10") { minutes = "0" + minutes; }
      if (seconds < "10") { seconds = "0" + seconds; }

      $("#days").html(days + "<span>Days</span>");
      $("#hours").html(hours + "<span>Hours</span>");
      $("#minutes").html(minutes + "<span>Minutes</span>");
      $("#seconds").html(seconds + "<span>Seconds</span>");   

  }

  setInterval(function() { makeTimer(); }, 1000);
</script>

</body>
</html>
