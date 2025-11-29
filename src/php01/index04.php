<?php
// 算術演算子の例
// $a = 15;
// $b = 3;
// $c = 10;

// echo $a + $b;
// echo "<br>";
// echo $a - $b;
// echo "<br>";
// echo $a * $b;
// echo "<br>";
// echo $a / $b;
// echo "<br>";
// echo $a % $c;


// 複合演算子の例
// $a = 15;
// $b = 3;
// $c = 10;
// $d = 5;

// $a = $b;
// $c += $d;

// echo $a;
// echo "<br>";
// echo $c;


// 比較演算子の例
// $a = 20;
// $b = 5;

// echo ($a > $b);


// 論理演算子の例
// $a = 20;
// $b = 5;

// echo ($a > 10 && $a < 30);


// 加算子と減算子の例
// $a = $b = 10;
// $c = $d = 5;

// echo ++$a;
// echo "<br>";
// echo $b++;
// echo "<br>";
// echo --$c;
// echo "<br>";
// echo $d--;
// echo "<br>";
// echo $a." ".$b." ".$c." ".$d;

$a = 5;
$b = ++$a; // 前置
echo "a=".$a.", b=".$b;
// $a は 6 に増える → $b に 6 が代入される
echo "<br>";

$a = 5;
$b = $a++; // 後置
echo "a=".$a.", b=".$b;
// $a の値 5 が先に返される → $b に 5 が代入される
// その後 $a は 6 に増える
