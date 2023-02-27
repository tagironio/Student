<?php

// Количество id, которые будут выбираться
$count = 10;

// Подключение к базе данных
$conn = mysqli_connect("localhost", "root", "", "study");

// Проверка соединения
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// SQL запрос для выборки данных из таблицы "study"
$sql = "SELECT `id`, `username` FROM data WHERE `username` LIKE '%example%' AND id <= 8 ORDER BY id ASC LIMIT $count";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Вывод данных в массив
    $array = array();
    while($row = mysqli_fetch_assoc($result)) {
        $array[] = $row['id'];
    }

    // Разбиение массива на подмассивы
    $subarrays = array_chunk($array, 4);
    $usedValues = array();

    foreach($subarrays as $subarray) {
        for($i=0; $i<4; $i++) {
            $value = $subarray[$i];
            $id = $i+1;

            while(in_array($value, $usedValues) || $value == $id) {
                $value++;
                if($value > 8) {
                    $value = 1;
                }
            }

            $subarray[$i] = $value;
            $usedValues[] = $value;
        }

        echo '<pre>';
        print_r($subarray);
        echo '</pre>';
    }
} else {
    echo "0 results";
}

// Закрытие соединения с базой данных
mysqli_close($conn);

?>