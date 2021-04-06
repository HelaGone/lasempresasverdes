<?php get_header(); $wp_query;

$videos = json_decode(file_get_contents("/Users/dev/Sites/services/ReadPlaylistClass/videos.json"));
?>
<main id="lev-home" class="main_wrapper">
  <section class="inner_wrapper">
    <!-- Player -->
    <section id="player_cover">
      <?php
        if(array_key_exists("items", $videos)):
          $first_vid = $videos->items[0];
          $fv_snippet = $first_vid->snippet;
          $fv_thumbnails = $fv_snippet->thumbnails; ?>
          <figure class="pyr_fig">
            <img
              src="<?php echo esc_attr($fv_thumbnails->maxres->url); ?>"
              alt="<?php echo esc_attr($fv_snippet->description); ?>"
              width="<?php echo esc_attr($fv_thumbnails->maxres->width); ?>"
              height="<?php echo esc_attr($fv_thumbnails->maxres->height); ?>">
            <figcaption class="pyr_caption inner_wrapper">
              <h2 class="pyr_heading"><?php echo esc_html($fv_snippet->title); ?></h2>
              <p><?php echo esc_html($fv_snippet->description); ?></p>
              <div class="btn_frame">
                <img src="<?php echo THEMEPATH . "images/assets/svg/play_arrow.svg" ?>" alt="Play arrow" width="48" height="48">
                <button id="btn_load_pyr" class="lev_button" type="button" name="button">Mira el video</button>
              </div>
            </figcaption>
          </figure>
          <?php
        endif; ?>
    </section>

    <section id="mixed_box">
      <?php
        if(array_key_exists("items", $videos)):?>
          <ul id="playlist" class="play_list">
            <?php
              foreach($videos->items as $key => $value):
                //debug($value);
                $snippet = $value->snippet;
                $thumbnails = $snippet->thumbnails;
                $vId = $snippet->resourceId->videoId; ?>
                <li class="list_item">
                  <figure class="card_fig">
                    <img
                      src="<?php echo esc_url($thumbnails->default->url); ?>"
                      alt="<?php echo esc_attr($snippet->description); ?>"
                      width="120"
                      height="120">
                    <figcaption class="card_caption">
                      <h3 class="card_heading">
                        <?php echo esc_html($snippet->title); ?>
                      </h3>
                      <time datetime="<?php echo esc_attr($snippet->publishedAt); ?>"><?php echo esc_html($snippet->publishedAt); ?></time>
                    </figcaption>
                  </figure>
                </li>
            <?php
              endforeach;?>
          </ul>
      <?php
        endif; ?>
      <!-- <div id="columns" class="">
        <?php
          $args = array(
            "post_type"=>"post",
            "post_status"=>"publish",
            "posts_per_page"=>2,
            "orderby"=>"date",
            "order"=>"DESC",
            "category_name"=>"columnas"
          );
          $columnas = new WP_Query($args);
          if($columnas->have_posts()):
            while($columnas->have_posts()):
              $columnas->the_post();
              setup_postdata($post); ?>
              <figure class="column_fig">
                <?php has_post_thumbnail() ? the_post_thumbnail('thumbnail') : ""; ?>
                <figcaption class="column_caption">
                  <h3 class="column_heading"><?php the_title(); ?></h3>
                </figcaption>
              </figure>
              <?php
            endwhile;
            wp_reset_postdata();
          endif; ?>
      </div> -->
    </section>

    <?php
      // if(have_posts()):
      //   while (have_posts()):
      //     the_post();
      //     the_title();
      //   endwhile;
      // endif; ?>
  </section>
</main>
<?php get_footer(); ?>
