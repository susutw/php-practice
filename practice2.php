<?php

// $str = "Green";
$str = "abcdea";

for($i = 0; $i < strlen($str); $i++) {

    $findme = strtolower($str[$i]);

    for($j = 0; $j < strlen($str); $j++) {
        if ($i === $j) continue;
        if (strtolower($str[$i]) === strtolower($str[$j])) break;
        if ($j === strlen($str) - 1) {
            echo $str[$i];
            $abc = 1;
            break;
        }
    }
    if(isset($abc)) break;
}

?>