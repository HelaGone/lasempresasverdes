<?php get_header(); global $wp_query; ?>
<main id="lev_archive" class="main_wrapper">
  <section class="archive_main_section">
    <?php
      $queried_obj = $wp_query->queried_object;
      // debug($queried_obj);
      $archive_name = (array_key_exists("name", (array)$queried_obj)) ? $queried_obj->name : "Archivo";
    ?>
    <h1 class="archive_heading"><?php echo esc_html($archive_name); ?></h1>
    <section id="posts_section">
      <div class="posts_pool">
        <?php
          if(have_posts()):
            while(have_posts()):
              the_post(); ?>
              <article class="arch_fig">
                <div class="arch_img_frame">
                  <?php has_post_thumbnail() ? the_post_thumbnail("middle_480", array("class"=>"bg_img")) : ""; ?>
                  <div class="obscure_gradient"></div>
                  <div class="float_img_frame">
                      <?php has_post_thumbnail() ? the_post_thumbnail('middle_480', array("class"=>"fg_img")) : ""; ?>
                      <a href="<?php the_permalink(); ?>" title="<?php echo esc_attr($post->post_title);?>"></a>
                  </div>
                </div>
                <div class="arch_caption inner_wrapper">
                  <time datetime="<?php echo get_the_date("j.F.Y", $post->ID); ?>"><?php echo get_the_date("j.F.Y", $post->ID); ?></time>
                  <h2 class="arch_heading">
                    <a href="<?php the_permalink(); ?>" title="<?php echo esc_attr($post->post_title); ?>">
                      <?php the_title(); ?>
                    </a>
                  </h2>
                  <div class="arch_excerpt">
                    <?php the_excerpt(); ?>
                  </div>
                </div>
              </article>
              <?php
            endwhile;
          endif;
        ?>
      </div>
      <?php custom_pagination($wp_query->max_num_pages, "2"); ?>
    </section>
  </section>
</main>
<?php get_footer(); ?>
