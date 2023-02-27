<?php

// Шаг 1: Создать массив с 20 элементами
$array = array(); // Создаем пустой массив
for($i=1; $i<=7; $i++) { // Цикл по количеству массивов (5)
    for($j=1; $j<=4; $j++) { // Цикл по количеству значений в каждом массиве (4)
        $array[] = $i; // Добавляем значение в массив
    }
}

// Шаг 2: Перемешать массив
shuffle($array); // Перемешиваем массив случайным образом

// Шаг 3: Разбить массив на 5 подмассивов по 4 элемента
$subarrays = array_chunk($array, 4); // Разбиваем массив на подмассивы длиной 4 элемента

// Шаг 4: Проверить каждый подмассив на наличие повторяющихся значений
foreach($subarrays as $subarray) { // Цикл по всем подмассивам
    while(count(array_unique($subarray)) < 4)  { // Если в подмассиве менее 4 уникальных элементов
        shuffle($array); // Перемешиваем исходный массив
        $subarray = array_slice($array, 0, 4); // Заменяем подмассив на новый
    }
}

// Шаг 5: Вывести массив в виде таблицы
echo "<table>"; // Начинаем таблицу
foreach($subarrays as $subarray) { // Цикл по всем подмассивам
    echo "<tr>"; // Начинаем строку таблицы
    foreach($subarray as $value) { // Цикл по всем элементам подмассива
        echo "<td>".$value."</td>"; // Выводим значение в ячейку таблицы
    }
    echo "</tr>"; // Заканчиваем строку таблицы
}
echo "</table>"; // Заканчиваем таблицу

?>