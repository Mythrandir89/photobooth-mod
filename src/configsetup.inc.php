<?php
require_once  '../lib/filter.php';
/*
 ** This file defines the admin panel of photobooth. The admin panel definition is done in a JSON variable and structured as follows
 **
 ** Admin panel
 **     |- Section 1
 **     |  |- Parameter 1
 **     |  |- Parameter 2
 **     |  |- Setting A
 **     |  |- Setting B
 **     |
 **     |- Section 2
 **     |  |- Setting C
 **     |  |- Setting D
 **     |  |- Setting E
 **     |
 **     |- Section 3
 **     |  |- Parameter 1
 **     |  |- ...
 **     |
 **     |...
 **
 ** * Section descriptor
 **   - Always key / array pair
 **      * 'key': always starts with a character, consists of characters, numbers and underscore only
 **   - Admin panel sort order is defined by the order in this config file
 **   - The i18n tag for translation is identified by the actual section key
 **   - Parameter: Key / Value pairs are parameters which apply to how the section is displayed in the admin panel
 **             * 'view' (optional): Accepted values are 'basic', 'advanced' or 'expert'. Defines in which admin panel view mode
 **                          the section is shown or not. Missing parameter defaults to 'expert'.
 **     * 'platform' (optional): Accepted values are 'all', 'linux', 'windows'. Defines whether the section is visible
 **                              by platform. Missing parameter defaults to 'all'
 **   - Settings: Key / Array pairs define a setting (see next)
 **
 ** * Settings descriptor
 **   - Is a key / array pair where the key string is distinct across the entire admin panel. Even with different sections, no
 **     duplicate setting keys are allowed across the file.
 **      * 'key': always starts with a character, consists of characters, numbers and underscore only
 **   - Admin panel sort order is defined by the order in this config file
 **   - The i18n tag for translation is identified by concatenation of  section key, ':', setting key. Tags for manual entries
 **     start with "manual:"
 **     Examples:
 **             "general:ui_language"
 **             "user_interface:button_show_fs"
 **             "manual:print:print_from_result"
 **
 **   - Parameter: Can be key/value or key/array pairs. Sort order does not matter.
 **     * 'view' (optional): Accepted values are 'basic', 'advanced' or 'expert'. Defines in which admin panel view mode
 **                          the section is shown or not. Missing parameter defaults to 'expert'.
 **     * 'name': Matches the name of the config variable or array. For type 'button' this has no effect.
 **     * 'type': Values are 'input', 'range', 'color', 'hidden', 'checkbox', 'multi-select', 'select', 'button'. Defines the actual
 **               input type in the admin panel for this setting.
 **     * 'value': Value is a reference to the actual PB config (i.e. 'value' => $mod_config['dev']['reload_on_error']) and pre-
 **                populates the current config value into the admin panel
 **                Exceptionally, for type 'button' this is the HTML element ID applied to the actual button itself.
 **     * 'placeholder': For types 'input', 'range', 'color' to prepopulate / preset the admin panel setting entry
 **                      field / range selector. Often references the default config for this setting
 **                      (i.e 'placeholder' => $defaultConfig['picture']['time_to_live'])
 **                      For type 'button' this is the i18ntag string for the actual button text.
 **     * 'option': Only for types 'select','multi-select'. Lists the options available in this setting (i.e.
 **                     'options' => [
 **                               '360px' => 'XS',
 **                               '540px' => 'S',
 **                               ]
 **     * 'range_min', 'range_max', 'range_step': Only for type 'range'. Define the slider range and step when moved
 **     * 'unit': Only for type 'range'. Defines the unit of the slider and is used to identify the i18n tag for translation of the unit
 */

