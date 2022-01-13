<?php
    $frameworks = array("Mrs. Glen Batz","Brayan Larkin","Braden Price","Angelita Marquardt");
    $name = $_GET["name"];
    if (strlen($name) > 0) {
        $match = "";
        for ($i = 0; $i < count($frameworks); $i++) {
            if (strtolower($name) == strtolower(substr($frameworks[$i],0,strlen($name)))) {
                if ($match == "") {
                    $match = $frameworks[$i];
                }
                else {
                    $match = $match . " , " . $frameworks[$i];
                }
            }
        }
    }
    echo ($match == "") ? 'no match found' : $match;
?>