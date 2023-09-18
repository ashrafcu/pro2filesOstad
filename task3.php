<?php
$number1=0;
$number2=1;
$number3=1;

    for ($i=0;$i<10;$i++) {
        echo $number1 . PHP_EOL;
        $number2=$number3;
        $number3=$number2+$number1;
        $number1=$number2;
        if($number1>100) {
            break;
        }

    }
echo "=================== \n";
?>