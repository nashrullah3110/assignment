<?php

    $array = array(10,2,30,45,5,68,7,87);
    $sum = 0;
    $length = count($array);
    for ($i=0; $i < $length ; $i++) { 
        $sum = $sum+$array[$i];
    }
    echo $sum;

?>