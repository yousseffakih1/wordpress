<?php

/*
* Title                   : Booking System PRO (WordPress Plugin)
* Version                 : 2.0
* File                    : views/views.php
* File Version            : 1.0
* Created / Last Modified : 19 October 2014
* Author                  : Dot on Paper
* Copyright               : © 2012 Dot on Paper
* Website                 : http://www.dotonpaper.net
* Description             : Booking System PRO views class.
*/

    if (!class_exists('DOPBSPViews')){
        class DOPBSPViews{
            /*
             * Public variables.
             */
            public $backend;
            public $frontend;
            
            public $backend_addons;
            
            public $backend_amenities;
            
            public $backend_calendars;
            
            public $backend_coupons;
            public $backend_coupon;
            
            public $backend_dashboard;
            public $backend_dashboard_start;
            public $backend_dashboard_system;
            
            public $backend_discounts;
            public $backend_discount;
            public $backend_discount_items;
            public $backend_discount_item;
            public $backend_discount_item_rule;
            
            public $backend_emails;
            public $backend_email;
            
            public $backend_events;
            
            public $backend_extras;
            public $backend_extra;
            public $backend_extra_groups;
            public $backend_extra_group;
            public $backend_extra_group_item;
            
            public $backend_fees;
            public $backend_fee;
            
            public $backend_forms;
            public $backend_form;
            public $backend_form_fields;
            public $backend_form_field;
            public $backend_form_field_select_option;
            
            public $backend_locations;
            public $backend_location;
            
            public $backend_reservations;
            public $backend_reservations_list;
            public $backend_reservation;
            public $backend_reservation_coupon;
            public $backend_reservation_details;
            public $backend_reservation_discount;
            public $backend_reservation_extras;
            public $backend_reservation_fees;
            public $backend_reservation_form;
            
            public $backend_reviews;
            
            public $backend_rules;
            public $backend_rule;
            
            public $backend_searches;
            public $backend_search;
            public $frontend_search;
            public $frontend_search_results;
            public $frontend_search_results_list;
            public $frontend_search_results_grid;
            public $frontend_search_sidebar;
            public $frontend_search_sort;
            public $frontend_search_view;
            
            public $backend_settings;
            public $backend_settings_calendar;
            public $backend_settings_notifications;
            public $backend_settings_payment_gateways;
            public $backend_settings_paypal;
            public $backend_settings_search;
            public $backend_settings_users;
            
            public $backend_staff;
            
            public $backend_templates;
            
            public $backend_themes;
            
            public $backend_tools;
            public $backend_tools_repair_calendars_settings;
            
            public $backend_translation;
            
            /*
             * Constructor
             */
            function DOPBSPViews(){
                $this->init();
            }
            
            /*
             * Initialize view classes.
             */
            function init(){
                /*
                 * Initialize back end view.
                 */
                if (class_exists('DOPBSPViewsBackEnd')){
                    $this->backend = new DOPBSPViewsBackEnd();
                }
                
                /*
                 * Initialize front end view.
                 */
                if (class_exists('DOPBSPViewsFrontEnd')){
                    $this->frontend = new DOPBSPViewsFrontEnd();
                }
                
                /*
                 * Initialize addons view classes.
                 */
                if (class_exists('DOPBSPViewsBackEndAddons')){
                    $this->backend_addons = new DOPBSPViewsBackEndAddons();
                }
                
                /*
                 * Initialize amenities view classes.
                 */
                if (class_exists('DOPBSPViewsBackEndAmenities')){
                    $this->backend_amenities = new DOPBSPViewsBackEndAmenities();
                }
                
                /*
                 * Initialize calendars view classes.
                 */
                if (class_exists('DOPBSPViewsBackEndCalendars')){
                    $this->backend_calendars = new DOPBSPViewsBackEndCalendars();
                }
                
                /*
                 * Initialize coupons view classes.
                 */
                if (class_exists('DOPBSPViewsBackEndCoupons')){
                    $this->backend_coupons = new DOPBSPViewsBackEndCoupons();
                }
                
                if (class_exists('DOPBSPViewsBackEndCoupon')){
                    $this->backend_coupon = new DOPBSPViewsBackEndCoupon();
                }
                
                /*
                 * Initialize dashboard view classes.
                 */
                if (class_exists('DOPBSPViewsBackEndDashboard')){
                    $this->backend_dashboard = new DOPBSPViewsBackEndDashboard();
                }
                
                if (class_exists('DOPBSPViewsBackEndDashboardServer')){
                    $this->backend_dashboard_server = new DOPBSPViewsBackEndDashboardServer();
                }
                
                if (class_exists('DOPBSPViewsBackEndDashboardStart')){
                    $this->backend_dashboard_start = new DOPBSPViewsBackEndDashboardStart();
                }
                
                /*
                 * Initialize discounts view classes.
                 */
                if (class_exists('DOPBSPViewsBackEndDiscounts')){
                    $this->backend_discounts = new DOPBSPViewsBackEndDiscounts();
                }
                
                if (class_exists('DOPBSPViewsBackEndDiscount')){
                    $this->backend_discount = new DOPBSPViewsBackEndDiscount();
                }
                
                if (class_exists('DOPBSPViewsBackEndDiscountItems')){
                    $this->backend_discount_items = new DOPBSPViewsBackEndDiscountItems();
                }
                
                if (class_exists('DOPBSPViewsBackEndDiscountItem')){
                    $this->backend_discount_item = new DOPBSPViewsBackEndDiscountItem();
                }
                
                if (class_exists('DOPBSPViewsBackEndDiscountItemRule')){
                    $this->backend_discount_item_rule = new DOPBSPViewsBackEndDiscountItemRule();
                }
                
                /*
                 * Initialize emails view classes.
                 */
                if (class_exists('DOPBSPViewsBackEndEmails')){
                    $this->backend_emails = new DOPBSPViewsBackEndEmails();
                }
                
                if (class_exists('DOPBSPViewsBackEndEmail')){
                    $this->backend_email = new DOPBSPViewsBackEndEmail();
                }
                
                /*
                 * Initialize events view classes.
                 */
                if (class_exists('DOPBSPViewsBackEndEvents')){
                    $this->backend_events = new DOPBSPViewsBackEndEvents();
                }
                
                /*
                 * Initialize extras view classes.
                 */
                if (class_exists('DOPBSPViewsBackEndExtras')){
                    $this->backend_extras = new DOPBSPViewsBackEndExtras();
                }
                
                if (class_exists('DOPBSPViewsBackEndExtra')){
                    $this->backend_extra = new DOPBSPViewsBackEndExtra();
                }
                
                if (class_exists('DOPBSPViewsBackEndExtraGroups')){
                    $this->backend_extra_groups = new DOPBSPViewsBackEndExtraGroups();
                }
                
                if (class_exists('DOPBSPViewsBackEndExtraGroup')){
                    $this->backend_extra_group = new DOPBSPViewsBackEndExtraGroup();
                }
                
                if (class_exists('DOPBSPViewsBackEndExtraGroupItem')){
                    $this->backend_extra_group_item = new DOPBSPViewsBackEndExtraGroupItem();
                }
                
                /*
                 * Initialize fees view classes.
                 */
                if (class_exists('DOPBSPViewsBackEndFees')){
                    $this->backend_fees = new DOPBSPViewsBackEndFees();
                }
                
                if (class_exists('DOPBSPViewsBackEndFee')){
                    $this->backend_fee = new DOPBSPViewsBackEndFee();
                }
                
                /*
                 * Initialize forms view classes.
                 */
                if (class_exists('DOPBSPViewsBackEndForms')){
                    $this->backend_forms = new DOPBSPViewsBackEndForms();
                }
                
                if (class_exists('DOPBSPViewsBackEndForm')){
                    $this->backend_form = new DOPBSPViewsBackEndForm();
                }
                
                if (class_exists('DOPBSPViewsBackEndFormFields')){
                    $this->backend_form_fields = new DOPBSPViewsBackEndFormFields();
                }
                
                if (class_exists('DOPBSPViewsBackEndFormField')){
                    $this->backend_form_field = new DOPBSPViewsBackEndFormField();
                }
                
                if (class_exists('DOPBSPViewsBackEndFormFieldSelectOption')){
                    $this->backend_form_field_select_option = new DOPBSPViewsBackEndFormFieldSelectOption();
                }
                
                /*
                 * Initialize locations view classes.
                 */
                if (class_exists('DOPBSPViewsBackEndLocations')){
                    $this->backend_locations = new DOPBSPViewsBackEndLocations();
                }
                
                if (class_exists('DOPBSPViewsBackEndLocation')){
                    $this->backend_location = new DOPBSPViewsBackEndLocation();
                }
                
                /*
                 * Initialize reservations view classes.
                 */
                if (class_exists('DOPBSPViewsBackEndReservations')){
                    $this->backend_reservations = new DOPBSPViewsBackEndReservations();
                }
                
                if (class_exists('DOPBSPViewsBackEndReservationsList')){
                    $this->backend_reservations_list = new DOPBSPViewsBackEndReservationsList();
                }
                
                if (class_exists('DOPBSPViewsBackEndReservation')){
                    $this->backend_reservation = new DOPBSPViewsBackEndReservation();
                }
                
                if (class_exists('DOPBSPViewsBackEndReservationCoupon')){
                    $this->backend_reservation_coupon = new DOPBSPViewsBackEndReservationCoupon();
                }
                
                if (class_exists('DOPBSPViewsBackEndReservationDetails')){
                    $this->backend_reservation_details = new DOPBSPViewsBackEndReservationDetails();
                }
                
                if (class_exists('DOPBSPViewsBackEndReservationDiscount')){
                    $this->backend_reservation_discount = new DOPBSPViewsBackEndReservationDiscount();
                }
                
                if (class_exists('DOPBSPViewsBackEndReservationExtras')){
                    $this->backend_reservation_extras = new DOPBSPViewsBackEndReservationExtras();
                }
                
                if (class_exists('DOPBSPViewsBackEndReservationFees')){
                    $this->backend_reservation_fees = new DOPBSPViewsBackEndReservationFees();
                }
                
                if (class_exists('DOPBSPViewsBackEndReservationForm')){
                    $this->backend_reservation_form = new DOPBSPViewsBackEndReservationForm();
                }
                
                /*
                 * Initialize reviews view classes.
                 */
                if (class_exists('DOPBSPViewsBackEndReviews')){
                    $this->backend_reviews = new DOPBSPViewsBackEndReviews();
                }
                
                /*
                 * Initialize rules view classes.
                 */
                if (class_exists('DOPBSPViewsBackEndRules')){
                    $this->backend_rules = new DOPBSPViewsBackEndRules();
                }
                
                if (class_exists('DOPBSPViewsBackEndRule')){
                    $this->backend_rule = new DOPBSPViewsBackEndRule();
                }
                
                /*
                 * Initialize search view classes.
                 */
                if (class_exists('DOPBSPViewsBackEndSearches')){
                    $this->backend_searches = new DOPBSPViewsBackEndSearches();
                }
                
                if (class_exists('DOPBSPViewsBackEndSearch')){
                    $this->backend_search = new DOPBSPViewsBackEndSearch();
                }
                
                if (class_exists('DOPBSPViewsFrontEndSearch')){
                    $this->frontend_search = new DOPBSPViewsFrontEndSearch();
                }
                
                if (class_exists('DOPBSPViewsFrontEndSearchResults')){
                    $this->frontend_search_results = new DOPBSPViewsFrontEndSearchResults();
                }
                
                if (class_exists('DOPBSPViewsFrontEndSearchResultsList')){
                    $this->frontend_search_results_list = new DOPBSPViewsFrontEndSearchResultsList();
                }
                
                if (class_exists('DOPBSPViewsFrontEndSearchResultsGrid')){
                    $this->frontend_search_results_grid = new DOPBSPViewsFrontEndSearchResultsGrid();
                }
                
                if (class_exists('DOPBSPViewsFrontEndSearchSidebar')){
                    $this->frontend_search_sidebar = new DOPBSPViewsFrontEndSearchSidebar();
                }
                
                if (class_exists('DOPBSPViewsFrontEndSearchSort')){
                    $this->frontend_search_sort = new DOPBSPViewsFrontEndSearchSort();
                }
                
                if (class_exists('DOPBSPViewsFrontEndSearchView')){
                    $this->frontend_search_view = new DOPBSPViewsFrontEndSearchView();
                }
                
                /*
                 * Initialize settings view classes.
                 */
                if (class_exists('DOPBSPViewsBackEndSettings')){
                    $this->backend_settings = new DOPBSPViewsBackEndSettings();
                }
                
                if (class_exists('DOPBSPViewsBackEndSettingsCalendar')){
                    $this->backend_settings_calendar = new DOPBSPViewsBackEndSettingsCalendar();
                }
                
                if (class_exists('DOPBSPViewsBackEndSettingsNotifications')){
                    $this->backend_settings_notifications = new DOPBSPViewsBackEndSettingsNotifications();
                }
                
                if (class_exists('DOPBSPViewsBackEndSettingsPaymentGateways')){
                    $this->backend_settings_payment_gateways = new DOPBSPViewsBackEndSettingsPaymentGateways();
                }
                
                if (class_exists('DOPBSPViewsBackEndSettingsPayPal')){
                    $this->backend_settings_paypal = new DOPBSPViewsBackEndSettingsPayPal();
                }
                
                if (class_exists('DOPBSPViewsBackEndSettingsSearch')){
                    $this->backend_settings_search = new DOPBSPViewsBackEndSettingsSearch();
                }
                
                if (class_exists('DOPBSPViewsBackEndSettingsUsers')){
                    $this->backend_settings_users = new DOPBSPViewsBackEndSettingsUsers();
                }
                
                /*
                 * Initialize staff view classes.
                 */
                if (class_exists('DOPBSPViewsBackEndStaff')){
                    $this->backend_staff = new DOPBSPViewsBackEndStaff();
                }
                
                /*
                 * Initialize templates view classes.
                 */
                if (class_exists('DOPBSPViewsBackEndTemplates')){
                    $this->backend_templates = new DOPBSPViewsBackEndTemplates();
                }
                
                /*
                 * Initialize themes view classes.
                 */
                if (class_exists('DOPBSPViewsBackEndThemes')){
                    $this->backend_themes = new DOPBSPViewsBackEndThemes();
                }
                
                /*
                 * Initialize tools view classes.
                 */
                if (class_exists('DOPBSPViewsBackEndTools')){
                    $this->backend_tools = new DOPBSPViewsBackEndTools();
                }
                
                if (class_exists('DOPBSPViewsBackEndToolsRepairCalendarsSettings')){
                    $this->backend_tools_repair_calendars_settings = new DOPBSPViewsBackEndToolsRepairCalendarsSettings();
                }
                
                /*
                 * Initialize translation view classes.
                 */
                if (class_exists('DOPBSPViewsBackEndTranslation')){
                    $this->backend_translation = new DOPBSPViewsBackEndTranslation();
                }
            }
        }
    }