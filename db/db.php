<?php

try {
    // Создаем объект PDO для подключения к базе данных MySQL
    $pdo = new PDO("mysql:host=localhost;dbname=study;charset=utf8mb4", "root", "");

    // Устанавливаем режим обработки ошибок: выбрасываем исключение
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Получаем имя пользователя из массива $_POST
    $username = $_POST["username"];

    // Формируем SQL-запрос для добавления имени пользователя в таблицу
    $sql = "INSERT INTO data (username) VALUES (:username)";

    // Подготавливаем запрос с использованием метода prepare объекта PDO
    $statement = $pdo->prepare($sql);

    // Связываем параметр :username с переменной $username
    // Используем метод bindValue, чтобы избежать SQL-инъекций
    $statement->bindValue(":username", $username, PDO::PARAM_STR);

    // Выполняем подготовленный запрос методом execute
    $statement->execute();

    // Выводим сообщение об успешном добавлении данных в базу данных
    echo "Данные успешно добавлены в базу данных!";
} catch (PDOException $e) {
    // Выводим сообщение об ошибке при добавлении данных в базу данных
    echo "Ошибка при добавлении данных в базу данных: " . $e->getMessage();
}

//$username = $_POST["username"];
//$pdo = new PDO("mysql:host = localhost; dbname = 'study';", "root", "");
//$sql = "INSERT INTO data (username) VALUES (:username)";
//$statement = $pdo->prepare($sql);
//$statement->execute(["username" => $username]);

?>


