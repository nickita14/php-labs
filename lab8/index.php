<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

    if (!empty($name) && !empty($email) && !empty($message)) {
        $data = "Имя: $name\nЕ-майл: $email\nМнение: $message\n\n";
        file_put_contents('data.txt', $data, FILE_APPEND);
    }
}
?>