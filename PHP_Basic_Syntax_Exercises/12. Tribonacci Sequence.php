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
        $fib3 = 2;

        $nextFib = 0;

        echo $fib1 . " ";
        echo $fib2 . " ";
        echo $fib3 . " ";

        for($i = 0; $i < $num - 3; $i++){
            $nextFib = $fib1 + $fib2 + $fib3;

            echo $nextFib . " ";

            $fib1 = $fib2;
            $fib2 = $fib3;
            $fib3 = $nextFib;
        }
    }
    ?>
</body>
</html>