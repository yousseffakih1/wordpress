<?php

/*
* Title                   : Booking System PRO (WordPress Plugin)
* Version                 : 2.0
* File                    : views/extras/views-backend-extra-groups.php
* File Version            : 1.0.2
* Created / Last Modified : 13 October 2014
* Author                  : Dot on Paper
* Copyright               : © 2012 Dot on Paper
* Website                 : http://www.dotonpaper.net
* Description             : Booking System PRO back end extra groups views class.
*/

    if (!class_exists('DOPBSPViewsBackEndExtraGroups')){
        class DOPBSPViewsBackEndExtraGroups extends DOPBSPViewsBackEndExtra{
            /*
             * Constructor
             */
            function DOPBSPViewsBackEndExtraGroups(){
            }
            
            /*
             * Returns extra groups tempalte.
             * 
             * @param args (array): function arguments
             *                      * id (integer): extra ID
             *                      * language (string): extra language
             * 
             * @return extra groups HTML
             */
            function template($args = array()){
                global $wpdb;
                global $DOPBSP;
                
                $id = $args['id'];
                $language = isset($args['language']) && $args['language'] != '' ? $args['language']:$DOPBSP->classes->translation->get();
?>
                <div class="dopbsp-extra-groups-header">
                    <a href="javascript:DOPBSPExtraGroup.add(<?php echo $id; ?>, '<?php echo $language; ?>')" class="dopbsp-button dopbsp-add"><span class="dopbsp-info"><?php echo $DOPBSP->text('EXTRAS_EXTRA_ADD_GROUP_SUBMIT'); ?></span></a>
                    <h3><?php echo $DOPBSP->text('EXTRAS_EXTRA_GROUPS'); ?></h3>
                </div>
                <ul id="DOPBSP-extra-groups" class="dopbsp-extra-groups">
<?php
                $groups = $wpdb->get_results('SELECT * FROM '.$DOPBSP->tables->extras_groups.' WHERE extra_id='.$id.' ORDER BY position ASC');
                
                if ($wpdb->num_rows > 0){
                    foreach($groups as $group){
                        $DOPBSP->views->backend_extra_group->template(array('group' => $group,
                                                                    'language' => $language));
                    }
                }
?>    
                </ul>
<?php                    
            }
        }
    }