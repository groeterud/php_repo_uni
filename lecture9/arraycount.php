<?php
$color=array('Red','Green','Yellow','Red');

$occurance=0;

foreach ($color as $c) {
    if ($c=="Red") {
        $occurance++;
    }
}
echo "Red color appears $occurance times(s)"
?>