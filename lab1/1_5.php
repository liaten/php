<?php
    function F(float $x){
        return ((abs($x-5)-sin($x))/3)+(sqrt(($x*$x)+2014)*cos(2*$x))-3;
    }
    echo F(-2.34) . "\n";
?>