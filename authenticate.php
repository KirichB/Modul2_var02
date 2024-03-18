<?php
session_start();
require 'db_connection.php';

$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($connection, $query);
$user = mysqli_fetch_assoc($result);

if ($user && password_verify($password, $user['password'])) {
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['role'] = $user['role'];

    if ($_SESSION['role'] === 'admin') {
        header("Location: admin_dashboard.php"); // Перенаправление на страницу администратора
    } else {
        header("Location: user_dashboard.php"); // Перенаправление на страницу пользователя
    }
} else {
    echo "Неверный адрес электронной почты или пароль";
}
?>
