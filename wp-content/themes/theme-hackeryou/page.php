<?php get_header();  ?>

<div class="main">

        <?php $thumb_id = get_post_thumbnail_id();
        $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
        $thumb_url = $thumb_url_array[0]; ?>
 
         <div class="heroImg" style="background-image: url('<?php echo $thumb_url ?>')">
            <h1 class="blogname"> <?php the_field('blogname'); ?></h1>
           
         </div>
        

  <div class="container clearfix">
      <div class="homeBlurb">
        <?php the_field('homeBlurb'); ?>
      </div> <!-- end .homeBlurb --> 
      <div class="homeWrapper clearfix">
        <div class="postTitle">
          <div class="titleText">
            <a href="#">
              <?php  
              $aboutid = get_page_by_title('About', ARRAY_N);
              echo get_the_title($aboutid[0]);
              ?>
            </a> 
          </div> 
        </div>  
          
        <div class="postImage clearfix">
          <a href="#">
            <?php $feat_image= wp_get_attachment_url(get_post_thumbnail_id($aboutid[0], 'thumbnail-size', true));
             ?>
            <div class="image" style="background-image: url('<?php echo $feat_image ?>')"></div>
            
          </a> 
        </div>
      </div> <!-- end .homeWrapper -->   

      <div class="homeWrapper clearfix">
        <div class="postTitle">
          <div class="titleText">
            <a href="#">
              <?php  
              $menuid = get_page_by_title('Menu', ARRAY_N);
              echo get_the_title($menuid[0]);
              ?>
            </a>  
          </div>
        </div>  
          
        <div class="postImage clearfix">
          <a href="#">
            <?php $feat_image= wp_get_attachment_url(get_post_thumbnail_id($menuid[0], 'thumbnail-size', true));
             ?>
            <div class="image" style="background-image: url('<?php echo $feat_image ?>')"></div>
            
          </a> 
        </div>
      </div> <!-- end .homeWrapper -->    

      <?php $args = array( 'numberposts' => 3 );
       $lastposts = get_posts( $args );
      foreach($lastposts as $post) : setup_postdata($post);
      ?> 
          <div class="homeWrapper clearfix">
            <div class="postTitle">
              <div class="titleText">
                <a href="<?php the_permalink(); ?>">
                  <?php echo get_the_title(); ?>
                </a>
              </div>
            </div>  
            <div class="postImage clearfix">
              <?php $thumb_id = get_post_thumbnail_id();
              $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
              $thumb_url = $thumb_url_array[0]; ?>
              <a href="<?php the_permalink(); ?>">
                <div class="image" style="background-image: url('<?php echo $thumb_url ?>')"></div>
              </a> 
            </div>
          </div>  <!-- end.postWrapper -->  
     
      <?php endforeach; ?> 

  </div> <!-- /.container -->
    <?php get_sidebar(); ?>
</div> <!-- /.main -->

<?php get_footer(); ?>