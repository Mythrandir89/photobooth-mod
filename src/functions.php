<?php
                /***********************
                ** PHP helper functions
                ***********************/

                function html_src_indent($num)
                {
                        echo "\n".str_repeat("\t",$num);
                }

                function isElementHidden($element_class, $setting)
                {
                        global $config;
                        /*
                        ** check for admin panel view settings
                        */

                        if (empty($setting['view'])) {
                           $setting['view'] = $config['adminpanel']['view_default'];
                        };

                        switch ($setting['view'])
                        {
                                case 'expert':
                                     if ($config['adminpanel']['view'] == 'advanced') { $element_class = 'hidden'; };
                                case 'advanced':
                                     if ($config['adminpanel']['view'] == 'basic') { $element_class = 'hidden'; };
                                case 'basic':
                                     break;
                        };

                        /*
                        ** check for  platform compatibility
                        */
                        if (isset($fields['platform']) && $fields['platform'] != 'all' && $fields['platform'] != $os) {
                           $setting['type'] = $element_class = 'hidden';
                        };

                        /*
                        ** Check if actual setting type is hidden
                        */
                        if (isset($setting['type']) && $setting['type'] == 'hidden') {
                           $element_class = 'hidden';
                        };

                        return $element_class;
                }