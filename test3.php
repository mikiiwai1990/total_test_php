<?php
// 連想配列
$box=['fruit'=>['apple','grape']];
echo $box['fruit'][1];

echo '<br>';

//2次元配列?
$box1=[['apple','grape'],['青森','山梨']];

echo $box1[1][0];

echo '<br>';

//5次元配列？
$box1=[['apple'=>['青森'=>[2=>[120]]],'grape'=>['山梨'=>[3=>[200]]]]];

echo $box[0][0];

// $fruit =['apple', 'grape'];
// $origin = ['青森', '山梨',];
// $stock = [2, 3,];
// $price = [120, 200,];

// $fruit =['origin'=>'stock'=>[price]];
// $box = [$fruit, $origin, $stock, $price];

// var_dump($box[0][0]) ;

?>