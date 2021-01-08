<?php

/**
 * ABC124-bの問題をテストする
 *
 * PHP Version 7.3.11
 *
 * @category Example
 * @package  None
 * @author   Vermee81 <hrksb5029@gmail.com>
 * @license  None license
 * @link     http://url.com
 */

/**
 * 海が見える旅館の数を返却する
 *
 * @param integer $N       旅館の数
 * @param array   $heights 旅館の高さ
 *
 * @return integer       海が見える旅館の数
 */
function countOceanView(int $N, array $heights)
{
    // 問題はこちらです
    // https://atcoder.jp/contests/abc124/tasks/abc124_b
    return 3;
}

/**
 * CountOceanViewをテストする
 *
 * @return void
 */
function check()
{
    if (countOceanView(4, [6,5,6,8]) != 3) {
        echo "Check 1 is wrong.";
        return;
    }
    if (countOceanView(5, [4,5,3,5,4]) != 3) {
        echo "Check 2 is wrong.";
        return;
    }
    if (countOceanView(5, [9,5,6,8,4]) != 1) {
        echo "Check 3 is wrong.";
        return;
    }
    echo "All Passed!!!";
}
check();
