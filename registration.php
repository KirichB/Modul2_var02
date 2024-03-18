<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="styles.css"> <!-- Подключение файла стилей -->
</head>
<body>
    <form class="form" method="post" action="register.php" onsubmit="return validateForm()">
        <input type="text" class="rounded-input" name="surname" placeholder="Фамилия" required>
        <input type="text" class="rounded-input" name="name" placeholder="Имя" required>
        <input type="text" class="rounded-input" name="patronymic" placeholder="Отчество">
        <input type="text" class="rounded-input" name="email" placeholder="Email" required>
        <input type="password" class="rounded-input" name="password" placeholder="Пароль" required>
        <select class="rounded-select" name="role">
            <option value="user">Пользователь</option>
        </select>
        <button class="rounded-button" type="submit">Зарегистрироваться</button>
    </form>

    <script>
        function validateForm() {
            var surname = document.querySelector('input[name="surname"]').value.trim();
            var name = document.querySelector('input[name="name"]').value.trim();
            var email = document.querySelector('input[name="email"]').value.trim();
            var password = document.querySelector('input[name="password"]').value.trim();

            if (surname === '' || name === '' || email === '' || password === '') {
                alert('Пожалуйста, заполните все обязательные поля.');
                return false;
            }

            

            return true; 
        }
    </script>
</body>
</html>



