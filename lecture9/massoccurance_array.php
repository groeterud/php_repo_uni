<?php

$temp_array = array (78,60,62,68,71,68,68,73,85,66,64,76,63,81,76,73,68,72,73,75,65,74,63,67,65,64,68,73,75,79,73,85,85);
sort($temp_array);
$smallest=$temp_array[0];
rsort($temp_array);
$biggest=$temp_array[0];

for ($i=$smallest; $i<=$biggest; $i++) {
    $count=0;
    foreach ($temp_array as $value) {
        if ($value==$i) {
            $count++;
        }
    }
    if ($count==1) {
        echo "$i appeared once</br>";
        
    }
    else if($count>0) {
        echo "$i appeared $count times</br>";
    }
}

?>