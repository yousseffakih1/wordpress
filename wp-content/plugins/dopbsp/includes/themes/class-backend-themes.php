<?php

/*
* Title                   : Booking System Pro (WordPress Plugin)
* Version                 : 2.0
* File                    : includes/themes/class-backend-themes.php
* File Version            : 1.0
* Created / Last Modified : 13 October 2014
* Author                  : Dot on Paper
* Copyright               : © 2012 Dot on Paper
* Website                 : http://www.dotonpaper.net
* Description             : Booking System PRO back end themes PHP class.
*/

    if (!class_exists('DOPBSPBackEndThemes')){
        class DOPBSPBackEndThemes extends DOPBSPBackEnd{
            /*
             * Constructor
             */
            function DOPBSPBackEndThemes(){
            }
        
            /*
             * Prints out the themes page.
             * 
             * @return HTML page
             */
            function view(){
                global $DOPBSP;
                
                $DOPBSP->views->backend_themes->template();
            }
        }
    }