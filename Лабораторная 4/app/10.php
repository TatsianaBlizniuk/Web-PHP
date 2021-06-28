<?php
const LOG ="Mike";
const PASS="pass1";
if($_SERVER['REQUEST_METHOD'] == 'POST') {
function clean($value = "") {

    $value = trim($value);
    $value = stripslashes($value);
    $value = strip_tags($value);
    $value = htmlspecialchars($value);
    return $value;

}
	

	$login = $_POST['login'];
	$pass=$_POST['pass'];
	$login = clean($login);
	$pass = clean($pass);

if(($login==LOG) && ($pass==PASS)) {
echo "Доступ разрешён";
	} 
else 
echo "Доступ запрещён";
}
?> 