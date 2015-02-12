<?php

/*
* Title                   : Booking System PRO (WordPress Plugin)
* Version                 : 2.0
* File                    : includes/translation/class-translation-text-themes.php
* File Version            : 1.0
* Created / Last Modified : 22 September 2014
* Author                  : Dot on Paper
* Copyright               : © 2012 Dot on Paper
* Website                 : http://www.dotonpaper.net
* Description             : Booking System PRO themes translation text PHP class.
*/

    if (!class_exists('DOPBSPTranslationTextThemes')){
        class DOPBSPTranslationTextThemes{
            /*
             * Constructor
             */
            function DOPBSPTranslationTextThemes(){
                /*
                 * Initialize themes text.
                 */
                add_filter('dopbsp_filter_translation', array(&$this, 'themes'));
            }

            /*
             * Themes text.
             * 
             * @param lang (array): current translation
             * 
             * @return array with updated translation
             */
            function themes($lang){
                array_push($lang, array('key' => 'PARENT_THEMES',
                                        'parent' => '',
                                        'text' => 'Themes'));
                
                array_push($lang, array('key' => 'THEMES_TITLE',
                                        'parent' => 'PARENT_THEMES',
                                        'text' => 'Themes'));
                
                return $lang;
            }
        }
    }