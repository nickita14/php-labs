<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Форма обратной связи</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="stilDiv">
    <form action="formular.php" method="post">
      <fieldset>
        <legend>Ваше мнение очень важное для нас!</legend>
        <p>
          <label for="nume">Введите фамилию:</label>
          <input type="text" name="nume" value="<?php echo isset($_POST['nume']) ? $_POST['nume'] : ''; ?>" />
        </p>
        <p>
          <label for="prenume">Введите имя:</label>
          <input type="text" name="prenume" value="<?php echo isset($_POST['prenume']) ? $_POST['prenume'] : ''; ?>" />
        </p>
        <p>
          <label for="email">Ваш е-майл:</label>
          <input type="text" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>" />
        </p>
        <p>
          Удовлетворены нашими товарами?<br />
          <input type="radio" name="optiune" value="Da" <?php echo (isset($_POST['optiune']) && $_POST['optiune'] == 'Da') ? 'checked' : ''; ?> />Хорошие<br />
          <input type="radio" name="optiune" value="Nu" <?php echo (isset($_POST['optiune']) && $_POST['optiune'] == 'Nu') ? 'checked' : ''; ?> />Нехорошие<br />
          <input type="radio" name="optiune" value="Nu stiu" <?php echo (isset($_POST['optiune']) && $_POST['optiune'] == 'Nu stiu') ? 'checked' : ''; ?> />Не могу высказаться
        </p>
        <p>
          Оставьте ваше мнение насчет качества услуг предоставленные сотрудниками нашей компании:<br />
          <textarea name="comentariu" rows="10" cols="30"><?php echo isset($_POST['comentariu']) ? $_POST['comentariu'] : ''; ?></textarea>
        </p>
        <p>
          <input type="reset" value="Удалить">
          <input type="submit" value="Передать">
        </p>
      </fieldset>
    </form>
  </div>
  <div class="rezultat">
    <?php
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nume = isset($_POST['nume']) ? $_POST['nume'] : '';
        $prenume = isset($_POST['prenume']) ? $_POST['prenume'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $optiune = isset($_POST['optiune']) ? $_POST['optiune'] : '';
        $comentariu = isset($_POST['comentariu']) ? $_POST['comentariu'] : '';
        
        if (!empty($nume) && !empty($prenume) && !empty($email) && !empty($comentariu)) {
          echo 'Ваша фамилия: <b>' . $nume . '</b>, а ваше имя: <b>' . $prenume . '</b><br />';
          echo 'Ваш е-майл адрес: <b>' . $email . '</b><br /><br />';
          echo 'На вопрос "Нравятся ли вам наши товары", вы ответили: <b>' . $optiune . '</b>, а ваш комментарий:<br />';
          echo '<i>' . $comentariu . '</i>';
        } else {
          echo 'Пожалуйста, заполните все обязательные поля.';
        }
      }
    ?>
  </div>
</body>
</html>
