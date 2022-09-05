<?php

// WARNING!
// Do not modify this file directly.
// Please use the admin panel (http://localhost/admin) to change your personal configuration.
//
$mod_config = array();

// G E N E R A L
// possible language values: de, el, en, es, fr, pl, it
$mod_config['ui']['language'] = 'en';
$mod_config['adminpanel']['view'] = 'basic';
$mod_config['dev']['enabled'] = true;
$mod_config['dev']['demo_images'] = false;
$mod_config['dev']['advanced_log'] = false;
$mod_config['start_screen']['title'] = 'Photobooth';
$mod_config['start_screen']['title_visible'] = true;
$mod_config['start_screen']['subtitle'] = NULL;
$mod_config['start_screen']['subtitle_visible'] = true;
// possible thumb_size values: '360px', '540px', '900px', '1080px', '1260px'
$mod_config['picture']['thumb_size'] = '540px';
$mod_config['dev']['error_messages'] = true;
$mod_config['dev']['reload_on_error'] = true;
$mod_config['webserver']['ip'] = NULL;
$mod_config['webserver']['ssid'] = 'Photobooth';
$mod_config['download']['enabled'] = true;
$mod_config['download']['thumbs'] = false;
// control time in seconds until Photobooth reloads automatically
$mod_config['picture']['time_to_live'] = '90';
$mod_config['picture']['preview_before_processing'] = false;
$mod_config['picture']['retry_on_error'] = '0';
$mod_config['picture']['retry_timeout'] = '2';
$mod_config['delete']['no_request'] = false;
$mod_config['database']['enabled'] = true;
$mod_config['database']['file'] = 'db';


// F R O N T P A G E
$mod_config['ui']['show_fork'] = true;
$mod_config['ui']['skip_welcome'] = false;
$mod_config['event']['enabled'] = true;
$mod_config['event']['textLeft'] = 'We';
// possible event symbol values: 'fa-camera-retro', 'fa-birthday-cake', 'fa-gift', 'fa-tree', 'fa-snowflake-o', 'fa-heart-o',
//                               'fa-heart', 'fa-heartbeat', 'fa-apple', 'fa-anchor', 'fa-glass', 'fa-gears', 'fa-users'
$mod_config['event']['symbol'] = 'fa-heart-o';
$mod_config['event']['textRight'] = 'OpenSource';
$mod_config['button']['force_buzzer'] = false;


// P I C T U R E S
// control countdown timer in seconds
$mod_config['picture']['cntdwn_time'] = '5';
$mod_config['picture']['cntdwn_offset'] = '0';
$mod_config['picture']['no_cheese'] = false;
// control time for cheeeeese! in milliseconds
$mod_config['picture']['cheese_time'] = '1000';
// possible flip values: 'off', 'horizontal', 'vertical', 'both'
$mod_config['picture']['flip'] = 'off';
$mod_config['picture']['rotation'] = '0';
$mod_config['picture']['polaroid_effect'] = false;
$mod_config['picture']['polaroid_rotation'] = '0';
$mod_config['filters']['enabled'] = true;
$mod_config['filters']['defaults'] = 'plain';
$mod_config['filters']['disabled'] = array();
$mod_config['picture']['take_frame'] = false;
$mod_config['picture']['frame'] = 'resources/img/frames/frame.png';
// specify key id (e.g. 13 is the enter key) to use that key to take a picture (picture key)
// use for example https://keycode.info to get the key code
$mod_config['picture']['key'] = null;
// possible naming values: 'dateformatted', 'random'
$mod_config['picture']['naming'] = 'dateformatted';
// permissions example values: '0644' (rw-r--r--), '0666' (rw-rw-rw-), '0600' (rw-------)
$mod_config['picture']['permissions'] = '0644';
$mod_config['picture']['keep_original'] = true;
$mod_config['picture']['preserve_exif_data'] = false;
$mod_config['picture']['allow_delete'] = true;
$mod_config['textonpicture']['enabled'] = false;
$mod_config['textonpicture']['line1'] = 'line 1';
$mod_config['textonpicture']['line2'] = 'line 2';
$mod_config['textonpicture']['line3'] = 'line 3';
$mod_config['textonpicture']['locationx'] = '80';
$mod_config['textonpicture']['locationy'] = '80';
$mod_config['textonpicture']['rotation'] = '0';
$mod_config['textonpicture']['font'] = 'resources/fonts/GreatVibes-Regular.ttf';
$mod_config['textonpicture']['font_color'] = '#ffffff';
$mod_config['textonpicture']['font_size'] = '80';
$mod_config['textonpicture']['linespace'] = '90';


