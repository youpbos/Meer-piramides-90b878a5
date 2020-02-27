<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table cellspacing="0">
        <?php
        for ($i = 0; $i < 10; $i++) {
            echo "<tr>";
            for ($collom = 0; $collom < $i; $collom++) {
                echo "<td height=70px width=70px bgcolor=#000000></td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>