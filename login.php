<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <link rel="stylesheet" href="styles.css"> <!-- Подключение файла стилей -->
</head>
<body>
<form class="form" method="post" action="authenticate.php" onsubmit="return validateForm()">
    <input type="text" class="rounded-input" name="email" placeholder="Email" required>
    <input type="password" class="rounded-input" name="password" placeholder="Пароль" required>
    <button  class="rounded-button"  type="submit">Login</button>
</form>
</body>
</html>


