<?php get_header();  ?>

<div class="main">

        <?php $thumb_id = get_post_thumbnail_id();
        $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
        $thumb_url = $thumb_url_array[0]; ?>
 
         <div class="heroImg" style="background-image: url('<?php echo $thumb_url ?>')"></div>
        

  <div class="container">
    <div class="content">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->


  </div> <!-- /.container -->
    <?php get_sidebar(); ?>
</div> <!-- /.main -->

<?php get_footer(); ?>