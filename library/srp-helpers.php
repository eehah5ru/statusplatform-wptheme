<?php

function srp_is_active ($post) {
    return get_the_ID() == $post->ID;
}

function srp_active_class ($post) {
    return srp_is_active($post) ? 'active' : '';
}

function srp_aside_tpl () {
    switch (srp_get_post_format()) {
    case "person":
        return "community-member";
    case "group":
        return "community-member";
    default:
        return srp_get_post_format();
    }
}

function srp_the_permalink_by_path ($path) {
    return the_permalink(pll_get_post(get_page_by_path($path)->ID));
}
