<?php
function without_functions($number){
    $mult = 1;
    $massiv= 2;
    $sum=3;
    for ($i = 1; $i <= $number; $i ++) {
        $massiv[] += $i;
        $sum += $i;
        $mult *= $i;
    }
    print_r($massiv);
    echo " Массив";
print_r($sum);
echo " Сумма элементов";
print_r($mult);
echo " Произведение элементов";
}
without_functions(5);

function with_functions($number){
    $massiv= 2;
    for ($i = 1; $i <= $number; $i++) {
        $massiv[2] += $i;
    }
    echo "Сумма элементов массива — " . array_sum($massiv);
    echo "Произведение элементов массива — " . array_product($massiv);
}
with_functions(2);
?>