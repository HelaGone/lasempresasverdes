<?php
  global $_videos;
  if(array_key_exists("items", $_videos)):?>
    <ul id="playlist" class="play_list">
      <?php
        foreach($_videos->items as $key => $value):
          //debug($value);
          $snippet = $value->snippet;
          $thumbnails = $snippet->thumbnails;
          $vId = $snippet->resourceId->videoId; ?>
          <li class="list_item">
            <figure class="card_fig">
              <img
                src="<?php echo esc_url($thumbnails->default->url); ?>"
                alt="<?php echo esc_attr($snippet->description); ?>"
                width="150"
                height="150">
              <figcaption class="card_caption">
                <h3 class="card_heading">
                  <?php echo esc_html($snippet->title); ?>
                </h3>
                <time class="date_info" datetime="<?php echo esc_attr($snippet->publishedAt); ?>"><?php echo esc_html($snippet->publishedAt); ?></time>
              </figcaption>
            </figure>
          </li>
      <?php
        endforeach;?>
    </ul>
<?php
  endif; ?>
