<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>
</head>
<body>
<?php
for ($j = 1; $j <= 9; $j++){
    if ($j <= 5){
        echo "<button style='background-color: blue'>1</button>";
    }

    for ($i = 1; $i <= 4; $i++){
        if ($j == 1 || $j == 5 || $j == 9){
            echo "<button style='background-color: blue'>1</button>";
        }
        else{
            echo "<button>0</button>";
        }

    }

    if ($j > 5 && $j <= 9){
        echo "<button style='background-color: blue'>1</button>";
    }
    echo "<br>";

}
?>
</body>
</html>