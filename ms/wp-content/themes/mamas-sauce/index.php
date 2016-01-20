<?php get_header() ?>
<div class="wrapper">
  <div class="row">
    <section class="grid-box grid-box--desk--3of4"><?php

if(have_posts()) :

?>
      <div class="has-articles"><?php
      
  while(have_posts()) :
    the_post();

?>
        <article class="article">
          <div class="article-social">
            <a href="//www.pinterest.com/pin/create/button/?url=<?= urlencode(get_permalink()) ?>&media=<?= get_featured_image_src('large') ?>&description=<?= urlencode(get_the_title()) ?>" data-pin-do="buttonPin" data-pin-config="beside"><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_gray_20.png" /></a>
            <a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink() ?>" data-text="<?= the_title() ?>&#010;<?= the_permalink() ?>" data-size="small" data-dnt="true">Tweet</a>
          </div>
          <h1 class="h1"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h1>
          <h2 class="h2">Posted by <address><?php the_author_link() ?></address> on <time><?php the_date('F j') ?></time></h2>
          <?php the_content(''); ?>
          <menu class="article-actions"><a class="btn article-read" href="<?php the_permalink() ?>">Read</a>&nbsp;<a class="btn article-comment" href="<?php the_permalink() ?>#comments">Comment</a></menu>
        </article><?php

  endwhile;

?>
      </div>
      <nav class="article-navigation">
        <div class="wrapper">
          <div class="row">
            <div class="grid-box grid-box--desk--2of3">
              <?php next_posts_link('Read More') ?>
            </div>
          </div>
        </div>
      </nav><?php

else :

  $s = (!empty($_GET['s'])) ? ' for “' . $_GET['s'] . '”' : ''

?>
      <article class="article">
        <p>No posts found <?= $s ?>.</p>
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
<?php get_footer(); ?>