<?php

/*
* Title                   : Booking System PRO (WordPress Plugin)
* Version                 : 2.0
* File                    : includes/translation/class-translation-text-locations.php
* File Version            : 1.0
* Created / Last Modified : 05 October 2014
* Author                  : Dot on Paper
* Copyright               : © 2012 Dot on Paper
* Website                 : http://www.dotonpaper.net
* Description             : Booking System PRO locations translation text PHP class.
*/

    if (!class_exists('DOPBSPTranslationTextLocations')){
        class DOPBSPTranslationTextLocations{
            /*
             * Constructor
             */
            function DOPBSPTranslationTextLocations(){
                /*
                 * Initialize locations text.
                 */
                add_filter('dopbsp_filter_translation', array(&$this, 'locations'));
                
                add_filter('dopbsp_filter_translation', array(&$this, 'locationsLocation'));
                add_filter('dopbsp_filter_translation', array(&$this, 'locationsAddLocation'));
                add_filter('dopbsp_filter_translation', array(&$this, 'locationsDeleteLocation'));
                
                add_filter('dopbsp_filter_translation', array(&$this, 'locationsHelp'));
            }
            
            /*
             * Locations text.
             * 
             * @param lang (array): current translation
             * 
             * @return array with updated translation
             */
            function locations($lang){
                array_push($lang, array('key' => 'PARENT_LOCATIONS',
                                        'parent' => '',
                                        'text' => 'Locations'));
                
                array_push($lang, array('key' => 'LOCATIONS_TITLE',
                                        'parent' => 'PARENT_LOCATIONS',
                                        'text' => 'Locations'));
                array_push($lang, array('key' => 'LOCATIONS_CREATED_BY',
                                        'parent' => 'PARENT_LOCATIONS',
                                        'text' => 'Created by'));
                array_push($lang, array('key' => 'LOCATIONS_LOAD_SUCCESS',
                                        'parent' => 'PARENT_LOCATIONS',
                                        'text' => 'Locations list loaded.'));
                array_push($lang, array('key' => 'LOCATIONS_NO_LOCATIONS',
                                        'parent' => 'PARENT_LOCATIONS',
                                        'text' => 'No locations. Click the above "plus" icon to add a new one.'));
                
                return $lang;
            }
            
            /*
             * Locations - Location text.
             * 
             * @param lang (array): current translation
             * 
             * @return array with updated translation
             */
            function locationsLocation($lang){
                array_push($lang, array('key' => 'PARENT_LOCATIONS_LOCATION',
                                        'parent' => '',
                                        'text' => 'Locations - Location'));
                
                array_push($lang, array('key' => 'LOCATIONS_LOCATION_NAME',
                                        'parent' => 'PARENT_LOCATIONS_LOCATION',
                                        'text' => 'Name'));
                array_push($lang, array('key' => 'LOCATIONS_LOCATION_MAP',
                                        'parent' => 'PARENT_LOCATIONS_LOCATION',
                                        'text' => 'Enter the address'));
                array_push($lang, array('key' => 'LOCATIONS_LOCATION_ADDRESS',
                                        'parent' => 'PARENT_LOCATIONS_LOCATION',
                                        'text' => 'Address'));
                array_push($lang, array('key' => 'LOCATIONS_LOCATION_ALT_ADDRESS',
                                        'parent' => 'PARENT_LOCATIONS_LOCATION',
                                        'text' => 'Alternative address'));
                array_push($lang, array('key' => 'LOCATIONS_LOCATION_CALENDARS',
                                        'parent' => 'PARENT_LOCATIONS_LOCATION',
                                        'text' => 'Add calendars to location'));
                array_push($lang, array('key' => 'LOCATIONS_LOCATION_NO_CALENDARS',
                                        'parent' => 'PARENT_LOCATIONS_LOCATION',
                                        'text' => 'There are no calendars created. Go to <a href="%s">calendars</a> page to create one.'));
                
                array_push($lang, array('key' => 'LOCATIONS_LOCATION_LOADED',
                                        'parent' => 'PARENT_LOCATIONS_LOCATION',
                                        'text' => 'Location loaded.'));
                array_push($lang, array('key' => 'LOCATIONS_LOCATION_NO_GOOGLE_MAPS',
                                        'parent' => 'PARENT_LOCATIONS_LOCATION',
                                        'text' => 'Google maps did not load. Please refresh the page to try again.'));
                
                return $lang;
            }
            
            /*
             * Locations - Add location text.
             * 
             * @param lang (array): current translation
             * 
             * @return array with updated translation
             */
            function locationsAddLocation($lang){
                array_push($lang, array('key' => 'PARENT_LOCATIONS_ADD_LOCATION',
                                        'parent' => '',
                                        'text' => 'Locations - Add location'));
                
                array_push($lang, array('key' => 'LOCATIONS_ADD_LOCATION_NAME',
                                        'parent' => 'PARENT_LOCATIONS_ADD_LOCATION',
                                        'text' => 'New location'));
                array_push($lang, array('key' => 'LOCATIONS_ADD_LOCATION_SUBMIT',
                                        'parent' => 'PARENT_LOCATIONS_ADD_LOCATION',
                                        'text' => 'Add location'));
                array_push($lang, array('key' => 'LOCATIONS_ADD_LOCATION_ADDING',
                                        'parent' => 'PARENT_LOCATIONS_ADD_LOCATION',
                                        'text' => 'Adding a new location ...'));
                array_push($lang, array('key' => 'LOCATIONS_ADD_LOCATION_SUCCESS',
                                        'parent' => 'PARENT_LOCATIONS_ADD_LOCATION',
                                        'text' => 'You have succesfully added a new location.'));
                
                return $lang;
            }
            
            /*
             * Locations - Delete location text.
             * 
             * @param lang (array): current translation
             * 
             * @return array with updated translation
             */
            function locationsDeleteLocation($lang){
                array_push($lang, array('key' => 'PARENT_LOCATIONS_DELETE_LOCATION',
                                        'parent' => '',
                                        'text' => 'Locations - Delete location'));
                
                array_push($lang, array('key' => 'LOCATIONS_DELETE_LOCATION_CONFIRMATION',
                                        'parent' => 'PARENT_LOCATIONS_DELETE_LOCATION',
                                        'text' => 'Are you sure you want to delete this location?'));
                array_push($lang, array('key' => 'LOCATIONS_DELETE_LOCATION_SUBMIT',
                                        'parent' => 'PARENT_LOCATIONS_DELETE_LOCATION',
                                        'text' => 'Delete location'));
                array_push($lang, array('key' => 'LOCATIONS_DELETE_LOCATION_DELETING',
                                        'parent' => 'PARENT_LOCATIONS_DELETE_LOCATION',
                                        'text' => 'Deleting location ...'));
                array_push($lang, array('key' => 'LOCATIONS_DELETE_LOCATION_SUCCESS',
                                        'parent' => 'PARENT_LOCATIONS_DELETE_LOCATION',
                                        'text' => 'You have succesfully deleted the location.'));
                
                return $lang;
            }
            
            /*
             * Locations - Help text.
             * 
             * @param lang (array): current translation
             * 
             * @return array with updated translation
             */
            function locationsHelp($lang){
                array_push($lang, array('key' => 'PARENT_LOCATIONS_HELP',
                                        'parent' => '',
                                        'text' => 'Locations - Help'));
                
                array_push($lang, array('key' => 'LOCATIONS_HELP',
                                        'parent' => 'PARENT_LOCATIONS_HELP',
                                        'text' => 'Click on a location item to open the editing area.'));
                array_push($lang, array('key' => 'LOCATIONS_ADD_LOCATION_HELP',
                                        'parent' => 'PARENT_LOCATIONS_HELP',
                                        'text' => 'Click on the "plus" icon to add a location.'));
                
                /*
                 * Location help.
                 */
                array_push($lang, array('key' => 'LOCATIONS_LOCATION_HELP',
                                        'parent' => 'PARENT_LOCATIONS_HELP',
                                        'text' => 'Click the "trash" icon to delete the location.'));
                array_push($lang, array('key' => 'LOCATIONS_LOCATION_NAME_HELP',
                                        'parent' => 'PARENT_LOCATIONS_HELP',
                                        'text' => 'Change location name.'));
                array_push($lang, array('key' => 'LOCATIONS_LOCATION_ADDRESS_HELP',
                                        'parent' => 'PARENT_LOCATIONS_HELP',
                                        'text' => 'Enter location address or drag the marker on the map to select it.'));
                array_push($lang, array('key' => 'LOCATIONS_LOCATION_ALT_ADDRESS_HELP',
                                        'parent' => 'PARENT_LOCATIONS_HELP',
                                        'text' => 'Enter an alternative address if the marker is in the correct position but the address is not right.'));
                
                return $lang;
            }
        }
    }