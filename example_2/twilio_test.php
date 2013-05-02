<?php
	
 
// Set the numbers to call
$DialCallStatus = isset($_REQUEST['DialCallStatus']) ? $_REQUEST['DialCallStatus'] : "";
 
header("content-type: text/xml"); 
 
if($DialCallStatus!="completed" && during_biz_hours() ){ 
?>
    <Response>
    <Gather action="extensions.php" timeout="5" numDigits="3" >
			<Say voice="woman">Thank you for calling blink beverage. If you know your party's extension you may enter it now or stay on the phone while we connect you with a customer service agent.</Say>
		</Gather>
    <Enqueue waitUrl="wait_url.php">agent</Enqueue>
    <Redirect>leave_message.php</Redirect>
    </Response>
<?php
} else {
?>
    <Response>
    	<Play>leave_message.mp3</Play>
    <Record
        action="handleRecording.php"
        />
        <Hangup/>
    </Response>
<?php
}

function during_biz_hours(){
	
	return date('G')>=9 && date('G')<18 && date('N')>=1 && date('N')<=5;
}


?>