// C O L L A G E
$mod_config['collage']['enabled'] = true;
$mod_config['collage']['only'] = false;
// control countdown timer between collage pictures in seconds
$mod_config['collage']['cntdwn_time'] = '3';
$mod_config['collage']['continuous'] = true;
$mod_config['collage']['continuous_time'] = '5';
// possible layout values: '2x2', '2x2-2', '2x4', '2x4-2', '1+3', '1+3-2', '3+1', '1+2'
$mod_config['collage']['layout'] = '2x2-2';
$mod_config['collage']['dashedline_color'] = '#000000';
$mod_config['collage']['keep_single_images'] = false;
// specify key id (e.g. 13 is the enter key) to use that key to take a collage (collage key)
// use for example https://keycode.info to get the key code
$mod_config['collage']['key'] = null;
$mod_config['collage']['background_color'] = '#ffffff';
// possible take_frame values: 'off', 'always', 'once'
$mod_config['collage']['take_frame'] = 'off';
$mod_config['collage']['frame'] = 'resources/img/frames/frame.png';
$mod_config['textoncollage']['enabled'] = true;
$mod_config['textoncollage']['line1'] = 'Photobooth';
$mod_config['textoncollage']['line2'] = '   we love';
$mod_config['textoncollage']['line3'] = 'OpenSource';
$mod_config['textoncollage']['locationx'] = '1470';
$mod_config['textoncollage']['locationy'] = '250';
$mod_config['textoncollage']['rotation'] = '0';
$mod_config['textoncollage']['font'] = 'resources/fonts/GreatVibes-Regular.ttf';
$mod_config['textoncollage']['font_color'] = '#000000';
$mod_config['textoncollage']['font_size'] = '50';
$mod_config['textoncollage']['linespace'] = '90';
// DO NOT CHANGE limit here
$mod_config['collage']['limit'] = NULL;


// G A L L E R Y
$mod_config['gallery']['enabled'] = true;
$mod_config['gallery']['newest_first'] = true;
$mod_config['gallery']['use_slideshow'] = true;
$mod_config['gallery']['pictureTime'] = '3000';
$mod_config['pswp']['animateTransitions'] = false;
$mod_config['pswp']['fullscreenEl'] = false;
$mod_config['pswp']['counterEl'] = true;
$mod_config['pswp']['history'] = true;
// show_date only works if picture naming  = 'dateformatted'
$mod_config['gallery']['show_date'] = true;
$mod_config['gallery']['date_format'] = 'd.m.Y - G:i';
$mod_config['gallery']['db_check_enabled'] = true;
$mod_config['gallery']['db_check_time'] = '10';
$mod_config['gallery']['allow_delete'] = true;
$mod_config['gallery']['scrollbar'] = false;
$mod_config['gallery']['bottom_bar'] = true;
$mod_config['pswp']['clickToCloseNonZoomable'] = false;
$mod_config['pswp']['closeOnScroll'] = false;
$mod_config['pswp']['closeOnOutsideClick'] = false;
$mod_config['pswp']['preventSwiping'] = false;
$mod_config['pswp']['pinchToClose'] = true;
$mod_config['pswp']['closeOnVerticalDrag'] = true;
$mod_config['pswp']['tapToToggleControls'] = true;
$mod_config['pswp']['zoomEl'] = false;
$mod_config['pswp']['loop'] = true;
$mod_config['pswp']['bgOpacity'] = 1;


// P R E V I E W
// Please read https://github.com/andi34/photobooth/wiki/FAQ#how-to-use-a-live-stream-as-background-at-countdown
// possible preview_mode values: none, device_cam, url, gphoto
$mod_config['preview']['mode'] = 'none';
$mod_config['preview']['gphoto_bsm'] = true;
$mod_config['preview']['camTakesPic'] = false;
$mod_config['preview']['flipHorizontal'] = true;
// possible rotation values: '0deg', '90deg', -90deg', '180deg', '45deg', '-45deg'
$mod_config['preview']['rotation'] = '0deg';
$mod_config['preview']['url'] = null;
$mod_config['preview']['videoWidth'] = '1280';
$mod_config['preview']['videoHeight'] = '720';
// possible camera_mode values: "user", "environment"
$mod_config['preview']['camera_mode'] = 'user';
$mod_config['preview']['asBackground'] = false;


