<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>
<div class="hero">
 <div class="titletext">

  </div> <!-- /.container -->
</div>
<div class="main">
  <div class="container">
    <div class="content col-sm-12">
      <div class="row">
        <div class="headline col-sm-12 col-lg-6">
          <h1><?php the_field('headline'); ?></h1>
          <br>
          <div class="desc">
            <?php the_field('description'); ?>
          </div>
        </div>
        <div class="figure col-sm-12 col-lg-6">
          <?php $image = get_field('image'); ?>
          <img src="<?php echo $image['sizes']['large'] ?>">
        </div>
      </div>

        <!-- carousel -->
        <!-- initialize carousel -->
      <br>
      <br>
        <div class="main-carousel js-flickity">
          <div class="carousel-cell bck1">
            <div class="cell-content">
              <?php the_field('testimonial2'); ?>
              <?php $image1 = get_field('img1'); ?>
              <img src="<?php echo $image1['sizes']['square'] ?>">
            </div>
          </div>
          <div class="carousel-cell bck2">
            <div class="cell-content">
              <?php the_field('testimonial2'); ?>
              <?php $image2 = get_field('img2'); ?>
              <img src="<?php echo $image2['sizes']['square'] ?>">
            </div>
          </div>
            <div class="carousel-cell bck3">
              <div class="cell-content">
                <?php the_field('testimonial3'); ?>
                <?php $image3 = get_field('img3'); ?>
                <img src="<?php echo $image3['sizes']['square'] ?>">
              </div>
            </div>
          </div>
        <!-- end of carousel -->
      <br>
      <br>
      <div class="row">
        <div class="contact-desc col-lg-6">
        <h3>Contact Us</h3>
          <?php the_field('contact-desc'); ?>
        </div>
        <div class="contact col-lg-6">
          <?php echo do_shortcode( '[contact-form-7 id="16" title="Contact form 1"]' );?>
        </div>
        <script>
        document.addEventListener( 'wpcf7mailsent', function( event ) {
            location = 'http://example.com/';
        }, false );
        </script>
      </div>
  <br>
  <br>
  <br>
    </div> <!--/.content -->
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>