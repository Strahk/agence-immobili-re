<?php
add_filter('next_posts_link_attributes', function (string $attrs): string {
    return $attrs . 'class="btn"';
});