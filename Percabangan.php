<html>
<table>
<form method="post" action="Percabangan.php">
	<tr>
		<td>Masukkan Total Penggunaan air</td>
		<td><input type="text" name="guna"/></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="proses" value="HITUNG" /></td>
	</tr>
</table>
</html>

<?php

if(isset($_POST["proses"])){
	$guna = $_POST["guna"];
	if($guna<=30){
		$biaya = $guna * 150;
		echo "Total penggunaan Anda $guna dengan biaya  $biaya";
	}elseif($guna<=60){
		$biaya = ($guna-30) * 150 + 3600;
		echo "Total penggunaan Anda $guna dengan biaya  $biaya"; 
	}elseif($guna<=90){
		$biaya = ($guna-60) * 190 + 3600 + 4500;
		echo "Total penggunaan Anda $guna dengan biaya  $biaya"; 
	}else{
		$biaya = ($guna-90) * 240 + 3600 + 4500 + 5700; 
		echo "Total penggunaan Anda $guna dengan biaya  $biaya";
	}		
}


?>