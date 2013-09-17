<?php

/**
 * @author Ali Abbas
 * @abstract use for 
 *  setting import class
 *  
 */
$url_manager = array(
    'urlFormat' => 'path',
    'showScriptName' => true,
    'rules' => array(
        '' => '/site/index',
        /** Product detail * */
        'facilities' => '/site/activity',
        'curriculum' => '/site/courses',
        'teachingsystem' => '/site/teachingsystem',
        'feestructure' => '/site/feestructure',
        'administration' => '/site/administration',
        'contactus' => '/site/contactus',
        'contactus' => '/site/contactus',
        '<controller:\w+>/<id:\d+>' => '<controller>/view',
        '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
        '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
    ),
);
//$url_manager = array();
?>
