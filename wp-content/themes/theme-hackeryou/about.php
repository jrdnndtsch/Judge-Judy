 
<?php
/*
Template Name: About
*/ ?>
<?php get_header();  ?>
<div class="main">
	 <?php  
	      $aboutid = get_the_id('About');
	      echo get_the_title($aboutid);
	  ?>
	<div class="pageWrapper">

	  <div class="aboutNar">
	  	<?php the_field('about_narrative') ?>
		<img src="<?php echo get_field("about_images"); ?>" alt="salad">
	  
	  </div> <!-- end .aboutNar -->
	</div> <!-- end .pageWrapper -->  
	      <?php get_sidebar(); ?>
</div>	 <!-- end .main -->   
	 

<?php get_footer(); ?>  