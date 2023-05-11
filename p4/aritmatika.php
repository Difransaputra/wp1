<?php 
	$a = 10;
	$b =3;

	$tambah = $a + $b;
	$kurang = $a - $b;
	$kali 	= $a * $b;
	$bagi	= $a / $b;
	$sisa 	= $a % $b;
	$pangkat= pow($a,  $b);

	echo "a = $a <br> b =$b";
	
	echo "$a + $b = $tambah <br>";
	echo "$a - $b = $kurang <br>";
	echo "$a * $b = $kali <br>";
	echo "$a / $b = $bagi <br>";
	echo "$a % $b = $sisa <br>";
	echo "$a ^ $b = $pangkat<br>";

		// increment
		$a++ ;
		echo "a++ = $a++<br";
		$b-- ;
		echo "b-- = $b--<hr";





/*
	Operator Aritmatika
*/
	$samadengan = $a == $b;
	echo"$a == $b= $samadengan <br>";
	$tidaksamadengan = $a != $b;
	$lbhdarisamadengan = $a >= $b;
	$lbhdari = $a > $b;
	$kurandarisamadengan = $a <= $b;
	$krgdari = $a < $b;
	$negasisamdengan = !($samadengan);

	echo "$a != $b = $tidaksamadengan <br>";
	echo "$a >= $b =$lbhdarisamadengan <br>";
	echo"$a > $b =lbhdari<br>";
	echo" $a <= $b =$kurandarisamadengan<br>";
	echo" $a < $b = $krgdari<br>";
	echo"!($a==$b) = $negasisamdengan<br>";


 ?>

