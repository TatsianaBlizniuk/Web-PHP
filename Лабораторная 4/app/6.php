<?php
		if($_SERVER['REQUEST_METHOD'] == 'POST') {
$choice = $_POST['choice'];
switch ($choice) {
    case 6:
        echo 'Ваша карта: шестёрка';
        break;
    case 7:
        echo 'Ваша карта: семёрка';
        break;
    case 8:
        echo 'Ваша карта: "Восьмёрка"';
        break;
    case 9:
        echo 'Ваша карта: "Девятка"';
        break;
    case 10:
        echo 'Ваша карта: "Десятка"';
        break;
    case 11:
        echo 'Ваша карта: "Валет"';
        break;
    case 12:
        echo 'Ваша карта: "Дама"';
        break;
    case 13:
        echo 'Ваша карта: "Король"';
        break;
    case 14:
        echo 'Ваша карта: "Туз"';
        break;
   
    default:
        echo 'Неверный ввод';
        break;
}
}
  ?>
  
