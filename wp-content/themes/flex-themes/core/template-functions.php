<?php
/**
 * Template Functions
 * 
 * @package flex-theme
 */

function flex_pagination($wp_query) {
    // global $wp_query;
    $big = 999999999;
    $pages = paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?page=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages,
        'prev_next' => false,
        'type' => 'array',
        'prev_next' => TRUE,
        'prev_text' => '&larr; Prev',
        'next_text' => 'Next &rarr;',
            ));
    if (is_array($pages)) {
        $current_page = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
        echo '<div id="wrap-pagination">';
        echo '<ul class="pagination">';
        foreach ($pages as $i => $page) {
            if ($current_page == 1 && $i == 0) {
                echo "<li class='active'>$page</li>";
            } else {
                if ($current_page != 1 && $current_page == $i) {
                    echo "<li class='active'>$page</li>";
                } else {
                    echo "<li>$page</li>";
                }
            }
        }
        echo '</ul>';
        echo '</div>';
    }
}

add_filter('use_block_editor_for_post', '__return_false', 10);
add_filter('get_the_archive_title_prefix','__return_false');

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title'    => 'Theme options',
        'menu_title'    => 'Theme options',
        'menu_slug'     => 'fx-theme-option',
        'capability'    => 'edit_posts'
        // 'redirect'       => false
    ));
}

// Custom search
function es_search_filter($query)
{

    if ($query->is_search && !is_admin()) {
        $query->set('post_type', ['post', 'services']);
    }

    return $query;
}
// add_filter('pre_get_posts', 'es_search_filter');

