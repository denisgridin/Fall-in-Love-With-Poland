<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Отправка тестового сообщения</title>
</head>
<body>
	


<?php

if(!isset($_POST['name']) and !isset($_POST['sur_name']) and !isset($_POST['text'])){
?>
	<form action="send.php" method="post">
			<div class="message">
			<input type="text" name="name" placeholder="Имя" required>
			<input type="text" name="sur_name" placeholder="Фамилия" required>
			<textarea name="send" id="send" cols="30" rows="10" placeholder="Введите свое сообщение..." wrap="on"></textarea>
			<div class="buttons">
			<input type="submit" value="Отправить">
			<input type="reset" value="Сброс">
			</div>

		</div>
	</form>

<?php 
$name = $_POST['name'];
$sur_name = $_POST['sur_name'];
$text = $_POST['send'];

$name = $htmlspecialchars('name');
$sur_name = $htmlspecialchars('sur_name');
$text = $htmlspecialchars('send');

$name = $urldecode('name');
$sur_name = $urldecode('sur_name');
$text = $urldecode('send');

$name = $trim('name');
$sur_name = $trim('sur_name');
$text = $trim('send');

//echo $name;
//echo "<br>"
//echo $sur_name;
//echo "<br>";
//echo $text;

if mail("denis.gridinrnd-929364dc1@vkmessenger.com", "Сообщение с сайта", "Имя:".$name.". Фамилия: ".$sur_name. "Сообщение: " .$text. ,"From: denisgridin6@gmail.com \r\n");
	{
		echo "Сообщение отправлено";
	} else {
		echo "Ошибка при отпарвке";
	}

 ?>
</body>
</html>