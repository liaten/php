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

function cezar(string $s, int $code){
    $s_len = mb_strlen($s);
    $new_str = "Результат:";
    for($i=0;$i<$s_len;$i++){
        $chr_code_old = ord($s[$i]); // код символа
        $chr_code_new = $chr_code_old + $code;
        // 65 - A
        // 90 - Z
        // 97 - a
        // 122 - z
        if($chr_code_old>=97 and $chr_code_old<=122){
            while($chr_code_new>122){
                $chr_code_new-=26;
            }
        }
        elseif($chr_code_old>=65 and $chr_code_old<=90){
            while($chr_code_new>90){
                $chr_code_new-=26;
            }
        }
        else{
            $old_chr = chr($chr_code_old);
            $new_str .= $old_chr;
            continue;
        }
        $new_chr = chr($chr_code_new);
        $new_str .= $new_chr;
    }
    $new_str.="\n";
    echo $new_str;
}

    $s=readline("s: ");
    $c=input("Сдвиг");
    cezar($s,$c);
    
?>