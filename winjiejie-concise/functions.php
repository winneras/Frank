<?php

require_once('admin/winjiejie-theme-options.php');

/*
 * add images for posts do not have thumbnail
 * only use in loop
 */

function frank_the_post_thumbnail() {
    if (has_post_thumbnail()) {
        the_post_thumbnail('thumbnail');
    } else {
        if (!is_archive()) {
            foreach ((get_the_category()) as $category) {
                $img_path = STYLESHEETPATH . '/images/cat/' . $category->slug . '.png';
                if (file_exists($img_path)) {
                    break;
                }
            }

            $img_url = get_stylesheet_directory_uri() . '/images/cat/' . $category->slug . '.png';
            echo '<img class="category-thumbnail" src="' . $img_url . '">';
        }
    }
}

?>