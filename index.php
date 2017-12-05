<?php
/*
Plugin Name: Noscript alert
Description: WordPress admin interface doesn't really work without JavaScript, but it doesn't tell you to enable it.
Author: Christian Nikkanen
Author URI: http://kisu.li
Licence: MIT
*/

add_action("admin_notices", function() { ?>
  <noscript>
    <div class="notice notice-error">
      <h2><?=apply_filters("k1sul1-noscript-alert-title", "JavaScript is disabled")?></h2>
      <p>
        <?=apply_filters(
          "k1sul1-noscript-alert-text",
          "JavaScript is required, as the admin interface doesn't quite work without it.<br>
          <a href='https://www.enable-javascript.com/' target='_blank' rel='noopener noreferrer'>Enable it</a>"
        )?>
      </p>
    </div>
  </noscript><?php
});
