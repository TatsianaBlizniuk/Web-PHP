<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {	
	if(isset($_REQUEST['lang']))
	{
		echo 'Вы знаете: ' . implode(',', $_REQUEST['lang']);
	}}
?>