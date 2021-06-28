<?php
if (!isset($_POST['age'])){
?>
	<form action="" method="POST">
 <input name="age" type="text">
<input type='submit' value='Отправить'>
		</form>
<?php
}
?>
<?php
		if(isset($_POST['age'])) {
$age =strip_tags( $_POST['age']);
echo  "Ваш возраст: " .$age. ". "; }
  ?>