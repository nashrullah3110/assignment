<?php

    $array = array(10,2,30,45,5,68,7,87);
    $sum = 0;
    foreach($array as $value)
    {
        $sum = ($sum+$value);
    }
    echo $sum;

?>