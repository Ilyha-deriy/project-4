<?php
class Currency{
    const EUR= "10";
    const UAH= "20";
    static function exchange($amount=20, $currency=20){
        if ($currency==self::EUR or $currency==self::UAH){
            return $amount * 30;
        }
        else{
            echo "Неправильная сумма";
        }
}
}
$money=new Currency();
echo $money::exchange();
?>