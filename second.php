<?php

    $array = array(1,2,3,3,4,5,6,6,7,8);
    $num;
    $length = count($array);

        for ($i=0; $i < $length ; $i++)
        {
            if($i+1!= $length)
            {
                if ($array[$i]==$array[$i+1])
                {
                    echo $array[$i]."<br>";
                    $i=$i+2;
                }
            }
        }

?>