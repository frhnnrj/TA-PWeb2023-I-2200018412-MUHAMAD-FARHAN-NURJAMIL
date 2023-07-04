<?php

$angka = array(5, 2, 8, 1, 9);

sort($angka);

echo "Array setelah diurutkan (ascending): ";
foreach ($angka as $item) {
    echo $item . " ";
}

echo "<br>";

rsort($angka);

echo "Array setelah diurutkan (descending): ";
foreach ($angka as $item) {
    echo $item . " ";
}

?>
