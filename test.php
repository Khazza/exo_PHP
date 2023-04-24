<!DOCTYPE html>
<html>
<head>
    <title>Table de multiplication</title>
</head>
<body>
<table border="1">
    <?php
    for ($i=0; $i<=12; $i++) {
        echo "<tr>";
        for ($j=0; $j<=12; $j++) {
            if ($i == 0 && $j == 0) {
                echo "<td><b></b></td>";
            } else if ($i == 0) {
                echo "<td><b>$j</b></td>";
            } else if ($j == 0) {
                echo "<td><b>$i</b></td>";
            } else {
                echo "<td>" . ($i*$j) . "</td>";
            }
        }
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>