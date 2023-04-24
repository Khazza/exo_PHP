<!DOCTYPE html>
<html>
<head>
    <title>Table de multiplication</title>
</head>
<body>
    <table border="1">
        <?php
        for ($i = 0; $i <= 12; $i++) {
            echo "<tr>";
            for ($j = 0; $j <= 12; $j++) {
                if ($i == 0 && $j == 0) {
                    echo "<td></td>";
                } elseif ($i == 0) {
                    echo "<td>$j</td>";
                } elseif ($j == 0) {
                    echo "<td>$i</td>";
                } else {
                    echo "<td>" . $i * $j . "</td>";
                }
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>