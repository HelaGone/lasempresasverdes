<?php
  global $_videos;
  if(array_key_exists("items", (array)$_videos)):?>
    <ul id="playlist" class="play_list">
      <?php
        foreach($_videos->items as $key => $value):
          $snippet = $value->snippet;
          $date = date("j.M.Y", strtotime($snippet->publishedAt));
          $thumbnails = $snippet->thumbnails;
          $vId = $snippet->resourceId->videoId; ?>
          <li class="list_item">
            <figure class="card_fig">
              <figcaption class="card_caption" data-asset=" <?php echo esc_attr($vId); ?>">
                <h3 class="card_heading" data-asset="<?php echo esc_attr($vId); ?>">
                  <?php echo esc_html($snippet->title); ?>
                </h3>
                <time class="date_info" datetime="<?php echo esc_attr(date("c", strtotime($snippet->publishedAt))); ?>"><?php echo esc_html($date); ?></time>
              </figcaption>
            </figure>
          </li>
      <?php
        endforeach;?>
    </ul>
<?php
  endif; ?>
