<?php 
/* reformatting size thumbnails news page */ 

add_action('after_setup_theme', function () {
    set_post_thumbnail_size(250, 250, true);
});