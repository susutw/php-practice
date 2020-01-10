<?php

$str1 = "football";
$str2 = "footboll";

for ($i=0; $i<strlen($str1); $i++) {
    if ($str1[$i] !== $str2[$i]) {
        echo "$str1[$i] , $str2[$i]";
    break;
    }
}