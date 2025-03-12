<?php
function get_theme_image($image_name)
{
  $image_url = home_url() . '/wp-content/themes/marmota-theme/resources/images/' . $image_name;

  return $image_url;
}