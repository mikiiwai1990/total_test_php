<?php
//5次元配列
$fruit =['apple', 'grape', 'banana'];
$origin = ['青森', '山梨', 'フィリピン'];
$stock = [2, 3, 4];
$price = [120, 200, 100];

$box = [$fruit, $origin, $stock, $price];

echo $box[1][0][0][0];

?>