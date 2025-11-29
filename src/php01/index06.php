<?php
// for文の例
// for ($i = 1; $i <= 5; $i++) {
//     echo ($i * 2) . "<br>";
// }


// while文の例1
// $count = 0;

// while ($count < 20) {
//     $count += 1;
//     echo $count . "<br>";
// }


// while文の例2
// $count = 0;

// while ($count <= 100) {
//     if ($count === 20) {
//         break;
//     }
//     if ($count % 3 === 0) {
//         $count += 1;
//         continue;
//     }
//     echo $count . "<br>";
//     $count += 1;
// }


// do...while文の例
// $num = 0;

// do {
//     echo "num = " . $num . "<br>";
//     $num++;
// } while ($num < 3);


// 応用問題 FizzBuzz問題を解いてみよう
// for ($i = 1; $i <= 50; $i++) {
//     if ($i % 3 === 0 && $i % 5 === 0) {
//         echo "FizzBuzz" . "<br>";
//     } elseif ($i % 3 === 0) {
//         echo "Fizz" . "<br>";
//     } elseif ($i % 5 === 0) {
//         echo "Buzz" . "<br>";
//     } else {
//         echo $i . "<br>";
//     }
// }


// 応用問題 二重ループを使用して、結果が以下のようになるコードを記述しましょう。
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        echo "●";
    }
    echo "<br>";
}
