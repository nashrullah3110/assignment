<?php

        $array = array(0,0,1,1,0,0,0,1,0,0,1,1,1,1,0);
        $count=0;
        $max=0;
        $length = count($array);
        for ($i=0 ; $i <$length  ; $i++ )
        { 
            if ($array[$i]==0)
            {
                $count=0;
            }
            else
            {
                $count++;
                $max= max($count,$max);
            }
        }
        echo $max;
?>