 
<?php
/*
Template Name: About
*/ ?>
<?php get_header();  ?>
<div class="main">
	<div class="aboutHeader featImg" style="background-image: url('<?php echo get_field("about_header"); ?>')">
		<div class="entry-head">
			<h2 class= "fadeOut">
			 	<?php  
			      $aboutid = get_the_id('About');
			      echo get_the_title($aboutid);
			 	 ?>
			</h2> 	 
		</div> <!-- end .entryHead -->  
	</div> <!-- end .aboutHeader -->
	<div class="pageWrapper">

	  <div class="aboutNar clearfix">
		<img src="<?php echo get_field("about_images"); ?>" alt="salad" class="aboutImg img1">

		<div class="nar clearfix">
			<p><?php the_field('about_narrative') ?></p>
		</div>			
	  </div> <!-- end .aboutNar -->
	  <div class="aboutQuote clearfix">
	  	<img src="<?php echo get_field("about_images_2"); ?>" alt="salad" class="aboutImg img2">
		<div class="nar clearfix">
	  		<p><?php the_field('about_quote') ?></p>
	  	</div>	
	  </div>
	</div> <!-- end .pageWrapper -->  
	      <?php get_sidebar(); ?>
</div>	 <!-- end .main -->   
	 

<?php get_footer(); ?>  