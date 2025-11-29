<?php
// 配列の例
// $people = array("Taro", "Jiro", "Saburo");

// var_dump($people);


// 連想配列の例
// $people = array(
//     "person1" => "Taro",
//     "person2" => "Jiro",
//     "person3" => "Saburo"
// );

// $people = [
//     "person1" => "Taro",
//     "person2" => "Jiro",
//     "person3" => "Saburo"
// ];

// var_dump($people);
// echo "<br>";
// echo $people["person2"];


// 多次元配列の例
// $people = [
//     [
//         "last_name" => "山田",
//         "first_name" => "太郎",
//         "age" => 29,
//         "gender" => "男性"
//     ],
//     [
//         "last_name" => "鈴木",
//         "first_name" => "次郎",
//         "age" => 25,
//         "gender" => "男性"
//     ],
//     [
//         "last_name" => "佐藤",
//         "first_name" => "花子",
//         "age" => 20,
//         "gender" => "女性"
//     ]
// ];

// echo $people[1]["last_name"];


// foreach文の例1
// $people = array("Taro", "Jiro", "Saburo");

// foreach ($people as $person) {
//     echo $person;
//     echo "<br>";
// }


// foreach文の例2
// $people = array(
//     "person1" => "Taro",
//     "person2" => "Jiro",
//     "person3" => "Saburo"
// );

// foreach ($people as $person => $name) {
//     print $person . "は" . $name . "です" . "<br>";
// }


// 問題 foreach文をつかって多次元配列の値をすべて出力してみましょう。
$people = [
    ["Taro", 25, "men"],
    ["Jiro", 20, "men"],
    ["hanako", 16, "women"]
];

foreach ($people as $person) {
    echo $person[0] . "(" . $person[1] . "歳" . $person[2] . ")" . "<br>";
}
