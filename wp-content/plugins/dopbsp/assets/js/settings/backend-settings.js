/*
* Title                   : Booking System PRO (WordPress Plugin)
* Version                 : 2.0
* File                    : assets/js/settings/backend-settings.js
* File Version            : 1.0.8
* Created / Last Modified : 27 October 2014
* Author                  : Dot on Paper
* Copyright               : © 2012 Dot on Paper
* Website                 : http://www.dotonpaper.net
* Description             : Booking System PRO back end settings JavaScript class.
*/

var DOPBSPSettings = new function(){
    'use strict';
    
    /*
     * Private variables
     */
    var $ = jQuery.noConflict();

    /*
     * Public variables
     */
    this.ajaxRequestInProgress;
    this.ajaxRequestTimeout;

    /*
     * Constructor
     */
    this.DOPBSPSettings = function(){
    };
    
    /*
     * Set settings.
     * 
     * @param id (Number): settings ID
     * @param settingsType (String): settings type
     * @param type (String): field type
     * @param field (String): field name
     * @param value (combined): field value
     * @param onBlur (Boolean): true if function has been called on blur event
     */
    this.set = function(id, 
                        settingsType,
                        type, 
                        field, 
                        value, 
                        onBlur){
        var i,
        daysAvailable = new Array(),
        extras = new Array(),
        fees = new Array(),
        hoursDefinitions = new Array();

        onBlur = onBlur === undefined ? false:true;
        
        /*
         * Stop saving for "days_first_displayed" field if the value is not correct.
         */
        if (field === 'days_first_displayed'
                && onBlur){
            setTimeout(function(){
                if ($('#DOPBSP-settings-days_first_displayed').val() !== value){
                    DOPBSPSettings.set(id, 
                                       settingsType,
                                       type, 
                                       field, 
                                       $('#DOPBSP-settings-days_first_displayed').val());
                }
            }, 300);
            return false;
        }
        
        /*
         * Remove current field AJAX requests.
         */
        if (this.ajaxRequestInProgress !== undefined 
                && !onBlur){
            this.ajaxRequestInProgress.abort();
        }

        if (this.ajaxRequestTimeout !== undefined){
            clearTimeout(this.ajaxRequestTimeout);
        }
        
        /*
         * Special actions depending on field type.
         */
        switch (type){
            case 'select':
                value = $('#DOPBSP-settings-'+field).val();
                break;    
            case 'sidebar-style':
                $('#DOPBSP-settings-sidebar-styles li').removeClass('dopbsp-selected');
                $('#DOPBSP-settings-sidebar-style'+value).addClass('dopbsp-selected');
                break;
            case 'switch':
                value = $('#DOPBSP-settings-'+field).is(':checked') ? 'true':'false';
                break;
        }
        
        /*
         * Special actions depending on field name.
         */
        switch (field){
            case 'days_available':
                for (i=0; i<=6; i++){
                    daysAvailable.push($('#DOPBSP-settings-days-available-'+i).is(':checked') ? 'true':'false');
                }
                value = daysAvailable.join(',');
                break;
            case 'hours_definitions':
                if (value !== ''){
                    value = value.split('\n');

                    for (i=0; i<value.length; i++){
                        value[i] = value[i].replace(/\s/g, "");

                        if (value[i] !== ''){
                            hoursDefinitions.push({'value': value[i]});
                        }
                    }
                }
                else{
                    hoursDefinitions.push({'value': '00:00'});
                }
                value = hoursDefinitions;
                break;
            case 'email_cc':
                if (value !== ''){
                    value = value.replace('\n', ',');
                }
                break;
            case 'email_cc_name':
                if (value !== ''){
                    value = value.replace('\n', ',');
                }
                break;
            case 'email_bcc':
                if (value !== ''){
                    value = value.replace('\n', ',');
                }
                break;
            case 'email_bcc_name':
                if (value !== ''){
                    value = value.replace('\n', ',');
                }
                break;
            case 'fees':
                if (settingsType === 'calendar'){
                    $('#DOPBSP-settings-fees input[type=checkbox]').each(function(){
                        $(this).is(':checked') ? fees.push($(this).attr('id').split('DOPBSP-settings-fee')[1]):'';
                    });
                    value = fees.join(',');
                }
                break;
        }
        
        /*
         * AJAX requests.
         */
        if (onBlur 
                || type === 'checkbox'
                || type === 'select' 
                || type === 'sidebar-style' 
                || type === 'switch'){
            if (!onBlur){
                DOPBSP.toggleMessages('active-info', DOPBSP.text('MESSAGES_SAVING'));
            }
            
            $.post(ajaxurl, {action: 'dopbsp_settings_set',
                             id: id,
                             settings_type: settingsType,
                             field: field,
                             value: value}, function(data){
                if (!onBlur){
                    DOPBSP.toggleMessages('success', DOPBSP.text('MESSAGES_SAVING_SUCCESS'));
                }
            }).fail(function(data){
                DOPBSP.toggleMessages('error', data.status+': '+data.statusText);
            });
        }
        else{
            DOPBSP.toggleMessages('active-info', DOPBSP.text('MESSAGES_SAVING'));

            this.ajaxRequestTimeout = setTimeout(function(){
                clearTimeout(this.ajaxRequestTimeout);

                this.ajaxRequestInProgress = $.post(ajaxurl, {action: 'dopbsp_settings_set',
                                                              id: id,
                                                              settings_type: settingsType,
                                                              field: field,
                                                              value: value}, function(data){
                    DOPBSP.toggleMessages('success', DOPBSP.text('MESSAGES_SAVING_SUCCESS'));
                }).fail(function(data){
                    DOPBSP.toggleMessages('error', data.status+': '+data.statusText);
                });
            }, 600);
        }
    };
    
    /*
     * Toggle buttons on settings page.
     * 
     * @param id (Number): calednar ID
     * @param button (String): button class
     */
    this.toggle = function(id,
                           button){
        if (id === 0){
            /*
             * Clear previous content.
             */
            DOPBSP.clearColumns(2);  
                    
            /*
             * Set buttons.
             */           
            $('#DOPBSP-column1 .dopbsp-settings-item.dopbsp-settings').removeClass('dopbsp-selected');
            $('#DOPBSP-column1 .dopbsp-settings-item.dopbsp-calendars').removeClass('dopbsp-selected');
            $('#DOPBSP-column1 .dopbsp-settings-item.dopbsp-notifications').removeClass('dopbsp-selected');
            $('#DOPBSP-column1 .dopbsp-settings-item.dopbsp-payments').removeClass('dopbsp-selected');
            $('#DOPBSP-column1 .dopbsp-settings-item.dopbsp-searches').removeClass('dopbsp-selected');
            $('#DOPBSP-column1 .dopbsp-settings-item.dopbsp-users').removeClass('dopbsp-selected');

            $('#DOPBSP-column1 .dopbsp-settings-item.dopbsp-'+button).addClass('dopbsp-selected');
        }
        else{
            /*
             * Clear previous content.
             */
            DOPBSP.clearColumns(3);
            $('#DOPBSP-column2 .dopbsp-column-content').html('');
            
            button = button === 'calendars' || button === 'searches' ? 'settings':button;
            
            if (button === 'calendar'){
                $('#DOPBSP-col-column2').addClass('dopbsp-calendar');
                $('#DOPBSP-col-column-separator2').removeAttr('style');
                $('#DOPBSP-col-column3').removeAttr('style');
                $('#DOPBSP-column-separator2').removeAttr('style');
                $('#DOPBSP-column3').removeAttr('style');  
            }
            else{
                $('#DOPBSP-col-column2').removeClass('dopbsp-calendar');
                $('#DOPBSP-col-column-separator2').css('display', 'none');
                $('#DOPBSP-col-column3').css('display', 'none');
                $('#DOPBSP-column-separator2').css('display', 'none');
                $('#DOPBSP-column3').css('display', 'none');
            }
        
            /*
             * Set buttons.
             */
            $('#DOPBSP-column2 .dopbsp-button.dopbsp-calendar').removeClass('dopbsp-selected');
            $('#DOPBSP-column2 .dopbsp-button.dopbsp-search').removeClass('dopbsp-selected');
            $('#DOPBSP-column2 .dopbsp-button.dopbsp-settings').removeClass('dopbsp-selected');
            $('#DOPBSP-column2 .dopbsp-button.dopbsp-notifications').removeClass('dopbsp-selected');
            $('#DOPBSP-column2 .dopbsp-button.dopbsp-payments').removeClass('dopbsp-selected');
            $('#DOPBSP-column2 .dopbsp-button.dopbsp-users').removeClass('dopbsp-selected');
            
            $('#DOPBSP-column2 .dopbsp-button.dopbsp-'+button).addClass('dopbsp-selected');
        }
    };
    
    return this.DOPBSPSettings();
};