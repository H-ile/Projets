<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <h1>Ph15 : tableau</h1>
    <?php
    $colone = 1000
;
    $ligne = 4;
    echo "$colone colone(s) <br>";
    echo "$ligne ligne(s)";
    echo "<table>";
    for ($i = 1; $i <= 10; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= 20; $j++) {
            if ($i == 1) {
                echo "<td>" . $j . "</td>";
            } else {
                if ($j == 1) {
                    echo "<td>" . $i . "</td>";
                } else {
                    echo "<td><img src=unknown.png></td>";
                }
            }
        }  
        echo "</tr>";
    }
    echo "</table>";

    ?>
</body>

</html>