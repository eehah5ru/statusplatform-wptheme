<?php

if (! function_exists('srp_get_post_format')) :
    function srp_get_post_format() {
        $format = get_post_format() ? : 'standard';
        switch($format) {
        case "aside":
            return "person";
            break;
        case "gallery":
            return "group";
            break;
        default:
            return $format;
        }
    }
endif;
