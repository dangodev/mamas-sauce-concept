<?php

global $site_url;
global $template_url;
global $page_quote;

get_header();

?>
<header class="header header--printing">
  <div class="wrapper">
    <nav class="nav nav--printing">
      <ul><?php

  $types = get_categories(array('taxonomy' => 'type', 'title_li' => null));

  foreach($types as $type) :

  ?><li class="nav-item"><input type="checkbox" data-type="<?= $type->term_id ?>" class="print-filter" name="type[]" id="<?= $type->slug ?>"><label for="<?= $type->slug ?>" title="<?= $type->description ?>"><?= $type->name ?></label></li><?php

  endforeach;

  ?>
      </ul>
    </nav>
  </div>
</header><?php

$printing = new WP_Query(array('post_type' => 'printing', 'posts_per_page' => '-1'));

if($printing->have_posts()) :

?>
<div class="wrapper">
  <section class="content has-printing"><?php

  $i = 0;

  while($printing->have_posts()) :
    $printing->the_post();
    $types = wp_get_post_terms($post->ID, 'type');
    $type_string = '';
    foreach($types as $type)
      $type_string .= ' type-' . $type->term_id;

?>
    <div class="card card--printing<?= $type_string ?>" data-href="<?php the_permalink() ?>" title="View <?php the_title() ?>">
      <a href="<?= get_permalink() ?>" title="View <?php the_title() ?>">View Project</a>
      <a href="<?= get_permalink($page_quote) ?>?project=<?= $post->ID ?>" title="Get a Quote for something like this">Get a Quote</a>
      <span class="has-img" style="background-image:url('<?= get_featured_image_src('thumbnail', $post->ID) ?>')"></span>
    </div><?php

    $i++;
  endwhile;

?>
    <div class="card card--none tac is-hidden"><h1 class="h1">No Printing Projects match the filters above.</h1></div>
  </section><?php

endif;

wp_reset_query();

?>
</div>
<?php get_footer(); ?>