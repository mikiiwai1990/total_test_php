<?php
//素数出力
$max=10000;
for($i=1; $i<=$max; $i++){
    for($j = 2; $j < $i; $j++) {
		if($i % $j === 0) {
			break;
		}
		if($i===$j+1){
			echo $i;
            echo '<br>';
        }
    }
}
?>