<?php
function initiateFibonacci(int $number1, int $number2, int $number3, int $finalNumber) {
    for ($i=0;$i<$finalNumber;$i++) {
        echo $number1 . PHP_EOL;
       $number2=$number3;
        $number3=$number2+$number1;
        $number1=$number2;

    }
}
initiateFibonacci(0,1,1,15);
echo PHP_EOL;
?>