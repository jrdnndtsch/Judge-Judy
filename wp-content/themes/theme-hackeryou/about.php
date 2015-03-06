 
<?php
/*
Template Name: About
*/ ?>

 <?php  
      $aboutid = get_the_id('About');
      echo get_the_title($aboutid);
  ?>