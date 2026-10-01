<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Результат обработки данных</title>
</head>
<body>
    <h2>Ваш отзыв о наших услугах</h2>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = htmlspecialchars($_POST['name'] ?? '');
        $age = htmlspecialchars($_POST['age'] ?? '');
        $gender = htmlspecialchars($_POST['gender'] ?? 'Не указан');
        $interests = isset($_POST['interests']) && is_array($_POST['interests'])
            ? implode(', ', array_map('htmlspecialchars', $_POST['interests']))
            : 'Не выбрано';
        $opinion = nl2br(htmlspecialchars($_POST['opinion'] ?? ''));

        echo "<p><strong>Ваше имя:</strong> $name</p>";
        echo "<p><strong>Ваш возраст:</strong> $age</p>";
        echo "<p><strong>Ваш пол:</strong> $gender</p>";
        echo "<p><strong>Ваши интересы:</strong> $interests</p>";
        echo "<p><strong>Ваше мнение:</strong> $opinion</p>";
    } else {
        echo "<p>Данные не были переданы методом POST.</p>";
    }
    ?>
    <p><a href="form.html">Вернуться к форме</a></p>
</body>
</html>