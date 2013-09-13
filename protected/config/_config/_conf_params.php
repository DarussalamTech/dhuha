<?php

/**
 * @author Ali Abbas
 * @abstract use for 
 *  setting extra param
 *  
 */
$params = array(
    // this is used in contact page
    'adminEmail' => 'dhuhainternational@gmail.com', //Should be same component->email->user, use for sending emails to customer (sign up conformation, sending activation link, sending new password)
    'replyTo' => 'admin@csv.com',
    'cc' => 'admin@csv.com',
    'bcc' => 'admin@csv.com',
    'supportEmail' => 'admin@csv.com', //receiveing customer emails
    'dateformat' => 'y/m/d1',

    'default_admin' => 'dhuhainternational@gmail.com',
    'dateformat' => 'm/d/y',
    'mailHost' => 'smtp.gmail.com',
    'smtp' => true,
    //'mailPort' => 587,
    'mailPort' => 465,
    'mailUsername' => 'dhuhainternational@gmail.com',
    'mailPassword' => 'Admin125',
    'mailSecuity' => 'ssl',

);
?>
