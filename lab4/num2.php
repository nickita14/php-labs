<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Пример формы</title>
</head>
<body>
  <h1>Введите значения для арифметических операций:</h1>
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <p>
      <label for="num1">Число 1:</label>
      <input type="number" name="num1" id="num1" value="<?php echo isset($_POST['num1']) ? $_POST['num1'] : ''; ?>" />
    </p>
    <p>
      <label for="num2">Число 2:</label>
      <input type="number" name="num2" id="num2" value="<?php echo isset($_POST['num2']) ? $_POST['num2'] : ''; ?>" />
    </p>
    <p>
      <label for="op">Операция:</label>
      <select name="op" id="op">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
      </select>
    </p>
    <p>
      <input type="submit" value="Выполнить" />
    </p>
  </form>

  <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $num1 = isset($_POST['num1']) ? $_POST['num1'] : '';
        $num2 = isset($_POST['num2']) ? $_POST['num2'] : '';
        $op = isset($_POST['op']) ? $_POST['op'] : '';
        $result = '';

        switch ($op) {
            case '+':
            $result = $num1 + $num2;
            break;
            case '-':
            $result = $num1 - $num2;
            break;
            case '*':
            $result = $num1 * $num2;
            break;
            case '/':
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = 'Ошибка: деление на ноль';
            }
            break;
        }

        echo '<h2>Результат:</h2>';
        echo '<p>' . $result . '</p>';
    }
  ?>
</body>
</html>
