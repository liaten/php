<?php
    echo "Вычисление корней квадратного уровнения вида ax^2 + bx + c = 0\nВведите коэффициенты.\n";
    $data=array('a','b','c');
    for($i=0;$i<3;$i++){
        do{
            $input = "";
            echo $data[$i].": ";
            fscanf(STDIN, "%f", $input);
            $result = !is_numeric($input);
            if($result){
                echo "Введено не число.\n";
            }
        }while($result);
        array_push($data,$input);
    }
    if(($data[3]!=0) or ($data[4]!=0) or ($data[5]!=0)){
        if($data[3]+$data[4]+$data[5]==0){
            $x1 = $data[5]/$data[3];
            echo "2 корня: 1, " . $x1;
        }
        elseif($data[3]+$data[5]==$data[4]){
            $x1 = -1*$data[5]/$data[3];
            echo "2 корня: -1, " . $x1;
        }
        elseif($data[4]==0 and $data[5]==0){
            echo "1 корень: 0";
        }
        elseif ($data[4]==0 and $data[5]!=0) {
            $ca = (-1*$data[5]/$data[3]);
            if($ca>0){
                $x1 = sqrt($ca);
                $x2 = -1*$x1;
                echo "2 корня: " . $x1 . ", " . $x2;
            }
            elseif($ca<0){
                echo "Корней нет.";
            }
        }
        else{
            $D = $data[4]*$data[4]-4*$data[3]*$data[5];
            if($D<0){
                echo "Корней нет.";
            }
            elseif($D==0){
                $x = -1*($data[4]/(2*$data[3]));
                echo "1 корень: " . $x;
            }
            else{
                $x1 = (-1*($data[4])+sqrt($D))/(2*($data[3]));
                $x2 = (-1*($data[4])-sqrt($D))/(2*($data[3]));
                echo "2 корня: " . $x1 . ", " . $x2;
            }
        }
    }
    else{
        echo "Корней нет.";
    }
    echo "\n";
?>