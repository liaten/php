<?php
    function F(int $m){
        switch($m){
            case 1: return "январь";
            case 2: return "февраль";
            case 3: return "март";
            case 4: return "апрель";
            case 5: return "май";
            case 6: return "июнь";
            case 7: return "июль";
            case 8: return "август";
            case 9: return "сентябрь";
            case 10: return "октябрь";
            case 11: return "ноябрь";
            case 12: return "декабрь";
        }
    }
    echo "Программа возвращает месяц по номеру.\n";
    do{
        $N = "";
        echo ": ";
        fscanf(STDIN, "%d", $N);
        $result = !(($N>=1) and ($N<=12));
        if($result){
            echo "Введёные данные - не число в пределах [1,12].\n";
        }
    }while($result);
    echo "Месяц числа " . $N . " = " . F($N) . "\n";
?>