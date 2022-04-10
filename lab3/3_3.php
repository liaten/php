<?php
    $s=readline("s: ");  
    $s_len = mb_strlen($s);
    $out = "Результат: ";
    for($i=0;$i<$s_len;$i++){
        $out .= $s[$s_len-$i-1];
    }
    $out .= "\n";
    echo $out
?>