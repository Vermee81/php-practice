<?php

function calculate_rating($n, $r){
    /*
    問題文はこちらです
    https://atcoder.jp/contests/abc156/tasks/abc156_a
    ここに解答を書いてください。
    */
    if($n<10){
        return 100*(10-$n)+$r;
    };
    
    if($n>=10){
        return $r;
    };

}
function check_answer(){
    if (calculate_rating(2, 2919) != 3719){
        echo "Check 1 is wrong.";
        return;
    };
    if (calculate_rating(22, 3051) != 3051){
        echo "Check 2 is wrong";
        return;
    }
    echo "All Passed!!!";
}
check_answer();

?>