// K E Y I N G
$mod_config['keying']['enabled'] = false;
// possible size values: '1000px', '1500px', '2000px', '2500px'
$mod_config['keying']['size'] = '1500px';
$mod_config['live_keying']['enabled'] = false;
// possible variant values: 'marvinj', 'seriouslyjs'
$mod_config['keying']['variant'] = 'seriouslyjs';
$mod_config['keying']['seriouslyjs_color'] = '#62af74';
$mod_config['keying']['background_path'] = 'resources/img/background';
$mod_config['live_keying']['show_all'] = false;


// P R I N T
$mod_config['button']['show_cups'] = false;
$mod_config['print']['from_result'] = false;
$mod_config['print']['from_gallery'] = false;
$mod_config['print']['from_chromakeying'] = false;
$mod_config['print']['auto'] = false;
$mod_config['print']['auto_delay'] = '1000';
$mod_config['print']['time'] = '5000';
$mod_config['print']['key'] = null;
$mod_config['print']['qrcode'] = false;
$mod_config['print']['print_frame'] = false;
$mod_config['print']['frame'] = 'resources/img/frames/frame.png';
$mod_config['print']['crop'] = false;
$mod_config['print']['crop_width'] = '1000';
$mod_config['print']['crop_height'] = '500';
$mod_config['textonprint']['enabled'] = false;
$mod_config['textonprint']['line1'] = 'line 1';
$mod_config['textonprint']['line2'] = 'line 2';
$mod_config['textonprint']['line3'] = 'line 3';
$mod_config['textonprint']['locationx'] = '2250';
$mod_config['textonprint']['locationy'] = '1050';
$mod_config['textonprint']['rotation'] = '40';
$mod_config['textonprint']['font'] = 'resources/fonts/GreatVibes-Regular.ttf';
$mod_config['textonprint']['font_color'] = '#ffffff';
$mod_config['textonprint']['font_size'] = '100';
$mod_config['textonprint']['linespace'] = '100';


// Q R  -  C O D E
$mod_config['qr']['enabled'] = true;
$mod_config['qr']['url'] = NULL;
$mod_config['qr']['append_filename'] = true;
$mod_config['qr']['custom_text'] = false;
$mod_config['qr']['text'] = NULL;


// E -  M A I L
// Please read https://github.com/andi34/photobooth/wiki/FAQ#ive-trouble-setting-up-e-mail-config-how-do-i-solve-my-problem
//
// If send_all_later is enabled, a checkbox to save the current mail address for later in {mail_file}.txt is visible
$mod_config['mail']['enabled'] = false;
$mod_config['mail']['send_all_later'] = false;
$mod_config['mail']['subject'] = null; 	// if empty, default translation is used
$mod_config['mail']['text'] = null;		// if empty, default translation is used
$mod_config['mail']['alt_text'] = null;		// if empty, default translation is used
$mod_config['mail']['is_html'] = false;
$mod_config['mail']['host'] = 'smtp.example.com';
$mod_config['mail']['username'] = 'photobooth@example.com';
$mod_config['mail']['password'] = 'yourpassword';
$mod_config['mail']['fromAddress'] = 'photobooth@example.com';
$mod_config['mail']['fromName'] = 'Photobooth';
$mod_config['mail']['file'] = 'mail-adresses';
$mod_config['mail']['secure'] = 'tls';
$mod_config['mail']['port'] = '587';


// S T A N D A L O N E   S L I D E S H O W
$mod_config['slideshow']['refreshTime'] = '60';
$mod_config['slideshow']['pictureTime'] = '3000';
$mod_config['slideshow']['randomPicture'] = true;
$mod_config['slideshow']['use_thumbs'] = false;


// R E M O T E   B U Z Z E R
$mod_config['remotebuzzer']['usebuttons'] = false;
$mod_config['remotebuzzer']['userotary'] = false;
$mod_config['remotebuzzer']['enable_standalonegallery'] = false;
$mod_config['remotebuzzer']['usegpio'] = true;
$mod_config['remotebuzzer']['usehid'] = false;
$mod_config['remotebuzzer']['usesoftbtn'] = false;
$mod_config['remotebuzzer']['rotaryclkgpio'] = 27;
$mod_config['remotebuzzer']['rotarydtgpio'] = 17;
$mod_config['remotebuzzer']['rotarybtngpio'] = 22;
$mod_config['remotebuzzer']['picturebutton'] = true;
// collagetime controls the time to distinguish picture from collage in seconds
$mod_config['remotebuzzer']['collagetime'] = '2';
$mod_config['remotebuzzer']['picturegpio'] = 21;
$mod_config['remotebuzzer']['collagebutton'] = false;
$mod_config['remotebuzzer']['collagegpio'] = 20;
$mod_config['remotebuzzer']['printbutton'] = false;
$mod_config['remotebuzzer']['printgpio'] = 26;
$mod_config['remotebuzzer']['shutdownbutton'] = false;
$mod_config['remotebuzzer']['shutdowngpio'] = 16;
$mod_config['remotebuzzer']['shutdownholdtime'] = '5';
$mod_config['remotebuzzer']['port'] = 14711;
$mod_config['remotebuzzer']['debounce'] = 30;


