import $ from 'jquery';
import whatInput from 'what-input';

window.$ = $;

import Foundation from 'foundation-sites';
// If you want to pick and choose which modules to include, comment out the above and uncomment
// the line below
//import './lib/foundation-explicit-pieces';


//
// adapt WP block gallery to match Foundation Orbit protocol
//

  // create orbit wrapper before wp gallery
$(".wp-block-gallery").each(function() {
  $(this).prev().after('<div class="srp-gallery orbit" role="region" data-orbit=""><div class="orbit-wrapper"><div class="orbit-controls"><button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button> <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button></div></div></div>');
});

// put wp gallery inside of the orbit wrapper
$(".srp-gallery").each(function () {
  var wpGallery = $(this).next();

  $(this).find(".orbit-wrapper").append(wpGallery);
});

// readjust classes
$(".srp-gallery ul").removeClass("wp-block-gallery").addClass("orbit-container");

$(".srp-gallery li").removeClass("blocks-gallery-item").addClass("orbit-slide");
$(".srp-gallery figure").addClass("orbit-figure");
$(".srp-gallery img").addClass("orbit-image");
$(".srp-gallery figcaption").addClass("orbit-caption");

$(document).foundation();
