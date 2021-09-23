<?php get_header(); $wp_query; global $_videos;
$_videos = json_decode(file_get_contents("/Users/dev/Sites/services/ReadPlaylistClass/videos.json"));
// $_videos = json_decode(file_get_contents("/home/everdes_admin/services/ReadPlaylistClass/videos.json")); // PROD
$banner_options = get_option('co_banner_option');
$banner_img_src = ($banner_options["co_banner_input_url"] != "") ? $banner_options["co_banner_input_url"] : null;
$banner_link = ($banner_options["co_banner_input_link"] != "") ? $banner_options["co_banner_input_link"] : null;
$banner_img_src_2 = ($banner_options["co_banner_input_url_2"] != "") ? $banner_options["co_banner_input_url_2"] : null;
$banner_link_2 = ($banner_options["co_banner_input_link_2"] != "") ? $banner_options["co_banner_input_link_2"] : null;
$live_url = ($banner_options["co_live_url"]) ? $banner_options["co_live_url"] : null;
$live_title = ($banner_options["co_live_title"]) ? $banner_options["co_live_title"] : null;
?>
<main id="lev-home" class="main_wrapper">
  <section class="full_section">
    <?php
      if($live_url):  ?>
        <section id="live">
          <iframe
            width="1280" height="720"
            class="ignoreList"
            src="<?php echo esc_url("https://www.youtube.com/embed/".$live_url); ?>"
            title="<?php echo esc_attr($live_title); ?>"
            frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
        </section>
    <?php
      endif; ?>
    <!-- Player -->
    <section id="player_cover" class="top-grid">
      <?php
        if(array_key_exists("items", (array)$_videos)):
          $first_vid = $_videos->items[0];
          $fv_snippet = $first_vid->snippet;
          $fv_ID = $fv_snippet->resourceId->videoId;
          $fv_asset = "https://www.youtube.com/embed/".$fv_ID; ?>
          <iframe id="youtube_video_player" width="1200" height="675"
            src="<?php echo esc_url($fv_asset); ?>"
            title="<?php echo esc_attr($fv_snippet->title); ?>" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
          <?php
          get_template_part('templates/section', 'playlist');
        endif; ?>
    </section>

    <?php
     if($banner_img_src != null&&$banner_link!=null):?>
        <section class="banner_inhouse">
          <div class="banner_frame">
            <a href="<?php echo esc_url($banner_link); ?>" title="Campaña interna" target="_blank" rel="noopener follow">
              <img src="<?php echo esc_url($banner_img_src); ?>" alt="Campaña interna" width="970" height="250">
            </a>
          </div>
        </section>
    <?php
      endif; ?>

    <section id="mixed_box">
      <section id="columns" class="simple-grid inner_wrapper">
        <h2 class="section_heading">Columnas</h2>
        <?php
          $args = array(
            "post_type"=>"post",
            "post_status"=>"publish",
            "posts_per_page"=>6,
            "orderby"=>"date",
            "order"=>"DESC",
            "category_name"=>"columnas"
          );
          $columnas = new WP_Query($args);
          if($columnas->have_posts()):
            while($columnas->have_posts()):
              $columnas->the_post();
              setup_postdata($post);
              $pID = $post->ID;
              $cat = get_the_category($pID); ?>
              <article class="col_fig">
                <section class="image_frame">
                  <?php has_post_thumbnail() ? the_post_thumbnail('middle_480') : ""; ?>
                </section>
                <section class="col_info">
                  <span class="col_category">
                    <a href="<?php echo get_category_link($cat[0]->term_id); ?>" title="<?php echo esc_attr($cat[0]->name); ?>">
                      <?php echo esc_html($cat[0]->name); ?>
                    </a>
                  </span>
                  <div class="col_caption">
                    <h3 class="col_heading">
                      <?php the_title(); ?>
                    </h3>
                    <time class="date_info" datetime="<?php echo get_the_date("c"); ?>"><?php echo get_the_date("j.M.Y ", $pID); ?></time>
                  </div>
                  <a href="<?php the_permalink(); ?>" title="<?php echo esc_attr($post->post_title); ?>"></a>
                </section>
              </article>
              <?php
            endwhile;
            wp_reset_postdata();
          endif; ?>
      </section> <!--End columns-->
      
      <?php
       if($banner_img_src_2 != null&&$banner_link_2!=null): ?>
          <section class="banner_inhouse">
            <div class="banner_frame">
              <a href="<?php echo esc_url($banner_link_2); ?>" title="Campaña interna" target="_blank" rel="noopener follow">
                <img src="<?php echo esc_url($banner_img_src_2); ?>" alt="Campaña interna" width="970" height="250">
              </a>
            </div>
          </section>
      <?php
        endif; ?>

      <section id="latest_posts" class="simple-grid inner_wrapper">
        <h2 class="section_heading">Lo más reciente</h2>
        <?php
        if(have_posts()):
          $i = 0;
          while (have_posts()):
            the_post();
            $pId = $post->ID;
            $cat = get_the_category($pId); ?>
            <article id="<?php echo esc_attr("art-".$pId); ?>" class="art_fig">
              <a href="<?php the_permalink(); ?>" title="<?php echo esc_attr($post->post_title); ?>">
                <?php
                  if(has_post_thumbnail()):
                    if($i==0):
                      the_post_thumbnail("featured_1024");
                    else:
                      the_post_thumbnail("featured_480");
                    endif;
                  endif; ?>
              </a>
              <section class="art_caption">
                <div class="art_info">
                  <time class="date_info" datetime="<?php echo get_the_date("c", $pId); ?>"><?php echo get_the_date("j.M.Y ", $pId); ?></time>
                  <span>
                    <a href="<?php echo get_term_link($cat[0], "category"); ?>">
                      <?php echo esc_html($cat[0]->name); ?>
                    </a>
                  </span>
                </div>
                <h3 class="art_heading"><?php the_title(); ?></h3>
              </section>
            </article>
            <?php
            $i++;
          endwhile;
        endif; ?>
      </section> <!-- End latest posts -->
    </section>

  </section>

  <section id="sponsors" class="full_section">
    <div class="sponsors_carousel">
      <img src="<?php echo THEMEPATH . "images/sponsors/logo-fif.jpg"?>" alt="FIF" width="120" height="68">
      <img src="<?php echo THEMEPATH . "images/sponsors/Logo-Henkel-PNG-1024x573.png"?>" alt="Henkel" width="120" height="68">
      <img src="<?php echo THEMEPATH . "images/sponsors/Logo-Tetra-Pak.png"?>" alt="Tetra-Pak" width="120" height="68">
      <img src="<?php echo THEMEPATH . "images/sponsors/natura-preferencial-1024x769.png"?>" alt="Natura" width="120" height="68">
      <img src="<?php echo THEMEPATH . "images/sponsors/pappel-scaled.jpeg"?>" alt="FIF" width="120" height="68">
      <img src="<?php echo THEMEPATH . "images/sponsors/Logo-City-Express.png"?>" alt="City Express" width="120" height="68">
      <img src="<?php echo THEMEPATH . "images/sponsors/dow.png"?>" alt="DOW" width="120" height="68">
      <img src="<?php echo THEMEPATH . "images/sponsors/mov_circl_sqre.png"?>" alt="Movimiento Circular" width="120" height="68">
    </div>
  </section>
</main>
<?php get_footer(); ?>
