<?php

/*
* Title                   : Booking System PRO (WordPress Plugin)
* Version                 : 2.0
* File                    : views/extras/views-backend-extragroup-item.php
* File Version            : 1.0.3
* Created / Last Modified : 13 October 2014
* Author                  : Dot on Paper
* Copyright               : © 2012 Dot on Paper
* Website                 : http://www.dotonpaper.net
* Description             : Booking System PRO back end extra group item views class.
*/

    if (!class_exists('DOPBSPViewsBackEndExtraGroupItem')){
        class DOPBSPViewsBackEndExtraGroupItem extends DOPBSPViewsBackEndExtraGroup{
            /*
             * Constructor
             */
            function DOPBSPViewsBackEndExtraGroupItem(){
            }
            
            /*
             * Returns group item template.
             * 
             * @param args (array): function arguments
             *                      * item (integer): select data
             *                      * language (string): group language
             * 
             * @return select group HTML
             */
            function template($args = array()){
                global $DOPBSP;
                
                $item = $args['item'];
                $language = isset($args['language']) && $args['language'] != '' ? $args['language']:$DOPBSP->classes->translation->get();
?>
                <li id="DOPBSP-extra-group-item-<?php echo $item->id; ?>" class="dopbsp-group-item-wrapper">
                    <div class="dopbsp-input-wrapper">
                        
                        <!--
                            Label
                        -->
                        <input type="text" name="DOPBSP-extra-group-item-label-<?php echo $item->id; ?>" id="DOPBSP-extra-group-item-label-<?php echo $item->id; ?>" value="<?php echo $DOPBSP->classes->translation->decodeJSON($item->translation, $language); ?>" onkeyup="if ((event.keyCode||event.which) !== 9){DOPBSPExtraGroupItem.edit(<?php echo $item->id; ?>, 'text', 'label', this.value);}" onpaste="DOPBSPExtraGroupItem.edit(<?php echo $item->id; ?>, 'text', 'label', this.value)" onblur="DOPBSPExtraGroupItem.edit(<?php echo $item->id; ?>, 'text', 'label', this.value, true)" />
                        
                        <!--
                            Operation
                        -->
                        <select name="DOPBSP-extra-group-item-operation-<?php echo $item->id; ?>" id="DOPBSP-extra-group-item-operation-<?php echo $item->id; ?>" class="dopbsp-small" onchange="DOPBSPExtraGroupItem.edit(<?php echo $item->id; ?>, 'select', 'operation', this.value)">
                            <option value="+"<?php echo $item->operation == '+' ? ' selected="selected"':''; ?>>+</option>
                            <option value="-"<?php echo $item->operation == '-' ? ' selected="selected"':''; ?>>-</option>
                        </select>
                        <script>
                            jQuery('#DOPBSP-extra-group-item-operation-<?php echo $item->id; ?>').DOPSelect();
                        </script>
                        
                        <!--
                            Price
                        -->
                        <input type="text" name="DOPBSP-extra-group-item-price-<?php echo $item->id; ?>" id="DOPBSP-extra-group-item-price-<?php echo $item->id; ?>" class="dopbsp-small DOPBSP-input-extra-group-item-price" value="<?php echo $item->price; ?>" onkeyup="if ((event.keyCode||event.which) !== 9){DOPBSPExtraGroupItem.edit(<?php echo $item->id; ?>, 'text', 'price', this.value);}" onpaste="DOPBSPExtraGroupItem.edit(<?php echo $item->id; ?>, 'text', 'price', this.value)" onblur="DOPBSPExtraGroupItem.edit(<?php echo $item->id; ?>, 'text', 'price', this.value, true)" />
                        
                        <!--
                            Price type
                        -->
                        <select name="DOPBSP-extra-group-item-price_type-<?php echo $item->id; ?>" id="DOPBSP-extra-group-item-price_type-<?php echo $item->id; ?>" class="dopbsp-small" onchange="DOPBSPExtraGroupItem.edit(<?php echo $item->id; ?>, 'select', 'price_type', this.value)">
                            <option value="fixed"<?php echo $item->price_type == 'fixed' ? ' selected="selected"':''; ?>><?php echo $DOPBSP->text('EXTRAS_EXTRA_GROUP_ITEMS_PRICE_TYPE_FIXED'); ?></option>
                            <option value="percent"<?php echo $item->price_type == 'percent' ? ' selected="selected"':''; ?>><?php echo $DOPBSP->text('EXTRAS_EXTRA_GROUP_ITEMS_PRICE_TYPE_PERCENT'); ?></option>
                        </select>
                        <script>
                            jQuery('#DOPBSP-extra-group-item-price_type-<?php echo $item->id; ?>').DOPSelect();
                        </script>
                        
                        <!--
                            Price by
                        -->
                        <select name="DOPBSP-extra-group-item-price_by-<?php echo $item->id; ?>" id="DOPBSP-extra-group-item-price_by-<?php echo $item->id; ?>" class="dopbsp-small" onchange="DOPBSPExtraGroupItem.edit(<?php echo $item->id; ?>, 'select', 'price_by', this.value)">
                            <option value="once"<?php echo $item->price_by == 'once' ? ' selected="selected"':''; ?>><?php echo $DOPBSP->text('EXTRAS_EXTRA_GROUP_ITEMS_PRICE_BY_ONCE'); ?></option>
                            <option value="period"<?php echo $item->price_by == 'period' ? ' selected="selected"':''; ?>><?php echo $DOPBSP->text('EXTRAS_EXTRA_GROUP_ITEMS_PRICE_BY_PERIOD'); ?></option>
                        </select>
                        <script>
                            jQuery('#DOPBSP-extra-group-item-price_by-<?php echo $item->id; ?>').DOPSelect();
                        </script>
                        <a href="javascript:DOPBSP.confirmation('EXTRAS_EXTRA_GROUP_DELETE_ITEM_CONFIRMATION', 'DOPBSPExtraGroupItem.delete(<?php echo $item->id; ?>)')" class="dopbsp-button dopbsp-small dopbsp-delete"><span class="dopbsp-info"><?php echo $DOPBSP->text('EXTRAS_EXTRA_GROUP_DELETE_ITEM_SUBMIT'); ?></span></a>
                        <a href="javascript:void(0)" class="dopbsp-button dopbsp-small dopbsp-handle"><span class="dopbsp-info"><?php echo $DOPBSP->text('EXTRAS_EXTRA_GROUP_ITEM_SORT'); ?></span></a>
                    </div>
                </li>
<?php
            }
        }
    }