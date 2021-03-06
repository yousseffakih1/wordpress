/*
* Title                   : Booking System PRO (WordPress Plugin)
* Version                 : 2.0
* File                    : assets/js/locations/backend-location-map-marker.js
* File Version            : 1.0
* Created / Last Modified : 25 September 2014
* Author                  : Dot on Paper
* Copyright               : © 2012 Dot on Paper
* Website                 : http://www.dotonpaper.net
* Description             : Booking System PRO back end location map marker JavaScript class.
*/

var DOPBSPLocationMapMarker = new function(){
    'use strict';
    
    /*
     * Private variables.
     */
    var $ = jQuery.noConflict();
    
    /*
     * Constructor
     */
    this.DOPBSPLocationMapMarker = function(){
    };
    
    /*
     * Set marker on map.
     * 
     * @param map (Object): Google map marker
     * @param coordinates (Array):  marker coordinates
     */
    this.set = function(map,
                        coordinates){
        var icon = new google.maps.MarkerImage(DOPBSP_plugin_url+'assets/gui/images/marker.png',
                                               new google.maps.Size(36, 52),
                                               new google.maps.Point(1, 0),
                                               new google.maps.Point(18, 52)),
        lat = map.getCenter().lat(),
        lng = map.getCenter().lng(),
        marker,
        position = new google.maps.LatLng(coordinates[0], coordinates[1]),
        shadow = new google.maps.MarkerImage(DOPBSP_plugin_url+'assets/gui/images/marker.png',
                                             new google.maps.Size(36, 52),
                                             new google.maps.Point(1, 0),
                                             new google.maps.Point(18, 52)),
        shape = {coord: [0, 0, 36, 0, 36, 52, 0, 52],
                 type: 'poly'};
             
        marker = new google.maps.Marker({animation: google.maps.Animation.DROP,
                                         draggable: true,
                                         icon: icon,
                                         map: map,
                                         position: position,
                                         shadow: shadow,
                                         shape: shape});
                      
        /*
         * Initialize drag event.
         */              
        google.maps.event.addListener(marker, 'dragend', function(event){
            var lat = event.latLng.lat(),
            lng = event.latLng.lng();
                
            DOPBSPLocationMap.set([lat, lng],
                                  'latLng',
                                  true,
                                  false);
        });
    };

    return this.DOPBSPLocationMapMarker();
};