<?php

// function 能把 string 反轉

function str_reverse($str) {
    $str2 = "";
    for ($i = strlen($str) - 1; $i >= 0; $i--) {
        //echo $str[$i];
        $str2 .= $str[$i];
    }
    echo $str2;
}
str_reverse("candy");