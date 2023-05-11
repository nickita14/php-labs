<!DOCTYPE html>
<html>
<head>
    <meta charset=utf-8 />
    <title>Документ без названия</title>
</head>
<body>
<?php
    //определение двумерного массива
    $noteInfo = array( 
        array(1, "Иванов", "Иван", 7),
        array(2, "Ковалев", "Елина", 9),
        array(3, "Аванесов", "Татиана", 8),
        array(4, "Гурэу", "Ана", 10),
        array(5, "Дедин", "Кэтэлин",  9),
        array(6, "Китороагэ", "Вера",  8),
        array(7, "Жосан", "Сергей",  7),
        array(8, "Петров", "Алексей",  10), // добавленная строка
        array(9, "Сидоров", "Антон",  9) // добавленная строка
    );
?>
<table border = "1">
    <tr style = "background-color: #4CAF50; color: #fff">
    <th colspan = "4">Оценки учеников 10-го класса, по информатике</th>
    </tr>
    <tr style = "background-color: #4CAF50; color: #fff">
        <th>П.н.</th>
        <th>Фамилия</th>
        <th>Имя</th>
        <th>Оценка</th>
    </tr>
    <?php
        for ($linie = 0; $linie < count($noteInfo); $linie++) {
            echo "<tr>";
            for ($coloana = 0; $coloana <= 3; $coloana++) {
                echo "<td>" . $noteInfo[$linie][$coloana] . "</td>";
            }
            echo "</tr>";
        }
    ?>
</table>

<?php
function average_grade($noteInfo) {
    $total_grade = 0;
    $students_count = count($noteInfo);
    for ($i = 0; $i < $students_count; $i++) {
        $total_grade += $noteInfo[$i][3];
    }
    $average = $total_grade / $students_count;
    return $average;
}

echo "<br/>Средняя оценка учеников: " . average_grade($noteInfo);

function students_with_high_grades($noteInfo, $min_grade = 8) {
    $count = 0;
    for ($i = 0; $i < count($noteInfo); $i++) {
        if ($noteInfo[$i][3] > $min_grade) {
            $count++;
        }
    }
    return $count;
}

echo "<br/>Количество учеников с оценкой выше 8: " . students_with_high_grades($noteInfo);
?>
</body>
</html>
