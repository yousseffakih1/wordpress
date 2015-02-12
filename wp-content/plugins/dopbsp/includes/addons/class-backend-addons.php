<?php

/*
* Title                   : Booking System Pro (WordPress Plugin)
* Version                 : 2.0
* File                    : includes/addons/class-backend-addons.php
* File Version            : 1.0
* Created / Last Modified : 13 October 2014
* Author                  : Dot on Paper
* Copyright               : © 2012 Dot on Paper
* Website                 : http://www.dotonpaper.net
* Description             : Booking System PRO back end addons PHP class.
*/

    if (!class_exists('DOPBSPBackEndAddons')){
        class DOPBSPBackEndAddons extends DOPBSPBackEnd{
            /*
             * Constructor
             */
            function DOPBSPBackEndAddons(){
            }
        
            /*
             * Prints out the addons page.
             * 
             * @return HTML page
             */
            function view(){
                global $DOPBSP;
                
                $DOPBSP->views->backend_addons->template();
            }
        }
    }