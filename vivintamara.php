<?php 


# kombinasi dari angka 2, 3, 4, 5, 6 =>  hasil kombinasi terdapat 10 kombinasi.
echo "kombinasi angka 2 sampai 6<br>";
$angka1=2;
$angka2=3;
for ($i=1; $i <=4 ; $i++) { 
echo '  kombinasi ke '.$i.' => '.'('.$angka1,', '.$angka2.')'.'<br>';
$angka2+=1;
if ($angka2==7) {
	$angka2=4;
	$angka1=3;
for ($j=1; $j <=3 ; $j++) { 
		$a=1+$i;
echo '  kombinasi ke '.$a.' => '.'('.$angka1,', '.$angka2.')'.'<br>';
$angka2+=1;
$i+=1;
	}
	if ($angka1==3) {
	$angka2=5;
	$angka1=4;
for ($h=1; $h <=2 ; $h++) { 
		$a+=1;
echo '  kombinasi ke '.$a.' => '.'('.$angka1,', '.$angka2.')'.'<br>';
$angka2+=1;
	}
	if ($angka1==4) {
	$angka2=6;
	$angka1=5;
for ($h=1; $h <=1 ; $h++) { 
		$a+=1;
echo '  kombinasi ke '.$a.' => '.'('.$angka1,', '.$angka2.')'.'<br>';
$angka2+=1;
	}	
}	
}
}
}

//dibuat oleh vivin tamara 25 oktober 2022



 ?>