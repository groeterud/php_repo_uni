<?php

function larger (float $a, float $b): float{
    if ((isset($a)==false) || (isset($b)==false)) return false;
    if ($a > $b) return $a;
    return $b;
}

$a = 1; $b = 2.5; $c = 1.9; 
echo 'The largest number is: '.larger($a,$b).'<br/>';
echo 'The largest number is: '.larger($c,$a).'<br/>';
echo 'The largest number is: '.larger($d,$b).'<br/>';

?>