<?php
// Include the Twilio PHP library
	require 'Services/Twilio.php';
	include 'allowed_extensions.php';
	$ext_to_alert=210;
	$phone_to_alert=$allowed_extensions[$ext_to_alert][1];
	// Twilio REST API version
	$version = "2010-04-01";

	// Set our Account SID and AuthToken
	$sid = 'xxxxxxxxxxxxxxxxxxx';
	$token = 'yyyyyyyyyyyyyyyyyyyyyyyyyyy';
	
	// A phone number you have previously validated with Twilio
	$phonenumber = '3128542735';
	
	// Instantiate a new Twilio Rest Client
	$client = new Services_Twilio($sid, $token, $version);

	try {
		// Initiate a new outbound call
		$call = $client->account->calls->create(
			$phonenumber, // The number of the phone initiating the call
			$phone_to_alert, // The number of the phone receiving call
			'http://www.kosherwine.com/cgi-bin/twilio/alert_agent_new_queue.php' // The URL Twilio will request when the call is answered
		);
		//echo 'Started call: ' . $call->sid;
	} catch (Exception $e) {
		echo 'Error: ' . $e->getMessage();
	}
?>
<?xml version="1.0" encoding="UTF-8"?>
<Response>
                <Say>We are currently attempting to locate an agent. please be patient.</Say>
                <Pause length="14"/>
                <Say>We are still locating an agent. We will be with you shortly.</Say>
                <Pause length="14"/>
                <Leave />
</Response>