<?php
    $array = array(12,2,30,5,68,7,8,7,-2);
    $value = 10;
    $a=1;
    $length = count($array);
        for ($i=0; $i < $length ; $i++)
        { 
           
            for ($j=$i+1; $j < $length; $j++)
            { 
                if (($array[$i] + $array[$j])==$value)
                {
                    echo "Pair ". $a .": " . $array[$i]. ", ". $array[$j]."<br>";
                    $a++;
                }
            }
        }
   
?>