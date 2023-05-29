<?php
for($i = 1; $i<=4; $i++){
    for($j=4; $j>=($i + 1); $j--){
        echo "-";
    }
    for($k=1; $k<=$i; $k++){
        echo "*";
    }
    for($m=2; $m<=$i; $m++){
        echo "+";
    }
    echo "<br>";
}
?>