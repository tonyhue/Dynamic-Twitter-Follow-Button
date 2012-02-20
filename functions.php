<?php

/* Source: http://thomasgriffinmedia.com/blog/2010/09/how-to-add-custom-user-contact-info-in-wordpress/
   Removes aim, yim, and jabber contact fields in user profile settings, and replaces it with Facebook, Twitter, and LinkedIn */

function extra_contact_info($contactmethods) {
    unset($contactmethods['aim']);
    unset($contactmethods['yim']);
    unset($contactmethods['jabber']);
    $contactmethods['facebook']   = 'Facebook';
    $contactmethods['twitter']    = 'Twitter';
    $contactmethods['linkedin']   = 'LinkedIn';
    $contactmethods['google']     = 'Google Plus';
    $contactmethods['tumblr']     = 'Tumblr';
 
    return $contactmethods;
}
add_filter('user_contactmethods', 'extra_contact_info');

?>