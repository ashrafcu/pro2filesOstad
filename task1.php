<?php
echo "============ \n"."For Loop \n";
function findEvenNumbers(){
    for($i=0; $i<20; $i%2==0) {
        echo $i+=2;
        echo "\n";
    }
}
findEvenNumbers();

echo "============ \n"."Do While \n";

function getEvenNumbers(){
    $n=0;
    do {
        echo $n+=2;
        echo "\n";
    } while ($n%2==0 && $n<20);
    
}
getEvenNumbers();
echo "============ \n"."While Loop \n";
function fetchEvenNumbers(int $n, int $max){
while ($n<=$max){
    echo $n . PHP_EOL;
    $n+=2;
}
}
fetchEvenNumbers(2,20);
?>