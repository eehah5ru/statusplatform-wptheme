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

//
//
// END: WP GALLERY
//
//

//
//
// SEARCH
//
//

$("form#searchform input").before('<span class="search-dash">|</span>');


// $("a.footnote-back").html("<img src='/wp-content/themes/statusproject/dist/assets/images/return-back.svg'/>");

//
//
// FOOTNOTE LINKS
//
//
$("a.footnote-back").html('<svg width="32px" height="32px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> \
    <title>return-back</title> \
    <desc>Created with Sketch.</desc> \
    <g id="return-back" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> \
        <path d="M5.19628906,16.6054688 L11.1503906,10.6513672 L11.1503906,15.5009766 L20.7734375,15.5009766 C21.8398491,15.5009766 22.7475548,15.1264686 23.496582,14.3774414 C24.2456092,13.6284142 24.6201172,12.7249402 24.6201172,11.6669922 C24.6201172,10.6005806 24.2477251,9.6949907 23.5029297,8.95019531 C22.7581343,8.20539992 21.8525444,7.83300781 20.7861328,7.83300781 L18.6660156,7.83300781 L18.6660156,5.63671875 L20.7861328,5.63671875 C22.4534589,5.63671875 23.8753196,6.22492901 25.0517578,7.40136719 C26.228196,8.57780536 26.8164062,9.99966614 26.8164062,11.6669922 C26.8164062,13.3343182 26.2260801,14.756179 25.0454102,15.9326172 C23.8647402,17.1090554 22.4407635,17.6972656 20.7734375,17.6972656 L11.1503906,17.6972656 L11.1503906,22.5595703 L5.19628906,16.6054688 Z" id="↩" fill="#000000" fill-rule="nonzero"></path> \
    </g> \
</svg>');


//
//
// LINKS OUTSIDE OF WEBSITE -> NEW TAB
//
//

$(".entry-content a").filter(function() {
  if (!this.href) {
    return false;
  }

  if (this.href.match(/^http:\/\/statusproject.net/)) {
    return false;
  }

  if (this.href.match(/^https:\/\/statusproject.net/)) {
    return false;
  }

  if (this.href.match(/^http/)) {
    return true;
  }

  return false;
}).attr("target", "_blank");

$(document).foundation();
