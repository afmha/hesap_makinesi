<?php

	if($_GET){
		if(isset($_GET['s1']) and isset($_GET['s2'])){
		
			define("SAYI1",$_GET['s1']);
			define("SAYI2",$_GET['s2']);
			$a = SAYI1+SAYI2; //Toplama
			$b = SAYI1-SAYI2; //Çıkarma
			$c = SAYI1*SAYI2; //Çarpma
			$d = SAYI1/SAYI2; //Bölme
			$e = SAYI1%SAYI2; //Modül
			$f2 = SAYI2*100;
			$f = $f2/SAYI1; //Yüzdelik
			$h = array($a,$b,$c,$d,$e,$f);
		
		}
	}
	

?>
