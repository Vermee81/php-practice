<?php
function printEve($d){
    // 問題はこちらです
    // https://atcoder.jp/contests/abc115/tasks/abc115_a
    // ここに解答を書いてください
    return "Christmas";
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
