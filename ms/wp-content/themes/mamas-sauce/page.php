<?php get_header();?>
  <div class="wrapper">
  <section class="content"><?php

while(have_posts()) :
  the_post();

?>
    <article class="page">
      <?php the_content('Read More'); ?>
    </article><?php

endwhile;

?>
  </section>
  </div>
<?php get_footer(); ?>