<?php
function recursive($kolom, $z){
	global $i;
	recursive2($i, $kolom, $z);
	echo "<br>";
	if (--$kolom > $i) {
		recursive($kolom, $z);
	}
}
function recursive2($y, $kolom, $print){
	global $i;
	if ($y > $i - $kolom) {
		echo "$print";
		recursive2($y - 1, $kolom, $print);
	}
}
$i = 0;
recursive(5, "*");
echo"<br>/*====================================================================================*/<br><br>";
$angka=5;
function recursive3($a,$b,$angka){
	if ($a<=$angka) {
		if ($b<=$a) {
			echo $b;
			$b++;
			recursive3($a,$b,$angka);
		}
		else{
			echo "<br>";
			$a++;
			recursive3($a,1,$angka);
		}
	}
}
	recursive3(1,1,$angka);

?>
