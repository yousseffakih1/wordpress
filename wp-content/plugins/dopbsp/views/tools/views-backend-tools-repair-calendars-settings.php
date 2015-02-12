<?php

/*
* Title                   : Booking System PRO (WordPress Plugin)
* Version                 : 2.0
* File                    : views/tools/views-backend-tools-repair-calendars-settings.php
* File Version            : 1.0
* Created / Last Modified : 13 October 2014
* Author                  : Dot on Paper
* Copyright               : © 2012 Dot on Paper
* Website                 : http://www.dotonpaper.net
* Description             : Booking System PRO back end repair calendars settings views class.
*/

    if (!class_exists('DOPBSPViewsBackEndToolsRepairCalendarsSettings')){
        class DOPBSPViewsBackEndToolsRepairCalendarsSettings extends DOPBSPViewsBackEndTools{
            /*
             * Constructor
             */
            function DOPBSPViewsBackEndToolsRepairCalendarsSettings(){
            }
            
            /*
             * Returns calendars settings template.
             * 
             * @return calendar settings HTML
             */
            function template(){
                global $DOPBSP;
?>
                <table id="DOPBSP-tools-repair-calendars-settings" class="dopbsp-info-table">
                    <colgroup>
                        <col />
                        <col />
                        <col />
                        <col />
                    </colgroup>
                    <thead>
                        <tr>
                            <th><?php echo $DOPBSP->text('TOOLS_REPAIR_CALENDARS_SETTINGS_CALENDARS'); ?></th>
                            <th><?php echo $DOPBSP->text('TOOLS_REPAIR_CALENDARS_SETTINGS_SETTINGS_DATABASE'); ?></th>
                            <th><?php echo $DOPBSP->text('TOOLS_REPAIR_CALENDARS_SETTINGS_NOTIFICATIONS_DATABASE'); ?></th>
                            <th><?php echo $DOPBSP->text('TOOLS_REPAIR_CALENDARS_SETTINGS_PAYMENT_DATABASE'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
<?php
            }
        }
    }