// S Y N C  T O  U S B  S T I C K
$mod_config['synctodrive']['enabled'] = false;
$mod_config['synctodrive']['target'] = 'photobooth'; //Default target for the sync script
$mod_config['synctodrive']['interval'] = 300;


// G E T  R E Q U E S T
$mod_config['get_request']['countdown'] = false;
$mod_config['get_request']['processed'] = false;
$mod_config['get_request']['server'] = NULL;
$mod_config['get_request']['picture'] = 'CNTDWNPHOTO';
$mod_config['get_request']['collage'] = 'CNTDWNCOLLAGE';


// A U T H E N T I C A T I O N
$mod_config['login']['enabled'] = false;
$mod_config['login']['username'] = 'Photo';
$mod_config['login']['password'] = NULL;
$mod_config['protect']['admin'] = true;
$mod_config['protect']['localhost_admin'] = true;
$mod_config['protect']['update'] = true;
$mod_config['protect']['localhost_update'] = true;
$mod_config['protect']['index'] = false;
$mod_config['protect']['localhost_index'] = false;
$mod_config['protect']['index_redirect'] = 'login';
$mod_config['protect']['manual'] = false;
$mod_config['protect']['localhost_manual'] = false;


// U S E R   I N T E R F A C E
// possible style values: "classic", "modern", "custom"
$mod_config['ui']['style'] = 'modern';
$mod_config['button']['show_fs'] = false;
$mod_config['button']['homescreen'] = true;
$mod_config['ui']['result_buttons'] = true;
$mod_config['ui']['font_size'] = '16px';
$mod_config['colors']['countdown'] = '#ffffff';
$mod_config['colors']['background_countdown'] = '#214852';
$mod_config['colors']['cheese'] = '#ffffff';
$mod_config['background']['defaults'] = null;
$mod_config['background']['admin'] = null;
$mod_config['background']['chroma'] = null;
$mod_config['ui']['decore_lines'] = true;
$mod_config['ui']['rounded_corners'] = false;
$mod_config['colors']['primary'] = '#0a6071';
$mod_config['colors']['secondary'] = '#214852';
$mod_config['colors']['font'] = '#79bad9';
$mod_config['colors']['button_font'] = '#ffffff';
$mod_config['colors']['start_font'] = '#ffffff';
$mod_config['colors']['panel'] = '#2d4157';
$mod_config['colors']['hover_panel'] = '#446781';
$mod_config['colors']['border'] = '#eeeeee';
$mod_config['colors']['box'] = '#f8f9fc';
$mod_config['colors']['gallery_button'] = '#ffffff';


// J P E G   Q U A L I T Y
$mod_config['jpeg_quality']['image'] = 100;
$mod_config['jpeg_quality']['chroma'] = 100;
$mod_config['jpeg_quality']['thumb'] = 60;


// C O M M A N D S
$mod_config['take_picture']['cmd'] = null;
$mod_config['take_picture']['msg'] = null;
$mod_config['print']['cmd'] = null;
$mod_config['print']['msg'] = null;
$mod_config['exiftool']['cmd'] = null;
$mod_config['exiftool']['msg'] = null;
$mod_config['preview']['cmd'] = null;
$mod_config['preview']['killcmd'] = null;
$mod_config['nodebin']['cmd'] = null;
$mod_config['pre_photo']['cmd'] = null;
$mod_config['post_photo']['cmd'] = null;
$mod_config['reboot']['cmd'] = null;
$mod_config['shutdown']['cmd'] = null;

// F O L D E R S
$mod_config['folders']['config'] = 'config';
$mod_config['folders']['data'] = 'data';
$mod_config['folders']['images'] = 'images';
$mod_config['folders']['keying'] = 'keying';
$mod_config['folders']['print'] = 'print';
$mod_config['folders']['qrcodes'] = 'qrcodes';
$mod_config['folders']['thumbs'] = 'thumbs';
$mod_config['folders']['tmp'] = 'tmp';
$mod_config['folders']['archives'] = 'archives';


// R E S E T
$mod_config['reset']['remove_images'] = true;
$mod_config['reset']['remove_mailtxt'] = false;
$mod_config['reset']['remove_config'] = false;
