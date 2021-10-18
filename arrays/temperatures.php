<?php
$temps = array (78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65,
74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

/* smart way
$avg_temp = array_sum($temps) / count($temps);
*/

//other way
$length=0;
$sum=0;

foreach($temps as $temp) {
    $sum += $temp;
    $length++;
}
$avg_temp = $sum / $length;
echo "The average temperature is: ".number_format($avg_temp,1);

//remove duplicates
$temps = array_unique($temps);

//sort ascending order
sort($temps);
echo "The five lowest temperatures is: ".$temps[0]. ", " .$temps[1].", ".$temps[2].", ".$temps[3].", ".$temps[4];

//sort desc
rsort($temps);
echo "The five highest temperatures is: ".$temps[0].", " .$temps[1].", ".$temps[2].", ".$temps[3].", ".$temps[4];
?>