<?php
/**
 *  The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package saintsrobotics
 */
function frontPageContent($pagename) {
  $your_query = new WP_Query( 'pagename='.$pagename );
  // "loop" through query (even though it's just one page)
  while ( $your_query->have_posts() ) : $your_query->the_post();
      the_title('<h1 class="text-huge" id='.$pagename.'>', '</h1>' );
      the_content();
  endwhile;
  // reset post data (important!)
  wp_reset_postdata();
}
get_header(); ?>
<div class="landing">
  <div class="image-slider">
  <?php echo do_shortcode('[swiper_slider id="39"]'); ?>
    <!-- <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="resources/1.jpg" alt="Smiley" />
          <div class="swiper-lazy-preloader"></div>
        </div>
        <div class="swiper-slide"><img src="resources/2.jpg" alt="Smiley face">
          <div class="swiper-lazy-preloader"></div>
        </div>
        <div class="swiper-slide"><img src="resources/3.jpg" alt="Smiley face">
          <div class="swiper-lazy-preloader"></div>
        </div>
      </div>


    </div> -->
  </div>

  <div class="container center-vertical">
    <div class="section ">
      <div class="">
      <div class="row ">
        <div class="col-md-6 ">
          <div class="landing-logo">

            <p>INTERLAKE</p>

            <p>SAINTS</p>

            <p>ROBOTICS</p>
          </div>
        </div>
          <div class="col-md-6 hidden-xs hidden-sm">
            <ul id="events-upcoming">
            </ul>
      </div>
      </div>
    </div>
      <div class="row">
        <div class="col-md-12">
          <div class="landing-logo">
            <a href="#trigger-menu"> who the heck are we
              <div class='arrow-big'>

              </div>
            </a>
          </div>

        </div>
      </div>

    </div>
    <div class="section landing-footer">

      <div class="caption">
        <h5> image caption</h5>
        <p>
          doing stuff i guess lol
        </p>
        <div class="swiper-container">
          <div class="swiper-pagination"></div>
        </div>
      </div>
      <div class="scroll-btn">
        <a href="#trigger-menu">
          <div class="text-vertical">
            SCROLL
          </div>
          <div class="vertical-line">

          </div>
        </a>
      </div>

    </div>
  </div>
</div>


<div class='container'>
  <section class="section" id="trigger-menu">

  <div class="row">
    <div class="col-md-12">
    <?php
  frontPageContent("about-us")
      ?>
      </div>
    </div>
  </section>
</div>
<div class='container'>
  <section class="section">

  <div class="row">
    <div class="col-md-12">
    <?php
    frontPageContent("community-outreach") ?>
      </div>
    </div>
  </section>
</div>
<div class='container'>
  <section class="section">
  <div class="row">
    <div class="col-md-12">
      <?php
      frontPageContent("organization") ?>
      </div>
    </div>
  </section>
</div>
<div class='container'>
  <section class="section">

  <div class="row">
    <div class="col-md-12">
      <?php
      frontPageContent("sponsors") ?>
      </div>
    </div>
  </section>
</div>


<?php
get_sidebar();
get_footer();
?>
