<?php
//penggunaan ascending dan descending
// menggunakan while dan for
$angkaarray =  array(3,1,5,7,4,9,12,2 );
echo" menggunakan while dan for<br><br>";
echo "sebelum di sorting adalah ";
foreach ($angkaarray as $key => $array) {
	echo"$array,";
}
// ascending(dari kecil ke besar)
$flag = true;
echo"<br><br>ascending : ";
	while ($flag) {
		$flag = false;
		for ($n=0; $n <(sizeof($angkaarray)-1); $n++) { 
			if($angkaarray [$n] > $angkaarray[$n+1]) {
				$temp = $angkaarray[$n];
				$angkaarray[$n] = $angkaarray[$n+1];
				$angkaarray[$n+1] = $temp;
				$flag = true;

			}
		}
	}
foreach ($angkaarray as $key => $angka) {
		echo"$angka,";
	}
// descending(dari besar ke kecil)
$flag = true;
echo"<br><br>descending : ";
	while ($flag) {
		$flag = false;
		for ($n=0; $n <(sizeof($angkaarray)-1); $n++) { 
			if($angkaarray [$n] < $angkaarray[$n+1]) {
				$temp = $angkaarray[$n];
				$angkaarray[$n] = $angkaarray[$n+1];
				$angkaarray[$n+1] = $temp;
				$flag = true;

			}
		}
	}
foreach ($angkaarray as $key => $angka) {
		echo"$angka,";
	}
?>
