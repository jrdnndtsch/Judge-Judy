<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="main">
  <div class="containerIndex">

    <div class="contentIndex">
	<div class="wrapperIndex">
	    <?php while ( have_posts() ) : the_post(); ?>
	    	<div class="postTitle">
	    		<a href="<?php the_permalink(); ?>">
	    			<?php echo get_the_title(); ?>
	    		</a>
	    		
	    	</div>	
	    <?php endwhile; // End the loop. Whew. ?>	
	    	
    	</div> <!-- end .wrapperIndex -->
    </div> <!--/.content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>