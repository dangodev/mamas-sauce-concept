<?php global $template_url ?>
</main>
<footer class="footer footer--main">
  <nav class="nav nav--clients">
    <div class="wrapper">
      <ul><?php

$clients = get_posts(array('post_type' => 'client', 'posts_per_page', 4, 'orderby', 'rand'));

if(is_array($clients) && !empty($clients)) :
  foreach($clients as $client) :
    $link = get_field('link', $client->ID);
    $new_window = (get_field('new_window', $client->ID) === true) ? ' target="_blank"' : '';
?><li class="nav-item"><a href="<?= $link ?>"<?= $new_window ?>><?= get_featured_image('full', $client->ID, array('alt' => $client->post_title)) ?></a></li><?php

  endforeach;
endif;

wp_reset_postdata();

?>
      </ul>
    </div>
  </nav>
  <div class="wrapper">
    <div class="row">
      <div class="grid-box grid-box--desk--2of3">
        <nav class="nav nav--footer">
          <?php wp_nav_menu(array('container' => null, 'menu_class' => 'menu', 'theme_location' => 'secondary')); ?>
        </nav>
      </div>
      <div class="grid-box grid-box--desk--1of3 grid-box--desk--bordered">
        <form class="footer-newsletter">
          <input type="email" placeholder="Mama’s Sauce Newsletter" required><input type="submit" value="Sign Up">
        </form>
        <nav class="nav nav--social nav--table">
          <ul>
            <li class="nav-item"><a href="https://www.facebook.com/mamassauce" target="_blank" title="Facebook"><i class="icn icn--facebook"></i></a></li>
            <li class="nav-item"><a href="https://www.twitter.com/mamassauce" target="_blank" title="Twitter"><i class="icn icn--twitter"></i></a></li>
            <li class="nav-item"><a href="https://www.pinterest.com/mamassauce/" target="_blank" title="Pinterest"><i class="icn icn--pinterest"></i></a></li>
            <li class="nav-item"><a href="https://www.dribbble.com/mamassauce" target="_blank" title="Twitter"><i class="icn icn--dribbble"></i></a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</footer>
<?php wp_footer() ?>
<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/application.js"></script>
<script type="text/javascript" async src="//assets.pinterest.com/js/pinit.js"></script>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
</body>
</html>
