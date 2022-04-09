<?php
    $s=readline("s: ");  
    $s_len = mb_strlen($s);
    $regex = '/[a-zA-Zа-яёА-ЯЁ]+/u';
    preg_match_all($regex, $s, $s_words);
    print_r($s_words);
    $out = "Количество введенных символов" . " = " . $s_len . ".\n";
    $out .= "Количество введенных слов" . " = " . count($s_words[0]). ".\n";
    echo $out;
?>