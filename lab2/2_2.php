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

    function swapByIndex($values,$index1,$index2){
        $value1=$values[$index1];
        $value2=$values[$index2];
        $values[$index1]=$value2;
        $values[$index2]=$value1;
        return $values;
    }

    $m = input("Столбцы");
    $n = input("Строчки");
    $min = 10;
    $max = 99;
    $min_existing = $max;
    $min_str = 0;
    $max_existing = $min;
    $max_str = 0;
    $arr = array();
    
    for($i=0;$i<$n;$i++){
        $new_arr = array();
        for($j=0;$j<$m;$j++){
            $num = rand($min,$max);
            if($num>$max_existing){
                $max_existing = $num;
                $max_str = $i;
            }
            if($num<$min_existing){
                $min_existing = $num;
                $min_str = $i;
            }
            array_push($new_arr,$num);
        }
        array_push($arr,$new_arr);
    }

    echo "Начальная матрица размером " . $m . "x" . $n . ":\n";
    $minStrEqMaxStr=$min_str==$max_str;
    for($i=0;$i<$n;$i++){
        
        if($minStrEqMaxStr){
            if($i==$min_str){
                echo "min(".$min_existing.")max(".$max_existing.") -> ";
            }
            else{
                for($k=0;$k<18;$k++){
                    echo " ";
                }
            }
        }
        elseif($i==$min_str){
            echo "min(". $min_existing .") -> ";
        }
        elseif($i==$max_str){
            echo "max(". $max_existing .") -> ";
        }
        else{
            for($k=0;$k<11;$k++){
                echo " ";
            }
        }

        for($j=0;$j<$m;$j++){
            echo $arr[$i][$j] . " ";
        }
        echo "\n";
    }
    if(!$minStrEqMaxStr){
        $arr = swapByIndex($arr,$min_str,$max_str);
        echo "Финальная матрица:\n";
        for($i=0;$i<$n;$i++){
            for($j=0;$j<$m;$j++){
                echo $arr[$i][$j] . " ";
            }
            echo "\n";
        }
    }
    else{
        echo "Строки совпали.\n";
    }
?>