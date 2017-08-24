<?php
<style type="text/css">
	span {
		display: inline-block;
		margin: 5px;
		text-align: center;
		min-width: 20px;
	}
</style>


<?php
echo "PR<br/>";
$jlh = 9; $angka = [0,1];
for ($i=0; $i < $jlh; $i++) { 
	$angka[0] = array_sum($angka);
	for ($j=0; $j < $jlh; $j++) { 
		echo (($j == floor($jlh/2)) || ($i==$j && $j >= floor($jlh/2)) || ($j==$jlh-($i+1) && $j <= floor($jlh/2))) ? "<span>$angka[0]</span>" : "<span>-</span>";
	}
	$angka[1] = $angka[0] - $angka[1];
	echo "<br/>";
}


echo "<br/>POST TEST<br/>";
$jlh = 9; $angka = [0,1];
for ($i=1,$a=$jlh; $i <= $jlh; $i++,$a--) {
	for ($j=1,$b=$jlh; $j <= $jlh; $j++,$b--) {
		if (($i*0+$jlh)-$j){
			echo "$j";
		}
	}
	
	echo "<br/>";
}

echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
for ($i=1,; $i <= $jlh ; $i++) { 
	# code...
}






// echo floor(9/2);


// $jlh = ($jlh % 2) ? $jlh : $jlh-1;
		// if ($j == $cek/2) {
		// 	echo "$angka[0] ";
		// }elseif($i==$j && $j >= $cek/2){
		// 	echo "$angka[0]";
		// }elseif($j==$jlh-($i+1) && $j <= $cek/2){
		// 	echo "$angka[0] ";
		// }else{
		// 	echo "-";
		// }
