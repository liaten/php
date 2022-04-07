<?php
    function isThreeDigit($x) {
        if ($x<1000 and $x>99) {
            return true;
        }
        else{
            return false;
        }
    }
    function swap($n){
        return $n%10*100 + $n/10%10 * 10 + $n/100%100;
    }
    do{
        $input = "";
        echo "n: ";
        fscanf(STDIN, "%d", $input);
        $result = !isThreeDigit($input);
        if($result){
            echo "Введено не трёхзначное число.\n";
        }
    }while($result);
    echo "Результат: " . swap($input) . "\n";
?>