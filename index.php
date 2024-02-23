<?php
declare(strict_types = 1);
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Моя форма</title>
</head>
<body>
<?php
if (!empty($_SESSION['username'])) {
    echo "<p>Привет, " . htmlspecialchars($_SESSION['username']) . "!</p>";
    echo '<a href="exit.php">Выйти</a>';
} else {
    include 'author_info.html';
    include 'user_form.html';
}
?>
</body>
</html>