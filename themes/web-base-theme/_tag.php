<?php get_header(); global $wp_query;
  $queried_obj = $wp_query->queried_object;
  $archive_name = (array_key_exists("name", (array)$queried_obj)) ? $queried_obj->name : "Archivo"; ?>
<main id="lev_tag_archive" class="main_wrapper">
  <section>
    <h1><?php echo esc_html($archive_name); ?></h1>
    <section id="" class="">
      <div class="inner_wrapper">
        <?php
          if(have_posts()):
            while(have_posts()):
              the_post();
            endwhile;
          endif;
        ?>
      </div>
    </section>
  </section>
</main>
<?php get_footer(); ?>
