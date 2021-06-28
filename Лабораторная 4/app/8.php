<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {	

	$name = $_POST['name'];
	$age = $_POST['age'];
	$message = $_POST['message'];
	$name = strip_tags($name);
	$age = strip_tags($age);
	$message = strip_tags($message);
if(!empty($name) && !empty($age) && !empty($message)) {
echo "Привет, " .$name . ", ".$age." лет/года"."</br>"."Твоё сообщение: ".$message ;
	} 
else 
echo "Не все поля заполнены";
}
?> 