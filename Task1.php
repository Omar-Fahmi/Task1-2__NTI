<?php
    header('content-type: text/plain');
    $num1 = 10;
    $num2 = 20;
    echo "Before Swapping \n First Number = $num1 \n Second Number = $num2 \n";
    $num1 = $num1 + $num2;
    $num2 = $num1 - $num2;
    $num1 = $num1 - $num2;
    echo "After Swapping \n First Number = $num1 \n Second Number = $num2";
?>
