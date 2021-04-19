<?php get_header(); ?>
<main id="simple_page" class="main_wrapper">
  <section class="inner_wrapper">
    <?php
    if(have_posts()):
      while(have_posts()):
        the_post(); ?>
          <h1 class="single_heading"><?php the_title(); ?></h1>
          <div class="body_container">
            <?php the_content(); ?>
          </div>
    <?php
      endwhile;
    endif; ?>
  </section>
</main>
<?php get_footer(); ?>
