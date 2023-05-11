<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Форма обратной связи</title>
</head>
<body>
	<?php if (!isset($_REQUEST['start'])) { ?> 
    	<form action="<?php $_SERVER['SCRIPT_NAME']?>" method="post">
			<p><label>Ваше имя: <input name="prenume" type="text" size="30"></label></p>
			<p><label>Ваш возраст: <input name="age" type="number" min="1" max="99"></label></p>
			<p><label>Ваш E-mail: <input name="email" type="email"></label></p>
			<p><label>Ваше мнение о нас напишите тут:<br />
			<textarea name="mes" cols="40" rows="4" placeholder="Ваше мнение..."></textarea></label></p>
			<p> <input type="reset" value="Стереть" />
			<input type="submit" value="Передать" name="start" /></p>
		</form>
	<?php } else {	
		if (isset($_POST['prenume'])) $pren = $_POST['prenume'];
		if (isset($_POST['age'])) $age = $_POST['age'];
		if (isset($_POST['email'])) $email = $_POST['email'];
		if (isset($_POST['mes'])) $mesaj = $_POST['mes'];
		$file=fopen('messages.txt','a+') or die("Недоступный файл!");
		fwrite($file,$pren);
		fwrite($file,"\t\t");
		fwrite($file,$age);
		fwrite($file,"\t\t");
		fwrite($file,$email);
		fwrite($file,"\t\t");
		fwrite($file,$mesaj);
		fwrite($file,"\n");
		fclose($file);
		echo 'Данные были сохранены! Вот что хранится в файле: <br />';
		$file = fopen("messages.txt", "r") or die("Недоступный файл!");
		while(!feof($file)) {
			echo fgets($file) . "<br />";
		}
		fclose($file);
        ?>
        <input type="button" value="Назад" onclick="window.location.href='num2.php'">
        <?php 
	}
	?>
</body>
</html>
