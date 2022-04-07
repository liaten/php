<?php
    function F(int $a, int $b, int $c){
        if($a==$b){
            if($b==$c){
                return null;
            }
            elseif($c>$a){
                return $c;
            }
            else{
                return $a;
            }
        }
        elseif($a==$c){
            if($b>$c){
                return $b;
            }
            else{
                return $c;
            }
        }
        elseif($b==$c){
            if($a>$b){
                return $a;
            }
            else{
                return $b;
            }
        }
        elseif($a>$b){
            if($a>$c){
                return $a;
            }
            else{
                return $c;
            }
        }
        else{
            if($b>$c){
                return $b;
            }
            else{
                return $c;
            }
        }
    }
    $d=array();
    echo "Программа возвращает наибольшее число.\n";
    for($i=0;$i<3;$i++){
        do{
            $input = "";
            echo "n" . ($i+1) . ": ";
            fscanf(STDIN, "%f", $input);
            $result = !is_numeric($input);
            if($result){
                echo "Введено не число.\n";
            }
        }while($result);
        array_push($d,$input);
    }
    $result = F($d[0],$d[1],$d[2]);
    if(is_null($result)){
        echo "Наибольшего числа нет.\n";
    }
    else{
        echo "Наибольшее число = " . $result . "\n";
    }
?>