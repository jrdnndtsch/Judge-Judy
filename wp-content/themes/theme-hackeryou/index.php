<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="main">
  <div class="container">

    <div class="content">
	<div class="wrapperIndex clearfix">
	    
	    <?php while ( have_posts() ) : the_post(); ?>
	    	<div class="postWrapper clearfix">
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
		    </div>	<!-- end.postWrapper -->	
	    <?php endwhile; // End the loop. Whew. ?>	
	    	
    	</div> <!-- end .wrapperIndex -->
    </div> <!--/.content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>