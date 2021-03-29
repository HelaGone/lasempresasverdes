<?php get_header(); $wp_query;

  // TODO: Obtener Playlist de Youtube con la clase ReadPlaylistClass
  $videos = file_get_contents("/Users/dev/Sites/services/ReadPlaylistClass/videos.json");
  debug($videos);

  if(have_posts()): ?>
    <main id="lev-home" class="main_wrapper">
      <section class="inner_wrapper">
        <?php
          while (have_posts()):
            the_post();
            the_title();
          endwhile; ?>
      </section>
    </main>
<?php
  endif; ?>
<?php get_footer(); ?>
