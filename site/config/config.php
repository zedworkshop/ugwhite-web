<?php

/*

---------------------------------------
License Setup
---------------------------------------

Please add your license key, which you've received
via email after purchasing Kirby on http://getkirby.com/buy

It is not permitted to run a public website without a
valid license key. Please read the End User License Agreement
for more information: http://getkirby.com/license

*/

c::set('license', 'K2-PRO-7c64198dc1905b0d94842b8a2565b813');

/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

*/

// Language
c::set('panel.language', 'en');

// ImageMagick
c::set('thumbs.driver', 'im');

c::set('languages', array(
    array(
        'code'    => 'en',
        'name'    => 'English',
        'locale'  => 'en_US',
        'default' => true,
        'url'     => '/'
    )
));

c::set('debug', true);