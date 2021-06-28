<?php
$name= $_REQUEST['name'];
if (isset($_REQUEST['hello']) and $_REQUEST['hello'] == 0) {
echo 'Прощай, '.$name;
}
if (isset($_REQUEST['hello']) and $_REQUEST['hello'] == 1) {
echo 'Привет, '.$name;
}
?>