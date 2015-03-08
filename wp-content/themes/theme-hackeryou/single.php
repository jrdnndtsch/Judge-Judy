<?php get_header(); ?>

<div class="main">
  <div class="container">

    <div class="content">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <!-- <div class="entry-head">
          <h1 class="entry-title"><?php the_title(); ?></h1>
          <h4 class="entry-author">Words: <?php echo get_the_author(); ?></p>
          <h4 class="entry-date">Date: <?php echo get_the_date('l F d, Y') ?></h4>
        </div><!-- .entry-author --> 

        <div class="entry-featImg">
          <?php $thumb_id = get_post_thumbnail_id();
          $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
          $thumb_url = $thumb_url_array[0]; ?>
          
          <div class="featImg" style="background-image: url('<?php echo $thumb_url ?>')">
            <div class="entry-head fadeOut">
              <h1 class="entry-title"><?php the_title(); ?></h1>
              <h4 class="entry-author">Words: <?php echo get_the_author(); ?></p>
              <h4 class="entry-date">Date: <?php echo get_the_date('l F d, Y') ?></h4>
            </div><!-- .entry-author -->
          </div>
        </div> <!-- end .entry-featImg -->

        <div class="contentWrapper">
          <div class="entry-content">
            <?php the_content(); ?>
            <?php wp_link_pages(array(
              'before' => '<div class="page-link"> Pages: ',
              'after' => '</div>'
            )); ?>
          </div><!-- .entry-content -->

       

        <div id="nav-below" class="navigation">
          <p class="nav-previous"><?php previous_post_link('%link', '&larr; %title'); ?></p>
          <p class="nav-next"><?php next_post_link('%link', '%title &rarr;'); ?></p>
        </div><!-- #nav-below -->
      

       </div> <!-- end .contentWrapper --> 
      <?php endwhile; // end of the loop. ?>
    </div> <!-- /.content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->
<?php get_footer(); ?>


