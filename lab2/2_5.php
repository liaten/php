<?php

    function input(string $s){
        do{
            $num = "";
            echo $s . ": ";
            fscanf(STDIN, "%d", $num);
            $result = $num<=0;
            if($result){
                echo "Введено не число, большее 0.\n";
            }
        }while($result);
        return $num;
    }

    function transpose($array) {
        return array_map(null, ...$array);
    }

    $m = input("Столбцы");
    $n = input("Строчки");
    $min = 10;
    $max = 99;
    $arr = array();

    for($i=0;$i<$n;$i++){
        $new_arr = array();
        for($j=0;$j<$m;$j++){
            $num = rand($min,$max);
            array_push($new_arr,$num);
        }
        array_push($arr,$new_arr);
    }
    echo "Начальная матрица размером " . $m . "x" . $n . ":\n";
    for($i=0;$i<$n;$i++){
        for($j=0;$j<$m;$j++){
            echo $arr[$i][$j] . " ";
        }
        echo "\n";
    }
    $arr = transpose($arr);
    echo "Финальная матрица размером " . $n . "x" . $m . ":\n";
    for($i=0;$i<$m;$i++){
        for($j=0;$j<$n;$j++){
            echo $arr[$i][$j] . " ";
        }
        echo "\n";
    }
?>