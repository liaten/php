<?php
    $arr = array();
    $result = 1;
    $s = "";
    $N = 10;
    for($i=0;$i<$N;$i++){
        $num = rand(1,20);
        array_push($arr,$num);
        $result*=($num+1);
        $s .= "(1+".$num.")";
        if($i!=$N-1){
            $s .= " * ";
        }else{
            $s .= " = ";
        }
    }
    $s.=$result."\n";
    echo $s;
?>