$mod_configsetup = [
    'Main' => [
        'view' => 'basic',
        'platform' => 'all',
        'ui_language' => [
            'view' => 'basic',
            'type' => 'select',
            'name' => 'ui[language]',
            'placeholder' => $defaultConfig['ui']['language'],
            'options' => [
                'de' => 'DE',
                'el' => 'EL',
                'en' => 'EN',
                'es' => 'ES',
                'fr' => 'FR',
                'pl' => 'PL',
                'it' => 'IT',
            ],
            'value' => $mod_config['ui']['language'],
        ],
        'adminpanel_view' => [
            'view' => 'basic',
            'type' => 'select',
            'name' => 'adminpanel[view]',
            'placeholder' => $defaultConfig['adminpanel']['view'],
            'options' => [
                'basic' => 'Basic View',
                'advanced' => 'Advanced View',
                'expert' => 'Expert View',
            ],
            'value' => $mod_config['adminpanel']['view'],
        ],
        'adminpanel_view_default' => [
            'view' => 'expert',
            'type' => 'hidden',
            'name' => 'adminpanel[view_default]',
            'value' => $mod_config['adminpanel']['view_default'],
        ],
        'dev_enabled' => [
            'view' => 'expert',
            'type' => 'checkbox',
            'name' => 'dev[enabled]',
            'value' => $mod_config['dev']['enabled'],
        ],
        'dev_demo_images' => [
            'view' => 'expert',
            'type' => 'checkbox',
            'name' => 'dev[demo_images]',
            'value' => $mod_config['dev']['demo_images'],
        ],
        'dev_advanced_log' => [
            'view' => 'expert',
            'type' => 'checkbox',
            'name' => 'dev[advanced_log]',
            'value' => $mod_config['dev']['advanced_log'],
        ],
        'dev_logfile' => [
            'view' => 'expert',
            'type' => 'hidden',
            'name' => 'dev[logfile]',
            'value' => $mod_config['dev']['logfile'],
        ],
        'dev_debugpanel' => [
            'view' => 'expert',
            'type' => 'button',
            'placeholder' => 'dev_debugpanel',
            'name' => 'DEBUGPANEL',
            'value' => 'debugpanel-btn',
        ],
        'start_screen_title' => [
            'type' => 'input',
            'placeholder' => $defaultConfig['start_screen']['title'],
            'name' => 'start_screen[title]',
            'value' => htmlentities($mod_config['start_screen']['title']),
        ],
        'start_screen_title_visible' => [
            'type' => 'checkbox',
            'name' => 'start_screen[title_visible]',
            'value' => $mod_config['start_screen']['title_visible'],
        ],
        'start_screen_subtitle' => [
            'type' => 'input',
            'placeholder' => $defaultConfig['start_screen']['subtitle'],
            'name' => 'start_screen[subtitle]',
            'value' => htmlentities($mod_config['start_screen']['subtitle']),
        ],
        'start_screen_subtitle_visible' => [
            'type' => 'checkbox',
            'name' => 'start_screen[subtitle_visible]',
            'value' => $mod_config['start_screen']['subtitle_visible'],
        ],
        'picture_thumb_size' => [
            'view' => 'advanced',
            'type' => 'select',
            'name' => 'picture[thumb_size]',
            'placeholder' => $defaultConfig['picture']['thumb_size'],
            'options' => [
                '360px' => 'XS',
                '540px' => 'S',
                '900px' => 'M',
                '1080px' => 'L',
                '1260px' => 'XL',
            ],
            'value' => $mod_config['picture']['thumb_size'],
        ],
        'dev_error_messages' => [
            'view' => 'expert',
            'type' => 'checkbox',
            'name' => 'dev[error_messages]',
            'value' => $mod_config['dev']['error_messages'],
        ],
        'dev_reload_on_error' => [
            'view' => 'expert',
            'type' => 'checkbox',
            'name' => 'dev[reload_on_error]',
            'value' => $mod_config['dev']['reload_on_error'],
        ],
        'webserver_ip' => [
            'view' => 'advanced',
            'type' => 'input',
            'name' => 'webserver[ip]',
            'placeholder' => $defaultConfig['webserver']['ip'],
            'value' => $mod_config['webserver']['ip'],
        ],
        'webserver_ssid' => [
            'view' => 'expert',
            'type' => 'input',
            'name' => 'webserver[ssid]',
            'placeholder' => 'Photobooth',
            'value' => htmlentities($mod_config['webserver']['ssid']),
        ],
        'download_enabled' => [
            'view' => 'advanced',
            'type' => 'checkbox',
            'name' => 'download[enabled]',
            'value' => $mod_config['download']['enabled'],
        ],
        'download_thumbs' => [
            'view' => 'expert',
            'type' => 'checkbox',
            'name' => 'download[thumbs]',
            'value' => $mod_config['download']['thumbs'],
        ],
        'picture_time_to_live' => [
            'view' => 'expert',
            'type' => 'range',
            'placeholder' => $defaultConfig['picture']['time_to_live'],
            'name' => 'picture[time_to_live]',
            'value' => $mod_config['picture']['time_to_live'],
            'range_min' => 1,
            'range_max' => 90,
            'range_step' => 1,
            'unit' => 'seconds',
        ],
        'picture_preview_before_processing' => [
            'view' => 'expert',
            'type' => 'checkbox',
            'name' => 'picture[preview_before_processing]',
            'value' => $mod_config['picture']['preview_before_processing'],
        ],
        'picture_retry_on_error' => [
            'view' => 'expert',
            'type' => 'range',
            'placeholder' => $defaultConfig['picture']['retry_on_error'],
            'name' => 'picture[retry_on_error]',
            'value' => $mod_config['picture']['retry_on_error'],
            'range_min' => 0,
            'range_max' => 10,
            'range_step' => 1,
            'unit' => 'multiplied',
        ],
        'picture_retry_timeout' => [
            'view' => 'expert',
            'type' => 'range',
            'placeholder' => $defaultConfig['picture']['retry_timeout'],
            'name' => 'picture[retry_timeout]',
            'value' => $mod_config['picture']['retry_timeout'],
            'range_min' => 0,
            'range_max' => 10,
            'range_step' => 1,
            'unit' => 'seconds',
        ],
        'delete_no_request' => [
            'view' => 'expert',
            'type' => 'checkbox',
            'name' => 'delete[no_request]',
            'value' => $mod_config['delete']['no_request'],
        ],
        'database_enabled' => [
            'view' => 'expert',
            'type' => 'checkbox',
            'name' => 'database[enabled]',
            'value' => $mod_config['database']['enabled'],
        ],
        'database_file' => [
            'view' => 'expert',
            'type' => 'input',
            'placeholder' => $defaultConfig['database']['file'],
            'name' => 'database[file]',
            'value' => $mod_config['database']['file'],
        ],
        'database_rebuild' => [
            'view' => 'expert',
            'type' => 'button',
            'placeholder' => 'database_rebuild',
            'name' => 'DATABASEREBUILDBUTTON',
            'value' => 'databaserebuild-btn',
        ],
        'diskusage_button' => [
            'view' => 'basic',
            'type' => 'button',
            'placeholder' => 'disk_usage',
            'name' => 'DISKUSAGEBUTTON',
            'value' => 'diskusage-btn',
        ],
        'dependencies_button' => [
            'view' => 'basic',
            'type' => 'button',
            'placeholder' => 'dependencies_check',
            'name' => 'DEPENDENCIESBUTTON',
            'value' => 'dependencies-btn',
        ]
    ]
];
