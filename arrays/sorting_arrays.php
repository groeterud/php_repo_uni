<?php
    $names = array('Mike','Anna','Joel','Ray','Pren','Tafiq');
    sort($names); // sort in ascending order

    //foreach vs normal for
    foreach($names as $name) {
        echo $name." ";
    }
    //fck writing that many lines
    for ($i=0; $i<count($names);$i++) {
        echo $names[$i]." ";
    }

    $tax_rates = array (
        'NC' => 7.75,
        'NY' => 8.875,
        'CA' => 8.25    
    );
    // Sorting associated lists
    asort($tax_rates); //sort by value (ascending)
    ksort($tax_rates); //sort by key (asc)
    arsort($tax_rates); //sort by value (desc)
    krsort($tax_rates); //sort by key (desc)
    echo "<p></br></p>";
    // How to get key as well as value. 
    foreach($tax_rates as $city => $tax_rate) {
        echo "<p>Tax rate in $city is: $tax_rate </p>";
    }
?>