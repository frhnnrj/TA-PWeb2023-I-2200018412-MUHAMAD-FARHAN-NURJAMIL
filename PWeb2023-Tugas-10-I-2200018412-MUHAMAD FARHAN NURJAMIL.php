<?php
	$nilai=79;

	if($nilai<40){
		echo "Nilai Anda $nilai (E), Anda Tidak Lulus";
	}
	if($nilai>=40 && $nilai<43.75){
		echo "Nilai Anda $nilai (D), Anda Tidak Lulus";
	}
	if($nilai>=43.75 && $nilai<51.24){
		echo "Nilai Anda $nilai (D+), Anda Tidak Lulus";
	}
	if($nilai>=51.25 && $nilai<54.99){
		echo "Nilai Anda $nilai (C-), Anda Lulus";
	}
	if($nilai>=55 && $nilai<57.49){
		echo "Nilai Anda $nilai (C), Anda Lulus";
	}
	if($nilai>=57.50 && $nilai<62.49){
		echo "Nilai Anda $nilai (C+), Anda Lulus";
	}
	if($nilai>=62.50 && $nilai<64.99){
		echo "Nilai Anda $nilai (B-), Anda Lulus";
	}
	if($nilai>=65 && $nilai<68.74){
		echo "Nilai Anda $nilai (B), Anda Lulus";
	}
	if($nilai>=68.75 && $nilai<76.24){
		echo "Nilai Anda $nilai (B+), Anda Lulus";
	}
	if($nilai>=76.25 && $nilai<79.99){
		echo "Nilai Anda $nilai (A-), Anda Lulus";
	}
	if($nilai>=80 && $nilai<100){
		echo "Nilai Anda $nilai (A), Anda Lulus";
	}

 ?>