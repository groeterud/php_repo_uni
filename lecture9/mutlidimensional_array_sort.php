<?php
$my_array = array(); 
$my_array[0]['name'] = 'Sana'; 
$my_array[0]['email'] = 'sana@example.com'; 
$my_array[0]['phone'] = '111-111-1234'; 
$my_array[0]['country'] = 'USA'; 

$my_array[1]['name'] = 'Robin'; 
$my_array[1]['email'] = 'robin@example.com'; 
$my_array[1]['phone'] = '222-222-1235'; 
$my_array[1]['country'] = 'UK'; 

$my_array[2]['name'] = 'Sofia'; 
$my_array[2]['email'] = 'sofia@example.com'; 
$my_array[2]['phone'] = '333-333-1236'; 
$my_array[2]['country'] = 'India'; 

$my_array[3]['name'] = 'Amir'; 
$my_array[3]['email'] = 'amir@example.com'; 
$my_array[3]['phone'] = '444-444-1237';
$my_array[3]['country'] = 'Norway';

$my_array[4]['name'] = 'John'; 
$my_array[4]['email'] = 'john@example.com'; 
$my_array[4]['phone'] = '555-555-1238'; 
$my_array[4]['country'] = 'Australia';

function sortByName($a,$b) {
    return $a['name'] > $b['name'];
}
function sortByEmail ($a,$b) {
    return $a['email'] > $b['email'];
}
function sortByPhone ($a,$b) {
    return $a['phone'] > $b['phone'];
}
function sortByCountry($a,$b) {
    return $a['country'] > $b['country'];
}
usort($my_array,'sortByCountry');
print_r($my_array);

?> 