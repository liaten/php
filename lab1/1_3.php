<?php
function F(int $n){
    if($n > 1){
        return $n * F($n - 1);
    }
    else{
        return 1;
    }
}
    echo "Программа возвращает факториал числа N.\n";
    do{
        $N = "";
        echo "N: ";
        fscanf(STDIN, "%d", $N);
        $result = !is_numeric($N);
        if($result){
            echo "Введено не число.\n";
        }
    }while($result);
    echo "Факториал числа " . $N . " = " . F($N) . "\n";
?>