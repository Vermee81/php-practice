<?php
function fizzbuzz_calc($N){
    // 問題はこちら
    // https://atcoder.jp/contests/abc162/tasks/abc162_b
    $value=0;
    for($i=0; $i<=$N; $i++){
        if($i % 3 !=0 && $i % 5 !=0){
            $value = $value + $i;
        }
    }
    return $value; 
}

function check(){
    if (fizzbuzz_calc(15) != 60){
        echo "Check 1 is wrong.";
        return;
    }
    if (fizzbuzz_calc(1000000) != 266666333332){
        echo "Check 2 is wrong.";
        return;
    }
    echo "All Passed!!";
}
check();
?>

