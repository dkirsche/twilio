<?xml version="1.0" encoding="UTF-8"?>
<?php if($_REQUEST['Digits']==1) { ?>
	<Response><Say>Connecting</Say>
	<Dial>
				<Queue>agent</Queue>
		</Dial>
	</Response>
	
<?php } else { ?>
	<Response><Hangup/></Response>	
<?php } ?>