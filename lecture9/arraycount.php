<?php
$color=array('Red','Green','Yellow','Red');

$occurance=0;
$search="Yellow";

foreach ($color as $c) {
    if ($c==$search) {
        $occurance++;
    }
}
echo "$search color appears $occurance times(s)"
?>