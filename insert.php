<!DOCTYPE html>
<html>
<body>

<h1>INSERT IN TABLE</h1>

<?php
$host = 'localhost';  // Хост, у нас все локально
$user = 'j1136241';    // Имя созданного вами пользователя
$pass = 'j1136241'; // Установленный вами пароль пользователю
$db_name = 'j1136241';   // Имя базы данных
$link = mysqli_connect($host, $user, $pass, $db_name); // Соединяемся с базой
// Ругаемся, если соединение установить не удалось
if (!$link) {
echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
exit;
}
else{echo "DB now: " .$db_name. '</br>';}
$sql = "INSERT INTO shop1 (	pname	, quantity	, price, image )
VALUES ('Индивидуальная программа обучения на один месяц', '1', '500', '	
images/fly123.jpg')";
if ($link->query($sql) === TRUE) {
$last_id = $link->insert_id;
echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
echo "Error: " . $sql . "<br>" . $link->error;
}
$link->close();
?>
</body>
</html>