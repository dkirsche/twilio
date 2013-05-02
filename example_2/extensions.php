<?xml version="1.0" encoding="UTF-8"?>
<?php include 'allowed_extensions.php'; ?>
<?php 

$ext=isset($_REQUEST['Digits']) ? $_REQUEST['Digits'] : 999; 
 if (!array_key_exists($ext, $allowed_extensions)) { ?>
	<Response>
		<Say> Invalid extension</Say>
		<Redirect>twilio_test.php</Redirect>
	</Response>	
<?php 
	exit;
	} 
	
	$name=$allowed_extensions[$ext][0];
	?>

<Response>	
	<Say>Please hold while you are transferred to <?php echo $name ?></Say>
	<Dial action="leave_message_extension.php?ext=<?php echo  $ext ?>" callerId="7732952900">
      <Number url="screen_for_machine.php">
        <?php echo $allowed_extensions[$ext][1] ?>
      </Number>
  </Dial>
  <Hangup/>
</Response>