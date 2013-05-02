<?xml version="1.0" encoding="UTF-8"?>
<?php
$extension=isset($_REQUEST['ext'] ) ? "for ext ".$_REQUEST['ext']  : "";
$to="voicemail@blinkbeverage.com";
$subject="new voicemail ". $extension;
$body="You can listen to the new voicemail at ".$_POST["RecordingUrl"];
$from= 'From: voicemail@blinkbeverage.com';
mail($to,$subject,$body,$from);
?>
<Response>
        <Say>Your message has been saved. Good Bye.</Say>
    <Hangup/>
</Response>