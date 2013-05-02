<?php //dial my phone number. ?>
<?xml version="1.0" encoding="UTF-8"?>
<Response>
<Dial action="twilio.php?number_index=<?php echo $number_index+1 ?>" callerId="7735551234">
        <Number url="screen_for_machine.php">
		3125551970
        </Number>
    </Dial>
</Response>



if I answer add me to conference

if no answer then send to voicemail