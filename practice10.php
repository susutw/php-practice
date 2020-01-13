<?php

function factorial ($n) {
    $final = 1;
    for ($i = 1; $i <= $n; $i++) {
        $final = $final * $i;
    }
    echo $final;
}

factorial(8);