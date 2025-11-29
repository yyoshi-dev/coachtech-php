<?php
// 関数の例題
// function addNumber($a, $b)
// {
//     $total = $a + $b;
//     return $total;
// }

// $result = addNumber(1, 4);
// print $result;


/*
【問題】
引数に $score1、$score2、$score3 を持ち、合計点が 210 より大きい時「合計点は OO なので合格です」、
そうではなかったら「合計点は OO なので不合格です」と表示する関数を作りなさい。
*/
// function addScore($score1, $score2, $score3)
// {
//     $total = $score1 + $score2 + $score3;
//     if ($total > 210) {
//         echo "合計点は" . $total . "点なので合格です";
//     } else {
//         echo "合計点は" . $total . "点なので不合格です";
//     }
// }

// echo addScore(1, 300, 1);


/*
【問題】
三角形・四角形・台形の面積を求める関数を定義して、面積を求めてみましょう。
*/
// 三角形の面積を求める関数
function calculateTriangle($base, $height)
{
    $area = $base * $height / 2;
    return $area;
}
// 四角形の面積を求める関数
function calculateRectangle($length, $width)
{
    $area = $length * $width;
    return $area;
}
// 台形の面積を求める関数
function calculateTrapezoid($top, $bottom, $height)
{
    $area = ($top + $bottom) * $height / 2;
    return $area;
}

echo calculateTriangle(7, 8) . "<br>";
echo calculateRectangle(5, 5) . "<br>";
echo calculateTrapezoid(4, 5, 4) . "<br>";
