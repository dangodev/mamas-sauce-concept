<?php 
/*
 * Template Name: Home
 */

get_header();

?>
<?php

while(have_posts()) :
  the_post();

?>    
<header class="header header--home">
  <div class="header-underlay"></div>
  <div class="wrapper">
    <h1 class="h1"><mark>Mama’s Sauce</mark> is a gourmet print shop specializing in letterpress and screen printing.</h1>
    <div class="row">
      <div class="grid-box--mobile--1of2 grid-box--center">
        <a class="btn btn--a fl" href="#">View the Shop</a>
        <a class="btn btn--a fr" href="#">Get a Quote</a>
      </div>
    </div>
  </div>
</header>
<div class="wrapper">
  <section>
    <h4 class="h4">What’s on Press</h4>
    <?php print_r(get_wop()) ?>
    <div class="row row--space">
      <div class="grid-box grid-box--mobile--1of3">
        <div class="card card--wop"></div>
      </div>
      <div class="grid-box grid-box--mobile--1of3">
        <div class="card card--wop"></div>
      </div>
      <div class="grid-box grid-box--mobile--1of3">
        <div class="card card--wop"></div>
      </div>
    </div>
  </section>
</div><?php

endwhile;

get_footer();

?>