<html>
<head>
	<meta charset="utf-8">
	<title>Formular</title>
</head>
<body>
	<div class="formular">
	<h1>Для посещения курсов заполните нижепредложенную форму...</h1>
	<form action="<?php $_SERVER['SCRIPT_NAME']?>" method="post">
        <input type="text" name="nume" placeholder="Введите вашу фамилию" pattern="[A-ZА-Я][a-zа-я]{3,10}" title="Введите только буквы, первая прописная, остальные от 3 до 10 маленькие" /><br />
        <input type="text" name="prenume" placeholder="Введите ваше имя" /><br />	
        <p>Выберите день для посещения курсов:</p>
        <select name="zi" size="3">
            <option value="понедельник"> Понедельник</option>
            <option value="вторник"> Вторник</option>
            <option value="среда">Среда</option>
            <option value="четверг"> Четверг</option>
            <option value="пятница"  selected> Пятница</option>
            <option value="суббота"> Суббота</option>
            <option value="воскресенье"> Воскресенье</option>
        </select> 
        <br />
        <input type="reset" value="Сброс данных" />
        <input type="submit" value="Передать данные" name="start" />
	</form>
	</div>
	<?php 
	  if (isset($_REQUEST['start'])) { 
	    echo '<div class="rez_form">';
	    if (empty($_REQUEST['nume']) || empty($_REQUEST['prenume']) || empty($_REQUEST['zi'])) { 	
	      echo "Заполните пожалуйста все поля!!!"; 	
	    } else {  
	      echo "Добро пожаловать на наш сайт <b>" . $_POST['nume']. " " . $_POST['prenume'] . "</b>.<br />";
	      echo "Вы сможете посетить наш курс по <b> " . $_POST['zi'] . "-ам</b>.";
	      
	      if ($_POST['zi'] == 'воскресенье' || $_POST['zi'] == 'суббота') {
	        echo "<br /> Будет достаточного времени для изучения предложенной информации!";
	      }
	    }
	    echo "</div>";
	  } 
	?>
</body>
</html>
