<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            margin: 0 auto;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "biblioteka";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT user_id, surname, name, patronymic, email, role FROM Users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>User ID</th><th>Surname</th><th>Name</th><th>Patronymic</th><th>Email</th><th>Role</th><th>Action</th></tr>";
   
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["user_id"]. "</td><td>" . $row["surname"]. "</td><td>" . $row["name"]. "</td><td>" . $row["patronymic"]. "</td><td>" . $row["email"]. "</td><td>" . $row["role"]. "</td><td><button>Изменить</button><button>Удалить</button></td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>

</body>
</html>