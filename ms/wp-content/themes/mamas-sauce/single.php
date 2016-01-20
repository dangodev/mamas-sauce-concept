<?php get_header() ?>
<div class="wrapper">
  <div class="row">
  <section class="grid-box grid-box--desk--3of4"><?php

if(have_posts()) :
	while(have_posts()) :
    the_post();

?>
	  <article class="article">
      <h1 class="h1"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h1>
      <?php the_content() ?>
      <a name="comments"></a>
      <div class="fb-comments" data-href="<?php the_permalink() ?>" data-numposts="5" data-colorscheme="light"></div>
    </article><?php

  endwhile;
else :

?>
    <article class="article">
      <p>No posts found.</p>
    <article><?php

endif;

?>
    </section>
    <aside class="grid-box grid-box--desk--1of4">
      <nav class="nav nav--sidebar">
        <?php get_sidebar() ?>
      </nav>
    </aside>
  </div>
</div>
<?php get_footer() ?>