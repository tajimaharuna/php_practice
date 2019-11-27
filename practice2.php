<?php
$name = "tajimaharuna";
if($name == "tajimaharuna"){
    echo "私はtajimaharunaです";
}else{
    echo "私はtajimaharunaではありません";
}

$total = 0;
for($i = 1; $i <= 10000; $i++){
    $total += $i ;
}
echo $total;

$fruits = array("ringo","mikan","kiwi","ichigo","momo");
foreach($fruits as $fruit){
    echo $fruit;
    echo "\n";
}

// for文の始めの値を定義する //
$start = 1;
// for文の終わりの値を定義する //
$end = 100;

  // 5で割り切れたら{}内を実行する//
for($i = $start ; $i <= $end; $i++){
    if($i % 5 == 0){
        echo $i;
        echo "\n";
    }
}

