<?php
    $pi = 3.14159265359;
	echo "Объём (1) - цилиндра, (2) - конуса, (3) - призмы.\n";
    do{
        $input = 0;
        echo ":";
        fscanf(STDIN, "%d", $input);
        $result = ($input<1)||($input>3);
        if($result){
            echo "Введены значения не в диапазоне 1-3.\n";
        }
    }while($result);
    // цилиндр = pi * r^2 * h
    // конус = 1/3 * pi * r^2 * h
    // призма = S осн * h
    $output = "Площадь ";
    switch($input){
        case 1:
            $output.="цилиндра = pi * r^2";
            break;
        case 2:
            $output.="конуса = 1/3 * pi * r^2";
            break;
        case 3:
            $output.="призмы = S(осн)";
            break;
    }
    $output.=" * h.\n";
	echo $output;
    switch($input){
        case 1:
            echo "Значение r(радиус).\n";
            do{
                $r = -1;
                echo ":";
                fscanf(STDIN, "%f", $r);
                $result = ($r<=0);
                if($result){
                    echo "Введённое значение неудовлетворяет условиям (число, >0).\n";
                }
            }while($result);
            echo "Значение h(высота).\n";
            do{
                $h = -1;
                echo ":";
                fscanf(STDIN, "%f", $h);
                $result = ($h<=0);
                if($result){
                    echo "Введённое значение неудовлетворяет условиям (число, >0).\n";
                }
            }while($result);
            $result = $pi * $r * $r * $h;
            $output = "Находим объём: V = " . $pi . " * " . $r . "^2 * " . $h . " = " . $result;
            echo $output;
            break;
        case 2:
           echo "Значение r(радиус).\n";
           do{
               $r = -1;
               echo ":";
               fscanf(STDIN, "%f", $r);
               $result = ($r<=0);
               if($result){
                   echo "Введённое значение неудовлетворяет условиям (число, >0).\n";
               }
           }while($result);
           echo "Значение h(высота).\n";
           do{
               $h = -1;
               echo ":";
               fscanf(STDIN, "%f", $h);
               $result = ($h<=0);
               if($result){
                   echo "Введённое значение неудовлетворяет условиям (число, >0).\n";
               }
           }while($result);
           $result = $pi * $r * $r * $h / 3;
           $output = "Находим объём: V = " . $pi . " * " . $r . "^2 * " . $h . " = " . $result;
           echo $output;
           break;
        case 3:
            echo "Значение S(осн).\n";
           do{
               $S = -1;
               echo ":";
               fscanf(STDIN, "%f", $S);
               $result = ($S<=0);
               if($result){
                   echo "Введённое значение неудовлетворяет условиям (число, >0).\n";
               }
           }while($result);
           echo "Значение h(высота).\n";
           do{
               $h = -1;
               echo ":";
               fscanf(STDIN, "%f", $h);
               $result = ($h<=0);
               if($result){
                   echo "Введённое значение неудовлетворяет условиям (число, >0).\n";
               }
           }while($result);
           $result = $S * $h;
           $output = "Находим объём: V = " . $S . " * " . $h . " = " . $result;
           echo $output;
           break;
    }
	echo "\n";
?>
