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

    function multiply($m, $mat1, $mat2){
    for ($i = 0; $i < $m; $i++){
        for ($j = 0; $j < $m; $j++){
            $res[$i][$j] = 0;
            for ($x = 0; $x < $m; $x++){
                $res[$i][$j] += $mat1[$i][$x] *
                                $mat2[$x][$j];
            }
        }
    }
    return $res;

    /*
    for ($i = 0; $i < $m; $i++){ 
        for ($j = 0; $j < $m; $j++){ 
            echo $res[$i][$j] . " "; 
            }
        echo "\n";
        }
        */
    }

    $n = input("Размер квадратной матрицы");
    $min = 1;
    $max = 9;
    $arr1 = array();
    $arr2 = array();

    for($i=0;$i<$n;$i++){
        $new_arr = array();
        $new_arr2 = array();
        for($j=0;$j<$n;$j++){
            $num = rand($min,$max);
            $num2 = rand($min,$max);
            array_push($new_arr,$num);
            array_push($new_arr2,$num2);
        }
        array_push($arr1,$new_arr);
        array_push($arr2,$new_arr2);
    }

    $s = "Начальная матрица №1 размером " . $n . "x" . $n . ":\n";
    for($i=0;$i<$n;$i++){
        for($j=0;$j<$n;$j++){
            $s.= $arr1[$i][$j] . " ";
        }
        $s.= "\n";
    }
    $s.= "Начальная матрица №2 размером " . $n . "x" . $n . ":\n";
    for($i=0;$i<$n;$i++){
        for($j=0;$j<$n;$j++){
            $s.= $arr2[$i][$j] . " ";
        }
        $s.= "\n";
    }
    $s.="Произведение матриц:\n";
    $result = multiply($n,$arr1,$arr2);
    for($i=0;$i<$n;$i++){
        for($j=0;$j<$n;$j++){
            if($j==$n-1){
                $s .= $arr1[$i][$j];
                if($i==0){
                    $s.=" * ";
                }
                else{
                    for($ii=0;$ii<3;$ii++){
                        $s.=" ";
                    }
                }
                for($k=0;$k<$n;$k++){
                    if($k==$n-1){
                        if($i==0){
                            $s .= $arr2[$i][$j];
                            $s.=" = ";
                        }
                        else{
                            $s .= $arr2[$i][$j];
                            for($ii=0;$ii<3;$ii++){
                                $s.=" ";
                            }
                        }
                    }
                    else{
                        $s .= $arr2[$i][$k] . " ";
                    }
                   
                }
            }
            else{
                $s .= $arr1[$i][$j] . " ";
            }
        }
        $s .= "\n";
    }
    for($i = 0; $i<$n;$i++){
        for($j=0;$j<$n;$j++){
            if($i==0 and $j==0){
                $s.="= ";
            }
            elseif($j==0){
                $s.="  ";
            }
            $s.=$result[$i][$j]." ";
        }
        $s.="\n";
    }
    $s .= "\n";
    echo $s;
?>