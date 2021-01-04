<?php
function printEve($d){
    // 問題はこちらです
    // https://atcoder.jp/contests/abc115/tasks/abc115_a
    if($d == 25){
        return "Christmas";
    }
    elseif($d == 24){
        return "Christmas Eve";
    }
    elseif($d == 23){
        return "Christmas Eve Eve";
    }
    elseif($d == 22){
        return "Christmas Eve Eve Eve";
    }
}
function check(){
    if (printEve(25) != "Christmas") {
        echo "Error in check1.";
        return;
    }
    if (printEve(22) != "Christmas Eve Eve Eve") {
        echo "Error in check2.";
        return;
    }
    echo "All Passed!!!";
    
}

check();
?>
