<?php
    $d=array('c','b','c', 12, 22, 'aaaaa', '', null);
    sort($d);
    echo "Сортировка по порядку:\n";
    //print_r($d); - не отображает разницу между пустой строкой и NULL
    var_dump($d);
    rsort($d);
    echo "Сортировка по обратному порядку:\n";
    var_dump($d);
?>