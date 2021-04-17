<?php
  $banner_options = get_option('co_banner_option');
  $banner_img_src = ($banner_options["co_banner_side_img"] != "") ? $banner_options["co_banner_side_img"] : null;
  $banner_link = ($banner_options["co_banner_side_link"] != "") ? $banner_options["co_banner_side_link"] : null;
  $num_posts = ($banner_img_src!=null) ? 2 : 3;
  $query = array(
    "post_type"=>"post",
    "post_status"=>"publish",
    "posts_per_page"=>$num_posts,
    "orderby"=>"date",
    "order"=>"DESC",
    "post__not_in"=>$args["not__in"]
  );
  $related = new WP_Query($query);
  if($related->have_posts()): ?>
    <section id="sidebar" class="flex related_sidebar">
    <?php
      if($banner_img_src!=null): ?>
        <div class="banner_frame col_square_fig">
          <a href="<?php echo esc_url($banner_link); ?>" title="Campaña interna" target="_blank" rel="noopener follow">
            <img src="<?php echo esc_url($banner_img_src); ?>" alt="Campaña interna" width="300" height="250">
          </a>
        </div>
    <?php
      endif;
      while($related->have_posts()):
        $related->the_post();
        setup_postdata($post);
        $pID = $post->ID;
        $cat = get_the_category($pID); ?>
        <article class="col_square_fig">
          <section class="image_frame">
            <?php has_post_thumbnail() ? the_post_thumbnail('medium') : ""; ?>
          </section>
          <section class="col_square_info">
            <span class="col_square_category">
              <a href="<?php echo get_category_link($cat[0]->term_id); ?>" title="<?php echo esc_attr($cat[0]->name); ?>">
                <?php echo esc_html($cat[0]->name); ?>
              </a>
            </span>
            <div class="col_square_caption">
              <h3 class="col_square_heading">
                <?php the_title(); ?>
              </h3>
              <time class="date_info" datetime="<?php echo get_the_date("c"); ?>"><?php echo get_the_date("j.M.Y ", $pID); ?></time>
            </div>
            <a href="<?php the_permalink(); ?>" title="<?php echo esc_attr($post->post_title); ?>"></a>
          </section>
        </article>
        <?php
      endwhile; ?>
    </section>
<?php
  endif; ?>
