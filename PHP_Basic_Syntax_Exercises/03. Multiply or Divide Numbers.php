<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>
    <form>
        N: <input type="text" name="num1" />
		M: <input type="text" name="num2" />
        <input type="submit" />
    </form>
    <?php
        if (isset($_GET['num1']) && isset($_GET['num2'])){
            $num1 = doubleval($_GET['num1']);
            $num2 = doubleval($_GET['num2']);

            if ($num2 >= $num1){
                $result = $num1 * $num2;
            }
            else{
                $result = $num1 / $num2;
            }

            echo $result;
        }
    ?>
</body>
</html>