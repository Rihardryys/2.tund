<?php
	$age = 5;
	
	if ($age < 18) {
		echo "Alaealine";
		
	} else {
		echo "Täisealine";
		
	}
	
?>	
<br>
<?php

	for ($i = 1; $i<=$age; $i=$i+1){
		
	echo $i."Palju";
		
	}

	echo " õnne!";






?>
<br>
<?php

	echo date ("d . D . Y");



?>