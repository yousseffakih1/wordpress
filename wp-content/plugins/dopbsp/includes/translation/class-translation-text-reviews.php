<?php

/*
* Title                   : Booking System PRO (WordPress Plugin)
* Version                 : 2.0
* File                    : includes/translation/class-translation-text-reviews.php
* File Version            : 1.0
* Created / Last Modified : 01 September 2014
* Author                  : Dot on Paper
* Copyright               : © 2012 Dot on Paper
* Website                 : http://www.dotonpaper.net
* Description             : Booking System PRO reviews translation text PHP class.
*/

    if (!class_exists('DOPBSPTranslationTextReviews')){
        class DOPBSPTranslationTextReviews{
            /*
             * Constructor
             */
            function DOPBSPTranslationTextReviews(){
                /*
                 * Initialize reviews text.
                 */
                add_filter('dopbsp_filter_translation', array(&$this, 'reviews'));
            }

            /*
             * Reviews text.
             * 
             * @param lang (array): current translation
             * 
             * @return array with updated translation
             */
            function reviews($lang){
                array_push($lang, array('key' => 'PARENT_REVIEWS',
                                        'parent' => '',
                                        'text' => 'Reviews'));
                
                array_push($lang, array('key' => 'REVIEWS_TITLE',
                                        'parent' => 'PARENT_REVIEWS',
                                        'text' => 'Reviews'));
                
                return $lang;
            }
        }
    }