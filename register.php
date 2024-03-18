<?php
require 'db_connection.php';

$surname = $_POST['surname'];  
$name = $_POST['name'];
$patronymic = $_POST['patronymic'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$role = $_POST['role'];

$query = "INSERT INTO users (surname, name, patronymic, email, password, role) 
          VALUES ('$surname', '$name', '$patronymic', '$email', '$password', '$role')";
$result = mysqli_query($connection, $query);

if ($result) {
    echo "Пользователь успешно зарегистрировался";
} else {
    echo "Ошибка при регистрации пользователя";
}
?>



