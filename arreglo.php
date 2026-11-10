<?php
    $nums=[];
    for($i=0; $i<50; $i++){
        $nums[$i]=rand(0,100);
    }
    echo "<h1>50 Numeros randoms</h1>";
    for($i=0; $i<50; $i++){
        echo $nums[$i];
        if($i<49){
            echo ", ";
        }
    }
?>