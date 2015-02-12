<?php

/*
* Title                   : Booking System Pro (WordPress Plugin)
* Version                 : 2.0
* File                    : includes/calendars/class-backend-calendar.php
* File Version            : 1.0.7
* Created / Last Modified : 31 October 2014
* Author                  : Dot on Paper
* Copyright               : © 2012 Dot on Paper
* Website                 : http://www.dotonpaper.net
* Description             : Booking System PRO back end calendar PHP class.
*/

    if (!class_exists('DOPBSPBackEndCalendar')){
        class DOPBSPBackEndCalendar extends DOPBSPBackEndCalendars{
            /*
             * Constructor
             */
            function DOPBSPBackEndCalendar(){
            }

            /* 
             * Returns a JSON with calendar's data & options.
             * 
             * @post id (integer): calendar ID
             * 
             * @return options JSON
             */
            function getOptions(){
                global $wpdb;
                global $DOPBSP;
                
                $id = $_POST['id'];
                $settings_calendar = $wpdb->get_row($wpdb->prepare('SELECT * FROM '.$DOPBSP->tables->settings_calendar.' WHERE calendar_id=%d', 
                                                                   $id));

                $data = array('AddLastHourToTotalPrice' => $settings_calendar->hours_add_last_hour_to_total_price,
                              'AddtMonthViewText' => $DOPBSP->text('CALENDARS_CALENDAR_ADD_MONTH_VIEW'),
                              'AvailableDays' => explode(',', $settings_calendar->days_available),
                              'AvailableLabel' => $DOPBSP->text('CALENDARS_CALENDAR_FORM_AVAILABLE_LABEL'),
                              'AvailableOneText' => $DOPBSP->text('CALENDARS_CALENDAR_AVAILABLE_ONE_TEXT'),
                              'AvailableText' => $DOPBSP->text('CALENDARS_CALENDAR_AVAILABLE_TEXT'),
                              'BookedText' => $DOPBSP->text('CALENDARS_CALENDAR_BOOKED_TEXT'),
                              'Currency' => $DOPBSP->classes->currencies->get($settings_calendar->currency),
                              'DateEndLabel' => $DOPBSP->text('CALENDARS_CALENDAR_FORM_DATE_END_LABEL'),
                              'DateStartLabel' => $DOPBSP->text('CALENDARS_CALENDAR_FORM_DATE_START_LABEL'),
                              'DateType' => 1,
                              'DayNames' => array($DOPBSP->text('DAY_SUNDAY'), 
                                                  $DOPBSP->text('DAY_MONDAY'), 
                                                  $DOPBSP->text('DAY_TUESDAY'), 
                                                  $DOPBSP->text('DAY_WEDNESDAY'), 
                                                  $DOPBSP->text('DAY_THURSDAY'), 
                                                  $DOPBSP->text('DAY_FRIDAY'), 
                                                  $DOPBSP->text('DAY_SATURDAY')),
                              'DetailsFromHours' => $settings_calendar->days_details_from_hours,
                              'FirstDay' => $settings_calendar->days_first,
                              'HoursEnabled' => $settings_calendar->hours_enabled,
                              'GroupDaysLabel' => $DOPBSP->text('CALENDARS_CALENDAR_FORM_GROUP_DAYS_LABEL'),
                              'GroupHoursLabel' => $DOPBSP->text('CALENDARS_CALENDAR_FORM_GROUP_HOURS_LABEL'),
                              'HourEndLabel' => $DOPBSP->text('CALENDARS_CALENDAR_FORM_HOURS_END_LABEL'),
                              'HourStartLabel' => $DOPBSP->text('CALENDARS_CALENDAR_FORM_HOURS_START_LABEL'),
                              'HoursAMPM' => $settings_calendar->hours_ampm,
                              'HoursDefinitions' => json_decode($settings_calendar->hours_definitions),
                              'HoursDefinitionsChangeLabel' => $DOPBSP->text('CALENDARS_CALENDAR_FORM_HOURS_DEFINITIONS_CHANGE_LABEL'),
                              'HoursDefinitionsLabel' => $DOPBSP->text('CALENDARS_CALENDAR_FORM_HOURS_DEFINITIONS_LABEL'),
                              'HoursSetDefaultDataLabel' => $DOPBSP->text('CALENDARS_CALENDAR_FORM_HOURS_SET_DEFAULT_DATA_LABEL'),
                              'HoursIntervalEnabled' => $settings_calendar->hours_interval_enabled,
                              'ID' => $id,
                              'InfoLabel' => $DOPBSP->text('CALENDARS_CALENDAR_FORM_HOURS_INFO_LABEL'),
                              'MaxYear' => $settings_calendar->max_year,
                              'MonthNames' => array($DOPBSP->text('MONTH_JANUARY'), 
                                                    $DOPBSP->text('MONTH_FEBRUARY'), 
                                                    $DOPBSP->text('MONTH_MARCH'),
                                                    $DOPBSP->text('MONTH_APRIL'), 
                                                    $DOPBSP->text('MONTH_MAY'), 
                                                    $DOPBSP->text('MONTH_JUNE'), 
                                                    $DOPBSP->text('MONTH_JULY'), 
                                                    $DOPBSP->text('MONTH_AUGUST'), 
                                                    $DOPBSP->text('MONTH_SEPTEMBER'), 
                                                    $DOPBSP->text('MONTH_OCTOBER'), 
                                                    $DOPBSP->text('MONTH_NOVEMBER'), 
                                                    $DOPBSP->text('MONTH_DECEMBER')),
                              'NextMonthText' => $DOPBSP->text('CALENDARS_CALENDAR_NEXT_MONTH'),
                              'NotesLabel' => $DOPBSP->text('CALENDARS_CALENDAR_FORM_HOURS_NOTES_LABEL'),
                              'PreviousMonthText' => $DOPBSP->text('CALENDARS_CALENDAR_PREVIOUS_MONTH'),
                              'PriceLabel' => $DOPBSP->text('CALENDARS_CALENDAR_FORM_PRICE_LABEL'),
                              'PromoLabel' => $DOPBSP->text('CALENDARS_CALENDAR_FORM_PROMO_LABEL'),
                              'RemoveMonthViewText' => $DOPBSP->text('CALENDARS_CALENDAR_REMOVE_MONTH_VIEW'),
                              'ResetConfirmation' => $DOPBSP->text('CALENDARS_CALENDAR_FORM_RESET_CONFIRMATION'),
                              'SetDaysAvailabilityLabel' => $DOPBSP->text('CALENDARS_CALENDAR_FORM_SET_DAYS_AVAILABILITY_LABEL'),
                              'SetHoursAvailabilityLabel' => $DOPBSP->text('CALENDARS_CALENDAR_FORM_SET_HOURS_AVAILABILITY_LABEL'),
                              'SetHoursDefinitionsLabel' => $DOPBSP->text('CALENDARS_CALENDAR_FORM_SET_HOURS_DEFINITIONS_LABEL'),
                              'StatusAvailableText' => $DOPBSP->text('CALENDARS_CALENDAR_FORM_STATUS_AVAILABLE_TEXT'),
                              'StatusBookedText' => $DOPBSP->text('CALENDARS_CALENDAR_FORM_STATUS_BOOKED_TEXT'),
                              'StatusLabel' => $DOPBSP->text('CALENDARS_CALENDAR_FORM_STATUS_LABEL'),
                              'StatusSpecialText' => $DOPBSP->text('CALENDARS_CALENDAR_FORM_STATUS_SPECIAL_TEXT'),
                              'StatusUnavailableText' => $DOPBSP->text('CALENDARS_CALENDAR_FORM_STATUS_UNAVAILABLE_TEXT'),
                              'UnavailableText' => $DOPBSP->text('CALENDARS_CALENDAR_UNAVAILABLE_TEXT'));

                echo json_encode($data);

                die();
            }
        
            /*
             * Add calendar.
             * 
             * @param $post_id (integer): post ID
             * @param $name (string): calednar name
             */
            function add($post_id = 0,
                         $name = ''){
                global $wpdb;
                global $DOPBSP;
                
                $name = $name == '' ?  $DOPBSP->text('CALENDARS_ADD_CALENDAR_NAME'):$name;
                
                /*
                 * Add calendar.
                 */
                $wpdb->insert($DOPBSP->tables->calendars, array('user_id' => wp_get_current_user()->ID,
                                                                'name' => $name,
                                                                'post_id' => $post_id));
                $calendar_id = $wpdb->insert_id;
               
                /*
                 * Add calendar settings.
                 */
                $wpdb->insert($DOPBSP->tables->settings_calendar, array('calendar_id' => $calendar_id,
                                                               'hours_definitions' => '[{"value": "00:00"}]'));
                $settings_id = $wpdb->insert_id;
                
                $wpdb->insert($DOPBSP->tables->settings_notifications, array('id' => $settings_id,
                                                                             'calendar_id' => $calendar_id));
                $wpdb->insert($DOPBSP->tables->settings_payment, array('id' => $settings_id,
                                                                       'calendar_id' => $calendar_id));
                /*
                 * Display new calendars list.
                 */
                if ($post_id == 0){
                    $this->display();
                }

            	die();
            }
            
            /*
             * Edit calendar.
             * 
             * @post field (string): calendars table field
             * @post id (integer): calendar ID
             * @post value (string): the value with which the field will be updated
             */
            function edit(){
                global $wpdb;
                global $DOPBSP;
                
                $field = $_POST['field'];
                $id = $_POST['id'];
                $value = $_POST['value'];
                
                /*
                 * Update calendar field.
                 */
                $wpdb->update($DOPBSP->tables->calendars, array($field => $value), 
                                                          array('id' => $id));
                
                die();
            }

            /*
             * Delete calendar.
             * 
             * @post id (integer): calendar ID
             * 
             * @return number of calendars left
             */
            function delete(){
                global $wpdb;
                global $DOPBSP;

                $id = $_POST['id'];
                
                /*
                 * Delete calendar.
                 */
                $wpdb->delete($DOPBSP->tables->calendars, array('id' => $id));
                
                /*
                 * Delete calendar schedule.
                 */
                $wpdb->delete($DOPBSP->tables->days, array('calendar_id' => $id));
                
                /*
                 * Delete calendar reservations.
                 */
                $wpdb->delete($DOPBSP->tables->reservations, array('calendar_id' => $id));
                
                /*
                 * Delete calendar settings.
                 */
                $wpdb->delete($DOPBSP->tables->settings_calendar, array('calendar_id' => $id));
                $wpdb->delete($DOPBSP->tables->settings_notifications, array('calendar_id' => $id));
                $wpdb->delete($DOPBSP->tables->settings_payment, array('calendar_id' => $id));
                
                /*
                 * Delete users permissions.
                 */
                $users = get_users();
                
                foreach ($users as $user){
                    if ($DOPBSP->classes->backend_settings_users->permission($user->ID, 'use-calendar', $id)){
                        $DOPBSP->classes->backend_settings_users->set($user->ID,
                                                                      '',
                                                                      0,
                                                                      $id);
                    }
                }
                
                /*
                 * Count the number of remaining calendars.
                 */
                $calendars = $wpdb->get_results('SELECT * FROM '.$DOPBSP->tables->calendars.' ORDER BY id DESC');
                
                echo $wpdb->num_rows;

            	die();
            }
            
            /*
             * Set calendar maximum available year.
             * 
             * @post id (integer): calendar ID
             */
            function setMaxYear($id){
                global $wpdb;
                global $DOPBSP;
                
                $max_year = $wpdb->get_row('SELECT MAX(year) AS year FROM '.$DOPBSP->tables->days.' WHERE calendar_id='.$id); 

                if ($max_year->year > 0){
                    $wpdb->update($DOPBSP->tables->settings_calendar, array('max_year' => $max_year->year), 
                                                                       array('calendar_id' => $id));
                }
                else{
                    $wpdb->update($DOPBSP->tables->settings_calendar, array('max_year' => date('Y')), 
                                                                       array('calendar_id' => $id));
                }
            }
            
            /*
             * Set prices for faster search.
             * 
             * @post id (integer): calendar ID
             */
            function setPrice($id){
                global $wpdb;
                global $DOPBSP;
                
                $calendar = $wpdb->get_row('SELECT MIN(price_min) AS price_min, MAX(price_max) AS price_max FROM '.$DOPBSP->tables->days.' WHERE calendar_id='.$id.' AND price_min<>0'); 
                
                $wpdb->update($DOPBSP->tables->calendars, array('price_min' => $wpdb->num_rows == 0 ? 0:$calendar->price_min,
                                                                'price_max' => $wpdb->num_rows == 0 ? 0:$calendar->price_max), 
                                                          array('id' => $id));
            }
        }
    }