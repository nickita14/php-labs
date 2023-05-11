<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Шахматная доска</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table>
        <tr>
            <td class="notation"></td>
            <?php
            $letters = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H'];
            foreach ($letters as $letter) {
                echo "<th class='notation'>$letter</th>";
            }
            ?>
            <td class="notation"></td>
        </tr>
        <?php
        for ($row = 1; $row <= 8; $row++) {
            echo "<tr>";
            echo "<th class='notation'>" . (9 - $row) . "</th>";
            for ($col = 1; $col <= 8; $col++) {
                $color = (($row + $col) % 2 == 0) ? 'white' : 'black';
                echo "<td class='$color'></td>";
            }
            echo "<th class='notation'>" . (9 - $row) . "</th>";
            echo "</tr>";
        }
        ?>
        <tr>
            <td class="notation"></td>
            <?php
            foreach ($letters as $letter) {
                echo "<th class='notation'>$letter</th>";
            }
            ?>
            <td class="notation"></td>
        </tr>
    </table>
</body>
</html>
