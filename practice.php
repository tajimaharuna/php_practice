<?php
echo 'Hello php!';

$a = 3;
$b = 7;
echo $a + $b;

$array_month = ["1月","2月","3月","4月","5月","6月","7月","8月","9月","10月","11月","12月"];
echo $array_month[7];

$hello = "Hello";
$name = "タジマハルナ";
$world = "'s World";
echo $hello .= $name .= $world;

$tech_boost = "tech ";
$tech_boost .= "boost";
echo $tech_boost;

// 変数の頭に数字は使えない
// 配列の囲みが{}でなく[]

$calendar_2018 = [
  "January" => "1月",
  
// 2月のカンマが大文字

  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  
//6月の等号に>が抜けている

  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  
//10月に""が抜けている

  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];

// 変数の頭に数字は使えない
// December に""が抜けている

echo $calendar_2018["December"];

?>