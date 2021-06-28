<?php
		if($_SERVER['REQUEST_METHOD'] == 'POST') {
$firstName = $_POST['firstname'];
$name = $_POST['name'];
$lastName = $_POST['lastname'];
echo $firstName . " " . mb_substr($name, 0, 1) . ". " . mb_substr($lastName,0, 1) . "."; }
  ?>
  
