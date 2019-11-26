<?php
//1.
function times($number){
    return $number *2;
}
echo times(2);

//2.
function plus($a,$b){
    return $a + $b;
}
echo plus(4,6);

$arr = array(1,3,5,7,9);
echo array_product($arr);

//3.
function alltimes($arr){
    $result = 1;
    $num = array(1,3,5,7,9);
    foreach($arr as $num){
        $result *= $num;
    }
    return $result;
}
echo alltimes($arr);


//4.


function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 
// 配列を置きます。
 $arr = array(22,33,44,55,66);

 foreach($arr as $a){
 //どうしたらいいかわからない・・・・
 /*$arrの最大値６６が、$max_numberでおいた最大値[0]の２２より大きかったら、
 $arrの最大値＝$max_numberの数とします。*/
 
   if($max_number<$a)
   $max_number = $a;
 }
 return $max_number;
}
echo max_array($arr);

//5.
//strip_tags
$string = "<h1>Google</h1>";
$result = strip_tags($string);
echo $result;

//array_push
$fruit = array("appale","lemon","orange");
array_push($fruit,"meron","peach");

foreach($fruit as $fruits){
    echo $fruits;
}

//array_merge

$array1 = [1, 2, 3];
$array2 = [10, 20, 30];
$array3 = [100, 200, 300];
$array = array_merge($array1, $array2, $array3);
 
print_r($array);

// time,mktime,date
echo strtotime("2019-11-26 10:25:05");
echo "\n";

echo date('Y/m/d H:i:s',strtotime("2019-11-26 10:25:05"));
echo "\n";

echo mktime(date('H'),date('i'),date('s'),date('n'),date('j'),date('Y'));
echo "\n";

echo time();

?>

