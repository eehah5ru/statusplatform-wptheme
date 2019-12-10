<?php

//
// allow additional mime types to upload
//
function srp_custom_upload_mimes ( $existing_mimes = array() ) {
  $existing_mimes['psd'] = 'image/vnd.adobe.photoshop';
  $existing_mimes['mp4'] = 'video/mp4';  
  return $existing_mimes;
}

add_filter('upload_mimes', 'srp_custom_upload_mimes');
?>
