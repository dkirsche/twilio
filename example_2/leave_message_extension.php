<?php include 'allowed_extensions.php'; ?>
<?php
$ext=$_REQUEST['ext'];
$name=$allowed_extensions[$ext][0];
?>
<Response>
    	<Say>Please leave a message for <?php echo $name ?>.</Say>
    <Record action="handleRecording.php?ext=<?php echo $ext ?>" />
        <Hangup/>
    </Response>