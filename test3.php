<?php
//5次元配列
$fruit =['apple', 'grape'];
$origin = ['青森', '山梨',];
$stock = [2, 3,];
$price = [120, 200,];

$box = [$fruit, $origin, $stock, $price];

var_dump($box[0][0]) ;

?>