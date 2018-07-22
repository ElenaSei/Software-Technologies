<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>
    <form>
        N: <input type="text" name="num" />
        <input type="submit" />
    </form>
    <?php
    if (isset($_GET['num'])){
        $num = intval($_GET['num']);

        $fib1 = 1;
        $fib2 = 1;
        $fib3 = 0;

        echo $fib1 . " ";
        echo $fib2 . " ";

        for($i = 0; $i < $num - 2; $i++){
            $fib3 = $fib1 + $fib2;

            echo $fib3 . " ";

            $fib1 = $fib2;
            $fib2 = $fib3;
        }
    }
    ?>
</body>
</html>