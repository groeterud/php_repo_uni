<?php
    $marks=array(
        "Mohammad" => array(
            "physics" => 35,
            "maths" => 30,
            "chemistry" => 39
        ),
        "Qadir" => array(
            "physics" => 30,
            "maths" => 32,
            "chemistry" => 29
        ),
        "Zara" => array(
            "physics" => 31,
            "maths" => 22,
            "chemistry" => 39,
        )
    );

    echo "Marks for Zara in maths ";
    echo $marks['Zara']['maths'];

    // ADD value to end of array: 
    $marks[] = 'Andreas';

     // SEt value at specific point, index position also works
    $marks['Andreas']=array(
        'physics' => 10,
        'maths' => 99,
        'chemistry' => 15
    );
   
    echo $marks['Andreas']['maths'];
?>