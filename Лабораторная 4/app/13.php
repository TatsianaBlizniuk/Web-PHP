<?php	
if (isset($_REQUEST['choice']) and $_REQUEST['choice'] == 0) {
		echo 'Вы не знаете PHP';
	}

	if (isset($_REQUEST['choice']) and $_REQUEST['choice'] == 1) {
		echo 'Вы  знаете PHP!';
	}
?>