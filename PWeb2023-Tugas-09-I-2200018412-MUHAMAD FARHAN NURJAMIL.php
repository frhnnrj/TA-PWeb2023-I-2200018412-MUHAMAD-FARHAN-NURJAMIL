<?php 
	$gaji = 10000000;
	$pajak = 0.1;
	$thp = $gaji - ($gaji*$pajak);

	echo "Gaji sebelum Pajak = $gaji <br>";
	echo "Gaji yang dibawa pulang = Rp.$thp";


	$a = 5;
	$b = 4;

	echo "$a == $b : ". ($a == $b);
	echo "<br>$a != $b : ". ($a !=$b);
	echo "<br>$a > $b : ". ($a >$b);
	echo "<br>$a < $b : ". ($a <$b);
	echo "<br>($a == $b) && ($a >$b) : ". (($a != $b) && ($a >$b));
	echo "<br>($a == $b) || ($a >$b) : ". (($a != $b) || ($a >$b));

 ?>