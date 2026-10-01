<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Результат обработки данных</title>
</head>
<body>
    <h2>Полученные данные</h2>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $login = htmlspecialchars($_POST['login'] ?? '');
        $password = htmlspecialchars($_POST['password'] ?? '');
        $email = htmlspecialchars($_POST['email'] ?? '');
        $gender = htmlspecialchars($_POST['gender'] ?? 'Не указан');
        $city = htmlspecialchars($_POST['city'] ?? '');
        $about = nl2br(htmlspecialchars($_POST['about'] ?? ''));
        $subscribe = isset($_POST['subscribe']) ? 'Да' : 'Нет';

        echo "<p><strong>Логин:</strong> $login</p>";
        echo "<p><strong>Пароль:</strong> $password</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Пол:</strong> $gender</p>";
        echo "<p><strong>Город:</strong> $city</p>";
        echo "<p><strong>О себе:</strong> $about</p>";
        echo "<p><strong>Рассылка новостей:</strong> $subscribe</p>";
    } else {
        echo "<p>Данные не были переданы методом POST.</p>";
    }
    ?>
    <p><a href="form.html">Вернуться к форме</a></p>
</body>
</html>