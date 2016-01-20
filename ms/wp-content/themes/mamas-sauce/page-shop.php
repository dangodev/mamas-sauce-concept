<?php 
/*
 * Template Name: Shop
 */

global $site_url;
global $template_url;

get_header();

?>
<div class="wrapper">
  <section class="content has-cards"><?php

while(have_posts()) :
  the_post();

?>
    <div class="row row--space">
      <div class="grid-box grid-box--desk--1of1">
        <a class="card" href="<?= get_permalink(5516) ?>" style="background-image:url(<?= $template_url ?>/img/print-nerd-essentials.png)" title="Shop">
          <span class="h1">Print Nerd Essentials</span>
        </a>
      </div>
    </div>
    <div class="row row--space">
      <div class="grid-box grid-box--desk--1of3">
        <a class="card" href="<?= get_permalink(5516) ?>" style="background-image:url(<?= $template_url ?>/img/that-inking-feeling-clark-orr.png)" title="Shop">
          <span class="h1">That Inking Feeling: Clark Orr</span>
        </a>
      </div>
      <div class="grid-box grid-box--desk--1of3">
        <a class="card" href="<?= get_permalink(5516) ?>" style="background-image:url(<?= $template_url ?>/img/that-inking-feeling-dave-quiggle.png)" title="Shop">
          <span class="h1">That Inking Feeling: Dave Quiggle</span>
        </a>
      </div>
      <div class="grid-box grid-box--desk--1of3">
        <a class="card" href="<?= get_permalink(5516) ?>" style="background-image:url(<?= $template_url ?>/img/that-inking-feeling-ryan-brinkerhoff.png)" title="Shop">
          <span class="h1">That Inking Feeling: Ryan Brinkerhoff</span>
        </a>
      </div>
    </div>
    <div class="row row--space">
      <div class="grid-box grid-box--desk--1of3">
        <a class="card" href="<?= get_permalink(5516) ?>" style="background-image:url(<?= $template_url ?>/img/mamas-sauce-apron.jpeg)" title="Shop">
          <span class="h1">Shop</span>
        </a>
      </div>
      <div class="grid-box grid-box--desk--1of3">
        <a class="card" href="<?= get_permalink(5516) ?>" style="background-image:url(<?= $template_url ?>/img/mamas-sauce-posters.jpeg)" title="Shop">
          <span class="h1">Shop</span>
        </a>
      </div>
      <div class="grid-box grid-box--desk--1of3">
        <a class="card" href="<?= get_permalink(5516) ?>" style="background-image:url(<?= $template_url ?>/img/mamas-sauce-stickers.jpeg)" title="Shop">
          <span class="h1">Shop</span>
        </a>
      </div>
    </div>
  </section><?php

endwhile;

get_footer();

?>