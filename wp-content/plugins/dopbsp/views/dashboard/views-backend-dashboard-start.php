<?php

/*
* Title                   : Booking System PRO (WordPress Plugin)
* Version                 : 2.0
* File                    : views/dashboard/views-backend-dashboard-start.php
* File Version            : 1.0.5
* Created / Last Modified : 28 October 2014
* Author                  : Dot on Paper
* Copyright               : © 2012 Dot on Paper
* Website                 : http://www.dotonpaper.net
* Description             : Booking System PRO back end dashboard views class.
*/

    if (!class_exists('DOPBSPViewsBackEndDashboardStart')){
        class DOPBSPViewsBackEndDashboardStart extends DOPBSPViewsBackEndDashboard{
            /*
             * Constructor
             */
            function DOPBSPViewsBackEndDashboardStart(){
            }
            
            /*
             * Returns dashboard start template.
             * 
             * @param args (array): function arguments
             * 
             * @return dashboard start HTML template
             */
            function template($args = array()){
                global $DOPBSP;
?>            
            <section class="dopbsp-content-wrapper">
                <h3><?php echo $DOPBSP->text('DASHBOARD_SUBTITLE'); ?></h3>
                <p><?php echo $DOPBSP->text('DASHBOARD_TEXT'); ?></p>
                
                <div id="DOPBSP-get-started" class="dopbsp-left">
                    <h4><?php echo $DOPBSP->text('DASHBOARD_GET_STARTED'); ?></h4>
                    <ul>
                        <li>
                            <a href="<?php echo admin_url('admin.php?page=dopbsp-calendars'); ?>">
                                <span class="dopbsp-icon dopbsp-calendars"></span>
                                <?php echo $DOPBSP->text('DASHBOARD_GET_STARTED_CALENDARS'); ?>
                            </a>
                        </li>
<?php
    if (DOPBSP_DEVELOPMENT_MODE){
?>
                        <li>
                            <a href="<?php echo admin_url('admin.php?page=dopbsp-events'); ?>">
                                <span class="dopbsp-icon dopbsp-events"></span>
                                <?php echo $DOPBSP->text('DASHBOARD_GET_STARTED_EVENTS').' <em>('.$DOPBSP->text('SOON').')</em>'; ?>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo admin_url('admin.php?page=dopbsp-staff'); ?>">
                                <span class="dopbsp-icon dopbsp-staff"></span>
                                <?php echo $DOPBSP->text('DASHBOARD_GET_STARTED_STAFF').' <em>('.$DOPBSP->text('SOON').')</em>'; ?>
                            </a>
                        </li>
<?php
    }
?>
                        <li>
                            <a href="<?php echo admin_url('admin.php?page=dopbsp-locations'); ?>">
                                <span class="dopbsp-icon dopbsp-locations"></span>
                                <?php echo $DOPBSP->text('DASHBOARD_GET_STARTED_LOCATIONS'); ?>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo admin_url('admin.php?page=dopbsp-reservations'); ?>">
                                <span class="dopbsp-icon dopbsp-reservations"></span>
                                <?php echo $DOPBSP->text('DASHBOARD_GET_STARTED_RESERVATIONS'); ?>
                            </a>
                        </li>
<?php
    if (DOPBSP_DEVELOPMENT_MODE){
?>
                        <li>
                            <a href="<?php echo admin_url('admin.php?page=dopbsp-reviews'); ?>">
                                <span class="dopbsp-icon dopbsp-reviews"></span>
                                <?php echo $DOPBSP->text('DASHBOARD_GET_STARTED_REVIEWS').' <em>('.$DOPBSP->text('SOON').')</em>'; ?>
                            </a>
                        </li>
<?php
    }
?>
                    </ul>
                </div>
                
                <div id="DOPBSP-more-actions" class="dopbsp-left">
                    <h4><?php echo $DOPBSP->text('DASHBOARD_MORE_ACTIONS'); ?></h4>
                    <ul>
                        <li>
                            <a href="<?php echo admin_url('admin.php?page=dopbsp-coupons'); ?>">
                                <span class="dopbsp-icon dopbsp-coupons"></span>
                                <?php echo $DOPBSP->text('DASHBOARD_MORE_ACTIONS_COUPONS'); ?>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo admin_url('admin.php?page=dopbsp-discounts'); ?>">
                                <span class="dopbsp-icon dopbsp-discounts"></span>
                                <?php echo $DOPBSP->text('DASHBOARD_MORE_ACTIONS_DISCOUNTS'); ?>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo admin_url('admin.php?page=dopbsp-emails'); ?>">
                                <span class="dopbsp-icon dopbsp-emails"></span>
                                <?php echo $DOPBSP->text('DASHBOARD_MORE_ACTIONS_EMAILS'); ?>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo admin_url('admin.php?page=dopbsp-extras'); ?>">
                                <span class="dopbsp-icon dopbsp-extras"></span>
                                <?php echo $DOPBSP->text('DASHBOARD_MORE_ACTIONS_EXTRAS'); ?>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo admin_url('admin.php?page=dopbsp-forms'); ?>">
                                <span class="dopbsp-icon dopbsp-forms"></span>
                                <?php echo $DOPBSP->text('DASHBOARD_MORE_ACTIONS_FORMS'); ?>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo admin_url('admin.php?page=dopbsp-rules'); ?>">
                                <span class="dopbsp-icon dopbsp-rules"></span>
                                <?php echo $DOPBSP->text('DASHBOARD_MORE_ACTIONS_RULES'); ?>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo admin_url('admin.php?page=dopbsp-search'); ?>">
                                <span class="dopbsp-icon dopbsp-search"></span>
                                <?php echo $DOPBSP->text('DASHBOARD_MORE_ACTIONS_SEARCH'); ?>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo admin_url('admin.php?page=dopbsp-fees'); ?>">
                                <span class="dopbsp-icon dopbsp-fees"></span>
                                <?php echo $DOPBSP->text('DASHBOARD_MORE_ACTIONS_FEES'); ?>
                            </a>
                        </li>
<?php
    if (DOPBSP_DEVELOPMENT_MODE){
?>
                        <li>
                            <a href="<?php echo admin_url('admin.php?page=dopbsp-templates'); ?>">
                                <span class="dopbsp-icon dopbsp-templates"></span>
                                <?php echo $DOPBSP->text('DASHBOARD_MORE_ACTIONS_TEMPLATES').' <em>('.$DOPBSP->text('SOON').')</em>'; ?>
                            </a>
                        </li>
<?php
    }
?>
                        <li>
                            <a href="<?php echo admin_url('admin.php?page=dopbsp-settings'); ?>">
                                <span class="dopbsp-icon dopbsp-settings"></span>
                                <?php echo $DOPBSP->text('DASHBOARD_MORE_ACTIONS_SETTINGS'); ?>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo admin_url('admin.php?page=dopbsp-translation'); ?>">
                                <span class="dopbsp-icon dopbsp-translation"></span>
                                <?php echo $DOPBSP->text('DASHBOARD_MORE_ACTIONS_TRANSLATION'); ?>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo admin_url('admin.php?page=dopbsp-tools'); ?>">
                                <span class="dopbsp-icon dopbsp-tools"></span>
                                <?php echo $DOPBSP->text('DASHBOARD_MORE_ACTIONS_TOOLS'); ?>
                            </a>
                        </li>
                    </ul>
                </div>
            </section>
<?php
            }
        }
    }