<?php 
/*
 * Template Name: About
 */

get_header();

while(have_posts()) :
  the_post();

?>

<div class="row">
  <div class="card card--team"><img src="<?= $template_url ?>/img/about.jpg" height="2592" width="3888"></div>
</div>
<div class="wrapper">
  <div class="row">
    <div class="grid-box grid-box--desk--2of3">
      <h1 class="h1">Our Team</h1>
      <?php the_content() ?>
    </div>
    <div class="grid-box grid-box--desk--1of3">
      <iframe src="//player.vimeo.com/video/13114334?title=0&amp;byline=0&amp;portrait=0" width="320" height="180" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>
  </div>
</div>

<?php

endwhile;

get_footer();

?>