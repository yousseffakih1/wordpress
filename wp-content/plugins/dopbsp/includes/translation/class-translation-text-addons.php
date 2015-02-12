<?php

/*
* Title                   : Booking System PRO (WordPress Plugin)
* Version                 : 2.0
* File                    : includes/translation/class-translation-text-addons.php
* File Version            : 1.0
* Created / Last Modified : 22 September 2014
* Author                  : Dot on Paper
* Copyright               : © 2012 Dot on Paper
* Website                 : http://www.dotonpaper.net
* Description             : Booking System PRO addons translation text PHP class.
*/

    if (!class_exists('DOPBSPTranslationTextAddons')){
        class DOPBSPTranslationTextAddons{
            /*
             * Constructor
             */
            function DOPBSPTranslationTextAddons(){
                /*
                 * Initialize addons text.
                 */
                add_filter('dopbsp_filter_translation', array(&$this, 'addons'));
            }

            /*
             * Addons text.
             * 
             * @param lang (array): current translation
             * 
             * @return array with updated translation
             */
            function addons($lang){
                array_push($lang, array('key' => 'PARENT_ADDONS',
                                        'parent' => '',
                                        'text' => 'Addons'));
                
                array_push($lang, array('key' => 'ADDONS_TITLE',
                                        'parent' => 'PARENT_ADDONS',
                                        'text' => 'Addons'));
                
                return $lang;
            }
        }
    }