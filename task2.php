<?php
function getNums(int $startNo, int $endNo){
    for ($i=$startNo; $i<=$endNo; $i++) {
        if ($i %5 ==0) {
            continue;
        }
        echo $startNo*$i .PHP_EOL;
    } 
}
getNums(1,50);
echo "=================== \n";
?>