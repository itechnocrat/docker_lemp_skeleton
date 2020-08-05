<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Attempting MySQL connection</title>
</head>
<body>
    
<h4>Attempting MySQL connection from php...</h4>
<?php

$host = 'db';
$user = 'root';
$pass = 'r00t';
$link = mysqli_connect($host, $user, $pass);
if (!$link) {
    die('Ошибка соединения: ' . mysqli_error());
}
echo 'Успешно соединились';
mysqli_close($link);
?>

</body>
</html>
