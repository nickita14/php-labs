<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Галерея изображений</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Галерея изображений</h1>
    </header>
    <nav>
        <ul>
            <li><a href="#">Главная</a></li>
            <li><a href="#">О нас</a></li>
            <li><a href="#">Контакты</a></li>
        </ul>
    </nav>
    <div class="wrapper">
        <div class="image-gallery">
            <?php
            // задаем путь до сканируемой папки с изображениями  
            $dir = 'imagini/';
            // Сканируем содержимое директории
            $files = scandir($dir);

            if ($files !== false) {
                for ($i = 0; $i < count($files); $i++) {
                    if (($files[$i] != ".") && ($files[$i] != "..")) {
                        $path = $dir.$files[$i];
                        echo "<div class='image-thumbnail'><a href='$path'><img src='$path' alt='Imagine' /></a></div>";
                    }
                }
            }
            ?>
        </div>
    </div>
    <footer>
        Copyright &copy; 2023. Все права защищены.
    </footer>
</body>
</html>
