<?php
	//input
	$nilai      = 40;
	$keterangan = '';

	//proses
	if ($nilai <= 0) {
		$keterangan = "Nilai tidak bisa diproses";
	}elseif ($nilai >=60) {
		$keterangan = "Lulus";
	}else{
		$keterangan = "Tidak lulus";
	}

	//output
	echo "nilai anda = $nilai dengan keterangan = $keterangan";

?>	