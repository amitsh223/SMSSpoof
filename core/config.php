<?php
/**
 * config.php
 *
 * Author: Patrick McGranaghan
 *
 * Config file for app
 *
 */

// Variables

$config = array(
    'name'              =>  'SMS Spoof',
    'version'           =>  '0.1a',
    'author'            =>  'Patrick McGranaghan',
    'robots'            =>  'noindex, nofollow',
    'title'             =>  'SMS Spoof - ',
    'description'       =>  'Spoof SMS\'',
     'AccountSid'        =>  'AC31f0bfc08e09ef6c56d79322e0ec92b3',
     'AuthToken'         =>  'bed2a3a888dd60f247aa287eb169a406'
    // 
    // 
    // **Account Information**
    // Currently this application only has support for Twilio (https://www.twilio.com/)
    // To be able to send an SMS you will have to add your Account SID and Auth Token.
    // You can get these from the console (https://www.twilio.com/console)
    // You do not have to buy a phone number, however you must have balance on your account.
);

?>
