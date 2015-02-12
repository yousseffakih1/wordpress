<?php

/*
* Title                   : Booking System PRO (WordPress Plugin)
* Version                 : 2.0
* File                    : views/setttings/views-backend-settings.php
* File Version            : 1.1
* Created / Last Modified : 13 October 2014
* Author                  : Dot on Paper
* Copyright               : © 2012 Dot on Paper
* Website                 : http://www.dotonpaper.net
* Description             : Booking System PRO back end settings views class.
*/

    if (!class_exists('DOPBSPViewsBackEndSettings')){
        class DOPBSPViewsBackEndSettings extends DOPBSPViewsBackEnd{
            /*
             * Constructor
             */
            function DOPBSPViewsBackEndSettings(){
            }
            
            /*
             * Returns settings template.
             * 
             * @param args (array): function arguments
             * 
             * @return settings HTML page
             */
            function template($args = array()){
                global $DOPBSP;
                    
                $this->getTranslation();
?>            
    <div class="wrap DOPBSP-admin">
        
<!-- 
    Header 
-->
        <?php $this->displayHeader($DOPBSP->text('TITLE'), $DOPBSP->text('SETTINGS_TITLE')); ?>

<!-- 
    Content 
-->
        <div class="dopbsp-main">
            <table class="dopbsp-content-wrapper">
                <colgroup>
                    <col id="DOPBSP-col-column1" class="dopbsp-column1" />
                    <col id="DOPBSP-col-column-separator1" class="dopbsp-separator" />
                    <col id="DOPBSP-col-column2" class="dopbsp-column2" />
                </colgroup>
                <tbody>
                    <tr>
                        <td class="dopbsp-column" id="DOPBSP-column1">
                            <div class="dopbsp-column-header">
                                <a href="<?php echo DOPBSP_CONFIG_HELP_DOCUMENTATION_URL; ?>" target="_blank" class="dopbsp-button dopbsp-help"><span class="dopbsp-info dopbsp-help"><?php echo $DOPBSP->text('SETTINGS_HELP').'<br /><br />'.$DOPBSP->text('HELP_VIEW_DOCUMENTATION'); ?></span></a>
                                <br class="dopbsp-clear" />
                            </div>
                            <div class="dopbsp-column-content">
                                <ul>
<?php
                if (DOPBSP_DEVELOPMENT_MODE){
?>
                                    <li class="dopbsp-settings-item dopbsp-settings" onclick="DOPBSPSettings.displaySettings(0)">
                                        <div class="dopbsp-icon"></div>
                                        <div class="dopbsp-title"><?php echo $DOPBSP->text('SETTINGS_GENERAL_TITLE'); ?></div>
                                    </li>
                                    <li class="dopbsp-settings-item dopbsp-calendars" onclick="DOPBSPSettingsCalendar.display(0)">
                                        <div class="dopbsp-icon"></div>
                                        <div class="dopbsp-title"><?php echo $DOPBSP->text('SETTINGS_CALENDAR_TITLE'); ?></div>
                                    </li>
                                    <li class="dopbsp-settings-item dopbsp-notifications" onclick="DOPBSPSettingsNotifications.display(0)">
                                        <div class="dopbsp-icon"></div>
                                        <div class="dopbsp-title"><?php echo $DOPBSP->text('SETTINGS_NOTIFICATIONS_TITLE'); ?></div>
                                    </li>
                                    <li class="dopbsp-settings-item dopbsp-payments" onclick="DOPBSPSettingsPaymentGateways.display(0)">
                                        <div class="dopbsp-icon"></div>
                                        <div class="dopbsp-title"><?php echo $DOPBSP->text('SETTINGS_PAYMENT_GATEWAYS_TITLE'); ?></div>
                                    </li>
                                    <li class="dopbsp-settings-item dopbsp-searches" onclick="DOPBSPSettingsSearch.display(0)">
                                        <div class="dopbsp-icon"></div>
                                        <div class="dopbsp-title"><?php echo $DOPBSP->text('SETTINGS_SEARCH_TITLE'); ?></div>
                                    </li>
<?php
                }
?>
                                    <li class="dopbsp-settings-item dopbsp-users" onclick="DOPBSPSettingsUsers.display(0)">
                                        <div class="dopbsp-icon"></div>
                                        <div class="dopbsp-title"><?php echo $DOPBSP->text('SETTINGS_USERS_TITLE'); ?></div>
                                    </li>
                                </ul>
                            </div>
                        </td>
                        <td id="DOPBSP-column-separator1" class="dopbsp-separator"></td>
                        <td id="DOPBSP-column2" class="dopbsp-column">
                            <div class="dopbsp-column-header">&nbsp;</div>
                            <div class="dopbsp-column-content">&nbsp;</div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>       
<?php
            }  
            
/*
 * Form inputs.
 */
            /*
             * Create a drop down (select) field for settings.
             * 
             * @param args (array): function arguments
             *                      * id (integer): field ID
             *                      * label (string): field label
             *                      * value (string): field current value
             *                      * settings_id (integer): settings ID
             *                      * settings_type (string): settings type
             *                      * help (string): field help
             *                      * options (string): options labels
             *                      * options_values (string): options values
             *                      * container_class (string): container class
             * 
             * @return drop down HTML
             */
            function displaySelectInput($args = array()){
                global $DOPBSP;
                
                $id = $args['id'];
                $label = $args['label'];
                $value = $args['value'];
                $settings_id = $args['settings_id'];
                $settings_type = $args['settings_type'];
                $help = $args['help'];
                $options = $args['options'];
                $options_values = $args['options_values'];
                $container_class = isset($args['container_class']) ? $args['container_class']:'';
                
                $html = array();
                $options_data = explode(';;', $options);
                $options_values_data = explode(';;', $options_values);
                
                array_push($html, ' <div class="dopbsp-input-wrapper '.$container_class.'">');
                array_push($html, '     <label for="DOPBSP-settings-'.$id.'">'.$label.'</label>');
                array_push($html, '     <select name="DOPBSP-settings-'.$id.'" id="DOPBSP-settings-'.$id.'" class="dopbsp-left" onchange="DOPBSPSettings.set('.$settings_id.', \''.$settings_type.'\', \'select\', \''.$id.'\')">');
                
                for ($i=0; $i<count($options_data); $i++){
                    if ($value == $options_values_data[$i]){
                        array_push($html, '     <option value="'.$options_values_data[$i].'" selected="selected">'.$options_data[$i].'</option>');
                    }
                    else{
                        array_push($html, '     <option value="'.$options_values_data[$i].'">'.$options_data[$i].'</option>');
                    }
                }
                array_push($html, '     </select>');
                array_push($html, '     <script type="text/JavaScript">jQuery(\'#DOPBSP-settings-'.$id.'\').DOPSelect();</script>');
                array_push($html, '     <a href="'.DOPBSP_CONFIG_HELP_DOCUMENTATION_URL.'" target="_blank" class="dopbsp-button dopbsp-help"><span class="dopbsp-info dopbsp-help">'.$help.'<br /><br />'.$DOPBSP->text('HELP_VIEW_DOCUMENTATION').'</span></a>');
                array_push($html, ' </div>');
                
                echo implode('', $html);
            }
            
            /*
             * Create a switch field for settings.
             * 
             * @param args (array): function arguments
             *                      * id (integer): field ID
             *                      * label (string): field label
             *                      * value (string): field current value
             *                      * settings_id (integer): settings ID
             *                      * settings_type (string): settings type
             *                      * help (string): field help
             *                      * container_class (string): container class
             * 
             * @return switch HTML
             */
            function displaySwitchInput($args = array()){
                global $DOPBSP;
                
                $id = $args['id'];
                $label = $args['label'];
                $value = $args['value'];
                $settings_id = $args['settings_id'];
                $settings_type = $args['settings_type'];
                $help = $args['help'];
                $container_class = isset($args['container_class']) ? $args['container_class']:'';
                    
                $html = array();

                array_push($html, ' <div class="dopbsp-input-wrapper '.$container_class.'">');
                array_push($html, '     <label class="dopbsp-for-switch">'.$label.'</label>');
                array_push($html, '     <div class="dopbsp-switch">');
                array_push($html, '         <input type="checkbox" name="DOPBSP-settings-'.$id.'" id="DOPBSP-settings-'.$id.'" class="dopbsp-switch-checkbox" onchange="DOPBSPSettings.set('.$settings_id.', \''.$settings_type.'\', \'switch\', \''.$id.'\')"'.($value == 'true' ? ' checked="checked"':'').' />');
                array_push($html, '         <label class="dopbsp-switch-label" for="DOPBSP-settings-'.$id.'">');
                array_push($html, '             <div class="dopbsp-switch-inner"></div>');
                array_push($html, '             <div class="dopbsp-switch-switch"></div>');
                array_push($html, '         </label>');
                array_push($html, '     </div>');
                array_push($html, '     <a href="'.DOPBSP_CONFIG_HELP_DOCUMENTATION_URL.'" target="_blank" class="dopbsp-button dopbsp-help dopbsp-switch-help"><span class="dopbsp-info dopbsp-help">'.$help.'<br /><br />'.$DOPBSP->text('HELP_VIEW_DOCUMENTATION').'</span></a>');
                array_push($html, ' </div>');
                array_push($html, ' <style type="text/css">');
                array_push($html, '     .DOPBSP-admin .dopbsp-input-wrapper .dopbsp-switch .dopbsp-switch-inner:before{content: "'.$DOPBSP->text('SETTINGS_ENABLED').'";}');
                array_push($html, '     .DOPBSP-admin .dopbsp-input-wrapper .dopbsp-switch .dopbsp-switch-inner:after{content: "'.$DOPBSP->text('SETTINGS_DISABLED').'";}');
                array_push($html, ' </style>');
                
                echo implode('', $html);
            }
            
            /*
             * Create a text input field for settings.
             * 
             * @param args (array): function arguments
             *                      * id (integer): field ID
             *                      * label (string): field label
             *                      * value (string): field current value
             *                      * settings_id (integer): settings ID
             *                      * settings_type (string): settings type
             *                      * help (string): field help
             *                      * container_class (string): container class
             *                      * input_class (string): input class
             *                      * is_password (boolean): set input type to password
             * 
             * @return text input HTML
             */
            function displayTextInput($args = array()){
                global $DOPBSP;
                
                $id = $args['id'];
                $label = $args['label'];
                $value = $args['value'];
                $settings_id = $args['settings_id'];
                $settings_type = $args['settings_type'];
                $help = $args['help'];
                $container_class = isset($args['container_class']) ? $args['container_class']:'';
                $input_class = isset($args['input_class']) ? $args['input_class']:'';
                $is_password = isset($args['is_password']) ? $args['is_password']:false;
                    
                $html = array();

                array_push($html, ' <div class="dopbsp-input-wrapper '.$container_class.'">');
                array_push($html, '     <label for="DOPBSP-settings-'.$id.'">'.$label.'</label>');
                array_push($html, '     <input type="'.($is_password ? 'password':'text').'" name="DOPBSP-settings-'.$id.'" id="DOPBSP-settings-'.$id.'" class="'.$input_class.'" value="'.$value.'" onkeyup="if ((event.keyCode||event.which) !== 9){DOPBSPSettings.set('.$settings_id.', \''.$settings_type.'\', \'text\', \''.$id.'\', this.value);}" onpaste="DOPBSPSettings.set('.$settings_id.', \''.$settings_type.'\', \'text\', \''.$id.'\', this.value)" onblur="DOPBSPSettings.set('.$settings_id.', \''.$settings_type.'\', \'text\', \''.$id.'\', this.value, true)" />');
                array_push($html, '     <a href="'.DOPBSP_CONFIG_HELP_DOCUMENTATION_URL.'" target="_blank" class="dopbsp-button dopbsp-help"><span class="dopbsp-info dopbsp-help">'.$help.'<br /><br />'.$DOPBSP->text('HELP_VIEW_DOCUMENTATION').'</span></a>');
                array_push($html, ' </div>');

                echo implode('', $html);
            }
            
            /*
             * Create textarea field for settings.
             * 
             * @param args (array): function arguments
             *                      * id (integer): field ID
             *                      * label (string): field label
             *                      * value (string): field current value
             *                      * settings_id (integer): settings ID
             *                      * settings_type (string): settings type
             *                      * help (string): field help
             *                      * container_class (string): container class
             * 
             * @return textarea HTML
             */
            function displayTextarea($args = array()){
                global $DOPBSP;
                
                $id = $args['id'];
                $label = $args['label'];
                $value = $args['value'];
                $settings_id = $args['settings_id'];
                $settings_type = $args['settings_type'];
                $help = $args['help'];
                $container_class = isset($args['container_class']) ? $args['container_class']:'';
                
                $html = array();
                
                array_push($html, ' <div class="dopbsp-input-wrapper '.$container_class.'">');
                array_push($html, '     <label for="DOPBSP-settings-'.$id.'">'.$label.'</label>');
                array_push($html, '     <textarea name="DOPBSP-settings-'.$id.'" id="DOPBSP-settings-'.$id.'" rows="5" cols="" onkeyup="if ((event.keyCode||event.which) !== 9){DOPBSPSettings.set('.$settings_id.', \''.$settings_type.'\', \'textarea\', \''.$id.'\', this.value);}" onpaste="DOPBSPSettings.set('.$settings_id.', \''.$settings_type.'\', \'textarea\', \''.$id.'\', this.value)" onblur="DOPBSPSettings.set('.$settings_id.', \''.$settings_type.'\', \'textarea\', \''.$id.'\', this.value, true)">'.$value.'</textarea>');
                array_push($html, '     <a href="'.DOPBSP_CONFIG_HELP_DOCUMENTATION_URL.'" target="_blank" class="dopbsp-button dopbsp-help"><span class="dopbsp-info dopbsp-help">'.$help.'<br /><br />'.$DOPBSP->text('HELP_VIEW_DOCUMENTATION').'</span></a>');
                array_push($html, ' </div>');

                echo implode('', $html);
            }
            
/*
 * Single lists.
 */    
            
            /*
             * Get coupons list.
             * 
             * @param type (string): type of list to be displayed (ids or labels)
             * 
             * @return a string with the coupons
             */
            function listCoupons($type = 'ids'){
                global $wpdb;
                global $DOPBSP;
                
                $result = array();
                
                if ($type == 'ids'){
                    array_push($result, '0'); 
                }
                else{
                    array_push($result, $DOPBSP->text('SETTINGS_CALENDAR_COUPONS_NONE')); 
                } 
                
                if ($DOPBSP->classes->backend_settings_users->permission(wp_get_current_user()->ID, 'view-all-calendars')){
                    $coupons = $wpdb->get_results('SELECT * FROM '.$DOPBSP->tables->coupons.' ORDER BY id ASC');
                }
                elseif ($DOPBSP->classes->backend_settings_users->permission(wp_get_current_user()->ID, 'use-booking-system')){
                    $coupons = $wpdb->get_results('SELECT * FROM '.$DOPBSP->tables->coupons.' WHERE user_id='.wp_get_current_user()->ID.' OR user_id=0 ORDER BY id ASC');
                }
                
                if ($wpdb->num_rows != 0){
                    foreach ($coupons as $coupon){
                        if ($type == 'ids'){
                            array_push($result, $coupon->id); 
                        }
                        else{
                            array_push($result, $coupon->id.': '.$coupon->name); 
                        } 
                    }
                }
            
                return implode(';;', $result);
            }
            
            /*
             * Get currencies list.
             * 
             * @param type (string): type of list to be displayed (ids or labels)
             * 
             * @return a string with the currencies
             */
            function listCurrencies($type = 'ids'){
                global $DOPBSP;
                
                $currencies = $DOPBSP->classes->currencies->getList();
                $result = array();
                
                for ($i=0; $i<count($currencies); $i++){
                    if ($type == 'ids'){
                        array_push($result, $currencies[$i]['code']);
                    }
                    else{
                        array_push($result, $currencies[$i]['name'].' ('.$currencies[$i]['sign'].', '.$currencies[$i]['code'].')');
                    }
                }
                
                return implode(';;', $result);
            }
            
            /*
             * Get discounts list.
             * 
             * @param type (string): type of list to be displayed (ids or labels)
             * 
             * @return a string with the discounts
             */
            function listDiscounts($type = 'ids'){
                global $wpdb;
                global $DOPBSP;
                
                $result = array();
                
                if ($type == 'ids'){
                    array_push($result, '0'); 
                }
                else{
                    array_push($result, $DOPBSP->text('SETTINGS_CALENDAR_DISCOUNTS_NONE')); 
                } 
                
                if ($DOPBSP->classes->backend_settings_users->permission(wp_get_current_user()->ID, 'view-all-calendars')){
                    $discounts = $wpdb->get_results('SELECT * FROM '.$DOPBSP->tables->discounts.' ORDER BY id ASC');
                }
                elseif ($DOPBSP->classes->backend_settings_users->permission(wp_get_current_user()->ID, 'use-booking-system')){
                    $discounts = $wpdb->get_results('SELECT * FROM '.$DOPBSP->tables->discounts.' WHERE user_id='.wp_get_current_user()->ID.' OR user_id=0 ORDER BY id ASC');
                }
                
                if ($wpdb->num_rows != 0){
                    foreach ($discounts as $discount){
                        if ($type == 'ids'){
                            array_push($result, $discount->id); 
                        }
                        else{
                            array_push($result, $discount->id.': '.$discount->name); 
                        } 
                    }
                }
            
                return implode(';;', $result);
            }
            
            /*
             * Get emails list.
             * 
             * @param type (string): type of list to be displayed (ids or labels)
             * 
             * @return a string with the emails
             */
            function listEmails($type = 'ids'){
                global $wpdb;
                global $DOPBSP;
                
                $result = array();
                
                if ($DOPBSP->classes->backend_settings_users->permission(wp_get_current_user()->ID, 'view-all-calendars')){
                    $emails = $wpdb->get_results('SELECT * FROM '.$DOPBSP->tables->emails.' ORDER BY id ASC');
                }
                elseif ($DOPBSP->classes->backend_settings_users->permission(wp_get_current_user()->ID, 'use-booking-system')){
                    $emails = $wpdb->get_results('SELECT * FROM '.$DOPBSP->tables->emails.' WHERE user_id='.wp_get_current_user()->ID.' OR user_id=0 ORDER BY id ASC');
                }
                
                if ($wpdb->num_rows != 0){
                    foreach ($emails as $email){
                        if ($type == 'ids'){
                            array_push($result, $email->id); 
                        }
                        else{
                            array_push($result, $email->id.': '.$email->name); 
                        } 
                    }
                    return implode(';;', $result);
                }
                else{
                    return '';
                }
            }
            
            /*
             * Get extras list.
             * 
             * @param type (string): type of list to be displayed (ids or labels)
             * 
             * @return HTML with the extras
             */
            function listExtras($type = 'ids'){
                global $wpdb;
                global $DOPBSP;
                
                $result = array();
                
                if ($type == 'ids'){
                    array_push($result, '0'); 
                }
                else{
                    array_push($result, $DOPBSP->text('SETTINGS_CALENDAR_EXTRAS_NONE')); 
                }
                
                if ($DOPBSP->classes->backend_settings_users->permission(wp_get_current_user()->ID, 'view-all-calendars')){
                    $extras = $wpdb->get_results('SELECT * FROM '.$DOPBSP->tables->extras.' ORDER BY id ASC');
                }
                elseif ($DOPBSP->classes->backend_settings_users->permission(wp_get_current_user()->ID, 'use-booking-system')){
                    $extras = $wpdb->get_results('SELECT * FROM '.$DOPBSP->tables->extras.' WHERE user_id='.wp_get_current_user()->ID.' OR user_id=0 ORDER BY id ASC');
                }
                
                if ($wpdb->num_rows != 0){
                    foreach ($extras as $extra){
                        if ($type == 'ids'){
                            array_push($result, $extra->id); 
                        }
                        else{
                            array_push($result, $extra->id.': '.$extra->name); 
                        } 
                    }
                    return implode(';;', $result);
                }
                else{
                    return '';
                }
            }
           
            /*
             * Get forms list.
             * 
             * @param type (string): type of list to be displayed (ids or labels)
             * 
             * @return a string with the forms
             */
            function listForms($type = 'ids'){
                global $wpdb;
                global $DOPBSP;
                
                $result = array();
                
                if ($DOPBSP->classes->backend_settings_users->permission(wp_get_current_user()->ID, 'view-all-calendars')){
                    $forms = $wpdb->get_results('SELECT * FROM '.$DOPBSP->tables->forms.' ORDER BY id ASC');
                }
                elseif ($DOPBSP->classes->backend_settings_users->permission(wp_get_current_user()->ID, 'use-booking-system')){
                    $forms = $wpdb->get_results('SELECT * FROM '.$DOPBSP->tables->forms.' WHERE user_id='.wp_get_current_user()->ID.' OR user_id=0 ORDER BY id ASC');
                }
                
                if ($wpdb->num_rows != 0){
                    foreach ($forms as $form){
                        if ($type == 'ids'){
                            array_push($result, $form->id); 
                        }
                        else{
                            array_push($result, $form->id.': '.$form->name); 
                        } 
                    }
                }
            
                return implode(';;', $result);
            }
            
            /*
             * Get rules list.
             * 
             * @param type (string): type of list to be displayed (ids or labels)
             * 
             * @return HTML with the extras
             */
            function listRules($type = 'ids'){
                global $wpdb;
                global $DOPBSP;
                
                $result = array();
                
                if ($type == 'ids'){
                    array_push($result, '0'); 
                }
                else{
                    array_push($result, $DOPBSP->text('SETTINGS_CALENDAR_RULES_NONE')); 
                }
                
                if ($DOPBSP->classes->backend_settings_users->permission(wp_get_current_user()->ID, 'view-all-calendars')){
                    $rules = $wpdb->get_results('SELECT * FROM '.$DOPBSP->tables->rules.' ORDER BY id ASC');
                }
                elseif ($DOPBSP->classes->backend_settings_users->permission(wp_get_current_user()->ID, 'use-booking-system')){
                    $rules = $wpdb->get_results('SELECT * FROM '.$DOPBSP->tables->rules.' WHERE user_id='.wp_get_current_user()->ID.' OR user_id=0 ORDER BY id ASC');
                }
                
                if ($wpdb->num_rows != 0){
                    foreach ($rules as $rule){
                        if ($type == 'ids'){
                            array_push($result, $rule->id); 
                        }
                        else{
                            array_push($result, $rule->id.': '.$rule->name); 
                        } 
                    }
                    return implode(';;', $result);
                }
                else{
                    return '';
                }
            }
            
            /*
             * Get templates list.
             * 
             * @return a string with the templates
             */
            function listTemplates(){
                global $DOPBSP;
                
                $folder = $DOPBSP->paths->abs.'templates/';
                $folderData = opendir($folder);
                $list = array();
                
                while (($file = readdir($folderData)) !== false){
                    if ($file != '.' && $file != '..' && $file != '.DS_Store'){                        
                        array_push($list, $file);
                    }
                }
                closedir($folderData);
                
                return implode(';;', $list);
            }
            
/*
 * Multiple lists.
 */        
            /*
             * Get fees multiple list.
             * 
             * @param args (array): function arguments
             *                      * label (string): field label
             *                      * value (string): field current value
             *                      * settings_id (integer): settings ID
             *                      * settings_type (string): settings type
             *                      * help (string): field help
             *                      * container_class (string): container class
             * 
             * @return HTML with the fees
             */
            function multipleFees($args){
                global $wpdb;
                global $DOPBSP;
                
                $label = $args['label'];
                $value = $args['value'];
                $settings_id = $args['settings_id'];
                $settings_type = $args['settings_type'];
                $help = $args['help'];
                $container_class = isset($args['container_class']) ? $args['container_class']:'';
                
                $html = array();   
                $html_checkboxes = array();   
                
                if ($DOPBSP->classes->backend_settings_users->permission(wp_get_current_user()->ID, 'view-all-calendars')){
                    $fees = $wpdb->get_results('SELECT * FROM '.$DOPBSP->tables->fees.' ORDER BY id ASC');
                }
                elseif ($DOPBSP->classes->backend_settings_users->permission(wp_get_current_user()->ID, 'use-booking-system')){
                    $fees = $wpdb->get_results('SELECT * FROM '.$DOPBSP->tables->fees.' WHERE user_id='.wp_get_current_user()->ID.' OR user_id=0 ORDER BY id ASC');
                }
                
                if ($wpdb->num_rows != 0){
                
                    array_push($html, ' <div class="dopbsp-input-wrapper '.$container_class.'">');
                    array_push($html, '     <label class="dopbsp-for-checkboxes">'.$label.'</label>');
                    array_push($html, '     <div class="dopbsp-checkboxes-wrapper" id="DOPBSP-settings-fees">');
                
                    foreach ($fees as $fee){
                        $html_checkbox = array();   
                        array_push($html_checkbox, '<input type="checkbox" name="DOPBSP-settings-fee'.$fee->id.'" id="DOPBSP-settings-fee'.$fee->id.'"'.(strrpos(','.$value.',', ','.$fee->id.',') === false ? '':' checked="checked"').' onclick="DOPBSPSettings.set(\''.$settings_id.'\', \''.$settings_type.'\', \'checkbox\', \'fees\')" />');
                        array_push($html_checkbox, '<label class="dopbsp-for-checkbox" for="DOPBSP-settings-fee'.$fee->id.'">'.$fee->name.'</label>');
                        array_push($html_checkboxes, implode('', $html_checkbox));
                    }
                    array_push($html, implode('<br class="dopbsp-clear" />', $html_checkboxes));
                    array_push($html, '     </div>');
                    array_push($html, '     <a href="'.DOPBSP_CONFIG_HELP_DOCUMENTATION_URL.'" target="_blank" class="dopbsp-button dopbsp-help"><span class="dopbsp-info dopbsp-help">'.$help.'<br /><br />'.$DOPBSP->text('HELP_VIEW_DOCUMENTATION').'</span></a>');
                    array_push($html, ' </div>');
                }
            
                return implode('', $html);
            }
        }
    }