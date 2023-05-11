<form method="POST" action="">
		<input type="text" name="angka">
		<input type="submit" name="proses" value="proses">
</form>


<?php
	if (isset($_POST['proses'])) {
		$angka = $_POST['angka'];
	
		if ($angka < 6.3 ) {
		$warna = 'yellow';
		}elseif ($angka >= 7.3) {
		$warna = 'green';
		}else{ 
		$warna = 'red';
		}

	//output
	echo "
		<div style='background:$warna;'>
		Angka = $angka
		</div>";
	}
?>	