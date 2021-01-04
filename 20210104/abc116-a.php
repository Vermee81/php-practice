<?php

function calculate_area($ab, $bc, $ca){
    // 問題文はこちらです
    // https://atcoder.jp/contests/abc116/tasks/abc116_a
    return $ab*$bc/2;
}

function check(){
    if (calculate_area(3, 4, 5) != 6) {
        echo "Check 1 is wrong";
        return;
    }
    if (calculate_area(5, 12, 13) != 30) {
        echo "Check 2 is wrong";
        return;
    }
    if (calculate_area(45, 28, 53) != 630) {
        echo "Check 3 is wrong";
        return;
    }
    echo "All Passed!!!";
}

check();
?>
