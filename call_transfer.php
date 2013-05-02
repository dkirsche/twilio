<?php
$number_to_dial=isset($_REQUEST['phone_number']) ? $_REQUEST['phone_number'] : "0";
?>
<Response>
    <Dial action="leave_message.php" callerId="7731234567">
        <Number url="screen_for_machine.php">
        <?php echo $number_to_dial ?>
        </Number>
    </Dial>
</Response>