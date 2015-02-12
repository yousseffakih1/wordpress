<?php

/*
* Title                   : Booking System PRO (WordPress Plugin)
* Version                 : 2.0
* File                    : includes/translation/class-translation-text-amenities.php
* File Version            : 1.0
* Created / Last Modified : 07 October 2014
* Author                  : Dot on Paper
* Copyright               : © 2012 Dot on Paper
* Website                 : http://www.dotonpaper.net
* Description             : Booking System PRO amenities translation text PHP class.
*/

    if (!class_exists('DOPBSPTranslationTextAmenities')){
        class DOPBSPTranslationTextAmenities{
            /*
             * Constructor
             */
            function DOPBSPTranslationTextAmenities(){
                /*
                 * Initialize amenities text.
                 */
                add_filter('dopbsp_filter_translation', array(&$this, 'amenities'));
            }

            /*
             * Amenities text.
             * 
             * @param lang (array): current translation
             * 
             * @return array with updated translation
             */
            function amenities($lang){
                array_push($lang, array('key' => 'PARENT_AMENITIES',
                                        'parent' => '',
                                        'text' => 'Amenities'));
                
                array_push($lang, array('key' => 'AMENITIES_TITLE',
                                        'parent' => 'PARENT_AMENITIES',
                                        'text' => 'Amenities'));
                
                return $lang;
            }
        }
    }