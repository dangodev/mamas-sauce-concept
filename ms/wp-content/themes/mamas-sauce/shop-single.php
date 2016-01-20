<?php 
/*
 * Template Name: Shop Single
 */

get_header();

?>
<div class="wrapper">
  <section class="content"><?php

while(have_posts()) :
  the_post();

?>
    <div class="row row--space">
      <div class="grid-box grid-box--desk--1of2">
        <div class="cell cell--shopPic">
          <img src="<?= $template_url ?>/img/print-nerd-essentials.png">
        </div>
      </div>
      <div class="grid-box grid-box--desk--1of2">
        <div class="cell cell--shopDesc">
          <h1 class="h1">Product Name</h1>
          <h2 class="h2">$25</h2>
          <p>Description description description description description description description description description</p>
          <p>Description description description description description description description description description description description description description description description</p>
          <div class="cell-actions">
            <div class="row row--space">
              <div class="grid-box grid-box--1of2">
                <select>
                  <option>Clark Orr</option>
                  <option>Dave Quiggle</option>
                  <option>Ryan Brinkerhoff</option>
                  <option>All 3 – $50</option>
                </select>
              </div>
              <div class="grid-box grid-box--1of2 tar">
                <input type="number" name="quantity" placeholder="Quantity">
              </div>
            </div>
            <p class="tar"><button>Add to Cart</button></p>
          </div>
        </div>
      </div>
    </div>
  </section><?php

endwhile;

get_footer();

?>