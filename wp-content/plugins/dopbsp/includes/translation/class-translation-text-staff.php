<?php

/*
* Title                   : Booking System PRO (WordPress Plugin)
* Version                 : 2.0
* File                    : includes/translation/class-translation-text-staff.php
* File Version            : 1.0
* Created / Last Modified : 01 September 2014
* Author                  : Dot on Paper
* Copyright               : © 2012 Dot on Paper
* Website                 : http://www.dotonpaper.net
* Description             : Booking System PRO staff translation text PHP class.
*/

    if (!class_exists('DOPBSPTranslationTextStaff')){
        class DOPBSPTranslationTextStaff{
            /*
             * Constructor
             */
            function DOPBSPTranslationTextStaff(){
                /*
                 * Initialize staff text.
                 */
                add_filter('dopbsp_filter_translation', array(&$this, 'staff'));
            }

            /*
             * Staff text.
             * 
             * @param lang (array): current translation
             * 
             * @return array with updated translation
             */
            function staff($lang){
                array_push($lang, array('key' => 'PARENT_STAFF',
                                        'parent' => '',
                                        'text' => 'Staff'));
                
                array_push($lang, array('key' => 'STAFF_TITLE',
                                        'parent' => 'PARENT_STAFF',
                                        'text' => 'Staff'));
                
                return $lang;
            }
        }
    }