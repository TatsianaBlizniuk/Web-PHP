<?php
		if($_SERVER['REQUEST_METHOD'] == 'POST') {
if (isset($_REQUEST['age'])){
$choice=$_REQUEST['age'];
switch ($choice) {
    case 0:
        echo 'Вам менее 20 лет';
        break;
    case 1:
        echo 'Вам от 20 до 25 лет';;
        break;
    case 2:
        echo 'Вам от 26 до 30 лет';
        break;
    case 3:
        echo 'Вам более 30 лет';
        break;
}
}
else   echo 'Вы ничего не выбрали';
}
  ?>
  