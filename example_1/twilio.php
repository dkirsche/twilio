<?php 
 
// Set the numbers to call
$numbers = array("3125551234");
$number_index = isset($_REQUEST['number_index']) ? $_REQUEST['number_index'] : "0";
$DialCallStatus = isset($_REQUEST['DialCallStatus']) ? $_REQUEST['DialCallStatus'] : "";
 
header("content-type: text/xml"); 
 
// Check the status of the call and 
// that there is a valid number to call
 
if($DialCallStatus!="completed" && $number_index<count($numbers) && during_biz_hours()){ 
?>
    <Response>
    <Play>welcome_high.mp3</Play>
    <Dial action="twilio.php?number_index=<?php echo $number_index+1 ?>" callerId="3125551234">
        <Number url="screen_for_machine.php">
        <?php echo $numbers[$number_index] ?>
        </Number>
    </Dial>
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