<?php

global $site_url;
global $template_url;
global $page_quote;

get_header();

?>
  <div class="wrapper"><?php

if(have_posts()) :
  while(have_posts()) :
    the_post();

?>
    <article class="article article--printing">
      <header class="header header--project">
        <div class="card card--feature" style="background-image:url('<?= get_featured_image_src('large', $post->ID) ?>')">
          <h1 class="h1"><?php the_title() ?></h1>
        </div>
      </header><?php

    the_content();


    $rows = get_field('rows');
    if(is_array($rows) && !empty($rows)) :
      foreach($rows as $row) :
        $align = (empty($row['image_on_right'])) ? '' : ' grid-box--right';

?>
      <div class="row row--space">
        <div class="grid-box grid-box--mobile--1of2<?= $align ?>">
          <?= wp_get_attachment_image($row['column_image'], 'large') ?>
        </div>
        <div class="grid-box grid-box--mobile--1of2<?= $align ?>">
          <?= $row['column_text'] ?>
        </div>
      </div>

<?php

      endforeach;
    endif;

?>
    </article>
    <p class="tac"><a class="article-back" href="<?= $site_url ?>/printing/">View More Projects …</a></p>
    <p class="tac"><a class="btn btn--a" href="<?= get_permalink($page_quote) ?>">Get a Quote!</a></p><?php

  endwhile;

else :

?>
    <div class="card card--none">
      <h1 class="h1">There’s not a print project by that name. <a href="<?= get_permalink($site_url) ?>">View our current Portfolio</a>.</h1>
    <div><?php

endif;

?>
  </div><?php

get_footer();

?>